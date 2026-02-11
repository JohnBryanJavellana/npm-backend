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
            '_route' => 'generated::lloeyWPljcMgOw2M',
=======
            '_route' => 'generated::leXPlVIP0pQcuTG7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::MkRluRWXJpzFfp3M',
=======
            '_route' => 'generated::sNzNwuxP5JJaOjy7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::wVU95rcc9hEr7wzh',
=======
            '_route' => 'generated::VlSwJjyrtQqJVIdh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cpPv3AGHzarfG86t',
=======
            '_route' => 'generated::dgwU5CJTH4J2aTWI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RXDU7M6FMDfJiA1x',
=======
            '_route' => 'generated::fZm3MPGh1rYLJtzl',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::L822hwpxxEkfd3DA',
=======
            '_route' => 'generated::dYCpXlSl9zOoRirc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::duPfiklQIKtIkdrg',
=======
            '_route' => 'generated::xVfNzsIxgmMnq70l',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2qwC50ahgpX1qkoD',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4aAc7n8D95j6xomc',
=======
            '_route' => 'generated::4dvKFPzBmFTublEG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FG4BkkBqZs7Yto2O',
=======
            '_route' => 'generated::hob2MQ5xsHy1flgV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::hYzGu7M8KQ7XgaMp',
=======
            '_route' => 'generated::f9wYeNKJAryzX8lR',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xsHxOWc54hlslHlQ',
=======
            '_route' => 'generated::TswgmQgCV0YGzK6G',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lU0D8DyO8PY8Me7O',
=======
            '_route' => 'generated::5tKPSAwpT9MZHSBY',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::dgcaAGZ6zxKIjOUa',
=======
            '_route' => 'generated::8XHbBk1EEzTATUzn',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::CIyeJElRJY8fQQMc',
=======
            '_route' => 'generated::uxYrvIW69Ajn4Q7h',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Q40T0GlSIVh2EZgL',
=======
            '_route' => 'generated::a9lLKa24NZQkt80Y',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TbBFPVOBYRct00sy',
=======
            '_route' => 'generated::HZBmBml3MxadwH9k',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::M1ru2PoQetGUUTf2',
=======
            '_route' => 'generated::2NVt02cEv8AQSjLG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::qTrGo7orEqOVuNfp',
=======
            '_route' => 'generated::4WCuvUaOyi3pUHfe',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0seqsxQ6a4fo1nH2',
=======
            '_route' => 'generated::KQ8ZFnZBEM4DRgY7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BUny9qhYURsCi7ht',
=======
            '_route' => 'generated::QtZZjFoKU0WuMdKy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tHcC5dEkjOVq73f5',
=======
            '_route' => 'generated::kS2SDRTmUbDQyIeP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::03ZNx6BHABkNYpDw',
=======
            '_route' => 'generated::hLrUbLVNDuU9AIr1',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::VkpYp0zbCjZJf0kB',
=======
            '_route' => 'generated::D5pwmXRe4V4sAY8R',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8BjNwdVW7r5X23Ss',
=======
            '_route' => 'generated::9JQ3phz9gbLtfCSI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nJqWZMwqr1RnGwiQ',
=======
            '_route' => 'generated::gr5gTgkZ154WXxIv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::w1NmpkSDnAszlIgt',
=======
            '_route' => 'generated::MBBqhrGoFEVsMvfC',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::MVw6yTCCMKKf7Uy8',
=======
            '_route' => 'generated::23WaNjURV5z0R8tD',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::TBM5AWFKjbDE6Xub',
=======
            '_route' => 'generated::6aDhGjP24WBsuqcq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BhfP0ZEX1MDshLZh',
=======
            '_route' => 'generated::xypi9KprsuODWVY7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::euktRASxSos8VcXo',
=======
            '_route' => 'generated::rVRDeoX75Ee2j4Kd',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::GYuNDb1bycqtQWDN',
=======
            '_route' => 'generated::zcK2jIC0ODQTYjb5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::EFKlP41ve6OhcBlx',
=======
            '_route' => 'generated::7DirwvjZKAADuRXz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iBa2OfLXwgymB8xX',
=======
            '_route' => 'generated::oKv8D8NdNe0EqyqN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::keuG8gKmct98RX4v',
=======
            '_route' => 'generated::sIYu2k0n2avLsCR7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pESqlLdsaoAMNcFr',
=======
            '_route' => 'generated::rHBGcY8ddQ8T1dkM',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::UGKOgePwXhHhwz6r',
=======
            '_route' => 'generated::xjNYATs4emAP1tXC',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::oIdsxs5C1K2Fgvd7',
=======
            '_route' => 'generated::atptYT1bPMc5IS6R',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Rt9crqssAoP1CRMt',
=======
            '_route' => 'generated::2dkfi3k0mUQA5tU6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::X812do57uJphhTlS',
=======
            '_route' => 'generated::nPw7x1ZqR6UiCE90',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::igbhYwhL8VBNxa7S',
=======
            '_route' => 'generated::lKOn1OsQyiQ6RjKx',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MNdCXBPfocKCf359',
=======
            '_route' => 'generated::C0NtkjR2EbJ9KPrR',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FiXaSgwDFmNFT4xM',
=======
            '_route' => 'generated::3o36AUmb6ejfYqBU',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hArCLnWKGhIfEWgX',
=======
            '_route' => 'generated::coMY2spgJ0J7OcKh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SNFlGSe0yY7caDic',
=======
            '_route' => 'generated::dsfvHd6qlo0KIyDE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SMFjKlvSpYdWbC5d',
=======
            '_route' => 'generated::cdcET620JoybjJku',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JiXhjihWQmiUcRSB',
=======
            '_route' => 'generated::9f24EzHAtuj6lLJp',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lj4qlK9zyJTo71sG',
=======
            '_route' => 'generated::77mRDDeUC51QRYCI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Z2KPUHBLD6trIpPN',
=======
            '_route' => 'generated::7VuVWmq7XOLMI9oK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tE4xT17nB6XydcZH',
=======
            '_route' => 'generated::8Zb1pfA2wxkWien7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::e4BpGR7tDy0p1DkE',
=======
            '_route' => 'generated::FcQ1llSGreRJo26H',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::E8lycCkDDMv6fAxa',
=======
            '_route' => 'generated::gu8dBUKT5SCyXqlu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P8E0Jkl9mcD4X9kQ',
=======
            '_route' => 'generated::FOdhKbziU75nLv7x',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::YnxHgvDEwPi3noHR',
=======
            '_route' => 'generated::PJdbyFlLTjRLvbRG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ERyJufUC9iuTTqkj',
=======
            '_route' => 'generated::XKaOiUhGzjoUQbOI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Bbftzeb0X3pg0vwU',
=======
            '_route' => 'generated::rEeMLaybwSkg9NcO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HKmnjYdvpx5ZQ1Ne',
=======
            '_route' => 'generated::WTHVUA7XXVkSmF2P',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::FjQRma7hwhtOdSsN',
=======
            '_route' => 'generated::idw2aHj6dgzNLI2J',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Lxktvso2rFzhRUBs',
=======
            '_route' => 'generated::kUnJg5SMZpUksS01',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8Lo3ZgqCwcRSet9q',
=======
            '_route' => 'generated::DHPuElbBDXoYw6TI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::jTZKsxmAty2BbkwA',
=======
            '_route' => 'generated::roMwTOACVWEwwV41',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YNEYtYSGBKIvl5lW',
=======
            '_route' => 'generated::MaQV4R77xE6HzlUU',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::odYhhDTlYeVI3NJQ',
=======
            '_route' => 'generated::RRWL7IZ3QaQyi5nz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Gji6HhaLnly0qhmq',
=======
            '_route' => 'generated::YNjefkXUfJB8BQqt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::r9hMbk72goFbZm0F',
=======
            '_route' => 'generated::BjYyWbZzPTmfNG64',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tH9fIIO0TOgHaY6u',
=======
            '_route' => 'generated::6wqnomCbAznvsA2J',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::f0YEOYRUGRIGcct1',
=======
            '_route' => 'generated::WE4mET3NwaPdVX7i',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hK8c7jej8JKlYWKA',
=======
            '_route' => 'generated::ylCewmCWZad1JMTa',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5SlTcqaXaLhEMtWY',
=======
            '_route' => 'generated::mnIu29F6tmP7NEqN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::FJ6x5O2RjuHr4dT1',
=======
            '_route' => 'generated::Rh3YIwVyFzWpZyMS',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::hXOmefzBxLPbTjEv',
=======
            '_route' => 'generated::dPKUqyNa7w31phnl',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::f3kU1te2f5p7ODAt',
=======
            '_route' => 'generated::AQjW3j8mE3CkbKyW',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::4OX1S8zxCTd7Li1u',
=======
            '_route' => 'generated::bgV0yMqo7ji8nlZH',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::m7JC3OoQCDifL5Rs',
=======
            '_route' => 'generated::Lh0DsKI7w3DqOVc6',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zcuWz95gSQQVdmCu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WFn6SdbUshLRunbK',
=======
            '_route' => 'generated::D1EqbLQcXHvAg0lP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xVs5hS8eWZfMTZEK',
=======
            '_route' => 'generated::0aKowz3Xrq995CPf',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::o8ICsfzaRMJsrJzy',
=======
            '_route' => 'generated::N8873gJScdmjtswv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3lOxYsE5qkKXSUUT',
=======
            '_route' => 'generated::rTrhLP7aiV4WjK17',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BaR8QRgEjje2QD7n',
=======
            '_route' => 'generated::Yf7f363DesD6VUVp',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::n2Txb4NeufDh6zMK',
=======
            '_route' => 'generated::0qaNVd9ZR8z2Ls2E',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::iCtE1tA94z6x3Gic',
=======
            '_route' => 'generated::we7krYXC1xvtwa8m',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::SS8q47BjJ6IRvH0r',
=======
            '_route' => 'generated::JHfKtiBLKRD6fnnA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JxE8PeHHd2Vrk5Zq',
=======
            '_route' => 'generated::cMZoHioRlKm7GmUL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::2cTgsiVeeyKchBwY',
=======
            '_route' => 'generated::92QijHt8UyM3tk1S',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::lqoPsXF2kbwxquVh',
=======
            '_route' => 'generated::Eikjo4B9dZ0Vux3O',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Ljb7tSNKxMWVWe7f',
=======
            '_route' => 'generated::xpgInOm2AJiv0Ijz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::oamePevXkhYAFHAg',
=======
            '_route' => 'generated::fUdWJwGIBSx2rEwO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BwAnb5pDf5n8NNl9',
=======
            '_route' => 'generated::gDdzhJa9bR1D6CKw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::kR39HtCoNpLXh81j',
=======
            '_route' => 'generated::ziJOTWqVbMlH29Vb',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wWzZDnl4TPe0Qlrv',
=======
            '_route' => 'generated::MP8C1GtXa3D3ypA2',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::gMUk6lNxAp9LEHUe',
=======
            '_route' => 'generated::AleTfGMB6RLN5FsG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sw0ksd0yuz0xbU0P',
=======
            '_route' => 'generated::va4KTrFZnXmxVF4P',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::YOO1stmxGGZBYPFf',
=======
            '_route' => 'generated::SaKUJIyPTaC5XjHL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JkFESldh1LyLhjsU',
=======
            '_route' => 'generated::IcihJ4mXKmLmAgh5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::B7j65Q9NZZEVDjVl',
