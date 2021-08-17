<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

    
</style>

<head>

    <style type="text/css">
       
       .mainDivFormButton{
    
    margin-left: 2px; 
    font-size: 16px;
    font-weight: bold;
    background-color: #F20606  ;
    border: none;
    color: white;
    padding: 5px 10px; 
    text-decoration: none;
    width:120px;
    margin-left: 15px; 
    
} 

   </style>

    <script src="../asset/javaScript/RemoveBuyerValidation.js"></script>
    <!-- <link rel="stylesheet" href="../asset/css/styleO.css"> -->
    <title>Dashboard</title>

</head>

<body>



  
  


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
                                <h2>Remove Seller</h2>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForRemoveBuyer.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    
                                    Seller ID: <br>
                                    <input type="text" id="buyerid" name="buyerid">
                                    <span class="error" id="errorMsgBuyerid"></span>
                                    <br> <br>

                                    <!-- <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Other">Other
                                    <span class="error">* <?php //echo $genderErr; ?></span>
                                    <br><br> -->

                                   <input class = "mainDivFormButton" type="submit" name="submit1" value="Remove" >
                                    <br>


                                </p>
                            </td>


                        </tr>

                        
                        </form>


                        <tr>
                            <td colspan="3">

                                <?php

								

							    ?>

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