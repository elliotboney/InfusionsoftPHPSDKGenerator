<?php

namespace Scrape;
/**
 * undocumented class
 *
 * @package InfusionDoc
 * @author  "Elliot Boney" <elliotboney@gmail.com>
 **/
/**
 * Class Service
 *
 * @package Scrape
 */
class Service {

    /**
     * @var string
     */
    public $name;

    /**
     * @var
     */
    public $url;

    /**
     * @var
     */
    public $description;

    /**
     * @var
     */
    public $methods;

    /**
     * Service constructor.
     *
     * @param null  $servicename
     * @param null  $url
     * @param null  $description
     * @param array $methods
     */
    function __construct($servicename = null, $url =null, $description=null, $methods = []) {
        $this->name = $servicename;
    }

    /**
     * @param ServiceMethod $method
     */
    function addMethod($method) {
        if (is_a($method, '\Scrape\ServiceMethod')) {
            $this->methods[ $method->name ] = $method;

        } else {
            var_dump($method);
            die();
        }
    }


} // END class 

