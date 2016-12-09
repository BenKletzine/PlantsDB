<?php 
	require '../Includes/PlantDB.php';
	require '../Includes/PlogEntry.php';
	include_once '../Includes/db_connect.php';
	include_once '../Includes/loginFunctions.php';
	session_start();
	$userId = $_SESSION['userId'];
	$pdb = new PlantDB();
	$profilePictureFileName = $pdb->GetProfilePicture($_SESSION['userId']);
	$plogPosts = $pdb->GetPlogPosts($userId);
	$plogTitle = $pdb->GetPlogTitle($userId);
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

    <title>PlantDB - My Plog</title>

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
        <p class="headline_bars">Your Plog</p>
        <img src="uploads/<?=$profilePictureFileName?>" alt="Profile Picture" class="largeProfilePicture"/>
        <h2>Your Name's Plog</h2>
        <div>
            <h3>
                <?=$plogTitle?>
            </h3>
            <div>
                <form action="addPlogPost.php">
                    <input type="submit" value="Add New Post"/>
                </form>
            </div>
			<?php
				while(list(,$post) = each($plogPosts))
				{
					?>
					<div class="plogPost">
						<h3><?=$post->Title?></h3>
						<p>
							<?=$post->Body?>
						</p>
					</div>
					<?php
				}
			?>
        </div>
        
        <?php }
        else { ?>
          <p>No access </p>
        <?php   } ?>
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