<?php include "config.php";?>
<?php include "header.php";?>
<?php include "index1.php";?>
<html>
<head>
	<title>View Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> student financial planner</title>
    <link rel="stylesheet" href="css/main.css">


	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>


<body>
<header>
  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left_area">
    <h3>Financial <span>Planner</span></h3>
  </div>
  <div class="right_area">
    <a href="#" class="logout_btn">Balance</a>
  </div>
  <div class ="balance">
      Tsh 2000
    </div>
</header>
<?php include("fyp/admin.php");?>

<div class="content">
<div class="container-fluid">

	

	<div class="col-lg-12">

		<div class="row mb-4 mt-4">

			<div class="col-md-12">

				

			</div>

		</div>

		<div class="row">

			<!-- FORM Panel -->



			<!-- Table Panel -->

			<div class="col-md-12">

				<div class="card">

					<div class="card-header">

						<b>List of users</b>

						

					</div>

					<div class="card-body">

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
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                                 

                            </tr>

                            <?php endwhile; ?>

                        </tbody>

                    </table>

					</div>

				</div>

			</div>

			<!-- Table Panel -->

		</div>

	</div>	



</div>
 </div>
<?php include("script.php");?>
 
</body>
<style>

	

	td{

		vertical-align: middle !important;

	}

	td p{

		margin: unset

	}

	img{

		max-width:100px;

		max-height: :150px;

	}

</style>

<script>

	$(document).ready(function(){

		$('table').dataTable()

	})

	

	$('#new_invoice').click(function(){

		uni_modal("New invoice","manage_payment.php","mid-large")

		

	})

	$('.edit_invoice').click(function(){

		uni_modal("Manage invoice Details","manage_payment.php?id="+$(this).attr('data-id'),"mid-large")

		

	})

	$('.delete_invoice').click(function(){

		_conf("Are you sure to delete this invoice?","delete_invoice",[$(this).attr('data-id')])

	})

	

	function delete_invoice($id){

		start_load()

		$.ajax({

			url:'ajax.php?action=delete_payment',

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