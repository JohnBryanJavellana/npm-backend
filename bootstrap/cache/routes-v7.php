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
            '_route' => 'generated::VAZ1rADhwQDyVK94',
=======
            '_route' => 'generated::OolM6mBIBToXaUvF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::HM06OdAawfem8hQt',
=======
            '_route' => 'generated::tvTZIhv9OUVyhLIZ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::EAZR0fUs472K3XGO',
=======
            '_route' => 'generated::W8MIkdN7gyQIE89b',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7lRbVGedH1pfUIXD',
=======
            '_route' => 'generated::vxguAe8Q6pBj9fbC',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::k92iGdTVxb8EW3JM',
=======
            '_route' => 'generated::VSdoQCaV95kVJIk5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LwZpZXHqQHzVKX9C',
=======
            '_route' => 'generated::FlNnbz5YDLzDNW7h',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vTuYOqBOXhNmlPgj',
=======
            '_route' => 'generated::ZbuNGC9GOjEUMjys',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::o0WD7aG5Yhk7qQet',
=======
            '_route' => 'generated::YkhNyVBWJPpQnDOY',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Pny4sq28LemK3Pwp',
=======
            '_route' => 'generated::wqpiQ39dec3nbL4x',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3jAUk7yip0hA15B0',
=======
            '_route' => 'generated::Z3UuGtoU2LmdcbTN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZjlxDqiPN9fnPU8x',
=======
            '_route' => 'generated::ximEL7q5hVRKFGxK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::5iRTHQgYwlZLmgBB',
=======
            '_route' => 'generated::qBBsxLPGbiqCMsqJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::dCPKx6SzsW5XtFzV',
=======
            '_route' => 'generated::G5AKEUo56yGC3FA6',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::MNFDdlUbIERUv8OC',
=======
            '_route' => 'generated::gmb42t9ThP0fH541',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/dashboard/schedules' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::M8rYdPfkUXVuAooG',
=======
            '_route' => 'generated::TATbusuUGwhRX6VP',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/dashboard/invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2sKfWg73Omk2M3LN',
=======
            '_route' => 'generated::9rTnTT0nD53G40Qn',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::XT1ZSJvQ6TStqhGF',
=======
            '_route' => 'generated::u32XjEBeEtIyOpLi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::JpSYk3mAN7KNWT7T',
=======
            '_route' => 'generated::AyPekL3GMbYDBBfS',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DFzdknHZFcIFajcZ',
=======
            '_route' => 'generated::YLzl1LAEWaTM4ScM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lexy2sVFe71628m2',
=======
            '_route' => 'generated::ArhxrsThNTBbQkIv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9zJRbN0GfAx5hwXe',
=======
            '_route' => 'generated::I214d82JpSRWt4g8',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HZku4QmXFex3sW6J',
=======
            '_route' => 'generated::0Ez1shsDjeQOB22z',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YGnw1808qHU5tHRt',
=======
            '_route' => 'generated::K4ybsqTfIZ52pAGi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pnSkV7srULgi3Xb2',
=======
            '_route' => 'generated::K3UYGjdNR7JR6vhh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YZljCeLQOkw8H633',
=======
            '_route' => 'generated::gijUD3LHowJQiPOB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/enrollment/counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::orcZnShL1dpqylrY',
=======
            '_route' => 'generated::pDfDruSg0ozwbTc7',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/trainings/get_all_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::hvX9qRQBKG6P1ESn',
=======
            '_route' => 'generated::hbQ6ytNyvd9nKe0G',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::ZYANHdqrKhA8baCd',
=======
            '_route' => 'generated::2j4XF4DzB3zPNpIa',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::Va3BuNGQHny9rxnZ',
=======
            '_route' => 'generated::pNVQyCwxC98lx4PB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dormitories/counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::nNzITRXlXV0gS3x9',
=======
            '_route' => 'generated::ZRCGzPaTkJBDTNzp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/dormitories/applied_dormitories' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::p8NG0DvZ0IqTt8W0',
=======
            '_route' => 'generated::KqEf1z4TbAaCk4iD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xVM8tsuFfXoFADen',
=======
            '_route' => 'generated::sVZ45mIdshQcGrmo',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::SSufrLIM1Q4mpJSQ',
=======
            '_route' => 'generated::PL67yCZrXo2PG5Xo',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::09NbuuF0Qu9S4NXB',
=======
            '_route' => 'generated::6sL7mtez63eBhyEy',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rurcwDmhsEGP7xwz',
=======
            '_route' => 'generated::I72PDu1yqFRXOHkB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CDgP4Z7ivt6TfPVM',
=======
            '_route' => 'generated::68bgF9HSpwXTsd6B',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::UBVOlFKyccop8EdY',
=======
            '_route' => 'generated::Ne7pGG633KzPwFm9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::4moiqqNd544VImYJ',
=======
            '_route' => 'generated::7K22eMFFEAXpqTuf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NPpzOyn0jC6qGWfw',
=======
            '_route' => 'generated::vaNDajDnxRn8m0Gr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MKpn595FKVh5SJQt',
=======
            '_route' => 'generated::2FQdZtEVL4Ie06qc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::gMWbHw1wK8rHSOyY',
=======
            '_route' => 'generated::CCsAA8TrI4AV8dqT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LmpQXJlih31ZX4qE',
=======
            '_route' => 'generated::z7w2C7WwuYGrvC1n',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PF91gJ8WY6vs9emP',
=======
            '_route' => 'generated::fhBpjPJZUFpidvbS',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::GT8ndlEumZJzZiZD',
=======
            '_route' => 'generated::PpCET2SJIER4yYjU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PMAyAmJMw8VcbmT2',
=======
            '_route' => 'generated::d4FV1LXyNLl4peyV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::r4PaXUiZsqNSYaCt',
=======
            '_route' => 'generated::wA4ueTvFGtSYfT6n',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LzfyQe5rU5qowJKa',
=======
            '_route' => 'generated::gJYVon8wMemyyini',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kMMWfbluJYXqKTdf',
=======
            '_route' => 'generated::GPNOVhCcy9FQvowJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::gl2hHMNC5atuTvzJ',
=======
            '_route' => 'generated::usGFFMgqW8Tn7RyW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Wmo6dsBXeFZ7Eei2',
=======
            '_route' => 'generated::H8YTCcEytlvgl4Bp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::PR12BPIZUFbJkjxl',
=======
            '_route' => 'generated::2STbLUPZMS5NCQmb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OPmym0Khi8fLFHnw',
=======
            '_route' => 'generated::8a5OkKBB70s2GmVN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hexJ2At0YDc77cSR',
=======
            '_route' => 'generated::8wxViITqQdEZ5zZb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::vRDvHl8NNkFcYzZu',
=======
            '_route' => 'generated::YXfz2TLnqOPiSNpU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P8lgS5C43ta4iGF9',
=======
            '_route' => 'generated::WM99t5NYVUIJcU7E',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gnhm7DuYvDbaSbqJ',
=======
            '_route' => 'generated::Urg5tUFe8wtRFPiD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AWNhAYLiFMguOY9i',
=======
            '_route' => 'generated::bmmxhWrFmp95G1lB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lgEMoi2lPmzmCy19',
=======
            '_route' => 'generated::S9QTVed7ONeZ8dx9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lucJnstyWdyvwJua',
=======
            '_route' => 'generated::Sv11Qe6u0jvWESJK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/libraries/counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TRGxEWJfdcdj1fhW',
=======
            '_route' => 'generated::oyosyOP3fAeiRrQq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/client_satisfaction/surveys' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ByYQ6oaFqB8wRtez',
=======
            '_route' => 'generated::RYJ9Xuv3KZ25kJpv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::2e8u4zkq54a74Qjj',
=======
            '_route' => 'generated::whsBG6TcSs2CGl1z',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bRK6nJcv76CzN5AT',
=======
            '_route' => 'generated::alHbe744jrfidfXi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::9BZfKhR0829E5Xgr',
=======
            '_route' => 'generated::qGJMrbJmJAKPfwpH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::HUJl0EhemTs4NGvp',
=======
            '_route' => 'generated::fvxNFL4u4nXbs78v',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3HgA4NU4uei6t9Te',
=======
            '_route' => 'generated::WOmO60zGryUJzgdA',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QOcenKp7hRRm6UFr',
=======
            '_route' => 'generated::VDWgnIZ5yFhUNXhF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/scan_records/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::HqGgejKyWYgVAHNQ',
=======
            '_route' => 'generated::ADOtsNe4INJtl66v',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/scan_records/view/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZfOZpIUIEm43y6RO',
=======
            '_route' => 'generated::exAPXKRfLDaQF8v2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/trainer/enrollment/training' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::6l5Bmx3Q4YfiZVO4',
=======
            '_route' => 'generated::EecSxRlzm3zwFcNq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/trainer/enrollment/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Mh3s1CgoXP0MVLzE',
=======
            '_route' => 'generated::PMqsg0jjSrDb8qhX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/trainer/enrollment/trainee_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::grkDQKneKruOhA8J',
=======
            '_route' => 'generated::d9pPTxkK2oUKLgoc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/trainee_assessment_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::UHyuwVZHCuQPUVPR',
=======
            '_route' => 'generated::BzPfNrc8lHAoB6h9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/course_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vlgNuM9p6pZpHw2i',
=======
            '_route' => 'generated::WqaFHyJBXyPtIQQB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/traineeAttendanceRecord' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::W8jfVwHvQJdtwCnH',
=======
            '_route' => 'generated::MgpUFwxzj2NY1DYz',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/attendance_record' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Kj9OvdGqPFz68BxQ',
=======
            '_route' => 'generated::3BiOhkPlHDgbuIq2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/attendance_ByGroup' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Q2kSCGaIYTYtSsMS',
=======
            '_route' => 'generated::F722U06QICOQVkPd',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/update_record' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TgAL9WNNAV49EYYn',
=======
            '_route' => 'generated::3rXUi3I8e16rE9Ij',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/color_bg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0gJsH54o107VvFY',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/announcement_edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vqmN2yz85fY3fyNP',
=======
            '_route' => 'generated::nWLN0aberNG8wU0a',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/announcement_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xurU4cvhZOHAWD6a',
=======
            '_route' => 'generated::eMjNdrm3zxLyX00w',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/trainer/enrollment/trainerAnnouncement' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LEXPBnkh3SJ0Tydj',
=======
            '_route' => 'generated::SOm6h0yIdj7Oapw0',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
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
            '_route' => 'generated::9ho8ADW4xZI5mR69',
=======
            '_route' => 'generated::Slo2wR6hCKhXiAkC',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hDo6VRFDfgfewr7U',
=======
            '_route' => 'generated::3lVY1VcHGHuf68hF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::XvVjmbghMEFsXKhc',
=======
            '_route' => 'generated::2CFRhzzyUlZRZIfR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::R9Io6fuY8EEHemXw',
=======
            '_route' => 'generated::YQUoKIpMEnboDqrx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aXQngRztL3VZxD70',
=======
            '_route' => 'generated::0GVMoif5U1D7Z5bK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::degzhoU71BUjs9jb',
=======
            '_route' => 'generated::UJ6vQhtIJJcYvGI2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4NNrX8KtC6zMrd1Z',
=======
            '_route' => 'generated::Szw0WaDrFUBDu9M3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/recreationals/counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lGmcVwVMJYZ4ki5j',
=======
            '_route' => 'generated::yr3Gp0ea02UNKxsu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/lms/overview/trainings' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::cbtuAM37aYTGZxGr',
=======
            '_route' => 'generated::SnczaBHoD2084dqq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/handouts/view_handouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::J8f4XVlTWheOAve1',
=======
            '_route' => 'generated::7DAIKNdQFHLWv8ld',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/handouts/create_handouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::gjFx2BkUljJwhUl9',
=======
            '_route' => 'generated::ob2yokbYkPh07fBD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/view_assessments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::blvFdWGxL1TjRSRU',
=======
            '_route' => 'generated::cDRkJyxxD3dFgMUK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/view_topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::EFVhIlYyWofaWHYS',
=======
            '_route' => 'generated::slwd07iNNBeqDuI9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/questionnaire' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::yAwzJaVi2DxyMjvA',
=======
            '_route' => 'generated::ooJXyx3BVrvj85YV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/view_assessments/assessment' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LXUusKyLsEuSBZP4',
=======
            '_route' => 'generated::JzmK924rlRPO1oyh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/create_assessments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::OsDy0xuKS88AH1Xr',
=======
            '_route' => 'generated::LZYOwDBVVX3XvTT9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/update_assessments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::zWjpxDgdiHhzcY29',
=======
            '_route' => 'generated::sxZ1h3LvszorpQli',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/delete_assessments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vmTvunWFWO9fXJqa',
=======
            '_route' => 'generated::VswndmXTtbO9FJDh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/store_assessments/attempts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2q69lGNm89WLBzJq',
=======
            '_route' => 'generated::ce6KGcNGJs5vg1u1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/create_assessment_attempts' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::coqF5Zr3PIwxEw06',
=======
            '_route' => 'generated::ISkpHekAGxObUNyD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/create_attempts/assessments_answers' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GJ1KsxMjinRhTRmy',
=======
            '_route' => 'generated::xawo03EBlI26MGjh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/details/assessments_options_questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9mgSC6IF4VMhmzM2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/assessments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ka1T7isEZTJ9vPfH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/sections/create_sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1lVsMCJGwyvNSOBC',
=======
            '_route' => 'generated::tFoRBH0anQ3iF8En',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/sections/update_sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ShKMWxsueRZwKODh',
=======
            '_route' => 'generated::qHF9sewMfMbV182c',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/sections/delete_sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Uf0WwIgFZjA0M6Q6',
=======
            '_route' => 'generated::62ra2WDVTmf8ugpT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/questions/create_questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lbnOLl4kme1YZkrJ',
=======
            '_route' => 'generated::KR8fFMRAHPwVgZ61',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/questions/update_questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::6m2kglTaB3KZZSYG',
=======
            '_route' => 'generated::oeRBRHzH3zWbsUhv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/questions/delete_questions' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::B8sHBGuStpyooYBr',
=======
            '_route' => 'generated::yjyegMuyA6x9DXWR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/view_module' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::WRTU7aqktKGVAvnW',
=======
            '_route' => 'generated::bhRKwGMekFuvfVEb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/view_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::aMhjKnwyy4kyPoiN',
=======
            '_route' => 'generated::AHikADzdYUAcNtFH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::zn9aLpX26eqqiV2x',
=======
            '_route' => 'generated::JdAGWGgQaTFtFYO1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/content' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::gF7hUnYFNY0RZTGG',
=======
            '_route' => 'generated::VCXTte4c5ZRAr9xh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/create_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TvbzResQc1EOEYWX',
=======
            '_route' => 'generated::Tb2eAfYauPO4lwes',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/create_course_contents' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::nSqUJ7RabliKZRJ4',
=======
            '_route' => 'generated::91d6qBTVZy6zC9qq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/update_course_contents' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZsCghYluTKOuRajZ',
=======
            '_route' => 'generated::wZffq1S4WfCzRRkN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/update_course_sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::lEIOMNYxOBtJwBKF',
=======
            '_route' => 'generated::OJmokRNqYxA1AQHI',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/delete_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::abPXI8pe0taqaLNO',
=======
            '_route' => 'generated::F2vUIS1i8HxGbBkG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/delete_content_uploads' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::v0ea672It4BhGP8B',
