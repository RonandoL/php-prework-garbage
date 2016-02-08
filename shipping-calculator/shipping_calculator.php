<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $last_name = $_GET["last_name"];
    $cost = ($weight * $distance) * .025 - 15;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Shipping Calculator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Shipping Calculator</h1>
        <p>Lorem ipsum dolor quis nostrud exercitation </p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div id="">
                <h4 class="">Weight: <?php echo $weight; ?> lbs</h4>
                <h4 class="">Distance: <?php echo $distance; ?> miles</h4>
                <h4>Shipping Cost: $<?php echo $cost; ?></h4>
            </div>
        </div>
        <div class="col-md-4"></div>
      </div>  <!-- /Row -->





    </div>  <!-- /Container -->




  </body>
</html>
