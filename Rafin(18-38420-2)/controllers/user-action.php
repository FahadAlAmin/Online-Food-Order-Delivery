

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  width: 90%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
<body>
    


<?php 


include "../DB/dbread.php";


if(isset($_GET['username'])){
	$allSearchedUsers = searchUser($_GET['username']);
    echo "<table>
<tr>
<th>Full Name</th>
<th>User Name</th>
<
</tr>";

    echo "<tr>";
    echo "<td>" . $allSearchedUsers['full_name']  . "</td>";
    echo "<td>" . $allSearchedUsers['username']  . "</td>";

   }
   ?>

  


  
    





</body>
</html>