<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Plants By State</title>

    <!-- Styles -->
    <link href="../Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../Content/Styles/main.css" rel="stylesheet">

</head>
    <body>
        <?php include('../Layouts/topNav.php') ?>


        <!-- ============================== -->
        <!-- == Content Section          == -->
        <!-- ============================== -->

        <?php include('../Layouts/contentStart.php')?>


        <!-- Our Content Goes Here -->
        <h1 class="page-header">Plants By State</h1>
        <p>This will contain a tool that works with the DB to pull in</p>

        <!--
        Current JQuery Plugin Provided by:
        https://newsignature.github.io/us-map/#usage-style-options
        This provides an iMap with bound click events -- Everything beyond is customized
        -->

        <div id="map" style="width: 930px; height: 630px;"></div>



        <?php include('../Layouts/contentEnd.php')?>
        <!-- ============================== -->
        <!-- == Script Section           == -->
        <!-- ============================== -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../js/raphael.js"></script>

        <script src="../Content/jQuery/jquery-3.1.1.js"></script>
        <script src="../Content/jQuery/jquery-ui.js"></script>
        <script src="../js/us-map.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="plantByState.js"></script>
    </body>
</html>