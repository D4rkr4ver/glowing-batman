<?php

define('DEBUG', true);

if (DEBUG === true) {
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    echo '<div class="debug" style="font-weight: bold; text-align: center; border: dashed #ff0000;">Debug Mode</div>';
} else {
    ini_set('display_errors', 'Off');
    error_reporting(0);
}

require_once(__DIR__ . '/../Autoload.php');
require_once(__DIR__ . '/../config.php');

$db = new Database();
$db->connect('localhost', 'root', '', 'test');

if (isset($_POST['register'])) {
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_confirmation'])) {
        if ($_POST['password'] !== $_POST['password_confirmation']) {
            echo 'Passwords do not match!';
        } else {
            $a = $db->insert("INSERT INTO `users`
    (`name`, `password`)
  VALUES (
    '" . $_POST['username'] . "',
    '" . $_POST['password'] . "'
    )
  ");
        }
    }
} elseif (isset($_POST['login'])) {

    //test sql injection with addslashes
    $result = $db->select("SELECT * FROM `users` WHERE `name` = '" . ($a = addslashes($_POST['username'])) . "' AND `password` = '" . addslashes($_POST['password']) . "'");
    var_dump($a);
    if (!$result) {
        echo("Error logging in. The username or password does not match");
        return false;
    }

    return true;
}

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta charset="UTF-8">
    <title>glowing-batman</title>
</head>
<body>

<form id="login" method="post" action="login.php">Login form
    <fieldset>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="hidden" name="login">
        <input type="submit" value="Login">
    </fieldset>
</form>

<br/>

<form id="register" method="post" action="login.php">Registration form
    <fieldset>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="password_confirmation" name="password_confirmation" placeholder="password confirmation">
        <input type="hidden" name="register">
        <input type="submit" value="Register">
    </fieldset>
</form>

</body>
</html>
