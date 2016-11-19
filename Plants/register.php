<?php
include_once 'Includes/register.inc.php';
include_once 'Includes/loginFunctions.php';
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

    <title>PlantDB - Registration</title>

    <!-- Styles -->
    <link href="Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="Content/Styles/jquery-ui.css" rel="stylesheet">
    <link href="Content/Styles/main.css" rel="stylesheet">
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
</head>

<body>
<?php include('Layouts/topNavIndex.php') ?>

<!-- ============================== -->
<!-- == Content Section          == -->
<!-- ============================== -->

<?php include('Layouts/contentStart.php')?>
	<!-- Registration form to be output if the POST variables are not
	set or if the registration script caused an error. -->
	<h1>Register with us</h1>
	<?php
	if (!empty($error_msg)) {
		echo $error_msg;
	}
	?>
	<ul>
		<li>Usernames may contain only digits, upper and lowercase letters and underscores</li>
		<li>Emails must have a valid email format</li>
		<li>Passwords must be at least 6 characters long</li>
		<li>Passwords must contain
			<ul>
				<li>At least one uppercase letter (A..Z)</li>
				<li>At least one lowercase letter (a..z)</li>
				<li>At least one number (0..9)</li>
			</ul>
		</li>
		<li>Your password and confirmation must match exactly</li>
	</ul>
	<form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>"
			method="post"
			name="registration_form">
		Username: <input type='text'name='username'id='username' /><br>
		Email:    <input type="text" name="email" id="email" /><br>
		Password: <input type="password" name="password" id="password"/><br>
		Confirm password: <input type="password" name="confirmpwd" id="confirmpwd" /><br>
		<input type="button"
			     value="Register"
			     onclick="return regformhash(this.form,
							   this.form.username,
							   this.form.email,
							   this.form.password,
							   this.form.confirmpwd);" />
	</form>

	<p>Return to the <a href="index.php">login page</a>.</p>

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
