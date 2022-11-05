<?php 

$servername = "localhost";
$username = "u805731630_apis";
$password = "Api@@2022";
$dbname = "u805731630_apis";

 $conn = new mysqli($servername, $username, $password, $dbname);
//print_r($conn);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT `id`, `name`, `email`, `mobile` FROM new_api";
$result = $conn->query($sql);
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    
}