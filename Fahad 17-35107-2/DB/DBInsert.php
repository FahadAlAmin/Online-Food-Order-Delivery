
<?php

include 'DBconnect.php';

    $sql = "INSERT INTO USER (username, password) VALUES (?, ?); ";
    $sql -> db2_bind_param("ss", $username, $password);

    $username = "fahad";
    $password = "1234";

    $sql -> execute();

    $conn -> close();

    function register($username, $password) {
    	$sql = "INSERT INTO USER (username, password) VALUES (?, ?); ";
        $sql -> db2_bind_param("ss", $username, $password);

        $response = $sql -> execute();

        $conn -> close();
    }


?>