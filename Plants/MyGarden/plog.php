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
        <p class="headline_bars">Your Plog</p>
        <img src="genericProfilePicture.jpg" alt="Profile Picture" class="largeProfilePicture"/>
        <h2>Your Name's Plog</h2>
        <div>
            <h3>
                Your Plog title goes here.
            </h3>
            <div>
                <form action="addPlogPost.php">
                    <input type="submit" value="Add New Post"/>
                </form>
            </div>
            <div class="plogPost">
                <h3>The Title of Your Last Plog Post</h3>
                <p>
                    The first 100 characters of your last Plog post would appear here before slowly tapering off into nothing.  The rest of the content is hidden so as to not clutter your profile overview page.  But the rest of it can be found here on your plog.  These posts can contain a lot of information, up to like, I don't know, probably at least 2000 characters.  Much more than that and they might become a bit ridiculous.  If we restrict too much, there's a risk that people would not be able to convey their entire thought in a single post.  That being said, 2000 is a pretty middle number, although I did pick it arbitrarily, so we will probably change it once we talk about it a bit more and potentially compare similar sites.  Thanks for reading, you're a champ!
                </p>
            </div>
            <div class="plogPost">
                <h3>The Title of Your Second to Last Plog Post</h3>
                <p>
                    Screw it: 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit, quam vel sagittis efficitur, metus lectus dignissim tortor, a porta sapien sem vitae lacus. Fusce sed finibus velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer elit est, tempus et lorem a, feugiat dictum diam. Nullam lacinia urna eros, in tincidunt elit tempor vitae. Aenean iaculis porta lacus luctus consequat. Aliquam interdum magna a congue molestie. Phasellus vel diam lobortis, vehicula velit id, dictum quam. Donec hendrerit cursus congue. Quisque aliquam enim rhoncus, mollis felis sit amet, egestas tellus.
                    Ut scelerisque porta justo, molestie congue augue ultrices quis. Mauris id vulputate lacus. Pellentesque suscipit neque felis, vel accumsan ligula ultricies id. Sed sed lectus mollis, accumsan ligula ut, molestie ante. Sed volutpat semper enim, convallis commodo felis auctor non. Vivamus mi tortor, finibus eu lacus sit amet, vestibulum fringilla massa. Phasellus facilisis accumsan purus, vel pulvinar libero feugiat non. Sed consequat scelerisque nibh vel pharetra.
                    Donec orci urna, ultrices et metus in, varius auctor orci. Aliquam dapibus, est in ullamcorper gravida, tellus odio tincidunt nunc, quis pretium augue justo nec libero. Nunc sollicitudin metus quis nisl interdum commodo. Nunc non tellus non ipsum eleifend tempor in vitae elit. Fusce lacinia pulvinar lacinia. Nunc ipsum ipsum, laoreet vitae massa quis, volutpat bibendum magna. In hac habitasse platea dictumst. Duis eu augue molestie ex ultrices rhoncus. Suspendisse libero lectus, molestie eget felis vel, rhoncus laoreet mauris. Donec hendrerit risus id lectus tincidunt pharetra eget ac lacus. Nulla tincidunt velit ac dolor fermentum, quis malesuada risus placerat.
                    Donec in nisl hendrerit, ultricies purus vitae, vestibulum massa. Etiam sed volutpat libero. Vivamus non aliquam quam. Sed viverra urna in ex iaculis, eget rutrum mauris accumsan. Proin placerat turpis duis. 
                </p>
            </div>
            <div class="plogPost">
                <h3>The Title of Your Third to Last Plog Post</h3>
                <p>
                    Screw it: 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit, quam vel sagittis efficitur, metus lectus dignissim tortor, a porta sapien sem vitae lacus. Fusce sed finibus velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer elit est, tempus et lorem a, feugiat dictum diam. Nullam lacinia urna eros, in tincidunt elit tempor vitae. Aenean iaculis porta lacus luctus consequat. Aliquam interdum magna a congue molestie. Phasellus vel diam lobortis, vehicula velit id, dictum quam. Donec hendrerit cursus congue. Quisque aliquam enim rhoncus, mollis felis sit amet, egestas tellus.
                    Ut scelerisque porta justo, molestie congue augue ultrices quis. Mauris id vulputate lacus. Pellentesque suscipit neque felis, vel accumsan ligula ultricies id. Sed sed lectus mollis, accumsan ligula ut, molestie ante. Sed volutpat semper enim, convallis commodo felis auctor non. Vivamus mi tortor, finibus eu lacus sit amet, vestibulum fringilla massa. Phasellus facilisis accumsan purus, vel pulvinar libero feugiat non. Sed consequat scelerisque nibh vel pharetra.
                    Donec orci urna, ultrices et metus in, varius auctor orci. Aliquam dapibus, est in ullamcorper gravida, tellus odio tincidunt nunc, quis pretium augue justo nec libero. Nunc sollicitudin metus quis nisl interdum commodo. Nunc non tellus non ipsum eleifend tempor in vitae elit. Fusce lacinia pulvinar lacinia. Nunc ipsum ipsum, laoreet vitae massa quis, volutpat bibendum magna. In hac habitasse platea dictumst. Duis eu augue molestie ex ultrices rhoncus. Suspendisse libero lectus, molestie eget felis vel, rhoncus laoreet mauris. Donec hendrerit risus id lectus tincidunt pharetra eget ac lacus. Nulla tincidunt velit ac dolor fermentum, quis malesuada risus placerat.
                    Donec in nisl hendrerit, ultricies purus vitae, vestibulum massa. Etiam sed volutpat libero. Vivamus non aliquam quam. Sed viverra urna in ex iaculis, eget rutrum mauris accumsan. Proin placerat turpis duis. 
                </p>
            </div>
        </div>
        
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