<?php 
$buyerid = filter_input(INPUT_POST,'buyerid');
$name = filter_input(INPUT_POST,'name');
$address = filter_input(INPUT_POST,'address');
$mobilenumber = filter_input(INPUT_POST,'mobilenumber');
$email = filter_input(INPUT_POST,'email');
$purchasedfood = filter_input(INPUT_POST,'purchasedfood');



if(!empty($buyerid))

{

	    if (!empty($name))

	    {
             
                    $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "mobileshop";


					$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if($conn -> connect_error) 

						{
							die("Error in Data Base Connection: " . $conn -> connect_error);
						}

					else 

					{
							echo "<h3> Data Base Connection Successful </h3>";
							


					    $sql = "INSERT INTO addandshowbuyerlist (buyerid,name,address,mobilenumber,email,purchasedfood) values ('$buyerid','$name','$address','$mobilenumber','$email', '$purchasedfood')";

                         if ($conn->query($sql))

                        {

                        	echo " New Buyer Added Successfully";

						     $sql = "SELECT buyerid,name,address,mobilenumber,email,purchasedfood FROM addandshowbuyerlist"; // Query
							$result = $conn -> query($sql); // result set

							 if($result->num_rows > 0) 

							{
									// show result
							echo "<h1> Buyer's Information: </h1>";

							echo "<ol>";
							while($row = $result -> fetch_assoc()) 

							{
										
                             echo "<br>";
                             echo " Buyer ID = " . $row['buyerid'];
                             echo "<br>";
                             echo " Name = " . $row['name'];
                             echo "<br>";
                             echo "  Address = " . $row['address'];
                             echo "<br>";
                             echo "  Mobile Number = " . $row['mobilenumber'];
                             echo "<br>";
                             echo " Email = " . $row['email'];
                             echo "<br>";                           
                             echo "  Purchased Food= " . $row['purchasedfood'];
                             echo "<br>";
                             
                             

							}


							echo "</ol>";
							echo "<br>";

								}

							else 
								{
									echo "<p> Result is zero</p>";
								} 

							
                        } 

                            else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */

                        	echo " No Record Uploaded....."."<br>";

                           }





                           $conn->close();

                    }
                        


	    }



           else
           {

           	echo " Seller ID and Name must be filled";
           	die();
           }



}


else

{
    
	 echo "<h2> Please Fill The Necessary Details </h2";


	die();
}



 ?>




 <br><br>

   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/Dashboard.php'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




</table>

<div> 




	

	

