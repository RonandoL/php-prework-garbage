<?php
// Code downloaded from html-form-guide.com
// This code may be used and distributed freely without any charge.
//
// Disclaimer
// ----------
// This file is provided "as is" with no expressed or implied warranty.
// The author accepts no liability if it causes any damage whatsoever.
//

	if(isset($_POST['formSubmit']))
    {
		$aDoor = $_POST['formDoor'];
	if(empty($aDoor))
      {
		echo("<p>You didn't select any buildings.</p>\n");
	}
      else
      {
          $N = count($aDoor);

			echo("<p>You selected $N door(s): ");
			for($i=0; $i < $N; $i++)
			{
				echo($aDoor[$i] . " ");
			}
			echo("</p>");
		}
        //Checking whether a particular check box is selected
        //See the IsChecked() function below
        if(IsChecked('formDoor','A'))
        {
            echo ' A is checked. ';
        }
        if(IsChecked('formDoor','B'))
        {
            echo ' B is checked. ';
        }
        //and so on
	}

    function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Survey</title>
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
                  <h1>Survey</h1>
                  <h4><?php echo $friend_name; ?>,</h4>
          </div>  <!-- /Row -->
      </div>  <!-- /Container -->





  </body>
</html>
