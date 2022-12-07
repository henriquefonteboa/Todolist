<?php
	require_once 'connect.php';
	if(ISSET($_POST['add'])){
		if($_POST['task'] != ""){
			$task = $_POST['task'];
			$connect->query("INSERT INTO `task`(`task`, `status`) VALUES('$task', '')");
			header('location:index.php');
		}
	}
?>