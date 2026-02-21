<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::fre00dp4XflRPBib',
=======
            '_route' => 'generated::blKAOfsYoKa6arMO',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7KHi4Z69yFi4TTaT',
=======
            '_route' => 'generated::2nUP6FQHZngPJrsS',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vi7WtrOClxx3IqXi',
=======
            '_route' => 'generated::lQON2a0FFn0zLwzE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HSwoTQWUZ687NuTW',
=======
            '_route' => 'generated::O8L7u8OXZEpbI5jf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NxPc6YfvQPZnev3o',
=======
            '_route' => 'generated::32z3rVZI6Y0ijvCq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7OZEmHPo0r5kYwDi',
=======
            '_route' => 'generated::a6Gf7aXjrWt6yElI',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::qc2sd0EKKSkdYz1M',
=======
            '_route' => 'generated::WPvHy7nTdnSQJsfW',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-account/create_or_update_additional_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::cVeF3MoEwsmxSThQ',
=======
            '_route' => 'generated::yVJ3sDuvppoLrxWz',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-account/upload_profile_picture' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::nyV92sTJOku1sgsn',
=======
            '_route' => 'generated::q0OBnDnz6AA0SJgg',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-account/update_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Zjf3ArbHYloYv7X1',
=======
            '_route' => 'generated::kxvlKsi7p55KvasK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-account/get_activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xMB92GROvxW5vg7y',
=======
            '_route' => 'generated::9tpHiaSy70BQC5wt',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-account/get_all_courses_and_schools' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2rD9uhXn2UMP1Qfv',
=======
            '_route' => 'generated::Va5xIB5xCsltzmM1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-account/get_all_requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::KDb4yhrkABX75HDB',
=======
            '_route' => 'generated::hgslpBAThM852GwH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my-account/dropdown_values' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::uS83NToFRTg38fh1',
=======
            '_route' => 'generated::U38CC00g2g3P4PV3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/get_available_trainings' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oj4XhVLO5AdZrS8e',
=======
            '_route' => 'generated::kUMFZ4wVdV391TqR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
            'GET' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/send_enrollment_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Qjm91xyo8hsU5VTu',
=======
            '_route' => 'generated::PWBMGqZIyasYCZ1a',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/send_training_requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JaPZJmkznvxdbGvG',
=======
            '_route' => 'generated::JXyY5xTgvWRyp7sf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/update_enrollment_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xm4WREqtyAFZEcpH',
=======
            '_route' => 'generated::069kXkTYeiRU6or9',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/update_invoice_trainings' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::QP2ndxQEBmzn0KE8',
=======
            '_route' => 'generated::FglV3e18zSjx2fs0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/get_all_trainee_invoices_two' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Berh4DusLWVCxul7',
=======
            '_route' => 'generated::Xfa5qGMt5NumgJjF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/get_applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7PVIE209ko8GyDhX',
=======
            '_route' => 'generated::ELF5iaPC6Q96bEOp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/change_card_color' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ihIiZwlmIa5GMOeP',
=======
            '_route' => 'generated::krvGScnZaI8uaEs4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/course_modules' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::h986D2igdZyuq2Lw',
=======
            '_route' => 'generated::y7AIOPWlxZGDSw7T',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      '/api/enrollment/counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xSK1NdqZu8b5Yoek',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
=======
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      '/api/trainings/get_all_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sMeOwWcBYTGo208h',
=======
            '_route' => 'generated::qqNnieAmm9zYeLzQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainings/get_trainees_enrollment_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RlCmt9J3UZ7EigFs',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainings/get_trainee_trainings' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Co4TPZ4UdYZ8EtY5',
=======
            '_route' => 'generated::fEm53IEItXBivJIa',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/rooms' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::y89PrnMDwR9ZfcDY',
=======
            '_route' => 'generated::4q2ZtJkoo0WC5s1C',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      '/api/dormitories/counts' => 
=======
      '/api/dormitories/testRecords' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dcwcjXBiVRYG4YtP',
=======
            '_route' => 'generated::5ov5rr0YN9FkjitE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
<<<<<<< HEAD
            'GET' => 0,
            'HEAD' => 1,
=======
            'POST' => 0,
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/applied_dormitories' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::kG9S90BVDS1dCuqy',
=======
            '_route' => 'generated::AMBXuKBNt0py2iru',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/check_pending_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eKzZyszJf6B8MYh0',
=======
            '_route' => 'generated::2XgOJgn3Ju4aE64v',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/get_personal_dormitory' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oDE8Jd3Xna7jCmC6',
=======
            '_route' => 'generated::K5ZN0TQaWwae20sF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/request_tenant_room' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jCoBOArbwkfR55u1',
=======
            '_route' => 'generated::zvLkyAurfzDjk6xu',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/update_status_dormitory' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::d7YCbbC4h53ZVuMi',
=======
            '_route' => 'generated::V9gRdJhFdlku1uV0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/get_filtered_dorms' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Sp3LivBcuzhSJcA3',
=======
            '_route' => 'generated::QIg8vdt1gZKh0ARO',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/dormitory_record' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CHxk0jKZTuG7nKiD',
=======
            '_route' => 'generated::TK7f2avZ7qTTsnQq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/inclusion/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CrfQTeLMNYO4DWpe',
=======
            '_route' => 'generated::sT1JsQrNnyRkhr68',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/inclusion/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RK5yIPYyjhnivkpK',
=======
            '_route' => 'generated::Ff5TKElUOd9IhW3h',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/inclusion/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::COJpFjVb1v5bODEJ',
=======
            '_route' => 'generated::3ipFAE075nHQqvrF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FIaBkqDx3vN5wOKJ',
=======
            '_route' => 'generated::ZZDWkJxfPgBRxjoG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/dormitory_payment_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4oE7AoO26s8vtXiC',
=======
            '_route' => 'generated::HLCIAVIQs0euHwQ1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/dormitory_transfer_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::N9wxxPrWM3ie1ooL',
=======
            '_route' => 'generated::Kf1zAbxaqkkXeVbY',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/transfers' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1ZSVdqSGYzeSXkW4',
=======
            '_route' => 'generated::4rHwo9oxPu5jjREo',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/extension_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0w5fgMJARQyfI809',
=======
            '_route' => 'generated::kwcVpRbCU1DGLwIa',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/count_book_reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5c35xYiwcOXL44HM',
=======
            '_route' => 'generated::VqtrucuUPtHRPbrS',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/request_books' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0B5wTlkaWPJhJPN6',
=======
            '_route' => 'generated::yTvg1znbkN1MMQOU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/get_all_books' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::UKneGKNKBI2mU0Ct',
=======
            '_route' => 'generated::4ZzuoMSV1namznoG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/book_overdues' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::9MvkW9dztq1nozia',
=======
            '_route' => 'generated::TorvXP05n2GJP3Mi',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/cancel_book' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::a1LM2w01vOgl7uzC',
=======
            '_route' => 'generated::3dxX46JEACtO4kiq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/pdfs' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::S3a1Lo2bryKUVHQG',
=======
            '_route' => 'generated::lGM5MEHj1EWysBAv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::imqLtuQbUrljjxs9',
=======
            '_route' => 'generated::qAJSBBWvNgfRqfrb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/request/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::c4K2QtTAgsAkhpAb',
=======
            '_route' => 'generated::ruVSiRrn83HSfAFB',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/requests/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5JxIZSEfaIOK3t8B',
=======
            '_route' => 'generated::KdSPIWqqmTl0XmAo',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/requests/extension' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZAzoYyKc6uw1IpIA',
=======
            '_route' => 'generated::oL5lnrtTfWBlPmSf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/requests/available_extension' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::MT2uLlLEBJJzFnrK',
=======
            '_route' => 'generated::otg5AcjJ3FMMfeNl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/requests/submit_extension' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pYkyfeb8wqSsZ3xJ',
=======
            '_route' => 'generated::5f5E1DFEbPM8fubR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/requests/extension/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VJDMdiIco0xB5fda',
=======
            '_route' => 'generated::SyimXM4Xkf8q7TUF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/requests/renew' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Bs8lLG8bOZ1Tgtw7',
=======
            '_route' => 'generated::jhqVMt7lKCCI3Syz',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/renew/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::AmPshs1QKVZLKST1',
=======
            '_route' => 'generated::yvT4Vn7o3ZEQCLxc',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      '/api/libraries/counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u1mcARQLUhTX8k4X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
=======
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      '/api/client_satisfaction/surveys' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::KA1U1m1FmdAoXGgY',
=======
            '_route' => 'generated::8HOZ8p9HkZ2TqKkN',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/client_satisfaction/surveys/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3cJTxhZs1r8iWxkH',
=======
            '_route' => 'generated::fcFsF2KzsPpy0Ekp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoices/get_all_invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::la91QDHqH2f4Ksfz',
=======
            '_route' => 'generated::AD8C0yUHNLZJtljU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoices/view/penalties' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sT5XreBOld9KtAhC',
=======
            '_route' => 'generated::aUYq6n641DBpgWVU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoices/update/penalties' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::faeqMF1axJn8wwJf',
=======
            '_route' => 'generated::pQT9ZBRC47uUUESC',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoices/billing/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Mz2B74r2YvfI83Kf',
=======
            '_route' => 'generated::QOcSY2X1IkbiYDuv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/invoices/enrollment/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::evz5HVFZ2PPfE8ok',
=======
            '_route' => 'generated::eBUwIELvdx8jtDa5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/credits/audits' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vobKvBRghe4rN6gv',
=======
            '_route' => 'generated::BRntl885LJoTC8IY',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/credits/audits/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7EU5h5WWw79xvaNN',
=======
            '_route' => 'generated::UPsgyOZyV5F7x6te',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::nSbCdr58v4iyryGb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/trainings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sQIaLifN0ErZ3XvN',
=======
            '_route' => 'generated::2H2x7TMpekhyVENl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/qr_checker' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::gbVdvU5Z2hCHz1vM',
=======
            '_route' => 'generated::mazPcqS0xrS2UYz1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/equipment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JteMeauCuy29m3SK',
=======
            '_route' => 'generated::0Uoar4mYJW5oKAmn',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/facilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YtdYmr2HvcUQCTao',
=======
            '_route' => 'generated::yKtbAHPGxzVDzB4W',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2DgTMPiIr8ji7BwG',
=======
            '_route' => 'generated::aBlUhSXe8dwxbOd2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/get_recreational_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::n5BmNIDQlaSjwSkq',
=======
            '_route' => 'generated::XZEB016vo6QLRZhc',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/get_recreational_request/get_requested_equipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eKy3OsUZduoXR3hj',
=======
            '_route' => 'generated::us2oGRneu3BBRLHB',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/get_recreational_request/cancel_requested_units' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::SXaWZGXBpzXJA9hD',
=======
            '_route' => 'generated::bVpev5KBKT1c7EzB',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      '/api/recreationals/counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lA2OCJalydk9dSTM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
=======
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      '/api/update_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::en7taEet0rxZ3a9d',
=======
            '_route' => 'generated::kbA3zsZOlQzwLHar',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/get_notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::a9IMKXpIjfL10Zf6',
=======
            '_route' => 'generated::j9I5Fnk3h7uXTwyd',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/change-theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::MJkutDqSb82mIqcb',
=======
            '_route' => 'generated::eBUn8bSHXemZDkkH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ttziT08gQ8pGjuDW',
=======
            '_route' => 'generated::4EHFo6bL1Xgx73tL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/course/remarks' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::MseY8F2BOYsOITvP',
=======
            '_route' => 'generated::6wr8pZrXkPxnX4Ys',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/course/enrollment/count' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::fURGXVsbgdpo9EjH',
=======
            '_route' => 'generated::lmlvmXYpfjVw3DiU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7N1GnfbCUBKY5gKP',
=======
            '_route' => 'generated::rWN3PSzVdzTo1F6U',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_applications/requirement_remark' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IEj8dsD9S43dc0CL',
=======
            '_route' => 'generated::z4QRwsQipu5aIZRj',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_applications/set_training_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YUgG05NmB4MIwEYl',
=======
            '_route' => 'generated::RGO7yfznOCpT9zBD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_applications/set_expired_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::WVdxIT7UbAVD6WB7',
=======
            '_route' => 'generated::QTRahrSFaRjw7c5Q',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_enrolled' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YlwzNJoTpAeI31nH',
=======
            '_route' => 'generated::ZXVVbwWa3YZOplFF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_finished' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wd4fyz5mER4zBKSM',
=======
            '_route' => 'generated::QTFhQ4DovBLz78pT',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/lock_requirement' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZCF64gsfoHbHXwA1',
=======
            '_route' => 'generated::NQYs2q1vcLXmcMw2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_schedules' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JyaAalDJfARuB9LC',
=======
            '_route' => 'generated::TPOrj6hm3B8iMNPA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
=======
      '/api/admin/enrollment/training/schedules/traineelist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pjpq0ftqit0iUQHv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/move_trainees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qlt48coEm9ZtimQK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      '/api/admin/enrollment/create_or_update_schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::PVGW10KhVenRKdXv',
=======
            '_route' => 'generated::6DaxlnFB7z1Xubx0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_modules' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::hKizO10DzST8amg2',
=======
            '_route' => 'generated::a9U9D7fb0Nhm7co4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_module' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::AXGQ34Yi7UXVba8h',
=======
            '_route' => 'generated::uCOiBrrTT8WyAxn2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_module_types' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::hiPhPjTgQiBuIYlM',
=======
            '_route' => 'generated::LfTlw3UV5cwn5GBM',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_module_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NxHas127nQl64a4t',
=======
            '_route' => 'generated::prvaT7hktxsx9B0p',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_certificates' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::yg7kHdtETkTpxsi5',
=======
            '_route' => 'generated::TUfgRgLZAre0hrq7',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_certificate' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YguKmWIoayeId8Ic',
=======
            '_route' => 'generated::Pwo37JoQmMGt0Lb5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rBOWzNaxZdpm5PaU',
=======
            '_route' => 'generated::N8gwfS1PvERIB0Hs',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_requirement' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::m7ixfvZwGfAarbRQ',
=======
            '_route' => 'generated::oBtSDmFcTnqUTYu2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_schools' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::mv5pZT6gSp1R8RwM',
=======
            '_route' => 'generated::UHLIEmSOD8deRqlb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_school' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CQsA47qXbynebdCX',
=======
            '_route' => 'generated::WsVky93vZh6DvRx8',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::hRmRtFhP7pV70rHZ',
=======
            '_route' => 'generated::zgeT8AGmuLwD2JMZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_course' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::chHeZcbjzwOYKHZl',
=======
            '_route' => 'generated::eRsg94HU4piRX1E8',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7PDPXDGVdpVAz1kJ',
=======
            '_route' => 'generated::WGKbGdQ8QBU0nfMF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4nM70Sxc7va2VaTo',
=======
            '_route' => 'generated::eHHWOlqo33za218f',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_sponsors' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::loru325AAfPFYu3c',
=======
            '_route' => 'generated::fA4WKr90QWwNGZ9L',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_sponsor' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::J9izq42yHQabhmpf',
=======
            '_route' => 'generated::Ry39lVmN4HcqhFQp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_licenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Jt0quOJbQCypp6Nh',
=======
            '_route' => 'generated::98FHpjB9pMwSnGsq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_license' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::F0UsAxBrEsSwP79s',
=======
            '_route' => 'generated::CR6Bzio7dE3eIdfH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_ranks' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::6ta6ZWw2vZtC9GwG',
=======
            '_route' => 'generated::GKU0R5dPQLI9GRBm',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_rank' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::C1kW62F2llya5Ffm',
