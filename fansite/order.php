<?php
    $firstName = $_GET["firstName"];
    $lastName = $_GET["lastName"];
    $address = $_GET["address"];
    $state = $_GET["state"];
    $zip = $_GET["zip"];
    $image = "src='images/vehicle.jpg' alt=''";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Receipt</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <h1>Receipt</h1>
                  <h3>Customer:</h3>
                  <p>Name: <?php echo $firstName; ?> <?php echo $lastName; ?></p>
                  <p>Street: <?php echo $address; ?></p>
                  <p>State, Zip: <?php echo $state; ?>, <?php echo $zip; ?></p>
                  <hr>
                  <p>You ordered <?php echo $qty; ?> of our new fangled vehicle.</p>
                  <p>Your total is $78,000</p>
                  <img <?php echo $image; ?> />
                  <hr>

                  <p>Thank you for your order <?php echo $firstName?>, we look forward to meeting all of your future hardware needs. </p>


          </div>  <!-- /Row -->
      </div>  <!-- /Container -->





  </body>
</html>
