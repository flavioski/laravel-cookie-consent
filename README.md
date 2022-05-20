# Cookie consent for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Scrutinizer Code Quality][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

With this package it will be easy for you to declare all the cookies used on your website, asking for consent through a banner that will be activated automatically through a Laravel Middleware. 

Each user can accept or not the different types of cookies, thus deciding whether to enable the related functions, and also can change the consents given over time.

## Installation

Require the package with Composer:

```
composer require w3designweb/laravel-cookie-consent
```

### Laravel

For Laravel 5.4 and lower, add the service provider to `config/app.php`:

```php
W3designweb\LaravelCookieConsent\LaravelCookieConsentServiceProvider::class,
```

### Lumen

Add the service provider to `bootstrap/app.php`:
```php
$app->register(W3designweb\LaravelCookieConsent\LaravelCookieConsentServiceProvider::class);
```

## Configuration

Then, add this configuration to your .env file to enable the cookie banner. By default the value is set to "true", but it will be sufficient to indicate "false" to not show the cookie banner.

```php
COOKIE_CONSENT_ENABLED=true
COOKIE_CONSENT_NAME=your_cookie_consent_name
```

After that, add the middleware in the group of your choice, inside the App/Http/Kernel.php file, per example:

```php
'web' => [
    ...
    W3designweb\LaravelCookieConsent\Http\Middleware\LaravelCookieConsent::class,
    ...
],
```

Publish the package files to manage your cookies list in the config file, the blade template on the view file and the assets in CSS and JS file:

```php
php artisan vendor:publish --provider="W3designweb\LaravelCookieConsent\LaravelCookieConsentServiceProvider"
```

