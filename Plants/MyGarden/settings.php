<?php 
	require '../Includes/PlantDB.php';
	include_once '../Includes/db_connect.php';
	include_once '../Includes/loginFunctions.php';
	session_start();
	
	if(login_check($db) != true)
	{
		header('Status: 301 Moved Permanently', false, 301);    
		header('Location: ../index.php');
	}
	
	$pdb = new PlantDB();
	$profilePictureFileName = $pdb->GetProfilePicture($_SESSION['userId']);
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

    <title>PlantDB - Settings</title>

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
         <p>&nbsp;</p>
         <?php if(login_check($db) == true){ ?>
           <script type="text/javascript">
                  var username = '<?php echo htmlentities($_SESSION['username']); ?>';
           </script>
        <img src="uploads/<?=$profilePictureFileName?>" alt="Profile Picture" class="largeProfilePicture"/>
        <h2>Settings</h2>
        <div class="margin-topbottom-10px">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
                <p>Files should be less than 5MB</p>
            </form>
        </div>
        <?php }
        else { 
			header('Status: 301 Moved Permanently', false, 301);    
			header('Location: ../index.php');
		} ?>
        <?php include('../Layouts/contentEnd.php')?>



        <!-- ============================== -->
        <!-- == Script Section           == -->
        <!-- ============================== -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../Content/jQuery/jquery-3.1.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    </body>
</html>