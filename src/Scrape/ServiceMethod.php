<?php
/**
 * @author: eboney
 */

namespace Scrape;

/**
 * Class ServiceMethod
 *
 * @package Scrape
 */
class ServiceMethod {
    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $description;
    /**
     * @var array
     */
    public $parameters = array();
    /**
     * @var
     */
    public $returns;

    /**
     * ServiceMethod constructor.
     *
     * @param $name
     * @param ServiceMethodParam[] $parameters
     * @param $returns
     */
    function __construct( $name, $parameters=[], $returns=false ) {
        $this->name       = $name;
        $this->parameters = $parameters;
        $this->returns    = $returns;
    }

    /**
     * @param ServiceMethodParam $parameter
     */
    function addParameters($parameter) {
        $this->parameters[] = $parameter;
    }
}