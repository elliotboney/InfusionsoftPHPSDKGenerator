<?php

if ( function_exists( 'apache_setenv' ) ) {
    @apache_setenv( 'no-gzip', 1 );
}

ini_set( "memory_limit", "-1" );
set_time_limit( 0 );

define( "IS_DEBUG", 2 );
@ini_set( 'output_buffering', 0 );
@ini_set( 'zlib.output_compression', 0 );
@ini_set( 'implicit_flush', 1 );
// ob_start();

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );
// ini_set('html_errors', 'Off');

// Include Classes
// require_once "lib/Scrape/ISScraper.php";
// require_once "lib/Scrape/ISHelpers.php";
// require_once "lib/Scrape/Service.php";
// require_once "lib/Scrape/Generators/ServiceGenerator.php";
// require_once "lib/Scrape/Generators/TableGenerator.php";

/* global $debugObject;

class debughtml {
    public static function debugLog($txt) {
        echo '<!-- '.$txt.PHP_EOL.' -->';
    }

    public static function debugLogEntry($txt) {
        echo self::debugLog($txt);
    }
}


$debugObject = new debughtml(); */

require 'vendor/autoload.php';
// Declare Instances of each Object
$scraper = new Scrape\ISScraper();
$helper  = new Scrape\ISHelpers();
// $svc = new Scrape\Generators\ServiceGenerator("TestService");

?>

<!doctype html>
<html>
  <head>
    <title>Infusionsoft API Docs Scrape</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <!-- END Bootstrap -->

    <!-- <link rel="stylesheet" href="bower_components/google-code-prettify/src/prettify.css"> -->

    <link rel="stylesheet" href="assets/css/tomorrow.css">
<!--    <link rel="stylesheet" href="assets/css/main.css">-->

    <!--<script src="bower_components/google-code-prettify/src/prettify.js" type="text/javascript"></script>-->
    <!-- <link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/default.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="assets/js/highlight.pack.js"></script>
    <style>

    </style>
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

        // $helper->outputTablesSorted();

        $svclist = $scraper->getServiceList();

        foreach ( $svclist as $s ) {
            echo "<h1>Creating docs for Service: " . $s->name . "</h1>" . PHP_EOL;
            echo "<pre><code class='json'>";
            echo json_encode($s,JSON_PRETTY_PRINT);
            echo "</code></pre>";
            //     $helper->flush_buffers();
            //     $s->methods = $scraper->getServiceInfo($s);
            //     $gen = new Scrape\Generators\ServiceGenerator($s);
            //     $gen->generate();
            //     unset($gen);
        }

        ?>
      <script type="text/javascript">
        $(document).ready(function () {
          // prettyPrint();
          hljs.initHighlightingOnLoad();
        });
      </script>

    </div>
  </body>
</html>
