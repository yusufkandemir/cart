<?php

return [
    'event_listeners'   => true,
    'session_key'       => 'vanilo_cart', // The session key where the cart id gets saved
    'auto_destroy'      => false, // Whether to immediately delete carts with 0 items
    'auto_assign_user'  => true, // Whether to automatically set the user_id on new carts (based on Auth::user())
    'preserve_for_user' => false, // Whether to keep and restore user carts across logins and devices
    'items'             => [
        'extra_product_attributes_to_merge' => []
    ]
];
