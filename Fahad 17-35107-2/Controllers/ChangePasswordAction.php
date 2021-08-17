<?php

include '../Files/FileOperations.php';

$userData = getone("/Files/users.json", 'username', $_SESSION['username']);
$id = $userData->id;
$fullName = $userData->fullName;
$username = $userData->username;
$password = $userData->password;

if($_SERVER['REQUEST_METHOD'] === "POST") {
	$isValid = true;
	$password = $_POST['password'];

	$fullNameError = $usernameError = $passwordError = "";
	$successfulMessage = $errorMessage = "";

	if(empty($fullName)) {
		$fullNameError = "required";
		$isValid = false;
	}
	if(empty($username)) {
		$fullNameError = "required";
		$isValid = false;
	}
	if(empty($password)) {
		$fullNameError = "required";
		$isValid = false;
	}
	if($isValid) {
		$arr-array('fullName'=> $fullName, 'username'=> $username, 'password'=> $password);
		$result = update(".. /File/users.json", $arr, 'username', $username);
		if($result) {
			$successfulMessage = "Success";
		}
		else
		{
			$errorMessage = "Error!!! Try Again";
		}
	}
}
?>