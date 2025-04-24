<?php

public function handle($request, Closure $next)
{
    $response = $next($request);
    $response->headers->set('X-Frame-Options', 'DENY');
    $response->headers->set('X-Content-Type-Options', 'nosniff');
    $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
    $response->headers->set('Content-Security-Policy', "default-src 'self'");
    return $response;
}
