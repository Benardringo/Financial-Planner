


<?php
session_start();
if(empty($_SESSION['id'])):
header('Location: signin.html');
endif;

 $connect = mysqli_connect("localhost", "username", "password", "financial");  
 $query ="SELECT * FROM users";  
 $result = mysqli_query($connect, $query);  


include("fyp/hearder.php");?>

  <body>
<header>
  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left_area">
    <h3>Financial <span>Planner</span></h3>
  </div>

</header>
<html>

<?php include("fyp/admin.php");?>

<div class="content">
<div class="container">  
                <h2 >Users acounts</h2>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>id</td>  
                                    <td>first name</td>  
                                    <td>last name</td>  
                                    <td>gender</td>  
                                    <td>Email</td>  
                                    <td>action</td>  

                               </tr>  
                          </thead>  
                          <?php  
                          $query ="SELECT * FROM users";  
                          $result = mysqli_query($connect, $query); 
                          while($row=mysqli_fetch_array($result)){
						?> 
 
                               <tr>  
                               <td><?php echo $row['id']; ?></td>
                                   <td><?php echo $row['first_name']; ?></td>
                                   <td><?php echo $row['Last_name']; ?></td>
                                   <td><?php echo $row['gender']; ?></td>
							<td><?php echo $row['Email']; ?></td>
                              <td>
								<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
							</td>
                               </tr>  
                               
                               <?php
					}
				?> 
                     </table>  
                </div>  
           </div>  
</div>

<?php include("fyp/script.php");?>
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 


