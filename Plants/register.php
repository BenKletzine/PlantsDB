<?php
include_once 'Includes/register.inc.php';
include_once 'Includes/loginFunctions.php';
include_once 'Includes/db_connect.php';
include_once 'Includes/psl-config.php';


try{
  $states = $db->query("SELECT
                        Id,
                        Name
                      FROM
                        States
                    ");

  $db = NULL;
} catch(PDOException $x){
  $x->getMessage();
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
  <div id="registerForm">
	<form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>"
			method="post"
			name="registration_form">
      <div class="form-group ">
          First Name: <input class="form-control"type="text" name="firstName" id="firstName" />
      </div>
      <div class="form-group ">
        Last Name: <input class="form-control" type="text" name="lastName" id="lastName" />
      </div>
      <div class="form-group ">
            BirthDay: <input class="form-control col-xs-2" type="text" name="birthdayPicker" id="birthdayPicker" />
      </div>
      <div class="form-group ">
        State: <select class="form-control col-xs-2" id="state" name="state"><?php foreach ($states as $state) {  ?>
                  <option value="<?= $state["Id"]?>"><?=$state["Name"]?></option>
            <?php  } ?>
          </select>
      </div>
      <div class="form-group ">
        Username: <input class="form-control" type='text'name='username'id='username' />
      </div>
      <div class="form-group ">
        		Email:    <input class="form-control" type="text" name="email" id="email" />
      </div>
      <div class="form-group ">
        		Password: <input class="form-control" type="password" name="password" id="password"/>
      </div>
      <div class="form-group ">
        		Confirm password: <input class="form-control" type="password" name="confirmpwd" id="confirmpwd" />
      </div>
      <div class="form-group ">
        <input type="button"
               value="Register"
               onclick="return regformhash(this.form,
                     this.form.username,
                     this.form.email,
                     this.form.password,
                     this.form.confirmpwd);" />
      </div>
	</form>
</div>
   <!-- $( function() {
     $("#birthdayPicker").datepicker("option","dateFormat",{ dateFormat: 'yyyy-mm-dd' });
   }); -->
	<p>Return to the <a href="login.php">login page</a>.</p>

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
  <script type="text/JavaScript">
  $("#birthdayPicker").datepicker({
  dateFormat: "yy-mm-dd"
});

 </script>

</body>
</html>
