<?php
session_start();
 include "../DB/dbread.php";
$username = $password = "";
$Form_name = "";
$From_pass ="";
$flag =false;
$User_passwordEr = "";
$User_NameEr ="";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
if (empty($_POST["username"])) {
    $User_NameEr = "UserName is required";
    $flag = true;
}

if (empty($_POST["password"])) {
    $User_passwordEr = "password is required";
    $flag = true;
}


if(!$flag){
    $username =  input($_POST["username"]);
    $password = input($_POST["password"]);
    
    
    
      $result =login($username,$password);
      if($result){
        $_SESSION["username"]=$username;
      header("Location: ../Views/Home.php");
     echo "Success";
      
    }
    else
    {
    echo "<br>";
    echo "Invalid Password ";}
    }
    
   
   

  }



function input($data)
{
    $v = htmlspecialchars($data);
    $v = trim($data);
    $v = stripslashes($data);
    return $data;
}


?>
