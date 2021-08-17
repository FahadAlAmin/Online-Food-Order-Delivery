<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/user-action.js"></script>
    <title>Document</title>
    <style>
       
    
      

fieldset{
    margin-top: 10px;
}
.Search{
    font-size: 18px;
    color: whitesmoke;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: "Times New Roman", Times, serif;
    font-weight: 900;
    cursor:pointer;
    background-color: brown;
    
}

.user-search{
    width: 80%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: "Times New Roman", Times, serif;
    font-weight: 400;
    </style>
 
</head>
<body style="background-color:green ">

<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/side.php";

?>
<div class="user-search">
<form action="../controllers/user-action.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
    
       
        <label for="username">User Name :</label>
        <input type="text" id="username" name="username" >

        <br> <br>
        <input type="submit" class="Search" name="submit" value="Search">  <br> <br>
        <div id="result"><b>Here is the info</b></div>



</form>

</div>




<script >
                  function Result(pform) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?username=" +pform.username.value);
          xhttp.send();
       }
              </script>
<?php
include "../controllers/user-action.php";
require "../controllers/includes/footer.php";

?>

</body>
</html>