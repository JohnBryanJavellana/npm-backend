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

    public function get_terms_and_condition(Request $request) {
        return TransactionUtil::transact(null,  [], function() use($request) {
            $module = $request->module;
            $matchedModule = $this->user_role_to_module($request);
            $termsAndCondition = TermsAndCondition::query();

            if($module === $matchedModule || \is_null($matchedModule)) {

            } else {
                return response()->json(['message' => 'Unauthorized.'], 500);
            }
        });
    }
}
