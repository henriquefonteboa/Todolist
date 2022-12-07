<?php
	require_once 'connect.php';
    if($_GET['task_id']){
		$task_id = $_GET['task_id'];
		$connect->query("UPDATE `task` SET `status`= 'Done' WHERE `task_id` = $task_id");
		exit(header("location: /index.php"));
	}	
?>