=======
            '_route' => 'generated::CKdgQ4CVEhj6PjX0',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UyYQDlQ3RiVlB5HK',
=======
            '_route' => 'generated::46Em2c8tue5wIl0y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mezhWGbY1ObIgAKe',
=======
            '_route' => 'generated::Aef97xwzoqc6rUtx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aSEDikcI98FnqoTP',
=======
            '_route' => 'generated::8esOk0p4NIHBQvhX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::o7SlpRSJyVjfVzZt',
=======
            '_route' => 'generated::Imbpa8VIgzTfD95f',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dashboard_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Ss7UDKXPUOjxYtQh',
=======
            '_route' => 'generated::LgrLf5XLDbJOBb3o',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/get_terms_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eRgsqqnV1dguozM4',
=======
            '_route' => 'generated::N6f6R2URIGrn3imz',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/enrollment/create_or_update_term_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FzGLFWtikJ363rnx',
=======
            '_route' => 'generated::fmnQ2o0m3NOtAUau',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BHMSGQYmjVfxShw6',
=======
            '_route' => 'generated::xGAf97KOPSkpfYmc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::aFQMo2BATdmz02Om',
=======
            '_route' => 'generated::amu28Ijq2Hd8ib1D',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::AIIxmXlGLfsN7mVU',
=======
            '_route' => 'generated::8xxkX5OAAsgD5zNF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PmemZp1GyCYJEayt',
=======
            '_route' => 'generated::w4IY0wV5OAJ4ePrL',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::w5LtYlaBtP3kaezP',
=======
            '_route' => 'generated::2LXgah2PZZi0LQll',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FyTUdqFkUibWlA7h',
=======
            '_route' => 'generated::vSaOzLohkilyj7DV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xlr2grKqMzBpzhGY',
=======
            '_route' => 'generated::EsSEHys2J7nfvgHx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::cRhTG1ACuFDsgK9i',
=======
            '_route' => 'generated::HAlVwWz3tQjGJVeV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::PHG3dfPfkz54QevU',
=======
            '_route' => 'generated::wYmJjhZiUfn091vW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hMe713GebC49MtxA',
=======
            '_route' => 'generated::KnGiSpyW0vCyeWoq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/admin/enrollment/training/schedules/traineelist' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tLNwcdEFZIlH9U84',
=======
            '_route' => 'generated::ZnX7wZLk9uLPAVSJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
<<<<<<< HEAD
            '_route' => 'generated::VYsFdBDWF8gWAJ4U',
=======
            '_route' => 'generated::btIxFvJtvelPM3CT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
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
            '_route' => 'generated::8Mqd91cuhciMEHc6',
=======
            '_route' => 'generated::YZmpiUJzyMotaJlj',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bF62qMLzrnPZjufP',
=======
            '_route' => 'generated::aPdk9kZ8nXRL8ZhN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::JzoBuwjSAyqzHnX4',
=======
            '_route' => 'generated::9mWWiTgIKoYF5yy1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KqXJSD4EOoyw7Lmj',
=======
            '_route' => 'generated::dU6shjj1GzopQEgJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::C2oo2Ac7zOhmE0ci',
=======
            '_route' => 'generated::xXOrJi2CDadpjRmg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5JIeLbfNZHAMCEvI',
=======
            '_route' => 'generated::YHBwKNRlyiyGIpGN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::D25wN32jLF38pyRi',
=======
            '_route' => 'generated::6Jh87KP0CBo7Exsb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HYMyqq469kwOwEdY',
=======
            '_route' => 'generated::11BBiDIJr3kgaiwE',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::CYLzO9CIOCNeV9Dg',
=======
            '_route' => 'generated::24AUsVdvrYW0EUdb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::eH1SEvh1pijOraBg',
=======
            '_route' => 'generated::4WocYO5illCZRDEr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::G6TbR8378lAcfyJn',
=======
            '_route' => 'generated::WOsmQMmyZAvNFObw',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::eADu1UB6Nic2qBo3',
=======
            '_route' => 'generated::Qy8JhLWcNn52DkuV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::G1S93BZTO3zLL0RJ',
=======
            '_route' => 'generated::8NvCmdH4HrOy6agZ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hd6DQynDiz0e9m2i',
=======
            '_route' => 'generated::Ieh3U0mJ4elACKjv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::uueKyp3zk1ppXqgd',
=======
            '_route' => 'generated::rypZyxVJ601vEGc9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tMCPtvLkTEG2Zb0V',
=======
            '_route' => 'generated::LO2G3C4HKDIKq5ie',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::q9RfMqSTcIbt2xPQ',
=======
            '_route' => 'generated::IEo3pA7YnzdeTZvj',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::81cWIr8d6LWqn6zp',
=======
            '_route' => 'generated::DwXFp6tjv7LYaor4',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::r1ciK9aVbmYKFrn9',
=======
            '_route' => 'generated::utsl9vazg2y8CziG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aVDqENao8xZcxK9M',
=======
            '_route' => 'generated::Q5QqBJ4Wz80jSySt',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::YhqIpCMmVCW2IvnK',
=======
            '_route' => 'generated::bA3udvQ6bE2FSipx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YqGumyMeGFjeZoYc',
=======
            '_route' => 'generated::1IbhOvB0REShIHOb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::ne84hSKKWeUmHH0A',
=======
            '_route' => 'generated::Co5XNKNCMKK4GKFm',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HEtpXmX4IzsOC7W2',
=======
            '_route' => 'generated::2iI1cWG6JH1sPXZ1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::ntIUbS4gNl52Wr3Q',
=======
            '_route' => 'generated::AiGAdj3C6FAJWF9d',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::QQxFvrh7oZg3oVcf',
=======
            '_route' => 'generated::kYEtgFGq2oDC1U33',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/get_terms_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Vzmi7oDbvj11Gwcj',
=======
            '_route' => 'generated::H0UZjPd7JMew4o4r',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/books/create_or_update_term_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::AuWqWpEYklliQb1w',
=======
            '_route' => 'generated::owtFgiWEjLNRZ0SY',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::l59Si3gxA6qbhZn1',
=======
            '_route' => 'generated::RRXhAFHDkxjk5RTz',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::4osLQ4qoAn18yrJ4',
=======
            '_route' => 'generated::Qvvr0VJG7ToL6W5D',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/admin/books/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RpCeJO0DYZWGOPpZ',
=======
            '_route' => 'generated::S5GfVCtcr0pCX2vh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::ct7M2PE4pLIKZ9jw',
=======
            '_route' => 'generated::tmjsOFm9c682o6K5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NL9miM6FUz91IJeR',
=======
            '_route' => 'generated::0Q88k98aRPL4F5s1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TDuGhDMpWHvhavkx',
=======
            '_route' => 'generated::wH91FTImrVJQx3YI',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dRfPXG43HfPoiboa',
=======
            '_route' => 'generated::JS96hrEeI9dOlX6O',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::D8KVOWolpBCdRqk1',
=======
            '_route' => 'generated::vBMdgsgr7QL8pZR1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bnwCDukuudJUgKkk',
=======
            '_route' => 'generated::JQ6vvG7anyAxwQOc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::K8CLT1rlEiDtKTsD',
=======
            '_route' => 'generated::BYkEWM1ymupsdH67',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ideaJCPtD2PiifIn',
=======
            '_route' => 'generated::DVdylFkxBW8ni2PB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8RjYuRIotUdVJUMI',
=======
            '_route' => 'generated::tZOkHrIg2h9MTLmT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OCVF5CUEuMdfInBU',
=======
            '_route' => 'generated::gC3szuHm76FiEozb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::O4j1JVsLj4PjYx5w',
=======
            '_route' => 'generated::C2kSAq7coNGwpoBr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3IjPO1UBpEW4GrJm',
=======
            '_route' => 'generated::abLlCoimfWTrZsT8',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Pn4HLRXtsPPRBS0s',
=======
            '_route' => 'generated::ycdtdxBMHpOFDdoF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0L3rQuCAaEMgenpq',
=======
            '_route' => 'generated::xVGjGIsxXJB2X6jK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vFctSgnpFDvGhrJ3',
=======
            '_route' => 'generated::tBPTl9zTNVUCV58Q',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rpZ7fPfzMG1XbKos',
=======
            '_route' => 'generated::h9bd6EfdIZEx2jbl',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::31vOGEDXEcwANEYx',
=======
            '_route' => 'generated::k6vJGtnxaZdWkgqW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::mt5DEv0dntl4v6Sq',
=======
            '_route' => 'generated::GdLRviflxpHAuRB3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::THUZzm4r8bf4OrEd',
=======
            '_route' => 'generated::6WnEVLi6SUgE3m5j',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::V8CoBNANiI5sYK20',
=======
            '_route' => 'generated::w29YAvgw8VZFpc7Y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/count_service_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::R6Oe2cfdL24zrOmE',
=======
            '_route' => 'generated::JFYbOAwC02UHKima',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_dormitory_rooms' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::q3vz6cGc9YrPsbJE',
=======
            '_route' => 'generated::lN5SWR4ZQP3cU3Yi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/admin/dormitory/create_or_update_room' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RA7Yv5Tpq8LI3zG2',
=======
            '_route' => 'generated::BTLQhDYKJJP4jq3o',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DPNZsvKmeB9OtS34',
=======
            '_route' => 'generated::kwmTM93FN3muSHqF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::AuH0ByQEGpQRwczq',
=======
            '_route' => 'generated::Bpa2TvM4UveHtDUK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/room_reservations' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::i62qHX7YzMxld5Gu',
=======
            '_route' => 'generated::gtRwXPVTVPhKjyii',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/new_room_reservation' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NtiBzEQuanV2WiFA',
=======
            '_route' => 'generated::GuchpsGR6UUtgtmD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_match_rooms' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::WfeScskQtKBMeWYL',
=======
            '_route' => 'generated::TujmzPNRQ3eUfXBv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_current_tenant_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3cZq3J1Ji08sbCgG',
=======
            '_route' => 'generated::rg1hpwONRTr2UX88',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create_or_update_service_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::A9ApJle6Qqq473NF',
=======
            '_route' => 'generated::MxjlFMWtamsQvPwq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_service_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5ybMCaVRQAf42OZu',
=======
            '_route' => 'generated::S2tEMm8al1cf00Kl',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/set_service_request_as_action' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sDQjRizdLPwVhJwI',
=======
            '_route' => 'generated::WIUseD5ZJvTYA23v',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WU9pVk7l6SpMYXhe',
=======
            '_route' => 'generated::QVc4galwD6ymqjRu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::YBtxFWrGcp4tViSY',
=======
            '_route' => 'generated::Y59oCXnwkt72FloK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lHqnK2FgMzdwJiKr',
=======
            '_route' => 'generated::s0YQpiX9yiX3E2EB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qgWwqbL8uTzqjs17',
=======
            '_route' => 'generated::jlRq1A28bAOl8I4y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::077mvcIE51qPEaDi',
=======
            '_route' => 'generated::yPGM796wQbC49lH9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::z9yfPxsk2y0ZeHev',
=======
            '_route' => 'generated::kyVxy20LgQhmLYlX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::CBu6wK4XLoHiMiiu',
=======
            '_route' => 'generated::n2ZNuHwdTwMrGeNR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5ZlHuJddWhqdAzn0',
=======
            '_route' => 'generated::23WFVH3lO3kSGVPB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fCs8010cvlwy9xWM',
=======
            '_route' => 'generated::P9fOmUCC0owtKzR2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lcOJoKvMVW55HXvf',
=======
            '_route' => 'generated::wB5DILtodng9xKMp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/get_terms_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::rqgVXqvohBTtE7ve',
=======
            '_route' => 'generated::alPmtv4MqFq2TaDg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/create_or_update_term_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FyUsCKNTs7NcqSMY',
=======
            '_route' => 'generated::GWLc5e85tbfUm36y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mfOGayxL1zjlzYHu',
=======
            '_route' => 'generated::yHELLuTLFMLUihQ3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ydMm9iQDFxuQXvtM',
=======
            '_route' => 'generated::4vzSDNNiI1Vxv6pO',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::92ubCHJDseGyumud',
=======
            '_route' => 'generated::umRbtW2U17IaKYTD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/cashier/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::V0xgjA5j97gnv8jo',
=======
            '_route' => 'generated::KxXzEEpBzqpQUQMu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/admin/cashier/get_charges' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YhRWvER7MRAYhDwR',
=======
            '_route' => 'generated::5Q90gUxqaqzrajHq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::Bnp0mXFlJZbbnLII',
=======
            '_route' => 'generated::l5zP7PGbNSOWHkCv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::DW0L4WDSmOTs1zvZ',
=======
            '_route' => 'generated::LGXTQzXsBzmFV4q8',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Md7497MsF0B0ntuN',
=======
            '_route' => 'generated::d1VJ36aLkl6Fhw4H',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::T7UdIHQjAdqmRkmB',
=======
            '_route' => 'generated::dbPD9kZc9zsh2bDE',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Oea3CP3BJAM5QymD',
=======
            '_route' => 'generated::whj3Ai52eXdlVIu0',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::7KyM6w9vZ7na8Wfj',
=======
            '_route' => 'generated::HuvhSXJJ8p9HTmXP',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/get_terms_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::McCfTzDaxwt2RI26',
=======
            '_route' => 'generated::F7GdLxPu2rtOG1bC',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/create_or_update_term_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YKttPSkBf5BO71NR',
=======
            '_route' => 'generated::uU7Rf1XOg6WhfxLf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EYcuA30VUT3EfJhh',
=======
            '_route' => 'generated::fXy7WOOh9mAQgq5a',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::q6kCrfEEyHbAXD1v',
=======
            '_route' => 'generated::9WrgsdJbTEhqKrNu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cPJxxOfjC6Z0ovjX',
=======
            '_route' => 'generated::IsfjuppSnWGt7SeN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yornK6gNSCkBgtT0',
=======
            '_route' => 'generated::VMBQYH4ptnh44otD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WTYuFc0pBHYFco5z',
=======
            '_route' => 'generated::WzwpgeXvjoOnxShp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8k2HGRJZKRCdA38J',
=======
            '_route' => 'generated::JvJbTkbrxBVZPK26',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2Srd1n77XlalNzBX',
=======
            '_route' => 'generated::yNJHrxhOIN6Cel5A',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/ra_requests/ra_request_charges' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::2tgjoMvW47dN1ay7',
=======
            '_route' => 'generated::MB4lTr8ztvTzecHe',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
<<<<<<< HEAD
            '_route' => 'generated::l7PD5WDt7gPgrsgm',
=======
            '_route' => 'generated::YlPtIp96hVmHl4Ef',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lcjKInk8UErQoETm',
=======
            '_route' => 'generated::GAOU7wyEC9NLJG0d',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ePwNXYVkTjZxxLql',
=======
            '_route' => 'generated::gtPBqSi4GdzSI82N',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dZz74mftCJadht1L',
=======
            '_route' => 'generated::3k3ocsmRr1Me3OEE',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IMxb8iVbNZ6QBKFM',
=======
            '_route' => 'generated::XTDJlWEFgb1lUOnR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FvrrJfvnZPmlW5dx',
=======
            '_route' => 'generated::PMe6NMaVMcgBkFIt',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YT6nFjab6kbM7fb3',
=======
            '_route' => 'generated::b8X7Jc7PeoX3c8or',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KNEOqqbjqhHFFMIt',
