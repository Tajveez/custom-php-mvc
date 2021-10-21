<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return $this->render('auth/login');
    }

    public function register(Request $request)
    {
        if ($request->isPost()) {
            return 'Handle submitted Data';
        }
        return $this->render('register');
    }
}