=======
            '_route' => 'generated::UKJwfqwhfNzbgDVq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_facilitators' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::t7JDE0okJmSfLZCF',
=======
            '_route' => 'generated::G1cyvHx81hOBWM0W',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_facilitator' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IOoIJscrxNwkM3ic',
=======
            '_route' => 'generated::hOWRgGoF3mY8GqHA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_training_fees_predata' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::80WSFS76HqBDlbvc',
=======
            '_route' => 'generated::1BjrURf1frM3nBA6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_course_module_fees' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::34L5nKTzcgJI8wHW',
=======
            '_route' => 'generated::yjf3eAluRbfcPy6i',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_course_fee' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vbF6vw8yYw5ahm0g',
=======
            '_route' => 'generated::iixKJEEitlGs9Iua',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_books' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5MINsGAEcNKeHCjS',
=======
            '_route' => 'generated::XmnstdVpwX47if6w',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_pre_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::yioOnZlN3lRSJN2N',
=======
            '_route' => 'generated::YiirAylyhnALq1eA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/create_book_copies' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::teR8JSOuk9tf65Yr',
=======
            '_route' => 'generated::NNAzUCRHUYnjEEUU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/update_reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::PDinJrpgNuoTFjcW',
=======
            '_route' => 'generated::DRwHKFrV882JGWtD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_available_books' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::PnTlntQh0kQfIiPK',
=======
            '_route' => 'generated::2B56E7o2tJMrxhHQ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/create_walkin_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VUCtY8de4licK0if',
=======
            '_route' => 'generated::XlbPGWMJFqqTm94R',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/create_or_update_book' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3c1VFEEISjcQr1XF',
=======
            '_route' => 'generated::APE26NRLmRFJUnyf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Uxii78Arr0g8NYBL',
=======
            '_route' => 'generated::SyPUZwRsl0GOeEcx',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/get_fines' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VL0Bscmcrc0fJVVo',
=======
            '_route' => 'generated::KQzfWVy5JNJfcIjk',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/create_fine' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::b11P41EqPZduq1Hh',
=======
            '_route' => 'generated::IJbSr53Isb51VxdG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/get_book_reservation_that_needs_fine' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::82e8RNNhOYpr3os4',
=======
            '_route' => 'generated::sMXAb1nb4HnLo21r',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/get_prolongation_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pXrxPjFWejox3xNa',
=======
            '_route' => 'generated::0MFZI9cbBiiCM1P6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/get_books_that_protractible' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Gx3pLaRpt1zo1qeV',
=======
            '_route' => 'generated::yYNfm8dHFSKdje7i',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/submit_renewal_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tVI4cfQSmI2mpX0X',
=======
            '_route' => 'generated::KGHgs1CDeI9tWeFW',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/submit_extension_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HRvkSMgMPPoGi0VR',
=======
            '_route' => 'generated::u0V5MbJcQ3uVW7cZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/update_prolongation_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JI4EZPLyPlwC4wwx',
=======
            '_route' => 'generated::YCwwtg1XtBGAl6E3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/count_book_reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3ui2Jzw7CMQPtxEU',
=======
            '_route' => 'generated::Uz8hMQOAOGrkMOqV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_book_reservation/check_for_book_reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3IqPPK0VSMkmMXG0',
=======
            '_route' => 'generated::OUOtsiHSu1PsS24U',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/book_entry/get_book_entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jnXwpxnqxh3Y0PFq',
=======
            '_route' => 'generated::WdlSi6KRcVEeh6ey',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/book_entry/get_active_entries' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::qlRXOU59Rl7wiSfE',
=======
            '_route' => 'generated::Yh8wHixiWKElyVaj',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/book_entry/create_or_update_book_entry' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sJos1BbxKldyUAnL',
=======
            '_route' => 'generated::d8Dp3UTKdAFOdRjy',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0BLwtouZuf042T7G',
=======
            '_route' => 'generated::q4Abh1dnkiJHrSRQ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create_or_update_dormitory' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::aNzK1I1qYQqUpYpf',
=======
            '_route' => 'generated::4DbE9MlUhErQB5aG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create_dormitory_rooms' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::cT0fqCjRYhplSYFm',
=======
            '_route' => 'generated::8hjnfOJb42dxLZWO',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/update_dormitory_room' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::mSbG6eeaAUNVsKRY',
=======
            '_route' => 'generated::8S12ihY6CxfplWpD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create-walk-in-request/get_available_dorms' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JIUQBeXRbo8PK1Z5',
=======
            '_route' => 'generated::p31TwUzQZuV9xnHw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create-walk-in-request/get_available_rooms' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::KuHNKBAuebNn6eYN',
=======
            '_route' => 'generated::yOuqHoxecd34X2Ud',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create-walk-in-request/get_available_supplies' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::BuClwhtD1RQY0yyD',
=======
            '_route' => 'generated::8rucJKcmcj7nFOnZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create-walk-in-request/create_or_update_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::zB2ECHzBqdu1fnws',
=======
            '_route' => 'generated::Y57LpVClpLu2crPM',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_all_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ghN4jsgEWFwazOWy',
=======
            '_route' => 'generated::AcI231YwF1HNEYvN',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_inventories' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5HdxN2KMP569HXdm',
=======
            '_route' => 'generated::Yfqzqqb413ZZkECy',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_inventories/create_dormitory_inventory_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YGPaI0xPXLBUcjFA',
=======
            '_route' => 'generated::czDSvPwozDinVYbw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_inventories/get_dormitory_inventory_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0G1ECqWbgR6st9RK',
=======
            '_route' => 'generated::nK3QdjKhNIzoBTxV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_inventories/update_dormitory_inventory_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vVpLV7FpuPZwoqXw',
=======
            '_route' => 'generated::iOsKU351GXpcXiED',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create_or_update_dormitory_inventory' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::kl3etomZZCdnfc0M',
=======
            '_route' => 'generated::VIQyy9zlFzo8rYDX',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::8oZ0sZ2Rddqy9Wue',
=======
            '_route' => 'generated::lwcTjhhZttt7fPJy',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create_or_update_service' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ID8GZ68DOByXoWBd',
=======
            '_route' => 'generated::Jc9jS1xqjiOMrL1s',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/update_provided_stock_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::zQw59uYe3XsnOZY4',
=======
            '_route' => 'generated::kTD5W4bvjhieNSEZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/update_provided_stock_list' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vP3vT2K2q8Bh0QhC',
=======
            '_route' => 'generated::eU9aiXRCLXOkCwqh',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/count_dorm_reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vj9yWnOr8G0HrxRK',
=======
            '_route' => 'generated::HL9NQUJD2zoW49Fp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_requested_service' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::SgUBFhBJea4wyt6D',
=======
            '_route' => 'generated::2YFqMGAs1Fw9qg8z',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/request_service' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::8Ybg25bThuTc7yIj',
=======
            '_route' => 'generated::MMsO5IkxqgVL8Yc2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/update_requested_service' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ptdXND24OXHCWhhC',
=======
            '_route' => 'generated::zKoyU7AYoZ6ASORK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/set_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HFKjASoSbLqHvhS7',
=======
            '_route' => 'generated::bEJwptiijELdVHnw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_dormitory_charges' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::QgBOjuSPeIZCpL7G',
=======
            '_route' => 'generated::AOUUzMRYBiffVkPv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/created_or_update_dormitory_charge' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::R31zdRq48i506feX',
=======
            '_route' => 'generated::sgD7etPTJuzmHC74',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/user/get_users' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::XuY5KqihVUwOwmNO',
=======
            '_route' => 'generated::sB9wa25gxb5Vo2bR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/user/qr_assignments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rrZcpSAGIAw5pGvU',
=======
            '_route' => 'generated::EyiNqDKcFUaAkxzR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/user/create_or_update_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tfHJQWUJtwz6pCwu',
=======
            '_route' => 'generated::2uYN0S55xsPNA6YK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/employer/get_employers' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::EItyci1M7JcameGW',
=======
            '_route' => 'generated::OSVwLw3vy5mUG6nZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/employer/create_or_update_employer' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::qkk9stfG4VgJFqAu',
=======
            '_route' => 'generated::6bIxFKviS0m8exHi',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/position/get_positions' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Xp3SD44egDxQ8kHF',
=======
            '_route' => 'generated::r71uxM51WGBF7nZm',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/position/create_or_update_position' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wdoMTPY7e2RJF28i',
=======
            '_route' => 'generated::JZAIlPqI8y9e5AoL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/qr-reader/get_qr_readers' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wT13IitWGC8fEsBL',
=======
            '_route' => 'generated::xNyN0fLTPFG5wRxr',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/qr-reader/get_qr_reader_records' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZdGezBEkeI4fdxLd',
=======
            '_route' => 'generated::992El0yuYbqN4azA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/masterlist/qr-reader/create_or_update_qr_reader' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VVG1vjx3u25q9gWx',
=======
            '_route' => 'generated::2yvYgoIkKO9Xk7pp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/get_payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GiaOXPTKGkD4Vnkm',
=======
            '_route' => 'generated::Ch3fsMPq1TVnZke4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/pay-walk-in' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pO0orLdmGwFHg2LH',
=======
            '_route' => 'generated::oOzCncQztYPxCXmJ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/verify_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oXlJsWBbz1yhP8S2',
=======
            '_route' => 'generated::moyN1t33bau6AQXR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/get_charges' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::z3fOA2U1ZtwlryJH',
=======
            '_route' => 'generated::Y2qB0y78TQSXOMtd',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/get_charges/get_charges_predata' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::aTLwIvo2vtmi8Y9k',
=======
            '_route' => 'generated::a6JZyr9jee7DyuWg',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/create_or_update_charge' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wgUN2i0GtZWYP3X2',
=======
            '_route' => 'generated::HIaJ56U6t78NsboI',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/get_charges_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JeF9mDKGwUjk0hk8',
=======
            '_route' => 'generated::LZsInODVuGNdORiH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/create_or_update_charge_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::DPdEpeCau4SYzzNY',
=======
            '_route' => 'generated::BAChWU624CsG5tgv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/get_or_numbers' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RWlwj4RcD3VsEL4s',
=======
            '_route' => 'generated::ajC4pkE02PXQuXPV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/create_or_update_or_number' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Ng7R5az2OMlR58T9',
=======
            '_route' => 'generated::2j6gZcvvKIjRR97E',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_count/get_ra_count' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::66gQvHkIpQeluBzw',
=======
            '_route' => 'generated::fRAaSZoaoao0PW1x',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::E8wfFNp2eIjes0xi',
=======
            '_route' => 'generated::j4WYX8T4PJyTgV5w',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests/get_requested_equipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::uTPJG1ayvfUrphGQ',
=======
            '_route' => 'generated::0oEV5zihGIIZHyzl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests/get_requested_match_equipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LtSMvHw1vqvNUdR4',
=======
            '_route' => 'generated::dZ2fFRcYAd1dgMI5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests/issue_requested_equipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ug9GipLD0IZLPo7V',
=======
            '_route' => 'generated::phGTzMA3Jgz56lGz',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests/update_requested_facility' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::uTyaOt1ZWxcRFStH',
=======
            '_route' => 'generated::GiNbAZBrs52swlZh',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests/update_requested_equipment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oNZz19rTHp8LntvX',
=======
            '_route' => 'generated::aWDWjL3RkES5lPeA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
=======
      '/api/admin/recreational-activity/ra_requests/ra_request_charges' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sEjchXj6SDdbZxzG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests/ra_create_or_update_charge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YZPHPemsdKmYMazX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kB4vcxTLdRUZ6VjA',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      '/api/admin/recreational-activity/ra_equipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GSzj2RbV1XDEMa5V',
=======
            '_route' => 'generated::9zpYhRPcblubVEEt',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_equipment_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::peI2ZXocFg7Mi7bb',
=======
            '_route' => 'generated::G1ptRaSiSurn4al5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_create_or_update_equipment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::WfBb2QxiQeLL8jHY',
=======
            '_route' => 'generated::7WbqeJ2bJ2xg7Tfe',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_equipment_create_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vEkBRQPqhXerdkDl',
=======
            '_route' => 'generated::GluWrqknZ9OBnoDw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_equipment_update_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IKKi2TcJDeKFMfhu',
=======
            '_route' => 'generated::DYq8mhmHuhPcna4t',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_facilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2cKq1cGXC8sy38HL',
=======
            '_route' => 'generated::3vhRydfdyDoMtiuD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_create_or_update_facility' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wElGnNBma6qgjqW7',
=======
            '_route' => 'generated::5dieJWserW5iT3NL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/qrcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::UQNW1aezvC3DMA4t',
=======
            '_route' => 'generated::fOMjw043dIibrkbL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/qrreader/check-in-out' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::D5TeMUuRrdkaFIEA',
=======
            '_route' => 'generated::t4EQrI8Toim5CWuD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/qrreader/get_log_in_out_records' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZYmW5CIw8ydl5Wz0',
=======
            '_route' => 'generated::HZX2te0hCA07PMD8',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/get_charges_predata' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RvmstsuvgxmxtBum',
=======
            '_route' => 'generated::th0R9uEXvxy7PchC',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/get_trainee_enrolled_trainings' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lcQ5qXMYRDYzgaAk',
=======
            '_route' => 'generated::1HKRSMJZn8GaDRD1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/submit-csm' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::OiN94zNuQUMxPgi6',
=======
            '_route' => 'generated::4tWQZBNqMbeM1Ykp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/my-account/update_personal' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eTUa8g3SS6QM5qb4',
=======
            '_route' => 'generated::eVNLx1TzzRe0lYx3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/my-account/update_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pSr0VxwRkTRxxl2F',
=======
            '_route' => 'generated::G3SecqMeK3WOtKG3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/my-account/get_activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HvOBTKUj8AWKoLbQ',
=======
            '_route' => 'generated::7fISolAR89QcRhXw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::9f8pNMTHpoL4lsuW',
=======
            '_route' => 'generated::GUKMbOZdiyyiyfwp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
