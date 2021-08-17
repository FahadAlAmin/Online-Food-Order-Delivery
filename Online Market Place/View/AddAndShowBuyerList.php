<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}


</style>

<head>

    <style type="text/css">
       
       .mainDivFormButton{
    
    margin-left: 2px; 
    font-size: 17px;
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

    <script src="../asset/javaScript/AddAndShowBuyerListValidation.js"></script>
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
                                <h2>ADD SELLER</h2>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForAddAndShowBuyerList.php" onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    
                                    Seller ID: <br>
                                    <input type="text" id="buyerid" name="buyerid">
                                    <span class="error" id="errorMsgBuyerid"></span>
                                    <br> <br>



                                    Seller Name: <br>
                                    <input type="text" id="name" name="name">
                                    <span class="error" id="errorMsgName"></span>
                                    <br> <br>


                                    Address : <br>
                                    <input type="text" id="address" name="address">
                                    <span class="error" id="errorMsgAddress"></span>
                                    <br> <br>

                                    Mobile Number: <br>
                                    <input type="text" id="mobilenumber" name="mobilenumber">
                                    <span class="error" id="errorMsgmobilenumber"></span>
                                    <br> <br>


                                    Email: <br>
                                    <input type="text" id="email" name="email">
                                    <span class="error" id="errorMsgEmail"></span>
                                    <br> <br>


                                    Purchased Food: <br>
                                    <input type="text" id="purchasedfood" name="purchasedfood">
                                    <span class="error" id="errorMsgpurchasedfood"></span>
                                    <br>   <br>


                                    


                                    


                                    


                                    

                                    <input class = "mainDivFormButton" type="submit" name="submit1" value="Add" >
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