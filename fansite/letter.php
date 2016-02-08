<?php
    $friend_name = $_GET["recipient"];
    $my_name = $_GET["sender"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Restaurant au Moir</title>
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
                  <h1>Greetings From Afar</h1>
                  <p>Dear <?php echo $friend_name; ?>,</p>
                  <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming!</p>
                  <p><?php echo "Jennifer"; ?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me.</p>
                  <p>Looking forward to seeing you soon. I'll bring you back a souvenir.</p>
                  <p>Cheers,</p>
                  <p><?php echo $my_name; ?></p>
          </div>  <!-- /Row -->
      </div>  <!-- /Container -->





  </body>
</html>