<<<<<<< HEAD
      0 => '{^(?|/api/(?|my\\-account/get_trainee_general_info/([^/]++)(*:60)|enrollment/(?|get_(?|requirements/([^/]++)(*:109)|applications/([^/]++)(*:138))|remove_training_request/([^/]++)(*:179))|dormitories/(?|applied_dormitories/view/(?|([^/]++)(?|(*:242)|/inclusions(*:261))|getAllHistories/([^/]++)(*:294))|remove_applied_dormitories/([^/]++)(*:338)|inclusion/requests/([^/]++)(*:373)|services/(?|([^/]++)(*:401)|([0-9]+)/create(*:424)|([0-9]+)/cancel(*:447))|transfer_request/cancel/([^/]++)(*:488)|extension_request/cancel/([^/]++)(*:529)|cancel_request/([^/]++)(*:560))|libraries/book_info/([^/]++)(*:597)|client_satisfaction/surveys/delete/([^/]++)(*:648)|invoices/view/([^/]++)(*:678)|trainee\\-info/([^/]++)(*:708)|admin/(?|enrollment/(?|get_applications/remove_training_request/([^/]++)(*:788)|remove_(?|s(?|ch(?|edule/([^/]++)(*:829)|ool/([^/]++)(*:849))|ponsor/([^/]++)(*:873))|module(?|/([^/]++)(*:900)|_type/([^/]++)(*:922))|c(?|ertificate/([^/]++)(*:954)|ourse(?|/([^/]++)(*:979)|_fee/([^/]++)(*:1000)))|voucher/([^/]++)(*:1027)|license/([^/]++)(*:1052)|rank/([^/]++)(*:1074)|facilitator/([^/]++)(*:1103))|training\\-requirements/remove_trequirement/([^/]++)(*:1164))|book(?|s/(?|get_book_(?|info/(?|([^/]++)(*:1214)|get_copies/([^/]++)(*:1242)|remove_copy/([^/]++)(*:1271))|total_reservations/([^/]++)(*:1308)|reservation/remove_fine/([^/]++)(*:1349))|remove_book/([^/]++)(*:1379))|_entry/remove_entry/([^/]++)(*:1417))|dormitory/(?|get_(?|dormitory_(?|rooms/([^/]++)(*:1474)|info/([^/]++)(*:1496))|inventories/remove_dorm_inventory_stock/([^/]++)(*:1554))|cancel_(?|dorm_request/([^/]++)(*:1595)|charge/([^/]++)(*:1619))|remove_(?|room/([^/]++)(*:1652)|dorm_inventory/([^/]++)(*:1684)|service/([^/]++)(*:1709)))|masterlist/(?|user/(?|get_user_(?|basic_info/([^/]++)(*:1773)|activities/([^/]++)(*:1801)|qr_reader_assignments/([^/]++)(*:1840))|remove_(?|qr_reader_assignment/([^/]++)(*:1889)|user/([^/]++)(*:1911)))|employer/remove_employer/([^/]++)(*:1955)|position/remove_position/([^/]++)(*:1997)|qr\\-reader/remove_qr_reader/([^/]++)(*:2042))|cashier/remove_(?|charge(?|/([^/]++)(*:2088)|_category/([^/]++)(*:2115))|or_number/([^/]++)(*:2143))|recreational\\-activity/ra_remove_(?|equipment(?|/([^/]++)(*:2210)|_stock/([^/]++)(*:2234))|facility/([^/]++)(*:2261)))))/?$}sDu',
