<<?php 
   
     $conn = new mysqli("localhost", "fahad", 1234, "admin");

     if($conn -> connect_errno){
     	die("Connection Failed: ". $conn -> connect_errno);
     }

     echo " Database Connected Successfully ";



?>