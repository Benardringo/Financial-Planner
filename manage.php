<?php
/*
session_start();
if(empty($_SESSION['id'])):
header('Location: signin.html');
endif;
*/

<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>
include("fyp/hearder.php");?>
  <body>


<?php include("fyp/admin.php");?>
<input type="checkbox" id="check">
<?php include("fyp/topbar.php");?>

<div class="content">
<h2>users</h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['first_name']; ?></td>
					<td><?php echo $row['last_name']; ?></td>
					<td><?php echo $row['Email']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>

</div>

<?php include("fyp/script.php");?>
</body>
</html>