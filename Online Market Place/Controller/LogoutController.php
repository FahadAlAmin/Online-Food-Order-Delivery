<?php

session_start();

   if ($_SERVER["REQUEST_METHOD"] == "POST") 

   {
        if (isset($_POST['Logout'])) 

        {
            session_destroy();

            header('Location:../View/Login2.php',true,303);
            exit;

        }

 
    }                 
?>