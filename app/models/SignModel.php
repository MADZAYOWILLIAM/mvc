<?php


class SignModel
{
    protected $db;

    public function __construct()
    {
        // Use singleton pattern to get Database instance
        $this->db = Database::open();
    }

    public function register($username, $password, $email = null)
    {
        // Check if username already exists
        $this->db->prepare("SELECT id FROM users WHERE username = :username");
        $this->db->bindValue(':username', $username);
        $this->db->execute();
        if ($this->db->rowCount() > 0) {
            return ['ok' => false, 'reason' => 'exists'];
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert new user
        $this->db->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
        $this->db->bindValue(':username', $username);
        $this->db->bindValue(':password', $hashedPassword);
        $this->db->bindValue(':email', $email);

        if ($this->db->execute()) {
            return ['ok' => true];
        } else {
            return ['ok' => false, 'reason' => 'db_error'];
        }
    }
}
