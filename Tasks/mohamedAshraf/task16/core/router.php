<?php

namespace App\Core;
class Router
{
    protected array $routes = [];
    private Request $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if (!$callback) {
            echo "page not found";
            exit();
        }

        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        if (is_array($callback)) {
            //$controller = new \app\Core\Controllers\ContactController();
            $callback[0] = new $callback[0]();
        }

        return call_user_func($callback);
    }

    function renderView($viewName)
    {
        include_once __DIR__ . '/../views/' . $viewName . '.php';
    }



}