<?php
namespace App\Core;

class Application
{
    public Request $request;
    public Response $response;
    public FileFinder $fileFinder;
    public Route $route;
    public View $view;
    public Config $config;
    public QueryBuilder $queryBuilder;
    public TemplateEngine $templateEngine;
    public Application $app;

    public function __construct()
    {
        $this->route = new Route();
    }

    public function run()
    {
        echo $this->route->resolve();
    }
}