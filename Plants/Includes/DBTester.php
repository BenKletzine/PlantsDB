<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Citations</title>

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



<?php
require 'PlantDB.php';

$pdb = new PlantDB();
$x = $pdb->GetAllSeasons();
var_dump($x);

?>


<form action="" method="post">
    <p>
        <label for="txtPlantSearch">Search:</label>
        <input type='text' id="txtPlantSearch">
    </p>
</form>



<?php include('../Layouts/contentEnd.php')?>

<!-- ============================== -->
<!-- == Script Section           == -->
<!-- ============================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../Content/jQuery/jquery-3.1.1.js"></script>
<script src="../Content/jQuery/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>

<script type="text/javascript">
    $(function () {
//        $("#txtPlantSearch").autocomplete({
//            source: "searchPlant.php",
//            minLength: 4
//        });

        $("#txtPlantSearch").autocomplete({
            source: function(request, response){
                $.ajax({
                    url: 'searchPlant.php',
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function(results){
                        response(results);
                    },
                    error: function( jxhr, textStatus, errorThrown) {
                        console.log(errorThrown);
                    }

                })
            },
            minLength: 4,
            select: function(event, data) {
                console.log(data);
            }
        })
    });

</script>
</body>

</html>
