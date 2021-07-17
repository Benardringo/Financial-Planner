<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "financial";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
} 

/*
$servername = "sqlXXX.epizy.com";
$username = "epiz_28659440";
$password = "1LKuHTBR0OQ";
$dbname = "epiz_28659440_XXX";
$con  = mysqli_connect("localhost","root","","salesdb");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }
*/
else{
         $sql8 =" select expense_name as Product ,count(expense_name) as TotalSales from expense group by expense_name ;";
         $result = mysqli_query($con,$sql8);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $productname[]  = $row['Product']  ;
            $sales[] = $row['TotalSales'];
        }

      
 
 }

?>