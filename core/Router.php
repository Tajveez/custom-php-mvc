<?php

namespace app\core;

class Router
{
    protected $routes = [];

    public function __construct()
    {
    }

    public function run($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        print_r($_SERVER);
    }
}
