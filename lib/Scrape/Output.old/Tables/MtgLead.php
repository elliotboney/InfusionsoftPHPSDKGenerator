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
 * @package   MtgLead
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/tables/MtgLead
 */

namespace iSDK\Tables;

/**
 * MtgLead Table Class
 *
 * MtgLead [short description]
 *
 * @category Tables
 * @package  MtgLead
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://developers.infusionsoft.com/dbDocs/MtgLead.html
 */
class MtgLead
{
    /**
     * API Access: Read 
     * @var int
     */
    public $Id;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateAppraisalOrdered;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateAppraisalDone;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateAppraisalReceived;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateTitleOrdered;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateTitleReceived;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateRateLocked;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateRateLockExpires;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $CreditReportDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $ApplicationDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $ActualCloseDate;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $FundingDate;

}
?>