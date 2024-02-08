<?php
include '../../controller/ProjectController.php';



if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $add_project = new ManageProject();
    $add_project->addProject($name, $description);
}
