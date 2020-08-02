<?php
namespace App\Core;

class FileFinder
{
    
    public function findFile(string $filePath, string $ext)
    {

        if (strpos($filePath, '.')) {
            $file = str_replace('.', '/', $filePath).$ext;
            return $file;
        }

        if (strpos($filePath, '/')) {
            return $filePath.$ext;
        }

        return $filePath.$ext;
    }
}