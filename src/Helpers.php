<?php

namespace Guardian\Helpers;

class SecurityHelpers
{
    public static function clean($value)
    {
        return strip_tags($value);
    }

    public static function sanitizeArray(array $data)
    {
        array_walk_recursive($data, function (&$input) {
            $input = self::clean($input);
        });
        return $data;
    }
}
