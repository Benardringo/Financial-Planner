<?php include("fyp/hearder.php");?>
  <body>


<?php include("fyp/dashsidebar.php");?>
<?php include("fyp/topbar.php");?>

<div class="content">


<form action="/action_page.php">
 <div class ="report">
    <div class ="date">
           <div class =" date1">
             <label for="birthday">from:</label></br>
             <input type="date" id="birthday" name="birthday">
         
      </div>
     <div class =" date2">
             <label for="birthday">to:</label></br>
             <input type="date" id="birthday" name="birthday">
     </div>
     <div class =" photo1">
          <img src="3.jpg" alt="Girl in a jacket" style="width:150px;height:150px;">
     </div>
     <div class =" photo2">
		    <img src="2.png" alt="Girl in a jacket" style="width:150px;height:150px;">
     </div>
     <div class ="button1">
         <button type="button" onclick="alert('Hello world!')">Click Me!</button>
     </div>
 </div>
</div>
</div>
</form>

</div>


<?php include("fyp/script.php");?>
</body>
</html>