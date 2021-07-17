<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> student financial planner</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/maincss.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script src="DataTables/datatables.min.js"></script>
    <link href="DataTables/datatables.min.css" rel="stylesheet">
    <script src="js/main.js" charset="utf-8"></script>
    <link rel="stylesheet" href="bootstrap.css" />
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap.js"></script>
<script src="ckeditor/ckeditor.js" ></script>
   
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2014', 1000],
          ['2015', 1170],
          ['2016', 660],
           ['2014', 1000],
          ['2015', 1170],
          ['2016', 660],
          ['2017', 1030]
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    <style>
th{
	font-size: 1.7rem;
	color: #073d80;
    font-weight: 700px;
	
}
td{ 
	font-size: 1.1rem;
    padding: 8px;
}
.button {
  margin-top: 20px;
  background-color: #175fb9;
  border: none;
  color: white;
  padding: 12px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
.button:hover {background-color: #073d80;}
.button2 {
  width: 45%;
  border-radius: 7px;
}

</style>
</head>