<?php

namespace app\controllers;

use app\core\Application;

class FrontController
{
    public function action()
    {
        return "Handling action";
    }

    public function renderContact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handlePost()
    {
        return "WHY SO SERIOUS?";
    }
}
