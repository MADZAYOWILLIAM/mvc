<?php


class ContactModel
{
    protected $db;

    public function __construct()
    {
        // Use singleton pattern to get Database instance
        $this->db = Database::open();
    }

    public function add($username, $email, $message)
    {
        $query = "INSERT INTO messages (username, email, message) VALUES (:username, :email, :message)";

        try {
            $this->db->prepare($query);
            $this->db->bindValue(':username', $username);
            $this->db->bindValue(':email', $email);
            $this->db->bindValue(':message', $message);
            $ok = $this->db->execute();
            return (bool)$ok;
        } catch (Exception $e) {
            // error_log($e->getMessage());
            return false;
        }
    }
    public function getAllMessages()
    {
        try {
            $query = "SELECT * FROM messages ORDER BY id DESC";
            $this->db->prepare($query);
            $this->db->execute();
            $messages = $this->db->fetchAll();
            return $messages ?: [];
        } catch (Exception $e) {
            // error_log($e->getMessage());
            return [];
        }
    }
}