=======
      0 => '{^(?|/api/(?|my\\-account/get_trainee_general_info/([^/]++)(*:60)|enrollment/(?|get_(?|requirements/([^/]++)(*:109)|applications/([^/]++)(*:138))|remove_training_request/([^/]++)(*:179))|dormitories/(?|applied_dormitories/view/(?|([^/]++)(?|(*:242)|/inclusions(*:261))|getAllHistories/([^/]++)(*:294))|remove_applied_dormitories/([^/]++)(*:338)|inclusion/requests/([^/]++)(*:373)|services/(?|([^/]++)(*:401)|([0-9]+)/create(*:424)|([0-9]+)/cancel(*:447))|transfer_request/cancel/([^/]++)(*:488)|extension_request/cancel/([^/]++)(*:529)|cancel_request/([^/]++)(*:560))|libraries/book_info/([^/]++)(*:597)|client_satisfaction/surveys/delete/([^/]++)(*:648)|invoices/view/([^/]++)(*:678)|traine(?|r/enrollment/courses/([^/]++)(*:724)|e\\-info/([^/]++)(*:748))|admin/(?|enrollment/(?|get_applications/remove_training_request/([^/]++)(*:829)|remove_(?|s(?|ch(?|edule/([^/]++)(*:870)|ool/([^/]++)(*:890))|ponsor/([^/]++)(*:914))|module(?|/([^/]++)(*:941)|_type/([^/]++)(*:963))|c(?|ertificate/([^/]++)(*:995)|ourse(?|/([^/]++)(*:1020)|_fee/([^/]++)(*:1042)))|voucher/([^/]++)(*:1069)|license/([^/]++)(*:1094)|rank/([^/]++)(*:1116)|facilitator/([^/]++)(*:1145))|training\\-requirements/remove_trequirement/([^/]++)(*:1206))|book(?|s/(?|get_book_(?|info/(?|([^/]++)(*:1256)|get_copies/([^/]++)(*:1284)|remove_copy/([^/]++)(*:1313))|total_reservations/([^/]++)(*:1350)|reservation/remove_fine/([^/]++)(*:1391))|remove_book/([^/]++)(*:1421))|_entry/remove_entry/([^/]++)(*:1459))|dormitory/(?|get_(?|dormitory_(?|rooms/([^/]++)(*:1516)|info/([^/]++)(*:1538))|inventories/remove_dorm_inventory_stock/([^/]++)(*:1596))|cancel_(?|dorm_request/([^/]++)(*:1637)|charge/([^/]++)(*:1661))|remove_(?|room/([^/]++)(*:1694)|dorm_inventory/([^/]++)(*:1726)|service/([^/]++)(*:1751)))|masterlist/(?|user/(?|get_user_(?|basic_info/([^/]++)(*:1815)|activities/([^/]++)(*:1843)|qr_reader_assignments/([^/]++)(*:1882))|remove_(?|qr_reader_assignment/([^/]++)(*:1931)|user/([^/]++)(*:1953)))|employer/remove_employer/([^/]++)(*:1997)|position/remove_position/([^/]++)(*:2039)|qr\\-reader/remove_qr_reader/([^/]++)(*:2084))|cashier/remove_(?|charge(?|/([^/]++)(*:2130)|_category/([^/]++)(*:2157))|or_number/([^/]++)(*:2185))|recreational\\-activity/ra_re(?|quests/ra_delete_charge/([^/]++)(*:2258)|move_(?|equipment(?|/([^/]++)(*:2296)|_stock/([^/]++)(*:2320))|facility/([^/]++)(*:2347))))))/?$}sDu',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    ),
    3 => 
    array (
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::jZOGxZGQJjgnMgcB',
=======
            '_route' => 'generated::HQphmEuqAGOdfVo1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0eZmQM1CfjKiMV93',
=======
            '_route' => 'generated::gMxyMEN586pIjfG0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      138 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VsUEWnIxVv9oY97r',
=======
            '_route' => 'generated::oKHY7UDHeCHyUrmF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      179 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7pdevLTSiwL7EeYw',
=======
            '_route' => 'generated::2z25ZBVKjwKDOB0G',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::iVw2p20OxhCvUJSp',
=======
            '_route' => 'generated::KGeVXZKBAy3YzDnE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormitory_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      261 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pY99v1HfJy1SvIJE',
=======
            '_route' => 'generated::59uXTksVWzMC82tD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormitory_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      294 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LT3dby9MNHjTgS8V',
=======
            '_route' => 'generated::lwyvLuIHCT5mYYwT',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormitory_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      338 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sWMHuAUiVl5diGOC',
=======
            '_route' => 'generated::7EvPjOVLpzdvxGNK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormitory_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JDxXtLrvzTmu3GVJ',
=======
            '_route' => 'generated::g2Jylhn19tNh8uH6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormitory_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      401 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sXuKIGiXVBMePqnD',
=======
            '_route' => 'generated::tZ4GUFZubpL7Bq9L',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'document_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eDih98ZShfeHs1FZ',
=======
            '_route' => 'generated::fxDRkk8uUfFgiCiL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'document_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::V7p3mzV2qnuZ8svr',
=======
            '_route' => 'generated::a9AfPr3V9p6HjIgx',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'document_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::219cOmhupNeGu4HS',
=======
            '_route' => 'generated::i17nuQ6eODdNbFOe',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      529 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::SdXCtyHerk2zXIcw',
=======
            '_route' => 'generated::KysWN1HdvoI1UvXl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      560 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sYnDFQy15CXSzeXE',
=======
            '_route' => 'generated::xXEouD3Fa8qbJDcg',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'tenant',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      597 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GfkeelYnJnzS8waf',
=======
            '_route' => 'generated::k38Gi3jg4GfIcYGn',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'book_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      648 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FvJO8BUhXGWm38v0',
=======
            '_route' => 'generated::gKMuMcgwC9dUvtVG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rBVfeFCOMf69k8hk',
=======
            '_route' => 'generated::SUNAxePo8jRaNDcp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      708 => 
=======
      724 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rfOYLxYo9YhOkSWQ',
          ),
          1 => 
          array (
            0 => 'traineeId',
=======
            '_route' => 'generated::NUJDgorlmpL5nGXJ',
          ),
          1 => 
          array (
            0 => 'course',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      788 => 
=======
      748 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::UBq7GCjWl8nVcwrw',
          ),
          1 => 
          array (
            0 => 'training_request_id',
=======
            '_route' => 'generated::a280o2XAbB57Vjtj',
          ),
          1 => 
          array (
            0 => 'traineeId',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      829 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1RexXzbF3tDhCwLa',
=======
            '_route' => 'generated::aW6wX2kfLWHa8Lmo',
          ),
          1 => 
          array (
            0 => 'training_request_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g5EuFiHXkCVnMN9R',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'schedule_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      849 => 
=======
      890 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LWVWKtH6Fvh51Szv',
=======
            '_route' => 'generated::k51j0es9DLMiaKoV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'school_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      873 => 
=======
      914 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::DtG8L8NBtu4d5S5a',
=======
            '_route' => 'generated::jFGc6fhJgMvUKisP',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'sponsor_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      900 => 
=======
      941 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::yI0ssZVOVw3UJGhP',
=======
            '_route' => 'generated::EuPIKeS3CleINcDl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'module_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      922 => 
=======
      963 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::BQQSXCnuakw1rguj',
=======
            '_route' => 'generated::GIDRGTnhAjolbrYi',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'module_type_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      954 => 
=======
      995 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0ctQKGaTDhw4gkbK',
=======
            '_route' => 'generated::ffVSl6YTD5TUTsxL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'certificate_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      979 => 
=======
      1020 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7oo0wqWIy0CnWtFq',
=======
            '_route' => 'generated::DJCVMiC2eTcPLgb1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'course_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1000 => 
=======
      1042 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::kWoka3crvnQHu6Fj',
=======
            '_route' => 'generated::a0is5HqDz4o5puJM',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'course_fee_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1027 => 
=======
      1069 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GKZ87EYjKsxw3Ccv',
=======
            '_route' => 'generated::gy0MKSVyVWL15JOJ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'voucher_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1052 => 
=======
      1094 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::upb7buMwJsAsqXMb',
=======
            '_route' => 'generated::o8emcmyAQURBPSm4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'license_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1074 => 
=======
      1116 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::6KChHsEWeddpfxyq',
=======
            '_route' => 'generated::jG0nwfCbOYmfWYHx',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'rank_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1103 => 
=======
      1145 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::iimNbxrcDt0OiKFq',
=======
            '_route' => 'generated::VPn1RJUKGI58fG3t',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'facilitator_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1164 => 
=======
      1206 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pOSVTDqZLVcml9rM',
=======
            '_route' => 'generated::Sbfj9Aw3rLSaP8ka',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'requirement_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1214 => 
=======
      1256 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZrAfAVA50CkGkAEL',
=======
            '_route' => 'generated::9LSAkSQdzHwb93Rb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'book_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1242 => 
=======
      1284 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::h12Ln9L4mD0IvVGb',
=======
            '_route' => 'generated::yUdc1CMKZqaqIw9I',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'book_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1271 => 
=======
      1313 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::96nEOErhgubqD3WD',
=======
            '_route' => 'generated::tfMzfsjH2WBhqo7V',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'copy_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1308 => 
=======
      1350 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::OasAkYTTyjg3XWR9',
=======
            '_route' => 'generated::CJwXBezbeyTv1JCS',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'book_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1349 => 
=======
      1391 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IiOPGiWwwxcjCbYg',
=======
            '_route' => 'generated::rYHGcFVNomn8LCBZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1379 => 
=======
      1421 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7ktUI9gbRTpK35KK',
=======
            '_route' => 'generated::clalezKkjGC3ka6h',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'book_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1417 => 
=======
      1459 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::990hink0fSqxXg3U',
=======
            '_route' => 'generated::gMo9dgpaF7pfDczL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'entry_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1474 => 
=======
      1516 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::6EOuRhgGdXKtQdth',
=======
            '_route' => 'generated::cvVbfBbAQ3DJfm0a',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormitory_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1496 => 
=======
      1538 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7IXM8nsY1gmdXf6C',
=======
            '_route' => 'generated::la4LCaaZfDE2MpWp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormitory_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1554 => 
=======
      1596 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::E8KbYMxY6aa0gtbb',
=======
            '_route' => 'generated::EGC5p9Cpiuxd1klK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'stock_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1595 => 
=======
      1637 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::uawkbThIZImmxevF',
=======
            '_route' => 'generated::fnqToDczsqDAT32Q',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'dormReqId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1619 => 
=======
      1661 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::KFlcqdeMwb2tlKd1',
=======
            '_route' => 'generated::QnMcKJqnxdeEL7j4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'chargeId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1652 => 
=======
      1694 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lGm3TvVhoGxMkL6J',
=======
            '_route' => 'generated::tDxsIZIM0t93XM9z',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'room_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1684 => 
=======
      1726 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::J2IFZRzNcVTYGATe',
=======
            '_route' => 'generated::GPc9CPI6zzoNJBW7',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'inv_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1709 => 
=======
      1751 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::apjiUIuKRC0A3GHi',
=======
            '_route' => 'generated::VBYh3UVtWaiXH2W6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'service_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1773 => 
=======
      1815 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZiRWWkrhik3ZxuWT',
=======
            '_route' => 'generated::z16AZhaGkVFXZ31t',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1801 => 
=======
      1843 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xfskNbcZX3jYD64H',
=======
            '_route' => 'generated::4uUyRqg7M1WFUjPA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1840 => 
=======
      1882 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::KKyOSXxFnVLUsN7K',
=======
            '_route' => 'generated::kKroy0oufTJZEr4C',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1889 => 
=======
      1931 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IhPrZAtT2ORBZckp',
=======
            '_route' => 'generated::RxPmmGg8rcsDVNA3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'qr_reader_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1911 => 
=======
      1953 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xpqCVWsveSaU0nwh',
=======
            '_route' => 'generated::lZsVJoqKkCxFuM9R',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      1955 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s5f0bR8qkCfkYIyS',
          ),
          1 => 
          array (
            0 => 'employer_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
=======
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      1997 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::PVrJQP7QKDdZbuFq',
=======
            '_route' => 'generated::Nx381SzbI3IvPrYU',
          ),
          1 => 
          array (
            0 => 'employer_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4hpN1YExYWjFCsfb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'position_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      2042 => 
=======
      2084 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::PVi2EwcKsG43uvXL',
=======
            '_route' => 'generated::yP5sHWyvx8XFVa1z',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'qr_reader_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      2088 => 
=======
      2130 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Gc1wqo8EA2Fd0fOP',
=======
            '_route' => 'generated::LSUEwOfDUTbQuLlp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'chargeId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      2115 => 
=======
      2157 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Z8GUeZw9HCBGn8vQ',
=======
            '_route' => 'generated::dieOSvgFmWg36xH1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'fee_category_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      2143 => 
=======
      2185 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CQFudMP29p0UzB5z',
=======
            '_route' => 'generated::AlI74bsBC3QTJeTp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'fee_category_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      2210 => 
=======
      2258 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::QE7cQonm96qDNgXa',
=======
            '_route' => 'generated::shjK7gb6VpcFUDO3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iQRRnb7tTGFa12a4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'equipment_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      2234 => 
=======
      2320 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xOX0EgYDoKD37CJr',
=======
            '_route' => 'generated::EsJt314lZaedTsQE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'equipment_stock_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
<<<<<<< HEAD
      2261 => 
=======
      2347 => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::WSrlWnG5fx75Irew',
=======
            '_route' => 'generated::WTgbuxtZAxcAsarU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
          ),
          1 => 
          array (
            0 => 'facility_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fre00dp4XflRPBib' => 
=======
    'generated::blKAOfsYoKa6arMO' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'auth:api',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
<<<<<<< HEAD
        'as' => 'generated::fre00dp4XflRPBib',
=======
        'as' => 'generated::blKAOfsYoKa6arMO',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7KHi4Z69yFi4TTaT' => 
=======
    'generated::2nUP6FQHZngPJrsS' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Guest\\LoginController@login_user',
        'controller' => 'App\\Http\\Controllers\\Guest\\LoginController@login_user',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7KHi4Z69yFi4TTaT',
=======
        'as' => 'generated::2nUP6FQHZngPJrsS',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vi7WtrOClxx3IqXi' => 
=======
    'generated::lQON2a0FFn0zLwzE' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Guest\\RegisterController@register_user',
        'controller' => 'App\\Http\\Controllers\\Guest\\RegisterController@register_user',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vi7WtrOClxx3IqXi',
=======
        'as' => 'generated::lQON2a0FFn0zLwzE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'signed',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Guest\\EmailVerificationController@verify',
        'controller' => 'App\\Http\\Controllers\\Guest\\EmailVerificationController@verify',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HSwoTQWUZ687NuTW' => 
=======
    'generated::O8L7u8OXZEpbI5jf' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Guest\\ForgotPasswordController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Guest\\ForgotPasswordController@forgotPassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HSwoTQWUZ687NuTW',
=======
        'as' => 'generated::O8L7u8OXZEpbI5jf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NxPc6YfvQPZnev3o' => 
=======
    'generated::32z3rVZI6Y0ijvCq' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Guest\\ForgotPasswordController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Guest\\ForgotPasswordController@resetPassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::NxPc6YfvQPZnev3o',
=======
        'as' => 'generated::32z3rVZI6Y0ijvCq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7OZEmHPo0r5kYwDi' => 
=======
    'generated::a6Gf7aXjrWt6yElI' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:122:"function (\\Illuminate\\Http\\Request $request) {
        return \\Illuminate\\Support\\Facades\\Broadcast::auth($request);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7OZEmHPo0r5kYwDi',
=======
        'as' => 'generated::a6Gf7aXjrWt6yElI',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qc2sd0EKKSkdYz1M' => 
=======
    'generated::WPvHy7nTdnSQJsfW' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:729:"function (\\Illuminate\\Http\\Request $request) {
        $user = \\App\\Models\\User::where(\'id\', $request->incomingId ?? $request->user()->id);

        if ($user && $request->user()->role === "TRAINEE") {
            $user->withCount(\'trainee_enrolled_courses\')
                ->with([
                    \'additional_trainee_info.general_info\',
                    \'additional_trainee_info.contact\',
                    \'additional_trainee_info.latest_shipboard_attainment\',
                    \'additional_trainee_info.trainee_registration_file\',
                    \'additional_trainee_info.trainee_registration_file.requirement\',
                ]);
        }
        return \\response()->json([\'user\' => $user->first()]);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qc2sd0EKKSkdYz1M',
=======
        'as' => 'generated::WPvHy7nTdnSQJsfW',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cVeF3MoEwsmxSThQ' => 
=======
    'generated::yVJ3sDuvppoLrxWz' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my-account/create_or_update_additional_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@create_or_update_additional_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@create_or_update_additional_info',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cVeF3MoEwsmxSThQ',
=======
        'as' => 'generated::yVJ3sDuvppoLrxWz',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nyV92sTJOku1sgsn' => 
=======
    'generated::q0OBnDnz6AA0SJgg' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my-account/upload_profile_picture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@upload_profile_picture',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@upload_profile_picture',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nyV92sTJOku1sgsn',
=======
        'as' => 'generated::q0OBnDnz6AA0SJgg',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jZOGxZGQJjgnMgcB' => 
=======
    'generated::HQphmEuqAGOdfVo1' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-account/get_trainee_general_info/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_trainee_general_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_trainee_general_info',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jZOGxZGQJjgnMgcB',
=======
        'as' => 'generated::HQphmEuqAGOdfVo1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Zjf3ArbHYloYv7X1' => 
=======
    'generated::kxvlKsi7p55KvasK' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my-account/update_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Zjf3ArbHYloYv7X1',
=======
        'as' => 'generated::kxvlKsi7p55KvasK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xMB92GROvxW5vg7y' => 
=======
    'generated::9tpHiaSy70BQC5wt' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-account/get_activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xMB92GROvxW5vg7y',
=======
        'as' => 'generated::9tpHiaSy70BQC5wt',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2rD9uhXn2UMP1Qfv' => 
=======
    'generated::Va5xIB5xCsltzmM1' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-account/get_all_courses_and_schools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_all_courses_and_schools',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_all_courses_and_schools',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2rD9uhXn2UMP1Qfv',
=======
        'as' => 'generated::Va5xIB5xCsltzmM1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KDb4yhrkABX75HDB' => 
=======
    'generated::hgslpBAThM852GwH' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-account/get_all_requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::KDb4yhrkABX75HDB',
=======
        'as' => 'generated::hgslpBAThM852GwH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uS83NToFRTg38fh1' => 
=======
    'generated::U38CC00g2g3P4PV3' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my-account/dropdown_values',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewRanksLicenses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewRanksLicenses',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uS83NToFRTg38fh1',
=======
        'as' => 'generated::U38CC00g2g3P4PV3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0eZmQM1CfjKiMV93' => 
=======
    'generated::gMxyMEN586pIjfG0' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/enrollment/get_requirements/{module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@view_module_requirements_v2',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@view_module_requirements_v2',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0eZmQM1CfjKiMV93',
=======
        'as' => 'generated::gMxyMEN586pIjfG0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7pdevLTSiwL7EeYw' => 
=======
    'generated::2z25ZBVKjwKDOB0G' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/remove_training_request/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@remove_training_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@remove_training_request',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7pdevLTSiwL7EeYw',
=======
        'as' => 'generated::2z25ZBVKjwKDOB0G',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oj4XhVLO5AdZrS8e' => 
=======
    'generated::kUMFZ4wVdV391TqR' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
        1 => 'GET',
        2 => 'HEAD',
      ),
      'uri' => 'api/enrollment/get_available_trainings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_available_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_available_trainings',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oj4XhVLO5AdZrS8e',
=======
        'as' => 'generated::kUMFZ4wVdV391TqR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Qjm91xyo8hsU5VTu' => 
=======
    'generated::PWBMGqZIyasYCZ1a' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/send_enrollment_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_enrollment_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_enrollment_request',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Qjm91xyo8hsU5VTu',
=======
        'as' => 'generated::PWBMGqZIyasYCZ1a',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JaPZJmkznvxdbGvG' => 
=======
    'generated::JXyY5xTgvWRyp7sf' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/send_training_requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_training_requirements',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_training_requirements',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JaPZJmkznvxdbGvG',
=======
        'as' => 'generated::JXyY5xTgvWRyp7sf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xm4WREqtyAFZEcpH' => 
=======
    'generated::069kXkTYeiRU6or9' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/update_enrollment_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_requirements_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_requirements_request',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xm4WREqtyAFZEcpH',
=======
        'as' => 'generated::069kXkTYeiRU6or9',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QP2ndxQEBmzn0KE8' => 
=======
    'generated::FglV3e18zSjx2fs0' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/update_invoice_trainings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_invoice_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_invoice_trainings',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::QP2ndxQEBmzn0KE8',
=======
        'as' => 'generated::FglV3e18zSjx2fs0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Berh4DusLWVCxul7' => 
=======
    'generated::Xfa5qGMt5NumgJjF' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/get_all_trainee_invoices_two',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_all_trainee_invoices_two',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_all_trainee_invoices_two',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Berh4DusLWVCxul7',
=======
        'as' => 'generated::Xfa5qGMt5NumgJjF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7PVIE209ko8GyDhX' => 
=======
    'generated::ELF5iaPC6Q96bEOp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/get_applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_applications',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_applications',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7PVIE209ko8GyDhX',
=======
        'as' => 'generated::ELF5iaPC6Q96bEOp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VsUEWnIxVv9oY97r' => 
=======
    'generated::oKHY7UDHeCHyUrmF' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/get_applications/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_application',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_application',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VsUEWnIxVv9oY97r',
=======
        'as' => 'generated::oKHY7UDHeCHyUrmF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ihIiZwlmIa5GMOeP' => 
=======
    'generated::krvGScnZaI8uaEs4' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/change_card_color',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@change_card_color',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@change_card_color',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ihIiZwlmIa5GMOeP',
=======
        'as' => 'generated::krvGScnZaI8uaEs4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::h986D2igdZyuq2Lw' => 
=======
    'generated::y7AIOPWlxZGDSw7T' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/enrollment/course_modules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@getCourseModule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@getCourseModule',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::h986D2igdZyuq2Lw',
=======
        'as' => 'generated::y7AIOPWlxZGDSw7T',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xSK1NdqZu8b5Yoek' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/enrollment/counts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewEnrolledCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewEnrolledCount',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::xSK1NdqZu8b5Yoek',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sMeOwWcBYTGo208h' => 
=======
    'generated::qqNnieAmm9zYeLzQ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trainings/get_all_courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_all_courses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_all_courses',
        'namespace' => NULL,
        'prefix' => 'api/trainings',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sMeOwWcBYTGo208h',
=======
        'as' => 'generated::qqNnieAmm9zYeLzQ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Co4TPZ4UdYZ8EtY5' => 
=======
    'generated::RlCmt9J3UZ7EigFs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trainings/get_trainees_enrollment_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'EnrollmentCtrl@get_all_schedules',
        'controller' => 'EnrollmentCtrl@get_all_schedules',
        'namespace' => NULL,
        'prefix' => 'api/trainings',
        'where' => 
        array (
        ),
        'as' => 'generated::RlCmt9J3UZ7EigFs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fEm53IEItXBivJIa' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trainings/get_trainee_trainings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_trainee_courses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_trainee_courses',
        'namespace' => NULL,
        'prefix' => 'api/trainings',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Co4TPZ4UdYZ8EtY5',
=======
        'as' => 'generated::fEm53IEItXBivJIa',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::y89PrnMDwR9ZfcDY' => 
=======
    'generated::4q2ZtJkoo0WC5s1C' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewRecommendedRooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewRecommendedRooms',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::y89PrnMDwR9ZfcDY',
=======
        'as' => 'generated::4q2ZtJkoo0WC5s1C',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dcwcjXBiVRYG4YtP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/counts',
=======
    'generated::5ov5rr0YN9FkjitE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/testRecords',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
<<<<<<< HEAD
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewTenantCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewTenantCount',
=======
        'uses' => 'App\\Services\\Trainee\\Dormitory\\DormitoryTransferService@prepareData',
        'controller' => 'App\\Services\\Trainee\\Dormitory\\DormitoryTransferService@prepareData',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dcwcjXBiVRYG4YtP',
=======
        'as' => 'generated::5ov5rr0YN9FkjitE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kG9S90BVDS1dCuqy' => 
=======
    'generated::AMBXuKBNt0py2iru' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/applied_dormitories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_room_application',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_room_application',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kG9S90BVDS1dCuqy',
=======
        'as' => 'generated::AMBXuKBNt0py2iru',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iVw2p20OxhCvUJSp' => 
=======
    'generated::KGeVXZKBAy3YzDnE' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/applied_dormitories/view/{dormitory_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_applied_dormitories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_applied_dormitories',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::iVw2p20OxhCvUJSp',
=======
        'as' => 'generated::KGeVXZKBAy3YzDnE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sWMHuAUiVl5diGOC' => 
=======
    'generated::7EvPjOVLpzdvxGNK' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/remove_applied_dormitories/{dormitory_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@remove_applied_dormitories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@remove_applied_dormitories',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sWMHuAUiVl5diGOC',
=======
        'as' => 'generated::7EvPjOVLpzdvxGNK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eKzZyszJf6B8MYh0' => 
=======
    'generated::2XgOJgn3Ju4aE64v' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/check_pending_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@check_pending_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@check_pending_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eKzZyszJf6B8MYh0',
=======
        'as' => 'generated::2XgOJgn3Ju4aE64v',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oDE8Jd3Xna7jCmC6' => 
=======
    'generated::K5ZN0TQaWwae20sF' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/get_personal_dormitory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_personal_dormitory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_personal_dormitory',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oDE8Jd3Xna7jCmC6',
=======
        'as' => 'generated::K5ZN0TQaWwae20sF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jCoBOArbwkfR55u1' => 
=======
    'generated::zvLkyAurfzDjk6xu' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/request_tenant_room',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_tenant_room',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_tenant_room',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jCoBOArbwkfR55u1',
=======
        'as' => 'generated::zvLkyAurfzDjk6xu',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::d7YCbbC4h53ZVuMi' => 
=======
    'generated::V9gRdJhFdlku1uV0' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/update_status_dormitory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_status_dormitory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_status_dormitory',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::d7YCbbC4h53ZVuMi',
=======
        'as' => 'generated::V9gRdJhFdlku1uV0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Sp3LivBcuzhSJcA3' => 
=======
    'generated::QIg8vdt1gZKh0ARO' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/get_filtered_dorms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_filtered_dorms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_filtered_dorms',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Sp3LivBcuzhSJcA3',
=======
        'as' => 'generated::QIg8vdt1gZKh0ARO',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CHxk0jKZTuG7nKiD' => 
=======
    'generated::TK7f2avZ7qTTsnQq' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/dormitory_record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@dormitory_record',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@dormitory_record',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CHxk0jKZTuG7nKiD',
=======
        'as' => 'generated::TK7f2avZ7qTTsnQq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pY99v1HfJy1SvIJE' => 
=======
    'generated::59uXTksVWzMC82tD' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/applied_dormitories/view/{dormitory_id}/inclusions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pY99v1HfJy1SvIJE',
=======
        'as' => 'generated::59uXTksVWzMC82tD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JDxXtLrvzTmu3GVJ' => 
=======
    'generated::g2Jylhn19tNh8uH6' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/inclusion/requests/{dormitory_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JDxXtLrvzTmu3GVJ',
=======
        'as' => 'generated::g2Jylhn19tNh8uH6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CrfQTeLMNYO4DWpe' => 
=======
    'generated::sT1JsQrNnyRkhr68' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/inclusion/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_available_items',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_available_items',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CrfQTeLMNYO4DWpe',
=======
        'as' => 'generated::sT1JsQrNnyRkhr68',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RK5yIPYyjhnivkpK' => 
=======
    'generated::Ff5TKElUOd9IhW3h' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/inclusion/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_inclusion',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_inclusion',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RK5yIPYyjhnivkpK',
=======
        'as' => 'generated::Ff5TKElUOd9IhW3h',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::COJpFjVb1v5bODEJ' => 
=======
    'generated::3ipFAE075nHQqvrF' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/inclusion/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request_inclusion',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request_inclusion',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::COJpFjVb1v5bODEJ',
=======
        'as' => 'generated::3ipFAE075nHQqvrF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FIaBkqDx3vN5wOKJ' => 
=======
    'generated::ZZDWkJxfPgBRxjoG' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_service',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FIaBkqDx3vN5wOKJ',
=======
        'as' => 'generated::ZZDWkJxfPgBRxjoG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sXuKIGiXVBMePqnD' => 
=======
    'generated::tZ4GUFZubpL7Bq9L' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/services/{document_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@user_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@user_service_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sXuKIGiXVBMePqnD',
=======
        'as' => 'generated::tZ4GUFZubpL7Bq9L',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eDih98ZShfeHs1FZ' => 
=======
    'generated::fxDRkk8uUfFgiCiL' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/services/{document_id}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_service_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eDih98ZShfeHs1FZ',
=======
        'as' => 'generated::fxDRkk8uUfFgiCiL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'document_id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::V7p3mzV2qnuZ8svr' => 
=======
    'generated::a9AfPr3V9p6HjIgx' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/services/{document_id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_service_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::V7p3mzV2qnuZ8svr',
=======
        'as' => 'generated::a9AfPr3V9p6HjIgx',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'document_id' => '[0-9]+',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LT3dby9MNHjTgS8V' => 
=======
    'generated::lwyvLuIHCT5mYYwT' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/applied_dormitories/view/getAllHistories/{dormitory_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@applied_dormitory_histories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@applied_dormitory_histories',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LT3dby9MNHjTgS8V',
=======
        'as' => 'generated::lwyvLuIHCT5mYYwT',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4oE7AoO26s8vtXiC' => 
=======
    'generated::HLCIAVIQs0euHwQ1' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/dormitory_payment_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_dorm_invoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_dorm_invoice',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4oE7AoO26s8vtXiC',
=======
        'as' => 'generated::HLCIAVIQs0euHwQ1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::N9wxxPrWM3ie1ooL' => 
=======
    'generated::Kf1zAbxaqkkXeVbY' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/dormitory_transfer_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_transfer_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_transfer_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::N9wxxPrWM3ie1ooL',
=======
        'as' => 'generated::Kf1zAbxaqkkXeVbY',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::219cOmhupNeGu4HS' => 
=======
    'generated::i17nuQ6eODdNbFOe' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/transfer_request/cancel/{tenant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_transfer_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_transfer_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::219cOmhupNeGu4HS',
=======
        'as' => 'generated::i17nuQ6eODdNbFOe',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1ZSVdqSGYzeSXkW4' => 
=======
    'generated::4rHwo9oxPu5jjREo' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_transfer_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_transfer_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::1ZSVdqSGYzeSXkW4',
=======
        'as' => 'generated::4rHwo9oxPu5jjREo',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0w5fgMJARQyfI809' => 
=======
    'generated::kwcVpRbCU1DGLwIa' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/extension_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_extend_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_extend_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0w5fgMJARQyfI809',
=======
        'as' => 'generated::kwcVpRbCU1DGLwIa',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SdXCtyHerk2zXIcw' => 
=======
    'generated::KysWN1HdvoI1UvXl' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/extension_request/cancel/{tenant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_extend_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_extend_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::SdXCtyHerk2zXIcw',
=======
        'as' => 'generated::KysWN1HdvoI1UvXl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sYnDFQy15CXSzeXE' => 
=======
    'generated::xXEouD3Fa8qbJDcg' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/cancel_request/{tenant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sYnDFQy15CXSzeXE',
=======
        'as' => 'generated::xXEouD3Fa8qbJDcg',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5c35xYiwcOXL44HM' => 
=======
    'generated::VqtrucuUPtHRPbrS' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dormitories/count_book_reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@count_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@count_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5c35xYiwcOXL44HM',
=======
        'as' => 'generated::VqtrucuUPtHRPbrS',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0B5wTlkaWPJhJPN6' => 
=======
    'generated::yTvg1znbkN1MMQOU' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/request_books',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@send_request_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@send_request_book',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0B5wTlkaWPJhJPN6',
=======
        'as' => 'generated::yTvg1znbkN1MMQOU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UKneGKNKBI2mU0Ct' => 
=======
    'generated::4ZzuoMSV1namznoG' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/get_all_books',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_books',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UKneGKNKBI2mU0Ct',
=======
        'as' => 'generated::4ZzuoMSV1namznoG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9MvkW9dztq1nozia' => 
=======
    'generated::TorvXP05n2GJP3Mi' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/libraries/book_overdues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_over_due',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_over_due',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9MvkW9dztq1nozia',
=======
        'as' => 'generated::TorvXP05n2GJP3Mi',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::a1LM2w01vOgl7uzC' => 
=======
    'generated::3dxX46JEACtO4kiq' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/cancel_book',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_book',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::a1LM2w01vOgl7uzC',
=======
        'as' => 'generated::3dxX46JEACtO4kiq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::S3a1Lo2bryKUVHQG' => 
=======
    'generated::lGM5MEHj1EWysBAv' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/libraries/pdfs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@pdf_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@pdf_copies',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::S3a1Lo2bryKUVHQG',
=======
        'as' => 'generated::lGM5MEHj1EWysBAv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GfkeelYnJnzS8waf' => 
=======
    'generated::k38Gi3jg4GfIcYGn' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/libraries/book_info/{book_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_info',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GfkeelYnJnzS8waf',
=======
        'as' => 'generated::k38Gi3jg4GfIcYGn',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::imqLtuQbUrljjxs9' => 
=======
    'generated::qAJSBBWvNgfRqfrb' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_records',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_records',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::imqLtuQbUrljjxs9',
=======
        'as' => 'generated::qAJSBBWvNgfRqfrb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::c4K2QtTAgsAkhpAb' => 
=======
    'generated::ruVSiRrn83HSfAFB' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/request/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_request_details',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_request_details',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::c4K2QtTAgsAkhpAb',
=======
        'as' => 'generated::ruVSiRrn83HSfAFB',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5JxIZSEfaIOK3t8B' => 
=======
    'generated::KdSPIWqqmTl0XmAo' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/libraries/requests/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@count_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@count_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5JxIZSEfaIOK3t8B',
=======
        'as' => 'generated::KdSPIWqqmTl0XmAo',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZAzoYyKc6uw1IpIA' => 
=======
    'generated::oL5lnrtTfWBlPmSf' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/requests/extension',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_extend_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_extend_request',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZAzoYyKc6uw1IpIA',
=======
        'as' => 'generated::oL5lnrtTfWBlPmSf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MT2uLlLEBJJzFnrK' => 
=======
    'generated::otg5AcjJ3FMMfeNl' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/requests/available_extension',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_available_extension',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_available_extension',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MT2uLlLEBJJzFnrK',
=======
        'as' => 'generated::otg5AcjJ3FMMfeNl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pYkyfeb8wqSsZ3xJ' => 
=======
    'generated::5f5E1DFEbPM8fubR' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/requests/submit_extension',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@extend',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@extend',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pYkyfeb8wqSsZ3xJ',
=======
        'as' => 'generated::5f5E1DFEbPM8fubR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VJDMdiIco0xB5fda' => 
=======
    'generated::SyimXM4Xkf8q7TUF' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/requests/extension/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_extend',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_extend',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VJDMdiIco0xB5fda',
=======
        'as' => 'generated::SyimXM4Xkf8q7TUF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Bs8lLG8bOZ1Tgtw7' => 
=======
    'generated::jhqVMt7lKCCI3Syz' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/requests/renew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@renew',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@renew',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Bs8lLG8bOZ1Tgtw7',
=======
        'as' => 'generated::jhqVMt7lKCCI3Syz',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AmPshs1QKVZLKST1' => 
=======
    'generated::yvT4Vn7o3ZEQCLxc' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/libraries/renew/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancelRenew',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancelRenew',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::AmPshs1QKVZLKST1',
=======
        'as' => 'generated::yvT4Vn7o3ZEQCLxc',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::u1mcARQLUhTX8k4X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/libraries/counts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@viewLibRequestCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@viewLibRequestCount',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
        'as' => 'generated::u1mcARQLUhTX8k4X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KA1U1m1FmdAoXGgY' => 
=======
    'generated::8HOZ8p9HkZ2TqKkN' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/client_satisfaction/surveys',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@view',
        'namespace' => NULL,
        'prefix' => 'api/client_satisfaction',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::KA1U1m1FmdAoXGgY',
=======
        'as' => 'generated::8HOZ8p9HkZ2TqKkN',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3cJTxhZs1r8iWxkH' => 
=======
    'generated::fcFsF2KzsPpy0Ekp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/client_satisfaction/surveys/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@createV1',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@createV1',
        'namespace' => NULL,
        'prefix' => 'api/client_satisfaction',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3cJTxhZs1r8iWxkH',
=======
        'as' => 'generated::fcFsF2KzsPpy0Ekp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FvJO8BUhXGWm38v0' => 
=======
    'generated::gKMuMcgwC9dUvtVG' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/client_satisfaction/surveys/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@delete',
        'namespace' => NULL,
        'prefix' => 'api/client_satisfaction',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FvJO8BUhXGWm38v0',
=======
        'as' => 'generated::gKMuMcgwC9dUvtVG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::la91QDHqH2f4Ksfz' => 
=======
    'generated::AD8C0yUHNLZJtljU' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/invoices/get_all_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@get_all_trainee_invoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@get_all_trainee_invoices',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::la91QDHqH2f4Ksfz',
=======
        'as' => 'generated::AD8C0yUHNLZJtljU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sT5XreBOld9KtAhC' => 
=======
    'generated::aUYq6n641DBpgWVU' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/invoices/view/penalties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@library_penalties',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@library_penalties',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sT5XreBOld9KtAhC',
=======
        'as' => 'generated::aUYq6n641DBpgWVU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::faeqMF1axJn8wwJf' => 
=======
    'generated::pQT9ZBRC47uUUESC' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoices/update/penalties',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateLibInvoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateLibInvoice',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::faeqMF1axJn8wwJf',
=======
        'as' => 'generated::pQT9ZBRC47uUUESC',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rBVfeFCOMf69k8hk' => 
=======
    'generated::SUNAxePo8jRaNDcp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/invoices/view/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@view_dormitory_invoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@view_dormitory_invoices',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rBVfeFCOMf69k8hk',
=======
        'as' => 'generated::SUNAxePo8jRaNDcp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Mz2B74r2YvfI83Kf' => 
=======
    'generated::QOcSY2X1IkbiYDuv' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoices/billing/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateDormInvoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateDormInvoice',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Mz2B74r2YvfI83Kf',
=======
        'as' => 'generated::QOcSY2X1IkbiYDuv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::evz5HVFZ2PPfE8ok' => 
=======
    'generated::eBUwIELvdx8jtDa5' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/invoices/enrollment/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateEnrollmentInvoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateEnrollmentInvoice',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::evz5HVFZ2PPfE8ok',
=======
        'as' => 'generated::eBUwIELvdx8jtDa5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vobKvBRghe4rN6gv' => 
=======
    'generated::BRntl885LJoTC8IY' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/credits/audits',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@show',
        'namespace' => NULL,
        'prefix' => 'api/credits',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vobKvBRghe4rN6gv',
=======
        'as' => 'generated::BRntl885LJoTC8IY',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7EU5h5WWw79xvaNN' => 
=======
    'generated::UPsgyOZyV5F7x6te' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/credits/audits/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@store',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@store',
        'namespace' => NULL,
        'prefix' => 'api/credits',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7EU5h5WWw79xvaNN',
=======
        'as' => 'generated::UPsgyOZyV5F7x6te',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nSbCdr58v4iyryGb' => 
=======
    'generated::2H2x7TMpekhyVENl' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trainer/enrollment/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINER',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@view',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nSbCdr58v4iyryGb',
=======
        'as' => 'generated::2H2x7TMpekhyVENl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sQIaLifN0ErZ3XvN' => 
=======
    'generated::NUJDgorlmpL5nGXJ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
<<<<<<< HEAD
      'uri' => 'api/trainer/enrollment/trainings',
=======
      'uri' => 'api/trainer/enrollment/courses/{course}',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINER',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewTrainingSchedules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewTrainingSchedules',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sQIaLifN0ErZ3XvN',
=======
        'as' => 'generated::NUJDgorlmpL5nGXJ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gbVdvU5Z2hCHz1vM' => 
=======
    'generated::mazPcqS0xrS2UYz1' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recreationals/qr_checker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@checkUniqueIdentifier',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@checkUniqueIdentifier',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::gbVdvU5Z2hCHz1vM',
=======
        'as' => 'generated::mazPcqS0xrS2UYz1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JteMeauCuy29m3SK' => 
=======
    'generated::0Uoar4mYJW5oKAmn' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/recreationals/equipment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewEquipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewEquipment',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JteMeauCuy29m3SK',
=======
        'as' => 'generated::0Uoar4mYJW5oKAmn',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YtdYmr2HvcUQCTao' => 
=======
    'generated::yKtbAHPGxzVDzB4W' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/recreationals/facilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YtdYmr2HvcUQCTao',
=======
        'as' => 'generated::yKtbAHPGxzVDzB4W',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2DgTMPiIr8ji7BwG' => 
=======
    'generated::aBlUhSXe8dwxbOd2' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recreationals/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2DgTMPiIr8ji7BwG',
=======
        'as' => 'generated::aBlUhSXe8dwxbOd2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::n5BmNIDQlaSjwSkq' => 
=======
    'generated::XZEB016vo6QLRZhc' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recreationals/get_recreational_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::n5BmNIDQlaSjwSkq',
=======
        'as' => 'generated::XZEB016vo6QLRZhc',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eKy3OsUZduoXR3hj' => 
=======
    'generated::us2oGRneu3BBRLHB' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recreationals/get_recreational_request/get_requested_equipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getRecreationalRequest',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getRecreationalRequest',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eKy3OsUZduoXR3hj',
=======
        'as' => 'generated::us2oGRneu3BBRLHB',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SXaWZGXBpzXJA9hD' => 
=======
    'generated::bVpev5KBKT1c7EzB' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/recreationals/get_recreational_request/cancel_requested_units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@cancelUnitsRequest',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@cancelUnitsRequest',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::SXaWZGXBpzXJA9hD',
=======
        'as' => 'generated::bVpev5KBKT1c7EzB',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lA2OCJalydk9dSTM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/recreationals/counts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewRecRequestCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewRecRequestCount',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
        'as' => 'generated::lA2OCJalydk9dSTM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rfOYLxYo9YhOkSWQ' => 
=======
    'generated::a280o2XAbB57Vjtj' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trainee-info/{traineeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@trainee_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@trainee_info',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rfOYLxYo9YhOkSWQ',
=======
        'as' => 'generated::a280o2XAbB57Vjtj',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::en7taEet0rxZ3a9d' => 
=======
    'generated::kbA3zsZOlQzwLHar' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/update_notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@update_notification',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@update_notification',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::en7taEet0rxZ3a9d',
=======
        'as' => 'generated::kbA3zsZOlQzwLHar',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::a9IMKXpIjfL10Zf6' => 
=======
    'generated::j9I5Fnk3h7uXTwyd' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/get_notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@get_notifications',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@get_notifications',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::a9IMKXpIjfL10Zf6',
=======
        'as' => 'generated::j9I5Fnk3h7uXTwyd',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MJkutDqSb82mIqcb' => 
=======
    'generated::eBUn8bSHXemZDkkH' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/change-theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@change_theme',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@change_theme',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MJkutDqSb82mIqcb',
=======
        'as' => 'generated::eBUn8bSHXemZDkkH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ttziT08gQ8pGjuDW' => 
=======
    'generated::4EHFo6bL1Xgx73tL' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ttziT08gQ8pGjuDW',
=======
        'as' => 'generated::4EHFo6bL1Xgx73tL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MseY8F2BOYsOITvP' => 
=======
    'generated::6wr8pZrXkPxnX4Ys' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/course/remarks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_remarks_count',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_remarks_count',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MseY8F2BOYsOITvP',
=======
        'as' => 'generated::6wr8pZrXkPxnX4Ys',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fURGXVsbgdpo9EjH' => 
=======
    'generated::lmlvmXYpfjVw3DiU' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/course/enrollment/count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrollment_count',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrollment_count',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::fURGXVsbgdpo9EjH',
=======
        'as' => 'generated::lmlvmXYpfjVw3DiU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7N1GnfbCUBKY5gKP' => 
=======
    'generated::rWN3PSzVdzTo1F6U' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/get_applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_applications',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_applications',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7N1GnfbCUBKY5gKP',
=======
        'as' => 'generated::rWN3PSzVdzTo1F6U',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IEj8dsD9S43dc0CL' => 
=======
    'generated::z4QRwsQipu5aIZRj' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/get_applications/requirement_remark',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@requirement_remark',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@requirement_remark',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IEj8dsD9S43dc0CL',
=======
        'as' => 'generated::z4QRwsQipu5aIZRj',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YUgG05NmB4MIwEYl' => 
=======
    'generated::RGO7yfznOCpT9zBD' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/get_applications/set_training_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_training_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_training_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YUgG05NmB4MIwEYl',
=======
        'as' => 'generated::RGO7yfznOCpT9zBD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WVdxIT7UbAVD6WB7' => 
=======
    'generated::QTRahrSFaRjw7c5Q' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/get_applications/set_expired_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_expired_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_expired_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WVdxIT7UbAVD6WB7',
=======
        'as' => 'generated::QTRahrSFaRjw7c5Q',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UBq7GCjWl8nVcwrw' => 
=======
    'generated::aW6wX2kfLWHa8Lmo' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_applications/remove_training_request/{training_request_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_training_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_training_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UBq7GCjWl8nVcwrw',
=======
        'as' => 'generated::aW6wX2kfLWHa8Lmo',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YlwzNJoTpAeI31nH' => 
=======
    'generated::ZXVVbwWa3YZOplFF' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_enrolled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrolled',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrolled',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YlwzNJoTpAeI31nH',
=======
        'as' => 'generated::ZXVVbwWa3YZOplFF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wd4fyz5mER4zBKSM' => 
=======
    'generated::QTFhQ4DovBLz78pT' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_finished',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_finished',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_finished',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wd4fyz5mER4zBKSM',
=======
        'as' => 'generated::QTFhQ4DovBLz78pT',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZCF64gsfoHbHXwA1' => 
=======
    'generated::NQYs2q1vcLXmcMw2' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/lock_requirement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@lock_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@lock_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZCF64gsfoHbHXwA1',
=======
        'as' => 'generated::NQYs2q1vcLXmcMw2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JyaAalDJfARuB9LC' => 
=======
    'generated::TPOrj6hm3B8iMNPA' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_schedules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schedules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schedules',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JyaAalDJfARuB9LC',
=======
        'as' => 'generated::TPOrj6hm3B8iMNPA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PVGW10KhVenRKdXv' => 
=======
    'generated::pjpq0ftqit0iUQHv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/training/schedules/traineelist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_trainees_by_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_trainees_by_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::pjpq0ftqit0iUQHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qlt48coEm9ZtimQK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/move_trainees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@move_trainees',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@move_trainees',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::Qlt48coEm9ZtimQK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6DaxlnFB7z1Xubx0' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::PVGW10KhVenRKdXv',
=======
        'as' => 'generated::6DaxlnFB7z1Xubx0',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1RexXzbF3tDhCwLa' => 
=======
    'generated::g5EuFiHXkCVnMN9R' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_schedule/{schedule_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::1RexXzbF3tDhCwLa',
=======
        'as' => 'generated::g5EuFiHXkCVnMN9R',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hKizO10DzST8amg2' => 
=======
    'generated::a9U9D7fb0Nhm7co4' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_modules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_modules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_modules',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hKizO10DzST8amg2',
=======
        'as' => 'generated::a9U9D7fb0Nhm7co4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AXGQ34Yi7UXVba8h' => 
=======
    'generated::uCOiBrrTT8WyAxn2' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::AXGQ34Yi7UXVba8h',
=======
        'as' => 'generated::uCOiBrrTT8WyAxn2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yI0ssZVOVw3UJGhP' => 
=======
    'generated::EuPIKeS3CleINcDl' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_module/{module_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yI0ssZVOVw3UJGhP',
=======
        'as' => 'generated::EuPIKeS3CleINcDl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hiPhPjTgQiBuIYlM' => 
=======
    'generated::LfTlw3UV5cwn5GBM' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_module_types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_module_types',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_module_types',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hiPhPjTgQiBuIYlM',
=======
        'as' => 'generated::LfTlw3UV5cwn5GBM',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NxHas127nQl64a4t' => 
=======
    'generated::prvaT7hktxsx9B0p' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_module_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module_type',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module_type',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::NxHas127nQl64a4t',
=======
        'as' => 'generated::prvaT7hktxsx9B0p',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BQQSXCnuakw1rguj' => 
=======
    'generated::GIDRGTnhAjolbrYi' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_module_type/{module_type_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module_type',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module_type',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BQQSXCnuakw1rguj',
=======
        'as' => 'generated::GIDRGTnhAjolbrYi',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yg7kHdtETkTpxsi5' => 
=======
    'generated::TUfgRgLZAre0hrq7' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_certificates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_certificates',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_certificates',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yg7kHdtETkTpxsi5',
=======
        'as' => 'generated::TUfgRgLZAre0hrq7',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YguKmWIoayeId8Ic' => 
=======
    'generated::Pwo37JoQmMGt0Lb5' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_certificate',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_certificate',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YguKmWIoayeId8Ic',
=======
        'as' => 'generated::Pwo37JoQmMGt0Lb5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0ctQKGaTDhw4gkbK' => 
=======
    'generated::ffVSl6YTD5TUTsxL' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_certificate/{certificate_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_certificate',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_certificate',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0ctQKGaTDhw4gkbK',
=======
        'as' => 'generated::ffVSl6YTD5TUTsxL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rBOWzNaxZdpm5PaU' => 
=======
    'generated::N8gwfS1PvERIB0Hs' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_requirements',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_requirements',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rBOWzNaxZdpm5PaU',
=======
        'as' => 'generated::N8gwfS1PvERIB0Hs',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::m7ixfvZwGfAarbRQ' => 
=======
    'generated::oBtSDmFcTnqUTYu2' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_requirement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::m7ixfvZwGfAarbRQ',
=======
        'as' => 'generated::oBtSDmFcTnqUTYu2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pOSVTDqZLVcml9rM' => 
=======
    'generated::Sbfj9Aw3rLSaP8ka' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/training-requirements/remove_trequirement/{requirement_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pOSVTDqZLVcml9rM',
=======
        'as' => 'generated::Sbfj9Aw3rLSaP8ka',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mv5pZT6gSp1R8RwM' => 
=======
    'generated::UHLIEmSOD8deRqlb' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_schools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schools',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schools',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mv5pZT6gSp1R8RwM',
=======
        'as' => 'generated::UHLIEmSOD8deRqlb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CQsA47qXbynebdCX' => 
=======
    'generated::WsVky93vZh6DvRx8' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_school',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_school',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_school',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CQsA47qXbynebdCX',
=======
        'as' => 'generated::WsVky93vZh6DvRx8',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LWVWKtH6Fvh51Szv' => 
=======
    'generated::k51j0es9DLMiaKoV' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_school/{school_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_school',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_school',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LWVWKtH6Fvh51Szv',
=======
        'as' => 'generated::k51j0es9DLMiaKoV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hRmRtFhP7pV70rHZ' => 
=======
    'generated::zgeT8AGmuLwD2JMZ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_courses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_courses',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hRmRtFhP7pV70rHZ',
=======
        'as' => 'generated::zgeT8AGmuLwD2JMZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::chHeZcbjzwOYKHZl' => 
=======
    'generated::eRsg94HU4piRX1E8' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_course',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::chHeZcbjzwOYKHZl',
=======
        'as' => 'generated::eRsg94HU4piRX1E8',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7oo0wqWIy0CnWtFq' => 
=======
    'generated::DJCVMiC2eTcPLgb1' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_course/{course_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7oo0wqWIy0CnWtFq',
=======
        'as' => 'generated::DJCVMiC2eTcPLgb1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7PDPXDGVdpVAz1kJ' => 
=======
    'generated::WGKbGdQ8QBU0nfMF' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_vouchers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_vouchers',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7PDPXDGVdpVAz1kJ',
=======
        'as' => 'generated::WGKbGdQ8QBU0nfMF',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4nM70Sxc7va2VaTo' => 
=======
    'generated::eHHWOlqo33za218f' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_voucher',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_voucher',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4nM70Sxc7va2VaTo',
=======
        'as' => 'generated::eHHWOlqo33za218f',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GKZ87EYjKsxw3Ccv' => 
=======
    'generated::gy0MKSVyVWL15JOJ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_voucher/{voucher_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_voucher',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_voucher',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GKZ87EYjKsxw3Ccv',
=======
        'as' => 'generated::gy0MKSVyVWL15JOJ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::loru325AAfPFYu3c' => 
=======
    'generated::fA4WKr90QWwNGZ9L' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_sponsors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_sponsors',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_sponsors',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::loru325AAfPFYu3c',
=======
        'as' => 'generated::fA4WKr90QWwNGZ9L',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::J9izq42yHQabhmpf' => 
=======
    'generated::Ry39lVmN4HcqhFQp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_sponsor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_sponsor',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_sponsor',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::J9izq42yHQabhmpf',
=======
        'as' => 'generated::Ry39lVmN4HcqhFQp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DtG8L8NBtu4d5S5a' => 
=======
    'generated::jFGc6fhJgMvUKisP' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_sponsor/{sponsor_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_sponsor',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_sponsor',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DtG8L8NBtu4d5S5a',
=======
        'as' => 'generated::jFGc6fhJgMvUKisP',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Jt0quOJbQCypp6Nh' => 
=======
    'generated::98FHpjB9pMwSnGsq' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_licenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_licenses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_licenses',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Jt0quOJbQCypp6Nh',
=======
        'as' => 'generated::98FHpjB9pMwSnGsq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::F0UsAxBrEsSwP79s' => 
=======
    'generated::CR6Bzio7dE3eIdfH' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_license',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_license',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_license',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::F0UsAxBrEsSwP79s',
=======
        'as' => 'generated::CR6Bzio7dE3eIdfH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::upb7buMwJsAsqXMb' => 
=======
    'generated::o8emcmyAQURBPSm4' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_license/{license_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_license',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_license',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::upb7buMwJsAsqXMb',
=======
        'as' => 'generated::o8emcmyAQURBPSm4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6ta6ZWw2vZtC9GwG' => 
=======
    'generated::GKU0R5dPQLI9GRBm' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_ranks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_ranks',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_ranks',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6ta6ZWw2vZtC9GwG',
=======
        'as' => 'generated::GKU0R5dPQLI9GRBm',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::C1kW62F2llya5Ffm' => 
=======
    'generated::UKJwfqwhfNzbgDVq' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_rank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_rank',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_rank',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::C1kW62F2llya5Ffm',
=======
        'as' => 'generated::UKJwfqwhfNzbgDVq',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6KChHsEWeddpfxyq' => 
=======
    'generated::jG0nwfCbOYmfWYHx' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_rank/{rank_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_rank',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_rank',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6KChHsEWeddpfxyq',
=======
        'as' => 'generated::jG0nwfCbOYmfWYHx',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::t7JDE0okJmSfLZCF' => 
=======
    'generated::G1cyvHx81hOBWM0W' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_facilitators',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_facilitators',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_facilitators',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::t7JDE0okJmSfLZCF',
=======
        'as' => 'generated::G1cyvHx81hOBWM0W',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IOoIJscrxNwkM3ic' => 
=======
    'generated::hOWRgGoF3mY8GqHA' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_facilitator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_facilitator',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_facilitator',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IOoIJscrxNwkM3ic',
=======
        'as' => 'generated::hOWRgGoF3mY8GqHA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iimNbxrcDt0OiKFq' => 
=======
    'generated::VPn1RJUKGI58fG3t' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_facilitator/{facilitator_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_facilitator',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_facilitator',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::iimNbxrcDt0OiKFq',
=======
        'as' => 'generated::VPn1RJUKGI58fG3t',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::80WSFS76HqBDlbvc' => 
=======
    'generated::1BjrURf1frM3nBA6' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_training_fees_predata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_training_fees_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_training_fees_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::80WSFS76HqBDlbvc',
=======
        'as' => 'generated::1BjrURf1frM3nBA6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::34L5nKTzcgJI8wHW' => 
=======
    'generated::yjf3eAluRbfcPy6i' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/enrollment/get_course_module_fees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_course_module_fees',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_course_module_fees',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::34L5nKTzcgJI8wHW',
=======
        'as' => 'generated::yjf3eAluRbfcPy6i',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vbF6vw8yYw5ahm0g' => 
=======
    'generated::iixKJEEitlGs9Iua' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_course_fee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course_fee',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course_fee',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vbF6vw8yYw5ahm0g',
=======
        'as' => 'generated::iixKJEEitlGs9Iua',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kWoka3crvnQHu6Fj' => 
=======
    'generated::a0is5HqDz4o5puJM' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_course_fee/{course_fee_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course_fee',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course_fee',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kWoka3crvnQHu6Fj',
=======
        'as' => 'generated::a0is5HqDz4o5puJM',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5MINsGAEcNKeHCjS' => 
=======
    'generated::XmnstdVpwX47if6w' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/books/get_books',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5MINsGAEcNKeHCjS',
=======
        'as' => 'generated::XmnstdVpwX47if6w',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yioOnZlN3lRSJN2N' => 
=======
    'generated::YiirAylyhnALq1eA' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/books/get_pre_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_pre_data',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_pre_data',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yioOnZlN3lRSJN2N',
=======
        'as' => 'generated::YiirAylyhnALq1eA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZrAfAVA50CkGkAEL' => 
=======
    'generated::9LSAkSQdzHwb93Rb' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/admin/books/get_book_info/{book_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZrAfAVA50CkGkAEL',
=======
        'as' => 'generated::9LSAkSQdzHwb93Rb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::h12Ln9L4mD0IvVGb' => 
=======
    'generated::yUdc1CMKZqaqIw9I' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/books/get_book_info/get_copies/{book_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_copies',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::h12Ln9L4mD0IvVGb',
=======
        'as' => 'generated::yUdc1CMKZqaqIw9I',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::teR8JSOuk9tf65Yr' => 
=======
    'generated::NNAzUCRHUYnjEEUU' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/create_book_copies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_book_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_book_copies',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::teR8JSOuk9tf65Yr',
=======
        'as' => 'generated::NNAzUCRHUYnjEEUU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OasAkYTTyjg3XWR9' => 
=======
    'generated::CJwXBezbeyTv1JCS' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/books/get_book_total_reservations/{book_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_total_reservations',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_total_reservations',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::OasAkYTTyjg3XWR9',
=======
        'as' => 'generated::CJwXBezbeyTv1JCS',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PDinJrpgNuoTFjcW' => 
=======
    'generated::DRwHKFrV882JGWtD' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/update_reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::PDinJrpgNuoTFjcW',
=======
        'as' => 'generated::DRwHKFrV882JGWtD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PnTlntQh0kQfIiPK' => 
=======
    'generated::2B56E7o2tJMrxhHQ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_available_books',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_available_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_available_books',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::PnTlntQh0kQfIiPK',
=======
        'as' => 'generated::2B56E7o2tJMrxhHQ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VUCtY8de4licK0if' => 
=======
    'generated::XlbPGWMJFqqTm94R' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/create_walkin_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_walkin_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_walkin_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VUCtY8de4licK0if',
=======
        'as' => 'generated::XlbPGWMJFqqTm94R',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3c1VFEEISjcQr1XF' => 
=======
    'generated::APE26NRLmRFJUnyf' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/create_or_update_book',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3c1VFEEISjcQr1XF',
=======
        'as' => 'generated::APE26NRLmRFJUnyf',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Uxii78Arr0g8NYBL' => 
=======
    'generated::SyPUZwRsl0GOeEcx' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/admin/books/get_book_reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Uxii78Arr0g8NYBL',
=======
        'as' => 'generated::SyPUZwRsl0GOeEcx',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VL0Bscmcrc0fJVVo' => 
=======
    'generated::KQzfWVy5JNJfcIjk' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/get_fines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_fines',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_fines',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VL0Bscmcrc0fJVVo',
=======
        'as' => 'generated::KQzfWVy5JNJfcIjk',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::b11P41EqPZduq1Hh' => 
=======
    'generated::IJbSr53Isb51VxdG' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/create_fine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::b11P41EqPZduq1Hh',
=======
        'as' => 'generated::IJbSr53Isb51VxdG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IiOPGiWwwxcjCbYg' => 
=======
    'generated::rYHGcFVNomn8LCBZ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/books/get_book_reservation/remove_fine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IiOPGiWwwxcjCbYg',
=======
        'as' => 'generated::rYHGcFVNomn8LCBZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::82e8RNNhOYpr3os4' => 
=======
    'generated::sMXAb1nb4HnLo21r' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/get_book_reservation_that_needs_fine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation_that_needs_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation_that_needs_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::82e8RNNhOYpr3os4',
=======
        'as' => 'generated::sMXAb1nb4HnLo21r',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pXrxPjFWejox3xNa' => 
=======
    'generated::0MFZI9cbBiiCM1P6' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/get_prolongation_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_prolongation_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_prolongation_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pXrxPjFWejox3xNa',
=======
        'as' => 'generated::0MFZI9cbBiiCM1P6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Gx3pLaRpt1zo1qeV' => 
=======
    'generated::yYNfm8dHFSKdje7i' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/get_books_that_protractible',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books_that_protractible',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books_that_protractible',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Gx3pLaRpt1zo1qeV',
=======
        'as' => 'generated::yYNfm8dHFSKdje7i',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tVI4cfQSmI2mpX0X' => 
=======
    'generated::KGHgs1CDeI9tWeFW' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/submit_renewal_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_renewal_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_renewal_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tVI4cfQSmI2mpX0X',
=======
        'as' => 'generated::KGHgs1CDeI9tWeFW',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HRvkSMgMPPoGi0VR' => 
=======
    'generated::u0V5MbJcQ3uVW7cZ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/submit_extension_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_extension_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_extension_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HRvkSMgMPPoGi0VR',
=======
        'as' => 'generated::u0V5MbJcQ3uVW7cZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JI4EZPLyPlwC4wwx' => 
=======
    'generated::YCwwtg1XtBGAl6E3' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/update_prolongation_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_prolongation_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_prolongation_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JI4EZPLyPlwC4wwx',
=======
        'as' => 'generated::YCwwtg1XtBGAl6E3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3ui2Jzw7CMQPtxEU' => 
=======
    'generated::Uz8hMQOAOGrkMOqV' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/count_book_reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@count_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@count_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3ui2Jzw7CMQPtxEU',
=======
        'as' => 'generated::Uz8hMQOAOGrkMOqV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3IqPPK0VSMkmMXG0' => 
=======
    'generated::OUOtsiHSu1PsS24U' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_reservation/check_for_book_reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@check_for_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@check_for_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3IqPPK0VSMkmMXG0',
=======
        'as' => 'generated::OUOtsiHSu1PsS24U',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::96nEOErhgubqD3WD' => 
=======
    'generated::tfMzfsjH2WBhqo7V' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/books/get_book_info/remove_copy/{copy_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_copy',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_copy',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::96nEOErhgubqD3WD',
=======
        'as' => 'generated::tfMzfsjH2WBhqo7V',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7ktUI9gbRTpK35KK' => 
=======
    'generated::clalezKkjGC3ka6h' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/books/remove_book/{book_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_book',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7ktUI9gbRTpK35KK',
=======
        'as' => 'generated::clalezKkjGC3ka6h',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jnXwpxnqxh3Y0PFq' => 
=======
    'generated::WdlSi6KRcVEeh6ey' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/book_entry/get_book_entries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_entries',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_entries',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jnXwpxnqxh3Y0PFq',
=======
        'as' => 'generated::WdlSi6KRcVEeh6ey',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qlRXOU59Rl7wiSfE' => 
=======
    'generated::Yh8wHixiWKElyVaj' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/book_entry/get_active_entries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_active_entries',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_active_entries',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qlRXOU59Rl7wiSfE',
=======
        'as' => 'generated::Yh8wHixiWKElyVaj',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sJos1BbxKldyUAnL' => 
=======
    'generated::d8Dp3UTKdAFOdRjy' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/book_entry/create_or_update_book_entry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book_entry',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book_entry',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sJos1BbxKldyUAnL',
=======
        'as' => 'generated::d8Dp3UTKdAFOdRjy',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::990hink0fSqxXg3U' => 
=======
    'generated::gMo9dgpaF7pfDczL' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/book_entry/remove_entry/{entry_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_entry',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_entry',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::990hink0fSqxXg3U',
=======
        'as' => 'generated::gMo9dgpaF7pfDczL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0BLwtouZuf042T7G' => 
=======
    'generated::q4Abh1dnkiJHrSRQ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@dormitories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@dormitories',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0BLwtouZuf042T7G',
=======
        'as' => 'generated::q4Abh1dnkiJHrSRQ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6EOuRhgGdXKtQdth' => 
=======
    'generated::cvVbfBbAQ3DJfm0a' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/get_dormitory_rooms/{dormitory_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6EOuRhgGdXKtQdth',
=======
        'as' => 'generated::cvVbfBbAQ3DJfm0a',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7IXM8nsY1gmdXf6C' => 
=======
    'generated::la4LCaaZfDE2MpWp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/get_dormitory_info/{dormitory_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7IXM8nsY1gmdXf6C',
=======
        'as' => 'generated::la4LCaaZfDE2MpWp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aNzK1I1qYQqUpYpf' => 
=======
    'generated::4DbE9MlUhErQB5aG' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create_or_update_dormitory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aNzK1I1qYQqUpYpf',
=======
        'as' => 'generated::4DbE9MlUhErQB5aG',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cT0fqCjRYhplSYFm' => 
=======
    'generated::8hjnfOJb42dxLZWO' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create_dormitory_rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cT0fqCjRYhplSYFm',
=======
        'as' => 'generated::8hjnfOJb42dxLZWO',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mSbG6eeaAUNVsKRY' => 
=======
    'generated::8S12ihY6CxfplWpD' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/update_dormitory_room',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_dormitory_room',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_dormitory_room',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::mSbG6eeaAUNVsKRY',
=======
        'as' => 'generated::8S12ihY6CxfplWpD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JIUQBeXRbo8PK1Z5' => 
=======
    'generated::p31TwUzQZuV9xnHw' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create-walk-in-request/get_available_dorms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_dorms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_dorms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JIUQBeXRbo8PK1Z5',
=======
        'as' => 'generated::p31TwUzQZuV9xnHw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KuHNKBAuebNn6eYN' => 
=======
    'generated::yOuqHoxecd34X2Ud' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create-walk-in-request/get_available_rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::KuHNKBAuebNn6eYN',
=======
        'as' => 'generated::yOuqHoxecd34X2Ud',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BuClwhtD1RQY0yyD' => 
=======
    'generated::8rucJKcmcj7nFOnZ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create-walk-in-request/get_available_supplies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_supplies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_supplies',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BuClwhtD1RQY0yyD',
=======
        'as' => 'generated::8rucJKcmcj7nFOnZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zB2ECHzBqdu1fnws' => 
=======
    'generated::Y57LpVClpLu2crPM' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create-walk-in-request/create_or_update_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zB2ECHzBqdu1fnws',
=======
        'as' => 'generated::Y57LpVClpLu2crPM',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ghN4jsgEWFwazOWy' => 
=======
    'generated::AcI231YwF1HNEYvN' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_all_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_all_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_all_requests',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ghN4jsgEWFwazOWy',
=======
        'as' => 'generated::AcI231YwF1HNEYvN',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uawkbThIZImmxevF' => 
=======
    'generated::fnqToDczsqDAT32Q' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/cancel_dorm_request/{dormReqId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_dorm_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_dorm_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uawkbThIZImmxevF',
=======
        'as' => 'generated::fnqToDczsqDAT32Q',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lGm3TvVhoGxMkL6J' => 
=======
    'generated::tDxsIZIM0t93XM9z' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/remove_room/{room_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_room',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_room',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lGm3TvVhoGxMkL6J',
=======
        'as' => 'generated::tDxsIZIM0t93XM9z',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5HdxN2KMP569HXdm' => 
=======
    'generated::Yfqzqqb413ZZkECy' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/get_inventories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dorm_inventories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dorm_inventories',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5HdxN2KMP569HXdm',
=======
        'as' => 'generated::Yfqzqqb413ZZkECy',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YGPaI0xPXLBUcjFA' => 
=======
    'generated::czDSvPwozDinVYbw' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_inventories/create_dormitory_inventory_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YGPaI0xPXLBUcjFA',
=======
        'as' => 'generated::czDSvPwozDinVYbw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0G1ECqWbgR6st9RK' => 
=======
    'generated::nK3QdjKhNIzoBTxV' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_inventories/get_dormitory_inventory_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0G1ECqWbgR6st9RK',
=======
        'as' => 'generated::nK3QdjKhNIzoBTxV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vVpLV7FpuPZwoqXw' => 
=======
    'generated::iOsKU351GXpcXiED' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_inventories/update_dormitory_inventory_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_dormitory_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_dormitory_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vVpLV7FpuPZwoqXw',
=======
        'as' => 'generated::iOsKU351GXpcXiED',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kl3etomZZCdnfc0M' => 
=======
    'generated::VIQyy9zlFzo8rYDX' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create_or_update_dormitory_inventory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory_inventory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory_inventory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kl3etomZZCdnfc0M',
=======
        'as' => 'generated::VIQyy9zlFzo8rYDX',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::E8KbYMxY6aa0gtbb' => 
=======
    'generated::EGC5p9Cpiuxd1klK' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/get_inventories/remove_dorm_inventory_stock/{stock_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::E8KbYMxY6aa0gtbb',
=======
        'as' => 'generated::EGC5p9Cpiuxd1klK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::J2IFZRzNcVTYGATe' => 
=======
    'generated::GPc9CPI6zzoNJBW7' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/remove_dorm_inventory/{inv_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::J2IFZRzNcVTYGATe',
=======
        'as' => 'generated::GPc9CPI6zzoNJBW7',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8oZ0sZ2Rddqy9Wue' => 
=======
    'generated::lwcTjhhZttt7fPJy' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@services',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@services',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8oZ0sZ2Rddqy9Wue',
=======
        'as' => 'generated::lwcTjhhZttt7fPJy',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ID8GZ68DOByXoWBd' => 
=======
    'generated::Jc9jS1xqjiOMrL1s' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create_or_update_service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ID8GZ68DOByXoWBd',
=======
        'as' => 'generated::Jc9jS1xqjiOMrL1s',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::apjiUIuKRC0A3GHi' => 
=======
    'generated::VBYh3UVtWaiXH2W6' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/remove_service/{service_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::apjiUIuKRC0A3GHi',
=======
        'as' => 'generated::VBYh3UVtWaiXH2W6',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zQw59uYe3XsnOZY4' => 
=======
    'generated::kTD5W4bvjhieNSEZ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/update_provided_stock_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zQw59uYe3XsnOZY4',
=======
        'as' => 'generated::kTD5W4bvjhieNSEZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vP3vT2K2q8Bh0QhC' => 
=======
    'generated::eU9aiXRCLXOkCwqh' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/update_provided_stock_list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_list',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_list',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vP3vT2K2q8Bh0QhC',
=======
        'as' => 'generated::eU9aiXRCLXOkCwqh',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vj9yWnOr8G0HrxRK' => 
=======
    'generated::HL9NQUJD2zoW49Fp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/count_dorm_reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_dorm_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_dorm_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vj9yWnOr8G0HrxRK',
=======
        'as' => 'generated::HL9NQUJD2zoW49Fp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SgUBFhBJea4wyt6D' => 
=======
    'generated::2YFqMGAs1Fw9qg8z' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_requested_service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_requested_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_requested_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::SgUBFhBJea4wyt6D',
=======
        'as' => 'generated::2YFqMGAs1Fw9qg8z',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8Ybg25bThuTc7yIj' => 
=======
    'generated::MMsO5IkxqgVL8Yc2' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/request_service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@request_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@request_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8Ybg25bThuTc7yIj',
=======
        'as' => 'generated::MMsO5IkxqgVL8Yc2',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ptdXND24OXHCWhhC' => 
=======
    'generated::zKoyU7AYoZ6ASORK' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/update_requested_service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_requested_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_requested_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ptdXND24OXHCWhhC',
=======
        'as' => 'generated::zKoyU7AYoZ6ASORK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HFKjASoSbLqHvhS7' => 
=======
    'generated::bEJwptiijELdVHnw' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/set_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HFKjASoSbLqHvhS7',
=======
        'as' => 'generated::bEJwptiijELdVHnw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QgBOjuSPeIZCpL7G' => 
=======
    'generated::AOUUzMRYBiffVkPv' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_dormitory_charges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_charges',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_charges',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::QgBOjuSPeIZCpL7G',
=======
        'as' => 'generated::AOUUzMRYBiffVkPv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::R31zdRq48i506feX' => 
=======
    'generated::sgD7etPTJuzmHC74' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/created_or_update_dormitory_charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@created_or_update_dormitory_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@created_or_update_dormitory_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::R31zdRq48i506feX',
=======
        'as' => 'generated::sgD7etPTJuzmHC74',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KFlcqdeMwb2tlKd1' => 
=======
    'generated::QnMcKJqnxdeEL7j4' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/cancel_charge/{chargeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::KFlcqdeMwb2tlKd1',
=======
        'as' => 'generated::QnMcKJqnxdeEL7j4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XuY5KqihVUwOwmNO' => 
=======
    'generated::sB9wa25gxb5Vo2bR' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/admin/masterlist/user/get_users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_users',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_users',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XuY5KqihVUwOwmNO',
=======
        'as' => 'generated::sB9wa25gxb5Vo2bR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZiRWWkrhik3ZxuWT' => 
=======
    'generated::z16AZhaGkVFXZ31t' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/masterlist/user/get_user_basic_info/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_basic_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_basic_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZiRWWkrhik3ZxuWT',
=======
        'as' => 'generated::z16AZhaGkVFXZ31t',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xfskNbcZX3jYD64H' => 
=======
    'generated::4uUyRqg7M1WFUjPA' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/masterlist/user/get_user_activities/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_activities',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xfskNbcZX3jYD64H',
=======
        'as' => 'generated::4uUyRqg7M1WFUjPA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KKyOSXxFnVLUsN7K' => 
=======
    'generated::kKroy0oufTJZEr4C' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/masterlist/user/get_user_qr_reader_assignments/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_qr_reader_assignments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_qr_reader_assignments',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::KKyOSXxFnVLUsN7K',
=======
        'as' => 'generated::kKroy0oufTJZEr4C',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rrZcpSAGIAw5pGvU' => 
=======
    'generated::EyiNqDKcFUaAkxzR' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/masterlist/user/qr_assignments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@qr_assignments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@qr_assignments',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rrZcpSAGIAw5pGvU',
=======
        'as' => 'generated::EyiNqDKcFUaAkxzR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tfHJQWUJtwz6pCwu' => 
=======
    'generated::2uYN0S55xsPNA6YK' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/masterlist/user/create_or_update_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_user',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tfHJQWUJtwz6pCwu',
=======
        'as' => 'generated::2uYN0S55xsPNA6YK',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IhPrZAtT2ORBZckp' => 
=======
    'generated::RxPmmGg8rcsDVNA3' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/masterlist/user/remove_qr_reader_assignment/{qr_reader_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_qr_reader_assignment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_qr_reader_assignment',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IhPrZAtT2ORBZckp',
=======
        'as' => 'generated::RxPmmGg8rcsDVNA3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xpqCVWsveSaU0nwh' => 
=======
    'generated::lZsVJoqKkCxFuM9R' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/masterlist/user/remove_user/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_user',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xpqCVWsveSaU0nwh',
=======
        'as' => 'generated::lZsVJoqKkCxFuM9R',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EItyci1M7JcameGW' => 
=======
    'generated::OSVwLw3vy5mUG6nZ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/masterlist/employer/get_employers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_employers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_employers',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/employer',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::EItyci1M7JcameGW',
=======
        'as' => 'generated::OSVwLw3vy5mUG6nZ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qkk9stfG4VgJFqAu' => 
=======
    'generated::6bIxFKviS0m8exHi' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/masterlist/employer/create_or_update_employer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_employer',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_employer',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/employer',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qkk9stfG4VgJFqAu',
=======
        'as' => 'generated::6bIxFKviS0m8exHi',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::s5f0bR8qkCfkYIyS' => 
=======
    'generated::Nx381SzbI3IvPrYU' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/masterlist/employer/remove_employer/{employer_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_employer',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_employer',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/employer',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::s5f0bR8qkCfkYIyS',
=======
        'as' => 'generated::Nx381SzbI3IvPrYU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Xp3SD44egDxQ8kHF' => 
=======
    'generated::r71uxM51WGBF7nZm' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/masterlist/position/get_positions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_positions',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_positions',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/position',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Xp3SD44egDxQ8kHF',
=======
        'as' => 'generated::r71uxM51WGBF7nZm',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wdoMTPY7e2RJF28i' => 
=======
    'generated::JZAIlPqI8y9e5AoL' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/masterlist/position/create_or_update_position',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_position',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_position',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/position',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wdoMTPY7e2RJF28i',
=======
        'as' => 'generated::JZAIlPqI8y9e5AoL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PVrJQP7QKDdZbuFq' => 
=======
    'generated::4hpN1YExYWjFCsfb' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/masterlist/position/remove_position/{position_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
          5 => 'user_role:SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_position',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_position',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/position',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::PVrJQP7QKDdZbuFq',
=======
        'as' => 'generated::4hpN1YExYWjFCsfb',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wT13IitWGC8fEsBL' => 
=======
    'generated::xNyN0fLTPFG5wRxr' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/masterlist/qr-reader/get_qr_readers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_readers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_readers',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wT13IitWGC8fEsBL',
=======
        'as' => 'generated::xNyN0fLTPFG5wRxr',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZdGezBEkeI4fdxLd' => 
=======
    'generated::992El0yuYbqN4azA' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/masterlist/qr-reader/get_qr_reader_records',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_reader_records',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_reader_records',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZdGezBEkeI4fdxLd',
=======
        'as' => 'generated::992El0yuYbqN4azA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VVG1vjx3u25q9gWx' => 
=======
    'generated::2yvYgoIkKO9Xk7pp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/masterlist/qr-reader/create_or_update_qr_reader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_qr_reader',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_qr_reader',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VVG1vjx3u25q9gWx',
=======
        'as' => 'generated::2yvYgoIkKO9Xk7pp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PVi2EwcKsG43uvXL' => 
=======
    'generated::yP5sHWyvx8XFVa1z' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/masterlist/qr-reader/remove_qr_reader/{qr_reader_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_qr_reader',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_qr_reader',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::PVi2EwcKsG43uvXL',
=======
        'as' => 'generated::yP5sHWyvx8XFVa1z',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GiaOXPTKGkD4Vnkm' => 
=======
    'generated::Ch3fsMPq1TVnZke4' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/get_payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_payments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_payments',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GiaOXPTKGkD4Vnkm',
=======
        'as' => 'generated::Ch3fsMPq1TVnZke4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pO0orLdmGwFHg2LH' => 
=======
    'generated::oOzCncQztYPxCXmJ' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/pay-walk-in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@pay_walkin',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@pay_walkin',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pO0orLdmGwFHg2LH',
=======
        'as' => 'generated::oOzCncQztYPxCXmJ',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oXlJsWBbz1yhP8S2' => 
=======
    'generated::moyN1t33bau6AQXR' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/verify_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@verify_payment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@verify_payment',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oXlJsWBbz1yhP8S2',
=======
        'as' => 'generated::moyN1t33bau6AQXR',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::z3fOA2U1ZtwlryJH' => 
=======
    'generated::Y2qB0y78TQSXOMtd' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/cashier/get_charges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::z3fOA2U1ZtwlryJH',
=======
        'as' => 'generated::Y2qB0y78TQSXOMtd',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aTLwIvo2vtmi8Y9k' => 
=======
    'generated::a6JZyr9jee7DyuWg' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/cashier/get_charges/get_charges_predata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aTLwIvo2vtmi8Y9k',
=======
        'as' => 'generated::a6JZyr9jee7DyuWg',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wgUN2i0GtZWYP3X2' => 
=======
    'generated::HIaJ56U6t78NsboI' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/create_or_update_charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wgUN2i0GtZWYP3X2',
=======
        'as' => 'generated::HIaJ56U6t78NsboI',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Gc1wqo8EA2Fd0fOP' => 
=======
    'generated::LSUEwOfDUTbQuLlp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/cashier/remove_charge/{chargeId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Gc1wqo8EA2Fd0fOP',
=======
        'as' => 'generated::LSUEwOfDUTbQuLlp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JeF9mDKGwUjk0hk8' => 
=======
    'generated::LZsInODVuGNdORiH' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/cashier/get_charges_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JeF9mDKGwUjk0hk8',
=======
        'as' => 'generated::LZsInODVuGNdORiH',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DPdEpeCau4SYzzNY' => 
=======
    'generated::BAChWU624CsG5tgv' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/create_or_update_charge_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DPdEpeCau4SYzzNY',
=======
        'as' => 'generated::BAChWU624CsG5tgv',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Z8GUeZw9HCBGn8vQ' => 
=======
    'generated::dieOSvgFmWg36xH1' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/cashier/remove_charge_category/{fee_category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Z8GUeZw9HCBGn8vQ',
=======
        'as' => 'generated::dieOSvgFmWg36xH1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RWlwj4RcD3VsEL4s' => 
=======
    'generated::ajC4pkE02PXQuXPV' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'api/admin/cashier/get_or_numbers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_or_numbers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_or_numbers',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RWlwj4RcD3VsEL4s',
=======
        'as' => 'generated::ajC4pkE02PXQuXPV',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Ng7R5az2OMlR58T9' => 
=======
    'generated::2j6gZcvvKIjRR97E' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/create_or_update_or_number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_or_number',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_or_number',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Ng7R5az2OMlR58T9',
=======
        'as' => 'generated::2j6gZcvvKIjRR97E',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CQFudMP29p0UzB5z' => 
=======
    'generated::AlI74bsBC3QTJeTp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/cashier/remove_or_number/{fee_category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_or_number',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_or_number',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CQFudMP29p0UzB5z',
=======
        'as' => 'generated::AlI74bsBC3QTJeTp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::66gQvHkIpQeluBzw' => 
=======
    'generated::fRAaSZoaoao0PW1x' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/recreational-activity/ra_count/get_ra_count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_ra_count',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_ra_count',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::66gQvHkIpQeluBzw',
=======
        'as' => 'generated::fRAaSZoaoao0PW1x',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::E8wfFNp2eIjes0xi' => 
=======
    'generated::j4WYX8T4PJyTgV5w' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_requests',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::E8wfFNp2eIjes0xi',
=======
        'as' => 'generated::j4WYX8T4PJyTgV5w',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uTPJG1ayvfUrphGQ' => 
=======
    'generated::0oEV5zihGIIZHyzl' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/get_requested_equipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uTPJG1ayvfUrphGQ',
=======
        'as' => 'generated::0oEV5zihGIIZHyzl',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LtSMvHw1vqvNUdR4' => 
=======
    'generated::dZ2fFRcYAd1dgMI5' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/get_requested_match_equipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_match_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_match_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LtSMvHw1vqvNUdR4',
=======
        'as' => 'generated::dZ2fFRcYAd1dgMI5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ug9GipLD0IZLPo7V' => 
=======
    'generated::phGTzMA3Jgz56lGz' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/issue_requested_equipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@issue_requested_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@issue_requested_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ug9GipLD0IZLPo7V',
=======
        'as' => 'generated::phGTzMA3Jgz56lGz',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uTyaOt1ZWxcRFStH' => 
=======
    'generated::GiNbAZBrs52swlZh' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/update_requested_facility',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@update_requested_facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@update_requested_facility',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uTyaOt1ZWxcRFStH',
=======
        'as' => 'generated::GiNbAZBrs52swlZh',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oNZz19rTHp8LntvX' => 
=======
    'generated::aWDWjL3RkES5lPeA' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/update_requested_equipment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@update_requested_equipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@update_requested_equipment',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oNZz19rTHp8LntvX',
=======
        'as' => 'generated::aWDWjL3RkES5lPeA',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GSzj2RbV1XDEMa5V' => 
=======
    'generated::sEjchXj6SDdbZxzG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/ra_request_charges',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_request_charges',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_request_charges',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
        'as' => 'generated::sEjchXj6SDdbZxzG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YZPHPemsdKmYMazX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/ra_create_or_update_charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
        'as' => 'generated::YZPHPemsdKmYMazX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kB4vcxTLdRUZ6VjA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/ra_create_or_update_charge',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
        'as' => 'generated::kB4vcxTLdRUZ6VjA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::shjK7gb6VpcFUDO3' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/recreational-activity/ra_requests/ra_delete_charge/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_delete_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_delete_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
        'as' => 'generated::shjK7gb6VpcFUDO3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9zpYhRPcblubVEEt' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_equipments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GSzj2RbV1XDEMa5V',
=======
        'as' => 'generated::9zpYhRPcblubVEEt',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::peI2ZXocFg7Mi7bb' => 
=======
    'generated::G1ptRaSiSurn4al5' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_equipment_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::peI2ZXocFg7Mi7bb',
=======
        'as' => 'generated::G1ptRaSiSurn4al5',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WfBb2QxiQeLL8jHY' => 
=======
    'generated::7WbqeJ2bJ2xg7Tfe' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_create_or_update_equipment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_equipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_equipment',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WfBb2QxiQeLL8jHY',
=======
        'as' => 'generated::7WbqeJ2bJ2xg7Tfe',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vEkBRQPqhXerdkDl' => 
=======
    'generated::GluWrqknZ9OBnoDw' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_equipment_create_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_create_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_create_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vEkBRQPqhXerdkDl',
=======
        'as' => 'generated::GluWrqknZ9OBnoDw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IKKi2TcJDeKFMfhu' => 
=======
    'generated::DYq8mhmHuhPcna4t' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_equipment_update_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_update_equipment_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_update_equipment_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IKKi2TcJDeKFMfhu',
=======
        'as' => 'generated::DYq8mhmHuhPcna4t',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QE7cQonm96qDNgXa' => 
=======
    'generated::iQRRnb7tTGFa12a4' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/recreational-activity/ra_remove_equipment/{equipment_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::QE7cQonm96qDNgXa',
=======
        'as' => 'generated::iQRRnb7tTGFa12a4',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xOX0EgYDoKD37CJr' => 
=======
    'generated::EsJt314lZaedTsQE' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/recreational-activity/ra_remove_equipment_stock/{equipment_stock_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xOX0EgYDoKD37CJr',
=======
        'as' => 'generated::EsJt314lZaedTsQE',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2cKq1cGXC8sy38HL' => 
=======
    'generated::3vhRydfdyDoMtiuD' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_facilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_facilities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_facilities',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2cKq1cGXC8sy38HL',
=======
        'as' => 'generated::3vhRydfdyDoMtiuD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wElGnNBma6qgjqW7' => 
=======
    'generated::5dieJWserW5iT3NL' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/ra_create_or_update_facility',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_facility',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wElGnNBma6qgjqW7',
=======
        'as' => 'generated::5dieJWserW5iT3NL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WSrlWnG5fx75Irew' => 
=======
    'generated::WTgbuxtZAxcAsarU' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/recreational-activity/ra_remove_facility/{facility_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_facility',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WSrlWnG5fx75Irew',
=======
        'as' => 'generated::WTgbuxtZAxcAsarU',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UQNW1aezvC3DMA4t' => 
=======
    'generated::fOMjw043dIibrkbL' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/qrcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@qrReader',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@qrReader',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UQNW1aezvC3DMA4t',
=======
        'as' => 'generated::fOMjw043dIibrkbL',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::D5TeMUuRrdkaFIEA' => 
=======
    'generated::t4EQrI8Toim5CWuD' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/qrreader/check-in-out',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@check_in_out',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@check_in_out',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::D5TeMUuRrdkaFIEA',
=======
        'as' => 'generated::t4EQrI8Toim5CWuD',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZYmW5CIw8ydl5Wz0' => 
=======
    'generated::HZX2te0hCA07PMD8' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/qrreader/get_log_in_out_records',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@get_log_in_out_records',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@get_log_in_out_records',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZYmW5CIw8ydl5Wz0',
=======
        'as' => 'generated::HZX2te0hCA07PMD8',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RvmstsuvgxmxtBum' => 
=======
    'generated::th0R9uEXvxy7PchC' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/get_charges_predata',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RvmstsuvgxmxtBum',
=======
        'as' => 'generated::th0R9uEXvxy7PchC',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lcQ5qXMYRDYzgaAk' => 
=======
    'generated::1HKRSMJZn8GaDRD1' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/get_trainee_enrolled_trainings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lcQ5qXMYRDYzgaAk',
=======
        'as' => 'generated::1HKRSMJZn8GaDRD1',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OiN94zNuQUMxPgi6' => 
=======
    'generated::4tWQZBNqMbeM1Ykp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/submit-csm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::OiN94zNuQUMxPgi6',
=======
        'as' => 'generated::4tWQZBNqMbeM1Ykp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eTUa8g3SS6QM5qb4' => 
=======
    'generated::eVNLx1TzzRe0lYx3' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/my-account/update_personal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eTUa8g3SS6QM5qb4',
=======
        'as' => 'generated::eVNLx1TzzRe0lYx3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pSr0VxwRkTRxxl2F' => 
=======
    'generated::G3SecqMeK3WOtKG3' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/my-account/update_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pSr0VxwRkTRxxl2F',
=======
        'as' => 'generated::G3SecqMeK3WOtKG3',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HvOBTKUj8AWKoLbQ' => 
=======
    'generated::7fISolAR89QcRhXw' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/my-account/get_activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HvOBTKUj8AWKoLbQ',
=======
        'as' => 'generated::7fISolAR89QcRhXw',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9f8pNMTHpoL4lsuW' => 
=======
    'generated::GUKMbOZdiyyiyfwp' => 
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9f8pNMTHpoL4lsuW',
=======
        'as' => 'generated::GUKMbOZdiyyiyfwp',
>>>>>>> b8a4053e004be63e87fddba1faf26873418c680e
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
