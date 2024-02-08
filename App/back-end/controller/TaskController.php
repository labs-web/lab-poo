<?php

require '../../model/db_connection.php';



class ManageTask
{
    public $name;
    public $description;
    public $id_project;
    public $db_conn;

    public function __construct()
    {
        $conn = new Db_connection();
        $this->db_conn = $conn->connect();
    }

    public function getAllTasks()
    {
        $sql = "SELECT name, description FROM tasks";
        $result = $this->db_conn->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addTask($name, $description, $id_project)
    {
        $sql = "INSERT INTO tasks (name, description, id_project) values ('" . $name . "','" . $description . "','" . $id_project . "') ;";
        $this->db_conn->query($sql);
    }

    public function EditTask($name, $description, $id_project, $id)
    {
        $sql = "UPDATE tasks (name, description) SET `name` = '$name'  `description` = '$description' WHERE (`id` = '$id')";
        $this->db_conn->query($sql);
    }
}
