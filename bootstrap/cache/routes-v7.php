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
            '_route' => 'generated::qp6myxOgAVu0GTgC',
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
            '_route' => 'generated::XdvDjlpOzXl9JGc0',
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
            '_route' => 'generated::apsbIGqGFglwgz6d',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LAN8ml5Cjaf0wtBE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zAIG0hoCXMurdkj8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::u74mMevhK2ot7rtl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
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
            '_route' => 'generated::Tsy3jYGQOR2iE5Gz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::k6PDXSgaTuhIopi3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
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
            '_route' => 'generated::HACmtRzGE0XpFazM',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GBm9LiXn9Zjcu2FA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1DYHEV21fZsCO6JV',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::enBwiVCvZpwcfqgc',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::b7Wk7yM8iiBUZUhP',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Xbbz20GRo0gPTlaB',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::GjiZLOEfIoOzZmoc',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::srC5yMBjpaG0AF5t',
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
            '_route' => 'generated::Dw2i7Jwlm5au4Vlr',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RNM6tQLkcAmc4Nw1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::si6YAdTlB1oJIgOn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gxNKooizVkZ21Vhu',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::y0KTmVxRkhhiYQBY',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KMJf8s03hw9U9bx0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::F3MiEsjR7j3sAbFS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::igvlL80MeNIt7bZw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dG6yWbn1sRbsHO3Z',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::P5WRRP6cne5hn96q',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::QIkbzS2GVJZCJbD5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SQ9KhWxN9DJg7m3V',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3hMQpJ0pdnKdhzv2',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rl5AXt9WIaBDaE8i',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::PmxveNjPktAjQJYt',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::XiXhCxMxaocjigu4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JW7EWNpqqycw7s9Q',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Gqq4f52EIgezYP6b',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ty874KOwaReICe96',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lqTDBvbriKm3XTqW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6mmkNwdfTk0yUyfw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uFT4uskxH8O47LpX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::9TFg4nYSfl81uKm8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dXGafESMCZNaJdOJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::voueY4Nl1RHEpTkj',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::tZAI0rZz7a6v1QjL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pNvOOsraJhUWNzCC',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ba9lqIK0p4F5z3LD',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xVGUV1dyk4tSSalT',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8V7UlD4TChfFER87',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::qyYmX1RXFJQwKWyQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iW5Ga8hzoRVhVqd3',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rFEQUOgMsNAEJUnE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9Cm3nQcYh0jGhnL3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LVtN6S6hzMQasqcz',
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
            '_route' => 'generated::fzH4YxKtXixL49XF',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Pm6ikV066OVPbXqL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QDFXTVpadhqnUyy0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::yv00xbQF3xLgFVdn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rL8uGr1OP6ojcxoQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qV1oRKeeh1Gk3DzB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::e6eNgvnI1ft2YH2E',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::cOn0Oq6hQKOM9OiQ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oVDef8leo9OzT4Wz',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::yCwxRGvcXErolwsP',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::067Zghff8d3yD9Ho',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SR8gJQAUD067EMsH',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8DrlstHDaTTxU1TA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wI9nJggxwPCX25zx',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::vsgJ4Wlvp0Nnb39K',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tJI9LQ4L2NqwmKUE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::EC0ACGVxg4uXDXUS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PbAlK2pqU1cAgdgk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4zwK1QOiujPpkqdx',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qVF5pjxVGLJwK2kv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::x0vW23bAA4L70zaG',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6VanXGygLIXJ9zA9',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::x4P4ouZ6YczBrIwF',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JtTsoQh3jd5SJklc',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::xC9eptfYXc5d0WoP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qUeuQnM0bp058nBd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::aCyb7bVcVXQc8Pqj',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ms2okcUWzuh9sy0q',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::iuZvQc71MIRjuxHW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QlBCGQcCzCsSPriX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::DuT3MiZRbEUrTkNA',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iBps5lNB7ARWIttd',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::QbZAplh2sk77IbiF',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wm0EsXppEy0EMHJl',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::9bm4y7SLNgEyTDzB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::I8WG7a3dIjzQ4wnE',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::8z1xluu6WFZEMgdL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::x9wpGC5FzqhxzIr1',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::CpHZqQTTeAz5GKqB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qqRbG7DAEAnHO0xh',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::64ekv3wYCpEzGKZ7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YNd0GiEUblCzi7sX',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::CaJCyk7yuJebR7g7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4uDL1V7alRResY9k',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::iSRBi009w3rQc7W8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tJrCOPWlMp0gO06F',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::9nbkHF6lvzVwqWZ6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::guky0E9XamRegcDP',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Ak98po0qPCLCUq04',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::o0DZfA5rRvni0cY8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EbUBjU8UiKTnpX2R',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::dv51DnBKTfvDUVBO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::zmfudZAZmob4tHiv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GH55eyaZgma2eoSW',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3kLjovFiNClMubXK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Nl2VwtGalXDXBqg5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PsdlEsURbsVUPYU4',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IY6okntrZFhI1TLd',
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
            '_route' => 'generated::kNYZL0MKKiVxR421',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::mVWfem7EIy6wFaOU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lvHReTFIKV2mYRCN',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::b2RgBaluTMLObaPc',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6fHQOh5QdreRH6AP',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4JEvQfzsqEFdP9iz',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2RsBBY116hQC8Xhb',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pkgLzs7NH5G0yfpI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::s28QGHqNUmhGxnGR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::QVDlfYR1rB97i7uk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::45URtSBlyOo82j7I',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Yon62K5MBrFHTKtJ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UyViNQZexwp7Wfvk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OsZ0UeXQ89M4nwRC',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::E9ffEFjeG0TrhTkS',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::AaK6zVEPCJej5XW5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6IV6C4DxcNc7r0a5',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7pxTXhlbNBnp4Fnf',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OjZ8AV3w5LzBB8m3',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qMr197NVkMgETlYI',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gH2Z0AZYkMTAdL3J',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::M1hDpnhTWVj7j3dn',
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
            '_route' => 'generated::kMEV4gAsuGkuZMc8',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vcZz3eRIARfLzcFn',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kPotUUwBG8PiZVvB',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PytwAU7MN9nPpOGm',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0ln64em0wwlTqV3c',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BSq9mtlodThCrFQU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::M2Z2Uvi0rO3k3A7u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gxOqtqIzyWZubcJv',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YfBhKzElt6K1Vw8K',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::IHw1nSq1pKV5tLR9',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FYXmerNVDUKBW9ZE',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LZIU5H4mGRiuZjg1',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hhicvcFbq9lkvE9J',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Kf989V5S3HEclLIR',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::7M9nHDd8zIityEvR',
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
      '/api/admin/masterlist/user/create_or_update_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3N44QIKQdXK37r7Z',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dl1ESw7pjghP93PK',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mabnXk0otRY8Fiqp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gafQGDA4zvp9I0Mp',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Yx6L3BLCkaVUF5xe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/invoice/get_invoices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uy3MlyRSAgxupiOa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/invoice/update_payment_status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YwCkyxNhAhryfEqU',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CUHZlhesk19wURfd',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2rN6KgAM0E7PbhV2',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::92GsN6r6ikoftAol',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bAbZcbeCW9FnlNNQ',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::HV1CkXAzC2bfoYNt',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::L59MIxllf8rqR5Aw',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OifGzv8mqxSuE6Mv',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jIcPoCH8pcjRtC8W',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::n0JBnZt7hl6DqFZS',
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
            '_route' => 'generated::X3sZoHHAkp9fQly0',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::PER7jEmMa2sWvYXq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RP4rIhSZty3OlrmG',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ThtWgIoDLZDxFoll',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RdooBlWqxoPhWmvJ',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::l1K1tYV6HeqeVwR7',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dE2BXHcop3y58ZJO',
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::0YXw4zQtcn2eEkNK',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::EsYU7sR0cAOXbL9X',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::UXLhOImxaoMEJw1u',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CH7mOQNgWVdmaTfk',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RNyyosSHdN1BTTub',
          ),
          1 => NULL,
          2 => 
          array (
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
      0 => '{^(?|/api/(?|my\\-account/get_trainee_general_info/([^/]++)(*:60)|enrollment/(?|get_(?|requirements/([^/]++)(*:109)|applications/([^/]++)(*:138))|remove_training_request/([^/]++)(*:179))|dormitories/(?|applied_dormitories/view/(?|([^/]++)(?|(*:242)|/inclusions(*:261))|getAllHistories/([^/]++)(*:294))|remove_applied_dormitories/([^/]++)(*:338)|inclusion/requests/([^/]++)(*:373)|services/(?|([^/]++)(*:401)|([0-9]+)/create(*:424)|([0-9]+)/cancel(*:447))|transfer_request/cancel/([^/]++)(*:488)|extension_request/cancel/([^/]++)(*:529)|cancel_request/([^/]++)(*:560))|libraries/book_info/([^/]++)(*:597)|client_satisfaction/surveys/delete/([^/]++)(*:648)|invoices/view/([^/]++)(*:678)|traine(?|r/enrollment/courses/([^/]++)(*:724)|e\\-info/([^/]++)(*:748))|admin/(?|enrollment/(?|get_applications/remove_training_request/([^/]++)(*:829)|remove_(?|s(?|ch(?|edule/([^/]++)(*:870)|ool/([^/]++)(*:890))|ponsor/([^/]++)(*:914))|module(?|/([^/]++)(*:941)|_type/([^/]++)(*:963))|c(?|ertificate/([^/]++)(*:995)|ourse(?|/([^/]++)(*:1020)|_fee/([^/]++)(*:1042)))|voucher/([^/]++)(*:1069)|license/([^/]++)(*:1094)|rank/([^/]++)(*:1116)|facilitator/([^/]++)(*:1145))|training\\-requirements/remove_trequirement/([^/]++)(*:1206))|book(?|s/(?|get_book_(?|info/(?|([^/]++)(*:1256)|get_copies/([^/]++)(*:1284)|remove_copy/([^/]++)(*:1313))|total_reservations/([^/]++)(*:1350)|reservation/remove_fine/([^/]++)(*:1391))|remove_book/([^/]++)(*:1421))|_entry/remove_entry/([^/]++)(*:1459))|dormitory/(?|get_(?|dormitory_(?|rooms/([^/]++)(*:1516)|info/([^/]++)(*:1538))|inventories/remove_dorm_inventory_stock/([^/]++)(*:1596))|cancel_(?|dorm_request/([^/]++)(*:1637)|charge/([^/]++)(*:1661))|remove_(?|room/([^/]++)(*:1694)|dorm_inventory/([^/]++)(*:1726)|service/([^/]++)(*:1751)))|masterlist/(?|user/(?|get_user_(?|basic_info/([^/]++)(*:1815)|activities/([^/]++)(*:1843))|remove_user/([^/]++)(*:1873))|employer/remove_employer/([^/]++)(*:1916)|position/remove_position/([^/]++)(*:1958))|cashier/remove_(?|charge(?|/([^/]++)(*:2004)|_category/([^/]++)(*:2031))|or_number/([^/]++)(*:2059)))))/?$}sDu',
    ),
    3 => 
    array (
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PsEd0lFQxZPVqkFD',
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
            '_route' => 'generated::5XwU7IssLqyx9VBq',
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
            '_route' => 'generated::jyNYNLc20z4PWgyK',
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
            '_route' => 'generated::jdlLICtosaS6yhcc',
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
            '_route' => 'generated::qNFKXil2TG8ysTVc',
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
            '_route' => 'generated::yt1ZDZvzEUPZaP4I',
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
            '_route' => 'generated::LyxxsaR0oB1J7wzG',
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
            '_route' => 'generated::PHQg4qkEf3s46rnp',
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
            '_route' => 'generated::03XXh0KZfAtfTQDg',
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
            '_route' => 'generated::dZx1Y47ipwfMEz3I',
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
            '_route' => 'generated::btonH45Xe1rSiM45',
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
            '_route' => 'generated::eIeJyZX7DxId1KMM',
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
            '_route' => 'generated::ScIEe6aOinjyZgG2',
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
            '_route' => 'generated::fpkfbu9KVC5ZuGqL',
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
            '_route' => 'generated::pfZCwlPliPWNSydQ',
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
            '_route' => 'generated::EXMxJNIosNNJXP2Y',
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
            '_route' => 'generated::XyhCYOhzlFIi38uw',
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
            '_route' => 'generated::92wH2aBqxieF0Xow',
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
            '_route' => 'generated::3Qg0ZB5EhsuoWPJS',
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
            '_route' => 'generated::BOnP60B7cMfeKlJz',
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
            '_route' => 'generated::4Z5JieYHkz1SjNCf',
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
            '_route' => 'generated::1NMjgf2SCDbV6lyU',
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
            '_route' => 'generated::vl61IJvHFCbNa9ip',
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
            '_route' => 'generated::RUT6NINpBboafpN4',
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
            '_route' => 'generated::FiEDYthXyHD4HHMQ',
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
            '_route' => 'generated::HbM5ZxmeKGHgHXF9',
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
            '_route' => 'generated::rEMz7w2oKSSmQaNe',
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
            '_route' => 'generated::wOulNe5QOgLVTnBM',
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
            '_route' => 'generated::fQqV8om4iVoWrN74',
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
            '_route' => 'generated::ep5pxrvo3Tt22qUo',
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
            '_route' => 'generated::kNbrKVKYhRfaOVGL',
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
            '_route' => 'generated::RYiU7djiGggBInxl',
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
            '_route' => 'generated::fpqyLTtK0IR7hHWF',
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
            '_route' => 'generated::nkTeepiX3bFXbJY1',
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
            '_route' => 'generated::6msPqDxuYTtPBa5j',
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
            '_route' => 'generated::KL33bMFVeSQvDgBE',
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
            '_route' => 'generated::OaiSSyjqi5HWBFLg',
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
            '_route' => 'generated::87YPXAqql8T4w9Cz',
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
            '_route' => 'generated::xVZWoK1eU7dhR7WE',
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
            '_route' => 'generated::lHQf4WQpRWVmVUt8',
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
            '_route' => 'generated::cno8AnxvqBUkHz8O',
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
            '_route' => 'generated::l5NVWQqYj2tTz1rV',
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
            '_route' => 'generated::rT59UD8F10GxRo3f',
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
            '_route' => 'generated::XeXrcMHnbtSA6jOF',
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
            '_route' => 'generated::Vsj7WDv5JukVHvWu',
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
            '_route' => 'generated::KDq19EWUSG0Ox53j',
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
            '_route' => 'generated::T5gbYGiXQRcj3rab',
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
            '_route' => 'generated::7EbfB9VUiNOXQ3mk',
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
            '_route' => 'generated::NnHyDHhTbY5I6EmJ',
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
            '_route' => 'generated::7jNbYPoVjxn44jvf',
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
            '_route' => 'generated::SDTEblqTEEckq6Ja',
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
      1873 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::16Bfw9OrEieqJdEZ',
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
      1916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n5193YAP4qxl0D98',
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
      1958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LsprbadLIcKrc3Lz',
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
      2004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MUb7fwXweRA8ucqI',
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
      2031 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9r1G1mAo1t8O6aU3',
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
      2059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uc3ByuhumABNe2LV',
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
    'generated::qp6myxOgAVu0GTgC' => 
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
        'as' => 'generated::qp6myxOgAVu0GTgC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XdvDjlpOzXl9JGc0' => 
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
        'as' => 'generated::XdvDjlpOzXl9JGc0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::apsbIGqGFglwgz6d' => 
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
        'as' => 'generated::apsbIGqGFglwgz6d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::LAN8ml5Cjaf0wtBE' => 
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
        'as' => 'generated::LAN8ml5Cjaf0wtBE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zAIG0hoCXMurdkj8' => 
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
        'as' => 'generated::zAIG0hoCXMurdkj8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u74mMevhK2ot7rtl' => 
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@test',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeEnrollment@test',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::u74mMevhK2ot7rtl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tsy3jYGQOR2iE5Gz' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005a50000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Tsy3jYGQOR2iE5Gz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k6PDXSgaTuhIopi3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
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
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:700:"function(\\Illuminate\\Http\\Request $request) {
        $user = \\App\\Models\\User::where(\'id\', $request->user()->id);

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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005a70000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::k6PDXSgaTuhIopi3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HACmtRzGE0XpFazM' => 
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
        'as' => 'generated::HACmtRzGE0XpFazM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GBm9LiXn9Zjcu2FA' => 
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
        'as' => 'generated::GBm9LiXn9Zjcu2FA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PsEd0lFQxZPVqkFD' => 
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
        'as' => 'generated::PsEd0lFQxZPVqkFD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1DYHEV21fZsCO6JV' => 
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
        'as' => 'generated::1DYHEV21fZsCO6JV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::enBwiVCvZpwcfqgc' => 
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
        'as' => 'generated::enBwiVCvZpwcfqgc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b7Wk7yM8iiBUZUhP' => 
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
        'as' => 'generated::b7Wk7yM8iiBUZUhP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xbbz20GRo0gPTlaB' => 
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
        'as' => 'generated::Xbbz20GRo0gPTlaB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GjiZLOEfIoOzZmoc' => 
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
        'as' => 'generated::GjiZLOEfIoOzZmoc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5XwU7IssLqyx9VBq' => 
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
        'as' => 'generated::5XwU7IssLqyx9VBq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jdlLICtosaS6yhcc' => 
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
        'as' => 'generated::jdlLICtosaS6yhcc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::srC5yMBjpaG0AF5t' => 
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
        'as' => 'generated::srC5yMBjpaG0AF5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dw2i7Jwlm5au4Vlr' => 
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
        'as' => 'generated::Dw2i7Jwlm5au4Vlr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RNM6tQLkcAmc4Nw1' => 
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
        'as' => 'generated::RNM6tQLkcAmc4Nw1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::si6YAdTlB1oJIgOn' => 
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
        'as' => 'generated::si6YAdTlB1oJIgOn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gxNKooizVkZ21Vhu' => 
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
        'as' => 'generated::gxNKooizVkZ21Vhu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y0KTmVxRkhhiYQBY' => 
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
        'as' => 'generated::y0KTmVxRkhhiYQBY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KMJf8s03hw9U9bx0' => 
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
        'as' => 'generated::KMJf8s03hw9U9bx0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jyNYNLc20z4PWgyK' => 
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
        'as' => 'generated::jyNYNLc20z4PWgyK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::F3MiEsjR7j3sAbFS' => 
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
        'as' => 'generated::F3MiEsjR7j3sAbFS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::igvlL80MeNIt7bZw' => 
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
        'as' => 'generated::igvlL80MeNIt7bZw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dG6yWbn1sRbsHO3Z' => 
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
        'as' => 'generated::dG6yWbn1sRbsHO3Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P5WRRP6cne5hn96q' => 
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
        'as' => 'generated::P5WRRP6cne5hn96q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QIkbzS2GVJZCJbD5' => 
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
        'as' => 'generated::QIkbzS2GVJZCJbD5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SQ9KhWxN9DJg7m3V' => 
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
        'as' => 'generated::SQ9KhWxN9DJg7m3V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qNFKXil2TG8ysTVc' => 
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
        'as' => 'generated::qNFKXil2TG8ysTVc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PHQg4qkEf3s46rnp' => 
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
        'as' => 'generated::PHQg4qkEf3s46rnp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3hMQpJ0pdnKdhzv2' => 
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
        'as' => 'generated::3hMQpJ0pdnKdhzv2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rl5AXt9WIaBDaE8i' => 
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
        'as' => 'generated::rl5AXt9WIaBDaE8i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PmxveNjPktAjQJYt' => 
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
        'as' => 'generated::PmxveNjPktAjQJYt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XiXhCxMxaocjigu4' => 
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
        'as' => 'generated::XiXhCxMxaocjigu4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JW7EWNpqqycw7s9Q' => 
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
        'as' => 'generated::JW7EWNpqqycw7s9Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gqq4f52EIgezYP6b' => 
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
        'as' => 'generated::Gqq4f52EIgezYP6b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yt1ZDZvzEUPZaP4I' => 
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
        'as' => 'generated::yt1ZDZvzEUPZaP4I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::03XXh0KZfAtfTQDg' => 
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
        'as' => 'generated::03XXh0KZfAtfTQDg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ty874KOwaReICe96' => 
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
        'as' => 'generated::Ty874KOwaReICe96',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lqTDBvbriKm3XTqW' => 
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
        'as' => 'generated::lqTDBvbriKm3XTqW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6mmkNwdfTk0yUyfw' => 
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
        'as' => 'generated::6mmkNwdfTk0yUyfw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uFT4uskxH8O47LpX' => 
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
        'as' => 'generated::uFT4uskxH8O47LpX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dZx1Y47ipwfMEz3I' => 
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
        'as' => 'generated::dZx1Y47ipwfMEz3I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::btonH45Xe1rSiM45' => 
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
        'as' => 'generated::btonH45Xe1rSiM45',
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
    'generated::eIeJyZX7DxId1KMM' => 
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
        'as' => 'generated::eIeJyZX7DxId1KMM',
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
    'generated::LyxxsaR0oB1J7wzG' => 
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
        'as' => 'generated::LyxxsaR0oB1J7wzG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9TFg4nYSfl81uKm8' => 
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
        'as' => 'generated::9TFg4nYSfl81uKm8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dXGafESMCZNaJdOJ' => 
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
        'as' => 'generated::dXGafESMCZNaJdOJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ScIEe6aOinjyZgG2' => 
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
        'as' => 'generated::ScIEe6aOinjyZgG2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::voueY4Nl1RHEpTkj' => 
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
        'as' => 'generated::voueY4Nl1RHEpTkj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tZAI0rZz7a6v1QjL' => 
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
        'as' => 'generated::tZAI0rZz7a6v1QjL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fpkfbu9KVC5ZuGqL' => 
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
        'as' => 'generated::fpkfbu9KVC5ZuGqL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pfZCwlPliPWNSydQ' => 
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
        'as' => 'generated::pfZCwlPliPWNSydQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pNvOOsraJhUWNzCC' => 
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
        'as' => 'generated::pNvOOsraJhUWNzCC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ba9lqIK0p4F5z3LD' => 
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
        'as' => 'generated::Ba9lqIK0p4F5z3LD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xVGUV1dyk4tSSalT' => 
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
        'as' => 'generated::xVGUV1dyk4tSSalT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8V7UlD4TChfFER87' => 
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
        'as' => 'generated::8V7UlD4TChfFER87',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qyYmX1RXFJQwKWyQ' => 
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
        'as' => 'generated::qyYmX1RXFJQwKWyQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iW5Ga8hzoRVhVqd3' => 
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
        'as' => 'generated::iW5Ga8hzoRVhVqd3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EXMxJNIosNNJXP2Y' => 
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
        'as' => 'generated::EXMxJNIosNNJXP2Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFEQUOgMsNAEJUnE' => 
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
        'as' => 'generated::rFEQUOgMsNAEJUnE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Cm3nQcYh0jGhnL3' => 
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
        'as' => 'generated::9Cm3nQcYh0jGhnL3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LVtN6S6hzMQasqcz' => 
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
        'as' => 'generated::LVtN6S6hzMQasqcz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fzH4YxKtXixL49XF' => 
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
        'as' => 'generated::fzH4YxKtXixL49XF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pm6ikV066OVPbXqL' => 
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
        'as' => 'generated::Pm6ikV066OVPbXqL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QDFXTVpadhqnUyy0' => 
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
        'as' => 'generated::QDFXTVpadhqnUyy0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yv00xbQF3xLgFVdn' => 
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
        'as' => 'generated::yv00xbQF3xLgFVdn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rL8uGr1OP6ojcxoQ' => 
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
        'as' => 'generated::rL8uGr1OP6ojcxoQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qV1oRKeeh1Gk3DzB' => 
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
        'as' => 'generated::qV1oRKeeh1Gk3DzB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e6eNgvnI1ft2YH2E' => 
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
        'as' => 'generated::e6eNgvnI1ft2YH2E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cOn0Oq6hQKOM9OiQ' => 
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
        'as' => 'generated::cOn0Oq6hQKOM9OiQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XyhCYOhzlFIi38uw' => 
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
        'as' => 'generated::XyhCYOhzlFIi38uw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oVDef8leo9OzT4Wz' => 
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
        'as' => 'generated::oVDef8leo9OzT4Wz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yCwxRGvcXErolwsP' => 
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
        'as' => 'generated::yCwxRGvcXErolwsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::067Zghff8d3yD9Ho' => 
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
        'as' => 'generated::067Zghff8d3yD9Ho',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::92wH2aBqxieF0Xow' => 
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
        'as' => 'generated::92wH2aBqxieF0Xow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SR8gJQAUD067EMsH' => 
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
        'as' => 'generated::SR8gJQAUD067EMsH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8DrlstHDaTTxU1TA' => 
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
        'as' => 'generated::8DrlstHDaTTxU1TA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wI9nJggxwPCX25zx' => 
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
        'as' => 'generated::wI9nJggxwPCX25zx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vsgJ4Wlvp0Nnb39K' => 
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
        'as' => 'generated::vsgJ4Wlvp0Nnb39K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tJI9LQ4L2NqwmKUE' => 
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
        'as' => 'generated::tJI9LQ4L2NqwmKUE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Qg0ZB5EhsuoWPJS' => 
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
        'as' => 'generated::3Qg0ZB5EhsuoWPJS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EC0ACGVxg4uXDXUS' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_applications',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_applications',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::EC0ACGVxg4uXDXUS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PbAlK2pqU1cAgdgk' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@requirement_remark',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@requirement_remark',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::PbAlK2pqU1cAgdgk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4zwK1QOiujPpkqdx' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_training_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_training_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::4zwK1QOiujPpkqdx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qVF5pjxVGLJwK2kv' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_expired_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@set_expired_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::qVF5pjxVGLJwK2kv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Z5JieYHkz1SjNCf' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_training_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_training_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::4Z5JieYHkz1SjNCf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x0vW23bAA4L70zaG' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrolled',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_enrolled',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::x0vW23bAA4L70zaG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6VanXGygLIXJ9zA9' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_finished',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_finished',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::6VanXGygLIXJ9zA9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x4P4ouZ6YczBrIwF' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@lock_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@lock_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::x4P4ouZ6YczBrIwF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JtTsoQh3jd5SJklc' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schedules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schedules',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::JtTsoQh3jd5SJklc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xC9eptfYXc5d0WoP' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::xC9eptfYXc5d0WoP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1NMjgf2SCDbV6lyU' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_schedule',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_schedule',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::1NMjgf2SCDbV6lyU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qUeuQnM0bp058nBd' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_modules',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_modules',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::qUeuQnM0bp058nBd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aCyb7bVcVXQc8Pqj' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::aCyb7bVcVXQc8Pqj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FiEDYthXyHD4HHMQ' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::FiEDYthXyHD4HHMQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ms2okcUWzuh9sy0q' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_module_types',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_module_types',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::Ms2okcUWzuh9sy0q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iuZvQc71MIRjuxHW' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module_type',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_module_type',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::iuZvQc71MIRjuxHW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HbM5ZxmeKGHgHXF9' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module_type',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_module_type',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::HbM5ZxmeKGHgHXF9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QlBCGQcCzCsSPriX' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_certificates',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_certificates',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::QlBCGQcCzCsSPriX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DuT3MiZRbEUrTkNA' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_certificate',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_certificate',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::DuT3MiZRbEUrTkNA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rEMz7w2oKSSmQaNe' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_certificate',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_certificate',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::rEMz7w2oKSSmQaNe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iBps5lNB7ARWIttd' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_requirements',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_requirements',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::iBps5lNB7ARWIttd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QbZAplh2sk77IbiF' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::QbZAplh2sk77IbiF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nkTeepiX3bFXbJY1' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_requirement',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_requirement',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::nkTeepiX3bFXbJY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wm0EsXppEy0EMHJl' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schools',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_schools',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::wm0EsXppEy0EMHJl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9bm4y7SLNgEyTDzB' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_school',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_school',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::9bm4y7SLNgEyTDzB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vl61IJvHFCbNa9ip' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_school',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_school',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::vl61IJvHFCbNa9ip',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I8WG7a3dIjzQ4wnE' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_courses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_courses',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::I8WG7a3dIjzQ4wnE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8z1xluu6WFZEMgdL' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::8z1xluu6WFZEMgdL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wOulNe5QOgLVTnBM' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::wOulNe5QOgLVTnBM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x9wpGC5FzqhxzIr1' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_vouchers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_vouchers',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::x9wpGC5FzqhxzIr1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CpHZqQTTeAz5GKqB' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_voucher',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_voucher',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::CpHZqQTTeAz5GKqB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ep5pxrvo3Tt22qUo' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_voucher',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_voucher',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::ep5pxrvo3Tt22qUo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qqRbG7DAEAnHO0xh' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_sponsors',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_sponsors',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::qqRbG7DAEAnHO0xh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64ekv3wYCpEzGKZ7' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_sponsor',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_sponsor',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::64ekv3wYCpEzGKZ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RUT6NINpBboafpN4' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_sponsor',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_sponsor',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::RUT6NINpBboafpN4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YNd0GiEUblCzi7sX' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_licenses',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_licenses',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::YNd0GiEUblCzi7sX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CaJCyk7yuJebR7g7' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_license',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_license',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::CaJCyk7yuJebR7g7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kNbrKVKYhRfaOVGL' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_license',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_license',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::kNbrKVKYhRfaOVGL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4uDL1V7alRResY9k' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_ranks',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_ranks',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::4uDL1V7alRResY9k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iSRBi009w3rQc7W8' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_rank',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_rank',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::iSRBi009w3rQc7W8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RYiU7djiGggBInxl' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_rank',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_rank',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::RYiU7djiGggBInxl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tJrCOPWlMp0gO06F' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_facilitators',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_facilitators',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::tJrCOPWlMp0gO06F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9nbkHF6lvzVwqWZ6' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_facilitator',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_facilitator',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::9nbkHF6lvzVwqWZ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fpqyLTtK0IR7hHWF' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_facilitator',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_facilitator',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::fpqyLTtK0IR7hHWF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::guky0E9XamRegcDP' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_training_fees_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_training_fees_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::guky0E9XamRegcDP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ak98po0qPCLCUq04' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_course_module_fees',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@get_course_module_fees',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::Ak98po0qPCLCUq04',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0DZfA5rRvni0cY8' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course_fee',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@create_or_update_course_fee',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::o0DZfA5rRvni0cY8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fQqV8om4iVoWrN74' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course_fee',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\EnrollmentCtrl@remove_course_fee',
        'namespace' => NULL,
        'prefix' => 'api/admin/enrollment',
        'where' => 
        array (
        ),
        'as' => 'generated::fQqV8om4iVoWrN74',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EbUBjU8UiKTnpX2R' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::EbUBjU8UiKTnpX2R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dv51DnBKTfvDUVBO' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_pre_data',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_pre_data',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::dv51DnBKTfvDUVBO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6msPqDxuYTtPBa5j' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::6msPqDxuYTtPBa5j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KL33bMFVeSQvDgBE' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_copies',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::KL33bMFVeSQvDgBE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zmfudZAZmob4tHiv' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_book_copies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_book_copies',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::zmfudZAZmob4tHiv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::87YPXAqql8T4w9Cz' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_total_reservations',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_total_reservations',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::87YPXAqql8T4w9Cz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GH55eyaZgma2eoSW' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::GH55eyaZgma2eoSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3kLjovFiNClMubXK' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_available_books',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_available_books',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::3kLjovFiNClMubXK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nl2VwtGalXDXBqg5' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_walkin_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_walkin_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::Nl2VwtGalXDXBqg5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PsdlEsURbsVUPYU4' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::PsdlEsURbsVUPYU4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IY6okntrZFhI1TLd' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::IY6okntrZFhI1TLd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kNYZL0MKKiVxR421' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_fines',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_fines',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::kNYZL0MKKiVxR421',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mVWfem7EIy6wFaOU' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::mVWfem7EIy6wFaOU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xVZWoK1eU7dhR7WE' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::xVZWoK1eU7dhR7WE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lvHReTFIKV2mYRCN' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation_that_needs_fine',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_reservation_that_needs_fine',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::lvHReTFIKV2mYRCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2RgBaluTMLObaPc' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_prolongation_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_prolongation_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::b2RgBaluTMLObaPc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6fHQOh5QdreRH6AP' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books_that_protractible',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_books_that_protractible',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::6fHQOh5QdreRH6AP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4JEvQfzsqEFdP9iz' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_renewal_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_renewal_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::4JEvQfzsqEFdP9iz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2RsBBY116hQC8Xhb' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_extension_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@submit_extension_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::2RsBBY116hQC8Xhb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pkgLzs7NH5G0yfpI' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_prolongation_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@update_prolongation_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::pkgLzs7NH5G0yfpI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s28QGHqNUmhGxnGR' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@count_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@count_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::s28QGHqNUmhGxnGR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QVDlfYR1rB97i7uk' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@check_for_book_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@check_for_book_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::QVDlfYR1rB97i7uk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OaiSSyjqi5HWBFLg' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_copy',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_copy',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::OaiSSyjqi5HWBFLg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lHQf4WQpRWVmVUt8' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_book',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_book',
        'namespace' => NULL,
        'prefix' => 'api/admin/books',
        'where' => 
        array (
        ),
        'as' => 'generated::lHQf4WQpRWVmVUt8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::45URtSBlyOo82j7I' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_entries',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_book_entries',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
        'as' => 'generated::45URtSBlyOo82j7I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yon62K5MBrFHTKtJ' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_active_entries',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@get_active_entries',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
        'as' => 'generated::Yon62K5MBrFHTKtJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UyViNQZexwp7Wfvk' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book_entry',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@create_or_update_book_entry',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
        'as' => 'generated::UyViNQZexwp7Wfvk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cno8AnxvqBUkHz8O' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_entry',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\LibraryController@remove_entry',
        'namespace' => NULL,
        'prefix' => 'api/admin/book_entry',
        'where' => 
        array (
        ),
        'as' => 'generated::cno8AnxvqBUkHz8O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OsZ0UeXQ89M4nwRC' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@dormitories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@dormitories',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::OsZ0UeXQ89M4nwRC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l5NVWQqYj2tTz1rV' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::l5NVWQqYj2tTz1rV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rT59UD8F10GxRo3f' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::rT59UD8F10GxRo3f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E9ffEFjeG0TrhTkS' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::E9ffEFjeG0TrhTkS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AaK6zVEPCJej5XW5' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::AaK6zVEPCJej5XW5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6IV6C4DxcNc7r0a5' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_dorms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_dorms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::6IV6C4DxcNc7r0a5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7pxTXhlbNBnp4Fnf' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_rooms',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_rooms',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::7pxTXhlbNBnp4Fnf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OjZ8AV3w5LzBB8m3' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_supplies',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_available_supplies',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::OjZ8AV3w5LzBB8m3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qMr197NVkMgETlYI' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::qMr197NVkMgETlYI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gH2Z0AZYkMTAdL3J' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_all_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_all_requests',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::gH2Z0AZYkMTAdL3J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vsj7WDv5JukVHvWu' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_dorm_request',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_dorm_request',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::Vsj7WDv5JukVHvWu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T5gbYGiXQRcj3rab' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_room',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_room',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::T5gbYGiXQRcj3rab',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M1hDpnhTWVj7j3dn' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dorm_inventories',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dorm_inventories',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::M1hDpnhTWVj7j3dn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kMEV4gAsuGkuZMc8' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_dormitory_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::kMEV4gAsuGkuZMc8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vcZz3eRIARfLzcFn' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::vcZz3eRIARfLzcFn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kPotUUwBG8PiZVvB' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory_inventory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_dormitory_inventory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::kPotUUwBG8PiZVvB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XeXrcMHnbtSA6jOF' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory_stock',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory_stock',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::XeXrcMHnbtSA6jOF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7EbfB9VUiNOXQ3mk' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_dorm_inventory',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::7EbfB9VUiNOXQ3mk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PytwAU7MN9nPpOGm' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@services',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@services',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::PytwAU7MN9nPpOGm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0ln64em0wwlTqV3c' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@create_or_update_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::0ln64em0wwlTqV3c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NnHyDHhTbY5I6EmJ' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@remove_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::NnHyDHhTbY5I6EmJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BSq9mtlodThCrFQU' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::BSq9mtlodThCrFQU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M2Z2Uvi0rO3k3A7u' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_list',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_provided_stock_list',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::M2Z2Uvi0rO3k3A7u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gxOqtqIzyWZubcJv' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_dorm_reservation',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@count_dorm_reservation',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::gxOqtqIzyWZubcJv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YfBhKzElt6K1Vw8K' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_requested_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_requested_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::YfBhKzElt6K1Vw8K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IHw1nSq1pKV5tLR9' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@request_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@request_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::IHw1nSq1pKV5tLR9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FYXmerNVDUKBW9ZE' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_requested_service',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@update_requested_service',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::FYXmerNVDUKBW9ZE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LZIU5H4mGRiuZjg1' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@set_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::LZIU5H4mGRiuZjg1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hhicvcFbq9lkvE9J' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_charges',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_dormitory_charges',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::hhicvcFbq9lkvE9J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kf989V5S3HEclLIR' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@created_or_update_dormitory_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@created_or_update_dormitory_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::Kf989V5S3HEclLIR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KDq19EWUSG0Ox53j' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@cancel_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/dormitory',
        'where' => 
        array (
        ),
        'as' => 'generated::KDq19EWUSG0Ox53j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7M9nHDd8zIityEvR' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_users',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_users',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7M9nHDd8zIityEvR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7jNbYPoVjxn44jvf' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_basic_info',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_basic_info',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7jNbYPoVjxn44jvf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SDTEblqTEEckq6Ja' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_user_activities',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
        'as' => 'generated::SDTEblqTEEckq6Ja',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3N44QIKQdXK37r7Z' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_user',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3N44QIKQdXK37r7Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::16Bfw9OrEieqJdEZ' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_user',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_user',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/user',
        'where' => 
        array (
        ),
        'as' => 'generated::16Bfw9OrEieqJdEZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dl1ESw7pjghP93PK' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_employers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_employers',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/employer',
        'where' => 
        array (
        ),
        'as' => 'generated::dl1ESw7pjghP93PK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mabnXk0otRY8Fiqp' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_employer',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_employer',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/employer',
        'where' => 
        array (
        ),
        'as' => 'generated::mabnXk0otRY8Fiqp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n5193YAP4qxl0D98' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_employer',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_employer',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/employer',
        'where' => 
        array (
        ),
        'as' => 'generated::n5193YAP4qxl0D98',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gafQGDA4zvp9I0Mp' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_positions',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@get_positions',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/position',
        'where' => 
        array (
        ),
        'as' => 'generated::gafQGDA4zvp9I0Mp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Yx6L3BLCkaVUF5xe' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_position',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@create_or_update_position',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/position',
        'where' => 
        array (
        ),
        'as' => 'generated::Yx6L3BLCkaVUF5xe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LsprbadLIcKrc3Lz' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_position',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Masterlist@remove_position',
        'namespace' => NULL,
        'prefix' => 'api/admin/masterlist/position',
        'where' => 
        array (
        ),
        'as' => 'generated::LsprbadLIcKrc3Lz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uy3MlyRSAgxupiOa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/invoice/get_invoices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_invoices',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_invoices',
        'namespace' => NULL,
        'prefix' => 'api/admin/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::Uy3MlyRSAgxupiOa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YwCkyxNhAhryfEqU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/invoice/update_payment_status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@update_payment_status',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@update_payment_status',
        'namespace' => NULL,
        'prefix' => 'api/admin/invoice',
        'where' => 
        array (
        ),
        'as' => 'generated::YwCkyxNhAhryfEqU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CUHZlhesk19wURfd' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_payments',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_payments',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::CUHZlhesk19wURfd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2rN6KgAM0E7PbhV2' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@pay_walkin',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@pay_walkin',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::2rN6KgAM0E7PbhV2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::92GsN6r6ikoftAol' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@verify_payment',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@verify_payment',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::92GsN6r6ikoftAol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bAbZcbeCW9FnlNNQ' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::bAbZcbeCW9FnlNNQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HV1CkXAzC2bfoYNt' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::HV1CkXAzC2bfoYNt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L59MIxllf8rqR5Aw' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::L59MIxllf8rqR5Aw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MUb7fwXweRA8ucqI' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::MUb7fwXweRA8ucqI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OifGzv8mqxSuE6Mv' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_charges_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::OifGzv8mqxSuE6Mv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jIcPoCH8pcjRtC8W' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_charge_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::jIcPoCH8pcjRtC8W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9r1G1mAo1t8O6aU3' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge_category',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_charge_category',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::9r1G1mAo1t8O6aU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n0JBnZt7hl6DqFZS' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_or_numbers',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@get_or_numbers',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::n0JBnZt7hl6DqFZS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X3sZoHHAkp9fQly0' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_or_number',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@create_or_update_or_number',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::X3sZoHHAkp9fQly0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uc3ByuhumABNe2LV' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_or_number',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Cashier@remove_or_number',
        'namespace' => NULL,
        'prefix' => 'api/admin/cashier',
        'where' => 
        array (
        ),
        'as' => 'generated::uc3ByuhumABNe2LV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PER7jEmMa2sWvYXq' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_charges_predata',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PER7jEmMa2sWvYXq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RP4rIhSZty3OlrmG' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\DormitoryController@get_trainee_enrolled_trainings',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RP4rIhSZty3OlrmG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ThtWgIoDLZDxFoll' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@submit_csm',
        'namespace' => NULL,
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ThtWgIoDLZDxFoll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RdooBlWqxoPhWmvJ' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_personal',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
        'as' => 'generated::RdooBlWqxoPhWmvJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l1K1tYV6HeqeVwR7' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@update_password',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
        'as' => 'generated::l1K1tYV6HeqeVwR7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dE2BXHcop3y58ZJO' => 
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
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle:60,1',
          3 => 'user_role:SUPERADMIN,ADMIN-ENROLLMENT,ADMIN-LIBRARY,ADMIN-DORMITORY,CASHIER',
        ),
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\Account@get_activities',
        'namespace' => NULL,
        'prefix' => 'api/admin/my-account',
        'where' => 
        array (
        ),
        'as' => 'generated::dE2BXHcop3y58ZJO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BOnP60B7cMfeKlJz' => 
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
        'as' => 'generated::BOnP60B7cMfeKlJz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0YXw4zQtcn2eEkNK' => 
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
        'as' => 'generated::0YXw4zQtcn2eEkNK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EsYU7sR0cAOXbL9X' => 
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
        'as' => 'generated::EsYU7sR0cAOXbL9X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UXLhOImxaoMEJw1u' => 
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
        'as' => 'generated::UXLhOImxaoMEJw1u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CH7mOQNgWVdmaTfk' => 
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
        'as' => 'generated::CH7mOQNgWVdmaTfk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RNyyosSHdN1BTTub' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005a40000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RNyyosSHdN1BTTub',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
