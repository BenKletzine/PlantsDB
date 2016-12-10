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

    <title>PlantDB - Acknowledgements</title>

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

<h1 class="page-header">Acknowledgements</h1>

<div class="panel panel-default">
    <div class="panel-heading">Official Site</div>
    <div class="panel-body">
        <p>
            Please see the original USDA Website for official information.
        </p>
    </div>
    <div class="panel-heading">Database Design</div>
    <div class="panel-body">
        <p>
            The database design of this site was made possible by the open source CSV distributed by the USDA Site
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