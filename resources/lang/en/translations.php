<?php

return [

	'title' => 'We use cookies',
    'title_description' => 'All cookies we use',
	'description' => '<p>We use cookies to personalize content, to get statistics and to improve your experience on our website.</p>',
    'description_policy' => '<p>For more information please read our <a href=":cookie_policy_link" target="_blank">Cookie Policy</a>.</p>',
	'button_accept' => 'Accept all',
    'button_accept_necessary' => 'Reject all',
	'button_accept_selected' => 'Accept selected',
    'button_save_changes' => 'Save changes',
	'button_more_info' => 'More information',
	'no_cookies_used' => 'No cookies used for this type',

	'necessary' => [
		'title' => 'Strictly necessary',
		'description' => '<p>These cookies are necessary for the website to function and cannot be switched off in our systems.</p><p>You can set your browser to block or alert you about these cookies, but some parts of the site will not then work. These cookies do not store any personally identifiable information.</p>',
	],
	'statistics' => [
		'title' => 'Statistics',
		'description' => '<p>These cookies allow us to count visits and traffic sources so we can measure and improve the performance of our site. They help us to know which pages are the most and least popular and see how visitors move around the site.</p><p>All information these cookies collect is aggregated and therefore anonymous. If you do not allow these cookies we will not know when you have visited our site, and will not be able to monitor its performance.</p>',
	],
	'functional' => [
		'title' => 'Functional and third party',
		'description' => '<p>These cookies enable the website to provide enhanced functionality and personalisation. They may be set by us or by third party providers whose services we have added to our pages.</p><p>If you do not allow these cookies then some or all of these services may not function properly.</p>',
	],
	'marketing' => [
		'title' => 'Marketing and targeting',
		'description' => '<p>These cookies may be set through our site by our advertising partners. They may be used by those companies to build a profile of your interests and show you relevant adverts on other sites.</p><p>They do not store directly personal information, but are based on uniquely identifying your browser and internet device. If you do not allow these cookies, you will experience less targeted advertising.</p>',
	],

    // Cookies descriptions
    'cookies' => [
        'XSRF-TOKEN' => 'This cookie was written to help with site security and prevent Cross-Site Request Forgery attacks.',
        'laravel_session' => 'Internally laravel uses laravel_session to identify a session instance for a user.',
        'laravel_cookie_consent' => 'The confirmation of a user\'s consent preference is stored internally.',
        'laravel_cookie_consent_statistics' => 'This cookie is created to save the user\'s consent to use statistical cookies.',
        'laravel_cookie_consent_marketing' => 'This cookie is created to save the user\'s consent to use marketing and targeting cookies.',
        'laravel_cookie_consent_functions' => 'This cookie is created to save the user\'s consent to use functional and third-party cookies.',
        '_GRECAPTCHA' => 'Google reCAPTCHA sets this necessary cookie when it is run for the purpose of providing its risk analysis.',
        '_ga' => 'This cookie is used to distinguish unique users by assigning a randomly generated number as a customer identifier. It is included in every page request on a site and used to calculate visitor, session and campaign data for site analytics reports.',
        '_gid' => 'This cookie is set by Google Analytics. Stores and updates a unique value for each page visited and is used to count and track page views.',
        '_ga_*' => '',
        '_gat_*' => 'It is a pattern type cookie set by Google Analytics, in which the pattern element on the name contains the unique identification number of the account or website to which it refers. It is a variation of the _gat cookie which is used to limit the amount of data recorded by Google on high-traffic websites.',
    ],

    'um' => [
        'second' => 'second',
        'seconds' => 'seconds',
        'minute' => 'minute',
        'minutes' => 'minutes',
        'hour' => 'hour',
        'hours' => 'hours',
        'day' => 'day',
        'days' => 'days',
        'week' => 'week',
        'weeks' => 'weeks',
        'month' => 'month',
        'months' => 'months',
        'year' => 'year',
        'years' => 'years',
    ],

    'table' => [
        'name' => 'Name',
        'provider' => 'Provider',
        'domain' => 'Domain',
        'duration' => 'Duration',
        'description' => 'Description'
    ]

];
