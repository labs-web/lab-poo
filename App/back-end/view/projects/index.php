<?php
include '../../controller/ProjectController.php';

$project = new ManageProject();
$get_data = $project->getAllProject();
print_r($get_data);
