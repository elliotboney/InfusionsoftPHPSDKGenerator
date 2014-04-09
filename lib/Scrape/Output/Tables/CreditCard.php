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
 * @package   CreditCard
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/tables/CreditCard
 */

namespace iSDK\Tables;

/**
 * CreditCard Table Class
 *
 * CreditCard [short description]
 *
 * @category Tables
 * @package  CreditCard
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://developers.infusionsoft.com/dbDocs/CreditCard.html
 */
class CreditCard
{
    /**
     * API Access: Read 
     * @var int
     */
    public $Id;

    /**
     * API Access: Add Read 
     * @var int
     */
    public $ContactId;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $FirstName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $LastName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $PhoneNumber;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $Email;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillAddress1;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillAddress2;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillCity;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillState;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillZip;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillCountry;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipFirstName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipMiddleName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipLastName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipCompanyName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipPhoneNumber;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipAddress1;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipAddress2;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipCity;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipState;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipZip;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipCountry;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ShipName;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $NameOnCard;

    /**
     * API Access: Add 
     * @var string
     */
    public $CardNumber;

    /**
     * API Access: Read 
     * @var string
     */
    public $Last4;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ExpirationMonth;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ExpirationYear;

    /**
     * API Access: Edit Add 
     * @var string
     */
    public $CVV2;

    /**
     * API Access: Read 
     * @var int
     */
    public $Status;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $CardType;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $StartDateMonth;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $StartDateYear;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $MaestroIssueNumber;

}
?>