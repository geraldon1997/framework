<?php
namespace App\Core;

class Response
{
    public function setStatusCode(int $code)
    {
        return http_response_code($code);
    }

    public function getStatusCode()
    {
        return http_response_code();
    }
}