<?php
 $connect = mysqli_connect("localhost", "root", "", "test");
 $query = "SELECT localisation, count(*) as number FROM promotion GROUP BY localisation";
 $result = mysqli_query($connect, $query);
 ?>
 <!DOCTYPE html>
 <html>
      <head>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Users | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">
  <link rel="stylesheet" href="assets/vendor/icon-set/style.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
  <link href="css/zoom.css" rel="stylesheet" media="all">
<!-- SWEETALERT -->
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body class="footer-offset">

  <!-- Pour acceuillir navbar.php -->
  <?php include_once('navbar.php'); ?>


  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <!-- End Row -->
    </div>
    <!-- End Page Header -->

           <title>Webslesson Tutorial | Make Simple Pie Chart by Google Chart API with PHP Mysql</title>
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
           <script type="text/javascript">
           google.charts.load('current', {'packages':['corechart']});
           google.charts.setOnLoadCallback(drawChart);
           function drawChart()
           {
                var data = google.visualization.arrayToDataTable([
                          ['localisation', 'number'],
                          <?php
                          while($row = mysqli_fetch_array($result))
                          {
                               echo "['".$row["localisation"]."', ".$row["number"]."],";
                          }
                          ?>
                     ]);
                var options = {
                      title: 'La Réparticipant des Promotions en Fonction de localisations',
                      //is3D:true,
                      pieHole: 0.4
                     };
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
           }
           </script>
      </head>
      <body>
           <br /><br />
           <div style="width:900px;">
                <h3 align="center"></h3>
                <br />
                <div id="piechart" style="width: 900px; height: 500px;"></div>
           </div>
           <div style="text-align:center"><a class="btn btn-secondary" href="promotions.php<?php echo "?id=".$row['id'] ?>">
                     retour à la liste </a></div>
      </body>
 </html>
