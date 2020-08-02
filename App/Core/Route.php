<?php
namespace App\Core;

class Route
{
    public array $routes = [];

    public Request $request;
    public Response $response;
    public View $view;

    public function __construct()
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->view = new View();
    }

    public function get(string $path, string $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post(string $path, string $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            $this->response->setStatusCode(404);
        //     return $this->view->render('_404');
            return "not found";
        }

        if (strpos($callback, '@')) {
            $action = explode('@', $callback);
            $controller = 'App\\Controllers\\'.$action[0];
            $function = $action[1];

            $this->response->setStatusCode(200);

            return call_user_func([new $controller, $function]);
            
        }
    
        $this->response->setStatusCode(200);
        // return $this->view->render();
    }

}