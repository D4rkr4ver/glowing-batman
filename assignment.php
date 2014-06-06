<?php

require_once(__DIR__ . '/vendor/autoload.php');

use Controllers\AvgLoadTime;
use Controllers\MoreThanLoadTime;
use Controllers\HighestMemUse;
use Controllers\MostCalledRoute;
use Output\Html\HtmlFormatter;
use Output\Text\TextFormatter;

/*
gegeven een array met daarin een lijst van 3 velden (laadtijd (float), geheugengebruik (int), route (string) ), lees de hele lijst door en bereken de volgende business requirements:

* avg load tijd van alle requests die meer dan 1000 memory gebruiken
* aantal requests dat meer dan 0.5 load tijd hebben
* naam van de vaakst aangeroepen route + aantal
* time, mem_use, route van het single request met de hoogste memory use
- route naam en totaal time, mem_use van de route die overall de meeste time gebruikt heeft
*/

require_once('Controllers/AvgLoadTime.php');
require_once('Controllers/MoreThanLoadTime.php');
require_once('Controllers/HighestMemUse.php');
require_once('Controllers/MostCalledRoute.php');
require_once('Output/OutputFormatter.php');
require_once('Output/Html/AvgLoadTimeHtmlFormatter.php');
require_once('Output/Html/HighestMemUseHtmlFormatter.php');
require_once('Output/Html/MoreThanLoadTimeHtmlFormatter.php');
require_once('Output/Html/MostCalledRouteHtmlFormatter.php');
require_once('Output/Html/HtmlFormatter.php');
require_once('Output/Text/AvgLoadTimeTextFormatter.php');
require_once('Output/Text/HighestMemUseTextFormatter.php');
require_once('Output/Text/MoreThanLoadTimeTextFormatter.php');
require_once('Output/Text/MostCalledRouteTextFormatter.php');
require_once('Output/Text/TextFormatter.php');
require_once('Output/UpperCase.php');

$list = array(
    array(0.2, 500, 'routeA'),
    array(0.4, 300, 'routeA'),
    array(0.5, 3500, 'routeB'),
    array(0.7, 700, 'routeA'),
    array(0.1, 800, 'routeB'),
    array(0.1, 900, 'routeA'),
    array(0.1, 100, 'routeB'),
    array(0.05, 250, 'routeC'),
    array(1.2, 400, 'routeA'),
);

if (isset($argv[1]) && $argv[1] === '--html') {
    $outputFormatter = new HtmlFormatter();
} else {
    $outputFormatter = new TextFormatter();
}

$avgLoadTime = new AvgLoadTime();
$moreThanLoadTime = new MoreThanLoadTime();
$highestMemUse = new HighestMemUse();
$mostCalledRoute = new MostCalledRoute();

$avgLoadTime->calculateAvgLoadTime($list, 1000);
$moreThanLoadTime->calculateMoreThanLoadTime($list, 0.5);
$highestMemUse->calculateHighestMemUse($list);
$mostCalledRoute->calculateMostCalledRoute($list);

echo $outputFormatter->output($avgLoadTime) . PHP_EOL;
echo $outputFormatter->output($moreThanLoadTime) . PHP_EOL;
echo $outputFormatter->output($highestMemUse) . PHP_EOL;
echo $outputFormatter->output($mostCalledRoute) . PHP_EOL;
