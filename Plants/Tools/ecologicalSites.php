﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>Layout Template</title>

    <!-- Styles -->
    <link href="../Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../Content/Styles/main.css" rel="stylesheet">

</head>
    <body>
        <?php include('topNav.php') ?>


        <!-- ============================== -->
        <!-- == Content Section          == -->
        <!-- ============================== -->

        <?php include('contentStart.php')?>


        <!-- Our Content Goes Here -->
        <h1 class="page-header">Ecological Sites</h1>
        <p>this will be a landing page that either points to or pulls in info from the esis.sc.egov.usda.gov site</p>
        <iframe src="https://esis.sc.egov.usda.gov/"></iframe>



        <?php include('contentEnd.php')?>



        <!-- ============================== -->
        <!-- == Script Section           == -->
        <!-- ============================== -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../Content/jQuery/jquery-3.1.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    </body>
</html>