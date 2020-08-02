<?php
namespace App\Core;

class Request
{
    public $url;
    public $http;
    public $method;

    public function __construct()
    {
        $this->url = $_SERVER['REQUEST_URI'] ?? '/';
        $this->http = $_SERVER['HTTP_HOST'];
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function path()
    {
        $position = strpos($this->url, '?');

        if ($position === false) {
            return $this->url;
        }

        $path = substr($this->url, 0, $position);
        return $path;
    }

    public function fullPath()
    {
        return $this->url;
    }

    public function url()
    {
        return $this->http;
    }

    public function fullUrl()
    {
        return $this->http.$this->url;
    }

    public function method()
    {
        return $this->method;
    }

    public function isGet()
    {
        if ($this->method === 'get') {
            return $this->method;
        }
    }

    public function isPost()
    {
        if ($this->method === 'post') {
            return $this->method;
        }
    }

    public function input()
    {
        //
    }
}