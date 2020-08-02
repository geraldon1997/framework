<?php
namespace App\Core;

class Controller
{
    public View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function view(string $view)
    {
        return $this->view->render($view);
    }
}