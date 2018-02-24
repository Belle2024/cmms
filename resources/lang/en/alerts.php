<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Alert Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain alert messages for various scenarios
    | during CRUD operations. You are free to modify these language lines
    | according to your application's requirements.
    |
    */

    'backend' => [
        'transactions' =>  [
            'created'   =>  'Transaction ID# \':transaction\' was successfully created.',
            'deleted'   =>  'Transaction ID# \':transaction\' was successfully deleted.',
            'updated'   =>  'Transaction ID# \':transaction\' was successfully updated',
            'restored'  =>  'Transaction ID# \':transaction\' was successfully restored.',
            'deleted_permanently'   =>  'Transaction ID# \':transaction\' was successfully deleted permanently.',
        ],

        'customers' =>  [
            'created'   =>  'Client \':customer\' was successfully created.',
            'deleted'   =>  'Client \':customer\' was successfully deleted.',
            'updated'   =>  'Client \':customer\' was successfully updated',
            'restored'  =>  'Client \':customer\' was successfully restored.',
            'deleted_permanently'   =>  'Client \':customer\' was successfully deleted permanently.',
        ],

        'items' =>  [
            'created'   =>  'Inventory \':item\' was successfully created.',
            'deleted'   =>  'Inventory \':item\' was successfully deleted.',
            'updated'   =>  'Inventory \':item\' was successfully updated',
            'restored'  =>  'Inventory \':item\' was successfully restored.',
            'deleted_permanently'   =>  'Inventory \':item\' was successfully deleted permanently.',
        ],

        'suppliers' =>  [
            'created'   =>  'Distributor \':supplier\' was successfully created.',
            'deleted'   =>  'Distributor \':supplier\' was successfully deleted.',
            'updated'   =>  'Distributor \':supplier\' was successfully updated',
            'restored'  =>  'Distributor \':supplier\' was successfully restored.',
            'deleted_permanently'   =>  'Distributor \':supplier\' was successfully deleted permanently.',
        ],

        'roles' => [
            'created' => 'The role was successfully created.',
            'deleted' => 'The role was successfully deleted.',
            'updated' => 'The role was successfully updated.',
        ],

        'users' => [
            'cant_resend_confirmation' => 'The application is currently set to manually approve users.',
            'confirmation_email'  => 'A new confirmation e-mail has been sent to the address on file.',
            'confirmed'              => 'The user was successfully confirmed.',
            'created'             => 'The user was successfully created.',
            'deleted'             => 'The user was successfully deleted.',
            'deleted_permanently' => 'The user was deleted permanently.',
            'restored'            => 'The user was successfully restored.',
            'session_cleared'      => "The user's session was successfully cleared.",
            'social_deleted' => 'Social Account Successfully Removed',
            'unconfirmed' => 'The user was successfully un-confirmed',
            'updated'             => 'The user was successfully updated.',
            'updated_password'    => "The user's password was successfully updated.",
        ],
    ],

    'frontend' => [
        'contact' => [
            'sent' => 'Your information was successfully sent. We will respond back to the e-mail provided as soon as we can.',
        ],
    ],
];
