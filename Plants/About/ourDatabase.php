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

    <title>PlantDB - Our Database</title>

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

        <h1 class="page-header">The PLANTS Database</h1>
        <p>
            This database was designed to utilize the same dataset as the USDA Plants website, that offers a csv
            of the original data.
        </p>

        <div class="panel panel-default">
            <div class="panel-heading">Our Implementation</div>
            <div class="panel-body">
                <p>
                    This site was developed with the intent of creating user/account functionality. A user is able to register an login,
                    see their profile, and manage their account. The basic tools and features of the site are still open for all.
                </p>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">Original Statement from the USDA Site</div>
            <div class="panel-body">
                <p>PLANTS is a collaborative effort of the <a href="http://www.nrcs.usda.gov/wps/portal/nrcs/detail/national/plantsanimals/plants/?&cid=stelprdb1047060" onclick="_gaq.push(['_trackEvent', 'External Plants Service', 'Click Link to External Service', 'NPDT Info Page']);">USDA
                        NRCS National Plant Data Team</a> (NPDT), the <a href="http://www.itc.nrcs.usda.gov/">USDA
                        NRCS Information Technology Center</a> (ITC), The <a href="http://www.ocio.usda.gov/nitc/index.html">USDA
                        National Information Technology Center</a> (NITC), and many
                    other partners. Much of the PLANTS data and design is developed
                    at NPDT, and the Web application is programmed at ITC and
                    NITC and served through the USDA Web Farm. Here&rsquo;s
                    more information about who does what on the PLANTS Team, our Partners, and our Data Contributors.
                </p>
            </div>
        </div>

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