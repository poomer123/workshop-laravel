<?php

return [
    'auth' => [
        'username' => 'required|min:6',
        'password' => 'required|min:8'
    ],
    'customers' => [
        'firstName' => 'required|min:3',
        'lastName' => 'required|min:3',
        'email' => 'required|email'
    ],
    'products' => []
];