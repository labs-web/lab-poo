<?php
include '../../controller/TaskController.php';



if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $add_project = new ManageTask();
    $add_project->addTask($name, $description, $id_project);
}