=======
            '_route' => 'generated::M1f6PXX0h4i0XQ0V',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qm1dUnxV2stU3Uua',
=======
            '_route' => 'generated::3roDqvbw8Tg8IjZX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::iq0dPC1FanbaarXW',
=======
            '_route' => 'generated::O8OoDslVJJSTZeQL',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FKUCAotfULFubawx',
=======
            '_route' => 'generated::mDj6QI2WYNZt74ZM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lYSJUPNV502sYMNj',
=======
            '_route' => 'generated::2ciid3e6yTtammOx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lb9huHBktIlHDz7h',
=======
            '_route' => 'generated::t65ShfUmqFWyWyO5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WNcUFdbovPqJLyRJ',
=======
            '_route' => 'generated::aqBnf7UB8A3pZYJc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::t5NXwrpbtfhdDzmm',
=======
            '_route' => 'generated::tBG6qq5kbclgNnpQ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::d6q5scJSTVz5PRnm',
=======
            '_route' => 'generated::Bx3LSTXPwWO5cixR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JLutyvBmOzhRP2wZ',
=======
            '_route' => 'generated::CEgYOhRmi9ZdCAYG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      '/api/admin/my-account/audit_trail_filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ECtw7Sxhki9b2Zh7',
=======
            '_route' => 'generated::jx0yf3rsKOL7DzGr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
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
            '_route' => 'generated::al59hNQxCVRiDkLM',
=======
            '_route' => 'generated::59W8bUJgXqoPfepL',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      0 => '{^(?|/api/(?|my\\-account/get_trainee_general_info/([^/]++)(*:60)|enrollment/(?|get_(?|requirements/([^/]++)(*:109)|applications/([^/]++)(*:138))|remove_training_request/([^/]++)(*:179))|dormitories/(?|applied_dormitories/view/(?|([^/]++)(?|(*:242)|/inclusions(*:261))|getAllHistories/([^/]++)(*:294))|remove_applied_dormitories/([^/]++)(*:338)|inclusion/requests/([^/]++)(*:373)|services/(?|([^/]++)(*:401)|([0-9]+)/create(*:424)|([0-9]+)/cancel(*:447))|transfer_request/cancel/([^/]++)(*:488)|extension_request/cancel/([^/]++)(*:529)|cancel_request/([^/]++)(*:560))|l(?|ibraries/book_info/([^/]++)(*:600)|ms/(?|sections/view_sections/([^/]++)(*:645)|questions/view_questions/([^/]++)(*:686)))|client_satisfaction/surveys/delete/([^/]++)(*:739)|invoices/view/([^/]++)(?|(*:772)|(*:780))|traine(?|r/enrollment/courses/([^/]++)(*:827)|e\\-info/([^/]++)(*:851))|admin/(?|enrollment/(?|remove_(?|terms_and_condition/([^/]++)(*:921)|s(?|ch(?|edule/([^/]++)(*:952)|ool/([^/]++)(*:972))|ponsor/([^/]++)(*:996))|module(?|/([^/]++)(*:1023)|_type/([^/]++)(*:1046))|c(?|ertificate/([^/]++)(*:1079)|ourse(?|/([^/]++)(*:1105)|_fee/([^/]++)(*:1127)))|voucher/([^/]++)(*:1154)|license/([^/]++)(*:1179)|rank/([^/]++)(*:1201)|facilitator/([^/]++)(*:1230))|get_applications/remove_training_request/([^/]++)(*:1289)|training\\-requirements/remove_trequirement/([^/]++)(*:1349))|book(?|s/(?|remove_(?|terms_and_condition/([^/]++)(*:1409)|book/([^/]++)(*:1431))|get_book_(?|info/(?|([^/]++)(*:1469)|get_copies/(?|([^/]++)(*:1500)|update_book_copy(*:1525))|remove_copy/([^/]++)(*:1555))|total_reservations/([^/]++)(*:1592)|reservation/remove_fine/([^/]++)(*:1633)))|_entry/remove_entry/([^/]++)(*:1672))|dormitory/remove_(?|room/([^/]++)(*:1715)|service/([^/]++)(*:1740))|masterlist/(?|user/(?|get_user_(?|basic_info/([^/]++)(*:1803)|activities/([^/]++)(*:1831)|qr_reader_assignments/([^/]++)(*:1870))|remove_(?|qr_reader_assignment/([^/]++)(*:1919)|user/([^/]++)(*:1941)))|employer/remove_employer/([^/]++)(*:1985)|position/remove_position/([^/]++)(*:2027)|qr\\-reader/remove_qr_reader/([^/]++)(*:2072))|cashier/remove_(?|terms_and_condition/([^/]++)(*:2128)|charge(?|/([^/]++)(*:2155)|_category/([^/]++)(*:2182))|or_number/([^/]++)(*:2210))|recreational\\-activity/r(?|emove_terms_and_condition/([^/]++)(*:2281)|a_remove_(?|equipment(?|/([^/]++)(*:2323)|_stock/([^/]++)(*:2347))|facility/([^/]++)(*:2374))))))/?$}sDu',
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
            '_route' => 'generated::THgVMv1DV0GvpeWe',
=======
            '_route' => 'generated::9VWGXDeUUHZkOvnV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::AStdrwVn95NjkroD',
=======
            '_route' => 'generated::igWFmxr8X3Ts2nSm',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::4lA0VMXypuuEXUPU',
=======
            '_route' => 'generated::4fmvEjZmxIITqdFs',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::S2G71h9plSxiPL3z',
=======
            '_route' => 'generated::O0Oi6GBJFcB7GJmi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::5q7ITX11WnvwAqvG',
=======
            '_route' => 'generated::jb9BAMuRrHjqpRt4',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::mnGFvAonYZRBo3jj',
=======
            '_route' => 'generated::WDCpONnSGWngwEoU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::ZfXo5SNkoyGxaLNF',
=======
            '_route' => 'generated::JD2A4NNIIVBKnf9p',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::fq9ADSq8Lz2dgJRP',
=======
            '_route' => 'generated::Z6NYTcv0lODjtaZn',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::aMxdLaykCaPDptjh',
=======
            '_route' => 'generated::GwXNqsR0E6Fa4vrd',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::5AwX87D5onxn4esK',
=======
            '_route' => 'generated::8lOxAallX1xMl0Xv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::QKZAOmjcqpMeVR5B',
=======
            '_route' => 'generated::DrKRH1dgCc8X2Dfg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::7mlDQVIddd5syEJQ',
=======
            '_route' => 'generated::xJNLxGy0ADasYFtb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::qcKXw4mbtOUSbXUj',
=======
            '_route' => 'generated::FouyDlUjy1aD5Efg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::fFMoqvxHnkZLbeuY',
=======
            '_route' => 'generated::h25CFDVaIneK44Xh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
            '_route' => 'generated::QaenDglzOjv1X6Gf',
=======
            '_route' => 'generated::d9FncCZDvWr0SlzH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      600 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::QNkwFHaIybRlCGGa',
=======
            '_route' => 'generated::KLHOfdse2tZ3XQyX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      645 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Wkfk91FKjHSqFQ2j',
=======
            '_route' => 'generated::BaEBlThxmRv8NggK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'assessment',
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
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::I7vsolXue3rfRToj',
=======
            '_route' => 'generated::kVvuvhLmA2dbvjyd',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'section',
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
      739 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::QvUf6C37WtoXySxw',
=======
            '_route' => 'generated::DNrB1KQFjsjKfWH4',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      772 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::n0vBoVSNma0tqyEF',
=======
            '_route' => 'generated::HKa2CfgVbMIozKTP',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'tenant',
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
      780 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::BQ91AlOsrtXshb2n',
=======
            '_route' => 'generated::Nigcqqrl1NST9kdq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      827 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::0b5Dtt6KA2LFxdET',
=======
            '_route' => 'generated::evqkWwSFAJKgyIIb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      851 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5ZJ4tUiEPHqCryza',
=======
            '_route' => 'generated::kioEgtPjBsXzd9yR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      921 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Xacqm3tl7TrBxAtC',
=======
            '_route' => 'generated::QBO6qgMhDfQcYkCI',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'termsAndConditionId',
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
      952 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5PJR8tA4hq3gfKLE',
=======
            '_route' => 'generated::EYAsq3fxQTDaystU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::PResRvm5p2pdY0iZ',
=======
            '_route' => 'generated::c2S4Yb05NO0cRzU5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::o0l7fw7QAF1auU4M',
=======
            '_route' => 'generated::pcO1P0NszvR7HicM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dB9rKhRubuZupYOa',
=======
            '_route' => 'generated::ZFPUUy9LMmXPj1uS',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1046 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JOzH2drZTjmUxRS3',
=======
            '_route' => 'generated::tOO44Q3kS6zZ3QZa',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1079 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::b5Z5WcWAg3zgLJ9r',
=======
            '_route' => 'generated::odCJyZhtanEqRIZm',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1105 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::sU9C1rT34beFxWee',
=======
            '_route' => 'generated::brV6WYyAOe8FP95g',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1127 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4hRT4tdyPPzDpgB5',
=======
            '_route' => 'generated::cyBl637vD61zdNmH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1154 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Lwq72Xan3PIbgwnd',
=======
            '_route' => 'generated::ynbRgkTREgiaLQWx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1179 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ShEEr3JZGG5BSX4E',
=======
            '_route' => 'generated::6w40NCQ7r7lU8CSf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1201 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::bL6bdPQssvk9bu5y',
=======
            '_route' => 'generated::bT4W6Qw3LulCioZM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1230 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3iGjY0YyU5Odj2vy',
=======
            '_route' => 'generated::yMYfTg8isSifHaGv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1289 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::psob9JFTYMDYuGsy',
=======
            '_route' => 'generated::F1N8t1nEwVwtLQ5G',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1349 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::aBQuv6mlj2F9cj2i',
=======
            '_route' => 'generated::YTvihWmIqT5k9qhZ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1409 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::tBttzn4uEP4NPPnt',
=======
            '_route' => 'generated::tFc95Qo1eLbq3gs2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'termsAndConditionId',
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
      1431 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::eoPvORtf0XTHzw8m',
=======
            '_route' => 'generated::oq2C7rKjPxiXtYbT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1469 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CbRh4Az86zRx4vLA',
=======
            '_route' => 'generated::Xos6g1jpUUrfg3sp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1500 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1l8x5jfUp8B2Tnc1',
=======
            '_route' => 'generated::OYWIuWn6gqhfsXpu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1525 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3mLRoE3U4WaClzfP',
=======
            '_route' => 'generated::v7A5jTXM3Hdpy2LM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
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
      1555 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vLRiCjRQPAW1J869',
=======
            '_route' => 'generated::IzynFK4kI8eeek1Q',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1592 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::itOvTizb76CkzuKI',
=======
            '_route' => 'generated::ww62ICWQe1uwtBDg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1633 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::aF24LMunuRUhA6Gz',
=======
            '_route' => 'generated::o4seO2HOItWQseOu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1672 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::j9g62nM6owpxwDE9',
=======
            '_route' => 'generated::nzju9BNamkkXgYbD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1715 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::pMzYUeWvX5oR3B3J',
=======
            '_route' => 'generated::h7OD3GlpY49fSTyB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'roomId',
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
      1740 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::urMZo44L8ToOQiC5',
=======
            '_route' => 'generated::HOQDMHKQ1psjdEjH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1803 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::TfIzrUaOXXPBa0wk',
=======
            '_route' => 'generated::9MfRSBle1nr3KAgf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1831 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::AJBVSrBtxdPZBN6N',
=======
            '_route' => 'generated::aCNaLQrGEvlQ0vS2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1870 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::s5N5csHCU0VAZs9e',
=======
            '_route' => 'generated::a5DyVNqTwA8ZxNA5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1919 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::EkolK9JD5IfvrKEL',
=======
            '_route' => 'generated::VMPfMpaVwPWe4Kpp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1941 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7TGqYGlygSRIDsqT',
=======
            '_route' => 'generated::1jzKDTsF0jTKv8UX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      1985 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::65QX8NpJZ9ie8SYk',
=======
            '_route' => 'generated::X7960M4prdXypJ6W',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2027 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Y9LmB5x19h07wxQo',
=======
            '_route' => 'generated::icdVj00oyAoCLqE3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2072 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::3GDrNXECyG6OPOUR',
=======
            '_route' => 'generated::UKTw4o6b7fSaqN7z',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2128 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::38jTlNnn9yTSeef2',
=======
            '_route' => 'generated::ov2iYKBLW11UHcwT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'termsAndConditionId',
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
      2155 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::NP53DLzKqcsWVxQ1',
=======
            '_route' => 'generated::KQmf3PzEawVws0G5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2182 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::CCJKuDjs93Q12Zwv',
=======
            '_route' => 'generated::owPEnFZh2gpJkD01',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2210 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::E8jRwv70w7fhGmot',
=======
            '_route' => 'generated::AEYHXzHjcwRsQhJk',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2281 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xyNkkasjiq3gP3Tb',
