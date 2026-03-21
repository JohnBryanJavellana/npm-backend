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
            '_route' => 'generated::rmYEWPBTNx0UWKhM',
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
            '_route' => 'generated::PBIrVuMnYb2ob2jG',
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
            '_route' => 'generated::PAP4SinzhRma2OdV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vzqFChYCZ2ZX8Vl8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bR9XDYcg6gqjfm6j',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ePsbSmcjTWWClfOW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nZGzzqJkFcOpP1wg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pr2uIQyMMu3QF4TT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fcJzAjEn3jmuWlRM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tqdC5i0BfBzhQptr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qcwbrBNlOrkeaiPh',
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
            '_route' => 'generated::DwXlkTLp4OA1bu23',
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
            '_route' => 'generated::UcXsRQCJ6vvf7flQ',
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
            '_route' => 'generated::JtmZkAcC0Hvsm6D2',
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
            '_route' => 'generated::ZtBlX0LuqNSk3Xfw',
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
            '_route' => 'generated::4sXyexLYrpkpVPBE',
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
            '_route' => 'generated::eDhkauAXwXY3dsP9',
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
            '_route' => 'generated::rwfwaquiXYXCligM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::j25OZ7dRrjvmqtsR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uxrrfmzWAnVIxKvA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LYH8enxrb6xyOXpp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WfxbWpcrvNQs1DpP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4uIwXALJa13zgTor',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vCVuXhem6sXNFba4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lKlgZRATbxfE7szf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5hHVCnBAEpKARDqB',
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
            '_route' => 'generated::SwFgINrpOZLW4HlI',
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
            '_route' => 'generated::KcTXTUxV9iYG4FsG',
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
            '_route' => 'generated::dj621NfRdhNZ55Da',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dUkrnZ359aEO12uk',
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
            '_route' => 'generated::jLSai5OeifhagSv4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9BOnjtR5JtI31LBH',
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
            '_route' => 'generated::SsdheISvK1hjCv7F',
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
            '_route' => 'generated::Mp0E008euClQQuuM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nK0pk1hm3zzxMSX9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::S8HzcjppWiK1Wbcd',
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
            '_route' => 'generated::NIgGiNZL36VWR6RN',
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
            '_route' => 'generated::tldfVZkxCgyXGLr3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DqZCxMRfNTxpG05L',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QfQUa6LHlz5en1XW',
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
            '_route' => 'generated::GGwnMBgAaji6tDRN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::a6OB6ZWFysg3n1hc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::D928ljzIzDF9uXK4',
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
            '_route' => 'generated::wtisHfuGhGMdK5xk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::trUqkw0zgzTf66vW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FzcsgQGaRgx2pg3I',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uiDbo0NZMswDCNso',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RaOPXfDcCYT6WWkf',
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
            '_route' => 'generated::gVDOXqfXebpnESxW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9CHfi9oFHJ7EnXrn',
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
            '_route' => 'generated::c3LWhC88QKlE4Jfn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YKPx3YICZGWKfJUx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RYjDNY7BxbIOAL9i',
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
            '_route' => 'generated::hckvANH5sQASiTvB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0YxwzS2TD2Hd9ukn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::baMqJkZwPQSShcA2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Q5P8LmFfyJIPQ2XB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::T12zajHW86JbJOc7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XBsUdZKoSLM6Y6Fr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zv7xS4wKVZyG0own',
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
            '_route' => 'generated::HMJzA5ejNLYJKtTE',
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
            '_route' => 'generated::kGt5NMxAj2gcDWuc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::F40q0i1G4YNMtx8I',
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
            '_route' => 'generated::hK4Imgt1RXSKNqsY',
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
            '_route' => 'generated::Krdklx8sNQOmthRV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cwEqnfs3YTwibMEP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cYudCNaxPKImXUlM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4jWrY2XBuF7a0VoG',
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
            '_route' => 'generated::vpIIWCYaZVb4j0KB',
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
            '_route' => 'generated::cs6Tcp2yqiskaEp7',
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
            '_route' => 'generated::DKCOdCOzy0km4MQo',
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
            '_route' => 'generated::zCgM15eFkZAl2Fow',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TPI6jUCxWF749613',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::U2Yiz0MeZm1yME8L',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bMxMoVsw9fHNoqfL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RQtg1Diu9AMXlwvY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PwW61MnFIhOPI4t8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pngyMbd5vKY5yXRA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rYs6wpkQagON2XkZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IsKQIjvNH51XixgO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::fne2hW3TPsivYd3e',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EQKbfq8FbNf29ZR8',
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
            '_route' => 'generated::DNiPPINEzrGAN8T2',
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
            '_route' => 'generated::qLVMvYKxf7CPn4zf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rOsyvuzvBj6V82cg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OAHlVKiTPB61ecU7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QygSQ6XLx0siRDi8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wdXaqmS9TUDlVKLY',
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
      '/api/lms/handouts/view_handouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BtgE1GcGycFATg12',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s3TY6ovdY1jDPhiM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dH13ZdlH4lcUBRtu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::spAZ47Ptz8lJAIrW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DnXEqs8FOUjhCX8h',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YLKPibEE2v0Gwffe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::S1D87VSzx2repjR0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wGjezher6zCjC7uJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dzUtaearAUUL9ICW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jo7Ds97aR6tWYknT',
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
            '_route' => 'generated::kIIhBHExVyYJEuqD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P735k9Mn3ucVkuWr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XRyOdpLHtBtxo0vK',
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
      '/api/lms/courses/create_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BAPVSgnRKgmjZDAb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/lms/courses/update_courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fjR92DFdbWY8YiKf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4nzBpd2H3wz1ECHr',
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
      '/api/update_notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EIHautYKNDL0eWrL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::i3Aa6AZsWdexxQAo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XtYIbfNaVzTT2gyn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IB8iQ1wmLrvp93Xz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::x1XRBzMAbAyE8Wdi',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TVt1c5SPOLVaCjCg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pEYBL0BhTsqFrQbJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::F8gSKKa1ePwlbE6G',
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
            '_route' => 'generated::Ptz17l0brbrOMlcZ',
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
            '_route' => 'generated::oOiHUJMa7rlqz1Bx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rUiuTtxFSZaIJU3D',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BDamrkwSWtxFHYNo',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aTTrfWHFF3Ikon7V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OSMvkO496iOYYOBS',
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
            '_route' => 'generated::O4rjI34T5RYFAWWC',
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
            '_route' => 'generated::hizzsg51NqhcPiYc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::K2XwV8KSW9ojpNm8',
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
            '_route' => 'generated::K03GnNiVumDjgFow',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AZXkUEQgx6fgzoGq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ULVSah8mJKpNptE1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::U6gXanRVYxJDmCKx',
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
            '_route' => 'generated::qZAofeQdExSR28UW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Roh0l9b5EXvpINPO',
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
            '_route' => 'generated::D2dECxSpPvaBllr8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::G376UfgSfg4Ag5dz',
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
            '_route' => 'generated::CoxEgTAuaasRHfkE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lRxkDzfupiK33ot6',
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
            '_route' => 'generated::WJxC7jajmdR8o6yJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lE2J0VH5xbO2tnc5',
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
            '_route' => 'generated::5MEmr4CD6JvuJXtX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9G2wT0oYnFdGjDhp',
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
            '_route' => 'generated::oOsbwE9DLdrM1ZNK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YnAgWePY4uNO34qu',
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
            '_route' => 'generated::F2clIbYsTdTVmKj3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SbKfRQ3iVxZIH46D',
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
            '_route' => 'generated::tW3xf5OaTs7WwQn6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gqtI1niF5kvGeIdn',
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
            '_route' => 'generated::ex2eXYrdFtzyzJ8Z',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pbVBVpM2jMTFKRkJ',
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
            '_route' => 'generated::R1mVSNEGlrbQCuIL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::k3jVLxtqBAhFflZ2',
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
            '_route' => 'generated::9jDQpDORCFBv4MuW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pkLrIptfKET68YPv',
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
            '_route' => 'generated::Q6026HEj5ARgj8jY',
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
            '_route' => 'generated::DCKHF3FRycHIJ2t7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ZIABsbgQEjyrL0KV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::aW2ZaH898L5qtkhU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9jazsDAA3BpvruU7',
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
            '_route' => 'generated::vR2LtylamIWULmpX',
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
            '_route' => 'generated::0lh3arvduc8ZOwRL',
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
            '_route' => 'generated::tw1pKbP8L1DKpzH8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8IQpShBj9L5s8Q8Z',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AOSCvmEApPFEABRK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::w4bNAuMz7yzNF3Z4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JWxALmOv8e2RHi1K',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SunuHXMMlKa3tqPi',
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
            '_route' => 'generated::qMZO4kio6dbwMIBD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ovd0zYdsq79Rmbtk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::x5oSfzPkmNLagftW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2FlkaYUVqd1krBXa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cfvEn50HK9IWqZ1T',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YjjvCBZLVHQWSFut',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::jdGla9vvCXoBFjMe',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7BMMiTOvN1tS5zaK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yrOkykgALhmAbNWy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CLfkqm2RztFiSwGZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2vD4UvZuGN8TcU4N',
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
            '_route' => 'generated::gYZb03cozOdbs8AF',
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
            '_route' => 'generated::0oA5XDnINQ21aYM9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_terms_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fc3Mavy4rBDfOCe6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/create_or_update_term_and_condition' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ehs28pcSe55KftZE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BVjLaiXl7wxmobGw',
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
            '_route' => 'generated::WUnIzww77olr8TDr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JzILrloyKPCTjKn2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::acwwynbzET9vKOYk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::L3nKSjdbeq9ajv2Z',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zyj8DArUmH5x3VaG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/requests/get_available_supplies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FYgVAGpa3t3E9TP4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/requests/update_dormitory_room_request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::260b9nCCMlnFp47F',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DEOzbjWY4J0Pyxbc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vUVLdsq5WVsqpbei',
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
            '_route' => 'generated::HibtBmpNwta7QcPI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qJkvdLNkkkZqNWf3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3Y468JSFhqm7AtJ3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/provide_stocks_to_boarder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::njejeUr3llKcRXlu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/get_provided_stocks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lArzDMuH1nNwjbXs',
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
      '/api/admin/dormitory/get_stock_reserved_tenant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yXo5r65cEMjNkgk1',
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
      '/api/admin/dormitory/update_stock_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SNxeYcQcskgjxw6F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/dormitory/audit_placements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8quRnn2JHtsCIi75',
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
      '/api/admin/dormitory/create_or_update_dormitory_inventory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sHrO8oZeZG1iBaoJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7YBRMUdT8lnBKmxC',
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
            '_route' => 'generated::wB9RN840eTo84vho',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rvtTtZIF1oiSNFBy',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xZdR1COgGiATKvgC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Eaq8LS4CliHF6HFU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::URSkxbvUT20q7rTj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VMDubQI2arTeuVd3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::TbohDf6F7Amtsj23',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::E8UcWgCUcOZb9zPM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AYKu8SnIfcapstEP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GSvT6iqUbkELblrK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wJEYXn7j2M7uIYmp',
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
            '_route' => 'generated::NM6A8SPI8PP6n7zX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BXebjKGUfl7aZ3sO',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nw5YwcdEozLCyaSP',
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
            '_route' => 'generated::Begtxl83YjbQh8EA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yMl2Ex1Ur2URV80x',
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
            '_route' => 'generated::TlbiA7973Bkkn2CP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nm4bsCkW8ebltalP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BAAWVuklOqP74fX2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LCVV2ioaCysaCDki',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RYQ8uoDUJbUE5Dq5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7toYU3nWkCDA1eYs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HWj1ovpyhybuCMcA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UPWk2mOZuHIf9lyz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Nsd0RzKAmnXy5vk0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DYGVkwkKmfPRf1eK',
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
            '_route' => 'generated::PgqKL3OEh5xlwBdL',
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
            '_route' => 'generated::apcl1112oZIlOZ2E',
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
            '_route' => 'generated::D7quVDou0WRPHYN1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dhpxRcMTVQql4N65',
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
            '_route' => 'generated::YXDpz619SayrxDdW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::NihNybXxVM8Y73t9',
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
            '_route' => 'generated::R4iUBbHa3wd3yimZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hlQjN3rsUUOIjPPI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cLxDrD7Fkdj1yomD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1Qm6AG6RzdNuPGoj',
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
            '_route' => 'generated::S8fxJTjieLHc6nos',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3yZlm4AB7GxlqA9W',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6dnJyNEmWXZkpbM2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::868r8sNNgtsa91vB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uvnW7M61yHiY1CAg',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uNPejLYBNvEQpE0n',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6daEzoaQCWAmucXP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1jwRKy48i1RJSKAr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6WCuMziCnxGw6jNX',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ruzPeAqMNI6TEc3j',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DkogFLF3LqE6vWwE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ny6sdLdNhFnAQFBJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kV6Jr93TEV1TGDbu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3lYChryP6PwqPOnB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Aqt00s2dN6foVAXc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::55rgIbK8sGHx6dc5',
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
            '_route' => 'generated::qDm2Z4xx0O3FFuBp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IvDcH8roeJgQfotr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bI2cO2iWv26qZ0Pk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FQLDa71YaT64Otan',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::juksCdAtzZfGlxrZ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Aa60jriSwqGG5NXR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JrlZ8eXTMxeD7AbY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MUwlFFV1TJ1y3Pyg',
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
            '_route' => 'generated::1cMDEzcN9rJOKjIn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bcXQnnssdcqNXYSF',
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
      0 => '{^(?|/api/(?|my\\-account/get_trainee_general_info/([^/]++)(*:60)|enrollment/(?|get_(?|requirements/([^/]++)(*:109)|applications/([^/]++)(*:138))|remove_training_request/([^/]++)(*:179))|dormitories/(?|applied_dormitories/view/(?|([^/]++)(?|(*:242)|/inclusions(*:261))|getAllHistories/([^/]++)(*:294))|remove_applied_dormitories/([^/]++)(*:338)|inclusion/requests/([^/]++)(*:373)|services/(?|([^/]++)(*:401)|([0-9]+)/create(*:424)|([0-9]+)/cancel(*:447))|transfer_request/cancel/([^/]++)(*:488)|extension_request/cancel/([^/]++)(*:529)|cancel_request/([^/]++)(*:560))|l(?|ibraries/book_info/([^/]++)(*:600)|ms/(?|sections/view_sections/([^/]++)(*:645)|questions/view_questions/([^/]++)(*:686)|courses/view_courses/([^/]++)(*:723)))|client_satisfaction/surveys/delete/([^/]++)(*:776)|invoices/view/([^/]++)(?|(*:809)|(*:817))|traine(?|r/enrollment/courses/([^/]++)(*:864)|e\\-info/([^/]++)(*:888))|admin/(?|enrollment/(?|remove_(?|terms_and_condition/([^/]++)(*:958)|s(?|ch(?|edule/([^/]++)(*:989)|ool/([^/]++)(*:1009))|ponsor/([^/]++)(*:1034))|module(?|/([^/]++)(*:1062)|_type/([^/]++)(*:1085))|c(?|ertificate/([^/]++)(*:1118)|ourse(?|/([^/]++)(*:1144)|_fee/([^/]++)(*:1166)))|voucher/([^/]++)(*:1193)|license/([^/]++)(*:1218)|rank/([^/]++)(*:1240)|facilitator/([^/]++)(*:1269))|get_applications/remove_training_request/([^/]++)(*:1328)|training\\-requirements/remove_trequirement/([^/]++)(*:1388))|book(?|s/(?|remove_(?|terms_and_condition/([^/]++)(*:1448)|book/([^/]++)(*:1470))|get_book_(?|info/(?|([^/]++)(*:1508)|get_copies/(?|([^/]++)(*:1539)|update_book_copy(*:1564))|remove_copy/([^/]++)(*:1594))|total_reservations/([^/]++)(*:1631)|reservation/remove_fine/([^/]++)(*:1672)))|_entry/remove_entry/([^/]++)(*:1711))|dormitory/(?|remove_(?|terms_and_condition/([^/]++)(*:1772)|room/([^/]++)(*:1794)|dorm_inventory/([^/]++)(*:1826)|service/([^/]++)(*:1851))|get_(?|dormitory_(?|rooms/([^/]++)(*:1895)|info/([^/]++)(*:1917))|inventories/remove_dorm_inventory_stock/([^/]++)(*:1975))|cancel_(?|dorm_request/([^/]++)(*:2016)|charge/([^/]++)(*:2040)))|masterlist/(?|user/(?|get_user_(?|basic_info/([^/]++)(*:2104)|activities/([^/]++)(*:2132)|qr_reader_assignments/([^/]++)(*:2171))|remove_(?|qr_reader_assignment/([^/]++)(*:2220)|user/([^/]++)(*:2242)))|employer/remove_employer/([^/]++)(*:2286)|position/remove_position/([^/]++)(*:2328)|qr\\-reader/remove_qr_reader/([^/]++)(*:2373))|cashier/remove_(?|terms_and_condition/([^/]++)(*:2429)|charge(?|/([^/]++)(*:2456)|_category/([^/]++)(*:2483))|or_number/([^/]++)(*:2511))|recreational\\-activity/r(?|emove_terms_and_condition/([^/]++)(*:2582)|a_remove_(?|equipment(?|/([^/]++)(*:2624)|_stock/([^/]++)(*:2648))|facility/([^/]++)(*:2675))))))/?$}sDu',
    ),
    3 => 
    array (
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QU6o2OT2bYySd29B',
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
            '_route' => 'generated::5XaBQduqA77n3O9g',
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
            '_route' => 'generated::qMnzc2ehuhDbr17n',
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
            '_route' => 'generated::CafkYS7CKnjSfteW',
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
            '_route' => 'generated::fQXVAYp2uECv3GRn',
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
            '_route' => 'generated::774b0H6GGA7zhamq',
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
            '_route' => 'generated::oMHrQiB7G6bQTI7F',
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
            '_route' => 'generated::bmGU7b7C0nYUbsbW',
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
            '_route' => 'generated::9ohXWXLJcrb7bjDU',
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
            '_route' => 'generated::Sjuk8Zq7nHVQXiUk',
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
            '_route' => 'generated::O4B6zM7zJUaTTDIn',
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
            '_route' => 'generated::04msgEoMuDiD8ujW',
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
            '_route' => 'generated::4n3I1K7uG16DGtNP',
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
            '_route' => 'generated::v8u79eE5t2ioWyPt',
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
            '_route' => 'generated::2g8LYx55AlNsrK4r',
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
            '_route' => 'generated::Xpd9HwereSuCAJMN',
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
            '_route' => 'generated::m3GKZd10Z2JY3QPn',
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
            '_route' => 'generated::I1YIRnuiyN3VpgzL',
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
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ATyeTQy3z32cjU6q',
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
      776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DrEiLD0Hq4UmMSJB',
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
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fvkxEoAw0oGXWvje',
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
      817 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WP04RhGJOIMIzbxX',
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
      864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oLd18B9orcXNSDvA',
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
      888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dorBj7y009kIB5rS',
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
      958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aZf6NwdxoIB7y8Yw',
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
      989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XWYFVddaMzj273CR',
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
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aVqSgNAe9C3I8GSz',
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
      1034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NlNfMToUDobsqFT0',
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
      1062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kqZCH6O4s8I78xRS',
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
      1085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::urIo4YUWvAiTouBv',
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
      1118 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mWeMRfczRSgfS0AX',
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
      1144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eNwG5lv9iuXh9H8B',
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
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j3fK7JYDO4Xiio82',
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
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LJaJNynRglNWNXBf',
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
      1218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8ZIr69UleYPCYqpo',
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
      1240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UrFaSCuooTlSgU8S',
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
      1269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JIwdUty7IIzWiXgv',
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
      1328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1TvRwSNxDJ3UOCE3',
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
      1388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nHAGPIbUQ3AVHYn4',
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
      1448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yG5UoxdTJ291QYUv',
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
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PbwMUATUeGRAsvik',
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
      1508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u9UGlj32hxy2HWml',
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
      1539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yUmPVzCJ9lCFmdTW',
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
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YfuIFqEeiYps73mL',
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
      1594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tHEcE3QE5ZEOj0Gy',
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
      1631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::39Vx44nrZgcrtBiE',
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
      1672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QtSzuplDc2WkHVU4',
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
      1711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dq3PmqVbX39IZNiy',
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
      1772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cJmOHfurgVBhYHrb',
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
      1794 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::znX1XQBZ2w7meVNo',
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
      1826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ITHG9DXPeeSkGkFK',
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
      1851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fHQ4SMTdx59MYr2w',
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
      1895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYPbLAXu7uISXrkB',
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
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kCJCnlD8LIcmSPjM',
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
      1975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pAtvECeKbZ8uS8jG',
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
      2016 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xVglP5ysz4tomszE',
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
      2040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::03HziNxOVloK978g',
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
      2104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZWSNPDOIi710XBcY',
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
      2132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::STVeRBjQXErgaHPq',
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
      2171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::US73Yxmh60meTQpZ',
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
      2220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BGuwOY1hN8T5GVsl',
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
      2242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MYSdNgAz1hokMIZZ',
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
      2286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LjW6LYHi9DPmllbu',
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
      2328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BzOaXGiSPelkUO2U',
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
      2373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8gyzu6HmnfEVrh9V',
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
      2429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xZI6HaIiLYuHv4HP',
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
      2456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ec7Eoy7NmJfKSqkY',
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
      2483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SYzw3nDEwO76UBRD',
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
      2511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::afVYZb5g8wm2Ie6r',
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
      2582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YmD0Xd5nOHrZ4WmZ',
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
      2624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TBphjC88pxgaYLnf',
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
      2648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dQ0tcTHogchBXrP7',
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
      2675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lrSjl37yznjGjKrS',
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
    'generated::rmYEWPBTNx0UWKhM' => 
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
        'as' => 'generated::rmYEWPBTNx0UWKhM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PBIrVuMnYb2ob2jG' => 
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
        'as' => 'generated::PBIrVuMnYb2ob2jG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PAP4SinzhRma2OdV' => 
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
        'as' => 'generated::PAP4SinzhRma2OdV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::vzqFChYCZ2ZX8Vl8' => 
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
        'as' => 'generated::vzqFChYCZ2ZX8Vl8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bR9XDYcg6gqjfm6j' => 
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
        'as' => 'generated::bR9XDYcg6gqjfm6j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ePsbSmcjTWWClfOW' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ePsbSmcjTWWClfOW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nZGzzqJkFcOpP1wg' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058e0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nZGzzqJkFcOpP1wg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pr2uIQyMMu3QF4TT' => 
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
        'as' => 'generated::pr2uIQyMMu3QF4TT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fcJzAjEn3jmuWlRM' => 
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
        'as' => 'generated::fcJzAjEn3jmuWlRM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QU6o2OT2bYySd29B' => 
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
        'as' => 'generated::QU6o2OT2bYySd29B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tqdC5i0BfBzhQptr' => 
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
        'as' => 'generated::tqdC5i0BfBzhQptr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qcwbrBNlOrkeaiPh' => 
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
        'as' => 'generated::qcwbrBNlOrkeaiPh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DwXlkTLp4OA1bu23' => 
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
        'as' => 'generated::DwXlkTLp4OA1bu23',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UcXsRQCJ6vvf7flQ' => 
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
        'as' => 'generated::UcXsRQCJ6vvf7flQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JtmZkAcC0Hvsm6D2' => 
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
        'as' => 'generated::JtmZkAcC0Hvsm6D2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZtBlX0LuqNSk3Xfw' => 
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
        'as' => 'generated::ZtBlX0LuqNSk3Xfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4sXyexLYrpkpVPBE' => 
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
        'as' => 'generated::4sXyexLYrpkpVPBE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5XaBQduqA77n3O9g' => 
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
        'as' => 'generated::5XaBQduqA77n3O9g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CafkYS7CKnjSfteW' => 
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
        'as' => 'generated::CafkYS7CKnjSfteW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eDhkauAXwXY3dsP9' => 
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
        'as' => 'generated::eDhkauAXwXY3dsP9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rwfwaquiXYXCligM' => 
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
        'as' => 'generated::rwfwaquiXYXCligM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j25OZ7dRrjvmqtsR' => 
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
        'as' => 'generated::j25OZ7dRrjvmqtsR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uxrrfmzWAnVIxKvA' => 
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
        'as' => 'generated::uxrrfmzWAnVIxKvA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LYH8enxrb6xyOXpp' => 
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
        'as' => 'generated::LYH8enxrb6xyOXpp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WfxbWpcrvNQs1DpP' => 
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
        'as' => 'generated::WfxbWpcrvNQs1DpP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4uIwXALJa13zgTor' => 
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
        'as' => 'generated::4uIwXALJa13zgTor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qMnzc2ehuhDbr17n' => 
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
        'as' => 'generated::qMnzc2ehuhDbr17n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vCVuXhem6sXNFba4' => 
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
        'as' => 'generated::vCVuXhem6sXNFba4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lKlgZRATbxfE7szf' => 
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
        'as' => 'generated::lKlgZRATbxfE7szf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5hHVCnBAEpKARDqB' => 
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
        'as' => 'generated::5hHVCnBAEpKARDqB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SwFgINrpOZLW4HlI' => 
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
        'as' => 'generated::SwFgINrpOZLW4HlI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KcTXTUxV9iYG4FsG' => 
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
        'as' => 'generated::KcTXTUxV9iYG4FsG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dj621NfRdhNZ55Da' => 
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
        'as' => 'generated::dj621NfRdhNZ55Da',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dUkrnZ359aEO12uk' => 
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
        'as' => 'generated::dUkrnZ359aEO12uk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jLSai5OeifhagSv4' => 
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
        'as' => 'generated::jLSai5OeifhagSv4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fQXVAYp2uECv3GRn' => 
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
        'as' => 'generated::fQXVAYp2uECv3GRn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bmGU7b7C0nYUbsbW' => 
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
        'as' => 'generated::bmGU7b7C0nYUbsbW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9BOnjtR5JtI31LBH' => 
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
        'as' => 'generated::9BOnjtR5JtI31LBH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SsdheISvK1hjCv7F' => 
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
        'as' => 'generated::SsdheISvK1hjCv7F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mp0E008euClQQuuM' => 
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
        'as' => 'generated::Mp0E008euClQQuuM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nK0pk1hm3zzxMSX9' => 
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
        'as' => 'generated::nK0pk1hm3zzxMSX9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S8HzcjppWiK1Wbcd' => 
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
        'as' => 'generated::S8HzcjppWiK1Wbcd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::774b0H6GGA7zhamq' => 
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
        'as' => 'generated::774b0H6GGA7zhamq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ohXWXLJcrb7bjDU' => 
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
        'as' => 'generated::9ohXWXLJcrb7bjDU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NIgGiNZL36VWR6RN' => 
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
        'as' => 'generated::NIgGiNZL36VWR6RN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tldfVZkxCgyXGLr3' => 
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
        'as' => 'generated::tldfVZkxCgyXGLr3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DqZCxMRfNTxpG05L' => 
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
        'as' => 'generated::DqZCxMRfNTxpG05L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QfQUa6LHlz5en1XW' => 
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
        'as' => 'generated::QfQUa6LHlz5en1XW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sjuk8Zq7nHVQXiUk' => 
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
        'as' => 'generated::Sjuk8Zq7nHVQXiUk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O4B6zM7zJUaTTDIn' => 
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
        'as' => 'generated::O4B6zM7zJUaTTDIn',
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
    'generated::04msgEoMuDiD8ujW' => 
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
        'as' => 'generated::04msgEoMuDiD8ujW',
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
    'generated::oMHrQiB7G6bQTI7F' => 
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
        'as' => 'generated::oMHrQiB7G6bQTI7F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGwnMBgAaji6tDRN' => 
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
        'as' => 'generated::GGwnMBgAaji6tDRN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a6OB6ZWFysg3n1hc' => 
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
        'as' => 'generated::a6OB6ZWFysg3n1hc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4n3I1K7uG16DGtNP' => 
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
        'as' => 'generated::4n3I1K7uG16DGtNP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D928ljzIzDF9uXK4' => 
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
        'as' => 'generated::D928ljzIzDF9uXK4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wtisHfuGhGMdK5xk' => 
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
        'as' => 'generated::wtisHfuGhGMdK5xk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v8u79eE5t2ioWyPt' => 
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
        'as' => 'generated::v8u79eE5t2ioWyPt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2g8LYx55AlNsrK4r' => 
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
        'as' => 'generated::2g8LYx55AlNsrK4r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::trUqkw0zgzTf66vW' => 
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
        'as' => 'generated::trUqkw0zgzTf66vW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FzcsgQGaRgx2pg3I' => 
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
        'as' => 'generated::FzcsgQGaRgx2pg3I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uiDbo0NZMswDCNso' => 
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
        'as' => 'generated::uiDbo0NZMswDCNso',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RaOPXfDcCYT6WWkf' => 
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
        'as' => 'generated::RaOPXfDcCYT6WWkf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gVDOXqfXebpnESxW' => 
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
        'as' => 'generated::gVDOXqfXebpnESxW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9CHfi9oFHJ7EnXrn' => 
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
        'as' => 'generated::9CHfi9oFHJ7EnXrn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xpd9HwereSuCAJMN' => 
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
        'as' => 'generated::Xpd9HwereSuCAJMN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c3LWhC88QKlE4Jfn' => 
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
        'as' => 'generated::c3LWhC88QKlE4Jfn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YKPx3YICZGWKfJUx' => 
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
        'as' => 'generated::YKPx3YICZGWKfJUx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RYjDNY7BxbIOAL9i' => 
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
        'as' => 'generated::RYjDNY7BxbIOAL9i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hckvANH5sQASiTvB' => 
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
        'as' => 'generated::hckvANH5sQASiTvB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0YxwzS2TD2Hd9ukn' => 
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
        'as' => 'generated::0YxwzS2TD2Hd9ukn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::baMqJkZwPQSShcA2' => 
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
        'as' => 'generated::baMqJkZwPQSShcA2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q5P8LmFfyJIPQ2XB' => 
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
        'as' => 'generated::Q5P8LmFfyJIPQ2XB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T12zajHW86JbJOc7' => 
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
        'as' => 'generated::T12zajHW86JbJOc7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XBsUdZKoSLM6Y6Fr' => 
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
        'as' => 'generated::XBsUdZKoSLM6Y6Fr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zv7xS4wKVZyG0own' => 
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
        'as' => 'generated::zv7xS4wKVZyG0own',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HMJzA5ejNLYJKtTE' => 
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
        'as' => 'generated::HMJzA5ejNLYJKtTE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kGt5NMxAj2gcDWuc' => 
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
        'as' => 'generated::kGt5NMxAj2gcDWuc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DrEiLD0Hq4UmMSJB' => 
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
        'as' => 'generated::DrEiLD0Hq4UmMSJB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F40q0i1G4YNMtx8I' => 
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
        'as' => 'generated::F40q0i1G4YNMtx8I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hK4Imgt1RXSKNqsY' => 
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
        'as' => 'generated::hK4Imgt1RXSKNqsY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Krdklx8sNQOmthRV' => 
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
        'as' => 'generated::Krdklx8sNQOmthRV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fvkxEoAw0oGXWvje' => 
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
        'as' => 'generated::fvkxEoAw0oGXWvje',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cwEqnfs3YTwibMEP' => 
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
        'as' => 'generated::cwEqnfs3YTwibMEP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cYudCNaxPKImXUlM' => 
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
        'as' => 'generated::cYudCNaxPKImXUlM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WP04RhGJOIMIzbxX' => 
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
        'as' => 'generated::WP04RhGJOIMIzbxX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4jWrY2XBuF7a0VoG' => 
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
        'as' => 'generated::4jWrY2XBuF7a0VoG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vpIIWCYaZVb4j0KB' => 
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
        'as' => 'generated::vpIIWCYaZVb4j0KB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cs6Tcp2yqiskaEp7' => 
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
        'as' => 'generated::cs6Tcp2yqiskaEp7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DKCOdCOzy0km4MQo' => 
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
        'as' => 'generated::DKCOdCOzy0km4MQo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oLd18B9orcXNSDvA' => 
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
        'as' => 'generated::oLd18B9orcXNSDvA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zCgM15eFkZAl2Fow' => 
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
        'as' => 'generated::zCgM15eFkZAl2Fow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TPI6jUCxWF749613' => 
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
        'as' => 'generated::TPI6jUCxWF749613',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U2Yiz0MeZm1yME8L' => 
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
        'as' => 'generated::U2Yiz0MeZm1yME8L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bMxMoVsw9fHNoqfL' => 
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
        'as' => 'generated::bMxMoVsw9fHNoqfL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RQtg1Diu9AMXlwvY' => 
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
        'as' => 'generated::RQtg1Diu9AMXlwvY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PwW61MnFIhOPI4t8' => 
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
        'as' => 'generated::PwW61MnFIhOPI4t8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pngyMbd5vKY5yXRA' => 
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
        'as' => 'generated::pngyMbd5vKY5yXRA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rYs6wpkQagON2XkZ' => 
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
        'as' => 'generated::rYs6wpkQagON2XkZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IsKQIjvNH51XixgO' => 
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
        'as' => 'generated::IsKQIjvNH51XixgO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fne2hW3TPsivYd3e' => 
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
        'as' => 'generated::fne2hW3TPsivYd3e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EQKbfq8FbNf29ZR8' => 
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
        'as' => 'generated::EQKbfq8FbNf29ZR8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNiPPINEzrGAN8T2' => 
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
        'as' => 'generated::DNiPPINEzrGAN8T2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qLVMvYKxf7CPn4zf' => 
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
        'as' => 'generated::qLVMvYKxf7CPn4zf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rOsyvuzvBj6V82cg' => 
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
        'as' => 'generated::rOsyvuzvBj6V82cg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OAHlVKiTPB61ecU7' => 
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
        'as' => 'generated::OAHlVKiTPB61ecU7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QygSQ6XLx0siRDi8' => 
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
        'as' => 'generated::QygSQ6XLx0siRDi8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wdXaqmS9TUDlVKLY' => 
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
        'as' => 'generated::wdXaqmS9TUDlVKLY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BtgE1GcGycFATg12' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/handouts',
        'where' => 
        array (
        ),
        'as' => 'generated::BtgE1GcGycFATg12',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s3TY6ovdY1jDPhiM' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@store',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Handouts\\LMSHandoutController@store',
        'namespace' => NULL,
        'prefix' => 'api/lms/handouts',
        'where' => 
        array (
        ),
        'as' => 'generated::s3TY6ovdY1jDPhiM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dH13ZdlH4lcUBRtu' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
        'as' => 'generated::dH13ZdlH4lcUBRtu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::spAZ47Ptz8lJAIrW' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewAssessmentContent',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@viewAssessmentContent',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
        'as' => 'generated::spAZ47Ptz8lJAIrW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DnXEqs8FOUjhCX8h' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
        'as' => 'generated::DnXEqs8FOUjhCX8h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YLKPibEE2v0Gwffe' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@update',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@update',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
        'as' => 'generated::YLKPibEE2v0Gwffe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S1D87VSzx2repjR0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/assessments/delete_assessments',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/assessments',
        'where' => 
        array (
        ),
        'as' => 'generated::S1D87VSzx2repjR0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m3GKZd10Z2JY3QPn' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
        'as' => 'generated::m3GKZd10Z2JY3QPn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wGjezher6zCjC7uJ' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
        'as' => 'generated::wGjezher6zCjC7uJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dzUtaearAUUL9ICW' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@update',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@update',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
        'as' => 'generated::dzUtaearAUUL9ICW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jo7Ds97aR6tWYknT' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentSectionController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/sections',
        'where' => 
        array (
        ),
        'as' => 'generated::jo7Ds97aR6tWYknT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I1YIRnuiyN3VpgzL' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
        'as' => 'generated::I1YIRnuiyN3VpgzL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kIIhBHExVyYJEuqD' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
        'as' => 'generated::kIIhBHExVyYJEuqD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P735k9Mn3ucVkuWr' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@update',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@update',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
        'as' => 'generated::P735k9Mn3ucVkuWr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XRyOdpLHtBtxo0vK' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainer\\Assessments\\LMSAssessmentQuestionController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/questions',
        'where' => 
        array (
        ),
        'as' => 'generated::XRyOdpLHtBtxo0vK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ATyeTQy3z32cjU6q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/lms/courses/view_courses/{section}',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@view',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@view',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
        'as' => 'generated::ATyeTQy3z32cjU6q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BAPVSgnRKgmjZDAb' => 
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
          3 => 'user_role:TRAINEE,TRAINER,SUPERADMIN',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@create',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@create',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
        'as' => 'generated::BAPVSgnRKgmjZDAb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fjR92DFdbWY8YiKf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/lms/courses/update_courses',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@update',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@update',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
        'as' => 'generated::fjR92DFdbWY8YiKf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4nzBpd2H3wz1ECHr' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/lms/courses/delete_courses',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@delete',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LMSController@delete',
        'namespace' => NULL,
        'prefix' => 'api/lms/courses',
        'where' => 
        array (
        ),
        'as' => 'generated::4nzBpd2H3wz1ECHr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dorBj7y009kIB5rS' => 
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
        'as' => 'generated::dorBj7y009kIB5rS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EIHautYKNDL0eWrL' => 
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
        'as' => 'generated::EIHautYKNDL0eWrL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i3Aa6AZsWdexxQAo' => 
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
        'as' => 'generated::i3Aa6AZsWdexxQAo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XtYIbfNaVzTT2gyn' => 
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
        'as' => 'generated::XtYIbfNaVzTT2gyn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IB8iQ1wmLrvp93Xz' => 
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
        'as' => 'generated::IB8iQ1wmLrvp93Xz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x1XRBzMAbAyE8Wdi' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DashboardCtrl@dashboard_data',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DashboardCtrl@dashboard_data',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::x1XRBzMAbAyE8Wdi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TVt1c5SPOLVaCjCg' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::TVt1c5SPOLVaCjCg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pEYBL0BhTsqFrQbJ' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::pEYBL0BhTsqFrQbJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aZf6NwdxoIB7y8Yw' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT',
          4 => 'throttle:60,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::aZf6NwdxoIB7y8Yw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F8gSKKa1ePwlbE6G' => 
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
        'as' => 'generated::F8gSKKa1ePwlbE6G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ptz17l0brbrOMlcZ' => 
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
        'as' => 'generated::Ptz17l0brbrOMlcZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOiHUJMa7rlqz1Bx' => 
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
        'as' => 'generated::oOiHUJMa7rlqz1Bx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rUiuTtxFSZaIJU3D' => 
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
        'as' => 'generated::rUiuTtxFSZaIJU3D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BDamrkwSWtxFHYNo' => 
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
        'as' => 'generated::BDamrkwSWtxFHYNo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aTTrfWHFF3Ikon7V' => 
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
        'as' => 'generated::aTTrfWHFF3Ikon7V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1TvRwSNxDJ3UOCE3' => 
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
        'as' => 'generated::1TvRwSNxDJ3UOCE3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OSMvkO496iOYYOBS' => 
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
        'as' => 'generated::OSMvkO496iOYYOBS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O4rjI34T5RYFAWWC' => 
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
        'as' => 'generated::O4rjI34T5RYFAWWC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hizzsg51NqhcPiYc' => 
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
        'as' => 'generated::hizzsg51NqhcPiYc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K2XwV8KSW9ojpNm8' => 
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
        'as' => 'generated::K2XwV8KSW9ojpNm8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K03GnNiVumDjgFow' => 
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
        'as' => 'generated::K03GnNiVumDjgFow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AZXkUEQgx6fgzoGq' => 
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
        'as' => 'generated::AZXkUEQgx6fgzoGq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ULVSah8mJKpNptE1' => 
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
        'as' => 'generated::ULVSah8mJKpNptE1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XWYFVddaMzj273CR' => 
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
        'as' => 'generated::XWYFVddaMzj273CR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U6gXanRVYxJDmCKx' => 
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
        'as' => 'generated::U6gXanRVYxJDmCKx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qZAofeQdExSR28UW' => 
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
        'as' => 'generated::qZAofeQdExSR28UW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kqZCH6O4s8I78xRS' => 
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
        'as' => 'generated::kqZCH6O4s8I78xRS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Roh0l9b5EXvpINPO' => 
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
        'as' => 'generated::Roh0l9b5EXvpINPO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D2dECxSpPvaBllr8' => 
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
        'as' => 'generated::D2dECxSpPvaBllr8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::urIo4YUWvAiTouBv' => 
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
        'as' => 'generated::urIo4YUWvAiTouBv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G376UfgSfg4Ag5dz' => 
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
        'as' => 'generated::G376UfgSfg4Ag5dz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CoxEgTAuaasRHfkE' => 
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
        'as' => 'generated::CoxEgTAuaasRHfkE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mWeMRfczRSgfS0AX' => 
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
        'as' => 'generated::mWeMRfczRSgfS0AX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lRxkDzfupiK33ot6' => 
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
        'as' => 'generated::lRxkDzfupiK33ot6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WJxC7jajmdR8o6yJ' => 
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
        'as' => 'generated::WJxC7jajmdR8o6yJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nHAGPIbUQ3AVHYn4' => 
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
        'as' => 'generated::nHAGPIbUQ3AVHYn4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lE2J0VH5xbO2tnc5' => 
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
        'as' => 'generated::lE2J0VH5xbO2tnc5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5MEmr4CD6JvuJXtX' => 
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
        'as' => 'generated::5MEmr4CD6JvuJXtX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aVqSgNAe9C3I8GSz' => 
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
        'as' => 'generated::aVqSgNAe9C3I8GSz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9G2wT0oYnFdGjDhp' => 
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
        'as' => 'generated::9G2wT0oYnFdGjDhp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOsbwE9DLdrM1ZNK' => 
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
        'as' => 'generated::oOsbwE9DLdrM1ZNK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eNwG5lv9iuXh9H8B' => 
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
        'as' => 'generated::eNwG5lv9iuXh9H8B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YnAgWePY4uNO34qu' => 
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
        'as' => 'generated::YnAgWePY4uNO34qu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F2clIbYsTdTVmKj3' => 
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
        'as' => 'generated::F2clIbYsTdTVmKj3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LJaJNynRglNWNXBf' => 
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
        'as' => 'generated::LJaJNynRglNWNXBf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SbKfRQ3iVxZIH46D' => 
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
        'as' => 'generated::SbKfRQ3iVxZIH46D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tW3xf5OaTs7WwQn6' => 
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
        'as' => 'generated::tW3xf5OaTs7WwQn6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NlNfMToUDobsqFT0' => 
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
        'as' => 'generated::NlNfMToUDobsqFT0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gqtI1niF5kvGeIdn' => 
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
        'as' => 'generated::gqtI1niF5kvGeIdn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ex2eXYrdFtzyzJ8Z' => 
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
        'as' => 'generated::ex2eXYrdFtzyzJ8Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8ZIr69UleYPCYqpo' => 
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
        'as' => 'generated::8ZIr69UleYPCYqpo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pbVBVpM2jMTFKRkJ' => 
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
        'as' => 'generated::pbVBVpM2jMTFKRkJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R1mVSNEGlrbQCuIL' => 
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
        'as' => 'generated::R1mVSNEGlrbQCuIL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UrFaSCuooTlSgU8S' => 
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
        'as' => 'generated::UrFaSCuooTlSgU8S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k3jVLxtqBAhFflZ2' => 
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
        'as' => 'generated::k3jVLxtqBAhFflZ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9jDQpDORCFBv4MuW' => 
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
        'as' => 'generated::9jDQpDORCFBv4MuW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JIwdUty7IIzWiXgv' => 
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
        'as' => 'generated::JIwdUty7IIzWiXgv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pkLrIptfKET68YPv' => 
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
        'as' => 'generated::pkLrIptfKET68YPv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q6026HEj5ARgj8jY' => 
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
        'as' => 'generated::Q6026HEj5ARgj8jY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DCKHF3FRycHIJ2t7' => 
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
        'as' => 'generated::DCKHF3FRycHIJ2t7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j3fK7JYDO4Xiio82' => 
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
        'as' => 'generated::j3fK7JYDO4Xiio82',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZIABsbgQEjyrL0KV' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::ZIABsbgQEjyrL0KV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aW2ZaH898L5qtkhU' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::aW2ZaH898L5qtkhU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yG5UoxdTJ291QYUv' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::yG5UoxdTJ291QYUv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9jazsDAA3BpvruU7' => 
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
        'as' => 'generated::9jazsDAA3BpvruU7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vR2LtylamIWULmpX' => 
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
        'as' => 'generated::vR2LtylamIWULmpX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u9UGlj32hxy2HWml' => 
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
        'as' => 'generated::u9UGlj32hxy2HWml',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yUmPVzCJ9lCFmdTW' => 
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
        'as' => 'generated::yUmPVzCJ9lCFmdTW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0lh3arvduc8ZOwRL' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::0lh3arvduc8ZOwRL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YfuIFqEeiYps73mL' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::YfuIFqEeiYps73mL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tw1pKbP8L1DKpzH8' => 
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
        'as' => 'generated::tw1pKbP8L1DKpzH8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::39Vx44nrZgcrtBiE' => 
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
        'as' => 'generated::39Vx44nrZgcrtBiE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8IQpShBj9L5s8Q8Z' => 
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
        'as' => 'generated::8IQpShBj9L5s8Q8Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AOSCvmEApPFEABRK' => 
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
        'as' => 'generated::AOSCvmEApPFEABRK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w4bNAuMz7yzNF3Z4' => 
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
        'as' => 'generated::w4bNAuMz7yzNF3Z4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JWxALmOv8e2RHi1K' => 
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
        'as' => 'generated::JWxALmOv8e2RHi1K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SunuHXMMlKa3tqPi' => 
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
        'as' => 'generated::SunuHXMMlKa3tqPi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qMZO4kio6dbwMIBD' => 
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
        'as' => 'generated::qMZO4kio6dbwMIBD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ovd0zYdsq79Rmbtk' => 
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
        'as' => 'generated::ovd0zYdsq79Rmbtk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QtSzuplDc2WkHVU4' => 
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
        'as' => 'generated::QtSzuplDc2WkHVU4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x5oSfzPkmNLagftW' => 
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
        'as' => 'generated::x5oSfzPkmNLagftW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2FlkaYUVqd1krBXa' => 
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
        'as' => 'generated::2FlkaYUVqd1krBXa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cfvEn50HK9IWqZ1T' => 
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
        'as' => 'generated::cfvEn50HK9IWqZ1T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YjjvCBZLVHQWSFut' => 
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
        'as' => 'generated::YjjvCBZLVHQWSFut',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jdGla9vvCXoBFjMe' => 
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
        'as' => 'generated::jdGla9vvCXoBFjMe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7BMMiTOvN1tS5zaK' => 
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
        'as' => 'generated::7BMMiTOvN1tS5zaK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yrOkykgALhmAbNWy' => 
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
        'as' => 'generated::yrOkykgALhmAbNWy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CLfkqm2RztFiSwGZ' => 
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
        'as' => 'generated::CLfkqm2RztFiSwGZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tHEcE3QE5ZEOj0Gy' => 
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
        'as' => 'generated::tHEcE3QE5ZEOj0Gy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PbwMUATUeGRAsvik' => 
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
        'as' => 'generated::PbwMUATUeGRAsvik',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2vD4UvZuGN8TcU4N' => 
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
        'as' => 'generated::2vD4UvZuGN8TcU4N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gYZb03cozOdbs8AF' => 
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
        'as' => 'generated::gYZb03cozOdbs8AF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0oA5XDnINQ21aYM9' => 
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
        'as' => 'generated::0oA5XDnINQ21aYM9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dq3PmqVbX39IZNiy' => 
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
        'as' => 'generated::Dq3PmqVbX39IZNiy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fc3Mavy4rBDfOCe6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/get_terms_and_condition',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@get_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::Fc3Mavy4rBDfOCe6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ehs28pcSe55KftZE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/create_or_update_term_and_condition',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@create_or_update_term_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::ehs28pcSe55KftZE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cJmOHfurgVBhYHrb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/dormitory/remove_terms_and_condition/{termsAndConditionId}',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\TermsAndConditionCtrl@remove_terms_and_condition',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::cJmOHfurgVBhYHrb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BVjLaiXl7wxmobGw' => 
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
        'as' => 'generated::BVjLaiXl7wxmobGw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vYPbLAXu7uISXrkB' => 
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
        'as' => 'generated::vYPbLAXu7uISXrkB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kCJCnlD8LIcmSPjM' => 
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
        'as' => 'generated::kCJCnlD8LIcmSPjM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WUnIzww77olr8TDr' => 
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
        'as' => 'generated::WUnIzww77olr8TDr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JzILrloyKPCTjKn2' => 
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
        'as' => 'generated::JzILrloyKPCTjKn2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::acwwynbzET9vKOYk' => 
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
        'as' => 'generated::acwwynbzET9vKOYk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L3nKSjdbeq9ajv2Z' => 
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
        'as' => 'generated::L3nKSjdbeq9ajv2Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zyj8DArUmH5x3VaG' => 
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
        'as' => 'generated::zyj8DArUmH5x3VaG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FYgVAGpa3t3E9TP4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/requests/get_available_supplies',
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
        'as' => 'generated::FYgVAGpa3t3E9TP4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::260b9nCCMlnFp47F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/requests/update_dormitory_room_request',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_dormitory_room_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_dormitory_room_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::260b9nCCMlnFp47F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DEOzbjWY4J0Pyxbc' => 
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
        'as' => 'generated::DEOzbjWY4J0Pyxbc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xVglP5ysz4tomszE' => 
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
        'as' => 'generated::xVglP5ysz4tomszE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::znX1XQBZ2w7meVNo' => 
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
        'as' => 'generated::znX1XQBZ2w7meVNo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vUVLdsq5WVsqpbei' => 
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
        'as' => 'generated::vUVLdsq5WVsqpbei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HibtBmpNwta7QcPI' => 
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
        'as' => 'generated::HibtBmpNwta7QcPI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qJkvdLNkkkZqNWf3' => 
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
        'as' => 'generated::qJkvdLNkkkZqNWf3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Y468JSFhqm7AtJ3' => 
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
        'as' => 'generated::3Y468JSFhqm7AtJ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::njejeUr3llKcRXlu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/provide_stocks_to_boarder',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@provide_stocks_to_boarder',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@provide_stocks_to_boarder',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::njejeUr3llKcRXlu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lArzDMuH1nNwjbXs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/get_provided_stocks',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_provided_stocks',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_provided_stocks',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::lArzDMuH1nNwjbXs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yXo5r65cEMjNkgk1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/get_stock_reserved_tenant',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_stock_reserved_tenant',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_stock_reserved_tenant',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::yXo5r65cEMjNkgk1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SNxeYcQcskgjxw6F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/dormitory/update_stock_status',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_stock_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_stock_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::SNxeYcQcskgjxw6F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8quRnn2JHtsCIi75' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/dormitory/audit_placements',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@audit_placement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@audit_placement',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::8quRnn2JHtsCIi75',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sHrO8oZeZG1iBaoJ' => 
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
        'as' => 'generated::sHrO8oZeZG1iBaoJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pAtvECeKbZ8uS8jG' => 
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
        'as' => 'generated::pAtvECeKbZ8uS8jG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ITHG9DXPeeSkGkFK' => 
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
        'as' => 'generated::ITHG9DXPeeSkGkFK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7YBRMUdT8lnBKmxC' => 
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
        'as' => 'generated::7YBRMUdT8lnBKmxC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wB9RN840eTo84vho' => 
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
        'as' => 'generated::wB9RN840eTo84vho',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fHQ4SMTdx59MYr2w' => 
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
        'as' => 'generated::fHQ4SMTdx59MYr2w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rvtTtZIF1oiSNFBy' => 
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
        'as' => 'generated::rvtTtZIF1oiSNFBy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xZdR1COgGiATKvgC' => 
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
        'as' => 'generated::xZdR1COgGiATKvgC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Eaq8LS4CliHF6HFU' => 
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
        'as' => 'generated::Eaq8LS4CliHF6HFU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::URSkxbvUT20q7rTj' => 
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
        'as' => 'generated::URSkxbvUT20q7rTj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VMDubQI2arTeuVd3' => 
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
        'as' => 'generated::VMDubQI2arTeuVd3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TbohDf6F7Amtsj23' => 
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
        'as' => 'generated::TbohDf6F7Amtsj23',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E8UcWgCUcOZb9zPM' => 
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
        'as' => 'generated::E8UcWgCUcOZb9zPM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AYKu8SnIfcapstEP' => 
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
        'as' => 'generated::AYKu8SnIfcapstEP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GSvT6iqUbkELblrK' => 
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
        'as' => 'generated::GSvT6iqUbkELblrK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::03HziNxOVloK978g' => 
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
        'as' => 'generated::03HziNxOVloK978g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wJEYXn7j2M7uIYmp' => 
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
        'as' => 'generated::wJEYXn7j2M7uIYmp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZWSNPDOIi710XBcY' => 
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
        'as' => 'generated::ZWSNPDOIi710XBcY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::STVeRBjQXErgaHPq' => 
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
        'as' => 'generated::STVeRBjQXErgaHPq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::US73Yxmh60meTQpZ' => 
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
        'as' => 'generated::US73Yxmh60meTQpZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NM6A8SPI8PP6n7zX' => 
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
        'as' => 'generated::NM6A8SPI8PP6n7zX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BXebjKGUfl7aZ3sO' => 
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
        'as' => 'generated::BXebjKGUfl7aZ3sO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BGuwOY1hN8T5GVsl' => 
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
        'as' => 'generated::BGuwOY1hN8T5GVsl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MYSdNgAz1hokMIZZ' => 
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
        'as' => 'generated::MYSdNgAz1hokMIZZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nw5YwcdEozLCyaSP' => 
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
        'as' => 'generated::nw5YwcdEozLCyaSP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Begtxl83YjbQh8EA' => 
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
        'as' => 'generated::Begtxl83YjbQh8EA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LjW6LYHi9DPmllbu' => 
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
        'as' => 'generated::LjW6LYHi9DPmllbu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yMl2Ex1Ur2URV80x' => 
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
        'as' => 'generated::yMl2Ex1Ur2URV80x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TlbiA7973Bkkn2CP' => 
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
        'as' => 'generated::TlbiA7973Bkkn2CP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BzOaXGiSPelkUO2U' => 
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
        'as' => 'generated::BzOaXGiSPelkUO2U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nm4bsCkW8ebltalP' => 
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
        'as' => 'generated::nm4bsCkW8ebltalP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BAAWVuklOqP74fX2' => 
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
        'as' => 'generated::BAAWVuklOqP74fX2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LCVV2ioaCysaCDki' => 
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
        'as' => 'generated::LCVV2ioaCysaCDki',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8gyzu6HmnfEVrh9V' => 
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
        'as' => 'generated::8gyzu6HmnfEVrh9V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RYQ8uoDUJbUE5Dq5' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::RYQ8uoDUJbUE5Dq5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7toYU3nWkCDA1eYs' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::7toYU3nWkCDA1eYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xZI6HaIiLYuHv4HP' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::xZI6HaIiLYuHv4HP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HWj1ovpyhybuCMcA' => 
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
        'as' => 'generated::HWj1ovpyhybuCMcA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UPWk2mOZuHIf9lyz' => 
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
        'as' => 'generated::UPWk2mOZuHIf9lyz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nsd0RzKAmnXy5vk0' => 
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
        'as' => 'generated::Nsd0RzKAmnXy5vk0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DYGVkwkKmfPRf1eK' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::DYGVkwkKmfPRf1eK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PgqKL3OEh5xlwBdL' => 
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
        'as' => 'generated::PgqKL3OEh5xlwBdL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::apcl1112oZIlOZ2E' => 
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
        'as' => 'generated::apcl1112oZIlOZ2E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D7quVDou0WRPHYN1' => 
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
        'as' => 'generated::D7quVDou0WRPHYN1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ec7Eoy7NmJfKSqkY' => 
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
        'as' => 'generated::Ec7Eoy7NmJfKSqkY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dhpxRcMTVQql4N65' => 
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
        'as' => 'generated::dhpxRcMTVQql4N65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YXDpz619SayrxDdW' => 
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
        'as' => 'generated::YXDpz619SayrxDdW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SYzw3nDEwO76UBRD' => 
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
        'as' => 'generated::SYzw3nDEwO76UBRD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NihNybXxVM8Y73t9' => 
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
        'as' => 'generated::NihNybXxVM8Y73t9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R4iUBbHa3wd3yimZ' => 
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
        'as' => 'generated::R4iUBbHa3wd3yimZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::afVYZb5g8wm2Ie6r' => 
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
        'as' => 'generated::afVYZb5g8wm2Ie6r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hlQjN3rsUUOIjPPI' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::hlQjN3rsUUOIjPPI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cLxDrD7Fkdj1yomD' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::cLxDrD7Fkdj1yomD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YmD0Xd5nOHrZ4WmZ' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
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
        'as' => 'generated::YmD0Xd5nOHrZ4WmZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1Qm6AG6RzdNuPGoj' => 
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
        'as' => 'generated::1Qm6AG6RzdNuPGoj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S8fxJTjieLHc6nos' => 
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
        'as' => 'generated::S8fxJTjieLHc6nos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3yZlm4AB7GxlqA9W' => 
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
        'as' => 'generated::3yZlm4AB7GxlqA9W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6dnJyNEmWXZkpbM2' => 
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
        'as' => 'generated::6dnJyNEmWXZkpbM2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::868r8sNNgtsa91vB' => 
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
        'as' => 'generated::868r8sNNgtsa91vB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uvnW7M61yHiY1CAg' => 
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
        'as' => 'generated::uvnW7M61yHiY1CAg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uNPejLYBNvEQpE0n' => 
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
        'as' => 'generated::uNPejLYBNvEQpE0n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6daEzoaQCWAmucXP' => 
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
        'as' => 'generated::6daEzoaQCWAmucXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1jwRKy48i1RJSKAr' => 
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
        'as' => 'generated::1jwRKy48i1RJSKAr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6WCuMziCnxGw6jNX' => 
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
        'as' => 'generated::6WCuMziCnxGw6jNX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ruzPeAqMNI6TEc3j' => 
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
        'as' => 'generated::ruzPeAqMNI6TEc3j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DkogFLF3LqE6vWwE' => 
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
        'as' => 'generated::DkogFLF3LqE6vWwE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ny6sdLdNhFnAQFBJ' => 
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
        'as' => 'generated::Ny6sdLdNhFnAQFBJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kV6Jr93TEV1TGDbu' => 
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
        'as' => 'generated::kV6Jr93TEV1TGDbu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TBphjC88pxgaYLnf' => 
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
        'as' => 'generated::TBphjC88pxgaYLnf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dQ0tcTHogchBXrP7' => 
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
        'as' => 'generated::dQ0tcTHogchBXrP7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3lYChryP6PwqPOnB' => 
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
        'as' => 'generated::3lYChryP6PwqPOnB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Aqt00s2dN6foVAXc' => 
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
        'as' => 'generated::Aqt00s2dN6foVAXc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lrSjl37yznjGjKrS' => 
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
        'as' => 'generated::lrSjl37yznjGjKrS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::55rgIbK8sGHx6dc5' => 
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
        'as' => 'generated::55rgIbK8sGHx6dc5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qDm2Z4xx0O3FFuBp' => 
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
        'as' => 'generated::qDm2Z4xx0O3FFuBp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IvDcH8roeJgQfotr' => 
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
        'as' => 'generated::IvDcH8roeJgQfotr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bI2cO2iWv26qZ0Pk' => 
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
        'as' => 'generated::bI2cO2iWv26qZ0Pk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FQLDa71YaT64Otan' => 
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
        'as' => 'generated::FQLDa71YaT64Otan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::juksCdAtzZfGlxrZ' => 
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
        'as' => 'generated::juksCdAtzZfGlxrZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Aa60jriSwqGG5NXR' => 
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
        'as' => 'generated::Aa60jriSwqGG5NXR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JrlZ8eXTMxeD7AbY' => 
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
        'as' => 'generated::JrlZ8eXTMxeD7AbY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MUwlFFV1TJ1y3Pyg' => 
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
        'as' => 'generated::MUwlFFV1TJ1y3Pyg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1cMDEzcN9rJOKjIn' => 
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
          2 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER,ADMIN-RA',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@audit_trail_filter',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@audit_trail_filter',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
        'as' => 'generated::1cMDEzcN9rJOKjIn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bcXQnnssdcqNXYSF' => 
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
        'as' => 'generated::bcXQnnssdcqNXYSF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
