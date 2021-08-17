<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

    

</style>

<head>


   <style type="text/css">
       
       .mainDivFormButton{
    
    margin-left: 2px; 
    font-size: 15px;
    font-weight: bold;
    background-color:  #14aa05  ;
    border: none;
    color: black;
    padding: 6px 10px; 
    text-decoration: none;
    width:100px;
    margin-left: 15px; 
    
} 

   </style>

    
    <title>Dashboard</title>

</head>

<body>


   



  <?php

       require('../Controller/EditProfileController.php');

  ?>
  


    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Header2.php'; ?>
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
                    <?php include 'Navigationbar.php'; ?>
                </td>
                <td>
                    <table width="75%">
                        <tr>
                            <td colspan="3">
                                <h2>EDIT YOUR PROFILE</h2>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForEditProfile.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    Name: <br>
                                    <input type="text" id="name" name="name">
                                    <span class="error" id="errorMsgName"><?php echo $nameErr; ?></span>
                                    <br> <br>


                                    Email: <br>
                                    <input type="text" id="email" name="email">
                                    <span class="error" id="errorMsgEmail"><?php echo $emailErr; ?></span>
                                    <br> <br>


                                    <!-- <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Other">Other
                                    <span class="error">* <?php //echo $genderErr; ?></span>
                                    <br><br> -->


                                    Date of Birth : <br>
                                    <input type="date" id="dob" name="dob">
                                    <span class="error" id="errorMsgDOB"><?php echo $dobErr; ?></span>
                                    <br> <br>


                                    Address : <br>
                                    <input type="text" id="address" name="address">
                                    <span class="error" id="errorMsgAddress"><?php echo $addressErr; ?></span>
                                    <br> <br>


                                    

                                    <input class = "mainDivFormButton" type="submit" name="submit1" value="Submit" >
                                    <br>


                                </p>
                            </td>


                        </tr>

                        
                        </form>


                        <tr>
                            <td colspan="3">

                              

                            </td>
                        </tr>


                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Footer2.php'; ?>
                </td>
            </tr>

        </table>
        <div>
</body>

</html>