<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Hardiness Zone</title>

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
<h1 class="page-header">Hardiness Zones</h1>
<p class="well">
    Hardiness zones refer to the temperature in which plants are able to be grown. The ranges are color coded in the image
    and described in the table below. Many seeds come packaged with hardiness ratings that can be used determine the potential
    success the plant will have in growing at that particular climate.
</p>
<div class="text-center">
    <img class="img-thumbnail" src="../Content/images/HardinessMap.jpg" alt="A map of hardiness ratings">
</div>

<p class="text-muted text-center">Credit: This image is from the USDA Plants Site.</p>

<div class="panel panel-default">
    <div class="panel-heading">Hardiness Ratings</div>
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
            <th>Temp (F)</th>
            <th>Zone</th>
            <th>Temp (C)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>-60 to -55</td>
            <td>1a</td>
            <td>-51.1 to -48.3</td>
        </tr>
        <tr>
            <td>-55 to -50</td>
            <td>1b</td>
            <td>-48.3 to -45.6</td>
        </tr>
        <tr>
            <td>-50 to -45</td>
            <td>2a</td>
            <td>-45.6 to -42.8</td>
        </tr>
        <tr>
            <td>-45 to -40</td>
            <td>2b</td>
            <td>-42.8 to -40</td>
        </tr>
        <tr>
            <td>-40 to -35</td>
            <td>3a</td>
            <td>-40 to -37.2</td>
        </tr>
        <tr>
            <td>-35 to -30</td>
            <td>3b</td>
            <td>-37.2 to -34.4</td>
        </tr>
        <tr>
            <td>-30 to -25</td>
            <td>4a</td>
            <td>-34.4 to -31.7</td>
        </tr>
        <tr>
            <td>-25 to -20</td>
            <td>4b</td>
            <td>-31.7 to -28.9</td>
        </tr>
        <tr>
            <td>-20 to -15</td>
            <td>5a</td>
            <td>-28.9 to -26.1</td>
        </tr>
        <tr>
            <td>-15 to -10</td>
            <td>5b</td>
            <td>-26.1 to -23.3</td>
        </tr>
        <tr>
            <td>-10 to -5</td>
            <td>6a</td>
            <td>-23.3 to -20.6</td>
        </tr>
        <tr>
            <td>-5 to 0</td>
            <td>6b</td>
            <td>-20.6 to -17.8</td>
        </tr>
        <tr>
            <td>0 to 5</td>
            <td>7a</td>
            <td>-17.8 to -15</td>
        </tr>
        <tr>
            <td>5 to 10</td>
            <td>7b</td>
            <td>-15 to -12.2</td>
        </tr>
        <tr>
            <td>10 to 15</td>
            <td>8a</td>
            <td>-12.2 to -9.4</td>
        </tr>
        <tr>
            <td>15 to 20</td>
            <td>8b</td>
            <td>-9.4 to -6.7</td>
        </tr>
        <tr>
            <td>20 to 25</td>
            <td>9a</td>
            <td>-6.7 to -3.9</td>
        </tr>
        <tr>
            <td>25 to 30</td>
            <td>9b</td>
            <td>-3.9 to -1.1</td>
        </tr>
        <tr>
            <td>30 to 35</td>
            <td>10a</td>
            <td>-1.1 to 1.7</td>
        </tr>
        <tr>
            <td>35 to 40</td>
            <td>10b</td>
            <td>-1.7 to 4.4</td>
        </tr>
        <tr>
            <td>40 to 45</td>
            <td>11a</td>
            <td>4.4 to 7.2</td>
        </tr>
        <tr>
            <td>45 to 50</td>
            <td>11b</td>
            <td>7.2 to 10</td>
        </tr>
        <tr>
            <td>50 to 55</td>
            <td>12a</td>
            <td>10 to 12.8</td>
        </tr>
        <tr>
            <td>55 to 60</td>
            <td>12b</td>
            <td>12.8 to 15.6</td>
        </tr>
        <tr>
            <td>60 to 65</td>
            <td>13a</td>
            <td>15.6 to 18.3</td>
        </tr>
        <tr>
            <td>65 to 70</td>
            <td>13b</td>
            <td>18.3 to 21.1</td>
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