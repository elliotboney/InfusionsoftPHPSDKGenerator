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
 * @package   RecurringOrderWithContact
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/tables/RecurringOrderWithContact
 */

namespace iSDK\Tables;

/**
 * RecurringOrderWithContact Table Class
 *
 * RecurringOrderWithContact [short description]
 *
 * @category Tables
 * @package  RecurringOrderWithContact
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://developers.infusionsoft.com/dbDocs/RecurringOrderWithContact.html
 */
class RecurringOrderWithContact
{
    /**
     * API Access: Read 
     * @var int
     */
    public $RecurringOrderId;

    /**
     * API Access: Read 
     * @var int
     */
    public $ContactId;

    /**
     * API Access: Read 
     * @var int
     */
    public $ProgramId;

    /**
     * API Access: Read 
     * @var int
     */
    public $SubscriptionPlanId;

    /**
     * API Access: Read 
     * @var int
     */
    public $ProductId;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $StartDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $EndDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $LastBillDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $NextBillDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $PaidThruDate;

    /**
     * API Access: Read 
     * @var string
     */
    public $BillingCycle;

    /**
     * API Access: Read 
     * @var int
     */
    public $Frequency;

    /**
     * API Access: Read 
     * @var double
     */
    public $BillingAmt;

    /**
     * API Access: Read 
     * @var string
     */
    public $Status;

    /**
     * API Access: Read 
     * @var string
     */
    public $ReasonStopped;

    /**
     * API Access: Read 
     * @var int
     */
    public $AutoCharge;

    /**
     * API Access: Read 
     * @var int
     */
    public $CC1;

    /**
     * API Access: Read 
     * @var int
     */
    public $CC2;

    /**
     * API Access: Read 
     * @var int
     */
    public $NumDaysBetweenRetry;

    /**
     * API Access: Read 
     * @var int
     */
    public $MaxRetry;

    /**
     * API Access: Read 
     * @var int
     */
    public $MerchantAccountId;

    /**
     * API Access: Read 
     * @var int
     */
    public $AffiliateId;

    /**
     * API Access: Read 
     * @var string
     */
    public $PromoCode;

    /**
     * API Access: Read 
     * @var int
     */
    public $LeadAffiliateId;

    /**
     * API Access: Read 
     * @var int
     */
    public $Qty;

    /**
     * API Access: Read 
     * @var string
     */
    public $City;

    /**
     * API Access: Read 
     * @var string
     */
    public $Email;

    /**
     * API Access: Read 
     * @var string
     */
    public $EmailAddress2;

    /**
     * API Access: Read 
     * @var string
     */
    public $EmailAddress3;

    /**
     * API Access: Read 
     * @var string
     */
    public $FirstName;

    /**
     * API Access: Read 
     * @var string
     */
    public $HTMLSignature;

    /**
     * API Access: Read 
     * @var int
     */
    public $ContactId;

    /**
     * API Access: Read 
     * @var string
     */
    public $LastName;

    /**
     * API Access: Read 
     * @var string
     */
    public $MiddleName;

    /**
     * API Access: Read 
     * @var string
     */
    public $Nickname;

    /**
     * API Access: Read 
     * @var string
     */
    public $Phone1;

    /**
     * API Access: Read 
     * @var string
     */
    public $Phone1Ext;

    /**
     * API Access: Read 
     * @var string
     */
    public $Phone1Type;

    /**
     * API Access: Read 
     * @var string
     */
    public $Phone2;

    /**
     * API Access: Read 
     * @var string
     */
    public $Phone2Ext;

    /**
     * API Access: Read 
     * @var string
     */
    public $Phone2Type;

    /**
     * API Access: Read 
     * @var string
     */
    public $PostalCode;

    /**
     * API Access: Read 
     * @var string
     */
    public $Signature;

    /**
     * API Access: Read 
     * @var string
     */
    public $SpouseName;

    /**
     * API Access: Read 
     * @var string
     */
    public $State;

    /**
     * API Access: Read 
     * @var string
     */
    public $Country;

    /**
     * API Access: Read 
     * @var string
     */
    public $StreetAddress1;

    /**
     * API Access: Read 
     * @var string
     */
    public $StreetAddress2;

    /**
     * API Access: Read 
     * @var string
     */
    public $Suffix;

    /**
     * API Access: Read 
     * @var string
     */
    public $Title;

    /**
     * API Access: Read 
     * @var string
     */
    public $ZipFour1;

}
?>