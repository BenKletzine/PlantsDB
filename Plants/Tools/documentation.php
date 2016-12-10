<?php
session_start();
include_once '../Includes/db_connect.php';
include_once '../Includes/loginFunctions.php';

if (login_check($db) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
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

    <title>PlantDB - Documentation</title>

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

        <h1 class="page-header">Documentation</h1>
        <p class="well">The following documentation is provided by the Plants site and is open for access to all users. The files are available in pdf format.</p>

        <dl class="dl-horizontal">
            <dt>Plants:</dt>
            <dd>
                <a href="../Content/documents/PLANTS_Flyer_1-page.pdf" download="Flyer for the Plants Site">one page flyer (PDF; 176KB)</a>
            </dd>
            <dd>
                <a href="../Content/documents/PLANTS_Flyer_2-page.pdf" download="Flyer for the Plants Site">two page flyer (PDF; 325KB)</a>
            </dd>

            <dt>NP Data Team:</dt>
            <dd>
                <a href="../Content/documents/NPDT_2Page.pdf" download="Flyer for the Plants Team">NPDT two page flyer (PDF; 913KB)</a>
            </dd>
            <dd>
                <a href="../Content/documents/NPDT_3Fold.pdf" download="Flyer for the Plants Team">NPDT three-fold, two page flyer (PDF; 696KB)</a>
            </dd>

            <dt>Tutorials:</dt>
            <dd>
                <a href="../Content/documents/plants_tutorial.pdf" download="Plant tutorial">Plants Tutorial (PDF; 575KB)</a>
            </dd>
        </dl>





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