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
            '_route' => 'generated::4K4yPFiHg5vzehDk',
=======
            '_route' => 'generated::XfdZwSLikcC6TmKg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::RqHkKfIW9CLsLjys',
=======
            '_route' => 'generated::AO1ZDFksJwi9EhTU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::vpDMJ0IGpjPclq7G',
=======
            '_route' => 'generated::Lrw3W7u37VExGcoT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::8RqXZ3qMTLNYlrEr',
=======
            '_route' => 'generated::dUne37B0XmoaLScR',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ysVVzp2AmNoCXj5l',
=======
            '_route' => 'generated::QKdDac4VOq3v2wNy',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::kZ2YLCG2D0mYJDTO',
=======
            '_route' => 'generated::XXC5DKhO6Pu1i9Z5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/items' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::O6N4XZRLNk2Z5v9c',
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
      '/api/item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vNBqI18hd8v0edwe',
=======
            '_route' => 'generated::0fmUJ4hiwbadJbFq',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::soOKLS5HXKegNgGZ',
=======
            '_route' => 'generated::QWiLbD5uFmJZXa13',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::q42yPCVhD64FT7sz',
=======
            '_route' => 'generated::BPqIXyvo78OWHbHd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::50rt7RoTq0owV7Mz',
=======
            '_route' => 'generated::qsjnufuccxMVoByq',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::X1GQMVlJDzTZX59k',
=======
            '_route' => 'generated::GPVGpU4VI2Vuirro',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::30emiUQ9j88YBwc9',
=======
            '_route' => 'generated::dwsyEpExxKzX5pNw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::zD0Hi6n3emYMbLXO',
=======
            '_route' => 'generated::itFDHNygiBbHLF3T',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Xg1m7sq2beNhqFHC',
=======
            '_route' => 'generated::rg6exGF9JDoyb8Jn',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::EDk8wHfWi0gVnUck',
=======
            '_route' => 'generated::zquXBHs4heXU0G9O',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::nu1bUNWuEI1Zvb1Q',
=======
            '_route' => 'generated::s6bwKT41GTBGyt19',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::eZHldGj9H0vajVwc',
=======
            '_route' => 'generated::qleHVdOttEraFknd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::XBrRTSyfG4eJxS97',
=======
            '_route' => 'generated::ggCWCjXVFrChWnlw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::pzIsbiRSfutqgh86',
=======
            '_route' => 'generated::ooXeSMOihmDGukz9',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::dVjCbReXqznWpVR9',
=======
            '_route' => 'generated::G8IOZvcEo96rgSJh',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Gor202jUhvRopYPY',
=======
            '_route' => 'generated::Mqw9n2MV9l4skMs2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::cww6XNZjkdrctnSL',
=======
            '_route' => 'generated::hFwBVOec8Es7Qxuj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::UzSCRFyO2JdUk822',
=======
            '_route' => 'generated::dAc5asZTPk2uIm37',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::oa6nJJQcRp0DInXD',
=======
            '_route' => 'generated::UerBRIdM1fG5SCXx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::z7c2pL2DBmO88KvM',
=======
            '_route' => 'generated::lxyFm3OxG0VI4eHN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/trainings/get_all_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::APHMlUhoiAmN3pAJ',
=======
            '_route' => 'generated::JEnpjDe3AQePUCt2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::AjQzG0ciHUQ87DCT',
=======
            '_route' => 'generated::qtn8ZEpmc3ktO9Ru',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::tulKv2IQUNoji1Xm',
=======
            '_route' => 'generated::eJC1fnV3Q7gwpS4G',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/dormitories/applied_dormitories' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::EsqUZPrYKsm0plOh',
=======
            '_route' => 'generated::FFhlXb8p9AJIY1P6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::cSWCsGgxY2VVgK7m',
=======
            '_route' => 'generated::LJFJUq6FXMcy4oOx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::MDSXoBMDxN8tOHNV',
=======
            '_route' => 'generated::bAcrGTjKOKo5NAKO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::3sR2aleXoLzDmGTl',
=======
            '_route' => 'generated::Mpp2VrS0rlTzWbSG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Sb7Rc6UVlZzFb2jz',
=======
            '_route' => 'generated::p21BDobPA1ry9YLR',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::7SBn3c4WWeAanZLV',
=======
            '_route' => 'generated::zAbphbereSbkzpKS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::lhXcu4JGpEndaL62',
=======
            '_route' => 'generated::eFi1CcjH1iFo7cxi',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::8LpDUTOhkrs2gbJP',
=======
            '_route' => 'generated::zdO9NJmvZwPUy5xT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::HrLPPig5JE68UDKx',
=======
            '_route' => 'generated::Cw1z3PPv6SUyn7B0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::znAENwXGCLe86tcY',
=======
            '_route' => 'generated::lqmIy2bffaCHZiUP',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::fntvJt5wWq3IkAUI',
=======
            '_route' => 'generated::3j0YscWIsLAFHZrS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::IuK1KHD0Mg4oEHOU',
=======
            '_route' => 'generated::TN0D1AuKFKauKjHt',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::DdLozEIFfrNAjVLT',
=======
            '_route' => 'generated::R5L86s4zoqZVQhdn',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::R8eqCv3WgY4ou0Np',
=======
            '_route' => 'generated::REXlK4K354dUBVQk',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ad3YO1xAs84aaIas',
=======
            '_route' => 'generated::CeXKekwmYHC0n0LN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::GrdvOFWprxSAJ3JE',
=======
            '_route' => 'generated::h5yPTKfahOpPGG72',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::sESjtvjtbMMsceAb',
=======
            '_route' => 'generated::04PtRs22A7hPsmW1',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::I9e3SIHf1CJBoyPF',
=======
            '_route' => 'generated::27jKLo46RmHhain6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ro43kD5oeE0ADcxd',
=======
            '_route' => 'generated::D7seDEBiiPfCLlsa',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::hUUToER0YUL0jR9H',
=======
            '_route' => 'generated::XrCtRQPlCoZTPwdF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::A0Y3bre2SSVlIXiP',
=======
            '_route' => 'generated::3j1N0ZJE4t4wUHYr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::puF6Ys0xfMGBZ43R',
=======
            '_route' => 'generated::MdqPL5fYpi196Nte',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::dfqSLFiDAdXv7tUz',
=======
            '_route' => 'generated::5p7n8VnvI92Hcbhg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::OrDpEzllKwwNFkez',
=======
            '_route' => 'generated::BgwmsOdjc0AowKOr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::YwrCILnbsXL8QRw5',
=======
            '_route' => 'generated::LfPnXCCPYo69pvmN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::j84E0tc6gizdn4en',
=======
            '_route' => 'generated::G2PFx43jr7yBE0kr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::JLXcpCl95zm2Nmiv',
=======
            '_route' => 'generated::wRMBi5QQVr8BR6vY',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::sNf3maovPTOmVmUh',
=======
            '_route' => 'generated::F48uUD2iLTIZk5Q7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::0es2j777kpkdWjY5',
=======
            '_route' => 'generated::V8KPn7BTs5f1o17y',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::wBZsTi6I0gjvAPgo',
=======
            '_route' => 'generated::OYATPmVG2SG3roF5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/client_satisfaction/surveys' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eF79w9Gnlj6gVWdG',
=======
            '_route' => 'generated::GwrSfWXAe8e1gnpO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Au3X6HwhkBFeSPnq',
=======
            '_route' => 'generated::S3ycsJiFwR5H2Ear',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::eBWFGSG60CkaQ2SS',
=======
            '_route' => 'generated::4QYhY1VRK8uNK8JA',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::wk5NEBGrpZGFqNNQ',
=======
            '_route' => 'generated::izcyraseBKtwnBsj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Pmb6BYpbkO2YEbp9',
=======
            '_route' => 'generated::Ys0TSfrYuU3LnbiU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::4MONZCplYkhvr1pl',
=======
            '_route' => 'generated::6YdiKh6rSWsGFGbd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::dlaKjxvOJlVfaCPx',
=======
            '_route' => 'generated::c0KT9h29PJywnkX3',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::TfXdNwBPnUUMdIb5',
=======
            '_route' => 'generated::g1BQ2viIfxMQveO7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::IjmagFzGKmkgYuPj',
=======
            '_route' => 'generated::8VyuOfsY5OuSHqln',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::9MBIHIAncCOGEy4L',
=======
            '_route' => 'generated::89sXszEFEVUm9D80',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/recreationals/equipment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xgFiz4GRuUFqvrcK',
=======
            '_route' => 'generated::R5WMXkgYYQlgJ7tS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::y18aHZeeIPFSRNt1',
=======
            '_route' => 'generated::F5bOFHxUQGlDzNgN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::fuyJEbVh61ZKQC6X',
=======
            '_route' => 'generated::CT06uSXTyBwKwoIu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::yEd9RUVE3brkkmvR',
=======
            '_route' => 'generated::ZDntfXnu5MpUQWVX',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::PZnHioX0jsILHdR2',
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
            '_route' => 'generated::Hz8QJM4A1YSjfAmu',
=======
            '_route' => 'generated::UXQv0AMolwpPvQaW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/update_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lPF5Yd40c1opLazL',
=======
            '_route' => 'generated::5iOgQF7mvTYdyrza',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::woVBqSSFNLxTPR0q',
=======
            '_route' => 'generated::quw5de3PtvpWHyuB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::xp4hu90LG1NuUr1s',
=======
            '_route' => 'generated::hcjy7UURB4hLmDoW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ieLpY7BDHtiuHWV8',
=======
            '_route' => 'generated::WsZ05WvXqGZg8Iwi',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/admin/enrollment/get_applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2lLYBvOxKcXPyaDJ',
=======
            '_route' => 'generated::V1YyrclJES2TGFRa',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ZHalLJDG527ZOLdA',
=======
            '_route' => 'generated::dlsdmOu1i7Z9Or4J',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::DzBpFZxtPRYldjzd',
=======
            '_route' => 'generated::cOtcYiXHi3H8SzZE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::dE5QO0VFupt9BgEO',
=======
            '_route' => 'generated::wTxWUU0WFUPUxTii',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::732hzbxj2f4oQi91',
=======
            '_route' => 'generated::etYsiRutjCKgrV1m',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::90fBx5OYjrIkFQkY',
=======
            '_route' => 'generated::loScyaC2hcasURM3',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::UBS57sZ7dRzdKkjz',
=======
            '_route' => 'generated::CcXwXeElDerJ35oc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::H3q9LKFawnA4KAuc',
=======
            '_route' => 'generated::NTVnJhypnPL0Xlmf',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/admin/enrollment/create_or_update_schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IhL9pMMYVnu38Pkk',
=======
            '_route' => 'generated::wGFEt1DnZCY9ZQ79',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ruRj0HaO2hzVN9q8',
=======
            '_route' => 'generated::3XiVgnFFCpm8dAFU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::IqCUFHoQ9iCkJaBt',
=======
            '_route' => 'generated::ElvaAi4s59Hoc1FW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::UqSC6jlxJ1be57CN',
=======
            '_route' => 'generated::Ll9IY0tjk2hcOizs',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::fjrIMQPuIyLXO2Cs',
=======
            '_route' => 'generated::SRQR1PJR2EWgdGGE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ekHBxojCKuvzxzw6',
=======
            '_route' => 'generated::fhcCOGxw4KB3YFSQ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::TDBRTGVRmVssAbQc',
=======
            '_route' => 'generated::cXYgS378OtASc9Gh',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::EvnhUEBW1jiIlFg7',
=======
            '_route' => 'generated::wIdSLPYMXZrauDdj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::qmSCv6RicAOSwXyB',
=======
            '_route' => 'generated::pr5u9i3FVrPwqA2m',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::wRyI4JwrNx4w4Yn4',
=======
            '_route' => 'generated::hsr6a3RGbBwCQMie',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::S3AugwiE5FAIgwzI',
=======
            '_route' => 'generated::jlZ28zDymfAu8jwd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::kHwcY5yUXOQXIDZM',
=======
            '_route' => 'generated::UajUz2Mx4O1IjMeN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::yFOrkJj94qBNTTdz',
=======
            '_route' => 'generated::M7FSvPaEE9SCheuQ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::XO3ZULf106iRyaVQ',
=======
            '_route' => 'generated::KFzKUjE1MDqluwTe',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::C0Z8qR9ZjOBtcewP',
=======
            '_route' => 'generated::GAyYKe7b31kxCJ0n',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::5p5jJX9A7fgQcV8f',
=======
            '_route' => 'generated::1esOAuglfBPENEO0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::YcOjeNiRxtJUwP7T',
=======
            '_route' => 'generated::y0bgcuVn6LBKYLRe',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::5TcfXu9o2NRtRnJJ',
