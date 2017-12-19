<?php
	$conn_db = 	mysqli_connect('mysql.hostinger.com.br','u629641304_gdv','123456789','u629641304_gdv');
	$sqlInsert = "SELECT count(codi_marc) as qde FROM `fixo_marca`";
	$retorno = mysqli_query($conn_db,$sqlInsert);
	$resultado = mysqli_fetch_array($retorno);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Tipo', 'Status'],
          ['Preenchidos',     <?php echo $resultado['qde']; ?>],
          ['Restantes',      <?php echo (150 - $resultado['qde']); ?>],
        ]);

        var options = {
          title: 'Registro na base',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 400px; height: 300px;"></div>
  </body>
</html>
