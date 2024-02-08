<?php
include '../../controller/TaskController.php';

$project = new ManageTask();
$get_data = $project->getAllTasks();
print_r($get_data);
