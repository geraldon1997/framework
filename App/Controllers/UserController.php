<?php
namespace App\Controllers;

class UserController extends Controller
{
    public static function index()
    {
        self::view('home');
    }
}
