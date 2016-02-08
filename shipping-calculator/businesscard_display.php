<?php
    $first_name = $_GET["first_name"];
    $middle_name = $_GET["middle_name"];
    $last_name = $_GET["last_name"];
    $occupation = $_GET["occupation"];
    $slogan = $_GET["slogan"];
    $email = $_GET["email"];
    $card_header = $first_name . " " . $middle_name . " " . $last_name;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Business Card Display</title>
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
        <h1>Business Card Display</h1>
        <p>Lorem ipsum dolor quis nostrud exercitation </p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div id="card">
                <h3 class="card_header"><?php echo $card_header; ?></h3>
                <h4 class="card_header"><?php echo $occupation; ?></h4>
                <h5 class="card_text"><?php echo $slogan; ?></h5>
                <h5 class="contact"><?php echo $email; ?></h5>
            </div>
        </div>
        <div class="col-md-4"></div>
      </div>  <!-- /Row -->





    </div>  <!-- /Container -->




  </body>
</html>
