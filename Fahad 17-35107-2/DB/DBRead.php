<?php

require 'DBConnect.php';

function login($username, $password){
	$conn = connect();

   $sql = $conn -> prepare("SELECT * FROM admin WHERE username = ? and password = ?");
   $sql -> bind_param("ss", $username, $password);

   $sql -> execute();

   $records = $sql -> get_result();

   $user = $result -> fetch_assos();

   $return ($records -> num_rows === 1);
   
}



function getUsers(){
	$conn = connect();
	$sql = $conn -> prepare("SELECT * FROM admin");
	$sql -> execute();
	$records = $sql -> get_result();
	return $records -> fetsch_all(MYSQLI_ASSOC);
}

?>