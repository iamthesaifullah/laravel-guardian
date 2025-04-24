<?php

namespace Guardian;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Request;

class CSRFProtector
{
    public static function checkToken($token = null)
    {
        $token = $token ?: Request::header('X-CSRF-TOKEN');
        return hash_equals(Session::token(), $token);
    }
}
