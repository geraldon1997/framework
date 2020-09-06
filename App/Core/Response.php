<?php
namespace App\Core;

class Response
{
    public static function statusCode(int $code)
    {
        return http_response_code($code);
    }
}