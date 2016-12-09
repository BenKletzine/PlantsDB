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
    $emailExistsStatement = $mysqli->prepare($emailExists);

   // check existing email
    if ($emailExistsStatement) {
        $emailExistsStatement->bind_param(':email', $emailExistsStatement->Email);
        $emailExistsStatement->execute();

        if ($emailExistsStatement->rowCount() == 1) {
            // A user with this email address already exists
            $error_msg .= '<p class="error">A user with this email address already exists.</p>';
                        $emailExistsStatement->close();
        }
    } else {
        $error_msg .= '<p class="error">Database error Line 39</p>';
                $emailExistsStatement->close();
    }

    // check existing username
    $userNameExists = "SELECT Id FROM Users WHERE Username = :username LIMIT 1";
    $userNameExistsStatement = $mysqli->prepare($prep_stmt);

    if ($userNameExistsStatement) {
        $userNameExistsStatement->bind_param(':username', $userNameExistsStatement->UserName);
        $userNameExistsStatement->execute();

        if ($userNameExistsStatement->rowCount() == 1) {
                // A user with this username already exists
                $error_msg .= '<p class="error">A user with this username already exists</p>';
                $userNameExistsStatement->close();
        }
    } else {
                $error_msg .= '<p class="error">Database error line 55</p>';
                $userNameExistsStatement->close();
    }

    if (empty($error_msg)) {

        // Create hashed password using the password_hash function.
        // This function salts it with a random salt and can be verified with
        // the password_verify function.
        $password = password_hash($password, PASSWORD_BCRYPT);

        // Insert the new user into the database
        if ($insertStatement = $db->prepare("INSERT INTO Users (UserName, Email, Password)
                                        VALUES (:email, :username, :password)")) {
            $insertStatement->bind_param(':email',  $email);
            $insertStatement->bind_param(':username', $username);
            $insertStatement->bind_param(':password', $password);
            // Execute the prepared query.
            if (! $insertStatement->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }
        header('Location: ./register_success.php');
    }
}
?>
