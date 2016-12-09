<?php
include_once 'db_connect.php';
include_once 'psl-config.php';

$error_msg = "";

if (isset($_POST['username'], $_POST['email'], $_POST['p'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //

    $emailExists = "SELECT Id FROM Users WHERE Email = :email LIMIT 1";
    $emailExistsStatement = $db->prepare($emailExists);
    $emailExistsStatement->bindParam(':email', $email);
   // check existing email
    if ($emailExistsStatement) {

    //    $emailExistsStatement->bind_param(":email", $email);
        $emailExistsStatement->execute();

        if ($emailExistsStatement->rowCount() == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">A user with this email address already exists.</p>';

        }
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';

    }

    // check existing username
    $userNameExists = "SELECT Id FROM Users WHERE Username = :username LIMIT 1";
    $userNameExistsStatement = $db->prepare($userNameExists);
    $userNameExistsStatement->bindParam(':username',$username);
    if ($userNameExistsStatement) {
  //      $userNameExistsStatement->bind_param(':username', $userName);
        $userNameExistsStatement->execute();

        if ($userNameExistsStatement->rowCount() == 1) {
                // A user with this username already exists
                $error_msg .= '<p class="error">A user with this username already exists</p>';

        }
    } else {
                $error_msg .= '<p class="error">Database error line 55</p>';

    }

    if (empty($error_msg)) {
        $hashedPass = crypt($password,CRYPT_SHA512);// php ver:5.5   $password = password_hash($password, PASSWORD_BCRYPT);

        // Insert the new user into the database
        $state = $_POST['state'];
        $first = $_POST['firstName'];
        $last = $_POST['lastName'];
        $birthDay = $_POST['birthdayPicker'];
        if ($insertStatement = $db->prepare("INSERT INTO Users (UserName, Email, Password, FirstName, LastName, DateOfBirth, StateId)
                                        VALUES (:username,:email,:password,:first,:last,:dateofbirth,:state)")) {
            $insertStatement->bindParam(':email',  $email);
            $insertStatement->bindParam(':username', $username);
            $insertStatement->bindParam(':password', $hashedPass);
            $insertStatement->bindParam(':first', $first);
            $insertStatement->bindParam(':last', $last);
            $insertStatement->bindParam(':dateofbirth', $birthDay);
            $insertStatement->bindParam(':state', $state);
            // Execute the prepared query.
            if (! $insertStatement->execute()) {

                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }

        header('Location: ./MyGarden/overview.php');
    }
}
?>
