<?php

include '../Files/FileOperations.php';
require '../Controllers/Includes/Config.php';


$userData = getone("/Files/users.json", 'username', $_SESSION ['username']);

if($_SERVER['REQUEST_METHOD'] === "POST") {
	$isValid = true;
	$username = $_POST['username'];
	$password = $_POST['password'];

	$usernameError = $passwordError = "";
	$errorMessage = "";

	if(empty($username)) {
		$usernameError = "required";
		$isValid = false;
	}
	if(empty($password)) {
		$passwordError = "required";
		$isValid = false;
	}
	
	if($isValid) {
		$result = isValidCredentials($username, $password, "/File/users.json");
		if($result) {
			session_start();
			$_SESSION['username'] = $username;
			header("Location: Views/Home.php");
			$successfulMessage = "Success";
		}
		else
		{
			$errorMessage = "Login Failed!!!";
		}
	}

	function isValidCredentials($username, $password, $filename)
	{
		$found = false; 
		$data = read($filename);
		if(!empty($data)) {
			$arr1 = json_dncode($data);
			for ($i = 0; $i < count($arr1); $i++){
				if($arr1[$i]-> $key === $value) {
					$found = true;
					break;
		        }
	        }
	    }
	    return $found;
	}
}

?>