=======
            '_route' => 'generated::Ht5XMWBCqAISMvFO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::5rPo6b1I3qcNXi9S',
=======
            '_route' => 'generated::RzGAgBFHXxvbuw3p',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Xj4P3CRO9PDJmXy8',
=======
            '_route' => 'generated::AxCtAknqYnFhFTsl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::jyGocK6fRaAAjsEJ',
=======
            '_route' => 'generated::fMklBfzCaxwkeNja',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::uWUxeGoehYzaj8ff',
=======
            '_route' => 'generated::vj0okDvucfZAxu6T',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::HeArl3WSTN3f2YwR',
=======
            '_route' => 'generated::WU6tE2F16yySLZ6O',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::lddWlzgBScaLUMOA',
=======
            '_route' => 'generated::QpDWSIwVwpmfuhNj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Bsyjw5bzsvDOM5qb',
=======
            '_route' => 'generated::DJ93LNHapozT2on4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::bm3D7XjOXzhqym1u',
=======
            '_route' => 'generated::oQsuqUHew0cAhKP1',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::UfJrRZE344ftt0pv',
=======
            '_route' => 'generated::vzk38O05P5akq1aG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::P5HXs5y0zorz2jfF',
=======
            '_route' => 'generated::imQDPJlB0fd5Ix0t',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::9gHCGGOeZ8CUdgKN',
=======
            '_route' => 'generated::03yxuW885HY6pmT7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::YckB1Q5Aa8CBiRN4',
=======
            '_route' => 'generated::XNdll2nKPQTwB3Q4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::kWRySffadi98n0kt',
=======
            '_route' => 'generated::XDeC2kKegxAqr9jS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::cYmN2KneBYsMTyCD',
=======
            '_route' => 'generated::Rfo0MJEw7qKsoOit',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::XP2GZbE8rBWIHOWt',
=======
            '_route' => 'generated::ABN1I02kywpWSlag',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::3qag8WuIGwuIBh3T',
=======
            '_route' => 'generated::cWDAuF0D8pAhqJrC',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::6tla1vKxuOvkp9Wj',
=======
            '_route' => 'generated::X5ow7cj3EPu3cewl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::WjBLkTkpQx0VG5fr',
=======
            '_route' => 'generated::ENSvzR0F4khubTNF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::ETzUCujsUuRn7RQQ',
=======
            '_route' => 'generated::dvtWsJYYtShKESXO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::G8wb4ctHoHnme9qC',
=======
            '_route' => 'generated::1KF4aSL44sGh871e',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::0BhovA0PmmJhFgql',
=======
            '_route' => 'generated::pXXhKUCCLn85hXfE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::YRXh24TsWocK3wX8',
=======
            '_route' => 'generated::r9GYFxkVZyyW18hT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::N0BOS5rOBY9Qzs8C',
=======
            '_route' => 'generated::RAaeXPTylAKx1OBr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::TRMtkQaZt2m57CFx',
=======
            '_route' => 'generated::lwel8E1iO5ky1Vy2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::7SS55AUtyIQMB66V',
=======
            '_route' => 'generated::8W8mbdqbDW2yUOZG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::iXuueaQQdUuo4YS7',
=======
            '_route' => 'generated::6Nhy4Pu7Zi1tmLff',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::CJYnB6kGt1ENVgrZ',
=======
            '_route' => 'generated::peDanLex5xivr4g9',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::BfbaYSSEsV1wMBMY',
=======
            '_route' => 'generated::gJ3cl3DVOhWkJcCw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::riAakYBX1NCTIoyZ',
=======
            '_route' => 'generated::RlAOqjHuF8hRDkSz',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::7SLKmd3QnkQxMEaa',
=======
            '_route' => 'generated::5dPT0GC6JNucv3zG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::HpHGr5Kn4MW5esqh',
=======
            '_route' => 'generated::BMhtUtkY1RXk0Bf1',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::rmHpfKtjoBMeSxhf',
=======
            '_route' => 'generated::7jIjmLA3WUSymdAF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::DBDT0sIDMtmpis5B',
=======
            '_route' => 'generated::4j99bGds0dEm0Y8O',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::vCYPtYyG4MeFRXgm',
=======
            '_route' => 'generated::x6VTMC6iYuBSlDgY',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::hbMHdKYrtX4iE2VS',
=======
            '_route' => 'generated::jw7qkEJH475fREsM',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::6omInDYyt0yAZIZL',
=======
            '_route' => 'generated::qDizPyFVV7zkb2Fa',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::D7V3Y27agyYPs7wB',
=======
            '_route' => 'generated::KRn2GCYKCT9woU5A',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::siVhQ967Rx93J6wB',
=======
            '_route' => 'generated::GgWIFLJKXvMnGO9M',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::RF8Nz4DDLxHJfr64',
=======
            '_route' => 'generated::uH0gs1BzTUbU3UcN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::kA0IybWffnhq6R2b',
=======
            '_route' => 'generated::nTwxtDJBV6i7UvAQ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::s8E5RJyfjOVOgOrq',
=======
            '_route' => 'generated::sWOC72uvlQHcNbgc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::jaMEmYbq0dfdtlRK',
=======
            '_route' => 'generated::GwmPEhccPea5fZ6B',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::pwIQXOfBpHRx4Hzu',
=======
            '_route' => 'generated::jzwGmjigqlHEMmJ8',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::LHEoNhMOQn1k3F0i',
=======
            '_route' => 'generated::ZnScKghvJJNJCHqH',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::S3acUYFlq3jAa5NS',
=======
            '_route' => 'generated::lIOZYSGuFsKMMt6s',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::UyXYEwh2qTuu0S3G',
=======
            '_route' => 'generated::NopLnqachDYDO8nK',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::VlnDVQBUTH5hBcVS',
=======
            '_route' => 'generated::PZhFRDMcrgLSRsuf',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::WLIqUKDhvqFK35rN',
=======
            '_route' => 'generated::xpkyJc83XH0gahqB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::fIUABb1GMSyuNKHf',
=======
            '_route' => 'generated::rwmyl17BdHQ2r2Rx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::CMXxDYxc7grRrYiv',
=======
            '_route' => 'generated::KdPWCqKmVVr11N8H',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::JB1O1Y5HAsoPzddG',
=======
            '_route' => 'generated::RjBTZW2oqLwAYFKl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::zlLVKSZBwqwR1Yqg',
=======
            '_route' => 'generated::WyjtNkvlpkH5DoiZ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::8drjdgKmNzbrXxcs',
=======
            '_route' => 'generated::DU9GrQYDBXKqt73F',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::mnBlbsxLN0HhqUiQ',
=======
            '_route' => 'generated::4PCynJksxGMwsXEJ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::AkB7McKbPa2pwefO',
=======
            '_route' => 'generated::wKHocTclutSEchD6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::cw4o4lMvtlcthb2G',
=======
            '_route' => 'generated::8vb2iDaQ7suuOmSi',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::p9bfGWMwF1Xzpk70',
=======
            '_route' => 'generated::NX2wdGYNRosivVgj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::iuf7veixDmIIfJTs',
=======
            '_route' => 'generated::P6NjpiKAtpJZwZkl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::cJtNcNVJcALt4pLD',
=======
            '_route' => 'generated::RYBrg0wfe2qELFFP',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::IJj5Ec8WIiSPuabL',
=======
            '_route' => 'generated::4nlppXPoJ9hZ8aIq',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::xL7wV4xmNAyPlYGn',
=======
            '_route' => 'generated::irYMpJkn01ZLuTN4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::2S7len4zu7f3vh5W',
=======
            '_route' => 'generated::dlrz7CQCNpSLrEE0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::iG1vvg4zyi8L3UK0',
=======
            '_route' => 'generated::9wSG34wMuRBSMvGh',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::wJWf6ASdMfezkQYI',
=======
            '_route' => 'generated::TmDnJJGUXhQBxxxN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::zVjCi4yg9B0Xpkh5',
=======
            '_route' => 'generated::myk1uhv43Vc4zFpc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::HgeQGEJXobblJv0Z',
=======
            '_route' => 'generated::sY0ddvp9FUPKyKGF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::4youoDNAOSf4Do9T',
=======
            '_route' => 'generated::yIpJ9SDeBWr8tjv5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::GmiS30XXlqflHQU2',
=======
            '_route' => 'generated::vtTUV50pg7sunZjv',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::cOUB1SX3bqONnFfc',
=======
            '_route' => 'generated::UBi0sIc0T0Oxrn7e',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Gu2aLsj13ULaKz7s',
=======
            '_route' => 'generated::u3SPm4ibDrpejMrp',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::56tbsAjiPAj91Qua',
=======
            '_route' => 'generated::j9WVIIkDWd18XTU7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::3JSfdDPnpS18BsWu',
=======
            '_route' => 'generated::aEHG8INHHFpretqX',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/admin/recreational-activity/get_recreational_requests' => 
=======
      '/api/admin/recreational-activity/ra_count/get_ra_count' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NSORGLCpYyR4noUN',
