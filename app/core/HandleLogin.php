<?php

class HandleLogin
{

    public $hashed_password;
    public $username;

    public function __construct()
    {
        $this->hashed_password = password_hash("password", PASSWORD_BCRYPT);
    }


    public function login($username, $password)
    {
        // Simulate login logic
        if ($username === "admin" && $password === "password") {
            require baseUrl() . '/admin/admin.php';
        }
        return false;
    }

    //Validate user input
    public function validateInput($username, $password)
    {
        if (empty($username) || empty($password)) {
            return false;
        }
        return true;
    }
}
