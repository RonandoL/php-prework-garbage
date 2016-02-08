<?php
    $message1_input = $_GET["message1"];
    $message2_input = $_GET["message2"];
    $message3_input = $_GET["message3"];
    $messages3 = encode3($message1_input, $message2_input, $message3_input);

    function encode3($message1, $message2, $message3)
    {
        $reversed_message = strrev($message1);
        $capitalized_message = strtoupper($message2);
        $reverse_cap_message = strtoupper(strrev($message3));
        $final_message = $reversed_message . $capitalized_message . $reverse_cap_message;
        return $final_message;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Encrypt a Message</title>
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
        <h1>Three Encoded Messages</h1>
        <p>Lorem ipsum dolor quis nostrud exercitation </p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-md-6">
            <h2>Messages encrypted!</h2>
            <h3>Message 1: <?php echo $message1_input; ?></h3>
            <h3>Message 2: <?php echo $message2_input; ?></h3>
            <h3>Message 3: <?php echo $message3_input; ?></h3>
            <h3>Final Message: <?php echo $messages3; ?></h3>
        </div>
      </div>  <!-- /Row -->





    </div>  <!-- /Container -->




  </body>
</html>
