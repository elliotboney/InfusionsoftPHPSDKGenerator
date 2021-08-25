<?php
/**
 * MIT License
 * ===========
 *
 * Copyright (c) 2012 Elliot Boney <elliotboney@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
 * CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
 * TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @category  Scraper
 * @package   InfusionDoc
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 2012 Elliot Boney.
 * @license   http://www.opensource.org/licenses/mit-license.php  MIT License
 * @version   0.0.1
 * @link      http://www.elliotboney.com
 */

namespace Scrape;

define( 'IS_TABLES_URL', 'http://developers.infusionsoft.com/dbDocs/' );
define( 'IS_API_BASE', 'http://help.infusionsoft.com/' );
define( 'IS_SERVICE_URL', 'https://developer.infusionsoft.com/docs/xml-rpc/' );
define( 'IS_DB_DOCS_BASE', 'http://developers.infusionsoft.com/dbDocs/' );
define( 'MAX_FILE_SIZE', 600000000 );

use Sunra\PhpSimple\HtmlDomParser;
use Phpfastcache\CacheManager;
use Phpfastcache\Config\ConfigurationOption;

use SimpleXmlReader\SimpleXmlReader;

/**
 * undocumented class
 *
 * @package InfusionDoc
 *
 */
class ISScraper {

    private $tablearray = array();

    public $servicelist = [];

    function __construct() {
        CacheManager::setDefaultConfig( new ConfigurationOption( [
            'path' => sys_get_temp_dir()
        ] ) );
    }

    /**
     * Returns array of Table Objects
     *
     * @return array
     *
     */
    public function getTableList() {
        // Create DOM from URL or file
        $html = file_get_html( IS_TABLES_URL );
        // Find all images
        foreach ( $html->find( 'ul li a' ) as $element ) {
            $table       = new Table();
            $table->name = $element->plaintext;
            $table->url  = IS_DB_DOCS_BASE . $element->href;
            $tmpfields   = $this->getTableFields( $table );
            usort( $tmpfields, function ( $first, $second ) {
                if ( $first->name == "Id" ) {
                    return - 1;
                } else if ( $second->name == "Id" ) {
                    return 1;
                }

                return strcmp( $first->name, $second->name );
            } );
            $tmpfields = array_filter( $tmpfields, function ( $val ) {
                return ! strpos( $val->name, "." );
            } );

            $table->fields      = $tmpfields;
            $this->tablearray[] = $table;
        }
        // clear up memory
        $html->clear();
        unset( $html );
        usort( $this->tablearray, function ( $first, $second ) {
            return strcmp( $first->name, $second->name );
        } );
        $this->tablearray = array_filter( $this->tablearray, function ( $val ) {
            return $val->name !== "RecurringOrderWithContact";
        } );

        return $this->tablearray;
    }

    /**
     * Gets fields and their properties for a Table
     *
     * Blah blah
     *
     * @param object $t Table object to get fields for.
     *
     * @return TableField[]
     *
     * @access public
     *
     */
    function getTableFields( $t ) {
        $html = file_get_html( IS_TABLES_URL . $t->name . ".html" );
        if ( gettype( $html ) == "object" ) {
            $header     = false;
            $fieldArray = array();
            $rows       = $html->find( 'tr' );
            foreach ( $rows as $element ) {
                /* skip the header row */
                if ( $header == false ) {
                    $header = true;
                    continue;
                }
                /* switch for the field type*/
                switch ( $element->children( 1 )->plaintext ) {
                    case "String":
                        $type = "string";
                        break;

                    case "Integer":
                        $type = "int";
                        break;

                    case "Double":
                        $type = "double";
                        break;

                    case "DateTime":
                        $type = "datetime";
                        break;

                    case "Date":
                        $type = "datetime";
                        break;

                    case "Long":
                        $type = "long";
                        break;

                    case "Boolean":
                        $type = "bool";
                        break;

                    case "Enum":
                        $type = "enum";
                        break;

                    case "Blob":
                        $type = "blob";
                        break;

                    default:
                        $type = "[[[ " . $element->children( 1 )->plaintext . " ]]]";
                }
                $field         = new TableField();
                $field->name   = $element->children( 0 )->plaintext;
                $field->type   = $type;
                $field->access = $element->children( 2 )->plaintext;
                $fieldArray[]  = $field;
            }
            // clear up memory
            $html->clear();
            unset( $html );
        } else {
            echo "Crap on " . $t->name . " type is " . gettype( $html );
        }

        return $fieldArray;
    }

