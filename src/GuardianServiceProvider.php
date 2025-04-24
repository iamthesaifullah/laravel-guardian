<?php

public function boot()
{
    $this->publishes([
        __DIR__.'/../config/guardian.php' => config_path('guardian.php'),
    ], 'config');

    if (config('guardian.sanitize_input')) {
        app('router')->pushMiddlewareToGroup('web', \Saif\Guardian\Middleware\XSSSanitizer::class);
    }

    if (config('guardian.add_security_headers')) {
        app('router')->pushMiddlewareToGroup('web', \Saif\Guardian\Middleware\SecurityHeaders::class);
    }
}
