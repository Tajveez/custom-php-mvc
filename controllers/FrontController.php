<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;

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

    public function handlePost()
    {
        return "WHY SO SERIOUS?";
    }
}
