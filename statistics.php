
<?php 
  include("fyp/hearder.php");
  include("fyp/conn.php");
 ?>
<body>
  <?php include("fyp/dashsidebar.php");?>
  <?php include("fyp/topbar.php");?>

   <div class="content">
                              
  
                                 <div class = "row">
                                 <div style="width:70%;height:900px;text-align:center">
                                      <h2 class="page-header" >EXPENCES </h2>
                                      <canvas  id="chartjs_bar"></canvas> 
                                  </div> 
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="js/chat.js"></script> 
  <script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                            backgroundColor: [
                                "#5160e4",
                               "#5160e4",
                               "#5160e4",
                               "#5160e4"
                            ],
                            data:<?php echo json_encode($sales); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
          </script>  

   </div>

       <?php include("fyp/script.php");?>
</body>
</html>                            



