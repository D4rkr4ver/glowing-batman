<?php

require_once(__DIR__ . '/../../Autoload.php');

use Output\Decoration\DecorationFactory;
use Output\Text\TextFormatter;

$x = new DecorationFactory();
$outputFormatter = new Assignment($x->getTextFormatter(new TextFormatter()));
