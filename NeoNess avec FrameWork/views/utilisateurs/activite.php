<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Temps (en heure)');
        data.addRows([
          [<?php echo $activite['idsport']?>, 3],
          ['Crossfit', 1],
          ['Natation', 1],
          ['Course à pied', 1],
          ['Crossfit', 2],
          ['Marche', 2],
          ['Marche', 2]
        ]);

        // Set chart options
        var options = {'title':'Temps à pratiquer du sport',
                       'width': 600,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>

  <div class="row justify-content-center pt-5">

        <div class="col-5 mx-5 pt-5 pb-5 text-center text-white">
       
            <p class="fs-4 mb-5 bg-danger" style="border-radius: 10px;">Mes activités :</p>

            <!--Div that will hold the pie chart-->
            <div id="chart_div"></div>
        </div>
   </div>

   <?php $activite['idsport']?>
  </body>
</html>