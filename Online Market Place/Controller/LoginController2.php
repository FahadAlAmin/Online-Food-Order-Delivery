<?php

$username = $_POST['username'];
$password = $_POST['password'];


if (!empty($_POST["username"]) && !empty($_POST["password"]))

{
    if ($username =="Tridip" && $password =="1234")
     {

	echo "<p>Login Successful</p>";
	
	header('Location: ../View/Dashboard.php');
     }

     else

     {
     	echo "Wrong User Name or Password";
	    header('Location: ../View/LoginFailed.php'); 
     }

}


else
{
	echo "<h1> Please Fill Up The User Name and Password To Login </h1>";
}

?>