<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/userinformation.js"></script>
    <title>Document</title>
    <style>
        input[type=text], select {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
        input[type=number] {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
.user-info{
    width: 50%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: "Times New Roman", Times, serif;
    font-weight: 400;
}
fieldset{
    margin-top: 20px;
}
.add{
    font-size: 20px;
    color: yellow;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: "Times New Roman", Times, serif;
    font-weight: 900;
    cursor:pointer;
    background-color: Red;
    
}
    </style>
</head>
<body style="background-color:green ">
<?php
include "../controllers/userinformation-action.php";
require "../controllers/includes/header.php";
require "../controllers/includes/side.php";
?>
<div class="user-info">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" onsubmit="return isValid()" name="AForm">
<h2 style="text-align: left; color:black; background-color:blueviolet">Add user information</h2>
    <fieldset>
        <legend> User Details</legend>
        <label for="Aid">User Id</label>
        <input type="number" name="Aid">  <span id="AidjsE" style="color: red;"> * <?php echo $A_idEr  ?></span> <br>
        <label for="Aname">User Name</label>
        <input type="text" name="Aname">  <span id="AnamejsE" style="color: red;"> * <?php echo $A_nameEr  ?></span> <br>
        <label for="Aemail">User Address</label>
        <input type="text" name="Aemail">  <span id="AemailjsE" style="color: red;"> * <?php echo $A_emailEr  ?></span> <br>
    </fieldset>
        
    </fieldset>
    <input type="submit" class="add" name="submit" value="Add"> <br> <br>
    <a href="showuser.php">Show User Details</a> 

    

</form>
</div>
<?php require "../controllers/includes/footer.php" ?>
</body>
</html>