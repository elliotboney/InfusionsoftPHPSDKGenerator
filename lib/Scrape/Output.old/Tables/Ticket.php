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
 * @package   Ticket
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/tables/Ticket
 */

namespace iSDK\Tables;

/**
 * Ticket Table Class
 *
 * Ticket [short description]
 *
 * @category Tables
 * @package  Ticket
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://developers.infusionsoft.com/dbDocs/Ticket.html
 */
class Ticket
{
    /**
     * API Access: Read 
     * @var int
     */
    public $Id;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $IssueId;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $ContactId;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $UserId;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $DevId;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $TicketTitle;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $TicketApplication;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $TicketCategory;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $TicketTypeId;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Summary;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $Stage;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $Priority;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $Ordering;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateCreated;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $CreatedBy;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $LastUpdated;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $LastUpdatedBy;

    /**
     * API Access: Edit Delete Add Read 
     * @var datetime
     */
    public $CloseDate;

    /**
     * API Access: Edit Delete Add Read 
     * @var datetime
     */
    public $FolowUpDate;

    /**
     * API Access: Edit Delete Add Read 
     * @var datetime
     */
    public $TargetCompletionDate;

    /**
     * API Access: Edit Delete Add Read 
     * @var datetime
     */
    public $DateInStage;

    /**
     * API Access: Edit Delete Add Read 
     * @var double
     */
    public $TimeSpent;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $HasCustomerCalled;

}
?>