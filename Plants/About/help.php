<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Help</title>

    <!-- Styles -->
    <link href="../Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="../Content/Styles/jquery-ui.css" rel="stylesheet">
    <link href="../Content/Styles/main.css" rel="stylesheet">

</head>
    <body>
        <?php include('../Layouts/topNav.php') ?>


        <!-- ============================== -->
        <!-- == Content Section          == -->
        <!-- ============================== -->

        <?php include('../Layouts/contentStart.php')?>

        <h1 class="page-header">Help</h1>

        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Login & Registration</a></li>
                <li><a href="#tabs-2">Tools</a></li>
                <li><a href="#tabs-3">Feature Creep</a></li>
                <li><a href="#tabs-4">DB Check-in</a></li>
            </ul>
            <div id="tabs-1">

                <div class="panel panel-default">
                    <div class="panel-heading">Username & Email</div>
                    <div class="panel-body">
                        <p>
                            Usernames and emails must both be unique. If you are having trouble registering, please ensure both the username
                            and the email is unique.
                        </p>
                    </div>

                    <div class="panel-heading">Passwords</div>
                    <div class="panel-body">
                        <p>
                            Passwords must contain 6 characters and a number. If you are having trouble registering, please ensure that
                            your password matches these requirements.
                        </p>
                    </div>
                </div>

            </div>
            <div id="tabs-2">
                <p>
                    Enter the common name of the plant you want to find and it will begin to populate a list of matches for you.
                    Click on one of the matches to see the information about the plant.
                </p>
                <div class="panel panel-default">
                    <div class="panel-heading">Plant Search</div>
                    <div class="panel-body">
                        <p>
                            Enter the common name of the plant you want to find and it will begin to populate a list of matches for you.
                            Click on one of the matches to see the information about the plant.
                        </p>
                    </div>
                    <br />
                    <div class="panel-heading">Plants by State</div>
                    <div class="panel-body">
                        <p>
                            Click a state on the map to see a list of plants that are associated to that state. Please note, Wisconsin is
                            one of the only states set up with data for the purpose of this project.
                        </p>
                    </div>
                </div>
            </div>
            <div id="tabs-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Plants by State</div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            <div id="tabs-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Citation Method</div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
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
        <script src="help.js"></script>
    </body>
</html>