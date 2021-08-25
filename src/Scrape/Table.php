<?php
namespace Scrape;

/**
 * undocumented class
 *
 * @package InfusionDoc
 * @author  "Elliot Boney" <elliotboney@gmail.com>
 **/
class Table
{
    /**
     * undocumented class variable
     *
     * @var $name
     **/
    var $name;
    
    /**
     * undocumented class variable
     *
     * @var string
     **/
    var $url;

    /**
     * undocumented class variable
     *
     * @var string
     **/
    var $description;

    var $fields;

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    function Table($name, $url) 
    {
        $this->name=$name;
        $this->url=$url;
    }
} // END class 

class TableField
{
    var $name;
    var $type;
    var $access;

    function TableField($name,$type,$access)
    {
        $this->name=$name;
        $this->type=$type;
        $this->access=$access;
    }
}
   
?>