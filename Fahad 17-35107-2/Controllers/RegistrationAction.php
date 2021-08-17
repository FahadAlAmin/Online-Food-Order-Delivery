<?php

include '../Files/FileOperations.php';

$userData = getone("/Files/users.json", 'username', $_SESSION ['username']);

if($_SERVER['REQUEST_METHOD'] === "POST") {
	$isValid = true;
	$username = $_POST['username'];
	$password = $_POST['password'];

	$usernameError = $passwordError = $fullnameError = $emailError = $addressError = $phonenumberError = "";
	$errorMessage = "";

	if(empty($username)) {
		$usernameError = "required";
		$isValid = false;
	}
	if(empty($password)) {
		$passwordError = "required";
		$isValid = false;
    }
	if(empty($fullname)) {
		$fullnameError = "required";
		$isValid = false;
    }
	if(empty($address)) {
		$addressError = "required";
		$isValid = false;
    }
	if(empty($email)) {
		$emailError = "required";
		$isValid = false;
    }
	if(empty($phonenumber)) {
		$phonenumberError = "required";
		$isValid = false;
    }
}