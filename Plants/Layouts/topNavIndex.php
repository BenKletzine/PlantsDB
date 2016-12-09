<?php 

echo
" 
		<!-- ============================== -->
        <!-- == Navigation Section       == -->
        <!-- ============================== -->

        <!-- Bootstrap Navigation Setup -->
        <nav class='navbar navbar-inverse navbar-fixed-top'>
            <!-- Nav Container -->
            <div class='container'>
                <!-- Generates the three bar UI button -->
                <div class='navbar-header'>
                    <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='index.php'>USDA PlantDB</a>
                </div>
                
                <!-- Nav Content -->
                <div id='navbar' class='navbar-collapse collapse'>
                    <ul class='nav navbar-nav'>
                        <!-- Home -->
                        <li class='active'><a href='index.php'>Home</a></li>
                        <!-- Tools -->
                        <li>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Tools <span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='Tools/plantSearch.php'>Plant Search</a></li>
                                <li><a href='Tools/plantByState.php'>Plants By State</a></li>
                                <li role='separator' class='divider'></li>
                                <li class='dropdown-header'>Reference Info</li>
                                <li><a href='Tools/documentation.php'>Documentation</a></li>
                                <li><a href='Tools/culturalPlants.php'>Cultural Plants</a></li>
                                <li><a href='Tools/hardinessZones.php'>Hardiness Zones</a></li>
                                <li role='separator' class='divider'></li>
                                <li class='dropdown-header'>External Info</li>
                                <li><a href='Tools/ecologicalSites.php'>Ecological Sites</a></li>
                            </ul>
                        </li>
                        <!-- About -->
                        <li>
                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>About <span class='caret'></span></a>
                            <ul class='dropdown-menu'>
                                <li><a href='About/ourDatabase.php'>Our Database</a></li>
                                <li><a href='About/citations.php'>Citations</a></li>
                                <li><a href='About/help.php'>Help</a></li>
                                <li role='separator' class='divider'></li>
                                <li class='dropdown-header'>Social</li>
                                <li><a href='http://plants.usda.gov/team.html'>Our Team</a></li>
                                <li><a href='http://www.nrcs.usda.gov/wps/portal/nrcs/detail/national/plantsanimals/plants/?&cid=stelprdb1047060'>The NPDT</a></li>
                                <li><a href='http://plants.usda.gov/partners.html'>Our Partners</a></li>
                                <li role='separator' class='divider'></li>
                                <li class='dropdown-header'>Credits</li>
                                <li><a href='http://plants.usda.gov/cs_acknowledge.html'>Acknowledgements</a></li>

                            </ul>
                        </li>
                        <!-- Contact -->
                        <li><a href='About/Contact.php'>Contact</a></li>
                    </ul>

                    <!-- Login -->

                    <ul class='nav navbar-nav navbar-right'>
                        <!-- Login -->
                        <li><a href='login.php'>Log-In</a></li>
                        <!-- Register -->
                        <li><a href='register.php'>Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		";
