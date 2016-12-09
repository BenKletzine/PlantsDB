<?php
require 'PlantDB.php';

if (isset($_GET['term'])) {
    $pdb = new PlantDB();
    $results = $pdb->SearchPlants($_GET['term']);
    echo $results;
}

