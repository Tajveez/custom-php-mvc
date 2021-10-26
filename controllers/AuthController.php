<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegistrationModel;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $registrationModel = new RegistrationModel();

        if ($request->isPost()) {
            $registrationModel->loadData($request->getBodyParams());

            if ($registrationModel->validate() && $registrationModel->register()) {
                return 'Success';
            }

            return 'Handle submitted Data';
        }

        $this->setLayout('auth');
        return $this->render('register');
    }
}
