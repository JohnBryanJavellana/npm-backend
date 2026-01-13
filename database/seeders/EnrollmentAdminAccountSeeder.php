<?php

namespace Database\Seeders;

use App\Http\Controllers\Guest\RegisterController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class EnrollmentAdminAccountSeeder extends Seeder
{
    protected $registerCtrlInstance;

    public function __construct(RegisterController $registerCtrl) {
        $this->registerCtrlInstance = $registerCtrl;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'fname' => "JOHN BRYAN",
                'mname' => "ARGOTA",
                'lname' => "JAVELLANA",
                'email' => "johnbryanjavellana@gmail.com",
                'email_verified_at' => Carbon::now(),
                'birthdate' => Carbon::parse('07-11-2002'),
                'role' => "SUPERADMIN",
                'qr' => "1.png",
                'dark_mode' => "light",
                'password' => bcrypt("123456")
            ]
        ];

        foreach($users as $user) {
            $enrollment_admin_account = new User;
            $enrollment_admin_account->fname = $user['fname'];
            $enrollment_admin_account->mname = $user['mname'];
            $enrollment_admin_account->lname = $user['lname'];
            $enrollment_admin_account->email = $user['email'];
            $enrollment_admin_account->email_verified_at = $user['email_verified_at'];
            $enrollment_admin_account->birthdate = $user['birthdate'];
            $enrollment_admin_account->role = $user['role'];
            $enrollment_admin_account->qr = $user['qr'];
            $enrollment_admin_account->dark_mode = $user['dark_mode'];
            $enrollment_admin_account->password = $user['password'];
            $enrollment_admin_account->save();

            $this->registerCtrlInstance->generateAndSendQR($user, $user['qr']);
        }
    }
}
