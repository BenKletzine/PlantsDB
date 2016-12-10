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

    <title>PlantDB - Contact</title>

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

<h1 class="page-header">Contact</h1>

<p><span><b>* Please note that we are unable to answer questions about gardening, plant pathology, commercial sources of plants or plant materials, plant identification, plant importation or inspection, or other general plant topics.</b></span></p>
<p>For such questions, please consult these offsite sources of information:</p>

<ul>
    <li>Consult the <a href="http://www.csrees.usda.gov/Extension/index.html" target="_blank" title="PLANTS is not responsible for the content or availability of other Web sites.">agricultural or horticultural extension person</a> for your area. </li>
    <li>Consult your local <a href="http://offices.sc.egov.usda.gov/locator/app" target="_blank" title="PLANTS is not responsible for the content or availability of other Web sites.">Natural Resources Conservation Service (NRCS) district office</a>.</li>
    <li>Consult the USDA <a target="_blank" href="http://www.aphis.usda.gov/">Animal and Plant Health Inspection Service (APHIS)</a> for information about plant importation and inspection for material brought into the USA.</li>
    <li><a href="http://www.wildflower.org/expert/" target="_blank" title="PLANTS is not responsible for the content or availability of other Web sites.">Ask
            Mr. Smarty Plants </a> at
        the Ladybird Johnson Wildflower Center about native
        plant gardening.</li>
    <li>Use the search engines available on the Web.</li>
    <li>Consult your local nursery or grower.</li>
    <li>Ask your school, city, or university science reference librarian.</li>
</ul>



<?php include('../Layouts/contentEnd.php')?>
<!-- ============================== -->
<!-- == Script Section           == -->
<!-- ============================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../Content/jQuery/jquery-3.1.1.js"></script>
<script src="../Content/jQuery/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>

</html>
