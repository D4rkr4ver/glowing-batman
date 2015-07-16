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

use Output\Decoration\DecorationFactory;

$decorationFactory = new DecorationFactory();
$outputFormatter   = new Assignment($decorationFactory->getHtmlFormatter());

?>
</body>
</html>
