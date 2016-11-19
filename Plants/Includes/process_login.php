<?php
include_once 'db_connect.php';
include_once 'loginFunctions.php';

startSecureSession();

if (isset($_POST['email'], $_POST['p'])) {
    $email = $_POST['email'];
    $password = $_POST['p']; // The hashed password.

    if (login($email, $password, $db) == true) {
        // Login success go to a page
        header('Location: ../protected_page.php');
    } else {
        // Login failed go to another page
        header('Location: ../index.php?error=1');
    }
} else {
    // The correct POST variables were not sent to this page.
    echo 'Invalid Request';
}
?>
