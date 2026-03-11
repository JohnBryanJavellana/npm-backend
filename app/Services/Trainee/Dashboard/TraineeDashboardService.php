<?php

namespace App\Services\Trainee\Dashboard;

use App\Http\Resources\Trainee\Dashboard\DDormitoryInvoiceResource;
use App\Http\Resources\Trainee\Dashboard\DEnrollmentInvoiceResource;
use App\Http\Resources\Trainee\Dashboard\DLibraryInvoiceResource;
use App\Http\Resources\Trainee\Dashboard\DormitoryTenantResource;
use App\Http\Resources\Trainee\Dashboard\DRecreationalInvoiceResource;
use App\Http\Resources\Trainee\Dashboard\EnrolledCourseResource;
use App\Http\Resources\Trainee\Dashboard\LibraryEventsResource;
use App\Models\{
    BookRes,
    BookReservation,
    DormitoryInvoice,
    DormitoryTenant,
    EnrolledCourse,
    EnrollmentInvoice,
    LibraryInvoice,
    RAInvoices,
    User,
};


class TraineeDashboardService {
    public function __construct(
        protected User $userModel,
        protected EnrolledCourse $enrolledCourseModel
    ) {}

    private function relationConstraint(): \Closure
    {
        return fn($query) => $query->pending()->latest()->limit(5);
    }

    public function getCalendarSchedules(int $userId)
    {
        $user = $this->userModel->query()
        ->select("id")
        ->forUser($userId)
        ->with([
            "trainee_enrolled_courses" => function ($query) use ($userId) {
                $query->forUser($userId)->enrolled()->with([
                    "training",
                    "training.module"
                ]);
            },
            "trainee_dormitory" => function ($query) use ($userId) {
                $query->forUser($userId)->approvedActive()->with([
                    "dormitory_room"
                ]);
            },
            "trainee_library" => function ($query) use ($userId) {
                $query->select("id","user_id","status")->forUser($userId)->active()->hasApprovedBooks()->with([
                    "borrowedBooks" => fn($q) => $q->select("id","book_res_id","book_id","status","from_date","to_date")->activeReservation(),
                    "borrowedBooks.books:id,book_catalog_id",
                    "borrowedBooks.books.catalog:id,book_genre_id,title,isbn"
                ]);
            },
            "userRecreationals"
        ])
        ->first();

        $borrowedBooks = collect($user->trainee_library)->flatMap(fn($library) => $library->borrowedBooks);
        $merged = collect($user->trainee_enrolled_courses)
        ->merge($user->trainee_dormitory)
        ->merge($borrowedBooks)
        ->values();

        return $merged->map(fn($event) => match(true) {
            $event instanceof EnrolledCourse  => new EnrolledCourseResource($event),
            $event instanceof DormitoryTenant  => new DormitoryTenantResource($event),
            $event instanceof BookReservation  => new LibraryEventsResource($event),
        });
    }

    public function getUserInvoices(int $userId)
    {
        $constraint = $this->relationConstraint();

        $userData = $this->userModel->query()
        ->whereKey($userId)
        ->with([
            "enrollment_invoices" => $constraint,
            "dormitory_invoices" => $constraint,
            "library_invoices" => $constraint,
            "recreational_invoices" => $constraint,
        ])
        ->first();

        abort_if(is_null($userData), 404, "user record not found!");

        $merged = collect($userData->enrollment_invoices)
        ->merge($userData->dormitory_invoices)
        ->merge($userData->library_invoices)
        ->merge($userData->recreational_invoices)
        ->values();

        return $merged->map(fn($invoice) => match(true) {
            $invoice instanceof EnrollmentInvoice => new DEnrollmentInvoiceResource($invoice),
            $invoice instanceof DormitoryInvoice => new DDormitoryInvoiceResource($invoice),
            $invoice instanceof LibraryInvoice => new DLibraryInvoiceResource($invoice),
            $invoice instanceof RAInvoices => new DRecreationalInvoiceResource($invoice),
        });
    }

    public function functionName(Request $request)
    {
        
    }
}