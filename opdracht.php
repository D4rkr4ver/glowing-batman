<?php

/*
gegeven een array met daarin een lijst van 3 velden (laadtijd (float), geheugengebruik (int), route (string) ), lees de hele lijst door en bereken de volgende business requirements:

* avg load tijd van alle requests die meer dan 1000 memory gebruiken
* aantal requests dat meer dan 0.5 load tijd hebben
- naam van de vaakst aangeroepen route + aantal
* time, mem_use, route van het single request met de hoogste memory use
- route naam en totaal time, mem_use van de route die overall de meeste time gebruikt heeft
*/

require_once('AvgLaadTijd.php');
require_once('MeerDanLaadTijd.php');
require_once('HoogsteMemUse.php');

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

$avgLaadTijd = new AvgLaadTijd();
$meerDanLaadTijd = new MeerDanLaadTijd();
$hoogsteMemUse = new HoogsteMemUse();

$avgLaadTijd->calculateAvgLaadTijd($list, 1000);
$meerDanLaadTijd->calculateMeerDanLaadTijd($list, 0.5);
$hoogsteMemUse->calculateHoogsteMemUse($list);

$avgLaadTijdUitkomst = $avgLaadTijd->getAvgLaadTijd();
$meerDanLaadTijdUitkomst = $meerDanLaadTijd->getMeerDanLaadTijd();
$hoogsteMemUseUitkomst = $hoogsteMemUse->getHoogsteMemUse();

print_r(array(
    sprintf('De gemiddelde laadtijd van items die meer dan %d geheugen gebruiken is %s', $avgLaadTijdUitkomst['geheugen'], $avgLaadTijdUitkomst['laadtijd'] / $avgLaadTijdUitkomst['aantal']),
    sprintf('%s requests hebben meer dan %s laadtijd nodig', $meerDanLaadTijdUitkomst['aantal'], $meerDanLaadTijdUitkomst['laadtijd']),
    sprintf('Het request met de hoogste memory heeft %s laadtijd, %s geheugen, en route \'%s\'', $hoogsteMemUseUitkomst['laadtijd'], $hoogsteMemUseUitkomst['geheugen'], $hoogsteMemUseUitkomst['route']),
));
