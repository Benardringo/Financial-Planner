<?php
session_start();
$id=$_SESSION['id'];

 include 'fyp/conn.php';

$name= $_POST['name'];
$category= $_POST['category'];
$amount= $_POST['amount'];
$item= $_POST['item'];
$Actual_amount=$amount * $item;

$query=mysqli_query($con, "select * from users where id='$id'");
$num=mysqli_fetch_array($query);
     $bnc=$num['balance'];
     $total = $bnc-$Actual_amount;
     echo $bnc;
     echo $Actual_amount;
     echo $total;


$sql = "INSERT INTO expense (amount,category,expense_name) VALUES ('$Actual_amount','$category','$name')";

if(mysqli_query($con, $sql)){

	$qry1=$con->query("select * from budget order by budget_id desc");
$row=$qry1->fetch_assoc();
$b_id=$row['budget_id'];

$qry2=$con->query("select * from expense order by expense_id desc");
$row=$qry2->fetch_assoc();
$ex_id=$row['expense_id'];

$sql1 = "INSERT INTO HAS (expense_id,budget_id) VALUES ('$ex_id','$b_id')";


   

    if(mysqli_query($con, $sql1)){

$sql6="UPDATE users SET balance='$total' WHERE id='$id'";

        if(mysqli_query($con, $sql6)){
              header("Location: spend.php");
                }else{
                echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
            }
            
    }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
}

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 ?>