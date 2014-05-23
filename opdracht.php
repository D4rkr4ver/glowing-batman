<?php

/*
gegeven een array met daarin een lijst van 3 velden (laadtijd (float), geheugengebruik (int), route (string) ), lees de hele lijst door en bereken de volgende business requirements:

* avg load tijd van alle requests die meer dan 1000 memory gebruiken
* aantal requests dat meer dan 0.5 load tijd hebben
- naam van de vaakst aangeroepen route + aantal
* time, mem_use, route van het single request met de hoogste memory use
- route naam en totaal time, mem_use van de route die overall de meeste time gebruikt heeft
*/

require_once('avgLoadTijd.php');
require_once('meerDan5LoadTijd.php');
require_once('hoogsteMemUse.php');

$list = array(
  array( 0.2, 500, 'routeA' ),
  array( 0.4, 300, 'routeA' ),
  array( 0.5, 3500, 'routeB' ),
  array( 0.7, 700, 'routeA' ),
  array( 0.1, 800, 'routeB' ),
  array( 0.1, 900, 'routeA' ),
  array( 0.1, 100, 'routeB' ),
  array( 0.05, 250, 'routeC' ),
  array( 1.2, 400, 'routeA' ),
);

$avgLoadTijd = new avgLoadTijd($list);
$meerDan5LoadTijd = new meerDan5LoadTijd($list);
$hoogsteMemUse = new hoogsteMemUse($list);

var_dump($avgLoadTijd);
var_dump($meerDan5LoadTijd);
var_dump($hoogsteMemUse);
