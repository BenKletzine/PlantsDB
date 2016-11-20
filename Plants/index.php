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
<h1 class="page-header">Home - News &amp; Updates</h1>

<h3>First Check-In</h3>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Checklist</a></li>
        <li><a href="#tabs-2">DB Diagram</a></li>
        <li><a href="#tabs-3">Feature Creep</a></li>
    </ul>
    <div id="tabs-1">
        <p>Checklist: </p>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Who</th>
                    <th>Item</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jeff</td>
                    <td>Stored Procedures (plant search, plant by state, all inserts, updates, archives, login/registration)</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Cleaning up the data in the plants table from the CSV (still 30,000+ records)</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Fill in junction table using USDA's 50 .csv files to associate plants to specific states (state by state lists)</td>
                </tr>
                <tr>
                    <td>Matt</td>
                    <td>Plog: Plant Log Feature (add plants, post updates/blog). A way to track the plants you've seen.</td>
                </tr>
                <tr>
                    <td>Matt</td>
                    <td>My Garden: Garden Tracking Feature (add plants, update them, garden summaries and growth tracking)</td>
                </tr>
                <tr>
                    <td>Ben</td>
                    <td>Login System: PHP Scripts done through a users table, plus salt/sha?</td>
                </tr>
                <tr>
                    <td>Ben</td>
                    <td>Registration System: Ability for a user to signup</td>
                </tr>
                <tr>
                    <td>Ben</td>
                    <td>Custom Tool: Plant Search > autocomplete to pull up a plant data sheet based on common name</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Custom Tool: Plants by State > Interactive US Map with dynamic table of plants by state</td>
                </tr>
                <tr>
                    <td>Matt</td>
                    <td>Custom Tool: Plant data sheet to be used on various pages (potential for on hover show data sheet)</td>
                </tr>
                <tr>
                    <td>Matt</td>
                    <td>Account Settings</td>
                </tr>
                <tr>
                    <td>Matt</td>
                    <td>My Account : Sidebar functionality (Show/Hide)</td>
                </tr>
                <tr>
                    <td>Ben</td>
                    <td>Modify the top nav to display log-in/register only if they aren't logged in/registered</td>
                </tr>
                <tr>
                    <td>All</td>
                    <td>Convert the static layouts to dynamic content using jquery/bootstrap</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="tabs-2">
        <p>Database Diagram:</p>
        <img src="Content/images/DatabaseDiagram.PNG" alt="diagram" />
    </div>
    <div id="tabs-3">
        <p>Wouldn't it be cool if...</p>
        <ul>
            <li>There was a friends system?</li>
            <li>There was a notification system?</li>
        </ul>
    </div>
</div>



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

<!-- FROM THE OLD INDEX.HTML
		<div>
			<div>
				<h1>PLANTS</h1>
			</div>
			<div>
				<div>
					<a href=""><span class="navContainer">Thing1</span></a>
					<a href=""><span class="navContainer">Thing2</span></a>
					<a href="MyGarden/addplant.php"><span class="navContainer">Thing3</span></a>
					<a href=""><span class="navContainer">Register</span></a>
					<a href="Login/login.php"><span class="navContainer">Login</span></a>
				</div>
			</div>
		</div>
		<div id="centralFeatures">
			<div class="featureSection">
				<h2>My Garden Overview</h2>
				<div class="details">
					<p><span class="bold">Crops Planted:</span> x</p>
					<p><span class="bold">Yield:</span> y pounds/tons</p>
				</div>
			</div>
			<div class="featureSection">
				<h2>Recently Spotted</h2>
				<div class="details">
					<p><span class="bold">Scientific Name:</span> z</p>
					<p><span class="bold">Common Name:</span> w</p>
					<p><span class="bold">Spotted By:</span> v</p>
					<a><img/></a>
				</div>
			</div>
		</div>
    <div id="sideNav">
      <ul>
        <li><input id="searchText" type="text" name="searchTextField"></li>
        <li><input id="searchType" type="select" name="searchSelectType"><input id="searchSubmit" type="button"></li>
        <li><a>State Search</a></li>
        <li><a>Advanced Search</a></li>
        <li><a>Search Help</a></li>
      </ul>
    </div>

		<div>
			<p>
				<a href="http://validator.w3.org/check/referer">Validate Me</a>
			</p>
		</div>
-->

</body>
</html>