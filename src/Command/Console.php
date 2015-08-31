<?php

require_once(__DIR__ . '/../../vendor/autoload.php');

use Output\Decoration\DecorationFactory;

$decorationFactory = new DecorationFactory();
$outputFormatter   = new Assignment($decorationFactory->getTextFormatter());
