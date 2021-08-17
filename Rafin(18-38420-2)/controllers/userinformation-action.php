<?php

include "../DB/dbinsert.php";

$A_nameEr = $A_idEr = $A_emailEr= '';
$flag = false;
$successMesg = $errorMesg = "";
$A_Name = $A_Email  = $Aid  = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {






    if (empty($_POST["Aname"])) {

        $A_nameEr = "Applicant Name is required";
        $flag = true;
    }
    if (empty($_POST["Aid"])) {

        $A_idEr = "Applicant ID is required";
        $flag = true;
    }

    if (empty($_POST["Aemail"])) {

        $A_emailEr = "Email is required ";
        $flag = true;
    }



    

    if (!$flag) {
        
    $A_Name = input($_POST["Aname"]);
    $A_Id = input($_POST["Aid"]);
    $A_Email  = input($_POST["Aemail"]);
    

        $result=adduser($A_Id,$A_Name,$A_Email);

        if ($result) {
            $successMesg = " Succesfully Saved";
        } else {
            $errorMesg = "Error While saving";
        }
    }
}


function input($v)
{
    $v = htmlspecialchars($v);
    $v = trim($v);
    $v = stripslashes($v);
    return $v;
}



?>