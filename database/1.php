<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mifis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$a = "CREATE TABLE images (  
   `id` int(11) NOT NULL AUTO_INCREMENT,  
   `name` blob NOT NULL,  
   PRIMARY KEY (`id`)  
  )";

 $tables = [$a];


foreach($tables as $k => $sql){
    $query = @$conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}


foreach($errors as $msg) {
   echo "$msg <br>";
}

?>