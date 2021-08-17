<!DOCTYPE HTML>

<html>
	<head>
		<title>Login Page</title>
		
    
      <script src="../asset/javaScript/LoginValidation.js"></script> 

		<style>

			.error {color: #FF0000;}


		


		</style>

		<!-- <link rel="stylesheet" href="../asset/css/styleO.css"> -->
		<!-- <link rel="stylesheet" href="../asset/css/style1O.css">-->

		
	</head>

	<body background="\Web Tech\final\Online Market Place\View\5.jpg">  
		

		<?php
          

          require('../Controller/LoginController.php');


		?>



    <div  style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php //include 'Header1.php'?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2 style = "font-size:35px; font-style: bold ; color:black;text-align: center;">LOGIN</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   onsubmit="return validateForm()" >  

								

								<p style = "font-size:25px; font-weight: bold ; color:blue" > User Name: </p>    <input class="mainDivFormLabel" type="text" id = "name" name="name">

								<!-- <p id = "errorMsgName"></p>-->
                                <br>
								<span class="error" id ="errorMsgName"> <?php echo $nameErr;?></span>
								<br> 



								<p style = "font-size:25px; font-weight: bold ; color:blue"> Password: </p>      <input class ="mainDivFormLabel" type="Password" id="pwd" name="pwd">
								<br>
								<span class="error" id = "errorMsgPwd"> <?php echo $pwdErr;?></span>
								<br>

                                

								<input class = "mainDivFormButtonLogin" type="submit" name="submit1" value="Login" action = "Dashboard.php">
								<br>

								
							
								
								<br>
								
								 

								<h2> 

									<a class = "demo" href="ForgotPassword.php"> Forgot Password?</a>

								</h2>
								 

							</form>
							<br><br>

							<?php
								
							?>

						</div>	
					</td>
				</tr>

				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer.php'?>
					</td>
			



		<div>


	</body>
</html>
