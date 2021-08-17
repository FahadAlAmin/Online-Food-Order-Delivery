<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
</head>
<body bgcolor="#C1CD3C">

    <font size="9px">
	<marquee style="color:white" direction="left" bgcolor ="green">
	*** ONLINE FOOD ORDER AND DELIVERY SYSTEM *** ||| *** SELLER PART ***
	</marquee>
	</font>
	  
     <br> <br> 

	  <h1 style="color: black" align="center">LOGIN PAGE</h1>

	  

   <center>
   <form method="post" action="../Controller/LoginController2.php"> 
	
		<table border="4" cellspacing="4" width="20%">
			

				<tr>
					<th style="color: blue"> <h3> User Name </h3></th>
					<td width="40%"> <input type="text" name="username" id="username" size="20px"></td>
				</tr>
			
				<tr>
					<th style="color: blue"> <h3> Password </h3></th>
					<td width="40%"> <input type="text" name="password" id="password"></td>
				</tr>

				
				</font>

		        </table>
		
		<br>
	
		<input type="submit" value="Login" align="center" action = "Dashboard.php">
        &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  
		
		<button  type="button" onClick="document.location.href='Signup.php'">Signup</button> 
		
		<br>

		<h2> 

		<a class = "demo" href="ForgotPassword.php" style="
		text-decoration: none"> <b> Forgot Password? <b></a>
		</h2>
		
		</center>
        
        </form>


        <td style="border: 2px solid #000; border-collapse: collapse;">
		<?php include 'Footer.php'?>
		</td>



</body>
</html>