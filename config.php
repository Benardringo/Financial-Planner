<?php

$usr = "username";

$pwd  = "password";

$db   = "mifis";

$host = "localhost";

$conn= mysqli_connect($host,$usr,$pwd,$db);

if (!$conn) {

 echo("ERROR: " . mysqli_error()

 . "\n");

}else {
    echo ("deal done");
}

?>
