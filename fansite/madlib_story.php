<?php
    $person1 = $_GET["person1"];
    $person2 = $_GET["person2"];
    $animal = $_GET["animal"];
    $exclamation = $_GET["exclamation"];
    $verb = $_GET["verb"];
    $noun = $_GET["noun"];
    
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>A fantastical adventure</title>
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
              <div class="col-sm-12">
                  <h1>A fantastical adventure</h1>
                  <p>One day, <?php echo $person1 ?> and <?php echo $person2 ?> were walking through the woods, when suddenly a giant <?php echo $animal ?> appeared. </p>
                  <p>"<?php echo $exclamation ?>", <?php echo $person1 ?> cried. </p>
                  <p>The two of them <?php echo $verb ?> as quickly possible, and when they were safe, <?php echo $person1 ?> and <?php echo $person2 ?> gave each other a giant <?php echo $noun ?>.</p>

          </div>  <!-- /Row -->
      </div>  <!-- /Container -->





  </body>
</html>
