<?php
include_once 'psl-config.php';

function login($email, $password, $db){
    if ($loginStatement = $db->prepare("SELECT Id, UserName, Password, IsAdmin
        FROM Users
        WHERE Email = :email
        LIMIT 1")
        ){
        $loginStatement->bindParam(':email', $email);
        $loginStatement->execute();

        //If found then check the db password to the entered one
        if ($loginStatement->rowCount() == 1) {
                $loginInfo = $loginStatement->fetchObject();//object of stdClass
                if (crypt($password,CRYPT_SHA512)  === $loginInfo->Password) {
                    // Password is correct! Get the user-agent string of the user.
                    $userBrowser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection, may print these values
                    $userId = preg_replace("/[^0-9]+/", "", $loginInfo->Id);
                    $username = preg_replace("/[^a-zA-Z0-9_\-] +/", "",
                                             $loginInfo->UserName);
                    $_SESSION['userId'] = $userId;
                    $_SESSION['username'] = $username;
                    $_SESSION['loginString'] = hash('sha512',
                                               $loginInfo->Password . $userBrowser);
                    $_SESSION['isAdmin'] = $loginInfo->IsAdmin;

                } else {
                  //  return false; // wrong password
                }

          } else { // they dont exist, email not registered
              //return false;
          }
    }
}

//check logged in status
function login_check($db) {
    // Check if all session variables are set
    if (isset($_SESSION['userId'],
              $_SESSION['username'],
              $_SESSION['loginString'])) {

        $userId = $_SESSION['userId'];
        $loginString = $_SESSION['loginString'];
        $username = $_SESSION['username'];

        // Get the user-agent string of the user.
        $userBrowser = $_SERVER['HTTP_USER_AGENT'];

        if ($loginStatement = $db->prepare("SELECT Password
                                      FROM Users
                                      WHERE Id = :id LIMIT 1")) {
            $loginStatement->bindParam(':id', $userId);
            $loginStatement->execute();

            //if found then..
            if ($loginStatement->rowCount() == 1) {
                $loginInfo = $loginStatement->fetchObject();
                $loginCheck = hash('sha512', $loginInfo->Password . $userBrowser);

                if (crypt($loginCheck,$loginString) ===  $loginString){
                    return true; //logged in
                } else {
                    return $loginCheck . " " . $loginString;
                }
            } else {
                return false; // not found
            }
        } else {
            return false; // couldn't prepare statement
        }
    } else {
        return false; // session vars not set
    }
}

//not sure about this
function esc_url($url) {

    if ('' == $url) {
        return $url;
    }

    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);

    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;

    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }

    $url = str_replace(';//', '://', $url);

    $url = htmlentities($url);

    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);

    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}
