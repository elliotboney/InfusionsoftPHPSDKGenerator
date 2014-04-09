<?php
/**
 * [Short description for file]
 *
 * [Long description for file (if any)...]
 *
 * MIT License
 * ===========
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @category  Tables
 * @package   DataFormField
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/tables/DataFormField
 */

namespace iSDK\Tables;

/**
 * DataFormField Table Class
 *
 * DataFormField [short description]
 *
 * @category Tables
 * @package  DataFormField
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://developers.infusionsoft.com/dbDocs/DataFormField.html
 */
class DataFormField
{
    /**
     * API Access: Read 
     * @var int
     */
    public $DataType;

    /**
     * API Access: Read 
     * @var int
     */
    public $Id;

    /**
     * API Access: Read 
     * @var int
     */
    public $FormId;

    /**
     * API Access: Edit Read 
     * @var int
     */
    public $GroupId;

    /**
     * API Access: Edit Read 
     * @var string
     */
    public $Name;

    /**
     * API Access: Edit Read 
     * @var string
     */
    public $Label;

    /**
     * API Access: Edit Read 
     * @var string
     */
    public $DefaultValue;

    /**
     * API Access: Edit Read 
     * @var string
     */
    public $Values;

    /**
     * API Access: Edit Read 
     * @var int
     */
    public $ListRows;

}
?>