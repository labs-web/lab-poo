<?php
include '../../controller/TaskController.php';



if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $add_task = new ManageTask();
    $add_task->EditTask($name, $description, $id_project, $id);
}

