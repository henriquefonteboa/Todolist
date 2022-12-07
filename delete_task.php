<?php
	require_once 'connect.php';
    if($_GET['task_id']){
		$task_id = $_GET['task_id'];
		$connect->query("DELETE FROM `task` WHERE `task_id` = $task_id");
		exit(header("location: /index.php"));
	}	
?>