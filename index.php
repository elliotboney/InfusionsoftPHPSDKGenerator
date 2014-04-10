<?php @apache_setenv('no-gzip', 1);
define("DEBUG", 2);
@ini_set('output_buffering', 0);
@ini_set('zlib.output_compression', 0);
@ini_set('implicit_flush', 1);
ob_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');
// ini_set('html_errors', 'Off');

// Include Classes
// require_once "lib/Scrape/ISScraper.php";
// require_once "lib/Scrape/ISHelpers.php";
// require_once "lib/Scrape/Service.php";
// require_once "lib/Scrape/Generators/ServiceGenerator.php";
// require_once "lib/Scrape/Generators/TableGenerator.php";
require 'autoload.php';
// Declare Instances of each Object
$scraper = new Scrape\ISScraper();
$helper = new Scrape\ISHelpers();
// $svc = new Scrape\Generators\ServiceGenerator("TestService");


?>

<!doctype html>
<html>
<head>
    <title>Infusionsoft API Docs Scrape</title>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css">
  <!-- END Bootstrap -->


    <!-- <link rel="stylesheet" href="bower_components/google-code-prettify/src/prettify.css"> -->
    
    <link rel="stylesheet" href="assets/css/tomorrow.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!--<script src="bower_components/google-code-prettify/src/prettify.js" type="text/javascript"></script>-->
    <!-- <link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/default.min.css"> -->
    
    <script src="assets/js/highlight.pack.js"></script>

</head>
<body>
<div class="container-fluid">
    <?php
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

// $helper->outputTablesSQL();

$helper->outputTablesSorted();
/*
    $svclist = $scraper->getServiceList();
    foreach ($svclist as $s) {
        // echo "Creating docs for Service: ".$s->name."\n";
        $helper->flush_buffers();
        $s->methods = $scraper->getServiceInfo($s);
        $gen = new Scrape\Generators\ServiceGenerator($s);
        $gen->generate();
        unset($gen);
    }
*/
?>
<script type="text/javascript">
$( document ).ready(function() {
    // prettyPrint();
    hljs.initHighlightingOnLoad();
});
</script>

</div>
</body>
</html>
