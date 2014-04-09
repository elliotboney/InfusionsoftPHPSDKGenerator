<?php
@apache_setenv('no-gzip', 1);
define("DEBUG",2);
@ini_set('output_buffering',0);
    @ini_set('zlib.output_compression', 0);
    @ini_set('implicit_flush', 1);
ob_start();
       
error_reporting(E_ERROR);
ini_set('display_errors', '1');
ini_set('html_errors', 'Off');

// Include Classes
require_once "lib/Scrape/ISScraper.php";
require_once "lib/Scrape/ISHelpers.php";
require_once "lib/Scrape/Service.php";
require_once "lib/Scrape/Generators/ServiceGenerator.php";
require_once "lib/Scrape/Generators/TableGenerator.php";


// Declare Instances of each Object
$scraper = new Scrape\ISScraper();
$helper = new Scrape\ISHelpers();
// $svc = new Scrape\Generators\ServiceGenerator("TestService");

?>

<!doctype html>
<html>
<head>
    <title>Infusionsoft API Docs Scrape</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php

// Output the Tables
/*$helper->outputTablesSorted();*/

// echo "<pre>================================================================================================</pre>";
//     $servicearray = $scraper->getServiceList();
//     foreach ($servicearray as $s)
//         $scraper->getServiceInfo($s);



/*$tbllist = $scraper->getTableList();
foreach ($tbllist as $t) {
    // echo "Creating docs for Table: ".$t->name."\n";
    // echo "<h2>" . $t->name . "</h2>";
    $helper->flush_buffers();
    $t->fields = $scraper->getTableFields($t);
    $gen = new Scrape\Generators\TableGenerator($t);
    $gen->generate();
    unset($gen);
}*/

$helper->outputTablesSorted();

$svclist = $scraper->getServiceList();
foreach ($svclist as $s) {
    // echo "Creating docs for Service: ".$s->name."\n";
    $helper->flush_buffers();
    $s->methods = $scraper->getServiceInfo($s);
    $gen = new Scrape\Generators\ServiceGenerator($s);
    $gen->generate();
    unset($gen);
}

?>
</body>
</html>
