<?php
    $input_number =  $_GET["number"];
    $square = calculateSquare($input_number);

    function calculateSquare($number)
    {
      $square = ($number * $number);
      return $square;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Square</title>
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
        <h1>Square</h1>
        <p>Lorem ipsum dolor quis nostrud exercitation </p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-sm-12">
          <h1>Square Calculated!</h1>
        <h3>Your number: <?php echo $input_number; ?> </h3>
        <h3>Your number squared: <?php echo $square; ?> </h3>
        </div>  <!-- /col-sm-12 -->
      </div>  <!-- /Row -->

    </div>  <!-- /Container -->

  </body>
</html>
