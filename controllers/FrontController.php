<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class FrontController extends Controller
{
    public function action()
    {
        return "Handling action";
    }

    public function renderHome()
    {
        $params = [
            'name' => 'Francolin'
        ];

        return $this->render('home', $params);
    }

    public function renderContact()
    {
        return $this->render('contact');
    }

    public function handlePost(Request $request)
    {
        echo "<pre>";
        var_dump($request->getBodyParams());
        echo "</pre>";
        return "WHY SO SERIOUS?";
    }
}
