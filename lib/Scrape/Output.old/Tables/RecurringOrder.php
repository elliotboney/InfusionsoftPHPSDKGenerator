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
 * @package   RecurringOrder
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/tables/RecurringOrder
 */

namespace iSDK\Tables;

/**
 * RecurringOrder Table Class
 *
 * RecurringOrder [short description]
 *
 * @category Tables
 * @package  RecurringOrder
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://developers.infusionsoft.com/dbDocs/RecurringOrder.html
 */
class RecurringOrder
{
    /**
     * API Access: Read 
     * @var int
     */
    public $Id;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $ContactId;

    /**
     * API Access: Read 
     * @var int
     */
    public $OriginatingOrderId;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $ProgramId;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $SubscriptionPlanId;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $ProductId;

    /**
     * API Access: Edit Add Read 
     * @var datetime
     */
    public $StartDate;

    /**
     * API Access: Edit Add Read 
     * @var datetime
     */
    public $EndDate;

    /**
     * API Access: Edit Add Read 
     * @var datetime
     */
    public $LastBillDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $NextBillDate;

    /**
     * API Access: Edit Add Read 
     * @var datetime
     */
    public $PaidThruDate;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $BillingCycle;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $Frequency;

    /**
     * API Access: Edit Add Read 
     * @var double
     */
    public $BillingAmt;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $Status;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $ReasonStopped;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $AutoCharge;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $CC1;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $CC2;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $NumDaysBetweenRetry;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $MaxRetry;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $MerchantAccountId;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $AffiliateId;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $PromoCode;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $LeadAffiliateId;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $Qty;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $ShippingOptionId;

}
?>