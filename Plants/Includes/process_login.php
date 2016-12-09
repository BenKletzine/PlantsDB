<?php
session_start();
include_once 'db_connect.php';
include_once 'loginFunctions.php';

if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.

    //if error still set from previous attempt clear it
    if(isset($_GET['error'])){
        unset($_GET['error']);
    }
    login($email,$password,$db);

    if (isset($_SESSION['isAdmin'])) {
      $isAdmin = $_SESSION['isAdmin'];
        // Login success go to a page
        if($isAdmin){
          header('Location: ../index.php');
        }
        else{
          header('Location: ../MyGarden/myGarden.php');
        }


  } else {
        // Login failed go to another page
      header('Location: ../login.php?error=1');
   }
} else {
    // The correct POST variables were not sent to this page.
    echo 'Invalid Request';
}
?>
