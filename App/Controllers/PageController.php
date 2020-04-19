<?php
namespace App\Controllers;

use App\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        self::view('home');
    }

    public function test()
    {
        self::view('test');
    }
}
