<?php

class LoginModel
{
    protected $db;

    public function __construct()
    {
        // Use singleton pattern to get Database instance
        $this->db = Database::open();
    }

    public function authenticate($username, $password)
    {
        // Fetch user by username
        $this->db->prepare("SELECT id, username, password FROM users WHERE username = :username");
        $this->db->bindValue(':username', $username);
        $this->db->execute();
        
        $user = $this->db->fetch();
        
        if (!$user) {
            return ['ok' => false, 'reason' => 'user_not_found'];
        }

        // Verify password
        if (password_verify($password, $user['password'])) {
            return ['ok' => true, 'user' => $user];
        } else {
            return ['ok' => false, 'reason' => 'invalid_password'];
        }
    }

    public function validateInput($username, $password)
    {
        if (empty($username) || empty($password)) {
            return false;
        }
        return true;
    }
}