<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Our Database</title>

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
        <p class="headline_bars">The PLANTS Database</p>
        <p>The PLANTS Database provides standardized information about
          the vascular plants, mosses, liverworts, hornworts, and lichens
          of the U.S. and its territories. It includes names, plant symbols,
          checklists, distributional data, species abstracts, characteristics,
          images, crop information, automated tools, onward Web links,
          and references. This information primarily promotes land conservation
          in the United States and its territories, but academic, educational,
          and general use is encouraged. PLANTS reduces government spending
          by minimizing duplication and making information exchange possible
          across agencies and disciplines.</p>
        <p>PLANTS is a collaborative effort of the <a href="http://www.nrcs.usda.gov/wps/portal/nrcs/detail/national/plantsanimals/plants/?&cid=stelprdb1047060" onclick="_gaq.push(['_trackEvent', 'External Plants Service', 'Click Link to External Service', 'NPDT Info Page']);">USDA
            NRCS National Plant Data Team</a> (NPDT), the <a href="http://www.itc.nrcs.usda.gov/">USDA
            NRCS Information Technology Center</a> (ITC), The <a href="http://www.ocio.usda.gov/nitc/index.html">USDA
            National Information Technology Center</a> (NITC), and many
            other partners. Much of the PLANTS data and design is developed
            at NPDT, and the Web application is programmed at ITC and
            NITC and served through the USDA Web Farm. Here&rsquo;s
          more information about who does what on the <a href="team.html">PLANTS
          Team</a>, our
          <a href="partners.html">Partners</a>, and our <a href="java/citePlants">Data
          Contributors</a>.</p>
        <ul>
          <li>How to cite the <a href="java/citePlants">PLANTS
            Database</a>.</li>
          <li>Learn more about the <a href="about_adv_search.html">data
            at PLANTS</a>.</li>
          <li>See additional <a href="documents.html">PLANTS Documentation</a>.</li>
          <li>Other questions are answered at the <a href="faq.html">PLANTS
            FAQs</a>.</li>
        </ul>
        <p>Need more information? Please check our <a href="help.html">PLANTS
            Help topics</a>.
        </p>
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