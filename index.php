<?php

include 'fyp/conn.php';

include("fyp/hearder.php");


?>

<!DOCTYPE html>
<html>
<head>

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

<?php include("fyp/topbar.php");?>
<?php include("fyp/dashsidebar.php");?>


	<div class="content" id="report">
<?php
include "fyp/conn.php";
$qry7=$con->query("select * from budget where id='$id' order by budget_id desc");
// $row=$qry7->fetch_assoc();
// $name = $row['Budget_name'];

while($row=$qry7->fetch_assoc()):
	//$row['Budget_name'];
	$name = $row['Budget_name'];
	?>
	<h2 style="color: #073d80; font-size: 30px; margin-left:300px;"><?php echo $row['Budget_name']; ?></h2>

	<table class="table table-bordered table-hover" >

	<thead>
		<tr>
		<th>s/n</th>
		<th>category</th>
		<th>name</th>
		<th>amount</th>
		<th>Action</th>
	</tr>
	</thead>

							<tbody>

								<?php 

								$i = 1;

								// $category = $con->query("SELECT * FROM expense order by expense_id desc");

									$category = $con->query("SELECT * FROM expense,budget,HAS WHERE expense.expense_id = HAS.expense_id AND budget.budget_id=HAS.budget_id AND Budget_name ='$name' AND id='$id'");

								while($row=$category->fetch_assoc()):

								?>

								<tr>

								<td class="text-center"><?php echo $i++ ?></td>

										<td class="">

										<p><b><?php echo $row['category'] ?></b></p>

									</td>
									
									
									<td class="">
										<p><b><?php echo $row['expense_name'] ?></b></p>



									</td>
								
									<td class="">

                                      <p><b><?php echo $row['amount'] ?></b></p>

									</td>

									<td>
							
								<a href="editexpense.php?id=<?php echo $row['expense_id']; ?>">Edit</a>
							</td>
							</td>
								</tr>

								<?php endwhile; ?>

							</tbody>

						</table>
						<?php endwhile; ?>
	</div>
	<script>

	// $(document).ready(function(){
	// 	$('table').dataTable()
	// })
	
	// $('#new_tenant').click(function(){
	// 	uni_modal("New Tenant","manage_tenant.php","mid-large")
		
	// })

	// $('.view_payment').click(function(){
	// 	uni_modal("Tenants Payments","view_payment.php?id="+$(this).attr('data-id'),"large")
		
	// })
	// $('.edit_tenant').click(function(){
	// 	uni_modal("Manage Tenant Details","manage_tenant.php?id="+$(this).attr('data-id'),"mid-large")
		
	// })
    // $('.sms_tenant').click(function(){
	// 	uni_modal("Send sms to:","sms.php?id="+$(this).attr('data-id'),"mid-large")
		
	// })
	// $('.delete_tenant').click(function(){
	// 	_conf("Are you sure to delete this Tenant?","delete_tenant",[$(this).attr('data-id')])
	// })
	
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

<script>

	$('#print').click(function(){

		var _style = $('noscript').clone()

		var _content = $('#report').clone()

		var nw = window.open("","_blank","width=800,height=700");

		nw.document.write(_style.html())

		nw.document.write(_content.html())

		nw.document.close()

		nw.print()

		setTimeout(function(){

		nw.close()

		},500)

	})

	$('#filter-report').submit(function(e){

		e.preventDefault()

		location.href = 'index.php?page=payment_report&'+$(this).serialize()

	})

</script>
</body>
</html>
