<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class ClassName extends Controller
{
    public function login(Request $request)
    {
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'Handle submitted Data';
        }
        return $this->render('register');
    }
}
