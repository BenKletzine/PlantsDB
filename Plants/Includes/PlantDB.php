<?php
require 'State.php';
require 'Plant.php';
require 'PlogEntry.php';
require 'User.php';
require 'Season.php';
require 'UserGarden.php';

/**
 * Class PlantDB
 *
 * Purpose: A database helping object to run stored procedures and kick back object arrays.
 * https://www.sitepoint.com/stored-procedures-mysql-php/
 * http://php.net/manual/en/pdo.prepared-statements.php
 */
class PlantDB
{
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

    protected $db;
    protected $query;
    private $dsn;
    private $username;
    private $password;

    // Construct the PlantDB Helper
    public function __construct() {
        $this->username = 'bergej88';
        $this->dsn = 'mysql:dbname=bergej88;host=localhost';
        $this->password = 'plantDatabase';
        $this->connect();
    }

    // Create the initial PDO Connection
    private function connect() {
        try {
            $this->db = new PDO(
                $this->dsn,
                $this->username,
                $this->password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
            );
        } catch (PDOException $exception) {
            die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
        }
    }

    // Kill the connection (must kill the result/query to fully close, thanks php).
    // http://php.net/manual/en/pdo.connections.php
    private function close() {
        $this->query = null;
        $this->db = null;
    }

    // Keep the DB Object alive!
    public function __sleep()
    {
        return array('dsn', 'username', 'password');
    }

    // Revive the DB Object!
    public function __wakeup() {
        $this->connect();
    }

    /**
     * GetAllStates()
     * @return - An array of state objects containing all of the states from the DB
     */
    public function GetAllStates() {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetAllStates();');
        // Step 2: Prep the return
        $stateArray = array();
        // Step 3: Build the retun
        if ($this->query->execute()) {
            while ($row = $this->query->fetch()) {
                $state = new State($row["Id"], $row["Name"], $row["Abbreviation"]);
                array_push($stateArray, $state);
            }
        }
        // Step 4: Return the values
        return json_encode($stateArray);
    }

