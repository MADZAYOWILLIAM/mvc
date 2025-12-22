<?php

class HandleSignup
{

    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $confirmPassword;

    public function signup($firstname, $lastname, $email, $password, $confirmPassword)
    {
        // Simulate signup logic
        if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($confirmPassword) && $password === $confirmPassword) {
            return true;

        }
        return false;
    }

    public function validateInput($firstname, $lastname, $email, $password, $confirmPassword)
    {
        if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmPassword)) {
            return false;
        }
        return true;
    }
}
