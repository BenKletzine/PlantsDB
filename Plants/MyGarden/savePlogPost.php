<?php
require '../Includes/PlantDB.php';
session_start();

if (isset($_GET['Title']) && isset($_GET['Body'])) {
    $pdb = new PlantDB();
    $results = $pdb->InsertPlogEntry($_GET['Title'], $_GET['Body'], $_SESSION['userId']);
}

header('Status: 301 Moved Permanently', false, 301);    
header('Location: plog.php');
?>