<?php
include '../../controller/ProjectController.php';



if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $add_project = new ManageProject();
    $add_project->EditProject($name, $description, $id);
}

