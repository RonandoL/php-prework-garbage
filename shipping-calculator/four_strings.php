<?php
    $string1 = $_GET["string1"];
    $string1upper = strtoupper($string1);
    $string2 = $_GET["string2"];
    $string2count = str_word_count($string2);
    $string3 = $_GET["string3"];
    $string3shuffle = str_shuffle($string3);
    $string4 = $_GET["string4"];
    $string4stripped = stripos($string4, "you");  // to output the numbered position (called the index) of the first occurrence of the word "you"
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Four Strings</title>
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
        <h1>Four Strings</h1>
        <p>Lorem ipsum dolor quis nostrud exercitation </p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-md-6">
            <div id="">
              <h4>Word 1: strtoupper</h4>
              <h4>Word: <?php echo $string1; ?>: <?php echo $string1upper; ?></h4>

              <h4>Word 2: str_word_count</h4>
              <h4>Word: <?php echo $string2; ?>: <?php echo $string2count; ?></h4>

              <h4>Word 3: str_shuffle</h4>
              <h4>Word: <?php echo $string3; ?>: <?php echo $string3shuffle; ?></h4>

              <h4>Word 4: stripos</h4>
              <h4>Word: <?php echo $string4; ?>: <?php echo $string4stripped; ?></h4>
            </div>
        </div>
      </div>  <!-- /Row -->





    </div>  <!-- /Container -->




  </body>
</html>
