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
            '_route' => 'generated::Zhp4Yk9WQ4gJUpSP',
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
            '_route' => 'generated::2GVaK8KhAbfHpfWO',
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
            '_route' => 'generated::fYCZhncOqdzxv1y3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fW32dRCSEtSDjH0L',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dWEhQbCfzRRcTq0H',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FRdTm2tz9mAYFcPU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MMrd4neOyZ1AYfRr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hP7QrACJQZxKjyU3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0KWtEIAmshgoz6yl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IcO28vrP8HusZk7U',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::epevgm9tsvFPm5uX',
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
            '_route' => 'generated::rmxLEOKjzhHZBcLN',
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
            '_route' => 'generated::RDqynWAGKppchwgb',
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
            '_route' => 'generated::RSyLkVKk53AjEPDh',
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
            '_route' => 'generated::1qkftt0Xx5HDfgXL',
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
            '_route' => 'generated::I3LoUeCPOYBKhjWP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DoNcmMYRq9RgyTW2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ynSDK27DcyXR8Dbe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7zYZVJuczWVIiMph',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LYukU65e4G1E29fy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::J89gfUz1zotgifhD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LbGZU5gD7fPDtx73',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8SBWUfjgUisW1dDG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fp77wZhXOlcmt47S',
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
            '_route' => 'generated::Srn8U89RzNAjdhbe',
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
            '_route' => 'generated::mT7ec6dnSTSNI6dK',
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
            '_route' => 'generated::DGATrr8qcrQCvDZO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::COEUDNKVwFgbQteW',
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
            '_route' => 'generated::JcyLV3LYfavjSNFH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rMET6Me9DRfE4p4V',
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
            '_route' => 'generated::ECJRxmreA2Gco6JS',
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
            '_route' => 'generated::vi4ugsFSJXLxOgzg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MptPQ0bT6O7or2rG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2WgdhIMt5y3psVKs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::d6fc1yUDOzWv2WNF',
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
            '_route' => 'generated::q7LgtUg13pdOkUxN',
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
            '_route' => 'generated::X3yIg38Aw65vnAsY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mAV4okJBuLWnY5pL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Y6169EJWHL4dLZfK',
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
            '_route' => 'generated::DDk35r4JT4VhOO9z',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jr5CFnRqDyQXJ11I',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NPQPfyV2gZg5Sq7H',
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
            '_route' => 'generated::qVrLv2QPb7IKUh1O',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::H9JvdpCqx7ioLpzb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YJ7L1rcALG4DEn2a',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sT40voXNECZ62QGs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PIFCqrDBVmJ3lkjL',
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
            '_route' => 'generated::4gI4lJJ4kVTI4s75',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JEEuhddeWaNAgfTf',
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
            '_route' => 'generated::fj5m7hVyjJM9jSwV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BSwWcTIDEHYbHSWh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Oh4HlWKyIuyr49Ur',
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
            '_route' => 'generated::DaxHn2FW0XFyqlIX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vMCjQrywAKKJdFoT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ArtfM6qQE0IQQBAp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JjD4EHnBBZubRo6S',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2HBw4Qj1xMa6Ndn4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tnaKVgt0wMDnPPxr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Jt0KIKNqoy7DYXej',
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
            '_route' => 'generated::zBJU93fIgA7CFpBv',
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
            '_route' => 'generated::GaIed32od87VFSo2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dxrAGFWQ25KN1aES',
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
            '_route' => 'generated::aT62e3BYZYa2WFjA',
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
            '_route' => 'generated::SgJ8uTM2HchX7dOm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jP3WpA9Gr4q0gG2O',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QhP7HFjc4Mrac1zY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TvxZY80AnqQqgasE',
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
            '_route' => 'generated::tD0RCWonLBjVeVE4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
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
            '_route' => 'generated::Zq3PqTlQbwP55z86',
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
            '_route' => 'generated::2ij5ah3KE2oazAcR',
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
            '_route' => 'generated::PNMCbQmcqwi38l0E',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::N3gY1jYGuLo1k5Iz',
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
            '_route' => 'generated::ACoBfvSTjRSfLG8A',
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
            '_route' => 'generated::LlyYXgBkak5MNmEn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nWxWWSDrcklTREcO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RTUL5FcXbVCiXWzh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OuL2s8zu2vMtObgx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::saTc4qhKTtUvizWr',
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
      '/api/update_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jnoGZm2OrwUvnyRJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XSwZa2NGrG5kTjby',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::J8GjjaBm9BkPfV0S',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::eGzHgzArvcXWZdZ6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vtiq6lKfoWrrps05',
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
            '_route' => 'generated::tVBaUC9HFUKNmZJ4',
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
            '_route' => 'generated::oSqx11gGkukfbhfL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ibn3daSlyGEm3CXm',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DRc6UpTGqFsCailH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BydO0ZciMvToKZpD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GHZpEO2ZslJylx7j',
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
            '_route' => 'generated::VqaNBXOovMcdkD94',
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
            '_route' => 'generated::CjVjD6EXTjXM3BTq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bdpTKUHPNIZeBfpy',
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
            '_route' => 'generated::E0h0g74DEaAefZhW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MoK5vJBEqeuVKWeu',
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
            '_route' => 'generated::9dEWHjomvnOpYhDF',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bR3kEgjHCNnxLEFo',
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
            '_route' => 'generated::E0C2QiNFUtXoIGyW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NlKeW5LicC8cGUu4',
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
            '_route' => 'generated::n8OeZ48HCChitx3C',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5NYi354f98FmymQh',
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
            '_route' => 'generated::8rzdeakJ538pXRPX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VeoKmi1KuLIKN3K5',
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
            '_route' => 'generated::ReZOpGZDxgIy4ViK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::atUmEgMavSYSCktg',
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
            '_route' => 'generated::8o4j8GmynknTBUuI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pkajizVPmYnw2ERL',
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
            '_route' => 'generated::wPFt4EkA3vdGzpsc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zDXvt1PzYpNyv1mk',
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
            '_route' => 'generated::171I2bjaY8Oiw5Ee',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oPimC0xUD12fnKzi',
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
            '_route' => 'generated::U6uPcTe7WVtkpJIA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Xai12hycNx4SNvWz',
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
            '_route' => 'generated::U0xTfwvhXo7p5otr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uwNexyVKkRSuCT3Q',
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
            '_route' => 'generated::ImcgjnPjoyP9juKQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gvJOIAhUWnLPJHWd',
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
            '_route' => 'generated::NYdmOcaxsnNuxltP',
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
            '_route' => 'generated::IDkPKx6QgsCxtD0V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::k7dbVuxJLJi8KgPD',
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
            '_route' => 'generated::W2n2OncCAWr39hzU',
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
            '_route' => 'generated::g80ZppBczBa4mDJO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zzyAXoCzT1Im9uha',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VqTdu8CryaaPdTjR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dvgMpXdXOOnozZzg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::t0VOtHHyM0qb9syX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YNWsD8KbGJ4xo326',
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
            '_route' => 'generated::frqLJMBOfnvll66x',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZGAHKqaW5EbVLEJ7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HUqTjhrD4mfXpTXu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6SMgZSOEsm3yRFug',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lgv8PjUyfcCexjqa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0jWsBq6s6uL8nU57',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6zWK46qrs5TWEQf6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0OYQa5UmqZWjL0Ky',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7W2MWpMz4gbMmhSp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6xA5aszMm0sKUzZ8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Xz7i7ozH3kWFrL8Y',
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
            '_route' => 'generated::pEb5D9EQNNxi9v0O',
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
            '_route' => 'generated::wZ5XPWP0fLJNdrLI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IVTKkUHOJv6FUjNH',
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
            '_route' => 'generated::6WeVbYqXLjUSAx5c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8ZZ6Ev5x00ezc8Uz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Nlu01MKp0hv9SsKB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ar2avGYOAUmLvzVE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PQi1vDrrHNWeoXph',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8SrLUC5HqxL9qAsX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YaB5wmB17lvoLh66',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Jzp33dohcN2P60Zg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::odsfbZyAn3koMOSv',
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
            '_route' => 'generated::banLDuEKJa4inUnw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3EoL0DsbdYnO5qqk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MKEetCdLPQFnFvjy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Rj5ipxZaDaWFZ2OQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YlYpwnZX2S07azlw',
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
            '_route' => 'generated::wuwl8IBY0rIJ4RGX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7UFg6wAMaVsTAaPU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2OyHPYzHBJvoBQsk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NvFz6diAwfDb0JC6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::f83oIMtfqHidZPnr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dpsZl0t9u5HsvBdF',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::24cuENPoOfeMP6lZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::waeBrWKBbTcFC1Pw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8kRdyGb7rGzAwwmd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lw2AVf3VzOpErH9A',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Iul6bWLiDnO8kROv',
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
            '_route' => 'generated::MHn6mmeQWV9A5EIc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EqNpny2qgIHGnjEp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Y7gTKBvAQWIfKqoc',
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
            '_route' => 'generated::SFj1IaH3SJARE1Aj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::utDgpUlOz6ayy32K',
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
            '_route' => 'generated::72IwPuQa7XdruNcg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pQuercwKwuiOFRVK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NXVv0ZsIZBS8GTyy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gL2PuBUSMvQNUtmg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AnJVNnA1TpYBqETU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rjkzIKoS42BqAVuB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DG7cplNrF4AEfG90',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XhqqVW0acXsFY3W3',
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
            '_route' => 'generated::43c7ZL8obpBSaZR2',
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
            '_route' => 'generated::Kq2GCAZSY58Mxjzl',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6pNW7LzpPukrv1G4',
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
            '_route' => 'generated::PZ5jE5x5u7YETXO4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ltu2YXS4DTTVH8cJ',
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
            '_route' => 'generated::8Ri29muC2SmsPEv7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qw4iSt7nEROjDheA',
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
            '_route' => 'generated::2TdgdSKMgfihz4Wk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ukjQ8K42RFUuwUac',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0UE4yARr0QYw8j8r',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KFo3BqqXmriNovi8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cjBmqFaMDVcPwGHI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vdyDBxwJYFv6bw7h',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::74HwaQk2fR36ch4N',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NeffafLIjqdOkT5t',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IOLuwZtztXS17bwg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jPvoIklsk2VXc4j8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xqdp5cCdZ1nCNqMH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P3W3roug4vkYSiBI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rpsSwVIqNzjOWJcA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::piIu423CeJQ0sCdw',
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
            '_route' => 'generated::FGWRH0TBLYetHYsR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YVen8JR1CBnxjCMO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rwE15fmcS3OR1Nkx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZhxzZGBg9ZBXyPlh',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AfwNguMCcCTXvDC4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UHzKvdrLFpZgQhTI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4sdpABWqWj4oCqua',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mwM1FiWWTCFPxasd',
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
            '_route' => 'generated::qaJu8G6mwODuusm5',
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
      0 => '{^(?|/api/(?|my\\-account/get_trainee_general_info/([^/]++)(*:60)|enrollment/(?|get_(?|requirements/([^/]++)(*:109)|applications/([^/]++)(*:138))|remove_training_request/([^/]++)(*:179))|dormitories/(?|applied_dormitories/view/(?|([^/]++)(?|(*:242)|/inclusions(*:261))|getAllHistories/([^/]++)(*:294))|remove_applied_dormitories/([^/]++)(*:338)|inclusion/requests/([^/]++)(*:373)|services/(?|([^/]++)(*:401)|([0-9]+)/create(*:424)|([0-9]+)/cancel(*:447))|transfer_request/cancel/([^/]++)(*:488)|extension_request/cancel/([^/]++)(*:529)|cancel_request/([^/]++)(*:560))|libraries/book_info/([^/]++)(*:597)|client_satisfaction/surveys/delete/([^/]++)(*:648)|invoices/view/([^/]++)(*:678)|traine(?|r/enrollment/courses/([^/]++)(*:724)|e\\-info/([^/]++)(*:748))|recreationals/testTest/([^/]++)(*:788)|admin/(?|enrollment/(?|get_applications/remove_training_request/([^/]++)(*:868)|remove_(?|s(?|ch(?|edule/([^/]++)(*:909)|ool/([^/]++)(*:929))|ponsor/([^/]++)(*:953))|module(?|/([^/]++)(*:980)|_type/([^/]++)(*:1002))|c(?|ertificate/([^/]++)(*:1035)|ourse(?|/([^/]++)(*:1061)|_fee/([^/]++)(*:1083)))|voucher/([^/]++)(*:1110)|license/([^/]++)(*:1135)|rank/([^/]++)(*:1157)|facilitator/([^/]++)(*:1186))|training\\-requirements/remove_trequirement/([^/]++)(*:1247))|book(?|s/(?|get_book_(?|info/(?|([^/]++)(*:1297)|get_copies/([^/]++)(*:1325)|remove_copy/([^/]++)(*:1354))|total_reservations/([^/]++)(*:1391)|reservation/remove_fine/([^/]++)(*:1432))|remove_book/([^/]++)(*:1462))|_entry/remove_entry/([^/]++)(*:1500))|dormitory/(?|get_(?|dormitory_(?|rooms/([^/]++)(*:1557)|info/([^/]++)(*:1579))|inventories/remove_dorm_inventory_stock/([^/]++)(*:1637))|cancel_(?|dorm_request/([^/]++)(*:1678)|charge/([^/]++)(*:1702))|remove_(?|room/([^/]++)(*:1735)|dorm_inventory/([^/]++)(*:1767)|service/([^/]++)(*:1792)))|masterlist/(?|user/(?|get_user_(?|basic_info/([^/]++)(*:1856)|activities/([^/]++)(*:1884)|qr_reader_assignments/([^/]++)(*:1923))|remove_(?|qr_reader_assignment/([^/]++)(*:1972)|user/([^/]++)(*:1994)))|employer/remove_employer/([^/]++)(*:2038)|position/remove_position/([^/]++)(*:2080)|qr\\-reader/remove_qr_reader/([^/]++)(*:2125))|cashier/remove_(?|charge(?|/([^/]++)(*:2171)|_category/([^/]++)(*:2198))|or_number/([^/]++)(*:2226))|recreational\\-activity/ra_remove_(?|equipment(?|/([^/]++)(*:2293)|_stock/([^/]++)(*:2317))|facility/([^/]++)(*:2344)))))/?$}sDu',
    ),
    3 => 
    array (
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3NAoILyhZNXrpr2e',
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
            '_route' => 'generated::3zV31gJKgdySzfDY',
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
            '_route' => 'generated::f2WxoLHtx7MSsNbM',
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
            '_route' => 'generated::puiidZsbCkXD0Ncq',
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
            '_route' => 'generated::gbbPObgLdjfthH4n',
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
            '_route' => 'generated::XbozIVHIuFiQbRFi',
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
            '_route' => 'generated::wOcDJzdk6ZCVusYr',
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
            '_route' => 'generated::OXTDDKg0Hb9daQR1',
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
            '_route' => 'generated::cFkmsKfHvY2hVayO',
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
            '_route' => 'generated::K4OeCbtRfZRA4mJd',
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
            '_route' => 'generated::YyxsNvVEtmBp9Jgt',
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
            '_route' => 'generated::TXUklKDegUWLt8bJ',
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
            '_route' => 'generated::StyXRb7L5LhQMaKZ',
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
            '_route' => 'generated::BK35tyz7oNsrNP5G',
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
            '_route' => 'generated::dTTSp3ozRwbhJFUQ',
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
            '_route' => 'generated::OzfmnjiejNIwuEOf',
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
            '_route' => 'generated::GPoVZSEvKmPaS2vT',
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
            '_route' => 'generated::iNLzlSYMMJP5Uv62',
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
            '_route' => 'generated::UYcGPSnonFkYpmCo',
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
            '_route' => 'generated::KuOYPGammcSmtoxB',
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
      788 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mRKC44ptesmaMuid',
          ),
          1 => 
          array (
            0 => 'UIId',
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
      868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sugeIXgGXCm0D8G0',
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
      909 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZkyEXQB5MFQ5UnTm',
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
      929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NcWc3HW6fIpJFW7K',
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
      953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YGefbXuyBwGackiG',
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
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lLmtx06pbwEGl14C',
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
      1002 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oCyeQHSst71L5SLq',
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
      1035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fQIqWa2InGwn1QsN',
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
      1061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k0MjS1NVMM2ztAKz',
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
      1083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qzmj4RIPki4k1qxq',
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
      1110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SHlValhjR3l74tM3',
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
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sncvviiwjSip7eU4',
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
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XKcNBA61zM37auYG',
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
      1186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GoZgHK2ucwsHJOrM',
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
      1247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uGpj5qJLZwBBy5fn',
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
      1297 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K8KOfw8pF8BNskv5',
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
      1325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2YrP46lB1y9bWCF2',
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
      1354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0HwRfQ4cqQlETYUj',
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
      1391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rUUc12IpdRplIp7K',
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
      1432 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kXW4wuS3lipkcboq',
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
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kOz3t3X2gLnm6KDP',
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
      1500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ij8Y33hSJDwhDacK',
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
      1557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XuXuuFaXVCuUE8hp',
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
      1579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xKvC4sw85dH9VL5z',
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
      1637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PIeL1S7bMyvSv459',
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
      1678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IrQmKJJxg9s9vvab',
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
      1702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pt5Et0cMotV0uKpE',
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
      1735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iV5jBldY4JELTgI7',
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
      1767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XDc05RYNY4Oa8d5Z',
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
      1792 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bTjkdwm8AfzK6aqV',
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
      1856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l7Chn8XcDrkcHYVI',
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
      1884 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SYllITQlWsLs6jxl',
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
      1923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8DRcQASooFO5KSC',
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
      1972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RWuBgJHb4NekyZK9',
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
      1994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YWryATS7ubTxrvZB',
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
      2038 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WeuV7dSwvFHl03I6',
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
      2080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BefzhYB2A6BQuQWS',
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
      2125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i6WNqxp63HdOxPzr',
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
      2171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bDAE9MpfXfAl70Ql',
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
      2198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ZY8cgLhTpgaSNgT',
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
      2226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x2Y2IwNWLX6R2f97',
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
      2293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wE462bBjw7ia3ZZ0',
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
      2317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IOnxRtW8vAEtMkc4',
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
      2344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VCnsRbZE5ErAwk0U',
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
    'generated::Zhp4Yk9WQ4gJUpSP' => 
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
        'as' => 'generated::Zhp4Yk9WQ4gJUpSP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2GVaK8KhAbfHpfWO' => 
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
        'as' => 'generated::2GVaK8KhAbfHpfWO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fYCZhncOqdzxv1y3' => 
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
        'as' => 'generated::fYCZhncOqdzxv1y3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::fW32dRCSEtSDjH0L' => 
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
        'as' => 'generated::fW32dRCSEtSDjH0L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dWEhQbCfzRRcTq0H' => 
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
        'as' => 'generated::dWEhQbCfzRRcTq0H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FRdTm2tz9mAYFcPU' => 
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
        'as' => 'generated::FRdTm2tz9mAYFcPU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MMrd4neOyZ1AYfRr' => 
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
        'as' => 'generated::MMrd4neOyZ1AYfRr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hP7QrACJQZxKjyU3' => 
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
        'as' => 'generated::hP7QrACJQZxKjyU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0KWtEIAmshgoz6yl' => 
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
        'as' => 'generated::0KWtEIAmshgoz6yl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3NAoILyhZNXrpr2e' => 
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
        'as' => 'generated::3NAoILyhZNXrpr2e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IcO28vrP8HusZk7U' => 
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
        'as' => 'generated::IcO28vrP8HusZk7U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::epevgm9tsvFPm5uX' => 
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
        'as' => 'generated::epevgm9tsvFPm5uX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rmxLEOKjzhHZBcLN' => 
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
        'as' => 'generated::rmxLEOKjzhHZBcLN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RDqynWAGKppchwgb' => 
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
        'as' => 'generated::RDqynWAGKppchwgb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RSyLkVKk53AjEPDh' => 
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
        'as' => 'generated::RSyLkVKk53AjEPDh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3zV31gJKgdySzfDY' => 
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
        'as' => 'generated::3zV31gJKgdySzfDY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::puiidZsbCkXD0Ncq' => 
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
        'as' => 'generated::puiidZsbCkXD0Ncq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1qkftt0Xx5HDfgXL' => 
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
        'as' => 'generated::1qkftt0Xx5HDfgXL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I3LoUeCPOYBKhjWP' => 
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
        'as' => 'generated::I3LoUeCPOYBKhjWP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DoNcmMYRq9RgyTW2' => 
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
        'as' => 'generated::DoNcmMYRq9RgyTW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ynSDK27DcyXR8Dbe' => 
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
        'as' => 'generated::ynSDK27DcyXR8Dbe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7zYZVJuczWVIiMph' => 
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
        'as' => 'generated::7zYZVJuczWVIiMph',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LYukU65e4G1E29fy' => 
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
        'as' => 'generated::LYukU65e4G1E29fy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J89gfUz1zotgifhD' => 
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
        'as' => 'generated::J89gfUz1zotgifhD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f2WxoLHtx7MSsNbM' => 
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
        'as' => 'generated::f2WxoLHtx7MSsNbM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LbGZU5gD7fPDtx73' => 
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
        'as' => 'generated::LbGZU5gD7fPDtx73',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8SBWUfjgUisW1dDG' => 
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
        'as' => 'generated::8SBWUfjgUisW1dDG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fp77wZhXOlcmt47S' => 
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
        'as' => 'generated::fp77wZhXOlcmt47S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Srn8U89RzNAjdhbe' => 
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
        'as' => 'generated::Srn8U89RzNAjdhbe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mT7ec6dnSTSNI6dK' => 
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
        'as' => 'generated::mT7ec6dnSTSNI6dK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DGATrr8qcrQCvDZO' => 
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
        'as' => 'generated::DGATrr8qcrQCvDZO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::COEUDNKVwFgbQteW' => 
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
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN,ADMIN-ENROLLMENT',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewTenantCount',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeDormitory@viewTenantCount',
        'namespace' => NULL,
        'prefix' => 'api/dormitories',
        'where' => 
        array (
        ),
        'as' => 'generated::COEUDNKVwFgbQteW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JcyLV3LYfavjSNFH' => 
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
        'as' => 'generated::JcyLV3LYfavjSNFH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gbbPObgLdjfthH4n' => 
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
        'as' => 'generated::gbbPObgLdjfthH4n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OXTDDKg0Hb9daQR1' => 
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
        'as' => 'generated::OXTDDKg0Hb9daQR1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rMET6Me9DRfE4p4V' => 
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
        'as' => 'generated::rMET6Me9DRfE4p4V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ECJRxmreA2Gco6JS' => 
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
        'as' => 'generated::ECJRxmreA2Gco6JS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vi4ugsFSJXLxOgzg' => 
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
        'as' => 'generated::vi4ugsFSJXLxOgzg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MptPQ0bT6O7or2rG' => 
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
        'as' => 'generated::MptPQ0bT6O7or2rG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2WgdhIMt5y3psVKs' => 
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
        'as' => 'generated::2WgdhIMt5y3psVKs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d6fc1yUDOzWv2WNF' => 
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
        'as' => 'generated::d6fc1yUDOzWv2WNF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XbozIVHIuFiQbRFi' => 
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
        'as' => 'generated::XbozIVHIuFiQbRFi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cFkmsKfHvY2hVayO' => 
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
        'as' => 'generated::cFkmsKfHvY2hVayO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q7LgtUg13pdOkUxN' => 
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
        'as' => 'generated::q7LgtUg13pdOkUxN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X3yIg38Aw65vnAsY' => 
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
        'as' => 'generated::X3yIg38Aw65vnAsY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mAV4okJBuLWnY5pL' => 
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
        'as' => 'generated::mAV4okJBuLWnY5pL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y6169EJWHL4dLZfK' => 
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
        'as' => 'generated::Y6169EJWHL4dLZfK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K4OeCbtRfZRA4mJd' => 
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
        'as' => 'generated::K4OeCbtRfZRA4mJd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YyxsNvVEtmBp9Jgt' => 
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
        'as' => 'generated::YyxsNvVEtmBp9Jgt',
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
    'generated::TXUklKDegUWLt8bJ' => 
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
        'as' => 'generated::TXUklKDegUWLt8bJ',
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
    'generated::wOcDJzdk6ZCVusYr' => 
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
        'as' => 'generated::wOcDJzdk6ZCVusYr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DDk35r4JT4VhOO9z' => 
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
        'as' => 'generated::DDk35r4JT4VhOO9z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jr5CFnRqDyQXJ11I' => 
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
        'as' => 'generated::jr5CFnRqDyQXJ11I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::StyXRb7L5LhQMaKZ' => 
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
        'as' => 'generated::StyXRb7L5LhQMaKZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NPQPfyV2gZg5Sq7H' => 
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
        'as' => 'generated::NPQPfyV2gZg5Sq7H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qVrLv2QPb7IKUh1O' => 
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
        'as' => 'generated::qVrLv2QPb7IKUh1O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BK35tyz7oNsrNP5G' => 
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
        'as' => 'generated::BK35tyz7oNsrNP5G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dTTSp3ozRwbhJFUQ' => 
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
        'as' => 'generated::dTTSp3ozRwbhJFUQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H9JvdpCqx7ioLpzb' => 
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
        'as' => 'generated::H9JvdpCqx7ioLpzb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YJ7L1rcALG4DEn2a' => 
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
        'as' => 'generated::YJ7L1rcALG4DEn2a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sT40voXNECZ62QGs' => 
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
        'as' => 'generated::sT40voXNECZ62QGs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PIFCqrDBVmJ3lkjL' => 
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
        'as' => 'generated::PIFCqrDBVmJ3lkjL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4gI4lJJ4kVTI4s75' => 
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
        'as' => 'generated::4gI4lJJ4kVTI4s75',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JEEuhddeWaNAgfTf' => 
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
        'as' => 'generated::JEEuhddeWaNAgfTf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OzfmnjiejNIwuEOf' => 
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
        'as' => 'generated::OzfmnjiejNIwuEOf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fj5m7hVyjJM9jSwV' => 
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
        'as' => 'generated::fj5m7hVyjJM9jSwV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BSwWcTIDEHYbHSWh' => 
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
        'as' => 'generated::BSwWcTIDEHYbHSWh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Oh4HlWKyIuyr49Ur' => 
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
        'as' => 'generated::Oh4HlWKyIuyr49Ur',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DaxHn2FW0XFyqlIX' => 
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
        'as' => 'generated::DaxHn2FW0XFyqlIX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vMCjQrywAKKJdFoT' => 
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
        'as' => 'generated::vMCjQrywAKKJdFoT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ArtfM6qQE0IQQBAp' => 
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
        'as' => 'generated::ArtfM6qQE0IQQBAp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JjD4EHnBBZubRo6S' => 
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
        'as' => 'generated::JjD4EHnBBZubRo6S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2HBw4Qj1xMa6Ndn4' => 
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
        'as' => 'generated::2HBw4Qj1xMa6Ndn4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tnaKVgt0wMDnPPxr' => 
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
        'as' => 'generated::tnaKVgt0wMDnPPxr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jt0KIKNqoy7DYXej' => 
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
        'as' => 'generated::Jt0KIKNqoy7DYXej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zBJU93fIgA7CFpBv' => 
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
        'as' => 'generated::zBJU93fIgA7CFpBv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GaIed32od87VFSo2' => 
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
        'as' => 'generated::GaIed32od87VFSo2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GPoVZSEvKmPaS2vT' => 
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
        'as' => 'generated::GPoVZSEvKmPaS2vT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dxrAGFWQ25KN1aES' => 
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
        'as' => 'generated::dxrAGFWQ25KN1aES',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aT62e3BYZYa2WFjA' => 
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
        'as' => 'generated::aT62e3BYZYa2WFjA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SgJ8uTM2HchX7dOm' => 
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
        'as' => 'generated::SgJ8uTM2HchX7dOm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iNLzlSYMMJP5Uv62' => 
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
        'as' => 'generated::iNLzlSYMMJP5Uv62',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jP3WpA9Gr4q0gG2O' => 
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
        'as' => 'generated::jP3WpA9Gr4q0gG2O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QhP7HFjc4Mrac1zY' => 
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
        'as' => 'generated::QhP7HFjc4Mrac1zY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TvxZY80AnqQqgasE' => 
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
        'as' => 'generated::TvxZY80AnqQqgasE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tD0RCWonLBjVeVE4' => 
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
        'as' => 'generated::tD0RCWonLBjVeVE4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zq3PqTlQbwP55z86' => 
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
          2 => 'user_role:TRAINER',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewAllTrainingsAndFacilitators',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\TrainerEnrollmentController@viewAllTrainingsAndFacilitators',
        'namespace' => NULL,
        'prefix' => 'api/trainer/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::Zq3PqTlQbwP55z86',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ij5ah3KE2oazAcR' => 
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
        'as' => 'generated::2ij5ah3KE2oazAcR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UYcGPSnonFkYpmCo' => 
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
        'as' => 'generated::UYcGPSnonFkYpmCo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PNMCbQmcqwi38l0E' => 
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
        'as' => 'generated::PNMCbQmcqwi38l0E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N3gY1jYGuLo1k5Iz' => 
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
        'as' => 'generated::N3gY1jYGuLo1k5Iz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ACoBfvSTjRSfLG8A' => 
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
        'as' => 'generated::ACoBfvSTjRSfLG8A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LlyYXgBkak5MNmEn' => 
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
        'as' => 'generated::LlyYXgBkak5MNmEn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nWxWWSDrcklTREcO' => 
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
        'as' => 'generated::nWxWWSDrcklTREcO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RTUL5FcXbVCiXWzh' => 
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
        'as' => 'generated::RTUL5FcXbVCiXWzh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OuL2s8zu2vMtObgx' => 
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
        'as' => 'generated::OuL2s8zu2vMtObgx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::saTc4qhKTtUvizWr' => 
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
        'as' => 'generated::saTc4qhKTtUvizWr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mRKC44ptesmaMuid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/recreationals/testTest/{UIId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          3 => 'throttle:60,1',
        ),
        'uses' => 'App\\Services\\Trainee\\Recreational\\RecreationalService@checkPrefix',
        'controller' => 'App\\Services\\Trainee\\Recreational\\RecreationalService@checkPrefix',
        'namespace' => NULL,
        'prefix' => 'api/recreationals',
        'where' => 
        array (
        ),
        'as' => 'generated::mRKC44ptesmaMuid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KuOYPGammcSmtoxB' => 
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
        'as' => 'generated::KuOYPGammcSmtoxB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jnoGZm2OrwUvnyRJ' => 
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
        'as' => 'generated::jnoGZm2OrwUvnyRJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XSwZa2NGrG5kTjby' => 
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
        'as' => 'generated::XSwZa2NGrG5kTjby',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J8GjjaBm9BkPfV0S' => 
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
        'as' => 'generated::J8GjjaBm9BkPfV0S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eGzHgzArvcXWZdZ6' => 
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
        'as' => 'generated::eGzHgzArvcXWZdZ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vtiq6lKfoWrrps05' => 
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
        'as' => 'generated::vtiq6lKfoWrrps05',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tVBaUC9HFUKNmZJ4' => 
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
        'as' => 'generated::tVBaUC9HFUKNmZJ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oSqx11gGkukfbhfL' => 
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
        'as' => 'generated::oSqx11gGkukfbhfL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ibn3daSlyGEm3CXm' => 
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
        'as' => 'generated::Ibn3daSlyGEm3CXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DRc6UpTGqFsCailH' => 
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
        'as' => 'generated::DRc6UpTGqFsCailH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BydO0ZciMvToKZpD' => 
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
        'as' => 'generated::BydO0ZciMvToKZpD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sugeIXgGXCm0D8G0' => 
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
        'as' => 'generated::sugeIXgGXCm0D8G0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GHZpEO2ZslJylx7j' => 
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
        'as' => 'generated::GHZpEO2ZslJylx7j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VqaNBXOovMcdkD94' => 
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
        'as' => 'generated::VqaNBXOovMcdkD94',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CjVjD6EXTjXM3BTq' => 
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
        'as' => 'generated::CjVjD6EXTjXM3BTq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bdpTKUHPNIZeBfpy' => 
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
        'as' => 'generated::bdpTKUHPNIZeBfpy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E0h0g74DEaAefZhW' => 
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
        'as' => 'generated::E0h0g74DEaAefZhW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZkyEXQB5MFQ5UnTm' => 
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
        'as' => 'generated::ZkyEXQB5MFQ5UnTm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MoK5vJBEqeuVKWeu' => 
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
        'as' => 'generated::MoK5vJBEqeuVKWeu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9dEWHjomvnOpYhDF' => 
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
        'as' => 'generated::9dEWHjomvnOpYhDF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lLmtx06pbwEGl14C' => 
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
        'as' => 'generated::lLmtx06pbwEGl14C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bR3kEgjHCNnxLEFo' => 
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
        'as' => 'generated::bR3kEgjHCNnxLEFo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E0C2QiNFUtXoIGyW' => 
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
        'as' => 'generated::E0C2QiNFUtXoIGyW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oCyeQHSst71L5SLq' => 
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
        'as' => 'generated::oCyeQHSst71L5SLq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NlKeW5LicC8cGUu4' => 
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
        'as' => 'generated::NlKeW5LicC8cGUu4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n8OeZ48HCChitx3C' => 
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
        'as' => 'generated::n8OeZ48HCChitx3C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fQIqWa2InGwn1QsN' => 
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
        'as' => 'generated::fQIqWa2InGwn1QsN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5NYi354f98FmymQh' => 
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
        'as' => 'generated::5NYi354f98FmymQh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8rzdeakJ538pXRPX' => 
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
        'as' => 'generated::8rzdeakJ538pXRPX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uGpj5qJLZwBBy5fn' => 
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
        'as' => 'generated::uGpj5qJLZwBBy5fn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VeoKmi1KuLIKN3K5' => 
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
        'as' => 'generated::VeoKmi1KuLIKN3K5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ReZOpGZDxgIy4ViK' => 
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
        'as' => 'generated::ReZOpGZDxgIy4ViK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NcWc3HW6fIpJFW7K' => 
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
        'as' => 'generated::NcWc3HW6fIpJFW7K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::atUmEgMavSYSCktg' => 
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
        'as' => 'generated::atUmEgMavSYSCktg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8o4j8GmynknTBUuI' => 
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
        'as' => 'generated::8o4j8GmynknTBUuI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k0MjS1NVMM2ztAKz' => 
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
        'as' => 'generated::k0MjS1NVMM2ztAKz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pkajizVPmYnw2ERL' => 
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
        'as' => 'generated::pkajizVPmYnw2ERL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wPFt4EkA3vdGzpsc' => 
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
        'as' => 'generated::wPFt4EkA3vdGzpsc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SHlValhjR3l74tM3' => 
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
        'as' => 'generated::SHlValhjR3l74tM3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zDXvt1PzYpNyv1mk' => 
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
        'as' => 'generated::zDXvt1PzYpNyv1mk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::171I2bjaY8Oiw5Ee' => 
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
        'as' => 'generated::171I2bjaY8Oiw5Ee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YGefbXuyBwGackiG' => 
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
        'as' => 'generated::YGefbXuyBwGackiG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oPimC0xUD12fnKzi' => 
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
        'as' => 'generated::oPimC0xUD12fnKzi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U6uPcTe7WVtkpJIA' => 
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
        'as' => 'generated::U6uPcTe7WVtkpJIA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sncvviiwjSip7eU4' => 
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
        'as' => 'generated::sncvviiwjSip7eU4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xai12hycNx4SNvWz' => 
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
        'as' => 'generated::Xai12hycNx4SNvWz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U0xTfwvhXo7p5otr' => 
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
        'as' => 'generated::U0xTfwvhXo7p5otr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XKcNBA61zM37auYG' => 
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
        'as' => 'generated::XKcNBA61zM37auYG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uwNexyVKkRSuCT3Q' => 
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
        'as' => 'generated::uwNexyVKkRSuCT3Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ImcgjnPjoyP9juKQ' => 
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
        'as' => 'generated::ImcgjnPjoyP9juKQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GoZgHK2ucwsHJOrM' => 
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
        'as' => 'generated::GoZgHK2ucwsHJOrM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gvJOIAhUWnLPJHWd' => 
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
        'as' => 'generated::gvJOIAhUWnLPJHWd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NYdmOcaxsnNuxltP' => 
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
        'as' => 'generated::NYdmOcaxsnNuxltP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IDkPKx6QgsCxtD0V' => 
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
        'as' => 'generated::IDkPKx6QgsCxtD0V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qzmj4RIPki4k1qxq' => 
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
        'as' => 'generated::Qzmj4RIPki4k1qxq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k7dbVuxJLJi8KgPD' => 
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
        'as' => 'generated::k7dbVuxJLJi8KgPD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W2n2OncCAWr39hzU' => 
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
        'as' => 'generated::W2n2OncCAWr39hzU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K8KOfw8pF8BNskv5' => 
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
        'as' => 'generated::K8KOfw8pF8BNskv5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2YrP46lB1y9bWCF2' => 
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
        'as' => 'generated::2YrP46lB1y9bWCF2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g80ZppBczBa4mDJO' => 
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
        'as' => 'generated::g80ZppBczBa4mDJO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rUUc12IpdRplIp7K' => 
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
        'as' => 'generated::rUUc12IpdRplIp7K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zzyAXoCzT1Im9uha' => 
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
        'as' => 'generated::zzyAXoCzT1Im9uha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VqTdu8CryaaPdTjR' => 
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
        'as' => 'generated::VqTdu8CryaaPdTjR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dvgMpXdXOOnozZzg' => 
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
        'as' => 'generated::dvgMpXdXOOnozZzg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t0VOtHHyM0qb9syX' => 
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
        'as' => 'generated::t0VOtHHyM0qb9syX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YNWsD8KbGJ4xo326' => 
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
        'as' => 'generated::YNWsD8KbGJ4xo326',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::frqLJMBOfnvll66x' => 
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
        'as' => 'generated::frqLJMBOfnvll66x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZGAHKqaW5EbVLEJ7' => 
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
        'as' => 'generated::ZGAHKqaW5EbVLEJ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kXW4wuS3lipkcboq' => 
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
        'as' => 'generated::kXW4wuS3lipkcboq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HUqTjhrD4mfXpTXu' => 
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
        'as' => 'generated::HUqTjhrD4mfXpTXu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6SMgZSOEsm3yRFug' => 
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
        'as' => 'generated::6SMgZSOEsm3yRFug',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lgv8PjUyfcCexjqa' => 
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
        'as' => 'generated::Lgv8PjUyfcCexjqa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0jWsBq6s6uL8nU57' => 
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
        'as' => 'generated::0jWsBq6s6uL8nU57',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6zWK46qrs5TWEQf6' => 
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
        'as' => 'generated::6zWK46qrs5TWEQf6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0OYQa5UmqZWjL0Ky' => 
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
        'as' => 'generated::0OYQa5UmqZWjL0Ky',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7W2MWpMz4gbMmhSp' => 
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
        'as' => 'generated::7W2MWpMz4gbMmhSp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6xA5aszMm0sKUzZ8' => 
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
        'as' => 'generated::6xA5aszMm0sKUzZ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0HwRfQ4cqQlETYUj' => 
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
        'as' => 'generated::0HwRfQ4cqQlETYUj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kOz3t3X2gLnm6KDP' => 
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
        'as' => 'generated::kOz3t3X2gLnm6KDP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xz7i7ozH3kWFrL8Y' => 
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
        'as' => 'generated::Xz7i7ozH3kWFrL8Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pEb5D9EQNNxi9v0O' => 
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
        'as' => 'generated::pEb5D9EQNNxi9v0O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wZ5XPWP0fLJNdrLI' => 
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
        'as' => 'generated::wZ5XPWP0fLJNdrLI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ij8Y33hSJDwhDacK' => 
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
        'as' => 'generated::ij8Y33hSJDwhDacK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IVTKkUHOJv6FUjNH' => 
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
        'as' => 'generated::IVTKkUHOJv6FUjNH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XuXuuFaXVCuUE8hp' => 
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
        'as' => 'generated::XuXuuFaXVCuUE8hp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xKvC4sw85dH9VL5z' => 
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
        'as' => 'generated::xKvC4sw85dH9VL5z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6WeVbYqXLjUSAx5c' => 
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
        'as' => 'generated::6WeVbYqXLjUSAx5c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ZZ6Ev5x00ezc8Uz' => 
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
        'as' => 'generated::8ZZ6Ev5x00ezc8Uz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nlu01MKp0hv9SsKB' => 
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
        'as' => 'generated::Nlu01MKp0hv9SsKB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ar2avGYOAUmLvzVE' => 
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
        'as' => 'generated::ar2avGYOAUmLvzVE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PQi1vDrrHNWeoXph' => 
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
        'as' => 'generated::PQi1vDrrHNWeoXph',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8SrLUC5HqxL9qAsX' => 
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
        'as' => 'generated::8SrLUC5HqxL9qAsX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YaB5wmB17lvoLh66' => 
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
        'as' => 'generated::YaB5wmB17lvoLh66',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jzp33dohcN2P60Zg' => 
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
        'as' => 'generated::Jzp33dohcN2P60Zg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IrQmKJJxg9s9vvab' => 
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
        'as' => 'generated::IrQmKJJxg9s9vvab',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iV5jBldY4JELTgI7' => 
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
        'as' => 'generated::iV5jBldY4JELTgI7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::odsfbZyAn3koMOSv' => 
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
        'as' => 'generated::odsfbZyAn3koMOSv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::banLDuEKJa4inUnw' => 
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
        'as' => 'generated::banLDuEKJa4inUnw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3EoL0DsbdYnO5qqk' => 
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
        'as' => 'generated::3EoL0DsbdYnO5qqk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MKEetCdLPQFnFvjy' => 
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
        'as' => 'generated::MKEetCdLPQFnFvjy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rj5ipxZaDaWFZ2OQ' => 
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
        'as' => 'generated::Rj5ipxZaDaWFZ2OQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PIeL1S7bMyvSv459' => 
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
        'as' => 'generated::PIeL1S7bMyvSv459',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XDc05RYNY4Oa8d5Z' => 
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
        'as' => 'generated::XDc05RYNY4Oa8d5Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YlYpwnZX2S07azlw' => 
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
        'as' => 'generated::YlYpwnZX2S07azlw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wuwl8IBY0rIJ4RGX' => 
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
        'as' => 'generated::wuwl8IBY0rIJ4RGX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bTjkdwm8AfzK6aqV' => 
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
        'as' => 'generated::bTjkdwm8AfzK6aqV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7UFg6wAMaVsTAaPU' => 
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
        'as' => 'generated::7UFg6wAMaVsTAaPU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2OyHPYzHBJvoBQsk' => 
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
        'as' => 'generated::2OyHPYzHBJvoBQsk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NvFz6diAwfDb0JC6' => 
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
        'as' => 'generated::NvFz6diAwfDb0JC6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f83oIMtfqHidZPnr' => 
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
        'as' => 'generated::f83oIMtfqHidZPnr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dpsZl0t9u5HsvBdF' => 
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
        'as' => 'generated::dpsZl0t9u5HsvBdF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::24cuENPoOfeMP6lZ' => 
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
        'as' => 'generated::24cuENPoOfeMP6lZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::waeBrWKBbTcFC1Pw' => 
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
        'as' => 'generated::waeBrWKBbTcFC1Pw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8kRdyGb7rGzAwwmd' => 
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
        'as' => 'generated::8kRdyGb7rGzAwwmd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lw2AVf3VzOpErH9A' => 
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
        'as' => 'generated::lw2AVf3VzOpErH9A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pt5Et0cMotV0uKpE' => 
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
        'as' => 'generated::pt5Et0cMotV0uKpE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Iul6bWLiDnO8kROv' => 
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
        'as' => 'generated::Iul6bWLiDnO8kROv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l7Chn8XcDrkcHYVI' => 
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
        'as' => 'generated::l7Chn8XcDrkcHYVI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SYllITQlWsLs6jxl' => 
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
        'as' => 'generated::SYllITQlWsLs6jxl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p8DRcQASooFO5KSC' => 
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
        'as' => 'generated::p8DRcQASooFO5KSC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MHn6mmeQWV9A5EIc' => 
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
        'as' => 'generated::MHn6mmeQWV9A5EIc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EqNpny2qgIHGnjEp' => 
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
        'as' => 'generated::EqNpny2qgIHGnjEp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RWuBgJHb4NekyZK9' => 
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
        'as' => 'generated::RWuBgJHb4NekyZK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YWryATS7ubTxrvZB' => 
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
        'as' => 'generated::YWryATS7ubTxrvZB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y7gTKBvAQWIfKqoc' => 
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
        'as' => 'generated::Y7gTKBvAQWIfKqoc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SFj1IaH3SJARE1Aj' => 
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
        'as' => 'generated::SFj1IaH3SJARE1Aj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WeuV7dSwvFHl03I6' => 
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
        'as' => 'generated::WeuV7dSwvFHl03I6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::utDgpUlOz6ayy32K' => 
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
        'as' => 'generated::utDgpUlOz6ayy32K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::72IwPuQa7XdruNcg' => 
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
        'as' => 'generated::72IwPuQa7XdruNcg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BefzhYB2A6BQuQWS' => 
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
        'as' => 'generated::BefzhYB2A6BQuQWS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pQuercwKwuiOFRVK' => 
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
        'as' => 'generated::pQuercwKwuiOFRVK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NXVv0ZsIZBS8GTyy' => 
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
        'as' => 'generated::NXVv0ZsIZBS8GTyy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gL2PuBUSMvQNUtmg' => 
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
        'as' => 'generated::gL2PuBUSMvQNUtmg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i6WNqxp63HdOxPzr' => 
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
        'as' => 'generated::i6WNqxp63HdOxPzr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AnJVNnA1TpYBqETU' => 
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
        'as' => 'generated::AnJVNnA1TpYBqETU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rjkzIKoS42BqAVuB' => 
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
        'as' => 'generated::rjkzIKoS42BqAVuB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DG7cplNrF4AEfG90' => 
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
        'as' => 'generated::DG7cplNrF4AEfG90',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XhqqVW0acXsFY3W3' => 
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
        'as' => 'generated::XhqqVW0acXsFY3W3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::43c7ZL8obpBSaZR2' => 
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
        'as' => 'generated::43c7ZL8obpBSaZR2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kq2GCAZSY58Mxjzl' => 
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
        'as' => 'generated::Kq2GCAZSY58Mxjzl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bDAE9MpfXfAl70Ql' => 
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
        'as' => 'generated::bDAE9MpfXfAl70Ql',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6pNW7LzpPukrv1G4' => 
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
        'as' => 'generated::6pNW7LzpPukrv1G4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PZ5jE5x5u7YETXO4' => 
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
        'as' => 'generated::PZ5jE5x5u7YETXO4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ZY8cgLhTpgaSNgT' => 
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
        'as' => 'generated::4ZY8cgLhTpgaSNgT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ltu2YXS4DTTVH8cJ' => 
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
        'as' => 'generated::ltu2YXS4DTTVH8cJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Ri29muC2SmsPEv7' => 
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
        'as' => 'generated::8Ri29muC2SmsPEv7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x2Y2IwNWLX6R2f97' => 
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
        'as' => 'generated::x2Y2IwNWLX6R2f97',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qw4iSt7nEROjDheA' => 
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
        'as' => 'generated::qw4iSt7nEROjDheA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2TdgdSKMgfihz4Wk' => 
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
        'as' => 'generated::2TdgdSKMgfihz4Wk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ukjQ8K42RFUuwUac' => 
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
        'as' => 'generated::ukjQ8K42RFUuwUac',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0UE4yARr0QYw8j8r' => 
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
        'as' => 'generated::0UE4yARr0QYw8j8r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KFo3BqqXmriNovi8' => 
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
        'as' => 'generated::KFo3BqqXmriNovi8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cjBmqFaMDVcPwGHI' => 
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
        'as' => 'generated::cjBmqFaMDVcPwGHI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vdyDBxwJYFv6bw7h' => 
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
        'as' => 'generated::vdyDBxwJYFv6bw7h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::74HwaQk2fR36ch4N' => 
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
        'as' => 'generated::74HwaQk2fR36ch4N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NeffafLIjqdOkT5t' => 
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
        'as' => 'generated::NeffafLIjqdOkT5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IOLuwZtztXS17bwg' => 
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
        'as' => 'generated::IOLuwZtztXS17bwg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jPvoIklsk2VXc4j8' => 
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
        'as' => 'generated::jPvoIklsk2VXc4j8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xqdp5cCdZ1nCNqMH' => 
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
        'as' => 'generated::xqdp5cCdZ1nCNqMH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wE462bBjw7ia3ZZ0' => 
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
        'as' => 'generated::wE462bBjw7ia3ZZ0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IOnxRtW8vAEtMkc4' => 
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
        'as' => 'generated::IOnxRtW8vAEtMkc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P3W3roug4vkYSiBI' => 
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
        'as' => 'generated::P3W3roug4vkYSiBI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rpsSwVIqNzjOWJcA' => 
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
        'as' => 'generated::rpsSwVIqNzjOWJcA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VCnsRbZE5ErAwk0U' => 
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
        'as' => 'generated::VCnsRbZE5ErAwk0U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::piIu423CeJQ0sCdw' => 
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
        'as' => 'generated::piIu423CeJQ0sCdw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FGWRH0TBLYetHYsR' => 
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
        'as' => 'generated::FGWRH0TBLYetHYsR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YVen8JR1CBnxjCMO' => 
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
        'as' => 'generated::YVen8JR1CBnxjCMO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rwE15fmcS3OR1Nkx' => 
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
        'as' => 'generated::rwE15fmcS3OR1Nkx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZhxzZGBg9ZBXyPlh' => 
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
        'as' => 'generated::ZhxzZGBg9ZBXyPlh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AfwNguMCcCTXvDC4' => 
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
        'as' => 'generated::AfwNguMCcCTXvDC4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UHzKvdrLFpZgQhTI' => 
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
        'as' => 'generated::UHzKvdrLFpZgQhTI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4sdpABWqWj4oCqua' => 
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
        'as' => 'generated::4sdpABWqWj4oCqua',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwM1FiWWTCFPxasd' => 
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
        'as' => 'generated::mwM1FiWWTCFPxasd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qaJu8G6mwODuusm5' => 
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
        'as' => 'generated::qaJu8G6mwODuusm5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