=======
            '_route' => 'generated::ZHW39qpX8c1jJUa9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::RZKBCpwSAkxC3VU0',
=======
            '_route' => 'generated::v9EoAfbN9CWLmF7j',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::eDo8yDSnKmUReIxH',
=======
            '_route' => 'generated::8ZhGGxWjh0Q2X6il',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::q7VlggmxxhHc89B9',
=======
            '_route' => 'generated::wVC4muEuMyCTdn8s',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::Tzu97EiOx6ob1EhX',
=======
            '_route' => 'generated::MvfzlQgEegQUozYG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::phDgCsKYYLrR2Xsy',
=======
            '_route' => 'generated::kX7yQUCbmB5oC4K4',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::E15dFTwue5JTffJJ',
=======
            '_route' => 'generated::tpVQoE4vDPZShnZh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LC341L17U4h0LEzh',
=======
            '_route' => 'generated::jMGzxM7HHA52uw9y',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::KIy3JyLIWPflsBvp',
=======
            '_route' => 'generated::7rp8pi6gBpMlmKqI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KQdQdBoLIDpi7mpd',
=======
            '_route' => 'generated::i8Qe0iKSregDzw0g',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::NwnjsGITDTFv6ws5',
=======
            '_route' => 'generated::RBAZ5AUnpzRexhXV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YdbHqzGfhcpp95LW',
=======
            '_route' => 'generated::5h7fxRHyS7vaCN2z',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::z392IpUgMQSfMMjU',
=======
            '_route' => 'generated::j6LMPyNSeu1Fnae9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::2zYk19rh280oUjmP',
=======
            '_route' => 'generated::DZdZ78KSgjs6Jjyk',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::5LEpEmpUoLsjwu4j',
=======
            '_route' => 'generated::rl65Yk9D6NiEgFHu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::KAOCYt3mT71e61Ak',
=======
            '_route' => 'generated::PXu7jfBh29qUJ0T8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::gNjGVrYcfLtvktbK',
=======
            '_route' => 'generated::sI4zL56ikb7lrffO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ArhA8nNWQzEC8Ml1',
=======
            '_route' => 'generated::Z0vUkCehPzmXwzrt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::0ecDbAUKooqASmoP',
=======
            '_route' => 'generated::hcXKGENkBiOYbrRs',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::2dwImAOzgksm8t9Y',
=======
            '_route' => 'generated::2LVMPMNNLSkl7Z2F',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::13ZN9Bdn5KN4IZZG',
=======
            '_route' => 'generated::T1FhHbFrOWHy9mF9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::vPlcswgp5ijHG87H',
=======
            '_route' => 'generated::D6V5RHCuXfkAN2F0',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::P5UZJVKYqdv9uP1j',
=======
            '_route' => 'generated::6cAbSzfOebzTZAQX',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::9LOPoyt4CsrQgdbv',
=======
            '_route' => 'generated::c1VVo9Wo6HqwqMEo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lBieXeSg4qhYBQfs',
=======
            '_route' => 'generated::xsNRCmmLqqWRr2nK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gV6zCA0gZf1ixN2b',
=======
            '_route' => 'generated::zKSt6zyUvtE9rQk5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::t1HL3IlzkM0aRI1k',
=======
            '_route' => 'generated::e45jcAF4bdXsNUVt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qZnD2O2n7HRO2awZ',
=======
            '_route' => 'generated::b7ZsRvy4op2YSIyA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nFlVwMsgqSiaOIfZ',
=======
            '_route' => 'generated::TlKDkTtf6BWothzP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::qLpIs8tkoZsufE6c',
=======
            '_route' => 'generated::4AvudUxvXl4mSakV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::sGRaBbBr0Gkwdhtb',
=======
            '_route' => 'generated::PqddW4gN9MGIoiP5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DLXdh1GrRtHDjIPI',
=======
            '_route' => 'generated::4xUbbLU6m7IjzYkA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Kcr55MJtmmlhql81',
=======
            '_route' => 'generated::5wm4jbx6FmbjG5Ue',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rIlu6SSqkix2vMQh',
=======
            '_route' => 'generated::sSaFJjUfNGZcJu7Z',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MVDE3Y9TTMixwWf9',
=======
            '_route' => 'generated::PUCWPGKxruhLMJN4',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::kBvbOpBbqcZpHAVR',
=======
            '_route' => 'generated::6teADFTgcTvo0N84',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cRKbYRGv6iAyxY4z',
=======
            '_route' => 'generated::FOSKkRceLSwZallo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::GfDzeNrcuY4VNQS3',
=======
            '_route' => 'generated::xKImeczrLamSuj7s',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::mB03QtxcehL2iP3S',
=======
            '_route' => 'generated::snFi83dLxp6XaKMy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JsQJReRrGTypCNLb',
=======
            '_route' => 'generated::GPZDc2WcTHSNIY5C',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::rxwKXQK9VkT0EOUe',
=======
            '_route' => 'generated::hNwVcCgvn4hpZ6zZ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6xtGKtw0iTXxBJSc',
=======
            '_route' => 'generated::LYMQDPEWW8nUi9cZ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::JJZCFxGdHo3Rg1Yp',
=======
            '_route' => 'generated::dzIdH7HUYTZSfSgZ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::cVrNhfeSorQxpNeq',
=======
            '_route' => 'generated::QDu8Z0g4Ut6B3Vpv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::WzdSYkALp8iaukUb',
=======
            '_route' => 'generated::YEDizHLNgYrrvZrh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::tJCK7q2eLrs7G4Pf',
=======
            '_route' => 'generated::EVNPA6rPvYNZybsE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::rB0GqvYNSCq8M8kw',
=======
            '_route' => 'generated::ns8rc67EOohOqEmL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::MybFj0N0KvD4IjIA',
=======
            '_route' => 'generated::bGj8OJDt5RmtfS3A',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::G4He15mQA8czgc7g',
=======
            '_route' => 'generated::PsjTZHennXrt3AZo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::nXUggLMjUDLeKP8X',
=======
            '_route' => 'generated::sa59mwQziJimE9ul',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::gz49gAOXqRFSRvhR',
=======
            '_route' => 'generated::ElibaZNIMyVQLwN7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5vpe14aYneF4ixNV',
=======
            '_route' => 'generated::5o75gixg1LKU56Nh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::wCmifFIYqc2OAez5',
=======
            '_route' => 'generated::IaxRZPPmCdgnnOTE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::97wCfhKhr0EjilTB',
=======
            '_route' => 'generated::12XEphgWOctzgywr',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::zmKFBcZcqiY8WPYS',
=======
            '_route' => 'generated::XBmeCNHZt9C8ZE0x',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::y4iWYsuRx839KkC1',
=======
            '_route' => 'generated::iXecpJznyn1pIGeb',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::F1WvHlouLqLJJ4n3',
=======
            '_route' => 'generated::7wRppeBXbqGt6dYF',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::g52aoBHcVCwI1sQw',
=======
            '_route' => 'generated::ArtWBGebcEu5elcE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YTvZJzJl6PVHORMq',
=======
            '_route' => 'generated::TEm8dMyEEQodsvvc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::HuSCVgciDk2hGWBu',
=======
            '_route' => 'generated::xo7fNLYwZxmsESBz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::CRdhl8TH4ZW39oop',
=======
            '_route' => 'generated::5ufgf7IAAVkPAIMc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wOdqRptwfqDv7R4Q',
=======
            '_route' => 'generated::baYXdOLtiEQz7cUN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::1MZ2gPHkeoanr7np',
=======
            '_route' => 'generated::NWYc1gzqtO1ICmDw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::3RKSAqcdK1tovDHf',
=======
            '_route' => 'generated::pQjWoNLuwakobW6V',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::lOs23zulAplmCi2K',
=======
            '_route' => 'generated::ODiSqGDmxQG9loPn',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::wulMbJgqokYO5Gq6',
=======
            '_route' => 'generated::1y7lVtgCR4WNey3K',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::T2tPlgR3ftZqj5aD',
=======
            '_route' => 'generated::6Zq8dT2G4XLjFno7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8RnM9JSeC2Bp4QhD',
=======
            '_route' => 'generated::WmT8zZUZV3gqMpE1',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::6vD8Rt6TUV4Onuq9',
=======
            '_route' => 'generated::uRo45HvxgjJwAGWV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::32A6nNOO4WFGIFhI',
=======
            '_route' => 'generated::QRfYntfc1dH5v6Tc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::GYjCIWxLe81S2McC',
=======
            '_route' => 'generated::4YbGEWQOFL0s8rmi',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::OfAQwVsdABlQiIzB',
=======
            '_route' => 'generated::mq56NkpiVfFT7ZHu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Je91idpgRUGm6yMI',
=======
            '_route' => 'generated::fkd90thmWarqwd1d',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Vi9IJLCGPL2NPoq7',
=======
            '_route' => 'generated::BjfdVyDDnqWFwMyq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::g5AjdrOHWIsZIiZB',
=======
            '_route' => 'generated::RrilpUpTRe76rYSr',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::u73IvDEXTzutUDex',
=======
            '_route' => 'generated::mIaDUdhGPkOkTFZ0',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::OOIflPabEb2aP5ZA',
=======
            '_route' => 'generated::ZODbud3LgDC0hFhE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::A6ukqnLkTFHf35Xj',
=======
            '_route' => 'generated::966czZSNCEPizNy5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::BiFaxf9P4OFByyQj',
=======
            '_route' => 'generated::7D3LJW4sXxrqfEkT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ChxF8veZjLZsEiVb',
=======
            '_route' => 'generated::Wt3zeEao5Wbp4ym7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5IoSfsBW8aO4zbkX',
=======
            '_route' => 'generated::A9HU5aggw1fz7mfw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::Z9X7UlEIgItH2Fba',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/recreational-activity/get_recreational_requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DierpbkeIAuICUl6',
=======
            '_route' => 'generated::LX30xbiybXAmxInq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
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
            '_route' => 'generated::qhMwSNX43elpuF6r',
=======
            '_route' => 'generated::tRMTEDFsfqyrns2F',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::Qm9L5KOz8Kf2lKud',
=======
            '_route' => 'generated::OQjdSllP40KGmRD7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::6iJ3hmVWrdNbAyxK',
=======
            '_route' => 'generated::mw9zamDA4sSCYrgN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::bObAUwFvbYZb17lL',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::LGlcQAQ6nPUNK8ec',
=======
            '_route' => 'generated::R1KUz7Ni17tGz0iq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::uNTcxdBI5GdwvLZS',
=======
            '_route' => 'generated::Zn1GlcUY93JLVeBf',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pjSqfAukLeTbaKMh',
=======
            '_route' => 'generated::5onkIDDwcLp20onT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pwbOyNgCr6KPxM6e',
=======
            '_route' => 'generated::4TUkE9lbOpAVMBPz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::xv9fkBAANwSXE04R',
=======
            '_route' => 'generated::DKezsJADPR44Szde',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pc0GHpB0GWH1Kgxy',
=======
            '_route' => 'generated::Xc3yBSPjiLK95pYb',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5GqkFIqkceDTQAYD',
=======
            '_route' => 'generated::0RLUOFFpBHnqSa0b',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::pxDFBTnMxrFjQluL',
=======
            '_route' => 'generated::fo4GWu4MnORYAuEv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::3aVLmSO4fL0ymzft',
