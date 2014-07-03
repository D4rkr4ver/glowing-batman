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

use Output\Html\HtmlFormatter;

$config = new Config();

switch (date('Y-m-d')) {
    case $config->comicSansDay:
        echo '<style>*{font-family: Comic Sans MS}</style>';
        break;
}

$outputFormatter = new Assignment(new HtmlFormatter());

?>
</body>
</html>
