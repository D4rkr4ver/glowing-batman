<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <meta charset="UTF-8">
    <title>glowing-batman</title>
</head>
<body>
<?php

require_once(__DIR__ . '/../Autoload.php');
require_once(__DIR__ . '/../config.php');

use Output\Decoration\DecorationFactory;

$x = new DecorationFactory();
$outputFormatter = new Assignment($x->getHtmlFormatter());

?>
</body>
</html>
