<?php
namespace App\Model;

use App\Core\Gateway;

class Model extends Gateway
{
    public static function splitArray(string $split, array $data)
    {
        return implode("$split", $data);
    }
}
