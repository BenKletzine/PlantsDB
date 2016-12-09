<?php
session_start();
include_once '../includes/PlantDB.php';


if (isset($_POST['oldPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmNewPassword'])) {
    $pdb = new PlantDB();
    $userId = $_SESSION['userId'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    //have to update locally stored hashed password in order for login check to Work

    $hashedNewPass = crypt($newPassword,CRYPT_SHA512);
    $hashedOldPass =  crypt($oldPassword,CRYPT_SHA512);


    if($pdb->DoesUserExist($userId, $hashedOldPass)){
      if($pdb->UpdatePassword($userId,$hashedNewPass)){
          header('Location: overview.php');
      }
      else{
        header('Location: ./settings.php?error=1');
      }
    }
    else{
      header('Location: ./settings.php?error=1');
    }
}

header('Status: 301 Moved Permanently', false, 301);


?>
