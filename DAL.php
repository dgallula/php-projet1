<?php

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="shop";


// Create connection

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());



 // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM product";

// FUNCTION 

function getres($sql) {
    $result =  $GLOBALS['$conn']->query($sql);

    if ($result->num_rows > 0) {
        return $result;

        
    }
}

 // output data of each row
 while($row = getres($sql)->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["descr"]. "price " . $row["price"]. "<br>";
 }


    ?>

 