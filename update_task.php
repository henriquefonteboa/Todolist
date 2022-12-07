<?php
	require_once 'connect.php';
        $task_id = $_GET['task_id'];
        $task = $_GET['task'];
        $status = $_GET['status'];
        $task_id = str_replace("'","",$task_id);
        $connect->query("UPDATE `task` SET `task_id`=$task_id,`task`='$task',`status`='$status' WHERE `task_id`=$task_id");
        exit(header("location: /index.php"));
?>