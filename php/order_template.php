<?php
    $recipient = "Ed";
    $downtown_address = "208 SW 5th Ave #105, Portland, OR 97204";
    $northwest_address = "1978 19th Ave, Portland, OR 97209";
    $south_address = "1493 SW 2nd Ave, Portland, OR 97201";
    $downtown_order = "20 lbs dark roast, 15 lbs light roast.";
    $northwest_order = "50 lbs dark roast.";
    $south_order = "40 lbs light roast.";
    $mt_hood_address = "1234 Mt. Hood Street.";
    $mt_hood_order = "1000 lbs packed snow.";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title></title>
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
                <h2>Hi <?php echo $recipient; ?>, </h2>
                <p>Just making my weekly order. Details are below.</p>
                <h3><?php echo $downtown_order; ?></h3>
                <p><?php echo $downtown_address; ?></p>
                <h3><?php echo $northwest_order; ?></h3>
                <p><?php echo $northwest_address; ?></p>
                <h3><?php echo $south_order; ?></h3>
                <p><?php echo $south_address; ?></p>
                <h3><?php echo $mt_hood_order; ?></h3>
                <p><?php echo $mt_hood_address; ?></p>
                <p>Thanks,</p>
                <p>Diane</p>
            </div>
        </div>
    </div>  <!-- /Container -->

</body>


</html>