=======
            '_route' => 'generated::3fL0c43qAKHcxQD5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
          ),
          1 => NULL,
          2 => 
          array (
<<<<<<< HEAD
            'POST' => 0,
=======
            'GET' => 0,
            'HEAD' => 1,
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::qbWKRHdJpiSqCcqo',
=======
            '_route' => 'generated::RL29tv5f3sqyuJxL',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::MefDgacTCsZu18CG',
=======
            '_route' => 'generated::UMHe5fCk0Tovb3zu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::XAfIkqSz75DGyvy9',
=======
            '_route' => 'generated::4ryFdngWS43JhnB7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::DfmGLSNqQyJEvbPZ',
=======
            '_route' => 'generated::KQUEapcruCCMRqT5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::tN3zADx13hBSaHQF',
=======
            '_route' => 'generated::pgTeFxGHzh1lxp8F',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      '/api/admin/recreational-activity/ra_equipments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YhpFGHZZ5RIQIbzp',
=======
            '_route' => 'generated::EYFW4fd7AD98qyqg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::BJhSEhEdeaBw4brc',
=======
            '_route' => 'generated::CHDU1D8sgYNqzBps',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::IVKx5AIC5F6xfJBm',
=======
            '_route' => 'generated::ol7X39DLe78P323g',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::30qmI88BJIhLQV76',
=======
            '_route' => 'generated::XkKhqpDSnkfFNNii',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::bL61SG861P1Z9gpp',
=======
            '_route' => 'generated::ipNrIsYcocXtca1a',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::CrHrKJkc6Xq64H3N',
=======
            '_route' => 'generated::XTtzYVw7MBHNNvYN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::wkR60bMCFWXNQubn',
=======
            '_route' => 'generated::iMpgKbGGAwyYGF96',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::DuPXe67zo0cxlV47',
=======
            '_route' => 'generated::yE76XjFvpNmnbusE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::6nA77CqikzX7Gbd2',
=======
            '_route' => 'generated::xeMQsNW1yNRcKQtB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::nMQE0i22Fc5FU9MM',
=======
            '_route' => 'generated::HF1duP0XaZGJuAOI',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::hPjs5PG8nAaVGTa6',
=======
            '_route' => 'generated::a4G3KoqCDVErm25x',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::G8VsBRS8GzsZWTIh',
=======
            '_route' => 'generated::7rvoMMLBDjPCfPTc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Bcke3GeAXpe0GiaM',
=======
            '_route' => 'generated::Vgs8mE8K0wnajP41',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      0 => '{^(?|/api/(?|my\\-account/get_trainee_general_info/([^/]++)(*:60)|enrollment/(?|get_(?|requirements/([^/]++)(*:109)|applications/([^/]++)(*:138))|remove_training_request/([^/]++)(*:179))|dormitories/(?|applied_dormitories/view/(?|([^/]++)(?|(*:242)|/inclusions(*:261))|getAllHistories/([^/]++)(*:294))|remove_applied_dormitories/([^/]++)(*:338)|inclusion/requests/([^/]++)(*:373)|services/(?|([^/]++)(*:401)|([0-9]+)/create(*:424)|([0-9]+)/cancel(*:447))|transfer_request/cancel/([^/]++)(*:488)|extension_request/cancel/([^/]++)(*:529)|cancel_request/([^/]++)(*:560))|libraries/book_info/([^/]++)(*:597)|client_satisfaction/surveys/delete/([^/]++)(*:648)|invoices/view/([^/]++)(*:678)|traine(?|r/enrollment/courses/([^/]++)(*:724)|e\\-info/([^/]++)(*:748))|admin/(?|enrollment/(?|get_applications/remove_training_request/([^/]++)(*:829)|remove_(?|s(?|ch(?|edule/([^/]++)(*:870)|ool/([^/]++)(*:890))|ponsor/([^/]++)(*:914))|module(?|/([^/]++)(*:941)|_type/([^/]++)(*:963))|c(?|ertificate/([^/]++)(*:995)|ourse(?|/([^/]++)(*:1020)|_fee/([^/]++)(*:1042)))|voucher/([^/]++)(*:1069)|license/([^/]++)(*:1094)|rank/([^/]++)(*:1116)|facilitator/([^/]++)(*:1145))|training\\-requirements/remove_trequirement/([^/]++)(*:1206))|book(?|s/(?|get_book_(?|info/(?|([^/]++)(*:1256)|get_copies/([^/]++)(*:1284)|remove_copy/([^/]++)(*:1313))|total_reservations/([^/]++)(*:1350)|reservation/remove_fine/([^/]++)(*:1391))|remove_book/([^/]++)(*:1421))|_entry/remove_entry/([^/]++)(*:1459))|dormitory/(?|get_(?|dormitory_(?|rooms/([^/]++)(*:1516)|info/([^/]++)(*:1538))|inventories/remove_dorm_inventory_stock/([^/]++)(*:1596))|cancel_(?|dorm_request/([^/]++)(*:1637)|charge/([^/]++)(*:1661))|remove_(?|room/([^/]++)(*:1694)|dorm_inventory/([^/]++)(*:1726)|service/([^/]++)(*:1751)))|masterlist/(?|user/(?|get_user_(?|basic_info/([^/]++)(*:1815)|activities/([^/]++)(*:1843)|qr_reader_assignments/([^/]++)(*:1882))|remove_(?|qr_reader_assignment/([^/]++)(*:1931)|user/([^/]++)(*:1953)))|employer/remove_employer/([^/]++)(*:1997)|position/remove_position/([^/]++)(*:2039)|qr\\-reader/remove_qr_reader/([^/]++)(*:2084))|cashier/remove_(?|charge(?|/([^/]++)(*:2130)|_category/([^/]++)(*:2157))|or_number/([^/]++)(*:2185))|recreational\\-activity/ra_remove_(?|equipment(?|/([^/]++)(*:2252)|_stock/([^/]++)(*:2276))|facility/([^/]++)(*:2303)))))/?$}sDu',
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
            '_route' => 'generated::aQyWxzxth2uRufOr',
=======
            '_route' => 'generated::MuuVWhwg1wYmmODV',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::imUddjuGMKbmZj7j',
=======
            '_route' => 'generated::x2h53TG9hynRCN2F',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::iSCiqNvs5xboCEiM',
=======
            '_route' => 'generated::jnnDqTDggRzA5Ipw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Qgp9TZf1btd117re',
=======
            '_route' => 'generated::2Kk088y5KHfNCi8j',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::j75W0YE7phCZboja',
=======
            '_route' => 'generated::TIYyJKn0HuFXklUs',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::BHOoDygcgc213xMG',
=======
            '_route' => 'generated::Lbw11WofUf13oHBx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::wPvibKfZN9yl52Hf',
=======
            '_route' => 'generated::RbQAp7HCvkqFWQ5q',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::HFloxIDd3tF1TcxY',
=======
            '_route' => 'generated::kWBiekKLEyTGlBUc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::m8gf2hgqzfPqFT81',
=======
            '_route' => 'generated::f63Iu8eLlTF9uFoP',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::luoZ25TDGgCwMX8C',
=======
            '_route' => 'generated::GANlNNZIVqPnDmbu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::wVLDBrG6pc1NCHXz',
=======
            '_route' => 'generated::LmcNQkbdZ4mRzpDE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::vRdc9SHzWd19YKcn',
=======
            '_route' => 'generated::haon9Mwasbi0JYuI',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::lL0PE8GBEAvWQtmg',
=======
            '_route' => 'generated::5SwkR5EIyYTLen1h',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::jjGoT58HVt6BCuyc',
=======
            '_route' => 'generated::c81LKbZfgJ5ky1Du',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::yBsgPamxxANHsNQb',
=======
            '_route' => 'generated::q7ZPUtHyvCZRGAiU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::jv3j2XBz1jwSDJJU',
=======
            '_route' => 'generated::4iXrO5hfwcsaCZ3i',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::xv3OFyiyDWoOumsu',
=======
            '_route' => 'generated::hjwj5WGddDqPjgk6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
            '_route' => 'generated::Djd6w5RCRvjX4eZ9',
=======
            '_route' => 'generated::Rb3ns3zEFOPOyEUB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      724 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::qfqlDBM2xkodDhYN',
=======
            '_route' => 'generated::bxpgmbq8vr9X5PTH',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
          ),
          1 => 
          array (
            0 => 'course',
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
      748 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::begX8A6LAdOWnZqb',
=======
            '_route' => 'generated::JU70IScIQwf0nvYc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
          ),
          1 => 
          array (
            0 => 'traineeId',
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
            '_route' => 'generated::m6dml8cSGFvMXYC3',
=======
            '_route' => 'generated::xTUuH2UJj6qGw9p2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
<<<<<<< HEAD
            '_route' => 'generated::W5FU7HnT1A1jHtP7',
=======
            '_route' => 'generated::mm1d1Fn7WHswuzSo',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      890 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::30Cs0XMHd7Vv5PzN',
=======
            '_route' => 'generated::XNOdhHekTDYv9vxm',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      914 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wvUTFsiQno0gAmKz',
=======
            '_route' => 'generated::FLizg4wHx0KzmJ9J',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      941 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::nWnufN36k5Nr5cq5',
=======
            '_route' => 'generated::3mkgL9XqwuwxW2sd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      963 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::bYZYPxcNV43JJdU6',
=======
            '_route' => 'generated::Y0e5zpPOVyHyqZTg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      995 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZCAbkesMDJnheBM7',
=======
            '_route' => 'generated::DhSJMwz2AuCorY4p',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oGBpVyvsXiVB2fZi',
=======
            '_route' => 'generated::xrblhJlW2zTcpGRD',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1042 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IftIB74skFbbUuHy',
=======
            '_route' => 'generated::zqpIIIuunxcQGgjW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1069 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VnJeja0JGJ7bcJsz',
=======
            '_route' => 'generated::5zLnudpGTz3boySb',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1094 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::EO3ibA9NubvHwb1F',
=======
            '_route' => 'generated::VV3VivyhtkmAtUF8',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1116 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1Rg5d0SrUqJobKrk',
=======
            '_route' => 'generated::VwVfFNJFymGT3agn',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1145 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::o3uPX9wpfI154vQC',
=======
            '_route' => 'generated::Ak5CGGTbfOAoVXav',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1206 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sGENnmocq2apoQra',
=======
            '_route' => 'generated::86xJjXbgqRkSutJX',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1256 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tcx64Cu8SAEzKdV0',
=======
            '_route' => 'generated::nVY5ldirSUgUV6Gz',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VZJL5fIt6nz6iS1w',
=======
            '_route' => 'generated::3pr7yC2jXQP1We0r',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1313 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::miyau5JOYpg5rew0',
=======
            '_route' => 'generated::6oZwd70XDR1eLp8f',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1350 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::paEVtaehLwz9lwtL',
=======
            '_route' => 'generated::fa7uXBxcQBG81dKT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1391 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1AVPL73hADWitwNx',
=======
            '_route' => 'generated::WV1VbskEDcypp8bT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1421 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4G736SUZWO2rfrni',
=======
            '_route' => 'generated::PrQMpYHhdTdWaqBV',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1459 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::a0Ljko2jZAP6D8NL',
=======
            '_route' => 'generated::59vC6vJpCJU1Ijks',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1516 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0RZZi1sXRhqJ4MwY',
=======
            '_route' => 'generated::kEdVXslPEmXt4FTG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1538 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::uJ7CgSLdz6Sb7Ajv',
=======
            '_route' => 'generated::chkFwhIvRwfUyusL',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1596 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eCk1X6qgEeoyagDh',
=======
            '_route' => 'generated::gF15pgeANwfUIYxR',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1637 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::VZLD92Dv64sIdlOf',
=======
            '_route' => 'generated::FkIaQks2pO15yriJ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1661 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FlM2RdIX8I0eYaAG',
=======
            '_route' => 'generated::SA7O0GTVj4IMpVw0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1694 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0Jr4a4ztPaSb2XKB',
=======
            '_route' => 'generated::KxGFQnu3U2Df29Xr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1726 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wzmAeEqIP1ghDfrr',
=======
            '_route' => 'generated::NV2p4XsDFCqFjjhL',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1751 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xzqgOz5AMbIlVUuQ',
=======
            '_route' => 'generated::ED2z4GNNSIvmtUQy',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1815 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tU8XJR6xXJFqe6fH',
=======
            '_route' => 'generated::PgVttlPBp06bVRqI',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1843 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::q8tFedF36ybiG5jI',
=======
            '_route' => 'generated::t88qqru4jtiLgtaN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1882 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ODGhEwaXzDwMMihU',
=======
            '_route' => 'generated::W40tINMe5lOAnoHO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1931 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::D0KoRWWEPzTyTa6z',
=======
            '_route' => 'generated::TS0vlbCsJQHnIfra',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1953 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oOswVSdbhWzZ5off',
=======
            '_route' => 'generated::eXAq5jueuGmvixiF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      1997 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::cGfAzW2tvDYJfnDa',
=======
            '_route' => 'generated::atbKREbpwyE4tZdu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
<<<<<<< HEAD
            '_route' => 'generated::Szt0sTO05MrX3AZP',
=======
            '_route' => 'generated::4WYN5cN54lGxUo1Q',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      2084 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wa4WFcur6XIshaPq',
=======
            '_route' => 'generated::yLyHNs8nt8slEobw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      2130 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::hMf69chnuhnqeyx0',
=======
            '_route' => 'generated::oWxOD8PJ6vXxWMP4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      2157 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3p9xjQVXcEiWNlMA',
=======
            '_route' => 'generated::btfRjv1aCY4KP3x9',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      2185 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pDpDQVfn0KAhErzb',
=======
            '_route' => 'generated::oqbrLwsB91l3YRff',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      2252 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tiAlepoKsFOiFo57',
=======
            '_route' => 'generated::1hSpZKhEQEV6aBfN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      2276 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::zCja1CdFuzeJ4XH5',
=======
            '_route' => 'generated::vuYpPjx3vR5gE1Gf',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
      2303 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oyfTDILkzPTghguC',
=======
            '_route' => 'generated::5XSiisM7ng39ExNd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
    'generated::4K4yPFiHg5vzehDk' => 
=======
    'generated::XfdZwSLikcC6TmKg' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
        'as' => 'generated::4K4yPFiHg5vzehDk',
=======
        'as' => 'generated::XfdZwSLikcC6TmKg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RqHkKfIW9CLsLjys' => 
=======
    'generated::AO1ZDFksJwi9EhTU' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
        'as' => 'generated::RqHkKfIW9CLsLjys',
=======
        'as' => 'generated::AO1ZDFksJwi9EhTU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vpDMJ0IGpjPclq7G' => 
=======
    'generated::Lrw3W7u37VExGcoT' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
        'as' => 'generated::vpDMJ0IGpjPclq7G',
=======
        'as' => 'generated::Lrw3W7u37VExGcoT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::8RqXZ3qMTLNYlrEr' => 
=======
    'generated::dUne37B0XmoaLScR' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
        'as' => 'generated::8RqXZ3qMTLNYlrEr',
=======
        'as' => 'generated::dUne37B0XmoaLScR',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ysVVzp2AmNoCXj5l' => 
=======
    'generated::QKdDac4VOq3v2wNy' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
        'as' => 'generated::ysVVzp2AmNoCXj5l',
=======
        'as' => 'generated::QKdDac4VOq3v2wNy',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kZ2YLCG2D0mYJDTO' => 
=======
    'generated::XXC5DKhO6Pu1i9Z5' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kZ2YLCG2D0mYJDTO',
=======
        'as' => 'generated::XXC5DKhO6Pu1i9Z5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::O6N4XZRLNk2Z5v9c' => 
=======
    'generated::0fmUJ4hiwbadJbFq' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
<<<<<<< HEAD
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getUserRecRequest',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getUserRecRequest',
=======
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::O6N4XZRLNk2Z5v9c',
=======
        'as' => 'generated::0fmUJ4hiwbadJbFq',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vNBqI18hd8v0edwe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::vNBqI18hd8v0edwe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::soOKLS5HXKegNgGZ' => 
=======
    'generated::QWiLbD5uFmJZXa13' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:122:"function (\\Illuminate\\Http\\Request $request) {
        return \\Illuminate\\Support\\Facades\\Broadcast::auth($request);
<<<<<<< HEAD
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a70000000000000000";}}',
=======
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058e0000000000000000";}}',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::soOKLS5HXKegNgGZ',
=======
        'as' => 'generated::QWiLbD5uFmJZXa13',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::q42yPCVhD64FT7sz' => 
=======
    'generated::BPqIXyvo78OWHbHd' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:728:"function(\\Illuminate\\Http\\Request $request) {
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
<<<<<<< HEAD
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a90000000000000000";}}',
=======
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005900000000000000000";}}',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::q42yPCVhD64FT7sz',
=======
        'as' => 'generated::BPqIXyvo78OWHbHd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::50rt7RoTq0owV7Mz' => 
=======
    'generated::qsjnufuccxMVoByq' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@create_or_update_additional_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@create_or_update_additional_info',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::50rt7RoTq0owV7Mz',
=======
        'as' => 'generated::qsjnufuccxMVoByq',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::X1GQMVlJDzTZX59k' => 
=======
    'generated::GPVGpU4VI2Vuirro' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@upload_profile_picture',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@upload_profile_picture',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::X1GQMVlJDzTZX59k',
=======
        'as' => 'generated::GPVGpU4VI2Vuirro',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aQyWxzxth2uRufOr' => 
=======
    'generated::MuuVWhwg1wYmmODV' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_trainee_general_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_trainee_general_info',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aQyWxzxth2uRufOr',
=======
        'as' => 'generated::MuuVWhwg1wYmmODV',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::30emiUQ9j88YBwc9' => 
=======
    'generated::dwsyEpExxKzX5pNw' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::30emiUQ9j88YBwc9',
=======
        'as' => 'generated::dwsyEpExxKzX5pNw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zD0Hi6n3emYMbLXO' => 
=======
    'generated::itFDHNygiBbHLF3T' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zD0Hi6n3emYMbLXO',
=======
        'as' => 'generated::itFDHNygiBbHLF3T',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Xg1m7sq2beNhqFHC' => 
=======
    'generated::rg6exGF9JDoyb8Jn' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_all_courses_and_schools',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@get_all_courses_and_schools',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Xg1m7sq2beNhqFHC',
=======
        'as' => 'generated::rg6exGF9JDoyb8Jn',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EDk8wHfWi0gVnUck' => 
=======
    'generated::zquXBHs4heXU0G9O' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\MyAccount@',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::EDk8wHfWi0gVnUck',
=======
        'as' => 'generated::zquXBHs4heXU0G9O',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nu1bUNWuEI1Zvb1Q' => 
=======
    'generated::s6bwKT41GTBGyt19' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewRanksLicenses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewRanksLicenses',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nu1bUNWuEI1Zvb1Q',
=======
        'as' => 'generated::s6bwKT41GTBGyt19',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::imUddjuGMKbmZj7j' => 
=======
    'generated::x2h53TG9hynRCN2F' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@view_module_requirements_v2',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@view_module_requirements_v2',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::imUddjuGMKbmZj7j',
=======
        'as' => 'generated::x2h53TG9hynRCN2F',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Qgp9TZf1btd117re' => 
=======
    'generated::2Kk088y5KHfNCi8j' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@remove_training_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@remove_training_request',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Qgp9TZf1btd117re',
=======
        'as' => 'generated::2Kk088y5KHfNCi8j',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eZHldGj9H0vajVwc' => 
=======
    'generated::qleHVdOttEraFknd' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_available_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_available_trainings',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eZHldGj9H0vajVwc',
=======
        'as' => 'generated::qleHVdOttEraFknd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XBrRTSyfG4eJxS97' => 
=======
    'generated::ggCWCjXVFrChWnlw' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_enrollment_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_enrollment_request',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XBrRTSyfG4eJxS97',
=======
        'as' => 'generated::ggCWCjXVFrChWnlw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pzIsbiRSfutqgh86' => 
=======
    'generated::ooXeSMOihmDGukz9' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_training_requirements',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@send_training_requirements',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pzIsbiRSfutqgh86',
=======
        'as' => 'generated::ooXeSMOihmDGukz9',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dVjCbReXqznWpVR9' => 
=======
    'generated::G8IOZvcEo96rgSJh' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_requirements_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_requirements_request',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dVjCbReXqznWpVR9',
=======
        'as' => 'generated::G8IOZvcEo96rgSJh',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Gor202jUhvRopYPY' => 
=======
    'generated::Mqw9n2MV9l4skMs2' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_invoice_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@update_invoice_trainings',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Gor202jUhvRopYPY',
=======
        'as' => 'generated::Mqw9n2MV9l4skMs2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cww6XNZjkdrctnSL' => 
=======
    'generated::hFwBVOec8Es7Qxuj' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_all_trainee_invoices_two',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_all_trainee_invoices_two',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cww6XNZjkdrctnSL',
=======
        'as' => 'generated::hFwBVOec8Es7Qxuj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UzSCRFyO2JdUk822' => 
=======
    'generated::dAc5asZTPk2uIm37' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_applications',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_applications',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UzSCRFyO2JdUk822',
=======
        'as' => 'generated::dAc5asZTPk2uIm37',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iSCiqNvs5xboCEiM' => 
=======
    'generated::jnnDqTDggRzA5Ipw' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_application',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@get_application',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::iSCiqNvs5xboCEiM',
=======
        'as' => 'generated::jnnDqTDggRzA5Ipw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oa6nJJQcRp0DInXD' => 
=======
    'generated::UerBRIdM1fG5SCXx' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@change_card_color',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@change_card_color',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oa6nJJQcRp0DInXD',
=======
        'as' => 'generated::UerBRIdM1fG5SCXx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::z7c2pL2DBmO88KvM' => 
=======
    'generated::lxyFm3OxG0VI4eHN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@getCourseModule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@getCourseModule',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::z7c2pL2DBmO88KvM',
=======
        'as' => 'generated::lxyFm3OxG0VI4eHN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::APHMlUhoiAmN3pAJ' => 
=======
    'generated::JEnpjDe3AQePUCt2' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_all_courses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_all_courses',
        'namespace' => NULL,
        'prefix' => 'api/trainings',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::APHMlUhoiAmN3pAJ',
=======
        'as' => 'generated::JEnpjDe3AQePUCt2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AjQzG0ciHUQ87DCT' => 
=======
    'generated::qtn8ZEpmc3ktO9Ru' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_trainee_courses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeCourses@get_trainee_courses',
        'namespace' => NULL,
        'prefix' => 'api/trainings',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::AjQzG0ciHUQ87DCT',
=======
        'as' => 'generated::qtn8ZEpmc3ktO9Ru',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tulKv2IQUNoji1Xm' => 
=======
    'generated::eJC1fnV3Q7gwpS4G' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewRecommendedRooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewRecommendedRooms',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tulKv2IQUNoji1Xm',
=======
        'as' => 'generated::eJC1fnV3Q7gwpS4G',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EsqUZPrYKsm0plOh' => 
=======
    'generated::FFhlXb8p9AJIY1P6' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_room_application',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_room_application',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::EsqUZPrYKsm0plOh',
=======
        'as' => 'generated::FFhlXb8p9AJIY1P6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::j75W0YE7phCZboja' => 
=======
    'generated::TIYyJKn0HuFXklUs' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_applied_dormitories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_applied_dormitories',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::j75W0YE7phCZboja',
=======
        'as' => 'generated::TIYyJKn0HuFXklUs',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HFloxIDd3tF1TcxY' => 
=======
    'generated::kWBiekKLEyTGlBUc' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@remove_applied_dormitories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@remove_applied_dormitories',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HFloxIDd3tF1TcxY',
=======
        'as' => 'generated::kWBiekKLEyTGlBUc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cSWCsGgxY2VVgK7m' => 
=======
    'generated::LJFJUq6FXMcy4oOx' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@check_pending_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@check_pending_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cSWCsGgxY2VVgK7m',
=======
        'as' => 'generated::LJFJUq6FXMcy4oOx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MDSXoBMDxN8tOHNV' => 
=======
    'generated::bAcrGTjKOKo5NAKO' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_personal_dormitory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_personal_dormitory',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MDSXoBMDxN8tOHNV',
=======
        'as' => 'generated::bAcrGTjKOKo5NAKO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3sR2aleXoLzDmGTl' => 
=======
    'generated::Mpp2VrS0rlTzWbSG' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_tenant_room',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_tenant_room',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3sR2aleXoLzDmGTl',
=======
        'as' => 'generated::Mpp2VrS0rlTzWbSG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Sb7Rc6UVlZzFb2jz' => 
=======
    'generated::p21BDobPA1ry9YLR' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_status_dormitory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_status_dormitory',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Sb7Rc6UVlZzFb2jz',
=======
        'as' => 'generated::p21BDobPA1ry9YLR',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7SBn3c4WWeAanZLV' => 
=======
    'generated::zAbphbereSbkzpKS' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_filtered_dorms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@get_filtered_dorms',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7SBn3c4WWeAanZLV',
=======
        'as' => 'generated::zAbphbereSbkzpKS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lhXcu4JGpEndaL62' => 
=======
    'generated::eFi1CcjH1iFo7cxi' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@dormitory_record',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@dormitory_record',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lhXcu4JGpEndaL62',
=======
        'as' => 'generated::eFi1CcjH1iFo7cxi',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BHOoDygcgc213xMG' => 
=======
    'generated::Lbw11WofUf13oHBx' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BHOoDygcgc213xMG',
=======
        'as' => 'generated::Lbw11WofUf13oHBx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::m8gf2hgqzfPqFT81' => 
=======
    'generated::f63Iu8eLlTF9uFoP' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_inclusion_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::m8gf2hgqzfPqFT81',
=======
        'as' => 'generated::f63Iu8eLlTF9uFoP',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8LpDUTOhkrs2gbJP' => 
=======
    'generated::zdO9NJmvZwPUy5xT' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_available_items',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_available_items',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8LpDUTOhkrs2gbJP',
=======
        'as' => 'generated::zdO9NJmvZwPUy5xT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HrLPPig5JE68UDKx' => 
=======
    'generated::Cw1z3PPv6SUyn7B0' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_inclusion',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@request_inclusion',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HrLPPig5JE68UDKx',
=======
        'as' => 'generated::Cw1z3PPv6SUyn7B0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::znAENwXGCLe86tcY' => 
=======
    'generated::lqmIy2bffaCHZiUP' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request_inclusion',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request_inclusion',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::znAENwXGCLe86tcY',
=======
        'as' => 'generated::lqmIy2bffaCHZiUP',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fntvJt5wWq3IkAUI' => 
=======
    'generated::3j0YscWIsLAFHZrS' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_service',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::fntvJt5wWq3IkAUI',
=======
        'as' => 'generated::3j0YscWIsLAFHZrS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::luoZ25TDGgCwMX8C' => 
=======
    'generated::GANlNNZIVqPnDmbu' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@user_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@user_service_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::luoZ25TDGgCwMX8C',
=======
        'as' => 'generated::GANlNNZIVqPnDmbu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wVLDBrG6pc1NCHXz' => 
=======
    'generated::LmcNQkbdZ4mRzpDE' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_service_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wVLDBrG6pc1NCHXz',
=======
        'as' => 'generated::LmcNQkbdZ4mRzpDE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
    'generated::vRdc9SHzWd19YKcn' => 
=======
    'generated::haon9Mwasbi0JYuI' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_service_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vRdc9SHzWd19YKcn',
=======
        'as' => 'generated::haon9Mwasbi0JYuI',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
    'generated::wPvibKfZN9yl52Hf' => 
=======
    'generated::RbQAp7HCvkqFWQ5q' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@applied_dormitory_histories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@applied_dormitory_histories',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wPvibKfZN9yl52Hf',
=======
        'as' => 'generated::RbQAp7HCvkqFWQ5q',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IuK1KHD0Mg4oEHOU' => 
=======
    'generated::TN0D1AuKFKauKjHt' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_dorm_invoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@update_dorm_invoice',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IuK1KHD0Mg4oEHOU',
=======
        'as' => 'generated::TN0D1AuKFKauKjHt',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DdLozEIFfrNAjVLT' => 
=======
    'generated::R5L86s4zoqZVQhdn' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_transfer_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_transfer_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DdLozEIFfrNAjVLT',
=======
        'as' => 'generated::R5L86s4zoqZVQhdn',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lL0PE8GBEAvWQtmg' => 
=======
    'generated::5SwkR5EIyYTLen1h' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_transfer_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_transfer_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lL0PE8GBEAvWQtmg',
=======
        'as' => 'generated::5SwkR5EIyYTLen1h',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::R8eqCv3WgY4ou0Np' => 
=======
    'generated::REXlK4K354dUBVQk' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_transfer_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@view_transfer_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::R8eqCv3WgY4ou0Np',
=======
        'as' => 'generated::REXlK4K354dUBVQk',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ad3YO1xAs84aaIas' => 
=======
    'generated::CeXKekwmYHC0n0LN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_extend_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@create_extend_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ad3YO1xAs84aaIas',
=======
        'as' => 'generated::CeXKekwmYHC0n0LN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jjGoT58HVt6BCuyc' => 
=======
    'generated::c81LKbZfgJ5ky1Du' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_extend_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_extend_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jjGoT58HVt6BCuyc',
=======
        'as' => 'generated::c81LKbZfgJ5ky1Du',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yBsgPamxxANHsNQb' => 
=======
    'generated::q7ZPUtHyvCZRGAiU' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@cancel_request',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yBsgPamxxANHsNQb',
=======
        'as' => 'generated::q7ZPUtHyvCZRGAiU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GrdvOFWprxSAJ3JE' => 
=======
    'generated::h5yPTKfahOpPGG72' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@count_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@count_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GrdvOFWprxSAJ3JE',
=======
        'as' => 'generated::h5yPTKfahOpPGG72',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sESjtvjtbMMsceAb' => 
=======
    'generated::04PtRs22A7hPsmW1' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@send_request_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@send_request_book',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sESjtvjtbMMsceAb',
=======
        'as' => 'generated::04PtRs22A7hPsmW1',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::I9e3SIHf1CJBoyPF' => 
=======
    'generated::27jKLo46RmHhain6' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_books',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::I9e3SIHf1CJBoyPF',
=======
        'as' => 'generated::27jKLo46RmHhain6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ro43kD5oeE0ADcxd' => 
=======
    'generated::D7seDEBiiPfCLlsa' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_over_due',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_over_due',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ro43kD5oeE0ADcxd',
=======
        'as' => 'generated::D7seDEBiiPfCLlsa',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hUUToER0YUL0jR9H' => 
=======
    'generated::XrCtRQPlCoZTPwdF' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_book',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hUUToER0YUL0jR9H',
=======
        'as' => 'generated::XrCtRQPlCoZTPwdF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::A0Y3bre2SSVlIXiP' => 
=======
    'generated::3j1N0ZJE4t4wUHYr' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@pdf_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@pdf_copies',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::A0Y3bre2SSVlIXiP',
=======
        'as' => 'generated::3j1N0ZJE4t4wUHYr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jv3j2XBz1jwSDJJU' => 
=======
    'generated::4iXrO5hfwcsaCZ3i' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_info',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jv3j2XBz1jwSDJJU',
=======
        'as' => 'generated::4iXrO5hfwcsaCZ3i',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::puF6Ys0xfMGBZ43R' => 
=======
    'generated::MdqPL5fYpi196Nte' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_records',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@get_book_records',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::puF6Ys0xfMGBZ43R',
=======
        'as' => 'generated::MdqPL5fYpi196Nte',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dfqSLFiDAdXv7tUz' => 
=======
    'generated::5p7n8VnvI92Hcbhg' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_request_details',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_request_details',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dfqSLFiDAdXv7tUz',
=======
        'as' => 'generated::5p7n8VnvI92Hcbhg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OrDpEzllKwwNFkez' => 
=======
    'generated::BgwmsOdjc0AowKOr' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@count_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@count_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::OrDpEzllKwwNFkez',
=======
        'as' => 'generated::BgwmsOdjc0AowKOr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YwrCILnbsXL8QRw5' => 
=======
    'generated::LfPnXCCPYo69pvmN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_extend_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_extend_request',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YwrCILnbsXL8QRw5',
=======
        'as' => 'generated::LfPnXCCPYo69pvmN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::j84E0tc6gizdn4en' => 
=======
    'generated::G2PFx43jr7yBE0kr' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_available_extension',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@view_available_extension',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::j84E0tc6gizdn4en',
=======
        'as' => 'generated::G2PFx43jr7yBE0kr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JLXcpCl95zm2Nmiv' => 
=======
    'generated::wRMBi5QQVr8BR6vY' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@extend',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@extend',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JLXcpCl95zm2Nmiv',
=======
        'as' => 'generated::wRMBi5QQVr8BR6vY',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sNf3maovPTOmVmUh' => 
=======
    'generated::F48uUD2iLTIZk5Q7' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_extend',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancel_extend',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sNf3maovPTOmVmUh',
=======
        'as' => 'generated::F48uUD2iLTIZk5Q7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0es2j777kpkdWjY5' => 
=======
    'generated::V8KPn7BTs5f1o17y' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@renew',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@renew',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0es2j777kpkdWjY5',
=======
        'as' => 'generated::V8KPn7BTs5f1o17y',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wBZsTi6I0gjvAPgo' => 
=======
    'generated::OYATPmVG2SG3roF5' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancelRenew',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@cancelRenew',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wBZsTi6I0gjvAPgo',
=======
        'as' => 'generated::OYATPmVG2SG3roF5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eF79w9Gnlj6gVWdG' => 
=======
    'generated::GwrSfWXAe8e1gnpO' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@view',
        'namespace' => NULL,
        'prefix' => 'api/client_satisfaction',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eF79w9Gnlj6gVWdG',
=======
        'as' => 'generated::GwrSfWXAe8e1gnpO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Au3X6HwhkBFeSPnq' => 
=======
    'generated::S3ycsJiFwR5H2Ear' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@create',
        'namespace' => NULL,
        'prefix' => 'api/client_satisfaction',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Au3X6HwhkBFeSPnq',
=======
        'as' => 'generated::S3ycsJiFwR5H2Ear',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xv3OFyiyDWoOumsu' => 
=======
    'generated::hjwj5WGddDqPjgk6' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@delete',
        'namespace' => NULL,
        'prefix' => 'api/client_satisfaction',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xv3OFyiyDWoOumsu',
=======
        'as' => 'generated::hjwj5WGddDqPjgk6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eBWFGSG60CkaQ2SS' => 
=======
    'generated::4QYhY1VRK8uNK8JA' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@get_all_trainee_invoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@get_all_trainee_invoices',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eBWFGSG60CkaQ2SS',
=======
        'as' => 'generated::4QYhY1VRK8uNK8JA',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wk5NEBGrpZGFqNNQ' => 
=======
    'generated::izcyraseBKtwnBsj' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@library_penalties',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@library_penalties',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wk5NEBGrpZGFqNNQ',
=======
        'as' => 'generated::izcyraseBKtwnBsj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Pmb6BYpbkO2YEbp9' => 
=======
    'generated::Ys0TSfrYuU3LnbiU' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateLibInvoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateLibInvoice',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Pmb6BYpbkO2YEbp9',
=======
        'as' => 'generated::Ys0TSfrYuU3LnbiU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Djd6w5RCRvjX4eZ9' => 
=======
    'generated::Rb3ns3zEFOPOyEUB' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@view_dormitory_invoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@view_dormitory_invoices',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Djd6w5RCRvjX4eZ9',
=======
        'as' => 'generated::Rb3ns3zEFOPOyEUB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4MONZCplYkhvr1pl' => 
=======
    'generated::6YdiKh6rSWsGFGbd' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateDormInvoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateDormInvoice',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4MONZCplYkhvr1pl',
=======
        'as' => 'generated::6YdiKh6rSWsGFGbd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dlaKjxvOJlVfaCPx' => 
=======
    'generated::c0KT9h29PJywnkX3' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateEnrollmentInvoice',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@updateEnrollmentInvoice',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dlaKjxvOJlVfaCPx',
=======
        'as' => 'generated::c0KT9h29PJywnkX3',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TfXdNwBPnUUMdIb5' => 
=======
    'generated::g1BQ2viIfxMQveO7' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@show',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@show',
        'namespace' => NULL,
        'prefix' => 'api/credits',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TfXdNwBPnUUMdIb5',
=======
        'as' => 'generated::g1BQ2viIfxMQveO7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IjmagFzGKmkgYuPj' => 
=======
    'generated::8VyuOfsY5OuSHqln' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@store',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CreditController@store',
        'namespace' => NULL,
        'prefix' => 'api/credits',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IjmagFzGKmkgYuPj',
=======
        'as' => 'generated::8VyuOfsY5OuSHqln',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9MBIHIAncCOGEy4L' => 
=======
    'generated::89sXszEFEVUm9D80' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@view',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9MBIHIAncCOGEy4L',
=======
        'as' => 'generated::89sXszEFEVUm9D80',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qfqlDBM2xkodDhYN' => 
=======
    'generated::bxpgmbq8vr9X5PTH' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trainer/enrollment/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewTrainingSchedules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewTrainingSchedules',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qfqlDBM2xkodDhYN',
=======
        'as' => 'generated::bxpgmbq8vr9X5PTH',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xgFiz4GRuUFqvrcK' => 
=======
    'generated::R5WMXkgYYQlgJ7tS' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewEquipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewEquipment',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xgFiz4GRuUFqvrcK',
=======
        'as' => 'generated::R5WMXkgYYQlgJ7tS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::y18aHZeeIPFSRNt1' => 
=======
    'generated::F5bOFHxUQGlDzNgN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::y18aHZeeIPFSRNt1',
=======
        'as' => 'generated::F5bOFHxUQGlDzNgN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fuyJEbVh61ZKQC6X' => 
=======
    'generated::CT06uSXTyBwKwoIu' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::fuyJEbVh61ZKQC6X',
=======
        'as' => 'generated::CT06uSXTyBwKwoIu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yEd9RUVE3brkkmvR' => 
=======
    'generated::ZDntfXnu5MpUQWVX' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yEd9RUVE3brkkmvR',
=======
        'as' => 'generated::ZDntfXnu5MpUQWVX',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PZnHioX0jsILHdR2' => 
=======
    'generated::UXQv0AMolwpPvQaW' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_requested_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_requested_equipments',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::PZnHioX0jsILHdR2',
=======
        'as' => 'generated::UXQv0AMolwpPvQaW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Hz8QJM4A1YSjfAmu' => 
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@cancel_requested_units',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@cancel_requested_units',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
        'as' => 'generated::Hz8QJM4A1YSjfAmu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::begX8A6LAdOWnZqb' => 
=======
    'generated::JU70IScIQwf0nvYc' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@trainee_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@trainee_info',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::begX8A6LAdOWnZqb',
=======
        'as' => 'generated::JU70IScIQwf0nvYc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lPF5Yd40c1opLazL' => 
=======
    'generated::5iOgQF7mvTYdyrza' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@update_notification',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@update_notification',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lPF5Yd40c1opLazL',
=======
        'as' => 'generated::5iOgQF7mvTYdyrza',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::woVBqSSFNLxTPR0q' => 
=======
    'generated::quw5de3PtvpWHyuB' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@get_notifications',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\NotificationCtrl@get_notifications',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::woVBqSSFNLxTPR0q',
=======
        'as' => 'generated::quw5de3PtvpWHyuB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xp4hu90LG1NuUr1s' => 
=======
    'generated::hcjy7UURB4hLmDoW' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@change_theme',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@change_theme',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xp4hu90LG1NuUr1s',
=======
        'as' => 'generated::hcjy7UURB4hLmDoW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ieLpY7BDHtiuHWV8' => 
=======
    'generated::WsZ05WvXqGZg8Iwi' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Logout@logout_user',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ieLpY7BDHtiuHWV8',
=======
        'as' => 'generated::WsZ05WvXqGZg8Iwi',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2lLYBvOxKcXPyaDJ' => 
=======
    'generated::V1YyrclJES2TGFRa' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_applications',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_applications',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2lLYBvOxKcXPyaDJ',
=======
        'as' => 'generated::V1YyrclJES2TGFRa',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZHalLJDG527ZOLdA' => 
=======
    'generated::dlsdmOu1i7Z9Or4J' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@requirement_remark',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@requirement_remark',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZHalLJDG527ZOLdA',
=======
        'as' => 'generated::dlsdmOu1i7Z9Or4J',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DzBpFZxtPRYldjzd' => 
=======
    'generated::cOtcYiXHi3H8SzZE' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_training_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_training_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DzBpFZxtPRYldjzd',
=======
        'as' => 'generated::cOtcYiXHi3H8SzZE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dE5QO0VFupt9BgEO' => 
=======
    'generated::wTxWUU0WFUPUxTii' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_expired_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_expired_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dE5QO0VFupt9BgEO',
=======
        'as' => 'generated::wTxWUU0WFUPUxTii',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::m6dml8cSGFvMXYC3' => 
=======
    'generated::xTUuH2UJj6qGw9p2' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_training_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_training_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::m6dml8cSGFvMXYC3',
=======
        'as' => 'generated::xTUuH2UJj6qGw9p2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::732hzbxj2f4oQi91' => 
=======
    'generated::etYsiRutjCKgrV1m' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrolled',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrolled',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::732hzbxj2f4oQi91',
=======
        'as' => 'generated::etYsiRutjCKgrV1m',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::90fBx5OYjrIkFQkY' => 
=======
    'generated::loScyaC2hcasURM3' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_finished',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_finished',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::90fBx5OYjrIkFQkY',
=======
        'as' => 'generated::loScyaC2hcasURM3',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UBS57sZ7dRzdKkjz' => 
=======
    'generated::CcXwXeElDerJ35oc' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@lock_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@lock_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UBS57sZ7dRzdKkjz',
=======
        'as' => 'generated::CcXwXeElDerJ35oc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::H3q9LKFawnA4KAuc' => 
=======
    'generated::NTVnJhypnPL0Xlmf' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schedules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schedules',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::H3q9LKFawnA4KAuc',
=======
        'as' => 'generated::NTVnJhypnPL0Xlmf',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IhL9pMMYVnu38Pkk' => 
=======
    'generated::wGFEt1DnZCY9ZQ79' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IhL9pMMYVnu38Pkk',
=======
        'as' => 'generated::wGFEt1DnZCY9ZQ79',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::W5FU7HnT1A1jHtP7' => 
=======
    'generated::mm1d1Fn7WHswuzSo' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::W5FU7HnT1A1jHtP7',
=======
        'as' => 'generated::mm1d1Fn7WHswuzSo',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ruRj0HaO2hzVN9q8' => 
=======
    'generated::3XiVgnFFCpm8dAFU' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_modules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_modules',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ruRj0HaO2hzVN9q8',
=======
        'as' => 'generated::3XiVgnFFCpm8dAFU',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IqCUFHoQ9iCkJaBt' => 
=======
    'generated::ElvaAi4s59Hoc1FW' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IqCUFHoQ9iCkJaBt',
=======
        'as' => 'generated::ElvaAi4s59Hoc1FW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nWnufN36k5Nr5cq5' => 
=======
    'generated::3mkgL9XqwuwxW2sd' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nWnufN36k5Nr5cq5',
=======
        'as' => 'generated::3mkgL9XqwuwxW2sd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UqSC6jlxJ1be57CN' => 
=======
    'generated::Ll9IY0tjk2hcOizs' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_module_types',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_module_types',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UqSC6jlxJ1be57CN',
=======
        'as' => 'generated::Ll9IY0tjk2hcOizs',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fjrIMQPuIyLXO2Cs' => 
=======
    'generated::SRQR1PJR2EWgdGGE' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module_type',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module_type',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::fjrIMQPuIyLXO2Cs',
=======
        'as' => 'generated::SRQR1PJR2EWgdGGE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bYZYPxcNV43JJdU6' => 
=======
    'generated::Y0e5zpPOVyHyqZTg' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module_type',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module_type',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bYZYPxcNV43JJdU6',
=======
        'as' => 'generated::Y0e5zpPOVyHyqZTg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ekHBxojCKuvzxzw6' => 
=======
    'generated::fhcCOGxw4KB3YFSQ' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_certificates',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_certificates',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ekHBxojCKuvzxzw6',
=======
        'as' => 'generated::fhcCOGxw4KB3YFSQ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TDBRTGVRmVssAbQc' => 
=======
    'generated::cXYgS378OtASc9Gh' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_certificate',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_certificate',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TDBRTGVRmVssAbQc',
=======
        'as' => 'generated::cXYgS378OtASc9Gh',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZCAbkesMDJnheBM7' => 
=======
    'generated::DhSJMwz2AuCorY4p' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_certificate',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_certificate',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZCAbkesMDJnheBM7',
=======
        'as' => 'generated::DhSJMwz2AuCorY4p',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EvnhUEBW1jiIlFg7' => 
=======
    'generated::wIdSLPYMXZrauDdj' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_requirements',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_requirements',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::EvnhUEBW1jiIlFg7',
=======
        'as' => 'generated::wIdSLPYMXZrauDdj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qmSCv6RicAOSwXyB' => 
=======
    'generated::pr5u9i3FVrPwqA2m' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qmSCv6RicAOSwXyB',
=======
        'as' => 'generated::pr5u9i3FVrPwqA2m',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sGENnmocq2apoQra' => 
=======
    'generated::86xJjXbgqRkSutJX' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sGENnmocq2apoQra',
=======
        'as' => 'generated::86xJjXbgqRkSutJX',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wRyI4JwrNx4w4Yn4' => 
=======
    'generated::hsr6a3RGbBwCQMie' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schools',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schools',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wRyI4JwrNx4w4Yn4',
=======
        'as' => 'generated::hsr6a3RGbBwCQMie',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::S3AugwiE5FAIgwzI' => 
=======
    'generated::jlZ28zDymfAu8jwd' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_school',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_school',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::S3AugwiE5FAIgwzI',
=======
        'as' => 'generated::jlZ28zDymfAu8jwd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::30Cs0XMHd7Vv5PzN' => 
=======
    'generated::XNOdhHekTDYv9vxm' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_school',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_school',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::30Cs0XMHd7Vv5PzN',
=======
        'as' => 'generated::XNOdhHekTDYv9vxm',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kHwcY5yUXOQXIDZM' => 
=======
    'generated::UajUz2Mx4O1IjMeN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_courses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_courses',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kHwcY5yUXOQXIDZM',
=======
        'as' => 'generated::UajUz2Mx4O1IjMeN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yFOrkJj94qBNTTdz' => 
=======
    'generated::M7FSvPaEE9SCheuQ' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yFOrkJj94qBNTTdz',
=======
        'as' => 'generated::M7FSvPaEE9SCheuQ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oGBpVyvsXiVB2fZi' => 
=======
    'generated::xrblhJlW2zTcpGRD' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oGBpVyvsXiVB2fZi',
=======
        'as' => 'generated::xrblhJlW2zTcpGRD',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XO3ZULf106iRyaVQ' => 
=======
    'generated::KFzKUjE1MDqluwTe' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_vouchers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_vouchers',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XO3ZULf106iRyaVQ',
=======
        'as' => 'generated::KFzKUjE1MDqluwTe',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::C0Z8qR9ZjOBtcewP' => 
=======
    'generated::GAyYKe7b31kxCJ0n' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_voucher',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_voucher',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::C0Z8qR9ZjOBtcewP',
=======
        'as' => 'generated::GAyYKe7b31kxCJ0n',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VnJeja0JGJ7bcJsz' => 
=======
    'generated::5zLnudpGTz3boySb' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_voucher',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_voucher',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VnJeja0JGJ7bcJsz',
=======
        'as' => 'generated::5zLnudpGTz3boySb',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5p5jJX9A7fgQcV8f' => 
=======
    'generated::1esOAuglfBPENEO0' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_sponsors',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_sponsors',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5p5jJX9A7fgQcV8f',
=======
        'as' => 'generated::1esOAuglfBPENEO0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YcOjeNiRxtJUwP7T' => 
=======
    'generated::y0bgcuVn6LBKYLRe' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_sponsor',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_sponsor',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YcOjeNiRxtJUwP7T',
=======
        'as' => 'generated::y0bgcuVn6LBKYLRe',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wvUTFsiQno0gAmKz' => 
=======
    'generated::FLizg4wHx0KzmJ9J' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_sponsor',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_sponsor',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wvUTFsiQno0gAmKz',
=======
        'as' => 'generated::FLizg4wHx0KzmJ9J',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5TcfXu9o2NRtRnJJ' => 
=======
    'generated::Ht5XMWBCqAISMvFO' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_licenses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_licenses',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5TcfXu9o2NRtRnJJ',
=======
        'as' => 'generated::Ht5XMWBCqAISMvFO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5rPo6b1I3qcNXi9S' => 
=======
    'generated::RzGAgBFHXxvbuw3p' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_license',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_license',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5rPo6b1I3qcNXi9S',
=======
        'as' => 'generated::RzGAgBFHXxvbuw3p',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EO3ibA9NubvHwb1F' => 
=======
    'generated::VV3VivyhtkmAtUF8' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_license',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_license',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::EO3ibA9NubvHwb1F',
=======
        'as' => 'generated::VV3VivyhtkmAtUF8',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Xj4P3CRO9PDJmXy8' => 
=======
    'generated::AxCtAknqYnFhFTsl' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_ranks',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_ranks',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Xj4P3CRO9PDJmXy8',
=======
        'as' => 'generated::AxCtAknqYnFhFTsl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jyGocK6fRaAAjsEJ' => 
=======
    'generated::fMklBfzCaxwkeNja' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_rank',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_rank',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jyGocK6fRaAAjsEJ',
=======
        'as' => 'generated::fMklBfzCaxwkeNja',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1Rg5d0SrUqJobKrk' => 
=======
    'generated::VwVfFNJFymGT3agn' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_rank',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_rank',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::1Rg5d0SrUqJobKrk',
=======
        'as' => 'generated::VwVfFNJFymGT3agn',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uWUxeGoehYzaj8ff' => 
=======
    'generated::vj0okDvucfZAxu6T' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_facilitators',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_facilitators',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uWUxeGoehYzaj8ff',
=======
        'as' => 'generated::vj0okDvucfZAxu6T',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HeArl3WSTN3f2YwR' => 
=======
    'generated::WU6tE2F16yySLZ6O' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_facilitator',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_facilitator',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HeArl3WSTN3f2YwR',
=======
        'as' => 'generated::WU6tE2F16yySLZ6O',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::o3uPX9wpfI154vQC' => 
=======
    'generated::Ak5CGGTbfOAoVXav' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_facilitator',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_facilitator',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::o3uPX9wpfI154vQC',
=======
        'as' => 'generated::Ak5CGGTbfOAoVXav',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lddWlzgBScaLUMOA' => 
=======
    'generated::QpDWSIwVwpmfuhNj' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_training_fees_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_training_fees_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lddWlzgBScaLUMOA',
=======
        'as' => 'generated::QpDWSIwVwpmfuhNj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Bsyjw5bzsvDOM5qb' => 
=======
    'generated::DJ93LNHapozT2on4' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_course_module_fees',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_course_module_fees',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Bsyjw5bzsvDOM5qb',
=======
        'as' => 'generated::DJ93LNHapozT2on4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bm3D7XjOXzhqym1u' => 
=======
    'generated::oQsuqUHew0cAhKP1' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course_fee',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course_fee',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bm3D7XjOXzhqym1u',
=======
        'as' => 'generated::oQsuqUHew0cAhKP1',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IftIB74skFbbUuHy' => 
=======
    'generated::zqpIIIuunxcQGgjW' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course_fee',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course_fee',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IftIB74skFbbUuHy',
=======
        'as' => 'generated::zqpIIIuunxcQGgjW',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UfJrRZE344ftt0pv' => 
=======
    'generated::vzk38O05P5akq1aG' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UfJrRZE344ftt0pv',
=======
        'as' => 'generated::vzk38O05P5akq1aG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::P5HXs5y0zorz2jfF' => 
=======
    'generated::imQDPJlB0fd5Ix0t' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_pre_data',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_pre_data',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::P5HXs5y0zorz2jfF',
=======
        'as' => 'generated::imQDPJlB0fd5Ix0t',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tcx64Cu8SAEzKdV0' => 
=======
    'generated::nVY5ldirSUgUV6Gz' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tcx64Cu8SAEzKdV0',
=======
        'as' => 'generated::nVY5ldirSUgUV6Gz',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VZJL5fIt6nz6iS1w' => 
=======
    'generated::3pr7yC2jXQP1We0r' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_copies',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VZJL5fIt6nz6iS1w',
=======
        'as' => 'generated::3pr7yC2jXQP1We0r',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9gHCGGOeZ8CUdgKN' => 
=======
    'generated::03yxuW885HY6pmT7' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_book_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_book_copies',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9gHCGGOeZ8CUdgKN',
=======
        'as' => 'generated::03yxuW885HY6pmT7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::paEVtaehLwz9lwtL' => 
=======
    'generated::fa7uXBxcQBG81dKT' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_total_reservations',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_total_reservations',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::paEVtaehLwz9lwtL',
=======
        'as' => 'generated::fa7uXBxcQBG81dKT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YckB1Q5Aa8CBiRN4' => 
=======
    'generated::XNdll2nKPQTwB3Q4' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YckB1Q5Aa8CBiRN4',
=======
        'as' => 'generated::XNdll2nKPQTwB3Q4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kWRySffadi98n0kt' => 
=======
    'generated::XDeC2kKegxAqr9jS' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_available_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_available_books',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kWRySffadi98n0kt',
=======
        'as' => 'generated::XDeC2kKegxAqr9jS',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cYmN2KneBYsMTyCD' => 
=======
    'generated::Rfo0MJEw7qKsoOit' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_walkin_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_walkin_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cYmN2KneBYsMTyCD',
=======
        'as' => 'generated::Rfo0MJEw7qKsoOit',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XP2GZbE8rBWIHOWt' => 
=======
    'generated::ABN1I02kywpWSlag' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XP2GZbE8rBWIHOWt',
=======
        'as' => 'generated::ABN1I02kywpWSlag',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3qag8WuIGwuIBh3T' => 
=======
    'generated::cWDAuF0D8pAhqJrC' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3qag8WuIGwuIBh3T',
=======
        'as' => 'generated::cWDAuF0D8pAhqJrC',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6tla1vKxuOvkp9Wj' => 
=======
    'generated::X5ow7cj3EPu3cewl' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_fines',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_fines',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6tla1vKxuOvkp9Wj',
=======
        'as' => 'generated::X5ow7cj3EPu3cewl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WjBLkTkpQx0VG5fr' => 
=======
    'generated::ENSvzR0F4khubTNF' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WjBLkTkpQx0VG5fr',
=======
        'as' => 'generated::ENSvzR0F4khubTNF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1AVPL73hADWitwNx' => 
=======
    'generated::WV1VbskEDcypp8bT' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::1AVPL73hADWitwNx',
=======
        'as' => 'generated::WV1VbskEDcypp8bT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ETzUCujsUuRn7RQQ' => 
=======
    'generated::dvtWsJYYtShKESXO' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation_that_needs_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation_that_needs_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ETzUCujsUuRn7RQQ',
=======
        'as' => 'generated::dvtWsJYYtShKESXO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::G8wb4ctHoHnme9qC' => 
=======
    'generated::1KF4aSL44sGh871e' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_prolongation_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_prolongation_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::G8wb4ctHoHnme9qC',
=======
        'as' => 'generated::1KF4aSL44sGh871e',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0BhovA0PmmJhFgql' => 
=======
    'generated::pXXhKUCCLn85hXfE' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books_that_protractible',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books_that_protractible',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0BhovA0PmmJhFgql',
=======
        'as' => 'generated::pXXhKUCCLn85hXfE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YRXh24TsWocK3wX8' => 
=======
    'generated::r9GYFxkVZyyW18hT' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_renewal_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_renewal_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YRXh24TsWocK3wX8',
=======
        'as' => 'generated::r9GYFxkVZyyW18hT',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::N0BOS5rOBY9Qzs8C' => 
=======
    'generated::RAaeXPTylAKx1OBr' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_extension_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_extension_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::N0BOS5rOBY9Qzs8C',
=======
        'as' => 'generated::RAaeXPTylAKx1OBr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TRMtkQaZt2m57CFx' => 
=======
    'generated::lwel8E1iO5ky1Vy2' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_prolongation_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_prolongation_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TRMtkQaZt2m57CFx',
=======
        'as' => 'generated::lwel8E1iO5ky1Vy2',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7SS55AUtyIQMB66V' => 
=======
    'generated::8W8mbdqbDW2yUOZG' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@count_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@count_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7SS55AUtyIQMB66V',
=======
        'as' => 'generated::8W8mbdqbDW2yUOZG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iXuueaQQdUuo4YS7' => 
=======
    'generated::6Nhy4Pu7Zi1tmLff' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@check_for_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@check_for_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::iXuueaQQdUuo4YS7',
=======
        'as' => 'generated::6Nhy4Pu7Zi1tmLff',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::miyau5JOYpg5rew0' => 
=======
    'generated::6oZwd70XDR1eLp8f' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_copy',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_copy',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::miyau5JOYpg5rew0',
=======
        'as' => 'generated::6oZwd70XDR1eLp8f',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4G736SUZWO2rfrni' => 
=======
    'generated::PrQMpYHhdTdWaqBV' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_book',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4G736SUZWO2rfrni',
=======
        'as' => 'generated::PrQMpYHhdTdWaqBV',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CJYnB6kGt1ENVgrZ' => 
=======
    'generated::peDanLex5xivr4g9' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_entries',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_entries',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CJYnB6kGt1ENVgrZ',
=======
        'as' => 'generated::peDanLex5xivr4g9',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BfbaYSSEsV1wMBMY' => 
=======
    'generated::gJ3cl3DVOhWkJcCw' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_active_entries',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_active_entries',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BfbaYSSEsV1wMBMY',
=======
        'as' => 'generated::gJ3cl3DVOhWkJcCw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::riAakYBX1NCTIoyZ' => 
=======
    'generated::RlAOqjHuF8hRDkSz' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book_entry',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book_entry',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::riAakYBX1NCTIoyZ',
=======
        'as' => 'generated::RlAOqjHuF8hRDkSz',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::a0Ljko2jZAP6D8NL' => 
=======
    'generated::59vC6vJpCJU1Ijks' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_entry',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_entry',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::a0Ljko2jZAP6D8NL',
=======
        'as' => 'generated::59vC6vJpCJU1Ijks',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7SLKmd3QnkQxMEaa' => 
=======
    'generated::5dPT0GC6JNucv3zG' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@dormitories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@dormitories',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7SLKmd3QnkQxMEaa',
=======
        'as' => 'generated::5dPT0GC6JNucv3zG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0RZZi1sXRhqJ4MwY' => 
=======
    'generated::kEdVXslPEmXt4FTG' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0RZZi1sXRhqJ4MwY',
=======
        'as' => 'generated::kEdVXslPEmXt4FTG',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uJ7CgSLdz6Sb7Ajv' => 
=======
    'generated::chkFwhIvRwfUyusL' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uJ7CgSLdz6Sb7Ajv',
=======
        'as' => 'generated::chkFwhIvRwfUyusL',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HpHGr5Kn4MW5esqh' => 
=======
    'generated::BMhtUtkY1RXk0Bf1' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HpHGr5Kn4MW5esqh',
=======
        'as' => 'generated::BMhtUtkY1RXk0Bf1',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rmHpfKtjoBMeSxhf' => 
=======
    'generated::7jIjmLA3WUSymdAF' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rmHpfKtjoBMeSxhf',
=======
        'as' => 'generated::7jIjmLA3WUSymdAF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DBDT0sIDMtmpis5B' => 
=======
    'generated::4j99bGds0dEm0Y8O' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_dorms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_dorms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DBDT0sIDMtmpis5B',
=======
        'as' => 'generated::4j99bGds0dEm0Y8O',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vCYPtYyG4MeFRXgm' => 
=======
    'generated::x6VTMC6iYuBSlDgY' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vCYPtYyG4MeFRXgm',
=======
        'as' => 'generated::x6VTMC6iYuBSlDgY',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hbMHdKYrtX4iE2VS' => 
=======
    'generated::jw7qkEJH475fREsM' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_supplies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_supplies',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hbMHdKYrtX4iE2VS',
=======
        'as' => 'generated::jw7qkEJH475fREsM',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6omInDYyt0yAZIZL' => 
=======
    'generated::qDizPyFVV7zkb2Fa' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6omInDYyt0yAZIZL',
=======
        'as' => 'generated::qDizPyFVV7zkb2Fa',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::D7V3Y27agyYPs7wB' => 
=======
    'generated::KRn2GCYKCT9woU5A' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_all_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_all_requests',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::D7V3Y27agyYPs7wB',
=======
        'as' => 'generated::KRn2GCYKCT9woU5A',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VZLD92Dv64sIdlOf' => 
=======
    'generated::FkIaQks2pO15yriJ' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_dorm_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_dorm_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VZLD92Dv64sIdlOf',
=======
        'as' => 'generated::FkIaQks2pO15yriJ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0Jr4a4ztPaSb2XKB' => 
=======
    'generated::KxGFQnu3U2Df29Xr' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_room',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_room',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0Jr4a4ztPaSb2XKB',
=======
        'as' => 'generated::KxGFQnu3U2Df29Xr',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::siVhQ967Rx93J6wB' => 
=======
    'generated::GgWIFLJKXvMnGO9M' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dorm_inventories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dorm_inventories',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::siVhQ967Rx93J6wB',
=======
        'as' => 'generated::GgWIFLJKXvMnGO9M',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RF8Nz4DDLxHJfr64' => 
=======
    'generated::uH0gs1BzTUbU3UcN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RF8Nz4DDLxHJfr64',
=======
        'as' => 'generated::uH0gs1BzTUbU3UcN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kA0IybWffnhq6R2b' => 
=======
    'generated::nTwxtDJBV6i7UvAQ' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::kA0IybWffnhq6R2b',
=======
        'as' => 'generated::nTwxtDJBV6i7UvAQ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::s8E5RJyfjOVOgOrq' => 
=======
    'generated::sWOC72uvlQHcNbgc' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory_inventory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory_inventory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::s8E5RJyfjOVOgOrq',
=======
        'as' => 'generated::sWOC72uvlQHcNbgc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eCk1X6qgEeoyagDh' => 
=======
    'generated::gF15pgeANwfUIYxR' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eCk1X6qgEeoyagDh',
=======
        'as' => 'generated::gF15pgeANwfUIYxR',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wzmAeEqIP1ghDfrr' => 
=======
    'generated::NV2p4XsDFCqFjjhL' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wzmAeEqIP1ghDfrr',
=======
        'as' => 'generated::NV2p4XsDFCqFjjhL',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jaMEmYbq0dfdtlRK' => 
=======
    'generated::GwmPEhccPea5fZ6B' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@services',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@services',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::jaMEmYbq0dfdtlRK',
=======
        'as' => 'generated::GwmPEhccPea5fZ6B',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pwIQXOfBpHRx4Hzu' => 
=======
    'generated::jzwGmjigqlHEMmJ8' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pwIQXOfBpHRx4Hzu',
=======
        'as' => 'generated::jzwGmjigqlHEMmJ8',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xzqgOz5AMbIlVUuQ' => 
=======
    'generated::ED2z4GNNSIvmtUQy' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xzqgOz5AMbIlVUuQ',
=======
        'as' => 'generated::ED2z4GNNSIvmtUQy',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LHEoNhMOQn1k3F0i' => 
=======
    'generated::ZnScKghvJJNJCHqH' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LHEoNhMOQn1k3F0i',
=======
        'as' => 'generated::ZnScKghvJJNJCHqH',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::S3acUYFlq3jAa5NS' => 
=======
    'generated::lIOZYSGuFsKMMt6s' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_list',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_list',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::S3acUYFlq3jAa5NS',
=======
        'as' => 'generated::lIOZYSGuFsKMMt6s',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UyXYEwh2qTuu0S3G' => 
=======
    'generated::NopLnqachDYDO8nK' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_dorm_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_dorm_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UyXYEwh2qTuu0S3G',
=======
        'as' => 'generated::NopLnqachDYDO8nK',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VlnDVQBUTH5hBcVS' => 
=======
    'generated::PZhFRDMcrgLSRsuf' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_requested_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_requested_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VlnDVQBUTH5hBcVS',
=======
        'as' => 'generated::PZhFRDMcrgLSRsuf',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WLIqUKDhvqFK35rN' => 
=======
    'generated::xpkyJc83XH0gahqB' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@request_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@request_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WLIqUKDhvqFK35rN',
=======
        'as' => 'generated::xpkyJc83XH0gahqB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fIUABb1GMSyuNKHf' => 
=======
    'generated::rwmyl17BdHQ2r2Rx' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_requested_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_requested_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::fIUABb1GMSyuNKHf',
=======
        'as' => 'generated::rwmyl17BdHQ2r2Rx',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CMXxDYxc7grRrYiv' => 
=======
    'generated::KdPWCqKmVVr11N8H' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CMXxDYxc7grRrYiv',
=======
        'as' => 'generated::KdPWCqKmVVr11N8H',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JB1O1Y5HAsoPzddG' => 
=======
    'generated::RjBTZW2oqLwAYFKl' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_charges',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_charges',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JB1O1Y5HAsoPzddG',
=======
        'as' => 'generated::RjBTZW2oqLwAYFKl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zlLVKSZBwqwR1Yqg' => 
=======
    'generated::WyjtNkvlpkH5DoiZ' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@created_or_update_dormitory_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@created_or_update_dormitory_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zlLVKSZBwqwR1Yqg',
=======
        'as' => 'generated::WyjtNkvlpkH5DoiZ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FlM2RdIX8I0eYaAG' => 
=======
    'generated::SA7O0GTVj4IMpVw0' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FlM2RdIX8I0eYaAG',
=======
        'as' => 'generated::SA7O0GTVj4IMpVw0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8drjdgKmNzbrXxcs' => 
=======
    'generated::DU9GrQYDBXKqt73F' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::8drjdgKmNzbrXxcs',
=======
        'as' => 'generated::DU9GrQYDBXKqt73F',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tU8XJR6xXJFqe6fH' => 
=======
    'generated::PgVttlPBp06bVRqI' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::tU8XJR6xXJFqe6fH',
=======
        'as' => 'generated::PgVttlPBp06bVRqI',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::q8tFedF36ybiG5jI' => 
=======
    'generated::t88qqru4jtiLgtaN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::q8tFedF36ybiG5jI',
=======
        'as' => 'generated::t88qqru4jtiLgtaN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ODGhEwaXzDwMMihU' => 
=======
    'generated::W40tINMe5lOAnoHO' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::ODGhEwaXzDwMMihU',
=======
        'as' => 'generated::W40tINMe5lOAnoHO',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mnBlbsxLN0HhqUiQ' => 
=======
    'generated::4PCynJksxGMwsXEJ' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::mnBlbsxLN0HhqUiQ',
=======
        'as' => 'generated::4PCynJksxGMwsXEJ',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AkB7McKbPa2pwefO' => 
=======
    'generated::wKHocTclutSEchD6' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::AkB7McKbPa2pwefO',
=======
        'as' => 'generated::wKHocTclutSEchD6',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::D0KoRWWEPzTyTa6z' => 
=======
    'generated::TS0vlbCsJQHnIfra' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::D0KoRWWEPzTyTa6z',
=======
        'as' => 'generated::TS0vlbCsJQHnIfra',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oOswVSdbhWzZ5off' => 
=======
    'generated::eXAq5jueuGmvixiF' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::oOswVSdbhWzZ5off',
=======
        'as' => 'generated::eXAq5jueuGmvixiF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cw4o4lMvtlcthb2G' => 
=======
    'generated::8vb2iDaQ7suuOmSi' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::cw4o4lMvtlcthb2G',
=======
        'as' => 'generated::8vb2iDaQ7suuOmSi',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::p9bfGWMwF1Xzpk70' => 
=======
    'generated::NX2wdGYNRosivVgj' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::p9bfGWMwF1Xzpk70',
=======
        'as' => 'generated::NX2wdGYNRosivVgj',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cGfAzW2tvDYJfnDa' => 
=======
    'generated::atbKREbpwyE4tZdu' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::cGfAzW2tvDYJfnDa',
=======
        'as' => 'generated::atbKREbpwyE4tZdu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iuf7veixDmIIfJTs' => 
=======
    'generated::P6NjpiKAtpJZwZkl' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::iuf7veixDmIIfJTs',
=======
        'as' => 'generated::P6NjpiKAtpJZwZkl',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cJtNcNVJcALt4pLD' => 
=======
    'generated::RYBrg0wfe2qELFFP' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::cJtNcNVJcALt4pLD',
=======
        'as' => 'generated::RYBrg0wfe2qELFFP',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Szt0sTO05MrX3AZP' => 
=======
    'generated::4WYN5cN54lGxUo1Q' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
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
        'as' => 'generated::Szt0sTO05MrX3AZP',
=======
        'as' => 'generated::4WYN5cN54lGxUo1Q',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IJj5Ec8WIiSPuabL' => 
=======
    'generated::4nlppXPoJ9hZ8aIq' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_readers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_readers',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IJj5Ec8WIiSPuabL',
=======
        'as' => 'generated::4nlppXPoJ9hZ8aIq',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xL7wV4xmNAyPlYGn' => 
=======
    'generated::irYMpJkn01ZLuTN4' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_reader_records',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_qr_reader_records',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xL7wV4xmNAyPlYGn',
=======
        'as' => 'generated::irYMpJkn01ZLuTN4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2S7len4zu7f3vh5W' => 
=======
    'generated::dlrz7CQCNpSLrEE0' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_qr_reader',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_qr_reader',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2S7len4zu7f3vh5W',
=======
        'as' => 'generated::dlrz7CQCNpSLrEE0',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wa4WFcur6XIshaPq' => 
=======
    'generated::yLyHNs8nt8slEobw' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN_ENROLLMENT,ADMIN_DORMITORY,ADMIN_LIBRARY,ADMIN-RA,GUARD',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_qr_reader',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_qr_reader',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/qr-reader',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wa4WFcur6XIshaPq',
=======
        'as' => 'generated::yLyHNs8nt8slEobw',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iG1vvg4zyi8L3UK0' => 
=======
    'generated::9wSG34wMuRBSMvGh' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_payments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_payments',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::iG1vvg4zyi8L3UK0',
=======
        'as' => 'generated::9wSG34wMuRBSMvGh',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wJWf6ASdMfezkQYI' => 
=======
    'generated::TmDnJJGUXhQBxxxN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@pay_walkin',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@pay_walkin',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wJWf6ASdMfezkQYI',
=======
        'as' => 'generated::TmDnJJGUXhQBxxxN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zVjCi4yg9B0Xpkh5' => 
=======
    'generated::myk1uhv43Vc4zFpc' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@verify_payment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@verify_payment',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zVjCi4yg9B0Xpkh5',
=======
        'as' => 'generated::myk1uhv43Vc4zFpc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HgeQGEJXobblJv0Z' => 
=======
    'generated::sY0ddvp9FUPKyKGF' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HgeQGEJXobblJv0Z',
=======
        'as' => 'generated::sY0ddvp9FUPKyKGF',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4youoDNAOSf4Do9T' => 
=======
    'generated::yIpJ9SDeBWr8tjv5' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4youoDNAOSf4Do9T',
=======
        'as' => 'generated::yIpJ9SDeBWr8tjv5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GmiS30XXlqflHQU2' => 
=======
    'generated::vtTUV50pg7sunZjv' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GmiS30XXlqflHQU2',
=======
        'as' => 'generated::vtTUV50pg7sunZjv',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hMf69chnuhnqeyx0' => 
=======
    'generated::oWxOD8PJ6vXxWMP4' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hMf69chnuhnqeyx0',
=======
        'as' => 'generated::oWxOD8PJ6vXxWMP4',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cOUB1SX3bqONnFfc' => 
=======
    'generated::UBi0sIc0T0Oxrn7e' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cOUB1SX3bqONnFfc',
=======
        'as' => 'generated::UBi0sIc0T0Oxrn7e',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Gu2aLsj13ULaKz7s' => 
=======
    'generated::u3SPm4ibDrpejMrp' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Gu2aLsj13ULaKz7s',
=======
        'as' => 'generated::u3SPm4ibDrpejMrp',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3p9xjQVXcEiWNlMA' => 
=======
    'generated::btfRjv1aCY4KP3x9' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3p9xjQVXcEiWNlMA',
=======
        'as' => 'generated::btfRjv1aCY4KP3x9',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::56tbsAjiPAj91Qua' => 
=======
    'generated::j9WVIIkDWd18XTU7' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_or_numbers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_or_numbers',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::56tbsAjiPAj91Qua',
=======
        'as' => 'generated::j9WVIIkDWd18XTU7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3JSfdDPnpS18BsWu' => 
=======
    'generated::aEHG8INHHFpretqX' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_or_number',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_or_number',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3JSfdDPnpS18BsWu',
=======
        'as' => 'generated::aEHG8INHHFpretqX',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pDpDQVfn0KAhErzb' => 
=======
    'generated::oqbrLwsB91l3YRff' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_or_number',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_or_number',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::pDpDQVfn0KAhErzb',
=======
        'as' => 'generated::oqbrLwsB91l3YRff',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NSORGLCpYyR4noUN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/get_recreational_requests',
=======
    'generated::3fL0c43qAKHcxQD5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/recreational-activity/ra_count/get_ra_count',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
<<<<<<< HEAD
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@et_recreational_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@et_recreational_requests',
=======
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@RACount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@RACount',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::NSORGLCpYyR4noUN',
=======
        'as' => 'generated::3fL0c43qAKHcxQD5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qbWKRHdJpiSqCcqo' => 
=======
    'generated::RL29tv5f3sqyuJxL' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_requests',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qbWKRHdJpiSqCcqo',
=======
        'as' => 'generated::RL29tv5f3sqyuJxL',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MefDgacTCsZu18CG' => 
=======
    'generated::UMHe5fCk0Tovb3zu' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::MefDgacTCsZu18CG',
=======
        'as' => 'generated::UMHe5fCk0Tovb3zu',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XAfIkqSz75DGyvy9' => 
=======
    'generated::4ryFdngWS43JhnB7' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_match_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@get_requested_match_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XAfIkqSz75DGyvy9',
=======
        'as' => 'generated::4ryFdngWS43JhnB7',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DfmGLSNqQyJEvbPZ' => 
=======
    'generated::KQUEapcruCCMRqT5' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@issue_requested_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@issue_requested_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DfmGLSNqQyJEvbPZ',
=======
        'as' => 'generated::KQUEapcruCCMRqT5',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tN3zADx13hBSaHQF' => 
=======
    'generated::pgTeFxGHzh1lxp8F' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
<<<<<<< HEAD
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@update_requested_facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@update_requested_facility',
=======
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@Facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@Facility',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tN3zADx13hBSaHQF',
=======
        'as' => 'generated::pgTeFxGHzh1lxp8F',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YhpFGHZZ5RIQIbzp' => 
=======
    'generated::EYFW4fd7AD98qyqg' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipments',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YhpFGHZZ5RIQIbzp',
=======
        'as' => 'generated::EYFW4fd7AD98qyqg',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BJhSEhEdeaBw4brc' => 
=======
    'generated::CHDU1D8sgYNqzBps' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BJhSEhEdeaBw4brc',
=======
        'as' => 'generated::CHDU1D8sgYNqzBps',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IVKx5AIC5F6xfJBm' => 
=======
    'generated::ol7X39DLe78P323g' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_equipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_equipment',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IVKx5AIC5F6xfJBm',
=======
        'as' => 'generated::ol7X39DLe78P323g',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::30qmI88BJIhLQV76' => 
=======
    'generated::XkKhqpDSnkfFNNii' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_create_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_equipment_create_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::30qmI88BJIhLQV76',
=======
        'as' => 'generated::XkKhqpDSnkfFNNii',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tiAlepoKsFOiFo57' => 
=======
    'generated::1hSpZKhEQEV6aBfN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tiAlepoKsFOiFo57',
=======
        'as' => 'generated::1hSpZKhEQEV6aBfN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zCja1CdFuzeJ4XH5' => 
=======
    'generated::vuYpPjx3vR5gE1Gf' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_equipment_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zCja1CdFuzeJ4XH5',
=======
        'as' => 'generated::vuYpPjx3vR5gE1Gf',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bL61SG861P1Z9gpp' => 
=======
    'generated::ipNrIsYcocXtca1a' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_facilities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_facilities',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bL61SG861P1Z9gpp',
=======
        'as' => 'generated::ipNrIsYcocXtca1a',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CrHrKJkc6Xq64H3N' => 
=======
    'generated::XTtzYVw7MBHNNvYN' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_create_or_update_facility',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::CrHrKJkc6Xq64H3N',
=======
        'as' => 'generated::XTtzYVw7MBHNNvYN',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oyfTDILkzPTghguC' => 
=======
    'generated::5XSiisM7ng39ExNd' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          4 => 'user_role:SUPERADMIN,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@ra_remove_facility',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oyfTDILkzPTghguC',
=======
        'as' => 'generated::5XSiisM7ng39ExNd',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wkR60bMCFWXNQubn' => 
=======
    'generated::iMpgKbGGAwyYGF96' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::wkR60bMCFWXNQubn',
=======
        'as' => 'generated::iMpgKbGGAwyYGF96',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DuPXe67zo0cxlV47' => 
=======
    'generated::yE76XjFvpNmnbusE' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::DuPXe67zo0cxlV47',
=======
        'as' => 'generated::yE76XjFvpNmnbusE',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6nA77CqikzX7Gbd2' => 
=======
    'generated::xeMQsNW1yNRcKQtB' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6nA77CqikzX7Gbd2',
=======
        'as' => 'generated::xeMQsNW1yNRcKQtB',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nMQE0i22Fc5FU9MM' => 
=======
    'generated::HF1duP0XaZGJuAOI' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nMQE0i22Fc5FU9MM',
=======
        'as' => 'generated::HF1duP0XaZGJuAOI',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hPjs5PG8nAaVGTa6' => 
=======
    'generated::a4G3KoqCDVErm25x' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hPjs5PG8nAaVGTa6',
=======
        'as' => 'generated::a4G3KoqCDVErm25x',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::G8VsBRS8GzsZWTIh' => 
=======
    'generated::7rvoMMLBDjPCfPTc' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::G8VsBRS8GzsZWTIh',
=======
        'as' => 'generated::7rvoMMLBDjPCfPTc',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Bcke3GeAXpe0GiaM' => 
=======
    'generated::Vgs8mE8K0wnajP41' => 
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
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
<<<<<<< HEAD
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a60000000000000000";}}',
=======
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058d0000000000000000";}}',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Bcke3GeAXpe0GiaM',
=======
        'as' => 'generated::Vgs8mE8K0wnajP41',
>>>>>>> 89c5ffe30ddad8c904ebb68cadb991b87d1c10f5
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