=======
            '_route' => 'generated::ZQ3fMtnmH2tLLmSh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::ba1bNgP10bXCbErD',
=======
            '_route' => 'generated::IWealWMsBJVLYWTN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::8yHTpNxqXx9tJ7nh',
=======
            '_route' => 'generated::sqCNZe0KVg4V22S6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::DsAMPCYz2vy4ygKb',
=======
            '_route' => 'generated::gkQvv0F4u7eT7JQy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::l3PiqKW4AgUKm1eS',
=======
            '_route' => 'generated::aeA8V6aK90tBNSJO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::ACkf0ugAuIAZexlJ',
=======
            '_route' => 'generated::jMGQSnKxYy2u9AaK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
          ),
          1 => NULL,
          2 => 
          array (
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
            '_route' => 'generated::gVOHx9whjsNCt9g7',
=======
            '_route' => 'generated::gQOz9JU4Nbi0c0bL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::uBYH5yJW7YyzBejo',
=======
            '_route' => 'generated::DdGJXfcO1te05S9b',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::wua6YoaLQIlQYlKp',
=======
            '_route' => 'generated::iPgqxsZaiYYMV29r',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::WUtdoIhG9KcbMbQu',
=======
            '_route' => 'generated::cTwj3K5q7GuIS3Io',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::G6i7oozNywlqX9TV',
=======
            '_route' => 'generated::tH7UpFOn4E4f4avl',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::FIVuQ8ATJlT0zU2H',
=======
            '_route' => 'generated::PyZfCYpCsGvBiDzD',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::f9LhvHkGfHA1CRLe',
=======
            '_route' => 'generated::TDe8dPvRRtDe0DvD',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::iaieJaGxAgXMOKiG',
=======
            '_route' => 'generated::DJV3zzxbXhF5oUSE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::TJnV4fJxx3wxHrKf',
=======
            '_route' => 'generated::5n5P5tykzklfZSXF',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::ymCmZsek5n5Pnqiz',
=======
            '_route' => 'generated::JlogUfysrSEeZdX9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::Wgtt0nR5PXNBmau6',
=======
            '_route' => 'generated::n9pw9fuFlrmEG7yM',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::bq2AyyM5rydqUqqA',
=======
            '_route' => 'generated::quxzrtePMnIafAF8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::GCBmPnDCE8q9BgGR',
=======
            '_route' => 'generated::ziYhza6nOPN8qolB',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::Wkid2uVWH6NrBZiq',
=======
            '_route' => 'generated::R58WYjxhckFC9Grt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::JMUA7SchrvhlgnjU',
=======
            '_route' => 'generated::Pl3MS0OGWjluJ9Mz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::SgIELzdtiGw4Rs8I',
=======
            '_route' => 'generated::cZQRWDTDR4T1iFbz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::K800bOxajTK7SQVs',
=======
            '_route' => 'generated::aKSpSgfbYevGr8Lu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::RfSLSBmiveDYnE09',
=======
            '_route' => 'generated::TB3SWlwDx8Okn6TT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::gvTaLVHaHfxFPsYe',
=======
            '_route' => 'generated::1GmIyVuJijUq6WdX',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::AavAFeymGghAGRda',
=======
            '_route' => 'generated::wnqXSNztmFshp4Pa',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::PYQ8yt9If8mrBwM0',
=======
            '_route' => 'generated::0Tt7GXSG4garVgAx',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::NfDQDSHPaACuePU7',
=======
            '_route' => 'generated::u0U7ghqsln2CNv5H',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::H1rmFNGK0NfRGUA8',
=======
            '_route' => 'generated::ArbyK4FjFzYNiRLM',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::yp0nUUz5rSSJ6hIQ',
=======
            '_route' => 'generated::Kyi4HeDXNOfHDpJw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::xhdkEzPu7rOZ5sMZ',
=======
            '_route' => 'generated::i9MVZNgV7ft8HWZE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::eJR70A4cfuib0LZo',
=======
            '_route' => 'generated::Xos1fa0O2TySBCGP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::PJRFBMncMcfLUJAi',
=======
            '_route' => 'generated::Ue4UbOTGpbabIDp8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::9ONKX3kcdcwFjwfj',
=======
            '_route' => 'generated::dUw9nwaFzo9uT3F4',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::aD4Ez3SA8eBPZ8I2',
=======
            '_route' => 'generated::1cDSJvK4TAZJTpG6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::4FLXqfiXSBSycV0k',
=======
            '_route' => 'generated::yMkgqFTI18lO4nQq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::sBZAmWwgbyT3GYcL',
=======
            '_route' => 'generated::z3ITxGaNExH8y9U0',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::fBKMEwP92xEIwKi9',
=======
            '_route' => 'generated::H9vJZQNmQzodP2Ql',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::LBolHCNPVDN5MdUO',
=======
            '_route' => 'generated::Pqn0mySGeDzxhpIw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::QDUpZaKPwkjrN4fw',
=======
            '_route' => 'generated::9vPfTxzyBUuwST1q',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::9sxaTf5XrooF8Z26',
=======
            '_route' => 'generated::Ldid45ABhIITqccz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::uPNvpaiV60PEIyqA',
=======
            '_route' => 'generated::TSoH3cr04dIrt0CA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::YzDPe14WOAXioV3a',
=======
            '_route' => 'generated::Pe2cHihvU2NKqgQy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::AKCaT1tyimmceMQj',
=======
            '_route' => 'generated::rtSYGnb9gUwEEFpW',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::8pYTsvK8N1BBCkMf',
=======
            '_route' => 'generated::HpGJrUKh978zYvvn',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::NqbvmzXfqvoMPOOT',
=======
            '_route' => 'generated::3JL4IuNg2C4m4Lls',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::PvootXm3QXLosaj3',
=======
            '_route' => 'generated::GiFaN7X2cJgJGRKR',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::60VlqJLPAiZixoMl',
=======
            '_route' => 'generated::MEf7WhUyiIigi3JK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::9fPs79QP7sXcJ4Wv',
=======
            '_route' => 'generated::7Te5d87uxx6Lb7rS',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::ECBNVP3UecDW8XLD',
=======
            '_route' => 'generated::rT2QW4fSrR2rTDZT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::RD6sRMB7MBwr5yDy',
=======
            '_route' => 'generated::w77kz6sU0E5dzLcc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::Xlvg6Mv0jQmsSqbY',
=======
            '_route' => 'generated::dTJkg9vE8g8X4K1o',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::BlHexkwJNVLSUtAy',
=======
            '_route' => 'generated::YZsXtGeh5XkxJwf1',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::8lOff94L82xcOO1h',
=======
            '_route' => 'generated::a1Nungx0SBWRW8ud',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::fXh2YFyEKM9YSJSJ',
=======
            '_route' => 'generated::gosa0vqONBQ04a9X',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::5j9Fdfb85hUznIgE',
=======
            '_route' => 'generated::hxT9JDaTIoQho2sm',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::5tUeF3bZ2XcLEy9a',
=======
            '_route' => 'generated::s8MKCx2VxfmsNR4s',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::lUaLC00EHzKdtjfD',
=======
            '_route' => 'generated::mw9qD7HP4EEn9SM6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::TJsZSALHkuhii64q',
=======
            '_route' => 'generated::HTBKw1nrdPMLOlUN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::TTNMeyyBJlrpoic9',
=======
            '_route' => 'generated::LfeKSzdYKKWshtW8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::JWVAwteQkz53bdQV',
=======
            '_route' => 'generated::tF9OFS1LirvNHu13',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::rw8axe7dbwW9g1jz',
=======
            '_route' => 'generated::jSf6GjORRatsaR4X',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::7nb4u0RCbPXgVIrT',
=======
            '_route' => 'generated::yWj9m60hwggHTJQe',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::1KAuIDk5EJZzADkn',
=======
            '_route' => 'generated::yj9jVK3gvd9LYtOo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::5qRVF9LbmlOnBmNE',
=======
            '_route' => 'generated::56c7YvB44ZPbN3IH',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::9KUfePYcBNmnu7rP',
=======
            '_route' => 'generated::HsJxlAWqj64yHIAx',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::blPnDJWVzJl9apU4',
=======
            '_route' => 'generated::avuCO7VBsMtvlcC6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::ICmDGEC4H9G1Ne4i',
=======
            '_route' => 'generated::RdqPvxVGvr04GeEF',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
            '_route' => 'generated::dVzIhCu6W3xwVXIV',
=======
            '_route' => 'generated::NzenDxlxRI04H5kQ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
    'generated::lloeyWPljcMgOw2M' => 
=======
    'generated::leXPlVIP0pQcuTG7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::lloeyWPljcMgOw2M',
=======
        'as' => 'generated::leXPlVIP0pQcuTG7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MkRluRWXJpzFfp3M' => 
=======
    'generated::sNzNwuxP5JJaOjy7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::MkRluRWXJpzFfp3M',
=======
        'as' => 'generated::sNzNwuxP5JJaOjy7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wVU95rcc9hEr7wzh' => 
=======
    'generated::VlSwJjyrtQqJVIdh' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::wVU95rcc9hEr7wzh',
=======
        'as' => 'generated::VlSwJjyrtQqJVIdh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::cpPv3AGHzarfG86t' => 
=======
    'generated::dgwU5CJTH4J2aTWI' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::cpPv3AGHzarfG86t',
=======
        'as' => 'generated::dgwU5CJTH4J2aTWI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RXDU7M6FMDfJiA1x' => 
=======
    'generated::fZm3MPGh1rYLJtzl' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::RXDU7M6FMDfJiA1x',
=======
        'as' => 'generated::fZm3MPGh1rYLJtzl',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::L822hwpxxEkfd3DA' => 
=======
    'generated::dYCpXlSl9zOoRirc' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::L822hwpxxEkfd3DA',
=======
        'as' => 'generated::dYCpXlSl9zOoRirc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::duPfiklQIKtIkdrg' => 
=======
    'generated::xVfNzsIxgmMnq70l' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getUserRecRequest',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Trainee\\TraineeRecreational@getUserRecRequest',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::duPfiklQIKtIkdrg',
=======
        'as' => 'generated::xVfNzsIxgmMnq70l',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4aAc7n8D95j6xomc' => 
=======
    'generated::2qwC50ahgpX1qkoD' => 
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
        'as' => 'generated::2qwC50ahgpX1qkoD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4dvKFPzBmFTublEG' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a20000000000000000";}}',
=======
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058f0000000000000000";}}',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4aAc7n8D95j6xomc',
=======
        'as' => 'generated::4dvKFPzBmFTublEG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FG4BkkBqZs7Yto2O' => 
=======
    'generated::hob2MQ5xsHy1flgV' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a40000000000000000";}}',
=======
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005910000000000000000";}}',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::FG4BkkBqZs7Yto2O',
=======
        'as' => 'generated::hob2MQ5xsHy1flgV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hYzGu7M8KQ7XgaMp' => 
=======
    'generated::f9wYeNKJAryzX8lR' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::hYzGu7M8KQ7XgaMp',
=======
        'as' => 'generated::f9wYeNKJAryzX8lR',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xsHxOWc54hlslHlQ' => 
=======
    'generated::TswgmQgCV0YGzK6G' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::xsHxOWc54hlslHlQ',
=======
        'as' => 'generated::TswgmQgCV0YGzK6G',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gVOHx9whjsNCt9g7' => 
=======
    'generated::gQOz9JU4Nbi0c0bL' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::gVOHx9whjsNCt9g7',
=======
        'as' => 'generated::gQOz9JU4Nbi0c0bL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lU0D8DyO8PY8Me7O' => 
=======
    'generated::5tKPSAwpT9MZHSBY' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::lU0D8DyO8PY8Me7O',
=======
        'as' => 'generated::5tKPSAwpT9MZHSBY',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dgcaAGZ6zxKIjOUa' => 
=======
    'generated::8XHbBk1EEzTATUzn' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::dgcaAGZ6zxKIjOUa',
=======
        'as' => 'generated::8XHbBk1EEzTATUzn',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CIyeJElRJY8fQQMc' => 
=======
    'generated::uxYrvIW69Ajn4Q7h' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::CIyeJElRJY8fQQMc',
=======
        'as' => 'generated::uxYrvIW69Ajn4Q7h',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Q40T0GlSIVh2EZgL' => 
=======
    'generated::a9lLKa24NZQkt80Y' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Q40T0GlSIVh2EZgL',
=======
        'as' => 'generated::a9lLKa24NZQkt80Y',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TbBFPVOBYRct00sy' => 
=======
    'generated::HZBmBml3MxadwH9k' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::TbBFPVOBYRct00sy',
=======
        'as' => 'generated::HZBmBml3MxadwH9k',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uBYH5yJW7YyzBejo' => 
=======
    'generated::DdGJXfcO1te05S9b' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::uBYH5yJW7YyzBejo',
=======
        'as' => 'generated::DdGJXfcO1te05S9b',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WUtdoIhG9KcbMbQu' => 
=======
    'generated::cTwj3K5q7GuIS3Io' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::WUtdoIhG9KcbMbQu',
=======
        'as' => 'generated::cTwj3K5q7GuIS3Io',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::M1ru2PoQetGUUTf2' => 
=======
    'generated::2NVt02cEv8AQSjLG' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::M1ru2PoQetGUUTf2',
=======
        'as' => 'generated::2NVt02cEv8AQSjLG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qTrGo7orEqOVuNfp' => 
=======
    'generated::4WCuvUaOyi3pUHfe' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::qTrGo7orEqOVuNfp',
=======
        'as' => 'generated::4WCuvUaOyi3pUHfe',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0seqsxQ6a4fo1nH2' => 
=======
    'generated::KQ8ZFnZBEM4DRgY7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::0seqsxQ6a4fo1nH2',
=======
        'as' => 'generated::KQ8ZFnZBEM4DRgY7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BUny9qhYURsCi7ht' => 
=======
    'generated::QtZZjFoKU0WuMdKy' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::BUny9qhYURsCi7ht',
=======
        'as' => 'generated::QtZZjFoKU0WuMdKy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tHcC5dEkjOVq73f5' => 
=======
    'generated::kS2SDRTmUbDQyIeP' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::tHcC5dEkjOVq73f5',
=======
        'as' => 'generated::kS2SDRTmUbDQyIeP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::03ZNx6BHABkNYpDw' => 
=======
    'generated::hLrUbLVNDuU9AIr1' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::03ZNx6BHABkNYpDw',
=======
        'as' => 'generated::hLrUbLVNDuU9AIr1',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::VkpYp0zbCjZJf0kB' => 
=======
    'generated::D5pwmXRe4V4sAY8R' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::VkpYp0zbCjZJf0kB',
=======
        'as' => 'generated::D5pwmXRe4V4sAY8R',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wua6YoaLQIlQYlKp' => 
=======
    'generated::iPgqxsZaiYYMV29r' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::wua6YoaLQIlQYlKp',
=======
        'as' => 'generated::iPgqxsZaiYYMV29r',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8BjNwdVW7r5X23Ss' => 
=======
    'generated::9JQ3phz9gbLtfCSI' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::8BjNwdVW7r5X23Ss',
=======
        'as' => 'generated::9JQ3phz9gbLtfCSI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nJqWZMwqr1RnGwiQ' => 
=======
    'generated::gr5gTgkZ154WXxIv' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::nJqWZMwqr1RnGwiQ',
=======
        'as' => 'generated::gr5gTgkZ154WXxIv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::w1NmpkSDnAszlIgt' => 
=======
    'generated::MBBqhrGoFEVsMvfC' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::w1NmpkSDnAszlIgt',
=======
        'as' => 'generated::MBBqhrGoFEVsMvfC',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MVw6yTCCMKKf7Uy8' => 
=======
    'generated::23WaNjURV5z0R8tD' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::MVw6yTCCMKKf7Uy8',
=======
        'as' => 'generated::23WaNjURV5z0R8tD',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TBM5AWFKjbDE6Xub' => 
=======
    'generated::6aDhGjP24WBsuqcq' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::TBM5AWFKjbDE6Xub',
=======
        'as' => 'generated::6aDhGjP24WBsuqcq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BhfP0ZEX1MDshLZh' => 
=======
    'generated::xypi9KprsuODWVY7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::BhfP0ZEX1MDshLZh',
=======
        'as' => 'generated::xypi9KprsuODWVY7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::G6i7oozNywlqX9TV' => 
=======
    'generated::tH7UpFOn4E4f4avl' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::G6i7oozNywlqX9TV',
=======
        'as' => 'generated::tH7UpFOn4E4f4avl',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iaieJaGxAgXMOKiG' => 
=======
    'generated::DJV3zzxbXhF5oUSE' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::iaieJaGxAgXMOKiG',
=======
        'as' => 'generated::DJV3zzxbXhF5oUSE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::euktRASxSos8VcXo' => 
=======
    'generated::rVRDeoX75Ee2j4Kd' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::euktRASxSos8VcXo',
=======
        'as' => 'generated::rVRDeoX75Ee2j4Kd',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GYuNDb1bycqtQWDN' => 
=======
    'generated::zcK2jIC0ODQTYjb5' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::GYuNDb1bycqtQWDN',
=======
        'as' => 'generated::zcK2jIC0ODQTYjb5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::EFKlP41ve6OhcBlx' => 
=======
    'generated::7DirwvjZKAADuRXz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::EFKlP41ve6OhcBlx',
=======
        'as' => 'generated::7DirwvjZKAADuRXz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iBa2OfLXwgymB8xX' => 
=======
    'generated::oKv8D8NdNe0EqyqN' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::iBa2OfLXwgymB8xX',
=======
        'as' => 'generated::oKv8D8NdNe0EqyqN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::keuG8gKmct98RX4v' => 
=======
    'generated::sIYu2k0n2avLsCR7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::keuG8gKmct98RX4v',
=======
        'as' => 'generated::sIYu2k0n2avLsCR7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pESqlLdsaoAMNcFr' => 
=======
    'generated::rHBGcY8ddQ8T1dkM' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::pESqlLdsaoAMNcFr',
=======
        'as' => 'generated::rHBGcY8ddQ8T1dkM',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FIVuQ8ATJlT0zU2H' => 
=======
    'generated::PyZfCYpCsGvBiDzD' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::FIVuQ8ATJlT0zU2H',
=======
        'as' => 'generated::PyZfCYpCsGvBiDzD',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TJnV4fJxx3wxHrKf' => 
=======
    'generated::5n5P5tykzklfZSXF' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::TJnV4fJxx3wxHrKf',
=======
        'as' => 'generated::5n5P5tykzklfZSXF',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::UGKOgePwXhHhwz6r' => 
=======
    'generated::xjNYATs4emAP1tXC' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::UGKOgePwXhHhwz6r',
=======
        'as' => 'generated::xjNYATs4emAP1tXC',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oIdsxs5C1K2Fgvd7' => 
=======
    'generated::atptYT1bPMc5IS6R' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::oIdsxs5C1K2Fgvd7',
=======
        'as' => 'generated::atptYT1bPMc5IS6R',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Rt9crqssAoP1CRMt' => 
=======
    'generated::2dkfi3k0mUQA5tU6' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Rt9crqssAoP1CRMt',
=======
        'as' => 'generated::2dkfi3k0mUQA5tU6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::X812do57uJphhTlS' => 
=======
    'generated::nPw7x1ZqR6UiCE90' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::X812do57uJphhTlS',
=======
        'as' => 'generated::nPw7x1ZqR6UiCE90',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ymCmZsek5n5Pnqiz' => 
=======
    'generated::JlogUfysrSEeZdX9' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::ymCmZsek5n5Pnqiz',
=======
        'as' => 'generated::JlogUfysrSEeZdX9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Wgtt0nR5PXNBmau6' => 
=======
    'generated::n9pw9fuFlrmEG7yM' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Wgtt0nR5PXNBmau6',
=======
        'as' => 'generated::n9pw9fuFlrmEG7yM',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
    'generated::bq2AyyM5rydqUqqA' => 
=======
    'generated::quxzrtePMnIafAF8' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::bq2AyyM5rydqUqqA',
=======
        'as' => 'generated::quxzrtePMnIafAF8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
    'generated::f9LhvHkGfHA1CRLe' => 
=======
    'generated::TDe8dPvRRtDe0DvD' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::f9LhvHkGfHA1CRLe',
=======
        'as' => 'generated::TDe8dPvRRtDe0DvD',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::igbhYwhL8VBNxa7S' => 
=======
    'generated::lKOn1OsQyiQ6RjKx' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::igbhYwhL8VBNxa7S',
=======
        'as' => 'generated::lKOn1OsQyiQ6RjKx',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MNdCXBPfocKCf359' => 
=======
    'generated::C0NtkjR2EbJ9KPrR' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::MNdCXBPfocKCf359',
=======
        'as' => 'generated::C0NtkjR2EbJ9KPrR',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GCBmPnDCE8q9BgGR' => 
=======
    'generated::ziYhza6nOPN8qolB' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::GCBmPnDCE8q9BgGR',
=======
        'as' => 'generated::ziYhza6nOPN8qolB',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FiXaSgwDFmNFT4xM' => 
=======
    'generated::3o36AUmb6ejfYqBU' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::FiXaSgwDFmNFT4xM',
=======
        'as' => 'generated::3o36AUmb6ejfYqBU',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hArCLnWKGhIfEWgX' => 
=======
    'generated::coMY2spgJ0J7OcKh' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::hArCLnWKGhIfEWgX',
=======
        'as' => 'generated::coMY2spgJ0J7OcKh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Wkid2uVWH6NrBZiq' => 
=======
    'generated::R58WYjxhckFC9Grt' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Wkid2uVWH6NrBZiq',
=======
        'as' => 'generated::R58WYjxhckFC9Grt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JMUA7SchrvhlgnjU' => 
=======
    'generated::Pl3MS0OGWjluJ9Mz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::JMUA7SchrvhlgnjU',
=======
        'as' => 'generated::Pl3MS0OGWjluJ9Mz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SNFlGSe0yY7caDic' => 
=======
    'generated::dsfvHd6qlo0KIyDE' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::SNFlGSe0yY7caDic',
=======
        'as' => 'generated::dsfvHd6qlo0KIyDE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SMFjKlvSpYdWbC5d' => 
=======
    'generated::cdcET620JoybjJku' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::SMFjKlvSpYdWbC5d',
=======
        'as' => 'generated::cdcET620JoybjJku',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JiXhjihWQmiUcRSB' => 
=======
    'generated::9f24EzHAtuj6lLJp' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::JiXhjihWQmiUcRSB',
=======
        'as' => 'generated::9f24EzHAtuj6lLJp',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Lj4qlK9zyJTo71sG' => 
=======
    'generated::77mRDDeUC51QRYCI' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Lj4qlK9zyJTo71sG',
=======
        'as' => 'generated::77mRDDeUC51QRYCI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Z2KPUHBLD6trIpPN' => 
=======
    'generated::7VuVWmq7XOLMI9oK' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Z2KPUHBLD6trIpPN',
=======
        'as' => 'generated::7VuVWmq7XOLMI9oK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tE4xT17nB6XydcZH' => 
=======
    'generated::8Zb1pfA2wxkWien7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::tE4xT17nB6XydcZH',
=======
        'as' => 'generated::8Zb1pfA2wxkWien7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SgIELzdtiGw4Rs8I' => 
=======
    'generated::cZQRWDTDR4T1iFbz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::SgIELzdtiGw4Rs8I',
=======
        'as' => 'generated::cZQRWDTDR4T1iFbz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::e4BpGR7tDy0p1DkE' => 
=======
    'generated::FcQ1llSGreRJo26H' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::e4BpGR7tDy0p1DkE',
=======
        'as' => 'generated::FcQ1llSGreRJo26H',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::E8lycCkDDMv6fAxa' => 
=======
    'generated::gu8dBUKT5SCyXqlu' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::E8lycCkDDMv6fAxa',
=======
        'as' => 'generated::gu8dBUKT5SCyXqlu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::P8E0Jkl9mcD4X9kQ' => 
=======
    'generated::FOdhKbziU75nLv7x' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::P8E0Jkl9mcD4X9kQ',
=======
        'as' => 'generated::FOdhKbziU75nLv7x',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YnxHgvDEwPi3noHR' => 
=======
    'generated::PJdbyFlLTjRLvbRG' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::YnxHgvDEwPi3noHR',
=======
        'as' => 'generated::PJdbyFlLTjRLvbRG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ERyJufUC9iuTTqkj' => 
=======
    'generated::XKaOiUhGzjoUQbOI' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::ERyJufUC9iuTTqkj',
=======
        'as' => 'generated::XKaOiUhGzjoUQbOI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Bbftzeb0X3pg0vwU' => 
=======
    'generated::rEeMLaybwSkg9NcO' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Bbftzeb0X3pg0vwU',
=======
        'as' => 'generated::rEeMLaybwSkg9NcO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HKmnjYdvpx5ZQ1Ne' => 
=======
    'generated::WTHVUA7XXVkSmF2P' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::HKmnjYdvpx5ZQ1Ne',
=======
        'as' => 'generated::WTHVUA7XXVkSmF2P',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FjQRma7hwhtOdSsN' => 
=======
    'generated::idw2aHj6dgzNLI2J' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::FjQRma7hwhtOdSsN',
=======
        'as' => 'generated::idw2aHj6dgzNLI2J',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Lxktvso2rFzhRUBs' => 
=======
    'generated::kUnJg5SMZpUksS01' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Lxktvso2rFzhRUBs',
=======
        'as' => 'generated::kUnJg5SMZpUksS01',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8Lo3ZgqCwcRSet9q' => 
=======
    'generated::DHPuElbBDXoYw6TI' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::8Lo3ZgqCwcRSet9q',
=======
        'as' => 'generated::DHPuElbBDXoYw6TI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::jTZKsxmAty2BbkwA' => 
=======
    'generated::roMwTOACVWEwwV41' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::jTZKsxmAty2BbkwA',
=======
        'as' => 'generated::roMwTOACVWEwwV41',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::K800bOxajTK7SQVs' => 
=======
    'generated::aKSpSgfbYevGr8Lu' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::K800bOxajTK7SQVs',
=======
        'as' => 'generated::aKSpSgfbYevGr8Lu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YNEYtYSGBKIvl5lW' => 
=======
    'generated::MaQV4R77xE6HzlUU' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::YNEYtYSGBKIvl5lW',
=======
        'as' => 'generated::MaQV4R77xE6HzlUU',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::odYhhDTlYeVI3NJQ' => 
=======
    'generated::RRWL7IZ3QaQyi5nz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::odYhhDTlYeVI3NJQ',
=======
        'as' => 'generated::RRWL7IZ3QaQyi5nz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Gji6HhaLnly0qhmq' => 
=======
    'generated::YNjefkXUfJB8BQqt' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Gji6HhaLnly0qhmq',
=======
        'as' => 'generated::YNjefkXUfJB8BQqt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RfSLSBmiveDYnE09' => 
=======
    'generated::TB3SWlwDx8Okn6TT' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::RfSLSBmiveDYnE09',
=======
        'as' => 'generated::TB3SWlwDx8Okn6TT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::r9hMbk72goFbZm0F' => 
=======
    'generated::BjYyWbZzPTmfNG64' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::r9hMbk72goFbZm0F',
=======
        'as' => 'generated::BjYyWbZzPTmfNG64',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tH9fIIO0TOgHaY6u' => 
=======
    'generated::6wqnomCbAznvsA2J' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::tH9fIIO0TOgHaY6u',
=======
        'as' => 'generated::6wqnomCbAznvsA2J',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::f0YEOYRUGRIGcct1' => 
=======
    'generated::WE4mET3NwaPdVX7i' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::f0YEOYRUGRIGcct1',
=======
        'as' => 'generated::WE4mET3NwaPdVX7i',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hK8c7jej8JKlYWKA' => 
=======
    'generated::ylCewmCWZad1JMTa' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::hK8c7jej8JKlYWKA',
=======
        'as' => 'generated::ylCewmCWZad1JMTa',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5SlTcqaXaLhEMtWY' => 
=======
    'generated::mnIu29F6tmP7NEqN' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5SlTcqaXaLhEMtWY',
=======
        'as' => 'generated::mnIu29F6tmP7NEqN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gvTaLVHaHfxFPsYe' => 
=======
    'generated::1GmIyVuJijUq6WdX' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::gvTaLVHaHfxFPsYe',
=======
        'as' => 'generated::1GmIyVuJijUq6WdX',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::FJ6x5O2RjuHr4dT1' => 
=======
    'generated::Rh3YIwVyFzWpZyMS' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::FJ6x5O2RjuHr4dT1',
=======
        'as' => 'generated::Rh3YIwVyFzWpZyMS',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::hXOmefzBxLPbTjEv' => 
=======
    'generated::dPKUqyNa7w31phnl' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::hXOmefzBxLPbTjEv',
=======
        'as' => 'generated::dPKUqyNa7w31phnl',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::f3kU1te2f5p7ODAt' => 
=======
    'generated::AQjW3j8mE3CkbKyW' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::f3kU1te2f5p7ODAt',
=======
        'as' => 'generated::AQjW3j8mE3CkbKyW',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4OX1S8zxCTd7Li1u' => 
=======
    'generated::bgV0yMqo7ji8nlZH' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::4OX1S8zxCTd7Li1u',
=======
        'as' => 'generated::bgV0yMqo7ji8nlZH',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::m7JC3OoQCDifL5Rs' => 
=======
    'generated::Lh0DsKI7w3DqOVc6' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::m7JC3OoQCDifL5Rs',
=======
        'as' => 'generated::Lh0DsKI7w3DqOVc6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AavAFeymGghAGRda' => 
=======
    'generated::zcuWz95gSQQVdmCu' => 
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
        'as' => 'generated::zcuWz95gSQQVdmCu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wnqXSNztmFshp4Pa' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::AavAFeymGghAGRda',
=======
        'as' => 'generated::wnqXSNztmFshp4Pa',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WFn6SdbUshLRunbK' => 
=======
    'generated::D1EqbLQcXHvAg0lP' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::WFn6SdbUshLRunbK',
=======
        'as' => 'generated::D1EqbLQcXHvAg0lP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xVs5hS8eWZfMTZEK' => 
=======
    'generated::0aKowz3Xrq995CPf' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::xVs5hS8eWZfMTZEK',
=======
        'as' => 'generated::0aKowz3Xrq995CPf',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::o8ICsfzaRMJsrJzy' => 
=======
    'generated::N8873gJScdmjtswv' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::o8ICsfzaRMJsrJzy',
=======
        'as' => 'generated::N8873gJScdmjtswv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3lOxYsE5qkKXSUUT' => 
=======
    'generated::rTrhLP7aiV4WjK17' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::3lOxYsE5qkKXSUUT',
=======
        'as' => 'generated::rTrhLP7aiV4WjK17',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BaR8QRgEjje2QD7n' => 
=======
    'generated::Yf7f363DesD6VUVp' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::BaR8QRgEjje2QD7n',
=======
        'as' => 'generated::Yf7f363DesD6VUVp',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::n2Txb4NeufDh6zMK' => 
=======
    'generated::0qaNVd9ZR8z2Ls2E' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::n2Txb4NeufDh6zMK',
=======
        'as' => 'generated::0qaNVd9ZR8z2Ls2E',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iCtE1tA94z6x3Gic' => 
=======
    'generated::we7krYXC1xvtwa8m' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::iCtE1tA94z6x3Gic',
=======
        'as' => 'generated::we7krYXC1xvtwa8m',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::SS8q47BjJ6IRvH0r' => 
=======
    'generated::JHfKtiBLKRD6fnnA' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::SS8q47BjJ6IRvH0r',
=======
        'as' => 'generated::JHfKtiBLKRD6fnnA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PYQ8yt9If8mrBwM0' => 
=======
    'generated::0Tt7GXSG4garVgAx' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::PYQ8yt9If8mrBwM0',
=======
        'as' => 'generated::0Tt7GXSG4garVgAx',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JxE8PeHHd2Vrk5Zq' => 
=======
    'generated::cMZoHioRlKm7GmUL' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::JxE8PeHHd2Vrk5Zq',
=======
        'as' => 'generated::cMZoHioRlKm7GmUL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2cTgsiVeeyKchBwY' => 
=======
    'generated::92QijHt8UyM3tk1S' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::2cTgsiVeeyKchBwY',
=======
        'as' => 'generated::92QijHt8UyM3tk1S',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lqoPsXF2kbwxquVh' => 
=======
    'generated::Eikjo4B9dZ0Vux3O' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::lqoPsXF2kbwxquVh',
=======
        'as' => 'generated::Eikjo4B9dZ0Vux3O',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Ljb7tSNKxMWVWe7f' => 
=======
    'generated::xpgInOm2AJiv0Ijz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Ljb7tSNKxMWVWe7f',
=======
        'as' => 'generated::xpgInOm2AJiv0Ijz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oamePevXkhYAFHAg' => 
=======
    'generated::fUdWJwGIBSx2rEwO' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::oamePevXkhYAFHAg',
=======
        'as' => 'generated::fUdWJwGIBSx2rEwO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NfDQDSHPaACuePU7' => 
=======
    'generated::u0U7ghqsln2CNv5H' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::NfDQDSHPaACuePU7',
=======
        'as' => 'generated::u0U7ghqsln2CNv5H',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BwAnb5pDf5n8NNl9' => 
=======
    'generated::gDdzhJa9bR1D6CKw' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::BwAnb5pDf5n8NNl9',
=======
        'as' => 'generated::gDdzhJa9bR1D6CKw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kR39HtCoNpLXh81j' => 
=======
    'generated::ziJOTWqVbMlH29Vb' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::kR39HtCoNpLXh81j',
=======
        'as' => 'generated::ziJOTWqVbMlH29Vb',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xhdkEzPu7rOZ5sMZ' => 
=======
    'generated::i9MVZNgV7ft8HWZE' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::xhdkEzPu7rOZ5sMZ',
=======
        'as' => 'generated::i9MVZNgV7ft8HWZE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wWzZDnl4TPe0Qlrv' => 
=======
    'generated::MP8C1GtXa3D3ypA2' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::wWzZDnl4TPe0Qlrv',
=======
        'as' => 'generated::MP8C1GtXa3D3ypA2',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gMUk6lNxAp9LEHUe' => 
=======
    'generated::AleTfGMB6RLN5FsG' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::gMUk6lNxAp9LEHUe',
=======
        'as' => 'generated::AleTfGMB6RLN5FsG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eJR70A4cfuib0LZo' => 
=======
    'generated::Xos1fa0O2TySBCGP' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::eJR70A4cfuib0LZo',
=======
        'as' => 'generated::Xos1fa0O2TySBCGP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sw0ksd0yuz0xbU0P' => 
=======
    'generated::va4KTrFZnXmxVF4P' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::sw0ksd0yuz0xbU0P',
=======
        'as' => 'generated::va4KTrFZnXmxVF4P',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YOO1stmxGGZBYPFf' => 
=======
    'generated::SaKUJIyPTaC5XjHL' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::YOO1stmxGGZBYPFf',
=======
        'as' => 'generated::SaKUJIyPTaC5XjHL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PJRFBMncMcfLUJAi' => 
=======
    'generated::Ue4UbOTGpbabIDp8' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::PJRFBMncMcfLUJAi',
=======
        'as' => 'generated::Ue4UbOTGpbabIDp8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JkFESldh1LyLhjsU' => 
=======
    'generated::IcihJ4mXKmLmAgh5' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::JkFESldh1LyLhjsU',
=======
        'as' => 'generated::IcihJ4mXKmLmAgh5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::B7j65Q9NZZEVDjVl' => 
=======
    'generated::ZHW39qpX8c1jJUa9' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::B7j65Q9NZZEVDjVl',
=======
        'as' => 'generated::ZHW39qpX8c1jJUa9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QDUpZaKPwkjrN4fw' => 
=======
    'generated::9vPfTxzyBUuwST1q' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::QDUpZaKPwkjrN4fw',
=======
        'as' => 'generated::9vPfTxzyBUuwST1q',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RZKBCpwSAkxC3VU0' => 
=======
    'generated::v9EoAfbN9CWLmF7j' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::RZKBCpwSAkxC3VU0',
=======
        'as' => 'generated::v9EoAfbN9CWLmF7j',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::eDo8yDSnKmUReIxH' => 
=======
    'generated::8ZhGGxWjh0Q2X6il' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::eDo8yDSnKmUReIxH',
=======
        'as' => 'generated::8ZhGGxWjh0Q2X6il',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::H1rmFNGK0NfRGUA8' => 
=======
    'generated::ArbyK4FjFzYNiRLM' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::H1rmFNGK0NfRGUA8',
=======
        'as' => 'generated::ArbyK4FjFzYNiRLM',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::q7VlggmxxhHc89B9' => 
=======
    'generated::wVC4muEuMyCTdn8s' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::q7VlggmxxhHc89B9',
=======
        'as' => 'generated::wVC4muEuMyCTdn8s',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Tzu97EiOx6ob1EhX' => 
=======
    'generated::MvfzlQgEegQUozYG' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Tzu97EiOx6ob1EhX',
=======
        'as' => 'generated::MvfzlQgEegQUozYG',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9ONKX3kcdcwFjwfj' => 
=======
    'generated::dUw9nwaFzo9uT3F4' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::9ONKX3kcdcwFjwfj',
=======
        'as' => 'generated::dUw9nwaFzo9uT3F4',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::phDgCsKYYLrR2Xsy' => 
=======
    'generated::kX7yQUCbmB5oC4K4' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::phDgCsKYYLrR2Xsy',
=======
        'as' => 'generated::kX7yQUCbmB5oC4K4',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::E15dFTwue5JTffJJ' => 
=======
    'generated::tpVQoE4vDPZShnZh' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::E15dFTwue5JTffJJ',
=======
        'as' => 'generated::tpVQoE4vDPZShnZh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4FLXqfiXSBSycV0k' => 
=======
    'generated::yMkgqFTI18lO4nQq' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::4FLXqfiXSBSycV0k',
=======
        'as' => 'generated::yMkgqFTI18lO4nQq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LC341L17U4h0LEzh' => 
=======
    'generated::jMGzxM7HHA52uw9y' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::LC341L17U4h0LEzh',
=======
        'as' => 'generated::jMGzxM7HHA52uw9y',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KIy3JyLIWPflsBvp' => 
=======
    'generated::7rp8pi6gBpMlmKqI' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::KIy3JyLIWPflsBvp',
=======
        'as' => 'generated::7rp8pi6gBpMlmKqI',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::yp0nUUz5rSSJ6hIQ' => 
=======
    'generated::Kyi4HeDXNOfHDpJw' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::yp0nUUz5rSSJ6hIQ',
=======
        'as' => 'generated::Kyi4HeDXNOfHDpJw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KQdQdBoLIDpi7mpd' => 
=======
    'generated::i8Qe0iKSregDzw0g' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::KQdQdBoLIDpi7mpd',
=======
        'as' => 'generated::i8Qe0iKSregDzw0g',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NwnjsGITDTFv6ws5' => 
=======
    'generated::RBAZ5AUnpzRexhXV' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::NwnjsGITDTFv6ws5',
=======
        'as' => 'generated::RBAZ5AUnpzRexhXV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sBZAmWwgbyT3GYcL' => 
=======
    'generated::z3ITxGaNExH8y9U0' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::sBZAmWwgbyT3GYcL',
=======
        'as' => 'generated::z3ITxGaNExH8y9U0',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YdbHqzGfhcpp95LW' => 
=======
    'generated::5h7fxRHyS7vaCN2z' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::YdbHqzGfhcpp95LW',
=======
        'as' => 'generated::5h7fxRHyS7vaCN2z',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::z392IpUgMQSfMMjU' => 
=======
    'generated::j6LMPyNSeu1Fnae9' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::z392IpUgMQSfMMjU',
=======
        'as' => 'generated::j6LMPyNSeu1Fnae9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fBKMEwP92xEIwKi9' => 
=======
    'generated::H9vJZQNmQzodP2Ql' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::fBKMEwP92xEIwKi9',
=======
        'as' => 'generated::H9vJZQNmQzodP2Ql',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2zYk19rh280oUjmP' => 
=======
    'generated::DZdZ78KSgjs6Jjyk' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::2zYk19rh280oUjmP',
=======
        'as' => 'generated::DZdZ78KSgjs6Jjyk',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5LEpEmpUoLsjwu4j' => 
=======
    'generated::rl65Yk9D6NiEgFHu' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5LEpEmpUoLsjwu4j',
=======
        'as' => 'generated::rl65Yk9D6NiEgFHu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LBolHCNPVDN5MdUO' => 
=======
    'generated::Pqn0mySGeDzxhpIw' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::LBolHCNPVDN5MdUO',
=======
        'as' => 'generated::Pqn0mySGeDzxhpIw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::KAOCYt3mT71e61Ak' => 
=======
    'generated::PXu7jfBh29qUJ0T8' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::KAOCYt3mT71e61Ak',
=======
        'as' => 'generated::PXu7jfBh29qUJ0T8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gNjGVrYcfLtvktbK' => 
=======
    'generated::sI4zL56ikb7lrffO' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::gNjGVrYcfLtvktbK',
=======
        'as' => 'generated::sI4zL56ikb7lrffO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ArhA8nNWQzEC8Ml1' => 
=======
    'generated::Z0vUkCehPzmXwzrt' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::ArhA8nNWQzEC8Ml1',
=======
        'as' => 'generated::Z0vUkCehPzmXwzrt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::aD4Ez3SA8eBPZ8I2' => 
=======
    'generated::1cDSJvK4TAZJTpG6' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::aD4Ez3SA8eBPZ8I2',
=======
        'as' => 'generated::1cDSJvK4TAZJTpG6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::0ecDbAUKooqASmoP' => 
=======
    'generated::hcXKGENkBiOYbrRs' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::0ecDbAUKooqASmoP',
=======
        'as' => 'generated::hcXKGENkBiOYbrRs',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::2dwImAOzgksm8t9Y' => 
=======
    'generated::2LVMPMNNLSkl7Z2F' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::2dwImAOzgksm8t9Y',
=======
        'as' => 'generated::2LVMPMNNLSkl7Z2F',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9sxaTf5XrooF8Z26' => 
=======
    'generated::Ldid45ABhIITqccz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::9sxaTf5XrooF8Z26',
=======
        'as' => 'generated::Ldid45ABhIITqccz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uPNvpaiV60PEIyqA' => 
=======
    'generated::TSoH3cr04dIrt0CA' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::uPNvpaiV60PEIyqA',
=======
        'as' => 'generated::TSoH3cr04dIrt0CA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::13ZN9Bdn5KN4IZZG' => 
=======
    'generated::T1FhHbFrOWHy9mF9' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::13ZN9Bdn5KN4IZZG',
=======
        'as' => 'generated::T1FhHbFrOWHy9mF9',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::AKCaT1tyimmceMQj' => 
=======
    'generated::rtSYGnb9gUwEEFpW' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::AKCaT1tyimmceMQj',
=======
        'as' => 'generated::rtSYGnb9gUwEEFpW',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vPlcswgp5ijHG87H' => 
=======
    'generated::D6V5RHCuXfkAN2F0' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::vPlcswgp5ijHG87H',
=======
        'as' => 'generated::D6V5RHCuXfkAN2F0',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::P5UZJVKYqdv9uP1j' => 
=======
    'generated::6cAbSzfOebzTZAQX' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::P5UZJVKYqdv9uP1j',
=======
        'as' => 'generated::6cAbSzfOebzTZAQX',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9LOPoyt4CsrQgdbv' => 
=======
    'generated::c1VVo9Wo6HqwqMEo' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::9LOPoyt4CsrQgdbv',
=======
        'as' => 'generated::c1VVo9Wo6HqwqMEo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lBieXeSg4qhYBQfs' => 
=======
    'generated::xsNRCmmLqqWRr2nK' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::lBieXeSg4qhYBQfs',
=======
        'as' => 'generated::xsNRCmmLqqWRr2nK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gV6zCA0gZf1ixN2b' => 
=======
    'generated::zKSt6zyUvtE9rQk5' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::gV6zCA0gZf1ixN2b',
=======
        'as' => 'generated::zKSt6zyUvtE9rQk5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::t1HL3IlzkM0aRI1k' => 
=======
    'generated::e45jcAF4bdXsNUVt' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::t1HL3IlzkM0aRI1k',
=======
        'as' => 'generated::e45jcAF4bdXsNUVt',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qZnD2O2n7HRO2awZ' => 
=======
    'generated::b7ZsRvy4op2YSIyA' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::qZnD2O2n7HRO2awZ',
=======
        'as' => 'generated::b7ZsRvy4op2YSIyA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8pYTsvK8N1BBCkMf' => 
=======
    'generated::HpGJrUKh978zYvvn' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::8pYTsvK8N1BBCkMf',
=======
        'as' => 'generated::HpGJrUKh978zYvvn',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nFlVwMsgqSiaOIfZ' => 
=======
    'generated::TlKDkTtf6BWothzP' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::nFlVwMsgqSiaOIfZ',
=======
        'as' => 'generated::TlKDkTtf6BWothzP',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::qLpIs8tkoZsufE6c' => 
=======
    'generated::4AvudUxvXl4mSakV' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::qLpIs8tkoZsufE6c',
=======
        'as' => 'generated::4AvudUxvXl4mSakV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::sGRaBbBr0Gkwdhtb' => 
=======
    'generated::PqddW4gN9MGIoiP5' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::sGRaBbBr0Gkwdhtb',
=======
        'as' => 'generated::PqddW4gN9MGIoiP5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DLXdh1GrRtHDjIPI' => 
=======
    'generated::4xUbbLU6m7IjzYkA' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::DLXdh1GrRtHDjIPI',
=======
        'as' => 'generated::4xUbbLU6m7IjzYkA',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Kcr55MJtmmlhql81' => 
=======
    'generated::5wm4jbx6FmbjG5Ue' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Kcr55MJtmmlhql81',
=======
        'as' => 'generated::5wm4jbx6FmbjG5Ue',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rIlu6SSqkix2vMQh' => 
=======
    'generated::sSaFJjUfNGZcJu7Z' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::rIlu6SSqkix2vMQh',
=======
        'as' => 'generated::sSaFJjUfNGZcJu7Z',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MVDE3Y9TTMixwWf9' => 
=======
    'generated::PUCWPGKxruhLMJN4' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::MVDE3Y9TTMixwWf9',
=======
        'as' => 'generated::PUCWPGKxruhLMJN4',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::kBvbOpBbqcZpHAVR' => 
=======
    'generated::6teADFTgcTvo0N84' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::kBvbOpBbqcZpHAVR',
=======
        'as' => 'generated::6teADFTgcTvo0N84',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YzDPe14WOAXioV3a' => 
=======
    'generated::Pe2cHihvU2NKqgQy' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::YzDPe14WOAXioV3a',
=======
        'as' => 'generated::Pe2cHihvU2NKqgQy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::NqbvmzXfqvoMPOOT' => 
=======
    'generated::3JL4IuNg2C4m4Lls' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::NqbvmzXfqvoMPOOT',
=======
        'as' => 'generated::3JL4IuNg2C4m4Lls',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cRKbYRGv6iAyxY4z' => 
=======
    'generated::FOSKkRceLSwZallo' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::cRKbYRGv6iAyxY4z',
=======
        'as' => 'generated::FOSKkRceLSwZallo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GfDzeNrcuY4VNQS3' => 
=======
    'generated::xKImeczrLamSuj7s' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::GfDzeNrcuY4VNQS3',
=======
        'as' => 'generated::xKImeczrLamSuj7s',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::mB03QtxcehL2iP3S' => 
=======
    'generated::snFi83dLxp6XaKMy' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::mB03QtxcehL2iP3S',
=======
        'as' => 'generated::snFi83dLxp6XaKMy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::PvootXm3QXLosaj3' => 
=======
    'generated::GiFaN7X2cJgJGRKR' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::PvootXm3QXLosaj3',
=======
        'as' => 'generated::GiFaN7X2cJgJGRKR',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JsQJReRrGTypCNLb' => 
=======
    'generated::GPZDc2WcTHSNIY5C' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::JsQJReRrGTypCNLb',
=======
        'as' => 'generated::GPZDc2WcTHSNIY5C',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::60VlqJLPAiZixoMl' => 
=======
    'generated::MEf7WhUyiIigi3JK' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::60VlqJLPAiZixoMl',
=======
        'as' => 'generated::MEf7WhUyiIigi3JK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9fPs79QP7sXcJ4Wv' => 
=======
    'generated::7Te5d87uxx6Lb7rS' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::9fPs79QP7sXcJ4Wv',
=======
        'as' => 'generated::7Te5d87uxx6Lb7rS',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rxwKXQK9VkT0EOUe' => 
=======
    'generated::hNwVcCgvn4hpZ6zZ' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::rxwKXQK9VkT0EOUe',
=======
        'as' => 'generated::hNwVcCgvn4hpZ6zZ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6xtGKtw0iTXxBJSc' => 
=======
    'generated::LYMQDPEWW8nUi9cZ' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::6xtGKtw0iTXxBJSc',
=======
        'as' => 'generated::LYMQDPEWW8nUi9cZ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JJZCFxGdHo3Rg1Yp' => 
=======
    'generated::dzIdH7HUYTZSfSgZ' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::JJZCFxGdHo3Rg1Yp',
=======
        'as' => 'generated::dzIdH7HUYTZSfSgZ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cVrNhfeSorQxpNeq' => 
=======
    'generated::QDu8Z0g4Ut6B3Vpv' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::cVrNhfeSorQxpNeq',
=======
        'as' => 'generated::QDu8Z0g4Ut6B3Vpv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::WzdSYkALp8iaukUb' => 
=======
    'generated::YEDizHLNgYrrvZrh' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::WzdSYkALp8iaukUb',
=======
        'as' => 'generated::YEDizHLNgYrrvZrh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::tJCK7q2eLrs7G4Pf' => 
=======
    'generated::EVNPA6rPvYNZybsE' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::tJCK7q2eLrs7G4Pf',
=======
        'as' => 'generated::EVNPA6rPvYNZybsE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rB0GqvYNSCq8M8kw' => 
=======
    'generated::ns8rc67EOohOqEmL' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::rB0GqvYNSCq8M8kw',
=======
        'as' => 'generated::ns8rc67EOohOqEmL',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RD6sRMB7MBwr5yDy' => 
=======
    'generated::w77kz6sU0E5dzLcc' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::RD6sRMB7MBwr5yDy',
=======
        'as' => 'generated::w77kz6sU0E5dzLcc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BlHexkwJNVLSUtAy' => 
=======
    'generated::YZsXtGeh5XkxJwf1' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::BlHexkwJNVLSUtAy',
=======
        'as' => 'generated::YZsXtGeh5XkxJwf1',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::MybFj0N0KvD4IjIA' => 
=======
    'generated::bGj8OJDt5RmtfS3A' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::MybFj0N0KvD4IjIA',
=======
        'as' => 'generated::bGj8OJDt5RmtfS3A',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::G4He15mQA8czgc7g' => 
=======
    'generated::PsjTZHennXrt3AZo' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::G4He15mQA8czgc7g',
=======
        'as' => 'generated::PsjTZHennXrt3AZo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::nXUggLMjUDLeKP8X' => 
=======
    'generated::sa59mwQziJimE9ul' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::nXUggLMjUDLeKP8X',
=======
        'as' => 'generated::sa59mwQziJimE9ul',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::gz49gAOXqRFSRvhR' => 
=======
    'generated::ElibaZNIMyVQLwN7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::gz49gAOXqRFSRvhR',
=======
        'as' => 'generated::ElibaZNIMyVQLwN7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ECBNVP3UecDW8XLD' => 
=======
    'generated::rT2QW4fSrR2rTDZT' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::ECBNVP3UecDW8XLD',
=======
        'as' => 'generated::rT2QW4fSrR2rTDZT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8lOff94L82xcOO1h' => 
=======
    'generated::a1Nungx0SBWRW8ud' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::8lOff94L82xcOO1h',
=======
        'as' => 'generated::a1Nungx0SBWRW8ud',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5vpe14aYneF4ixNV' => 
=======
    'generated::5o75gixg1LKU56Nh' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5vpe14aYneF4ixNV',
=======
        'as' => 'generated::5o75gixg1LKU56Nh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wCmifFIYqc2OAez5' => 
=======
    'generated::IaxRZPPmCdgnnOTE' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::wCmifFIYqc2OAez5',
=======
        'as' => 'generated::IaxRZPPmCdgnnOTE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::fXh2YFyEKM9YSJSJ' => 
=======
    'generated::gosa0vqONBQ04a9X' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::fXh2YFyEKM9YSJSJ',
=======
        'as' => 'generated::gosa0vqONBQ04a9X',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::97wCfhKhr0EjilTB' => 
=======
    'generated::12XEphgWOctzgywr' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::97wCfhKhr0EjilTB',
=======
        'as' => 'generated::12XEphgWOctzgywr',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zmKFBcZcqiY8WPYS' => 
=======
    'generated::XBmeCNHZt9C8ZE0x' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::zmKFBcZcqiY8WPYS',
=======
        'as' => 'generated::XBmeCNHZt9C8ZE0x',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::y4iWYsuRx839KkC1' => 
=======
    'generated::iXecpJznyn1pIGeb' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::y4iWYsuRx839KkC1',
=======
        'as' => 'generated::iXecpJznyn1pIGeb',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::F1WvHlouLqLJJ4n3' => 
=======
    'generated::7wRppeBXbqGt6dYF' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::F1WvHlouLqLJJ4n3',
=======
        'as' => 'generated::7wRppeBXbqGt6dYF',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::g52aoBHcVCwI1sQw' => 
=======
    'generated::ArtWBGebcEu5elcE' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::g52aoBHcVCwI1sQw',
=======
        'as' => 'generated::ArtWBGebcEu5elcE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YTvZJzJl6PVHORMq' => 
=======
    'generated::TEm8dMyEEQodsvvc' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::YTvZJzJl6PVHORMq',
=======
        'as' => 'generated::TEm8dMyEEQodsvvc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::HuSCVgciDk2hGWBu' => 
=======
    'generated::xo7fNLYwZxmsESBz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::HuSCVgciDk2hGWBu',
=======
        'as' => 'generated::xo7fNLYwZxmsESBz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::CRdhl8TH4ZW39oop' => 
=======
    'generated::5ufgf7IAAVkPAIMc' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::CRdhl8TH4ZW39oop',
=======
        'as' => 'generated::5ufgf7IAAVkPAIMc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wOdqRptwfqDv7R4Q' => 
=======
    'generated::baYXdOLtiEQz7cUN' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::wOdqRptwfqDv7R4Q',
=======
        'as' => 'generated::baYXdOLtiEQz7cUN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Xlvg6Mv0jQmsSqbY' => 
=======
    'generated::dTJkg9vE8g8X4K1o' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Xlvg6Mv0jQmsSqbY',
=======
        'as' => 'generated::dTJkg9vE8g8X4K1o',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1MZ2gPHkeoanr7np' => 
=======
    'generated::NWYc1gzqtO1ICmDw' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::1MZ2gPHkeoanr7np',
=======
        'as' => 'generated::NWYc1gzqtO1ICmDw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5j9Fdfb85hUznIgE' => 
=======
    'generated::hxT9JDaTIoQho2sm' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5j9Fdfb85hUznIgE',
=======
        'as' => 'generated::hxT9JDaTIoQho2sm',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5tUeF3bZ2XcLEy9a' => 
=======
    'generated::s8MKCx2VxfmsNR4s' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5tUeF3bZ2XcLEy9a',
=======
        'as' => 'generated::s8MKCx2VxfmsNR4s',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lUaLC00EHzKdtjfD' => 
=======
    'generated::mw9qD7HP4EEn9SM6' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::lUaLC00EHzKdtjfD',
=======
        'as' => 'generated::mw9qD7HP4EEn9SM6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3RKSAqcdK1tovDHf' => 
=======
    'generated::pQjWoNLuwakobW6V' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::3RKSAqcdK1tovDHf',
=======
        'as' => 'generated::pQjWoNLuwakobW6V',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::lOs23zulAplmCi2K' => 
=======
    'generated::ODiSqGDmxQG9loPn' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::lOs23zulAplmCi2K',
=======
        'as' => 'generated::ODiSqGDmxQG9loPn',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TJsZSALHkuhii64q' => 
=======
    'generated::HTBKw1nrdPMLOlUN' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::TJsZSALHkuhii64q',
=======
        'as' => 'generated::HTBKw1nrdPMLOlUN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TTNMeyyBJlrpoic9' => 
=======
    'generated::LfeKSzdYKKWshtW8' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::TTNMeyyBJlrpoic9',
=======
        'as' => 'generated::LfeKSzdYKKWshtW8',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wulMbJgqokYO5Gq6' => 
=======
    'generated::1y7lVtgCR4WNey3K' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::wulMbJgqokYO5Gq6',
=======
        'as' => 'generated::1y7lVtgCR4WNey3K',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::T2tPlgR3ftZqj5aD' => 
=======
    'generated::6Zq8dT2G4XLjFno7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::T2tPlgR3ftZqj5aD',
=======
        'as' => 'generated::6Zq8dT2G4XLjFno7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JWVAwteQkz53bdQV' => 
=======
    'generated::tF9OFS1LirvNHu13' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::JWVAwteQkz53bdQV',
=======
        'as' => 'generated::tF9OFS1LirvNHu13',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8RnM9JSeC2Bp4QhD' => 
=======
    'generated::WmT8zZUZV3gqMpE1' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::8RnM9JSeC2Bp4QhD',
=======
        'as' => 'generated::WmT8zZUZV3gqMpE1',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6vD8Rt6TUV4Onuq9' => 
=======
    'generated::uRo45HvxgjJwAGWV' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::6vD8Rt6TUV4Onuq9',
=======
        'as' => 'generated::uRo45HvxgjJwAGWV',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::rw8axe7dbwW9g1jz' => 
=======
    'generated::jSf6GjORRatsaR4X' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::rw8axe7dbwW9g1jz',
=======
        'as' => 'generated::jSf6GjORRatsaR4X',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::32A6nNOO4WFGIFhI' => 
=======
    'generated::QRfYntfc1dH5v6Tc' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::32A6nNOO4WFGIFhI',
=======
        'as' => 'generated::QRfYntfc1dH5v6Tc',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GYjCIWxLe81S2McC' => 
=======
    'generated::4YbGEWQOFL0s8rmi' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::GYjCIWxLe81S2McC',
=======
        'as' => 'generated::4YbGEWQOFL0s8rmi',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OfAQwVsdABlQiIzB' => 
=======
    'generated::mq56NkpiVfFT7ZHu' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::OfAQwVsdABlQiIzB',
=======
        'as' => 'generated::mq56NkpiVfFT7ZHu',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7nb4u0RCbPXgVIrT' => 
=======
    'generated::yWj9m60hwggHTJQe' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::7nb4u0RCbPXgVIrT',
=======
        'as' => 'generated::yWj9m60hwggHTJQe',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Je91idpgRUGm6yMI' => 
=======
    'generated::fkd90thmWarqwd1d' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Je91idpgRUGm6yMI',
=======
        'as' => 'generated::fkd90thmWarqwd1d',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Vi9IJLCGPL2NPoq7' => 
=======
    'generated::BjfdVyDDnqWFwMyq' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Vi9IJLCGPL2NPoq7',
=======
        'as' => 'generated::BjfdVyDDnqWFwMyq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::g5AjdrOHWIsZIiZB' => 
=======
    'generated::RrilpUpTRe76rYSr' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::g5AjdrOHWIsZIiZB',
=======
        'as' => 'generated::RrilpUpTRe76rYSr',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::u73IvDEXTzutUDex' => 
=======
    'generated::mIaDUdhGPkOkTFZ0' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::u73IvDEXTzutUDex',
=======
        'as' => 'generated::mIaDUdhGPkOkTFZ0',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OOIflPabEb2aP5ZA' => 
=======
    'generated::ZODbud3LgDC0hFhE' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::OOIflPabEb2aP5ZA',
=======
        'as' => 'generated::ZODbud3LgDC0hFhE',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::A6ukqnLkTFHf35Xj' => 
=======
    'generated::966czZSNCEPizNy5' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::A6ukqnLkTFHf35Xj',
=======
        'as' => 'generated::966czZSNCEPizNy5',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1KAuIDk5EJZzADkn' => 
=======
    'generated::yj9jVK3gvd9LYtOo' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::1KAuIDk5EJZzADkn',
=======
        'as' => 'generated::yj9jVK3gvd9LYtOo',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::BiFaxf9P4OFByyQj' => 
=======
    'generated::7D3LJW4sXxrqfEkT' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::BiFaxf9P4OFByyQj',
=======
        'as' => 'generated::7D3LJW4sXxrqfEkT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ChxF8veZjLZsEiVb' => 
=======
    'generated::Wt3zeEao5Wbp4ym7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::ChxF8veZjLZsEiVb',
=======
        'as' => 'generated::Wt3zeEao5Wbp4ym7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5qRVF9LbmlOnBmNE' => 
=======
    'generated::56c7YvB44ZPbN3IH' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5qRVF9LbmlOnBmNE',
=======
        'as' => 'generated::56c7YvB44ZPbN3IH',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5IoSfsBW8aO4zbkX' => 
=======
    'generated::A9HU5aggw1fz7mfw' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5IoSfsBW8aO4zbkX',
=======
        'as' => 'generated::A9HU5aggw1fz7mfw',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Z9X7UlEIgItH2Fba' => 
=======
    'generated::LX30xbiybXAmxInq' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Z9X7UlEIgItH2Fba',
=======
        'as' => 'generated::LX30xbiybXAmxInq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9KUfePYcBNmnu7rP' => 
=======
    'generated::HsJxlAWqj64yHIAx' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::9KUfePYcBNmnu7rP',
=======
        'as' => 'generated::HsJxlAWqj64yHIAx',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DierpbkeIAuICUl6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/recreational-activity/get_recreational_requests',
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@et_recreational_requests',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@et_recreational_requests',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
        'as' => 'generated::DierpbkeIAuICUl6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qhMwSNX43elpuF6r' => 
=======
    'generated::tRMTEDFsfqyrns2F' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::qhMwSNX43elpuF6r',
=======
        'as' => 'generated::tRMTEDFsfqyrns2F',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Qm9L5KOz8Kf2lKud' => 
=======
    'generated::OQjdSllP40KGmRD7' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::Qm9L5KOz8Kf2lKud',
=======
        'as' => 'generated::OQjdSllP40KGmRD7',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6iJ3hmVWrdNbAyxK' => 
=======
    'generated::mw9zamDA4sSCYrgN' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::6iJ3hmVWrdNbAyxK',
=======
        'as' => 'generated::mw9zamDA4sSCYrgN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bObAUwFvbYZb17lL' => 
=======
    'generated::R1KUz7Ni17tGz0iq' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::bObAUwFvbYZb17lL',
=======
        'as' => 'generated::R1KUz7Ni17tGz0iq',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LGlcQAQ6nPUNK8ec' => 
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
        'uses' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@Facility',
        'controller' => 'App\\Http\\Controllers\\Authenticated\\Administrator\\RecreationalActivityCtrl@Facility',
        'namespace' => NULL,
        'prefix' => 'api/admin/recreational-activity',
        'where' => 
        array (
        ),
        'as' => 'generated::LGlcQAQ6nPUNK8ec',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uNTcxdBI5GdwvLZS' => 
=======
    'generated::Zn1GlcUY93JLVeBf' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::uNTcxdBI5GdwvLZS',
=======
        'as' => 'generated::Zn1GlcUY93JLVeBf',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pjSqfAukLeTbaKMh' => 
=======
    'generated::5onkIDDwcLp20onT' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::pjSqfAukLeTbaKMh',
=======
        'as' => 'generated::5onkIDDwcLp20onT',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pwbOyNgCr6KPxM6e' => 
=======
    'generated::4TUkE9lbOpAVMBPz' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::pwbOyNgCr6KPxM6e',
=======
        'as' => 'generated::4TUkE9lbOpAVMBPz',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xv9fkBAANwSXE04R' => 
=======
    'generated::DKezsJADPR44Szde' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::xv9fkBAANwSXE04R',
=======
        'as' => 'generated::DKezsJADPR44Szde',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::blPnDJWVzJl9apU4' => 
=======
    'generated::avuCO7VBsMtvlcC6' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::blPnDJWVzJl9apU4',
=======
        'as' => 'generated::avuCO7VBsMtvlcC6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ICmDGEC4H9G1Ne4i' => 
=======
    'generated::RdqPvxVGvr04GeEF' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::ICmDGEC4H9G1Ne4i',
=======
        'as' => 'generated::RdqPvxVGvr04GeEF',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pc0GHpB0GWH1Kgxy' => 
=======
    'generated::Xc3yBSPjiLK95pYb' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::pc0GHpB0GWH1Kgxy',
=======
        'as' => 'generated::Xc3yBSPjiLK95pYb',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5GqkFIqkceDTQAYD' => 
=======
    'generated::0RLUOFFpBHnqSa0b' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::5GqkFIqkceDTQAYD',
=======
        'as' => 'generated::0RLUOFFpBHnqSa0b',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dVzIhCu6W3xwVXIV' => 
=======
    'generated::NzenDxlxRI04H5kQ' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::dVzIhCu6W3xwVXIV',
=======
        'as' => 'generated::NzenDxlxRI04H5kQ',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::pxDFBTnMxrFjQluL' => 
=======
    'generated::fo4GWu4MnORYAuEv' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::pxDFBTnMxrFjQluL',
=======
        'as' => 'generated::fo4GWu4MnORYAuEv',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::3aVLmSO4fL0ymzft' => 
=======
    'generated::ZQ3fMtnmH2tLLmSh' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::3aVLmSO4fL0ymzft',
=======
        'as' => 'generated::ZQ3fMtnmH2tLLmSh',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ba1bNgP10bXCbErD' => 
=======
    'generated::IWealWMsBJVLYWTN' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::ba1bNgP10bXCbErD',
=======
        'as' => 'generated::IWealWMsBJVLYWTN',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8yHTpNxqXx9tJ7nh' => 
=======
    'generated::sqCNZe0KVg4V22S6' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::8yHTpNxqXx9tJ7nh',
=======
        'as' => 'generated::sqCNZe0KVg4V22S6',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::DsAMPCYz2vy4ygKb' => 
=======
    'generated::gkQvv0F4u7eT7JQy' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::DsAMPCYz2vy4ygKb',
=======
        'as' => 'generated::gkQvv0F4u7eT7JQy',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::l3PiqKW4AgUKm1eS' => 
=======
    'generated::aeA8V6aK90tBNSJO' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
        'as' => 'generated::l3PiqKW4AgUKm1eS',
=======
        'as' => 'generated::aeA8V6aK90tBNSJO',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ACkf0ugAuIAZexlJ' => 
=======
    'generated::jMGQSnKxYy2u9AaK' => 
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000007a10000000000000000";}}',
=======
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000058e0000000000000000";}}',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ACkf0ugAuIAZexlJ',
=======
        'as' => 'generated::jMGQSnKxYy2u9AaK',
>>>>>>> 5d7e4a6b839fcbe7e792641ed814b31330d7940a
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
