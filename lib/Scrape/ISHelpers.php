<?php 
namespace Scrape;

use Scrape\ISScraper;
use Scrape\Table;
use Scrape\Service;

class ISHelpers {
    function outputTablesSorted() 
    {
        $tablespulled = ISScraper::getTableList();
        $scraper = new ISScraper();
      //  var_dump($tablespulled[0]);
       // die();
        //sort by table name
        usort($tablespulled, function($a, $b)
        {
            return strcmp($a->name, $b->name);
        });

        foreach ($tablespulled as $t) {

            echo "<h2>".$t->name."</h2>\n";
            echo "<h3>".$t->description."</h3>\n";
            echo "<pre>\n";
            //grab the table fields
            $fieldspulled = $scraper->getTableFields($t);
            //sort the table fields
            usort($fieldspulled, function($a, $b)
            {
                return strcmp($a->name, $b->name);
            });
            // iterate through and output table fields    
            foreach($fieldspulled as $t) {
                if ($t->name == "Id") {
                    echo "+ ".str_pad($t->name,30," ").str_pad($t->type,10," ").str_pad($t->access,22," ",STR_PAD_LEFT)."\n";        
                } else if ($this->right($t->name,2) == "Id") {
                    echo "- ".str_pad($t->name,30," ").str_pad($t->type,10," ").str_pad($t->access,22," ",STR_PAD_LEFT)."\n";
                } else {
                    echo "  ".str_pad($t->name,30," ").str_pad($t->type,10," ").str_pad($t->access,22," ",STR_PAD_LEFT)."\n";
                }
            }
            echo "\n</pre>\n";
            echo "<hr>";
            $this->flush_buffers();
        }
    }

    function left($str, $length) {
         return substr($str, 0, $length);
    }

    function right($str, $length) {
         return substr($str, -$length);
    }

    function flush_buffers(){ 
        ob_end_flush(); 
        // ob_flush(); 
        flush(); 
        ob_start(); 
    } 

    function debugecho($string)
    {
        if ($GLOBALS['debug']) {
            echo "<pre>".$string."</pre>\n";
            $this->flush_buffers();
        }
    }
}
?>