<?php
 session_start();
include_once '../includes/db_connect.php';
include_once '../includes/loginFunctions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - My Garden</title>

    <!-- Styles -->
    <link href="../Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../Content/Styles/main.css" rel="stylesheet">
      <script type="text/javascript" src="../js/loginHelper.js" ></script>
</head>
    <body>
        <?php include('../Layouts/topNav.php') ?>


        <!-- ============================== -->
        <!-- == Content Section          == -->
        <!-- ============================== -->

        <?php include('../Layouts/contentStart.php') ?>
         <p>&nbsp;</p>
         <?php if(login_check($db) == true){ ?>
           <script type="text/javascript">
                  var username = '<?php echo htmlentities($_SESSION['username']); ?>';
                  displayLoggedInStatus(username);
           </script>

        <p class="headline_bars">Your Garden</p>
        <img src="genericProfilePicture.jpg" alt="Profile Picture" class="largeProfilePicture"/>
        <h2>Your Name's Garden</h2>
        <div>
            <p>
                Details about your garden would go here.
            </p>
            <div>
                <input type="button" value="Add New Plant"/>
            </div>
            <div class="gardenPlant">
                <h3>Sweet Corn</h3>
                <p>
                    <span>Seeds Planted:</span>
                    <span class="seedsPlanted">20 seeds</span>
                    <span><input type="button" value="Update"/></span>
                </p>
                <p>
                    <span>Total Yield:</span>
                    <span class="yieldTotal">5</span>
                    <span><input type="button" value="Update"/></span>
                </p>
                <p>
                    <span>Plants Remaining:</span>
                    <span class="plantsRemaining">10</span>
                    <span><input type="button" value="Update"/></span>
                </p>
            </div>
            <div class="gardenPlant">
                <h3>Daisy</h3>
                <p>
                    <span>Seeds Planted:</span>
                    <span class="seedsPlanted">5 seeds</span>
                    <span><input type="button" value="Update"/></span>
                </p>
                <p>
                    <span>Total Yield:</span>
                    <span class="yieldTotal">0</span>
                    <span><input type="button" value="Update"/></span>
                </p>
                <p>
                    <span>Plants Remaining:</span>
                    <span class="plantsRemaining">5</span>
                    <span><input type="button" value="Update"/></span>
                </p>
            </div>
            <div class="gardenPlant">
                <h3>Sunflower</h3>
                <p>
                    <span>Seeds Planted:</span>
                    <span class="seedsPlanted">20 seeds</span>
                    <span><input type="button" value="Update"/></span>
                </p>
                <p>
                    <span>Total Yield:</span>
                    <span class="yieldTotal">3</span>
                    <span><input type="button" value="Update"/></span>
                </p>
                <p>
                    <span>Plants Remaining:</span>
                    <span class="plantsRemaining">18</span>
                    <span><input type="button" value="Update"/></span>
                </p>
            </div>
        </div>
        <?php }
        else { ?>
          <p>No access </p>
        <?php   } ?>
        <?php include('../Layouts/contentEnd.php')?>



        <!-- ============================== -->
        <!-- == Script Section           == -->
        <!-- ============================== -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../Content/jQuery/jquery-3.1.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    </body>
</html>
