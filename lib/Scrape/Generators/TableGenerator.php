<?php 
namespace Scrape\Generators;
use scrape\ISScraper;
use Scrape\Table;
use Scrape\Service;
use Scrape\ISHelpers;


class TableGenerator {
    public $outdir = 'lib/Scrape/Output/Tables/';
    public $tablename;
    public $url;
    public $fields;
    // file handle
    public $f;

    function __construct($tbl) {
        $this->tablename = $tbl->name;
        $this->fields = $tbl->fields;
        $this->url = $tbl->url;
       // print_r($tbl->fields);
        if (!is_dir($this->outdir)) 
            mkdir($this->outdir, 0777, true);
        $this->f = fopen($this->outdir."".$this->tablename.".php", "w");  
    }

    function generate() {
        $this->fo("<?php\n");
        $this->fo("/**\n");
        $this->fo(" * [Short description for file]\n");
        $this->fo(" *\n");
        $this->fo(" * [Long description for file (if any)...]\n");
        $this->fo(" *\n");
        $this->fo(" * MIT License\n");
        $this->fo(" * ===========\n");
        $this->fo(" * \n");
        $this->fo(" * Permission is hereby granted, free of charge, to any person obtaining a\n");
        $this->fo(" * copy of this software and associated documentation files (the \"Software\"),\n");
        $this->fo(" * to deal in the Software without restriction, including without limitation\n");
        $this->fo(" * the rights to use, copy, modify, merge, publish, distribute, sublicense,\n");
        $this->fo(" * and/or sell copies of the Software, and to permit persons to whom the\n");
        $this->fo(" * Software is furnished to do so, subject to the following conditions:\n");
        $this->fo(" * \n");
        $this->fo(" * The above copyright notice and this permission notice shall be included in\n");
        $this->fo(" * all copies or substantial portions of the Software.\n");
        $this->fo(" * \n");
        $this->fo(" * THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR\n");
        $this->fo(" * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,\n");
        $this->fo(" * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL\n");
        $this->fo(" * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER\n");
        $this->fo(" * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING\n");
        $this->fo(" * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER\n");
        $this->fo(" * DEALINGS IN THE SOFTWARE.\n");
        $this->fo(" *\n");
        $this->fo(" * @category  Tables\n");
        $this->fo(" * @package   ".$this->tablename."\n");
        $this->fo(" * @author    Elliot Boney <elliotboney@gmail.com>\n");
        $this->fo(" * @copyright 1997-2013 Digital Grove, LLC\n");
        $this->fo(" * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)\n");
        $this->fo(" * @version   [0.0.1]\n");
        $this->fo(" * @link      http://help.infusionsoft.com/developers/tables/".$this->tablename."\n");
        $this->fo(" */\n\n");
        $this->fo("namespace iSDK\Tables;\n\n");
        $this->fo("/**\n");
        $this->fo(" * ".$this->tablename." Table Class\n");
        $this->fo(" *\n");
        $this->fo(" * ".$this->tablename." [short description]\n");
        $this->fo(" *\n");
        $this->fo(" * @category Tables\n");
        $this->fo(" * @package  ".$this->tablename."\n");
        $this->fo(" * @author   Elliot Boney <elliotboney@gmail.com>\n");
        $this->fo(" * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)\n");
        $this->fo(" * @link     ".$this->url."\n");
        $this->fo(" */\n");

        $this->fo("class ".$this->tablename."\n{\n");
        foreach ($this->fields as $fld) {
            $this->fo("    /**\n");

            $this->fo("     * API Access: ".$fld->access."\n");
            $this->fo("     * @var ".$fld->type."\n");
            $this->fo("     */\n");
            $this->fo("    public $".$fld->name.";\n\n");
        }
        $this->fo("}\n?>");
    }
    function fo($s) {
        fwrite($this->f,$s);
    }

    function __destruct() {
        //print_r($this->f);  
        fclose($this->f);
    }

}

?>