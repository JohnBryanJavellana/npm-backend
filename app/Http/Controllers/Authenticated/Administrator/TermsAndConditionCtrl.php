<?php

namespace App\Http\Controllers\Authenticated\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    User,
    TermsAndCondition
};
use App\Utils\{
    TransactionUtil
};

class TermsAndConditionCtrl extends Controller
{
    /**
     * Summary of user_role_to_module
     * @param mixed $request
     * @return string|null
     */
    protected function user_role_to_module($request) {
        $matchedModule = match($request->user()->role) {
            'ADMIN-LIBRARY'    => 'LIBRARY',
            'ADMIN-DORMITORY'  => 'DORMITORY',
            'ADMIN-ENROLLMENT' => 'ENROLLMENT',
            'ADMIN-RA'         => 'RECREATIONAL',
            default => null
        };

        return $matchedModule;
    }

    /**
     * Summary of total_signatures
     * @param mixed $termsAndCondition
     */
    protected function total_signatures($termsAndCondition) {
        $termsAndConditionCount = $termsAndCondition->user_signed_r_a_invoices_count +
            $termsAndCondition->user_signed_enrollment_invoice_count +
            $termsAndCondition->user_signed_library_invoice_count +
            $termsAndCondition->user_signed_dormitory_invoice_count +
            $termsAndCondition->user_signed_book_res_count +
            $termsAndCondition->user_signed_dormitory_tenant_count +
            $termsAndCondition->user_signed_enrolled_course_count +
            $termsAndCondition->user_signed_r_a_request_info_count;

        return $termsAndConditionCount;
    }

    /**
     * Summary of get_terms_and_condition
     * @param Request $request
     */
    public function get_terms_and_condition(Request $request) {
        return TransactionUtil::transact(null,  [], function() use($request) {
            $module = $request->module;
            $matchedModule = $this->user_role_to_module($request);
            $termsAndCondition = TermsAndCondition::query();

            if($module === $matchedModule || \is_null($matchedModule)) {
                $termsAndCondition = $termsAndCondition->where('module', $module)
                    ->withCount([
                        'userSignedRAInvoices',
                        'userSignedEnrollmentInvoice',
                        'userSignedLibraryInvoice',
                        'userSignedDormitoryInvoice',
                        'userSignedBookRes',
                        'userSignedDormitoryTenant',
                        'userSignedEnrolledCourse',
                        'userSignedRARequestInfo'
                    ])
                    ->orderBy('is_active', 'DESC')
                    ->get();

                return response()->json(['termsAndCondition' => $termsAndCondition], 200);
            } else {
                return response()->json(['message' => 'Unauthorized access to this module.'], 500);
            }
        });
    }

    /**
     * Summary of create_or_update_term_and_condition
     * @param Request $request
     */
    public function create_or_update_term_and_condition(Request $request) {
        return TransactionUtil::transact(null,  [], function() use($request) {
            $isPost = $request->httpMethod === "POST";
            $documentId = $request->documentId;
            $module = $request->module;
            $tcContent = $request->tcContent;

            $this_terms_and_condition = $isPost
                ? new TermsAndCondition()
                : TermsAndCondition::where('id', $documentId)
                    ->withCount([
                        'userSignedRAInvoices',
                        'userSignedEnrollmentInvoice',
                        'userSignedLibraryInvoice',
                        'userSignedDormitoryInvoice',
                        'userSignedBookRes',
                        'userSignedDormitoryTenant',
                        'userSignedEnrolledCourse',
                        'userSignedRARequestInfo'
                    ])
                    ->lockForUpdate()
                    ->firstOrFail();

            $totalSignatures = $this->total_signatures($this_terms_and_condition);
            if (!$isPost && $totalSignatures > 0) {
                return response()->json(['message' => "Cannot update. This version has $totalSignatures existing signatures."], 409);
            }

            if (!$isPost) {
                TermsAndCondition::where('module', $module)
                    ->where('id', '!=', $documentId)
                    ->update(['is_active' => false]);
            }

            $this_terms_and_condition->module = $module;
            $this_terms_and_condition->content = $tcContent;
            $this_terms_and_condition->updated_by = $request->user()->id;
            $this_terms_and_condition->save();

            return response()->json(['message' => "You've " . $isPost ? 'created' : 'updated' . " terms and condition successfully!"], 200);
        });
    }

    /**
     * Summary of remove_terms_and_condition
     * @param Request $request
     * @param int $termsAndConditionId
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove_terms_and_condition(Request $request, int $termsAndConditionId) {
        $module = $request->module;
        $matchedModule = $this->user_role_to_module($request);
        $termsAndCondition = TermsAndCondition::query();

        if($module === $matchedModule || \is_null($matchedModule)) {
            $termsAndCondition = $termsAndCondition->where([
                'module' => $module,
                'id' => $termsAndConditionId
            ])->withCount([
                'userSignedRAInvoices',
                'userSignedEnrollmentInvoice',
                'userSignedLibraryInvoice',
                'userSignedDormitoryInvoice',
                'userSignedBookRes',
                'userSignedDormitoryTenant',
                'userSignedEnrolledCourse',
                'userSignedRARequestInfo'
            ])->firstOrFail();

            $totalSignatures = $this->total_signatures($termsAndCondition);
            if ($totalSignatures > 0) {
                return response()->json(['message' => "Cannot remove. This version has $totalSignatures existing signatures."], 409);
            }

            $termsAndCondition->delete();
            return response()->json(['message' => "Removed successfully!"], 200);
        } else {
            return response()->json(['message' => 'Unauthorized access to this module.'], 500);
        }
    }
}
