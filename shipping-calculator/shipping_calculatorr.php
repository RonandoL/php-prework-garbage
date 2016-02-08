<?php
    $input_weight =  $_GET["weight"];
    $input_distance = $_GET["distance"];
    $shipping_price = calculateShipping($input_weight, $input_distance);

    function calculateShipping($weight, $distance)
    {
      $price = ($distance / $weight) + 5;
      return $price;
    }
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
        <h1>Math</h1>
        <p>Lorem ipsum dolor quis nostrud exercitation </p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-sm-12">
          <h1>Price Calculated!</h1>
        <h3>Your package weighs: <?php echo $input_weight . " lbs"; ?> </h3>
        <h3>Your package is traveling: <?php echo $input_distance . " miles"; ?> </h3>
        <h3>The cost will be: $<?php echo $shipping_price; ?> </h3>
        </div>  <!-- /col-sm-12 -->
      </div>  <!-- /Row -->

    </div>  <!-- /Container -->

  </body>
</html>
