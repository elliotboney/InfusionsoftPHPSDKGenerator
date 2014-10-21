<?php
namespace Scrape;
/**
 * undocumented class
 *
 * @package InfusionDoc
 * @author  "Elliot Boney" <elliotboney@gmail.com>
 **/
class Service 
{
    /**
     * Service Name
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

    var $methods;

    /**
     * undocumented function
     *
     * @return void
     * @author 
     **/
    function Service($name, $url) 
    {
        $this->name=$name;
        $this->url=$url;
    }
} // END class 

class ServiceMethod
{
    var $name;
    var $description;
    var $parameters = array();
    var $returns;

    function ServiceMethod($name,$parameters,$returns)
    {
        $this->name=$name;
        $this->parameters=$parameters;
        $this->returns=$returns;
    }
}
class ServiceMethodParam
{
    var $name;
    var $type;
    var $description;
    var $optional;

    function __construct($name,$type,$description,$optional=false)
    {
        $this->name=$name;
        $this->type=$type;
        $this->description=$description;
        $this->optional=$optional;
    }
}
   
?>