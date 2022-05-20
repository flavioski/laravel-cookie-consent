<?php

namespace W3designweb\LaravelCookieConsent\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Throwable;

class LaravelCookieConsent
{
	/**
	 * Handle an incoming request.
	 * @param $request
	 * @param Closure $next
	 *
	 * @return LaravelCookieConsent|mixed
	 * @throws Throwable
	 */
	public function handle($request, Closure $next)
	{
		$alreadyAccepted = array_key_exists(config('laravel-cookie-consent.cookie_name'), $request->cookie());
        $cookieTypesAccepted = $this->getCookieTypesConsent($request);
		$response = $next($request);
		if (! $response instanceof Response) {
			return $response;
		}
		if (! $this->containsBodyTag($response)) {
			return $response;
		}
		return $this->addCookieConsentScriptToResponse($response, $alreadyAccepted, $cookieTypesAccepted);
	}

    /**
     * Get the cookie preference for the user
     *
     * @param $request
     * @return array
     */
    public function getCookieTypesConsent($request): array
    {
        $cookieTypesConsent = [];
        foreach(config('laravel-cookie-consent.cookie_types') as $type => $cookie_name) {
            if(array_key_exists($cookie_name, $request->cookie())) $cookieTypesConsent[] = $cookie_name;
        }
        return $cookieTypesConsent;
    }

	/**
	 * Check if the application contains body tag
	 * @param Response $response
	 *
	 * @return bool
	 */
	protected function containsBodyTag(Response $response): bool
    {
		return $this->getLastClosingBodyTagPosition($response->getContent()) != false;
	}

    /**
     * Add cookie consent container to the response
     *
     * @param Response $response
     * @param $alreadyAccepted
     * @param $cookieTypesAccepted
     *
     * @return Response
     * @throws Throwable
     */
	protected function addCookieConsentScriptToResponse(Response $response, $alreadyAccepted, $cookieTypesAccepted): Response
    {
		$content = $response->getContent();
		//if(!$alreadyAccepted) {
			$closingBodyTagPosition = $this->getLastClosingBodyTagPosition($content);
			$content = ''
			           .substr($content, 0, $closingBodyTagPosition)
			           .view('laravel-cookie-consent::_banner', ['alreadyAccepted' => $alreadyAccepted, 'cookieTypesAccepted' => $cookieTypesAccepted])->render()
			           .substr($content, $closingBodyTagPosition);
		//}
		return $response->setContent($content);
	}

	/**
	 * Get last closing body tag position
	 * @param string $content
	 *
	 * @return int
	 */
	protected function getLastClosingBodyTagPosition(string $content = ''): int
    {
		return strripos($content, '</body>');
	}
}
