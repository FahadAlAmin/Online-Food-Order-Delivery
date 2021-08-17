<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("Location: ./Login.php");
}
?>
<?php  

include "../DB/dbconnect.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

		#user-details td {
  border: 2px solid #ddd;
  padding: 8px;
}
#user-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}






	</style>
</head>
<body>
    <body style="background-color:green ">
<?php 
require "../controllers/includes/header.php";
require "../controllers/includes/side.php";
?>
<?php $conn=connect();
    $sql =$conn->prepare("SELECT * FROM user_details");
    $sql->execute();
    $result=$sql->get_result(); ?>
<table id="User-details">
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			<th style="margin:5px;">User Id</th>
			<th > User name</th>
			<th>User email</th>
		
            

		</tr>
	</thead>
	<tbody>
		<?php    foreach($result as $value):?>
			<tr>
            <td><?php echo $value['Aid'] ?></td>
            <td><?php echo $value['Aname'] ?></td>				
		<td><?php echo $value['Aemail']?></td>
				
			</tr>
			<?php endforeach ?>
	
		

	</tbody>
	

</table>
<?php require "../controllers/includes/footer.php";
 ?>

</body>
</html>