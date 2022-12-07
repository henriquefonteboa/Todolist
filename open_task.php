<?php
	require_once 'connect.php';
    if($_GET['task_id']){
		$task_id = $_GET['task_id'];
		$connect->query("UPDATE `task` SET `status`= '' WHERE `task_id` = $task_id") or die(mysqli_errno($connect));
		exit(header("location: /index.php"));
	}	
?>