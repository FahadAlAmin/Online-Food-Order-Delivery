<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
include "../controllers/payment-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/side.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 
    <body style="background-color:green ">
</head>
<body>
   
   <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST">
    <fieldset>
        <legend>Payment</legend>

         <label for="payment">payment <span style="color: red;">*</span></label>
        <input type="radio" id="Cash" name="payment" value="cash">
        <label for="cash">Cash of delivery</label>
        <input type="radio" id="online" name="payment" value="online">
        <label for="online">Online payment</label>
        
        <br>
        

        <br> <br>
        <input type="submit" name="submit" value="Submit"> <br> <br>     

   
  
<?php require "../controllers/includes/footer.php";
 ?>

</body>

</html>