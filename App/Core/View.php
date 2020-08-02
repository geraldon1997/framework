<?php
namespace App\Core;

class View
{
    public Config $config;
    public FileFinder $fileFinder;

    public function __construct()
    {
        $this->config = new Config();
        $this->fileFinder = new FileFinder();
    }

    public function renderOnlyView(string $view)
    {
        ob_start();
        include_once $this->config::$APP_ROOT.'Views/'.$this->fileFinder->findFile($view, '.php');
        $file = ob_get_clean();
        return $file;
    }

    public function renderOnlyLayout(string $layout)
    {
        //
    }

    public function render($view)
    {
        return $this->renderOnlyView($view);
    }
}