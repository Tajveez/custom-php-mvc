<?php

namespace app\models;

use app\core\Model;

class RegistrationModel extends Model
{
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;

    public function register()
    {
        # code...
    }
}
