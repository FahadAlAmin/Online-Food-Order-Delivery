<?php

require "dbconnect.php";



   function register($full_name, $username, $password){
       $conn =connect();
    $sql = $conn->prepare("INSERT INTO user (full_name, username, password) VALUES (?, ?, ?)");
    $sql-> bind_param("sss",$full_name, $username, $password);
   
   $sql->execute();
   $sql->close();
    $conn->close();
  
}

function adduser($Aid,$Aname,$Aemail){
    $conn =connect();
 $sql = $conn->prepare("INSERT INTO user_details (Aid,Aname,Aemail) VALUES (?,?,?)");
 $sql-> bind_param("sss",$Aid,$Aname,$Aemail);

$sql->execute();
$sql->close();
 $conn->close();

}



?>