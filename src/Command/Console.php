<?php

require_once(__DIR__ . '/../../Autoload.php');

use Output\Decoration\DecorationFactory;
use Output\Text\TextFormatter;

$decorationFactory = new DecorationFactory();
$outputFormatter   = new Assignment($decorationFactory->getTextFormatter(new TextFormatter()));
