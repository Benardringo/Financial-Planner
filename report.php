<?php

session_start();
if(empty($_SESSION['id'])):
header('Location: signin.html');
endif;

include("fyp/hearder.php");?>
  <body>
<?php include("fyp/dashsidebar.php");?>
<?php include("fyp/topbar.php");?>

<div class="content">


<form action="/action_page.php">
 <div class ="report">
    <div class ="date">
           <div class =" date1">
             <label>from:</label>
             <input type="date" id="birthday" name="birthday">
         
      </div>
     <div class =" date2">
             <label for="birthday">to:</label>
             <input type="date" id="birthday" name="birthday">
     </div>
     <div class =" photo1">
          <img src="3.jpg" alt="Girl in a jacket" style="width:130px;height:150px;">
     </div>
     <div class =" photo2">
		    <img src="2.png" alt="Girl in a jacket" style="width:130px;height:150px;">
     </div>
     <div class ="button1">
         <button type="button" onclick="alert('done')"><p> Generate</p></button>
     </div>
 </div>
</div>
</div>
</form>

</div>


<?php include("fyp/script.php");?>
</body>
</html>