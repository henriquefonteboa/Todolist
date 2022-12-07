<?php
    // For docker
    $servername = "mysql";
    $username = "root";
    $password = "Senha123";
    $database = "tasks";
    // For local
    // $servername_local = "mysql";
    // $username_local = "root";
    // $password_local = "";
    // $database = "tasks";
	// $connect = new mysqli("$servername_local", "$username_local", "$password_local", "$database_local");
    $connect = new mysqli($servername, $username, $password, $database);
	if(!$connect){
		die("Error: Cannot connect to the database");
	}
?>