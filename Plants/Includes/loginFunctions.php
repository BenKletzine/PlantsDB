/* Secure session code based on
  http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL
*/

<?php
include_once 'psl-config.php';

function startSecureSession() {//sec_session_start
    $session_name = 'plantSessionId';   // Set a custom session name was sec_session_id
    session_name($session_name);
    // Forces sessions to only use cookies, preventing attacks involved passing session ids in URLs
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    //cookies only over secure connections, through http only no js
    $secure = true;
    $httponly = true;
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"],
        $cookieParams["domain"],
        $secure,
        $httponly);
    session_start();             // Start the PHP session
    session_regenerate_id(true); // regenerated the session, delete the old one.
}

function login($email, $password, $db) {
    // Using prepared statements means that SQL injection is not possible.
    // if successfully prepared then returns PDO Statement otherwise throws PDO Excdptions
    if ($loginStatement = $db->prepare("SELECT Id, UserName, Password
        FROM Users
        WHERE Email = ? :email
        LIMIT 1")
        ){
        $loginStatement->bind_param(':email', $email);
        $loginStatement->execute();
      //  $user_id, $username, $db_password) result vars.
        //if found then...
        if ($loginStatement->rowCount() == 1) {
                /* Check if the password in the database matches
                   the password the user submitted.
                   will return object of the default stdClass
                */
                $loginInfo = $loginStatement->fetchObject();
                if (password_verify($password, $loginInfo->Password)) {
                    // Password is correct!
                    // Get the user-agent string of the user.
                    $userBrowser = $_SERVER['HTTP_USER_AGENT'];
                    // XSS protection as we might print this value
                    $userId = preg_replace("/[^0-9]+/", "", $loginInfo->Id);
                    $_SESSION['userId'] = $userId;
                    // XSS protection as we might print this value
                    $username = preg_replace("/[^a-zA-Z0-9_\-]+/",
                                                                "",
                                                                $loginInfo->UserName);
                    $_SESSION['username'] = $username;
                    $_SESSION['loginString'] = hash('sha512', //changed login_string to loginString
                              $loginInfo->Password . $userBrowser);
                    // Login successful.
                    return true;
                } else {
                    // Password is not correct, display message?
                    return false;
                }

          } else { // they dont exist, email not registered
              return false;
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
            $loginStatement->bind_param(':id', $userId);
            $loginStatement->execute();

            //if found then..
            if ($loginStatement->rowCount() == 1) {
                $loginInfo = $loginStatement->fetchObject();
                $loginCheck = hash('sha512', $loginInfo->Password . $userBrowser);

                if (hash_equals($loginCheck, $loginString) ){
                    return true; //logged in
                } else {
                    return false;
                }
            } else {
                return false; //not found
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
