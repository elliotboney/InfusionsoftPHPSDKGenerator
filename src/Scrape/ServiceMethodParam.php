<?php
/**
 * @author: eboney
 */

namespace Scrape;

/**
 * Class ServiceMethodParam
 *
 * @package Scrape
 */
class ServiceMethodParam {

    /**
     * @var
     */
    public $name;

    /**
     * @var
     */
    public $type;

    /**
     * @var
     */
    public $description;

    /**
     * @var bool
     */
    public $optional;

    /**
     * ServiceMethodParam constructor.
     *
     * @param      $name
     * @param      $type
     * @param      $description
     * @param bool $optional
     */
    function __construct( $name, $type, $description, $optional = false ) {
        $this->name        = $name;
        $this->type        = $type;
        $this->description = $description;
        $this->optional    = $optional;
    }
}