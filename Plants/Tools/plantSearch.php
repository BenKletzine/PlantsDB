<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Plant Search</title>

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
        <h1 class="page-header">Plant Search</h1>
        <p>The following is an autocomplete search for common plant names</p>

        <form action="" method="post">
            <p>
                <label for="txtPlantSearch">Search:</label>
                <input type='text' id="txtPlantSearch">
            </p>
        </form>

        <div id="plantCard">
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>Common Name:</td>
                        <td id="rowComName"></td>
                    </tr>
                    <tr>
                        <td>Scientific Name:</td>
                        <td id="rowSciName"></td>
                    </tr>
                    <tr>
                        <td>Family:</td>
                        <td id="rowFamily"></td>
                    </tr>
                    <tr>
                        <td>Symbol:</td>
                        <td id="rowSymbol"></td>
                    </tr>
                    <tr>
                        <td>Synonym:</td>
                        <td id="rowSynonym"></td>
                    </tr>
                    <tr>
                        <td>Id:</td>
                        <td id="rowId"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php include('../Layouts/contentEnd.php')?>



        <!-- ============================== -->
        <!-- == Script Section           == -->
        <!-- ============================== -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../Content/jQuery/jquery-3.1.1.js"></script>
        <script src="../Content/jQuery/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="plantSearch.js"></script>

    </body>
</html>