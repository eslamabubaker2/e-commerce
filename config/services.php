<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'paypal' => [
        'client_id' => 'AVAUL-45npt43mp6Uv6GjJ5plD8LeRfdqX0ovAfgGFu_GWbKZNxY7vH3wUTFCFIg28z-lH9TNpQHiUNb',
        'secret' => 'EM0uYXKmMj2kHdQtEtRNGPCHnFg8en4aMMo4o5H_rADtknwNTOIYPpvqmmWUcGiAauPfWdjYvYUl1_Rl'
    ],


];