    /**
     * Gets fields and their properties for a Table
     *
     * Blah blah
     *
     * @param object $t Table object to get fields for.
     *
     * @return string returns the description of the table
     *
     * @access public
     *
     */
    function getTableDescr( $t ) {
        $html = file_get_html( IS_API_BASE . 'developers/tables/' . $t->name );
        try {
            if ( $html->find( '#databaseDoc', - 1 ) == false ) {
                throw new Exception( $t->name . " not found!" );
            }
            $description = $html->find( '#databaseDoc', 0 )->children( 1 )->plaintext . "\n";
        } catch ( \Exception $e ) {
            $description = "No Description Available in Online Documentation.";
        }
        // clear up memory
        $html->clear();
        unset( $html );

        return $description;
    }

    private function getServicePage() {
        $InstanceCache = CacheManager::getInstance( 'files' );
        $cachedpage    = $InstanceCache->getItem( 'servicelist' );
        if ( ! $cachedpage->isHit() ) {
            $pagehtml = ISHelpers::file_get_contents_curl( IS_SERVICE_URL );
            $cachedpage->set( $pagehtml )->expiresAfter( 600 );//in seconds, also accepts Datetime
            $InstanceCache->save( $cachedpage ); // Save the cache item just like you do with doctrine and entities
        } else {
            $pagehtml = $cachedpage->get();
        }

        return $pagehtml;
    }

    function getServiceList() {
        $html = HtmlDomParser::str_get_html( $this->getServicePage() );

        foreach ( $html->find( '.method-declaration' ) as $i ) {
            if ( strpos( $i->outertext, 'lang-xml' ) > 0 ) {
                if ( strpos( $i->outertext, '(' ) > 0 ) {
                    // ignore example code
                    continue;
                }
            } else {
                continue;
            }

            $service = preg_split( '/\./', trim( $i->plaintext ) );

            if ( ! isset( $this->servicelist[ $service[0] ] ) ) {
                $tempservice = new Service( $service[0] );
                $tempservice->addMethod( new ServiceMethod( $service[1] ) );
                $this->servicelist[ $service[0] ] = $tempservice;
            } else {
                // we are on a method, let's add it to the service
                /**
                 * @var Service $s
                 */
                $s = $this->servicelist[ $service[0] ];
                $s->addMethod( new ServiceMethod( $service[1] ) );

            }
        }

        $this->getMethods( $html );

        // clear up memory
        $html->clear();
        unset( $html );

        return $this->servicelist;
    }

