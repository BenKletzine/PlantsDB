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

<h3>Second Check-In</h3>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Broad Checklist</a></li>
        <li><a href="#tabs-2">DB Diagram</a></li>
        <li><a href="#tabs-3">Feature Creep</a></li>
        <li><a href="#tabs-4">DB Check-in</a></li>
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
                    <td class="strikeOut">Stored Procedures (plant search, plant by state, all inserts, updates, archives, login/registration)</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td class="strikeOut">Cleaning up the data in the plants table from the CSV (still 30,000+ records)</td>
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
                    <td class="strikeOut">Custom Tool: Plants by State > Implement the interactive map</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td class="strikeOut">Custom Tool: Plants by State > Write procedures to back the map with data</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Custom Tool: Plants by State > Hook the map up to pull data back</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Custom Tool: Plants by State > Implement a table system to show the data</td>
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
                <tr>
                    <td>Jeff</td>
                    <td>Contact Page</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Tools > Documentation Page</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Tools >Cultural Plants Page</td>
                </tr>
                <tr>
                    <td>Jeff</td>
                    <td>Tools >Hardiness Zones</td>
                </tr>
                <tr>
                    <td>Ben</td>
                    <td>About > Our Team Page</td>
                </tr>
                <tr>
                    <td>Ben</td>
                    <td>About > The NPDT Page</td>
                </tr>
                <tr>
                    <td>Ben</td>
                    <td>About > Our Partners Page</td>
                </tr>
                <tr>
                    <td>Matt</td>
                    <td>About > Acknowledgements Page</td>
                </tr>
                <tr>
                    <td>Matt</td>
                    <td>Tools > Ecological Sites Page</td>
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
    <div id="tabs-4">
        <p>Stored Procedure Progress (Implemented): </p>
        <pre>
            <code>
                // ============================================= //
                // ==         Stored Procedure Index          == //
                // ============================================= //
                // Select Methods:
                //  + GetAllStates()
                //  + GetAllPlants()
                //  + GetAllSeasons()
                //  + GetUserGardens($userid)
                //  + SearchPlants($searchText)
                //  + GetGardenPlants($gardenid)
                // Insert Methods:
                //  + InsertPlant($symbol, $synonym, $sciName, $comNam, $family)
                //  + InsertSeason($name)
                //  + InsertUser($pw, $username, $firstname, $lastname, $email, $stateid, $dob)
                //  + InsertGarden($userid, $length, $width, $seasonid, $name, $description)
                //  + InsertGardenPlant($gardenid, $plantid, $planteddate, $numberplanted, $numbersurvived, $tallest, $shortest)
                //  + InsertLoginAttempt($userid)
                //  + InsertPlantSeen($userid, $plantid, $stateid)
                //  + InsertPlantState($plantid, $stateid)
            </code>
        </pre>
        <p>A DB Class/Storage Class system was implemented:</p>
        <pre>
            <code>
                // Storage Class Example
                class Plant
                {
                    public $PlantId;
                    public $Symbol;
                    public $Synonym;
                    public $ScientificName;
                    public $CommonName;
                    public $Family;

                    public function  __construct($id, $symbol, $synonym, $sciName, $commName, $family) {
                        $this->PlantId = $id;
                        $this->Symbol = $symbol;
                        $this->Synonym = $synonym;
                        $this->ScientificName = $sciName;
                        $this->CommonName = $commName;
                        $this->Family = $family;
                    }
                }

                // Stored Procedure Example
                /**
                 * GetAllPlants()
                 * @return - An array of plant objects containing all of the plants from the DB
                */
                public function GetAllPlants() {
                    // Step 1: Prep the query
                    $this->query = $this->db->prepare('call pdb_GetAllPlants();');
                    // Step 2: Prep the return
                    $plantArray = array();
                    // Step 3: Build the return
                    if ($this->query->execute()) {
                        while ($row = $this->query->fetch()) {
                            $plant = new Plant(
                                $row["Id"],
                                $row["Symbol"],
                                $row["Synonym"],
                                $row["ScientificName"],
                                $row["CommonName"],
                                $row["Family"]
                            );
                            array_push($plantArray, $plant);
                        }
                    }
                    // Step 4: Return the values
                    return json_encode($plantArray);
                }

                // The stored procedures live within PhpMyAdmin, prefixed by pdb_ProcedureName
            </code>
        </pre>
    </div>
</div>



<?php include('Layouts/contentEndIndex.php')?>

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