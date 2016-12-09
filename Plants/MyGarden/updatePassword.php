<?php
require 'PlantDB.php';
session_start();

if (isset($_POST['oldPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmNewPassword'])) {
    $pdb = new PlantDB();
    $results = $pdb->UpdatePassword($_POST['oldPassword'], $_POST['newPassword'], $_POST['confirmNewPassword'], $_SESSION['userId']);
}

header('Status: 301 Moved Permanently', false, 301);    
header('Location: overview.php'); 
?>