<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Home</title>

    <!-- Styles -->
    <link href="Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="Content/Styles/jquery-ui.css" rel="stylesheet">
    <link href="Content/Styles/main.css" rel="stylesheet">

</head>
<body>
<?php include('Layouts/topNavIndex.php') ?>

<!-- ============================== -->
<!-- == Content Section          == -->
<!-- ============================== -->

<?php include('Layouts/contentStartIndex.php')?>


<!-- Our Content Goes Here -->
<h1 class="page-header">Site Map</h1>

<ul>
    <li><a href="index.php">Home</a></li>

    <li>Tools</li>
    <li style="list-style: none">
        <ul>
            <li><a href="Tools/plantSearch.php">Plant Search</a></li>
            <li><a href="Tools/plantByState.php">Plant By State</a></li>
            <li><a href="Tools/documentation.php">Documentation</a></li>
            <li><a href="Tools/culturalPlants.php">Cultural Plants</a></li>
            <li><a href="Tools/hardinessZones.php">Hardiness Zones</a></li>
            <li><a href="Tools/ecologicalSites.php">Ecological Sites</a></li>
        </ul>
    </li>
    <li>About</li>
    <li style="list-style: none">
        <ul>
            <li><a href="About/ourDatabase.php">Our Database</a></li>
            <li><a href="About/citations.php">Citations</a></li>
            <li><a href="About/help.php">Help</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">The NPDT</a></li>
            <li><a href="#>Our Partners</a></li>
            <li><a href="#">Acknowledgements</a></li>
        </ul>
    </li>
    <li><a href="#">Contact</a></li>
    <li>Account</li>
    <li style="list-style: none">
        <ul>
            <li><a href="MyGarden/overview.php">Overview</a></li>
            <li><a href="MyGarden/myGarden.php">My Gardeb</a></li>
            <li><a href="MyGarden/plog.php">Plog</a></li>
            <li><a href="MyGarden/settings.php">Settings</a></li>
        </ul>
    </li>
</ul>



<?php include('Layouts/contentEndIndex.php')?>



<!-- ============================== -->
<!-- == Script Section           == -->
<!-- ============================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="Content/jQuery/jquery-3.1.1.js"></script>
<script src="Content/jQuery/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="js/index.js"></script>

</body>
</html>