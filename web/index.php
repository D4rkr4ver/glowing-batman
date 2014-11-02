<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta charset="UTF-8">
    <title>glowing-batman</title>
</head>
<body>
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

use Output\Decoration\DecorationFactory;

$x = new DecorationFactory();
$outputFormatter = new Assignment($x->getHtmlFormatter());

?>
</body>
</html>
