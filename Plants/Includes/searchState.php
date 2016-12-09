<?php
require 'PlantDB.php';

if (isset($_POST['term'])) {
    $pdb = new PlantDB();
    $results = $pdb->GetPlantByState($_POST['term']);
    echo $results;
} else {
    echo "Error";
}

