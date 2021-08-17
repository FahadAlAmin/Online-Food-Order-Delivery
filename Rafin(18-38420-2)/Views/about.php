
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
    <title>Document</title>
  
</head>
<body style="background-color:green ">
<div class="about">
<h1> Contact Admin </h1>
<p>
Dear Customer,<br> This is a food delivery management system.Admin support: admin@gamil.com , mobile number = +96585858<br>

Thank you.</p>
<br><br><a href = "home.php" class="home-link"><b>Go back</b></a>
</div>





</body>
</html>