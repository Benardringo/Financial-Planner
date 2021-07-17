<?php  
 $connect = mysqli_connect("localhost", "username", "password", "mifis");  
 $query ="SELECT * FROM users";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Datatables Jquery Plugin with Php MySql and Bootstrap</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 





      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
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
                                   <td><?php echo $row['last_name']; ?></td>
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
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 