=======
            '_route' => 'generated::nG7ufPkndW3kziCs',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
          ),
          1 => 
          array (
            0 => 'termsAndConditionId',
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
      2323 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::nzvS1FbKs3RLsgdi',
=======
            '_route' => 'generated::U74KglmMsDXvmHLW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2347 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZMXVKOFnAfHgzY1X',
=======
            '_route' => 'generated::MyGi9F68DvwxmNXG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
      2374 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::FMY5wntpMXUh4ow1',
=======
            '_route' => 'generated::r2SixZclLmMfTxYx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
    'generated::VAZ1rADhwQDyVK94' => 
=======
    'generated::OolM6mBIBToXaUvF' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::VAZ1rADhwQDyVK94',
=======
        'as' => 'generated::OolM6mBIBToXaUvF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HM06OdAawfem8hQt' => 
=======
    'generated::tvTZIhv9OUVyhLIZ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::HM06OdAawfem8hQt',
=======
        'as' => 'generated::tvTZIhv9OUVyhLIZ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EAZR0fUs472K3XGO' => 
=======
    'generated::W8MIkdN7gyQIE89b' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::EAZR0fUs472K3XGO',
=======
        'as' => 'generated::W8MIkdN7gyQIE89b',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::7lRbVGedH1pfUIXD' => 
=======
    'generated::vxguAe8Q6pBj9fbC' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::7lRbVGedH1pfUIXD',
=======
        'as' => 'generated::vxguAe8Q6pBj9fbC',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::k92iGdTVxb8EW3JM' => 
=======
    'generated::VSdoQCaV95kVJIk5' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::k92iGdTVxb8EW3JM',
=======
        'as' => 'generated::VSdoQCaV95kVJIk5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LwZpZXHqQHzVKX9C' => 
=======
    'generated::FlNnbz5YDLzDNW7h' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b20000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LwZpZXHqQHzVKX9C',
=======
        'as' => 'generated::FlNnbz5YDLzDNW7h',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vTuYOqBOXhNmlPgj' => 
=======
    'generated::ZbuNGC9GOjEUMjys' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vTuYOqBOXhNmlPgj',
=======
        'as' => 'generated::ZbuNGC9GOjEUMjys',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::o0WD7aG5Yhk7qQet' => 
=======
    'generated::YkhNyVBWJPpQnDOY' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::o0WD7aG5Yhk7qQet',
=======
        'as' => 'generated::YkhNyVBWJPpQnDOY',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Pny4sq28LemK3Pwp' => 
=======
    'generated::wqpiQ39dec3nbL4x' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::Pny4sq28LemK3Pwp',
=======
        'as' => 'generated::wqpiQ39dec3nbL4x',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::THgVMv1DV0GvpeWe' => 
=======
    'generated::9VWGXDeUUHZkOvnV' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::THgVMv1DV0GvpeWe',
=======
        'as' => 'generated::9VWGXDeUUHZkOvnV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3jAUk7yip0hA15B0' => 
=======
    'generated::Z3UuGtoU2LmdcbTN' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::3jAUk7yip0hA15B0',
=======
        'as' => 'generated::Z3UuGtoU2LmdcbTN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZjlxDqiPN9fnPU8x' => 
=======
    'generated::ximEL7q5hVRKFGxK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@getUserActivities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@getUserActivities',
        'namespace' => NULL,
        'prefix' => 'api/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZjlxDqiPN9fnPU8x',
=======
        'as' => 'generated::ximEL7q5hVRKFGxK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5iRTHQgYwlZLmgBB' => 
=======
    'generated::qBBsxLPGbiqCMsqJ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::5iRTHQgYwlZLmgBB',
=======
        'as' => 'generated::qBBsxLPGbiqCMsqJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dCPKx6SzsW5XtFzV' => 
=======
    'generated::G5AKEUo56yGC3FA6' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::dCPKx6SzsW5XtFzV',
=======
        'as' => 'generated::G5AKEUo56yGC3FA6',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MNFDdlUbIERUv8OC' => 
=======
    'generated::gmb42t9ThP0fH541' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::MNFDdlUbIERUv8OC',
=======
        'as' => 'generated::gmb42t9ThP0fH541',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::M8rYdPfkUXVuAooG' => 
=======
    'generated::TATbusuUGwhRX6VP' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dashboard/schedules',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDashboardController@viewCalendarSchedules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDashboardController@viewCalendarSchedules',
        'namespace' => NULL,
        'prefix' => 'api/dashboard',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::M8rYdPfkUXVuAooG',
=======
        'as' => 'generated::TATbusuUGwhRX6VP',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2sKfWg73Omk2M3LN' => 
=======
    'generated::9rTnTT0nD53G40Qn' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dashboard/invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDashboardController@viewAllInvoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDashboardController@viewAllInvoices',
        'namespace' => NULL,
        'prefix' => 'api/dashboard',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2sKfWg73Omk2M3LN',
=======
        'as' => 'generated::9rTnTT0nD53G40Qn',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AStdrwVn95NjkroD' => 
=======
    'generated::igWFmxr8X3Ts2nSm' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::AStdrwVn95NjkroD',
=======
        'as' => 'generated::igWFmxr8X3Ts2nSm',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::S2G71h9plSxiPL3z' => 
=======
    'generated::O0Oi6GBJFcB7GJmi' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::S2G71h9plSxiPL3z',
=======
        'as' => 'generated::O0Oi6GBJFcB7GJmi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XT1ZSJvQ6TStqhGF' => 
=======
    'generated::u32XjEBeEtIyOpLi' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::XT1ZSJvQ6TStqhGF',
=======
        'as' => 'generated::u32XjEBeEtIyOpLi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JpSYk3mAN7KNWT7T' => 
=======
    'generated::AyPekL3GMbYDBBfS' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::JpSYk3mAN7KNWT7T',
=======
        'as' => 'generated::AyPekL3GMbYDBBfS',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DFzdknHZFcIFajcZ' => 
=======
    'generated::YLzl1LAEWaTM4ScM' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::DFzdknHZFcIFajcZ',
=======
        'as' => 'generated::YLzl1LAEWaTM4ScM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Lexy2sVFe71628m2' => 
=======
    'generated::ArhxrsThNTBbQkIv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::Lexy2sVFe71628m2',
=======
        'as' => 'generated::ArhxrsThNTBbQkIv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9zJRbN0GfAx5hwXe' => 
=======
    'generated::I214d82JpSRWt4g8' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::9zJRbN0GfAx5hwXe',
=======
        'as' => 'generated::I214d82JpSRWt4g8',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HZku4QmXFex3sW6J' => 
=======
    'generated::0Ez1shsDjeQOB22z' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::HZku4QmXFex3sW6J',
=======
        'as' => 'generated::0Ez1shsDjeQOB22z',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YGnw1808qHU5tHRt' => 
=======
    'generated::K4ybsqTfIZ52pAGi' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::YGnw1808qHU5tHRt',
=======
        'as' => 'generated::K4ybsqTfIZ52pAGi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4lA0VMXypuuEXUPU' => 
=======
    'generated::4fmvEjZmxIITqdFs' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::4lA0VMXypuuEXUPU',
=======
        'as' => 'generated::4fmvEjZmxIITqdFs',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pnSkV7srULgi3Xb2' => 
=======
    'generated::K3UYGjdNR7JR6vhh' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::pnSkV7srULgi3Xb2',
=======
        'as' => 'generated::K3UYGjdNR7JR6vhh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YZljCeLQOkw8H633' => 
=======
    'generated::gijUD3LHowJQiPOB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::YZljCeLQOkw8H633',
=======
        'as' => 'generated::gijUD3LHowJQiPOB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::orcZnShL1dpqylrY' => 
=======
    'generated::pDfDruSg0ozwbTc7' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewEnrolledCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@viewEnrolledCount',
        'namespace' => NULL,
        'prefix' => 'api/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::orcZnShL1dpqylrY',
=======
        'as' => 'generated::pDfDruSg0ozwbTc7',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hvX9qRQBKG6P1ESn' => 
=======
    'generated::hbQ6ytNyvd9nKe0G' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::hvX9qRQBKG6P1ESn',
=======
        'as' => 'generated::hbQ6ytNyvd9nKe0G',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZYANHdqrKhA8baCd' => 
=======
    'generated::2j4XF4DzB3zPNpIa' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::ZYANHdqrKhA8baCd',
=======
        'as' => 'generated::2j4XF4DzB3zPNpIa',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Va3BuNGQHny9rxnZ' => 
=======
    'generated::pNVQyCwxC98lx4PB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::Va3BuNGQHny9rxnZ',
=======
        'as' => 'generated::pNVQyCwxC98lx4PB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nNzITRXlXV0gS3x9' => 
=======
    'generated::ZRCGzPaTkJBDTNzp' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dormitories/counts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewTenantCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewTenantCount',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nNzITRXlXV0gS3x9',
=======
        'as' => 'generated::ZRCGzPaTkJBDTNzp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::p8NG0DvZ0IqTt8W0' => 
=======
    'generated::KqEf1z4TbAaCk4iD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::p8NG0DvZ0IqTt8W0',
=======
        'as' => 'generated::KqEf1z4TbAaCk4iD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5q7ITX11WnvwAqvG' => 
=======
    'generated::jb9BAMuRrHjqpRt4' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::5q7ITX11WnvwAqvG',
=======
        'as' => 'generated::jb9BAMuRrHjqpRt4',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fq9ADSq8Lz2dgJRP' => 
=======
    'generated::Z6NYTcv0lODjtaZn' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::fq9ADSq8Lz2dgJRP',
=======
        'as' => 'generated::Z6NYTcv0lODjtaZn',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xVM8tsuFfXoFADen' => 
=======
    'generated::sVZ45mIdshQcGrmo' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::xVM8tsuFfXoFADen',
=======
        'as' => 'generated::sVZ45mIdshQcGrmo',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SSufrLIM1Q4mpJSQ' => 
=======
    'generated::PL67yCZrXo2PG5Xo' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::SSufrLIM1Q4mpJSQ',
=======
        'as' => 'generated::PL67yCZrXo2PG5Xo',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::09NbuuF0Qu9S4NXB' => 
=======
    'generated::6sL7mtez63eBhyEy' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::09NbuuF0Qu9S4NXB',
=======
        'as' => 'generated::6sL7mtez63eBhyEy',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rurcwDmhsEGP7xwz' => 
=======
    'generated::I72PDu1yqFRXOHkB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::rurcwDmhsEGP7xwz',
=======
        'as' => 'generated::I72PDu1yqFRXOHkB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CDgP4Z7ivt6TfPVM' => 
=======
    'generated::68bgF9HSpwXTsd6B' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::CDgP4Z7ivt6TfPVM',
=======
        'as' => 'generated::68bgF9HSpwXTsd6B',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mnGFvAonYZRBo3jj' => 
=======
    'generated::WDCpONnSGWngwEoU' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::mnGFvAonYZRBo3jj',
=======
        'as' => 'generated::WDCpONnSGWngwEoU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aMxdLaykCaPDptjh' => 
=======
    'generated::GwXNqsR0E6Fa4vrd' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::aMxdLaykCaPDptjh',
=======
        'as' => 'generated::GwXNqsR0E6Fa4vrd',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UBVOlFKyccop8EdY' => 
=======
    'generated::Ne7pGG633KzPwFm9' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::UBVOlFKyccop8EdY',
=======
        'as' => 'generated::Ne7pGG633KzPwFm9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4moiqqNd544VImYJ' => 
=======
    'generated::7K22eMFFEAXpqTuf' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::4moiqqNd544VImYJ',
=======
        'as' => 'generated::7K22eMFFEAXpqTuf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NPpzOyn0jC6qGWfw' => 
=======
    'generated::vaNDajDnxRn8m0Gr' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::NPpzOyn0jC6qGWfw',
=======
        'as' => 'generated::vaNDajDnxRn8m0Gr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MKpn595FKVh5SJQt' => 
=======
    'generated::2FQdZtEVL4Ie06qc' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::MKpn595FKVh5SJQt',
=======
        'as' => 'generated::2FQdZtEVL4Ie06qc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5AwX87D5onxn4esK' => 
=======
    'generated::8lOxAallX1xMl0Xv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::5AwX87D5onxn4esK',
=======
        'as' => 'generated::8lOxAallX1xMl0Xv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QKZAOmjcqpMeVR5B' => 
=======
    'generated::DrKRH1dgCc8X2Dfg' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::QKZAOmjcqpMeVR5B',
=======
        'as' => 'generated::DrKRH1dgCc8X2Dfg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
    'generated::7mlDQVIddd5syEJQ' => 
=======
    'generated::xJNLxGy0ADasYFtb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::7mlDQVIddd5syEJQ',
=======
        'as' => 'generated::xJNLxGy0ADasYFtb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
    'generated::ZfXo5SNkoyGxaLNF' => 
=======
    'generated::JD2A4NNIIVBKnf9p' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::ZfXo5SNkoyGxaLNF',
=======
        'as' => 'generated::JD2A4NNIIVBKnf9p',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gMWbHw1wK8rHSOyY' => 
=======
    'generated::CCsAA8TrI4AV8dqT' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::gMWbHw1wK8rHSOyY',
=======
        'as' => 'generated::CCsAA8TrI4AV8dqT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LmpQXJlih31ZX4qE' => 
=======
    'generated::z7w2C7WwuYGrvC1n' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::LmpQXJlih31ZX4qE',
=======
        'as' => 'generated::z7w2C7WwuYGrvC1n',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qcKXw4mbtOUSbXUj' => 
=======
    'generated::FouyDlUjy1aD5Efg' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::qcKXw4mbtOUSbXUj',
=======
        'as' => 'generated::FouyDlUjy1aD5Efg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PF91gJ8WY6vs9emP' => 
=======
    'generated::fhBpjPJZUFpidvbS' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::PF91gJ8WY6vs9emP',
=======
        'as' => 'generated::fhBpjPJZUFpidvbS',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GT8ndlEumZJzZiZD' => 
=======
    'generated::PpCET2SJIER4yYjU' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::GT8ndlEumZJzZiZD',
=======
        'as' => 'generated::PpCET2SJIER4yYjU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fFMoqvxHnkZLbeuY' => 
=======
    'generated::h25CFDVaIneK44Xh' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::fFMoqvxHnkZLbeuY',
=======
        'as' => 'generated::h25CFDVaIneK44Xh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QaenDglzOjv1X6Gf' => 
=======
    'generated::d9FncCZDvWr0SlzH' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::QaenDglzOjv1X6Gf',
=======
        'as' => 'generated::d9FncCZDvWr0SlzH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PMAyAmJMw8VcbmT2' => 
=======
    'generated::d4FV1LXyNLl4peyV' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::PMAyAmJMw8VcbmT2',
=======
        'as' => 'generated::d4FV1LXyNLl4peyV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::r4PaXUiZsqNSYaCt' => 
=======
    'generated::wA4ueTvFGtSYfT6n' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::r4PaXUiZsqNSYaCt',
=======
        'as' => 'generated::wA4ueTvFGtSYfT6n',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LzfyQe5rU5qowJKa' => 
=======
    'generated::gJYVon8wMemyyini' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::LzfyQe5rU5qowJKa',
=======
        'as' => 'generated::gJYVon8wMemyyini',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kMMWfbluJYXqKTdf' => 
=======
    'generated::GPNOVhCcy9FQvowJ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::kMMWfbluJYXqKTdf',
=======
        'as' => 'generated::GPNOVhCcy9FQvowJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gl2hHMNC5atuTvzJ' => 
=======
    'generated::usGFFMgqW8Tn7RyW' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::gl2hHMNC5atuTvzJ',
=======
        'as' => 'generated::usGFFMgqW8Tn7RyW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Wmo6dsBXeFZ7Eei2' => 
=======
    'generated::H8YTCcEytlvgl4Bp' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::Wmo6dsBXeFZ7Eei2',
=======
        'as' => 'generated::H8YTCcEytlvgl4Bp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QNkwFHaIybRlCGGa' => 
=======
    'generated::KLHOfdse2tZ3XQyX' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::QNkwFHaIybRlCGGa',
=======
        'as' => 'generated::KLHOfdse2tZ3XQyX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PR12BPIZUFbJkjxl' => 
=======
    'generated::2STbLUPZMS5NCQmb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::PR12BPIZUFbJkjxl',
=======
        'as' => 'generated::2STbLUPZMS5NCQmb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OPmym0Khi8fLFHnw' => 
=======
    'generated::8a5OkKBB70s2GmVN' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::OPmym0Khi8fLFHnw',
=======
        'as' => 'generated::8a5OkKBB70s2GmVN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hexJ2At0YDc77cSR' => 
=======
    'generated::8wxViITqQdEZ5zZb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::hexJ2At0YDc77cSR',
=======
        'as' => 'generated::8wxViITqQdEZ5zZb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vRDvHl8NNkFcYzZu' => 
=======
    'generated::YXfz2TLnqOPiSNpU' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::vRDvHl8NNkFcYzZu',
=======
        'as' => 'generated::YXfz2TLnqOPiSNpU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::P8lgS5C43ta4iGF9' => 
=======
    'generated::WM99t5NYVUIJcU7E' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::P8lgS5C43ta4iGF9',
=======
        'as' => 'generated::WM99t5NYVUIJcU7E',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gnhm7DuYvDbaSbqJ' => 
=======
    'generated::Urg5tUFe8wtRFPiD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::gnhm7DuYvDbaSbqJ',
=======
        'as' => 'generated::Urg5tUFe8wtRFPiD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AWNhAYLiFMguOY9i' => 
=======
    'generated::bmmxhWrFmp95G1lB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::AWNhAYLiFMguOY9i',
=======
        'as' => 'generated::bmmxhWrFmp95G1lB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lgEMoi2lPmzmCy19' => 
=======
    'generated::S9QTVed7ONeZ8dx9' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::lgEMoi2lPmzmCy19',
=======
        'as' => 'generated::S9QTVed7ONeZ8dx9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lucJnstyWdyvwJua' => 
=======
    'generated::Sv11Qe6u0jvWESJK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::lucJnstyWdyvwJua',
=======
        'as' => 'generated::Sv11Qe6u0jvWESJK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TRGxEWJfdcdj1fhW' => 
=======
    'generated::oyosyOP3fAeiRrQq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@viewLibRequestCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeLibrary@viewLibRequestCount',
        'namespace' => NULL,
        'prefix' => 'api/libraries',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TRGxEWJfdcdj1fhW',
=======
        'as' => 'generated::oyosyOP3fAeiRrQq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ByYQ6oaFqB8wRtez' => 
=======
    'generated::RYJ9Xuv3KZ25kJpv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::ByYQ6oaFqB8wRtez',
=======
        'as' => 'generated::RYJ9Xuv3KZ25kJpv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2e8u4zkq54a74Qjj' => 
=======
    'generated::whsBG6TcSs2CGl1z' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@createV1',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\CsmsController@createV1',
        'namespace' => NULL,
        'prefix' => 'api/client_satisfaction',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2e8u4zkq54a74Qjj',
=======
        'as' => 'generated::whsBG6TcSs2CGl1z',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QvUf6C37WtoXySxw' => 
=======
    'generated::DNrB1KQFjsjKfWH4' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::QvUf6C37WtoXySxw',
=======
        'as' => 'generated::DNrB1KQFjsjKfWH4',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bRK6nJcv76CzN5AT' => 
=======
    'generated::alHbe744jrfidfXi' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::bRK6nJcv76CzN5AT',
=======
        'as' => 'generated::alHbe744jrfidfXi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9BZfKhR0829E5Xgr' => 
=======
    'generated::qGJMrbJmJAKPfwpH' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::9BZfKhR0829E5Xgr',
=======
        'as' => 'generated::qGJMrbJmJAKPfwpH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HUJl0EhemTs4NGvp' => 
=======
    'generated::fvxNFL4u4nXbs78v' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::HUJl0EhemTs4NGvp',
=======
        'as' => 'generated::fvxNFL4u4nXbs78v',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::n0vBoVSNma0tqyEF' => 
=======
    'generated::HKa2CfgVbMIozKTP' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/invoices/view/{tenant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@viewDormitoryInvoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@viewDormitoryInvoices',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::n0vBoVSNma0tqyEF',
=======
        'as' => 'generated::HKa2CfgVbMIozKTP',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3HgA4NU4uei6t9Te' => 
=======
    'generated::WOmO60zGryUJzgdA' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::3HgA4NU4uei6t9Te',
=======
        'as' => 'generated::WOmO60zGryUJzgdA',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QOcenKp7hRRm6UFr' => 
=======
    'generated::VDWgnIZ5yFhUNXhF' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::QOcenKp7hRRm6UFr',
=======
        'as' => 'generated::VDWgnIZ5yFhUNXhF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BQ91AlOsrtXshb2n' => 
=======
    'generated::Nigcqqrl1NST9kdq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/invoices/view/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@recreationalInvoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeInvoices@recreationalInvoices',
        'namespace' => NULL,
        'prefix' => 'api/invoices',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::BQ91AlOsrtXshb2n',
=======
        'as' => 'generated::Nigcqqrl1NST9kdq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HqGgejKyWYgVAHNQ' => 
=======
    'generated::ADOtsNe4INJtl66v' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/scan_records/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\QrReader\\QrReaderController@viewUserQrRecord',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\QrReader\\QrReaderController@viewUserQrRecord',
        'namespace' => NULL,
        'prefix' => 'api/scan_records',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::HqGgejKyWYgVAHNQ',
=======
        'as' => 'generated::ADOtsNe4INJtl66v',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZfOZpIUIEm43y6RO' => 
=======
    'generated::exAPXKRfLDaQF8v2' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/scan_records/view/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\QrReader\\QrReaderController@qrTypes',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\QrReader\\QrReaderController@qrTypes',
        'namespace' => NULL,
        'prefix' => 'api/scan_records',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZfOZpIUIEm43y6RO',
=======
        'as' => 'generated::exAPXKRfLDaQF8v2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6l5Bmx3Q4YfiZVO4' => 
=======
    'generated::EecSxRlzm3zwFcNq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/trainer/enrollment/training',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewAllTrainingsAndFacilitators',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewAllTrainingsAndFacilitators',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6l5Bmx3Q4YfiZVO4',
=======
        'as' => 'generated::EecSxRlzm3zwFcNq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Mh3s1CgoXP0MVLzE' => 
=======
    'generated::PMqsg0jjSrDb8qhX' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@view',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Mh3s1CgoXP0MVLzE',
=======
        'as' => 'generated::PMqsg0jjSrDb8qhX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0b5Dtt6KA2LFxdET' => 
=======
    'generated::evqkWwSFAJKgyIIb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewTrainingSchedules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewTrainingSchedules',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::0b5Dtt6KA2LFxdET',
=======
        'as' => 'generated::evqkWwSFAJKgyIIb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::grkDQKneKruOhA8J' => 
=======
    'generated::d9pPTxkK2oUKLgoc' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/trainee_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@getTraineeDetails',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@getTraineeDetails',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::grkDQKneKruOhA8J',
=======
        'as' => 'generated::d9pPTxkK2oUKLgoc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UHyuwVZHCuQPUVPR' => 
=======
    'generated::BzPfNrc8lHAoB6h9' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/trainee_assessment_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@TraineeAssessmentDetails',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@TraineeAssessmentDetails',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::UHyuwVZHCuQPUVPR',
=======
        'as' => 'generated::BzPfNrc8lHAoB6h9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vlgNuM9p6pZpHw2i' => 
=======
    'generated::WqaFHyJBXyPtIQQB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/course_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@getCourseDetails',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@getCourseDetails',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vlgNuM9p6pZpHw2i',
=======
        'as' => 'generated::WqaFHyJBXyPtIQQB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::W8jfVwHvQJdtwCnH' => 
=======
    'generated::MgpUFwxzj2NY1DYz' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/traineeAttendanceRecord',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@TraineeAttendanceRecord',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@TraineeAttendanceRecord',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::W8jfVwHvQJdtwCnH',
=======
        'as' => 'generated::MgpUFwxzj2NY1DYz',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Kj9OvdGqPFz68BxQ' => 
=======
    'generated::3BiOhkPlHDgbuIq2' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/attendance_record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@attendance_record',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@attendance_record',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Kj9OvdGqPFz68BxQ',
=======
        'as' => 'generated::3BiOhkPlHDgbuIq2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Q2kSCGaIYTYtSsMS' => 
=======
    'generated::F722U06QICOQVkPd' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/attendance_ByGroup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@attendanceByGroup',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@attendanceByGroup',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Q2kSCGaIYTYtSsMS',
=======
        'as' => 'generated::F722U06QICOQVkPd',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TgAL9WNNAV49EYYn' => 
=======
    'generated::3rXUi3I8e16rE9Ij' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/update_record',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@update_attendance_record',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@update_attendance_record',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TgAL9WNNAV49EYYn',
=======
        'as' => 'generated::3rXUi3I8e16rE9Ij',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vqmN2yz85fY3fyNP' => 
=======
    'generated::W0gJsH54o107VvFY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/color_bg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@color_background',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AttendanceController@color_background',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::W0gJsH54o107VvFY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nWLN0aberNG8wU0a' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/announcement_edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AnnouncementController@AnnouncementEdit',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AnnouncementController@AnnouncementEdit',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vqmN2yz85fY3fyNP',
=======
        'as' => 'generated::nWLN0aberNG8wU0a',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xurU4cvhZOHAWD6a' => 
=======
    'generated::eMjNdrm3zxLyX00w' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/announcement_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AnnouncementController@AnnouncementDelete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AnnouncementController@AnnouncementDelete',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xurU4cvhZOHAWD6a',
=======
        'as' => 'generated::eMjNdrm3zxLyX00w',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LEXPBnkh3SJ0Tydj' => 
=======
    'generated::SOm6h0yIdj7Oapw0' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/trainer/enrollment/trainerAnnouncement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AnnouncementController@Announcement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\AnnouncementController@Announcement',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LEXPBnkh3SJ0Tydj',
=======
        'as' => 'generated::SOm6h0yIdj7Oapw0',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9ho8ADW4xZI5mR69' => 
=======
    'generated::Slo2wR6hCKhXiAkC' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@checkUniqueIdentifier',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@checkUniqueIdentifier',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9ho8ADW4xZI5mR69',
=======
        'as' => 'generated::Slo2wR6hCKhXiAkC',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hDo6VRFDfgfewr7U' => 
=======
    'generated::3lVY1VcHGHuf68hF' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewEquipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewEquipment',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::hDo6VRFDfgfewr7U',
=======
        'as' => 'generated::3lVY1VcHGHuf68hF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::XvVjmbghMEFsXKhc' => 
=======
    'generated::2CFRhzzyUlZRZIfR' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewFacilities',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::XvVjmbghMEFsXKhc',
=======
        'as' => 'generated::2CFRhzzyUlZRZIfR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::R9Io6fuY8EEHemXw' => 
=======
    'generated::YQUoKIpMEnboDqrx' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@requestEquipment',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::R9Io6fuY8EEHemXw',
=======
        'as' => 'generated::YQUoKIpMEnboDqrx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aXQngRztL3VZxD70' => 
=======
    'generated::0GVMoif5U1D7Z5bK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@get_recreational_request',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aXQngRztL3VZxD70',
=======
        'as' => 'generated::0GVMoif5U1D7Z5bK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::degzhoU71BUjs9jb' => 
=======
    'generated::UJ6vQhtIJJcYvGI2' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getRecreationalRequest',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getRecreationalRequest',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::degzhoU71BUjs9jb',
=======
        'as' => 'generated::UJ6vQhtIJJcYvGI2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4NNrX8KtC6zMrd1Z' => 
=======
    'generated::Szw0WaDrFUBDu9M3' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@cancelUnitsRequest',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@cancelUnitsRequest',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4NNrX8KtC6zMrd1Z',
=======
        'as' => 'generated::Szw0WaDrFUBDu9M3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lGmcVwVMJYZ4ki5j' => 
=======
    'generated::yr3Gp0ea02UNKxsu' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewRecRequestCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@viewRecRequestCount',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lGmcVwVMJYZ4ki5j',
=======
        'as' => 'generated::yr3Gp0ea02UNKxsu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cbtuAM37aYTGZxGr' => 
=======
    'generated::SnczaBHoD2084dqq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/overview/trainings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@overview',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@overview',
        'namespace' => NULL,
        'prefix' => 'api/lms/overview',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cbtuAM37aYTGZxGr',
=======
        'as' => 'generated::SnczaBHoD2084dqq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::J8f4XVlTWheOAve1' => 
=======
    'generated::7DAIKNdQFHLWv8ld' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/handouts/view_handouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/handouts',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::J8f4XVlTWheOAve1',
=======
        'as' => 'generated::7DAIKNdQFHLWv8ld',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gjFx2BkUljJwhUl9' => 
=======
    'generated::ob2yokbYkPh07fBD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/handouts/create_handouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@store',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@store',
        'namespace' => NULL,
        'prefix' => 'api/lms/handouts',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::gjFx2BkUljJwhUl9',
=======
        'as' => 'generated::ob2yokbYkPh07fBD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::blvFdWGxL1TjRSRU' => 
=======
    'generated::cDRkJyxxD3dFgMUK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/view_assessments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::blvFdWGxL1TjRSRU',
=======
        'as' => 'generated::cDRkJyxxD3dFgMUK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EFVhIlYyWofaWHYS' => 
=======
    'generated::slwd07iNNBeqDuI9' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/view_topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewAssessment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewAssessment',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::EFVhIlYyWofaWHYS',
=======
        'as' => 'generated::slwd07iNNBeqDuI9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yAwzJaVi2DxyMjvA' => 
=======
    'generated::ooJXyx3BVrvj85YV' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/questionnaire',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewTopic',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewTopic',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::yAwzJaVi2DxyMjvA',
=======
        'as' => 'generated::ooJXyx3BVrvj85YV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LXUusKyLsEuSBZP4' => 
=======
    'generated::JzmK924rlRPO1oyh' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/view_assessments/assessment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewAssessmentContent',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewAssessmentContent',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LXUusKyLsEuSBZP4',
=======
        'as' => 'generated::JzmK924rlRPO1oyh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OsDy0xuKS88AH1Xr' => 
=======
    'generated::LZYOwDBVVX3XvTT9' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/create_assessments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::OsDy0xuKS88AH1Xr',
=======
        'as' => 'generated::LZYOwDBVVX3XvTT9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zWjpxDgdiHhzcY29' => 
=======
    'generated::sxZ1h3LvszorpQli' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/update_assessments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@update',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@update',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zWjpxDgdiHhzcY29',
=======
        'as' => 'generated::sxZ1h3LvszorpQli',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vmTvunWFWO9fXJqa' => 
=======
    'generated::VswndmXTtbO9FJDh' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/lms/assessments/delete_assessments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vmTvunWFWO9fXJqa',
=======
        'as' => 'generated::VswndmXTtbO9FJDh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2q69lGNm89WLBzJq' => 
=======
    'generated::ce6KGcNGJs5vg1u1' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/store_assessments/attempts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@saveAnswersAssessment_attempts',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@saveAnswersAssessment_attempts',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::2q69lGNm89WLBzJq',
=======
        'as' => 'generated::ce6KGcNGJs5vg1u1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::coqF5Zr3PIwxEw06' => 
=======
    'generated::ISkpHekAGxObUNyD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/create_assessment_attempts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@createAssessmentAttempt',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@createAssessmentAttempt',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::coqF5Zr3PIwxEw06',
=======
        'as' => 'generated::ISkpHekAGxObUNyD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GJ1KsxMjinRhTRmy' => 
=======
    'generated::xawo03EBlI26MGjh' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/create_attempts/assessments_answers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@assessment_answers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@assessment_answers',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GJ1KsxMjinRhTRmy',
=======
        'as' => 'generated::xawo03EBlI26MGjh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Wkfk91FKjHSqFQ2j' => 
=======
    'generated::9mgSC6IF4VMhmzM2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/details/assessments_options_questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@TraineeAssessmentDetailsForTrainer',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@TraineeAssessmentDetailsForTrainer',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
        'as' => 'generated::9mgSC6IF4VMhmzM2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ka1T7isEZTJ9vPfH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@testOnly',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@testOnly',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
        'as' => 'generated::Ka1T7isEZTJ9vPfH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BaEBlThxmRv8NggK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lms/sections/view_sections/{assessment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Wkfk91FKjHSqFQ2j',
=======
        'as' => 'generated::BaEBlThxmRv8NggK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1lVsMCJGwyvNSOBC' => 
=======
    'generated::tFoRBH0anQ3iF8En' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/sections/create_sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::1lVsMCJGwyvNSOBC',
=======
        'as' => 'generated::tFoRBH0anQ3iF8En',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ShKMWxsueRZwKODh' => 
=======
    'generated::qHF9sewMfMbV182c' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/sections/update_sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@update',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@update',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ShKMWxsueRZwKODh',
=======
        'as' => 'generated::qHF9sewMfMbV182c',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Uf0WwIgFZjA0M6Q6' => 
=======
    'generated::62ra2WDVTmf8ugpT' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/lms/sections/delete_sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Uf0WwIgFZjA0M6Q6',
=======
        'as' => 'generated::62ra2WDVTmf8ugpT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::I7vsolXue3rfRToj' => 
=======
    'generated::kVvuvhLmA2dbvjyd' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lms/questions/view_questions/{section}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::I7vsolXue3rfRToj',
=======
        'as' => 'generated::kVvuvhLmA2dbvjyd',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lbnOLl4kme1YZkrJ' => 
=======
    'generated::KR8fFMRAHPwVgZ61' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/questions/create_questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lbnOLl4kme1YZkrJ',
=======
        'as' => 'generated::KR8fFMRAHPwVgZ61',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6m2kglTaB3KZZSYG' => 
=======
    'generated::oeRBRHzH3zWbsUhv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/questions/update_questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@update',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6m2kglTaB3KZZSYG',
=======
        'as' => 'generated::oeRBRHzH3zWbsUhv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::B8sHBGuStpyooYBr' => 
=======
    'generated::yjyegMuyA6x9DXWR' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/lms/questions/delete_questions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::B8sHBGuStpyooYBr',
=======
        'as' => 'generated::yjyegMuyA6x9DXWR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WRTU7aqktKGVAvnW' => 
=======
    'generated::bhRKwGMekFuvfVEb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/view_module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@overview',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@overview',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WRTU7aqktKGVAvnW',
=======
        'as' => 'generated::bhRKwGMekFuvfVEb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aMhjKnwyy4kyPoiN' => 
=======
    'generated::AHikADzdYUAcNtFH' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/view_courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::aMhjKnwyy4kyPoiN',
=======
        'as' => 'generated::AHikADzdYUAcNtFH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zn9aLpX26eqqiV2x' => 
=======
    'generated::JdAGWGgQaTFtFYO1' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@viewModule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@viewModule',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zn9aLpX26eqqiV2x',
=======
        'as' => 'generated::JdAGWGgQaTFtFYO1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gF7hUnYFNY0RZTGG' => 
=======
    'generated::VCXTte4c5ZRAr9xh' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@viewContentById',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@viewContentById',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::gF7hUnYFNY0RZTGG',
=======
        'as' => 'generated::VCXTte4c5ZRAr9xh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TvbzResQc1EOEYWX' => 
=======
    'generated::Tb2eAfYauPO4lwes' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/create_courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TvbzResQc1EOEYWX',
=======
        'as' => 'generated::Tb2eAfYauPO4lwes',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nSqUJ7RabliKZRJ4' => 
=======
    'generated::91d6qBTVZy6zC9qq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/create_course_contents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@createSectionContents',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@createSectionContents',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::nSqUJ7RabliKZRJ4',
=======
        'as' => 'generated::91d6qBTVZy6zC9qq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZsCghYluTKOuRajZ' => 
=======
    'generated::wZffq1S4WfCzRRkN' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/update_course_contents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@updateForContent',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@updateForContent',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZsCghYluTKOuRajZ',
=======
        'as' => 'generated::wZffq1S4WfCzRRkN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lEIOMNYxOBtJwBKF' => 
=======
    'generated::OJmokRNqYxA1AQHI' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/update_course_sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@updateForContentParent',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@updateForContentParent',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lEIOMNYxOBtJwBKF',
=======
        'as' => 'generated::OJmokRNqYxA1AQHI',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::abPXI8pe0taqaLNO' => 
=======
    'generated::F2vUIS1i8HxGbBkG' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/delete_courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::abPXI8pe0taqaLNO',
=======
        'as' => 'generated::F2vUIS1i8HxGbBkG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::v0ea672It4BhGP8B' => 
=======
    'generated::CKdgQ4CVEhj6PjX0' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/delete_content_uploads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@deleteUpload',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@deleteUpload',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::v0ea672It4BhGP8B',
=======
        'as' => 'generated::CKdgQ4CVEhj6PjX0',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5ZJ4tUiEPHqCryza' => 
=======
    'generated::kioEgtPjBsXzd9yR' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::5ZJ4tUiEPHqCryza',
=======
        'as' => 'generated::kioEgtPjBsXzd9yR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UyYQDlQ3RiVlB5HK' => 
=======
    'generated::46Em2c8tue5wIl0y' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::UyYQDlQ3RiVlB5HK',
=======
        'as' => 'generated::46Em2c8tue5wIl0y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mezhWGbY1ObIgAKe' => 
=======
    'generated::Aef97xwzoqc6rUtx' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::mezhWGbY1ObIgAKe',
=======
        'as' => 'generated::Aef97xwzoqc6rUtx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aSEDikcI98FnqoTP' => 
=======
    'generated::8esOk0p4NIHBQvhX' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::aSEDikcI98FnqoTP',
=======
        'as' => 'generated::8esOk0p4NIHBQvhX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::o7SlpRSJyVjfVzZt' => 
=======
    'generated::Imbpa8VIgzTfD95f' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
        'as' => 'generated::o7SlpRSJyVjfVzZt',
=======
        'as' => 'generated::Imbpa8VIgzTfD95f',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Ss7UDKXPUOjxYtQh' => 
=======
    'generated::LgrLf5XLDbJOBb3o' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dashboard_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DashboardCtrl@dashboard_data',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DashboardCtrl@dashboard_data',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Ss7UDKXPUOjxYtQh',
=======
        'as' => 'generated::LgrLf5XLDbJOBb3o',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eRgsqqnV1dguozM4' => 
=======
    'generated::N6f6R2URIGrn3imz' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/get_terms_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::eRgsqqnV1dguozM4',
=======
        'as' => 'generated::N6f6R2URIGrn3imz',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FzGLFWtikJ363rnx' => 
=======
    'generated::fmnQ2o0m3NOtAUau' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/enrollment/create_or_update_term_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FzGLFWtikJ363rnx',
=======
        'as' => 'generated::fmnQ2o0m3NOtAUau',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Xacqm3tl7TrBxAtC' => 
=======
    'generated::QBO6qgMhDfQcYkCI' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/enrollment/remove_terms_and_condition/{termsAndConditionId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Xacqm3tl7TrBxAtC',
=======
        'as' => 'generated::QBO6qgMhDfQcYkCI',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BHMSGQYmjVfxShw6' => 
=======
    'generated::xGAf97KOPSkpfYmc' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::BHMSGQYmjVfxShw6',
=======
        'as' => 'generated::xGAf97KOPSkpfYmc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aFQMo2BATdmz02Om' => 
=======
    'generated::amu28Ijq2Hd8ib1D' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::aFQMo2BATdmz02Om',
=======
        'as' => 'generated::amu28Ijq2Hd8ib1D',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AIIxmXlGLfsN7mVU' => 
=======
    'generated::8xxkX5OAAsgD5zNF' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::AIIxmXlGLfsN7mVU',
=======
        'as' => 'generated::8xxkX5OAAsgD5zNF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PmemZp1GyCYJEayt' => 
=======
    'generated::w4IY0wV5OAJ4ePrL' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::PmemZp1GyCYJEayt',
=======
        'as' => 'generated::w4IY0wV5OAJ4ePrL',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::w5LtYlaBtP3kaezP' => 
=======
    'generated::2LXgah2PZZi0LQll' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::w5LtYlaBtP3kaezP',
=======
        'as' => 'generated::2LXgah2PZZi0LQll',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FyTUdqFkUibWlA7h' => 
=======
    'generated::vSaOzLohkilyj7DV' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::FyTUdqFkUibWlA7h',
=======
        'as' => 'generated::vSaOzLohkilyj7DV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::psob9JFTYMDYuGsy' => 
=======
    'generated::F1N8t1nEwVwtLQ5G' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::psob9JFTYMDYuGsy',
=======
        'as' => 'generated::F1N8t1nEwVwtLQ5G',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xlr2grKqMzBpzhGY' => 
=======
    'generated::EsSEHys2J7nfvgHx' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::xlr2grKqMzBpzhGY',
=======
        'as' => 'generated::EsSEHys2J7nfvgHx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cRhTG1ACuFDsgK9i' => 
=======
    'generated::HAlVwWz3tQjGJVeV' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::cRhTG1ACuFDsgK9i',
=======
        'as' => 'generated::HAlVwWz3tQjGJVeV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PHG3dfPfkz54QevU' => 
=======
    'generated::wYmJjhZiUfn091vW' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::PHG3dfPfkz54QevU',
=======
        'as' => 'generated::wYmJjhZiUfn091vW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hMe713GebC49MtxA' => 
=======
    'generated::KnGiSpyW0vCyeWoq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::hMe713GebC49MtxA',
=======
        'as' => 'generated::KnGiSpyW0vCyeWoq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tLNwcdEFZIlH9U84' => 
=======
    'generated::ZnX7wZLk9uLPAVSJ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_trainees_by_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_trainees_by_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tLNwcdEFZIlH9U84',
=======
        'as' => 'generated::ZnX7wZLk9uLPAVSJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VYsFdBDWF8gWAJ4U' => 
=======
    'generated::btIxFvJtvelPM3CT' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@move_trainees',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@move_trainees',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::VYsFdBDWF8gWAJ4U',
=======
        'as' => 'generated::btIxFvJtvelPM3CT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8Mqd91cuhciMEHc6' => 
=======
    'generated::YZmpiUJzyMotaJlj' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::8Mqd91cuhciMEHc6',
=======
        'as' => 'generated::YZmpiUJzyMotaJlj',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5PJR8tA4hq3gfKLE' => 
=======
    'generated::EYAsq3fxQTDaystU' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::5PJR8tA4hq3gfKLE',
=======
        'as' => 'generated::EYAsq3fxQTDaystU',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bF62qMLzrnPZjufP' => 
=======
    'generated::aPdk9kZ8nXRL8ZhN' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::bF62qMLzrnPZjufP',
=======
        'as' => 'generated::aPdk9kZ8nXRL8ZhN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JzoBuwjSAyqzHnX4' => 
=======
    'generated::9mWWiTgIKoYF5yy1' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::JzoBuwjSAyqzHnX4',
=======
        'as' => 'generated::9mWWiTgIKoYF5yy1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dB9rKhRubuZupYOa' => 
=======
    'generated::ZFPUUy9LMmXPj1uS' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::dB9rKhRubuZupYOa',
=======
        'as' => 'generated::ZFPUUy9LMmXPj1uS',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KqXJSD4EOoyw7Lmj' => 
=======
    'generated::dU6shjj1GzopQEgJ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::KqXJSD4EOoyw7Lmj',
=======
        'as' => 'generated::dU6shjj1GzopQEgJ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::C2oo2Ac7zOhmE0ci' => 
=======
    'generated::xXOrJi2CDadpjRmg' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::C2oo2Ac7zOhmE0ci',
=======
        'as' => 'generated::xXOrJi2CDadpjRmg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JOzH2drZTjmUxRS3' => 
=======
    'generated::tOO44Q3kS6zZ3QZa' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::JOzH2drZTjmUxRS3',
=======
        'as' => 'generated::tOO44Q3kS6zZ3QZa',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5JIeLbfNZHAMCEvI' => 
=======
    'generated::YHBwKNRlyiyGIpGN' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::5JIeLbfNZHAMCEvI',
=======
        'as' => 'generated::YHBwKNRlyiyGIpGN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::D25wN32jLF38pyRi' => 
=======
    'generated::6Jh87KP0CBo7Exsb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::D25wN32jLF38pyRi',
=======
        'as' => 'generated::6Jh87KP0CBo7Exsb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::b5Z5WcWAg3zgLJ9r' => 
=======
    'generated::odCJyZhtanEqRIZm' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::b5Z5WcWAg3zgLJ9r',
=======
        'as' => 'generated::odCJyZhtanEqRIZm',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HYMyqq469kwOwEdY' => 
=======
    'generated::11BBiDIJr3kgaiwE' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::HYMyqq469kwOwEdY',
=======
        'as' => 'generated::11BBiDIJr3kgaiwE',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CYLzO9CIOCNeV9Dg' => 
=======
    'generated::24AUsVdvrYW0EUdb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::CYLzO9CIOCNeV9Dg',
=======
        'as' => 'generated::24AUsVdvrYW0EUdb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aBQuv6mlj2F9cj2i' => 
=======
    'generated::YTvihWmIqT5k9qhZ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::aBQuv6mlj2F9cj2i',
=======
        'as' => 'generated::YTvihWmIqT5k9qhZ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eH1SEvh1pijOraBg' => 
=======
    'generated::4WocYO5illCZRDEr' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::eH1SEvh1pijOraBg',
=======
        'as' => 'generated::4WocYO5illCZRDEr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::G6TbR8378lAcfyJn' => 
=======
    'generated::WOsmQMmyZAvNFObw' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::G6TbR8378lAcfyJn',
=======
        'as' => 'generated::WOsmQMmyZAvNFObw',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PResRvm5p2pdY0iZ' => 
=======
    'generated::c2S4Yb05NO0cRzU5' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::PResRvm5p2pdY0iZ',
=======
        'as' => 'generated::c2S4Yb05NO0cRzU5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eADu1UB6Nic2qBo3' => 
=======
    'generated::Qy8JhLWcNn52DkuV' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::eADu1UB6Nic2qBo3',
=======
        'as' => 'generated::Qy8JhLWcNn52DkuV',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::G1S93BZTO3zLL0RJ' => 
=======
    'generated::8NvCmdH4HrOy6agZ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::G1S93BZTO3zLL0RJ',
=======
        'as' => 'generated::8NvCmdH4HrOy6agZ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sU9C1rT34beFxWee' => 
=======
    'generated::brV6WYyAOe8FP95g' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::sU9C1rT34beFxWee',
=======
        'as' => 'generated::brV6WYyAOe8FP95g',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hd6DQynDiz0e9m2i' => 
=======
    'generated::Ieh3U0mJ4elACKjv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::hd6DQynDiz0e9m2i',
=======
        'as' => 'generated::Ieh3U0mJ4elACKjv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uueKyp3zk1ppXqgd' => 
=======
    'generated::rypZyxVJ601vEGc9' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::uueKyp3zk1ppXqgd',
=======
        'as' => 'generated::rypZyxVJ601vEGc9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Lwq72Xan3PIbgwnd' => 
=======
    'generated::ynbRgkTREgiaLQWx' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::Lwq72Xan3PIbgwnd',
=======
        'as' => 'generated::ynbRgkTREgiaLQWx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tMCPtvLkTEG2Zb0V' => 
=======
    'generated::LO2G3C4HKDIKq5ie' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::tMCPtvLkTEG2Zb0V',
=======
        'as' => 'generated::LO2G3C4HKDIKq5ie',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::q9RfMqSTcIbt2xPQ' => 
=======
    'generated::IEo3pA7YnzdeTZvj' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::q9RfMqSTcIbt2xPQ',
=======
        'as' => 'generated::IEo3pA7YnzdeTZvj',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::o0l7fw7QAF1auU4M' => 
=======
    'generated::pcO1P0NszvR7HicM' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::o0l7fw7QAF1auU4M',
=======
        'as' => 'generated::pcO1P0NszvR7HicM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::81cWIr8d6LWqn6zp' => 
=======
    'generated::DwXFp6tjv7LYaor4' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::81cWIr8d6LWqn6zp',
=======
        'as' => 'generated::DwXFp6tjv7LYaor4',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::r1ciK9aVbmYKFrn9' => 
=======
    'generated::utsl9vazg2y8CziG' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::r1ciK9aVbmYKFrn9',
=======
        'as' => 'generated::utsl9vazg2y8CziG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ShEEr3JZGG5BSX4E' => 
=======
    'generated::6w40NCQ7r7lU8CSf' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::ShEEr3JZGG5BSX4E',
=======
        'as' => 'generated::6w40NCQ7r7lU8CSf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aVDqENao8xZcxK9M' => 
=======
    'generated::Q5QqBJ4Wz80jSySt' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::aVDqENao8xZcxK9M',
=======
        'as' => 'generated::Q5QqBJ4Wz80jSySt',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YhqIpCMmVCW2IvnK' => 
=======
    'generated::bA3udvQ6bE2FSipx' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::YhqIpCMmVCW2IvnK',
=======
        'as' => 'generated::bA3udvQ6bE2FSipx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bL6bdPQssvk9bu5y' => 
=======
    'generated::bT4W6Qw3LulCioZM' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::bL6bdPQssvk9bu5y',
=======
        'as' => 'generated::bT4W6Qw3LulCioZM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YqGumyMeGFjeZoYc' => 
=======
    'generated::1IbhOvB0REShIHOb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::YqGumyMeGFjeZoYc',
=======
        'as' => 'generated::1IbhOvB0REShIHOb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ne84hSKKWeUmHH0A' => 
=======
    'generated::Co5XNKNCMKK4GKFm' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::ne84hSKKWeUmHH0A',
=======
        'as' => 'generated::Co5XNKNCMKK4GKFm',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3iGjY0YyU5Odj2vy' => 
=======
    'generated::yMYfTg8isSifHaGv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::3iGjY0YyU5Odj2vy',
=======
        'as' => 'generated::yMYfTg8isSifHaGv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HEtpXmX4IzsOC7W2' => 
=======
    'generated::2iI1cWG6JH1sPXZ1' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::HEtpXmX4IzsOC7W2',
=======
        'as' => 'generated::2iI1cWG6JH1sPXZ1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ntIUbS4gNl52Wr3Q' => 
=======
    'generated::AiGAdj3C6FAJWF9d' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::ntIUbS4gNl52Wr3Q',
=======
        'as' => 'generated::AiGAdj3C6FAJWF9d',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QQxFvrh7oZg3oVcf' => 
=======
    'generated::kYEtgFGq2oDC1U33' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::QQxFvrh7oZg3oVcf',
=======
        'as' => 'generated::kYEtgFGq2oDC1U33',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4hRT4tdyPPzDpgB5' => 
=======
    'generated::cyBl637vD61zdNmH' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LMS',
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
        'as' => 'generated::4hRT4tdyPPzDpgB5',
=======
        'as' => 'generated::cyBl637vD61zdNmH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Vzmi7oDbvj11Gwcj' => 
=======
    'generated::H0UZjPd7JMew4o4r' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_terms_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Vzmi7oDbvj11Gwcj',
=======
        'as' => 'generated::H0UZjPd7JMew4o4r',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AuWqWpEYklliQb1w' => 
=======
    'generated::owtFgiWEjLNRZ0SY' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/create_or_update_term_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::AuWqWpEYklliQb1w',
=======
        'as' => 'generated::owtFgiWEjLNRZ0SY',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tBttzn4uEP4NPPnt' => 
=======
    'generated::tFc95Qo1eLbq3gs2' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/books/remove_terms_and_condition/{termsAndConditionId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::tBttzn4uEP4NPPnt',
=======
        'as' => 'generated::tFc95Qo1eLbq3gs2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::l59Si3gxA6qbhZn1' => 
=======
    'generated::RRXhAFHDkxjk5RTz' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::l59Si3gxA6qbhZn1',
=======
        'as' => 'generated::RRXhAFHDkxjk5RTz',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4osLQ4qoAn18yrJ4' => 
=======
    'generated::Qvvr0VJG7ToL6W5D' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::4osLQ4qoAn18yrJ4',
=======
        'as' => 'generated::Qvvr0VJG7ToL6W5D',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CbRh4Az86zRx4vLA' => 
=======
    'generated::Xos6g1jpUUrfg3sp' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::CbRh4Az86zRx4vLA',
=======
        'as' => 'generated::Xos6g1jpUUrfg3sp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1l8x5jfUp8B2Tnc1' => 
=======
    'generated::OYWIuWn6gqhfsXpu' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::1l8x5jfUp8B2Tnc1',
=======
        'as' => 'generated::OYWIuWn6gqhfsXpu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RpCeJO0DYZWGOPpZ' => 
=======
    'generated::S5GfVCtcr0pCX2vh' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/books/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_copy_activity',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_copy_activity',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RpCeJO0DYZWGOPpZ',
=======
        'as' => 'generated::S5GfVCtcr0pCX2vh',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3mLRoE3U4WaClzfP' => 
=======
    'generated::v7A5jTXM3Hdpy2LM' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/books/get_book_info/get_copies/update_book_copy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-LIBRARY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_book_copy',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_book_copy',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3mLRoE3U4WaClzfP',
=======
        'as' => 'generated::v7A5jTXM3Hdpy2LM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ct7M2PE4pLIKZ9jw' => 
=======
    'generated::tmjsOFm9c682o6K5' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::ct7M2PE4pLIKZ9jw',
=======
        'as' => 'generated::tmjsOFm9c682o6K5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::itOvTizb76CkzuKI' => 
=======
    'generated::ww62ICWQe1uwtBDg' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::itOvTizb76CkzuKI',
=======
        'as' => 'generated::ww62ICWQe1uwtBDg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NL9miM6FUz91IJeR' => 
=======
    'generated::0Q88k98aRPL4F5s1' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::NL9miM6FUz91IJeR',
=======
        'as' => 'generated::0Q88k98aRPL4F5s1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TDuGhDMpWHvhavkx' => 
=======
    'generated::wH91FTImrVJQx3YI' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::TDuGhDMpWHvhavkx',
=======
        'as' => 'generated::wH91FTImrVJQx3YI',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dRfPXG43HfPoiboa' => 
=======
    'generated::JS96hrEeI9dOlX6O' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::dRfPXG43HfPoiboa',
=======
        'as' => 'generated::JS96hrEeI9dOlX6O',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::D8KVOWolpBCdRqk1' => 
=======
    'generated::vBMdgsgr7QL8pZR1' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::D8KVOWolpBCdRqk1',
=======
        'as' => 'generated::vBMdgsgr7QL8pZR1',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bnwCDukuudJUgKkk' => 
=======
    'generated::JQ6vvG7anyAxwQOc' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::bnwCDukuudJUgKkk',
=======
        'as' => 'generated::JQ6vvG7anyAxwQOc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::K8CLT1rlEiDtKTsD' => 
=======
    'generated::BYkEWM1ymupsdH67' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::K8CLT1rlEiDtKTsD',
=======
        'as' => 'generated::BYkEWM1ymupsdH67',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ideaJCPtD2PiifIn' => 
=======
    'generated::DVdylFkxBW8ni2PB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::ideaJCPtD2PiifIn',
=======
        'as' => 'generated::DVdylFkxBW8ni2PB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aF24LMunuRUhA6Gz' => 
=======
    'generated::o4seO2HOItWQseOu' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::aF24LMunuRUhA6Gz',
=======
        'as' => 'generated::o4seO2HOItWQseOu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8RjYuRIotUdVJUMI' => 
=======
    'generated::tZOkHrIg2h9MTLmT' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::8RjYuRIotUdVJUMI',
=======
        'as' => 'generated::tZOkHrIg2h9MTLmT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OCVF5CUEuMdfInBU' => 
=======
    'generated::gC3szuHm76FiEozb' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::OCVF5CUEuMdfInBU',
=======
        'as' => 'generated::gC3szuHm76FiEozb',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::O4j1JVsLj4PjYx5w' => 
=======
    'generated::C2kSAq7coNGwpoBr' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::O4j1JVsLj4PjYx5w',
=======
        'as' => 'generated::C2kSAq7coNGwpoBr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3IjPO1UBpEW4GrJm' => 
=======
    'generated::abLlCoimfWTrZsT8' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::3IjPO1UBpEW4GrJm',
=======
        'as' => 'generated::abLlCoimfWTrZsT8',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Pn4HLRXtsPPRBS0s' => 
=======
    'generated::ycdtdxBMHpOFDdoF' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::Pn4HLRXtsPPRBS0s',
=======
        'as' => 'generated::ycdtdxBMHpOFDdoF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0L3rQuCAaEMgenpq' => 
=======
    'generated::xVGjGIsxXJB2X6jK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::0L3rQuCAaEMgenpq',
=======
        'as' => 'generated::xVGjGIsxXJB2X6jK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vFctSgnpFDvGhrJ3' => 
=======
    'generated::tBPTl9zTNVUCV58Q' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::vFctSgnpFDvGhrJ3',
=======
        'as' => 'generated::tBPTl9zTNVUCV58Q',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rpZ7fPfzMG1XbKos' => 
=======
    'generated::h9bd6EfdIZEx2jbl' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::rpZ7fPfzMG1XbKos',
=======
        'as' => 'generated::h9bd6EfdIZEx2jbl',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vLRiCjRQPAW1J869' => 
=======
    'generated::IzynFK4kI8eeek1Q' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::vLRiCjRQPAW1J869',
=======
        'as' => 'generated::IzynFK4kI8eeek1Q',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eoPvORtf0XTHzw8m' => 
=======
    'generated::oq2C7rKjPxiXtYbT' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::eoPvORtf0XTHzw8m',
=======
        'as' => 'generated::oq2C7rKjPxiXtYbT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::31vOGEDXEcwANEYx' => 
=======
    'generated::k6vJGtnxaZdWkgqW' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::31vOGEDXEcwANEYx',
=======
        'as' => 'generated::k6vJGtnxaZdWkgqW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mt5DEv0dntl4v6Sq' => 
=======
    'generated::GdLRviflxpHAuRB3' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::mt5DEv0dntl4v6Sq',
=======
        'as' => 'generated::GdLRviflxpHAuRB3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::THUZzm4r8bf4OrEd' => 
=======
    'generated::6WnEVLi6SUgE3m5j' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::THUZzm4r8bf4OrEd',
=======
        'as' => 'generated::6WnEVLi6SUgE3m5j',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::j9g62nM6owpxwDE9' => 
=======
    'generated::nzju9BNamkkXgYbD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::j9g62nM6owpxwDE9',
=======
        'as' => 'generated::nzju9BNamkkXgYbD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::V8CoBNANiI5sYK20' => 
=======
    'generated::w29YAvgw8VZFpc7Y' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::V8CoBNANiI5sYK20',
=======
        'as' => 'generated::w29YAvgw8VZFpc7Y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::R6Oe2cfdL24zrOmE' => 
=======
    'generated::JFYbOAwC02UHKima' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/count_service_requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_service_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_service_requests',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::R6Oe2cfdL24zrOmE',
=======
        'as' => 'generated::JFYbOAwC02UHKima',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::q3vz6cGc9YrPsbJE' => 
=======
    'generated::lN5SWR4ZQP3cU3Yi' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/get_dormitory_rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::q3vz6cGc9YrPsbJE',
=======
        'as' => 'generated::lN5SWR4ZQP3cU3Yi',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RA7Yv5Tpq8LI3zG2' => 
=======
    'generated::BTLQhDYKJJP4jq3o' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create_or_update_room',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_room',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_room',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RA7Yv5Tpq8LI3zG2',
=======
        'as' => 'generated::BTLQhDYKJJP4jq3o',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pMzYUeWvX5oR3B3J' => 
=======
    'generated::h7OD3GlpY49fSTyB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/remove_room/{roomId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::pMzYUeWvX5oR3B3J',
=======
        'as' => 'generated::h7OD3GlpY49fSTyB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DPNZsvKmeB9OtS34' => 
=======
    'generated::kwmTM93FN3muSHqF' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::DPNZsvKmeB9OtS34',
=======
        'as' => 'generated::kwmTM93FN3muSHqF',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AuH0ByQEGpQRwczq' => 
=======
    'generated::Bpa2TvM4UveHtDUK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::AuH0ByQEGpQRwczq',
=======
        'as' => 'generated::Bpa2TvM4UveHtDUK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::urMZo44L8ToOQiC5' => 
=======
    'generated::HOQDMHKQ1psjdEjH' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::urMZo44L8ToOQiC5',
=======
        'as' => 'generated::HOQDMHKQ1psjdEjH',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::i62qHX7YzMxld5Gu' => 
=======
    'generated::gtRwXPVTVPhKjyii' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/room_reservations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@room_reservations',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@room_reservations',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::i62qHX7YzMxld5Gu',
=======
        'as' => 'generated::gtRwXPVTVPhKjyii',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NtiBzEQuanV2WiFA' => 
=======
    'generated::GuchpsGR6UUtgtmD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/new_room_reservation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@new_room_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@new_room_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::NtiBzEQuanV2WiFA',
=======
        'as' => 'generated::GuchpsGR6UUtgtmD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WfeScskQtKBMeWYL' => 
=======
    'generated::TujmzPNRQ3eUfXBv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_match_rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_match_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_match_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WfeScskQtKBMeWYL',
=======
        'as' => 'generated::TujmzPNRQ3eUfXBv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3cZq3J1Ji08sbCgG' => 
=======
    'generated::rg1hpwONRTr2UX88' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_current_tenant_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_current_tenant_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_current_tenant_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::3cZq3J1Ji08sbCgG',
=======
        'as' => 'generated::rg1hpwONRTr2UX88',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::A9ApJle6Qqq473NF' => 
=======
    'generated::MxjlFMWtamsQvPwq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create_or_update_service_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::A9ApJle6Qqq473NF',
=======
        'as' => 'generated::MxjlFMWtamsQvPwq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5ybMCaVRQAf42OZu' => 
=======
    'generated::S2tEMm8al1cf00Kl' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_service_request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_service_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_service_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5ybMCaVRQAf42OZu',
=======
        'as' => 'generated::S2tEMm8al1cf00Kl',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sDQjRizdLPwVhJwI' => 
=======
    'generated::WIUseD5ZJvTYA23v' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/set_service_request_as_action',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-DORMITORY',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_service_request_as_action',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_service_request_as_action',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::sDQjRizdLPwVhJwI',
=======
        'as' => 'generated::WIUseD5ZJvTYA23v',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WU9pVk7l6SpMYXhe' => 
=======
    'generated::QVc4galwD6ymqjRu' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::WU9pVk7l6SpMYXhe',
=======
        'as' => 'generated::QVc4galwD6ymqjRu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TfIzrUaOXXPBa0wk' => 
=======
    'generated::9MfRSBle1nr3KAgf' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::TfIzrUaOXXPBa0wk',
=======
        'as' => 'generated::9MfRSBle1nr3KAgf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AJBVSrBtxdPZBN6N' => 
=======
    'generated::aCNaLQrGEvlQ0vS2' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::AJBVSrBtxdPZBN6N',
=======
        'as' => 'generated::aCNaLQrGEvlQ0vS2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::s5N5csHCU0VAZs9e' => 
=======
    'generated::a5DyVNqTwA8ZxNA5' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::s5N5csHCU0VAZs9e',
=======
        'as' => 'generated::a5DyVNqTwA8ZxNA5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YBtxFWrGcp4tViSY' => 
=======
    'generated::Y59oCXnwkt72FloK' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::YBtxFWrGcp4tViSY',
=======
        'as' => 'generated::Y59oCXnwkt72FloK',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lHqnK2FgMzdwJiKr' => 
=======
    'generated::s0YQpiX9yiX3E2EB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::lHqnK2FgMzdwJiKr',
=======
        'as' => 'generated::s0YQpiX9yiX3E2EB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EkolK9JD5IfvrKEL' => 
=======
    'generated::VMPfMpaVwPWe4Kpp' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::EkolK9JD5IfvrKEL',
=======
        'as' => 'generated::VMPfMpaVwPWe4Kpp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7TGqYGlygSRIDsqT' => 
=======
    'generated::1jzKDTsF0jTKv8UX' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::7TGqYGlygSRIDsqT',
=======
        'as' => 'generated::1jzKDTsF0jTKv8UX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qgWwqbL8uTzqjs17' => 
=======
    'generated::jlRq1A28bAOl8I4y' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::qgWwqbL8uTzqjs17',
=======
        'as' => 'generated::jlRq1A28bAOl8I4y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::077mvcIE51qPEaDi' => 
=======
    'generated::yPGM796wQbC49lH9' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::077mvcIE51qPEaDi',
=======
        'as' => 'generated::yPGM796wQbC49lH9',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::65QX8NpJZ9ie8SYk' => 
=======
    'generated::X7960M4prdXypJ6W' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::65QX8NpJZ9ie8SYk',
=======
        'as' => 'generated::X7960M4prdXypJ6W',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::z9yfPxsk2y0ZeHev' => 
=======
    'generated::kyVxy20LgQhmLYlX' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::z9yfPxsk2y0ZeHev',
=======
        'as' => 'generated::kyVxy20LgQhmLYlX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CBu6wK4XLoHiMiiu' => 
=======
    'generated::n2ZNuHwdTwMrGeNR' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::CBu6wK4XLoHiMiiu',
=======
        'as' => 'generated::n2ZNuHwdTwMrGeNR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Y9LmB5x19h07wxQo' => 
=======
    'generated::icdVj00oyAoCLqE3' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::Y9LmB5x19h07wxQo',
=======
        'as' => 'generated::icdVj00oyAoCLqE3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5ZlHuJddWhqdAzn0' => 
=======
    'generated::23WFVH3lO3kSGVPB' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::5ZlHuJddWhqdAzn0',
=======
        'as' => 'generated::23WFVH3lO3kSGVPB',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fCs8010cvlwy9xWM' => 
=======
    'generated::P9fOmUCC0owtKzR2' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::fCs8010cvlwy9xWM',
=======
        'as' => 'generated::P9fOmUCC0owtKzR2',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lcOJoKvMVW55HXvf' => 
=======
    'generated::wB5DILtodng9xKMp' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::lcOJoKvMVW55HXvf',
=======
        'as' => 'generated::wB5DILtodng9xKMp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3GDrNXECyG6OPOUR' => 
=======
    'generated::UKTw4o6b7fSaqN7z' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::3GDrNXECyG6OPOUR',
=======
        'as' => 'generated::UKTw4o6b7fSaqN7z',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rqgVXqvohBTtE7ve' => 
=======
    'generated::alPmtv4MqFq2TaDg' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/get_terms_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::rqgVXqvohBTtE7ve',
=======
        'as' => 'generated::alPmtv4MqFq2TaDg',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FyUsCKNTs7NcqSMY' => 
=======
    'generated::GWLc5e85tbfUm36y' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/cashier/create_or_update_term_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FyUsCKNTs7NcqSMY',
=======
        'as' => 'generated::GWLc5e85tbfUm36y',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::38jTlNnn9yTSeef2' => 
=======
    'generated::ov2iYKBLW11UHcwT' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/cashier/remove_terms_and_condition/{termsAndConditionId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::38jTlNnn9yTSeef2',
=======
        'as' => 'generated::ov2iYKBLW11UHcwT',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mfOGayxL1zjlzYHu' => 
=======
    'generated::yHELLuTLFMLUihQ3' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::mfOGayxL1zjlzYHu',
=======
        'as' => 'generated::yHELLuTLFMLUihQ3',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ydMm9iQDFxuQXvtM' => 
=======
    'generated::4vzSDNNiI1Vxv6pO' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::ydMm9iQDFxuQXvtM',
=======
        'as' => 'generated::4vzSDNNiI1Vxv6pO',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::92ubCHJDseGyumud' => 
=======
    'generated::umRbtW2U17IaKYTD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::92ubCHJDseGyumud',
=======
        'as' => 'generated::umRbtW2U17IaKYTD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::V0xgjA5j97gnv8jo' => 
=======
    'generated::KxXzEEpBzqpQUQMu' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/cashier/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,CASHIER',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_all_paid_payments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_all_paid_payments',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::V0xgjA5j97gnv8jo',
=======
        'as' => 'generated::KxXzEEpBzqpQUQMu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YhRWvER7MRAYhDwR' => 
=======
    'generated::5Q90gUxqaqzrajHq' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::YhRWvER7MRAYhDwR',
=======
        'as' => 'generated::5Q90gUxqaqzrajHq',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Bnp0mXFlJZbbnLII' => 
=======
    'generated::l5zP7PGbNSOWHkCv' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::Bnp0mXFlJZbbnLII',
=======
        'as' => 'generated::l5zP7PGbNSOWHkCv',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DW0L4WDSmOTs1zvZ' => 
=======
    'generated::LGXTQzXsBzmFV4q8' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::DW0L4WDSmOTs1zvZ',
=======
        'as' => 'generated::LGXTQzXsBzmFV4q8',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NP53DLzKqcsWVxQ1' => 
=======
    'generated::KQmf3PzEawVws0G5' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::NP53DLzKqcsWVxQ1',
=======
        'as' => 'generated::KQmf3PzEawVws0G5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Md7497MsF0B0ntuN' => 
=======
    'generated::d1VJ36aLkl6Fhw4H' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::Md7497MsF0B0ntuN',
=======
        'as' => 'generated::d1VJ36aLkl6Fhw4H',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::T7UdIHQjAdqmRkmB' => 
=======
    'generated::dbPD9kZc9zsh2bDE' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::T7UdIHQjAdqmRkmB',
=======
        'as' => 'generated::dbPD9kZc9zsh2bDE',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CCJKuDjs93Q12Zwv' => 
=======
    'generated::owPEnFZh2gpJkD01' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::CCJKuDjs93Q12Zwv',
=======
        'as' => 'generated::owPEnFZh2gpJkD01',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Oea3CP3BJAM5QymD' => 
=======
    'generated::whj3Ai52eXdlVIu0' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::Oea3CP3BJAM5QymD',
=======
        'as' => 'generated::whj3Ai52eXdlVIu0',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7KyM6w9vZ7na8Wfj' => 
=======
    'generated::HuvhSXJJ8p9HTmXP' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::7KyM6w9vZ7na8Wfj',
=======
        'as' => 'generated::HuvhSXJJ8p9HTmXP',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::E8jRwv70w7fhGmot' => 
=======
    'generated::AEYHXzHjcwRsQhJk' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::E8jRwv70w7fhGmot',
=======
        'as' => 'generated::AEYHXzHjcwRsQhJk',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::McCfTzDaxwt2RI26' => 
=======
    'generated::F7GdLxPu2rtOG1bC' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/get_terms_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::McCfTzDaxwt2RI26',
=======
        'as' => 'generated::F7GdLxPu2rtOG1bC',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YKttPSkBf5BO71NR' => 
=======
    'generated::uU7Rf1XOg6WhfxLf' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/create_or_update_term_and_condition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YKttPSkBf5BO71NR',
=======
        'as' => 'generated::uU7Rf1XOg6WhfxLf',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xyNkkasjiq3gP3Tb' => 
=======
    'generated::nG7ufPkndW3kziCs' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/recreational-activity/remove_terms_and_condition/{termsAndConditionId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
          3 => 'user_role:SUPERADMIN,ADMIN-RA',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xyNkkasjiq3gP3Tb',
=======
        'as' => 'generated::nG7ufPkndW3kziCs',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EYcuA30VUT3EfJhh' => 
=======
    'generated::fXy7WOOh9mAQgq5a' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::EYcuA30VUT3EfJhh',
=======
        'as' => 'generated::fXy7WOOh9mAQgq5a',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::q6kCrfEEyHbAXD1v' => 
=======
    'generated::9WrgsdJbTEhqKrNu' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::q6kCrfEEyHbAXD1v',
=======
        'as' => 'generated::9WrgsdJbTEhqKrNu',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cPJxxOfjC6Z0ovjX' => 
=======
    'generated::IsfjuppSnWGt7SeN' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::cPJxxOfjC6Z0ovjX',
=======
        'as' => 'generated::IsfjuppSnWGt7SeN',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yornK6gNSCkBgtT0' => 
=======
    'generated::VMBQYH4ptnh44otD' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::yornK6gNSCkBgtT0',
=======
        'as' => 'generated::VMBQYH4ptnh44otD',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WTYuFc0pBHYFco5z' => 
=======
    'generated::WzwpgeXvjoOnxShp' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::WTYuFc0pBHYFco5z',
=======
        'as' => 'generated::WzwpgeXvjoOnxShp',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8k2HGRJZKRCdA38J' => 
=======
    'generated::JvJbTkbrxBVZPK26' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::8k2HGRJZKRCdA38J',
=======
        'as' => 'generated::JvJbTkbrxBVZPK26',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2Srd1n77XlalNzBX' => 
=======
    'generated::yNJHrxhOIN6Cel5A' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::2Srd1n77XlalNzBX',
=======
        'as' => 'generated::yNJHrxhOIN6Cel5A',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2tgjoMvW47dN1ay7' => 
=======
    'generated::MB4lTr8ztvTzecHe' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
<<<<<<< HEAD
        'as' => 'generated::2tgjoMvW47dN1ay7',
=======
        'as' => 'generated::MB4lTr8ztvTzecHe',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::l7PD5WDt7gPgrsgm' => 
=======
    'generated::YlPtIp96hVmHl4Ef' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
<<<<<<< HEAD
        'as' => 'generated::l7PD5WDt7gPgrsgm',
=======
        'as' => 'generated::YlPtIp96hVmHl4Ef',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lcjKInk8UErQoETm' => 
=======
    'generated::GAOU7wyEC9NLJG0d' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::lcjKInk8UErQoETm',
=======
        'as' => 'generated::GAOU7wyEC9NLJG0d',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ePwNXYVkTjZxxLql' => 
=======
    'generated::gtPBqSi4GdzSI82N' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::ePwNXYVkTjZxxLql',
=======
        'as' => 'generated::gtPBqSi4GdzSI82N',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dZz74mftCJadht1L' => 
=======
    'generated::3k3ocsmRr1Me3OEE' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::dZz74mftCJadht1L',
=======
        'as' => 'generated::3k3ocsmRr1Me3OEE',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IMxb8iVbNZ6QBKFM' => 
=======
    'generated::XTDJlWEFgb1lUOnR' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::IMxb8iVbNZ6QBKFM',
=======
        'as' => 'generated::XTDJlWEFgb1lUOnR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FvrrJfvnZPmlW5dx' => 
=======
    'generated::PMe6NMaVMcgBkFIt' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::FvrrJfvnZPmlW5dx',
=======
        'as' => 'generated::PMe6NMaVMcgBkFIt',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nzvS1FbKs3RLsgdi' => 
=======
    'generated::U74KglmMsDXvmHLW' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::nzvS1FbKs3RLsgdi',
=======
        'as' => 'generated::U74KglmMsDXvmHLW',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZMXVKOFnAfHgzY1X' => 
=======
    'generated::MyGi9F68DvwxmNXG' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::ZMXVKOFnAfHgzY1X',
=======
        'as' => 'generated::MyGi9F68DvwxmNXG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YT6nFjab6kbM7fb3' => 
=======
    'generated::b8X7Jc7PeoX3c8or' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::YT6nFjab6kbM7fb3',
=======
        'as' => 'generated::b8X7Jc7PeoX3c8or',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KNEOqqbjqhHFFMIt' => 
=======
    'generated::M1f6PXX0h4i0XQ0V' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::KNEOqqbjqhHFFMIt',
=======
        'as' => 'generated::M1f6PXX0h4i0XQ0V',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FMY5wntpMXUh4ow1' => 
=======
    'generated::r2SixZclLmMfTxYx' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
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
        'as' => 'generated::FMY5wntpMXUh4ow1',
=======
        'as' => 'generated::r2SixZclLmMfTxYx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qm1dUnxV2stU3Uua' => 
=======
    'generated::3roDqvbw8Tg8IjZX' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@qrReader',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@qrReader',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::qm1dUnxV2stU3Uua',
=======
        'as' => 'generated::3roDqvbw8Tg8IjZX',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iq0dPC1FanbaarXW' => 
=======
    'generated::O8OoDslVJJSTZeQL' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@check_in_out',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@check_in_out',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::iq0dPC1FanbaarXW',
=======
        'as' => 'generated::O8OoDslVJJSTZeQL',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FKUCAotfULFubawx' => 
=======
    'generated::mDj6QI2WYNZt74ZM' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@get_log_in_out_records',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\QRReaderCheckInOutCtrl@get_log_in_out_records',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FKUCAotfULFubawx',
=======
        'as' => 'generated::mDj6QI2WYNZt74ZM',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lYSJUPNV502sYMNj' => 
=======
    'generated::2ciid3e6yTtammOx' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::lYSJUPNV502sYMNj',
=======
        'as' => 'generated::2ciid3e6yTtammOx',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Lb9huHBktIlHDz7h' => 
=======
    'generated::t65ShfUmqFWyWyO5' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Lb9huHBktIlHDz7h',
=======
        'as' => 'generated::t65ShfUmqFWyWyO5',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WNcUFdbovPqJLyRJ' => 
=======
    'generated::aqBnf7UB8A3pZYJc' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::WNcUFdbovPqJLyRJ',
=======
        'as' => 'generated::aqBnf7UB8A3pZYJc',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::t5NXwrpbtfhdDzmm' => 
=======
    'generated::tBG6qq5kbclgNnpQ' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::t5NXwrpbtfhdDzmm',
=======
        'as' => 'generated::tBG6qq5kbclgNnpQ',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::d6q5scJSTVz5PRnm' => 
=======
    'generated::Bx3LSTXPwWO5cixR' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::d6q5scJSTVz5PRnm',
=======
        'as' => 'generated::Bx3LSTXPwWO5cixR',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JLutyvBmOzhRP2wZ' => 
=======
    'generated::CEgYOhRmi9ZdCAYG' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JLutyvBmOzhRP2wZ',
=======
        'as' => 'generated::CEgYOhRmi9ZdCAYG',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ECtw7Sxhki9b2Zh7' => 
=======
    'generated::jx0yf3rsKOL7DzGr' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/my-account/audit_trail_filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'admin-api',
          1 => 'auth:sanctum',
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA,ADMIN-LMS',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@audit_trail_filter',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@audit_trail_filter',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ECtw7Sxhki9b2Zh7',
=======
        'as' => 'generated::jx0yf3rsKOL7DzGr',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::al59hNQxCVRiDkLM' => 
=======
    'generated::59W8bUJgXqoPfepL' => 
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003b10000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::al59hNQxCVRiDkLM',
=======
        'as' => 'generated::59W8bUJgXqoPfepL',
>>>>>>> 4db0b8429ce802fa792c135a459173c4fc9a70ad
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
