<?php
  $name = $_GET["name"];
  $cool = $_GET["cool"];
  $color = $_GET["colors"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>PHP Survey</title>
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
            <div class="col-xs-6">
                <h2>PHP Survey</h2>
                <p>Here are the results of your survey</p>
                <h4><?php echo $name; ?></h4>
                <h4><?php echo $cool; ?></h4>
                <h5><?php echo $color; ?></h5>
            </div>
        </div>
    </div>  <!-- /Container -->

</body>


</html>
