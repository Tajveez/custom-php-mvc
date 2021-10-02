<?php

namespace app\core;

class Application
{
    public Router $router;
    public Request $request;
    public function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();
    }

    public function run()
    {
        $this->router->resolve();
    }
}
