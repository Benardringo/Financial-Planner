<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM users";

//execute the query

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> student financial planner</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/maincss.css">
	<script src="DataTables/datatables.min.js"></script>
	<link href="DataTables/datatables.min.css" rel="stylesheet">
    <script src="js/main.js" charset="utf-8"></script>

	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
table{ 
	margin-left: 50px;
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #073d80;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}
</style>
</head>
<body>
<header>
  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left_area">
    <h3>Financial <span>Planner</span></h3>
  </div>  
</header>
<?php include("fyp/admin.php");?>

	<div class="content">
<!--table class="table">
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
					<td><a class="btn btn-info" href="updat.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
<table><-->

	<table class="table table-bordered table-hover">

	<thead>
		<tr>
		<th>s/n</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Action</th>
	</tr>
	</thead>

							<tbody>

								<?php 

								$i = 1;

								$category = $conn->query("SELECT * FROM users order by id asc");

								while($row=$category->fetch_assoc()):

								?>

								<tr>

									<td class="text-center"><?php echo $i++ ?></td>

									
									<td class="">

										<p><b><?php echo $row['first_name'] ?></b></p>

									</td>
									
									<td class="">

										<p><b><?php echo $row['last_name'] ?></b></p>

									</td>
									<td class="">

										<p><b><?php echo $row['Email'] ?></b></p>

									</td>
									<td class="">

										<p><b><?php echo $row['gender'] ?></b></p>

									</td>

									<td class="text-center">
										<button class="btn btn-sm btn-outline-primary edit_tenant" type="button" data-id="<?php echo $row['id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-danger delete_tenant" type="button" data-id="<?php echo $row['id'] ?>">Delete</button>
                                     

								</tr>

								<?php endwhile; ?>

							</tbody>

						</table>
	</div>
	<script>

	$(document).ready(function(){
		$('table').dataTable()
	})
	
	$('#new_tenant').click(function(){
		uni_modal("New Tenant","manage_tenant.php","mid-large")
		
	})

	$('.view_payment').click(function(){
		uni_modal("Tenants Payments","view_payment.php?id="+$(this).attr('data-id'),"large")
		
	})
	$('.edit_tenant').click(function(){
		uni_modal("Manage Tenant Details","manage_tenant.php?id="+$(this).attr('data-id'),"mid-large")
		
	})
    $('.sms_tenant').click(function(){
		uni_modal("Send sms to:","sms.php?id="+$(this).attr('data-id'),"mid-large")
		
	})
	$('.delete_tenant').click(function(){
		_conf("Are you sure to delete this Tenant?","delete_tenant",[$(this).attr('data-id')])
	})
	
	function delete_tenant($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_tenant',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>

</body>
</html>