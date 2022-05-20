<?php

$COOKIE_LIFETIME = 30 * 6; // In days (Default 30 * 6 = 6 months)
$COOKIE_LIFETIME_UM = 'months';

return [
	/*
	 * Use this setting to enable the cookie consent dialog.
	 */
	'enabled' => env('COOKIE_CONSENT_ENABLED', true),

	/*
	 * The name of the cookie in which we store if the user
	 * has agreed to accept the conditions.
	 */
	'cookie_name' => env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent'),

	/*
	 * Set the cookie duration in days.
	 */
	'cookie_lifetime' => $COOKIE_LIFETIME, // Six months

    /*
     * 4 types of cookie
     */
	'cookie_types' => [
		'necessary' => env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent').'_necessary',
		'statistics' => env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent').'_statistics',
        'marketing' => env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent').'_marketing',
		'functional' => env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent').'_functional',
	],

    /*
     * All cookies by type
     */
    'cookies' => [
        'necessary' => [
            // Laravel
            'XSRF-TOKEN' => [
                'duration' => [
                    'value' => env('SESSION_LIFETIME'),
                    'um' => 'minutes'
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            'laravel_session' => [
                'duration' => [
                    'value' => env('SESSION_LIFETIME'),
                    'um' => 'minutes'
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            // Laravel Cookie Consent
            env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent') => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent').'_statistics' => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent').'_marketing' => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            env('COOKIE_CONSENT_NAME', 'laravel_cookie_consent').'_functions' => [
                'duration' => [
                    'value' => $COOKIE_LIFETIME,
                    'um' => $COOKIE_LIFETIME_UM
                ],
                'provider' => env('APP_NAME'),
                'domain' => str_replace(['http://', 'https://'], '', env('APP_URL')),
            ],
            // Google reCAPTCHA
            '_GRECAPTCHA' => [
                'duration' => [
                    'value' => 6,
                    'um' => 'months'
                ],
                'provider' => 'Google reCAPTCHA',
                'domain' => 'www.google.com',
            ],
        ],
        'statistics' => [
            // Google Analytics
            '_ga' => [
                'duration' => [
                    'value' => 2,
                    'um' => 'years'
                ],
                'provider' => 'Google Analytics',
                'domain' => str_replace(['http://', 'https://'], '', str_replace('www', '', env('APP_URL'))),
            ],
            '_gid' => [
                'duration' => [
                    'value' => 1,
                    'um' => 'day'
                ],
                'provider' => 'Google Analytics',
                'domain' => str_replace(['http://', 'https://'], '', str_replace('www', '', env('APP_URL'))),
            ],
            '_ga_*' => [
                'duration' => [
                    'value' => 2,
                    'um' => 'years'
                ],
                'provider' => 'Google Analytics',
                'domain' => str_replace(['http://', 'https://'], '', str_replace('www', '', env('APP_URL'))),
            ],
            '_gat_*' => [
                'duration' => [
                    'value' => 1,
                    'um' => 'minute'
                ],
                'provider' => 'Google Analytics',
                'domain' => str_replace(['http://', 'https://'], '', str_replace('www', '', env('APP_URL'))),
            ],
        ],
        'marketing' => [],
        'functional' => [],
    ]
];
