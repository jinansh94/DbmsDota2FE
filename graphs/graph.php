<html>
  <head>
       <meta charset ="UTF-8">
        <meta name ="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "ie=edge">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js">
        </script>
        <link rel ="stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <title>My chart.js Chart</title>
      <link rel="stylesheet" type="text/css" href="test.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <?php
    $someVar = "chutya";
    ?>
   
      <script type="text/javascript">

      // Load Charts and the corechart and barchart packages.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart and bar chart when Charts is loaded.
      google.charts.setOnLoadCallback(drawChart);
        
    
    
   
    var javaScriptVar = "<?php echo $someVar; ?>";
      
       
   
      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          [javaScriptVar, 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        var piechart_options = {title:'Pie Chart: WHich',
                       width:400,
                       height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Line Chart: How Much Pizza I Ate Last Night',
                       width:400,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.LineChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
          
           var piechart_options = {title:'Column Chart1: WHich',
                       width:400,
                       height:300};
        var piechart = new google.visualization.ColumnChart(document.getElementById('piechart_div1'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Bar Chart: How Much Pizza I Ate Last Night',
                       width:400,
                       height:300,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div1'));
        barchart.draw(data, barchart_options);
      }
</script>
      
    </head>
<body>
    
    <nav class="navbar navbar-inverse">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img class="dota-home" src="img/Dota.png"></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="active"><a href="#">Explorer</a> </li>
                      <li><a href="Trends.html">Trends</a></li>
                      <li><a href="#hid">Log Out</a></li>
                      <li><a href="#contact">Contact Us</a></li>
                  </ul>
              </div>
          </div>
      </nav>
    
    
    
    <!--Table and divs that hold the pie charts-->
    <table class="columns" align="center">
      <tr>
        <td><div id="piechart_div" style="border: 1px solid #ccc"></div></td>
          <td><div id="barchart_div" style="border: 1px solid #ccc"></div></td>
      </tr>
         <tr>
          <td><div id="piechart_div1" style="border: 1px solid #ccc"></div></td>
          <td><div id="barchart_div1" style="border: 1px solid #ccc"></div></td>
      </tr>
        
       
    </table>
  </body>
</html>