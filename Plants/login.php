<?php
session_start();
include_once 'Includes/db_connect.php';
include_once 'Includes/loginFunctions.php';

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

    <title>PlantDB - Login</title>

    <!-- Styles -->
    <link href="Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="Content/Styles/jquery-ui.css" rel="stylesheet">
    <link href="Content/Styles/main.css" rel="stylesheet">
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
    <script type="text/JavaScript" src="js/errorProcessing.js"></script>
</head>
<body>
    <?php include('Layouts/topNavIndex.php') ?>

    <!-- ============================== -->
    <!-- == Content Section          == -->
    <!-- ============================== -->

    <?php include('Layouts/contentStartIndex.php');  ?>
    <div id="loginForm">
        <h1>Login</h1>
        <form action="Includes/process_login.php" method="post" name="login_form">
            <div class="form-group ">
                Email: <input class="form-control" type="text" id="email" name="email" />
            </div>
            <div class="form-group ">
              Password: <input  class="form-control"
                                type="password"
                                name="password"
                                id="password"/>
            </div>
            <input type="button"
                   value="Login"
                   onclick="formhash(this.form, this.form.password);" />
        </form>
    </div>
    <?php  if(isset($_GET['error'])){ ?>
              <p id="errorMsg"></p>
              <script> showLoginError();</script>
              <p>If you don't have a login, please <a href='register.php'>register</a></p>
    <?php

            }
            elseif (login_check($db) == true) {
                echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
                echo '<p>Do you want to change user? <a href="Includes/logout.php">Log out</a>.</p>';
            } else {
                            echo '<p>Currently logged ' . $logged . '.</p>';
                            echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                    }
    ?>

    <?php include('Layouts/contentEnd.php')?>
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
