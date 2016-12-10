<?php

include_once '../Includes/db_connect.php';
include_once '../Includes/loginFunctions.php';

if(login_check($db) != true)
{
    echo "
<div class='container-fluid'>
            <div class='row'>
                <!-- Left Nav Frame -->
                <div class='col-sm-3 col-md-2 sidebar'>
                    <p class='well text-center'><a href='../login.php' >Welcome, Guest! Please sign in to access account features!</a></p>
                    <hr />
                    <div id='disclaimer' class='text-muted'>
                        <p>Disclaimer: This site is under development by UW-Oshkosh students as a prototype for the organization USDA Plants. 
                        Nothing on the site should be construed in any way as being officially connected with or representative of  USDA PlantDB</p>
                    </div>
                </div>

                <!-- Right Content Frame -->
                <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
";

} else {

    echo "
<div class='container-fluid'>
            <div class='row'>
                <!-- Left Nav Frame -->
                <div class='col-sm-3 col-md-2 sidebar'>
                    <ul class='nav nav-sidebar'>
                        <li class='active'><a href='../MyGarden/overview.php'>Overview <span class='sr-only'>My Account</span></a></li>
                        <li><a href='../MyGarden/myGarden.php'>My Garden</a></li>
                        <li><a href='../MyGarden/plog.php'>Plog (plant log)</a></li>
                        <li><a href='../MyGarden/settings.php'>Settings</a></li>
                    </ul>
                    <hr />
                    <div id='disclaimer' class='text-muted'>
                        <p>Disclaimer: This site is under development by UW-Oshkosh students as a prototype for the organization USDA Plants. 
                        Nothing on the site should be construed in any way as being officially connected with or representative of  USDA PlantDB</p>
                    </div>
                </div>

                <!-- Right Content Frame -->
                <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
";

}


