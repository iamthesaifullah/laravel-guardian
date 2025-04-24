<?php

public function handle($request, Closure $next)
{
    $input = $request->all();
    array_walk_recursive($input, function (&$input) {
        $input = strip_tags($input); // Simple XSS removal
    });
    $request->merge($input);
    return $next($request);
}