    /**
     * @param \simplehtmldom_1_5\simple_html_dom $html
     */
    function getMethods( $html ) {


        foreach ( $html->find( '.method-request' ) as $i ) {
            $method  = null;
            $service = null;
            if ( strpos( $i->outertext, 'lang-xml' ) > 0 ) {
                $xmltoparse = html_entity_decode( $i->plaintext );
                // Remove opening xml since it makes simplexml errrrr
                $xmltoparse = str_replace( "<?xml version='1.0' encoding='UTF-8'?>", "", $xmltoparse );

                $xml = SimpleXmlReader::openFromString( $xmltoparse );

                foreach ( $xml->path( 'methodCall/methodName' ) as $paramz ) {
                    $serviceinfo = preg_split( '/\./', ( (array) $paramz )[0] );
                    $method      = new ServiceMethod( $serviceinfo[1] );
                }

                $xml = SimpleXmlReader::openFromString( $xmltoparse );

                foreach ( $xml->path( 'methodCall/params' ) as $param ) {
                    /**
                     * @var \SimpleXMLElement $param
                     */
                    foreach ( $param as $p ) {
                        $pflat = (array) $p->value;
                        $ptype = key( $pflat );
                        $pname = reset( $pflat );
                        if ( $pname == "privateKey" ) {
                            continue;
                        }
                        echo "<code><pre>";
                        echo $pname . " --> " . $ptype;
                        echo "</pre></code>";

                        if ( $ptype == "array" ) {
                            echo "<code><pre>";
                            var_dump($pname);
                            echo "</pre></code>";
                            echo "<h5>Adding &lt;${pname}&gt; to ${serviceinfo[0]}->${serviceinfo[1]}</h5>";
                            $this->servicelist[ $serviceinfo[0] ]->methods[ $method->name ]->addParameters( new ServiceMethodParam( $pname, "array", "" ) );

                        } else if ( $ptype == "struct" ) {

                        } else {
                            echo "<h5>Adding &lt;${pname}&gt; to ${serviceinfo[0]}->${serviceinfo[1]}</h5>";
                            $this->servicelist[ $serviceinfo[0] ]->methods[ $method->name ]->addParameters( new ServiceMethodParam( $pname, $ptype, "" ) );
                        }

                    }
                }

                if ( ! isset( $this->servicelist[ $serviceinfo[0] ] ) ) {
                    echo "<H1>${serviceinfo[0]} isn't set</H1>";
                } else {
                    $this->servicelist[ $serviceinfo[0] ]->addMethod( $method );

                }
            } else {
                // isn't the right node, skip
                continue;
            }
        }

    }

    /**
     * Gets methods and information from services
     *
     * @return void
     *
     * @param Service $s Server object
     *
     * @author    Elliot Boney <elliotboney@gmail.com>
     *
     */
    function getServiceInfo( $s ) {
        // TODO: Add support for optional parameters
        echo "<h2>" . $s->name . "</h2>";
        $html       = HtmlDomParser::file_get_html( $s->url );
        $methods    = $html->find( '.full_method' );
        $methodlist = array();
        foreach ( $methods as $m ) {
            $tmpmethod              = new ServiceMethod();
            $tmpmethod->name        = trim( $m->find( '.method', 0 )->plaintext );
            $tmpmethod->description = $m->next_sibling()->plaintext;
            echo "<h4>" . $tmpmethod->name . "</h4>";
            $paramtable = $m->next_sibling()->next_sibling()->next_sibling();

            $this->getMethodParameters( $paramtable, $tmpmethod );
            $methodlist[] = $tmpmethod;

            // Check to see if there are any optional parameters
            if ( $paramtable->next_sibling()->plaintext == "Optional Parameters" ) {
                $tmpoptmethod             = new ServiceMethod();
                $tmpoptmethod->parameters = $tmpmethod->parameters;
                $this->getMethodParameters( $paramtable->next_sibling()->next_sibling(), $tmpoptmethod, true );
                $tmpoptmethod->name = $tmpmethod->name . ucwords( $tmpoptmethod->parameters[ count( $tmpoptmethod->parameters ) - 2 ]->name );
                $methodlist[]       = $tmpoptmethod;

            }
        }
        ISHelpers::flush_buffers();
        echo "<hr>";

        return $methodlist;
    }

    function getMethodParameters( $paramtable, &$tmpmethod, $optional = false ) {
        // flag for the table heading
        $thead = true;
        foreach ( $paramtable->find( 'tbody tr' ) as $tr ) {
            if ( $thead ) {
                $thead = false;
                continue;
            }
            $name  = trim( $tr->children( 0 )->plaintext );
            $type  = trim( $tr->children( 1 )->plaintext );
            $descr = trim( $tr->children( 2 )->plaintext );
            // skip the key, we use this with all methods
            if ( $name == "privateKey" || $name == "Key" || $name == "key" ) {
                continue;
            }
            $tmpp = new ServiceMethodParam( $name, $type, $descr, $optional );

            $tmpmethod->parameters[] = $tmpp;

            echo "<pre>\n";
            echo "        \t" . str_pad( $name, 20, " ", STR_PAD_RIGHT ) . str_pad( $type, 10, " " ) . str_pad( ISHelpers::left( $descr, 55 ) . "...", 22, " ", STR_PAD_LEFT ) . "\n";
            echo "</pre>\n";
        }
    }
} // END class

?>