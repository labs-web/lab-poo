<?php

require '../../model/db_connection.php';



class ManageProject
{
    public $name;
    public $description;
    public $db_conn;

    public function __construct()
    {
        $conn = new Db_connection();
        $this->db_conn = $conn->connect();
    }

    public function getAllProject()
    {
        $sql = "SELECT name, description FROM projects";
        $result = $this->db_conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addProject($name, $description)
    {
        $sql = "INSERT INTO projects (name, description) values ('" . $name . "','" . $description . "') ;";
        $this->db_conn->query($sql);
    }

    public function EditProject($name, $description, $id)
    {
        $sql = "UPDATE projects (name, description) SET `name` = '$name'  `description` = '$description' WHERE (`id` = '$id')";
        $this->db_conn->query($sql);
    }
}