    public function GetPlantByState($state) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetPlantByState(?);');
        // Step 2: Prep the return
        $returnArray = array();
        // Step 3: Build the return
        if ($this->query->execute(array($state))) {
            while ($row = $this->query->fetch()) {
                $plant = new Plant(
                    $row["PlantId"],
                    $row["Symbol"],
                    $row["Synonym"],
                    $row["ScientificName"],
                    $row["CommonName"],
                    $row["Family"]
                );
                array_push($returnArray, $plant);
            }
        }
        // Step 4: Return the values
        return json_encode($returnArray);
    }

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


    /**
     * GetAllSeasons()
     * @return - An array of season objects containing all of the seasons from the DB
     */
    public function GetAllSeasons() {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetAllSeasons();');
        // Step 2: Prep the return
        $returnArray = array();
        // Step 3: Build the return
        if ($this->query->execute()) {
            while ($row = $this->query->fetch()) {
                $season = new Season(
                    $row["Id"],
                    $row["Name"]
                );
                array_push($returnArray, $season);
            }
        }
        // Step 4: Return the values
        return json_encode($returnArray);
    }

    /**
     * GetUserGardens()
     * @return - Get a list of gardens associated to a user
     */
    public function GetUserGardens($userid) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetUserGardens(?);');
        // Step 2: Prep the return
        $returnArray = array();
        // Step 3: Build the return
        if ($this->query->execute(array($userid))) {
            while ($row = $this->query->fetch()) {
                $garden = new UserGarden(
                    $row["Id"],
                    $row["UserId"],
                    $row["Length"],
                    $row["Width"],
                    $row["SeasonId"],
                    $row["Name"],
                    $row["Description"]
                );
                array_push($returnArray, $garden);
            }
        }
        // Step 4: Return the values
        return json_encode($returnArray);
    }

    /**
     * GetUserGardens()
     * @return - Get aa list of all plants associated to a garden
     */
    public function GetGardenPlants($gardenid) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetGardenPlants(?);');
        // Step 2: Prep the return
        $returnArray = array();
        // Step 3: Build the return
        if ($this->query->execute(array($gardenid))) {
            while ($row = $this->query->fetch()) {
                $plant = new GardenPlant(
                    $row["Id"],
                    $row["GardenId"],
                    $row["PlantId"],
                    $row["PlantedDate"],
                    $row["NumberPlanted"],
                    $row["NumberSurvived"],
                    $row["Tallest"],
                    $row["Shortest"],
                    $row["Symbol"],
                    $row["Synonym"],
                    $row["ScientificName"],
                    $row["CommonName"],
                    $row["Family"]
                );

                array_push($returnArray, $plant);
            }
        }
        // Step 4: Return the values
        return json_encode($returnArray);
    }

    /**
     * SearchPlants()
     * @return - A dynamic array of plants that changes with the users search parameters
     */
    public function SearchPlants($searchText) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_SearchPlants(?);');
        // Step 2: Prep the return
        $plantArray = array();
        // Step 3: Build the return
        if ($this->query->execute(array('%'.$searchText.'%'))) {
            while ($row = $this->query->fetch()) {
                $plant = new Plant(
                    $row["Id"],
                    $row["Symbol"],
                    $row["Synonym"],
                    $row["ScientificName"],
                    $row["CommonName"],
                    $row["Family"]
                );
                $plant->label = $row["CommonName"];
                array_push($plantArray, $plant);
            }
        }
        // Step 4: Return the values
        return json_encode($plantArray);
    }


    /**
     *  InsertPlant()
     *  Inserts a new plant to the DB
     */
    public function InsertPlant($symbol, $synonym, $sciName, $comNam, $family) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertPlant(?, ?, ?, ?, ?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($symbol, $synonym, $sciName, $comNam, $family));
    }

    /**
     *  InsertSeason()
     *  Inserts a new Season to the DB
     */
    public function InsertSeason($name) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertSeason(?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($name));
    }

    /**
     *  InsertUser()
     *  Inserts a new User to the DB
     */
    public function InsertUser($pw, $username, $firstname, $lastname, $email, $stateid, $dob) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertUser(?,?,?,?,?,?,?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($pw, $username, $firstname, $lastname, $email, $stateid, $dob));
    }

    /**
     *  InsertPlantState()
     *  Inserts a new plant associated to a state
     */
    public function InsertPlantState($plantid, $stateid) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertPlantState(?,?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($plantid, $stateid));
    }

    /**
     *  InsertPlantSeen()
     *  Inserts a new plant associated to a user
     */
    public function InsertPlantSeen($userid, $plantid, $stateid) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertPlantSeen(?,?,?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($userid, $plantid, $stateid));
    }

    /**
     *  InsertLoginAttempt()
     *  Inserts a new login attempt record
     */
    public function InsertLoginAttempt($userid) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertLoginAttempt(?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($userid));
    }

    /**
     *  InsertGardenPlant()
     *  Inserts a plant into the garden
     */
    public function InsertGardenPlant($gardenid, $plantid, $planteddate, $numberplanted, $numbersurvived, $tallest, $shortest) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertGardenPlant(?,?,?,?,?,?,?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($gardenid, $plantid, $planteddate, $numberplanted, $numbersurvived, $tallest, $shortest));
    }

    /**
     *  InsertGarden()
     *  Inserts a new Season to the DB
     */
    public function InsertGarden($userid, $length, $width, $seasonid, $name, $description) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertGarden(?,?,?,?,?,?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($userid, $length, $width, $seasonid, $name, $description));
    }

    /**
     *  InsertPlogEntry()
     *  Inserts an entry into a user's plog
     */
    public function InsertPlogEntry($title, $body, $userId) {
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_InsertPlogEntry(?,?,?);');

        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($title, $body, $userId));
    }
	
    public function UpdateProfilePicture($userId, $profilePictureName){
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_UpdateProfilePicture(?,?);');
      
        // Step 2: Return the execution (true/false)
        return $this->query->execute(array($userId, $profilePictureName));
    }
  

    public function UpdatePassword($userId, $newPassword){
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_UpdatePassword(?,?);');

        // Step 2: Return the execution (true/false)
        
		
		return $this->query->execute(array($newPassword, $userId));
    }
	
    public function GetProfilePicture($userId){
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetProfilePictureFileName(?);');

        // Step 2: Return the execution (true/false)
		
		if ($this->query->execute(array($userId))) {
            if ($row = $this->query->fetch()) {
				if(!empty($row["ProfilePictureName"]))
				{
					return $row["ProfilePictureName"];
				}
            }
        }
		return "genericProfilePicture.jpg";
    }
	
    public function GetPlogPosts($userId){
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetPlogPosts(?);');

        // Step 2: Return the execution (true/false)
		
		$plogArray = array();
        // Step 3: Build the return
        if ($this->query->execute(array($userId))) {
            while ($row = $this->query->fetch()) {
                $plogEntry = new PlogEntry(
                    $row["Id"],
                    $row["UserId"],
                    $row["Title"],
                    $row["Body"],
                    $row["DatePosted"]
                );
                array_push($plogArray, $plogEntry);
            }
        }
        // Step 4: Return the values
        return $plogArray;
    }
	
    public function GetPlogTitle($userId){
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetPlogTitle(?);');

        // Step 2: Return the execution (true/false)
		
		if ($this->query->execute(array($userId))) {
            if ($row = $this->query->fetch()) {
                return $row["Title"];
            }
        }
		return "Your Plog";
    }

    public function DoesUserExist($userId, $newPassword){
        // Step 1: Prep the query
        $this->query = $this->db->prepare('call pdb_GetUser(?,?);');

        // Step 2: Return the execution (true/false)
        $rows = $this->query->execute(array($userId, $newPassword));

		return $this->query->rowCount() > 0;//$this->query->fetch() != false;
    }
}
