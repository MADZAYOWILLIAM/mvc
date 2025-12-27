<?php


class ProgramModel
{
    protected    $db;

    public function __construct()
    {
        $this->db = Database::open();
    }

    public function addProgramApplication($data)
    {

        $user_id = $_POST['user_id'];
        $name = $_POST['program'];
        $this->db->prepare("SELECT * FROM programs WHERE user_id = ? AND program = ?");
        $this->db->bindParam("is", $user_id, $name);
        $this->db->execute();
        $result = $this->db->fetch();

        if ($result) {
            // User has already registered for this program
            die('Duplicate registration detected.');
        } else {
            //Insert application into database
            $query = "INSERT INTO programs (full_name, email, phone, program, newsletter) VALUES (:full_name, :email, :phone, :program, :newsletter)";
            $this->db->prepare($query);
            $this->db->bindValue(':full_name', $data['full_name']);
            $this->db->bindValue(':email', $data['email']);
            $this->db->bindValue(':phone', $data['phone']);
            $this->db->bindValue(':program', $data['program']);
            $this->db->bindValue(':newsletter', $data['newsletter']);
            return $this->db->execute();
        }



        // Prevent duplicate registration

    }
}
