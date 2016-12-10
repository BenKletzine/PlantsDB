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

    <title>PlantDB - Our Team</title>

    <!-- Styles -->
    <link href="../Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../Content/Styles/main.css" rel="stylesheet">

</head>
<body>
<?php include('../Layouts/topNav.php') ?>


<!-- ============================== -->
<!-- == Content Section          == -->
<!-- ============================== -->

<?php include('../Layouts/contentStart.php') ?>


<!-- Our Content Goes Here -->
<h1 class="page-header">Team</h1>
<p class="well">
    This site was designed by a team of students in a web development class from the University of Wisconsin Oshkosh.
</p>

<div class="panel panel-default">
    <div class="panel-heading">Team Members</div>
    <div class="panel-body">
        <p>
            The hardiness zones on the original USDA Map are based off of the averages of minimum temperatures compiled
            from 1976 until 2005. On the map, red indicates hot while blue to light purple indicates cold. The following
            chart reiterates specific information about each zone.
        </p>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Classification</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Matt Springer</td>
            <td>Student</td>
        </tr>
        <tr>
            <td>Ben Kletzine</td>
            <td>Student</td>
        </tr>
        <tr>
            <td>Jeff Berger</td>
            <td>Student</td>
        </tr>
        </tbody>
    </table>
</div>

<?php include('../Layouts/contentEnd.php') ?>


<!-- ============================== -->
<!-- == Script Section           == -->
<!-- ============================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../Content/jQuery/jquery-3.1.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>
</html>