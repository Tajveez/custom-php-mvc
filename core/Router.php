<?php

namespace app\core;

class Router
{
    protected $routes = [];
    public $request;

    /**
     * Router Constructor
     *
     * @param \app\core\Request $request
     **/
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function run($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();
    }
}
