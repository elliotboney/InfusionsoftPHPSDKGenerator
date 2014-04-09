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
 * @package   Contact
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/tables/Contact
 */

namespace iSDK\Tables;

/**
 * Contact Table Class
 *
 * Contact [short description]
 *
 * @category Tables
 * @package  Contact
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://developers.infusionsoft.com/dbDocs/Contact.html
 */
class Contact
{
    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Address1Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Address2Street1;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Address2Street2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Address2Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Address3Street1;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Address3Street2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Address3Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var datetime
     */
    public $Anniversary;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $AssistantName;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $AssistantPhone;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $BillingInformation;

    /**
     * API Access: Edit Delete Add Read 
     * @var datetime
     */
    public $Birthday;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $City;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $City2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $City3;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Company;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $AccountId;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $CompanyID;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $ContactNotes;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $ContactType;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Country;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Country2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Country3;

    /**
     * API Access: Read 
     * @var int
     */
    public $CreatedBy;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $DateCreated;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Email;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $EmailAddress2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $EmailAddress3;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Fax1;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Fax1Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Fax2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Fax2Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $FirstName;

    /**
     * API Access: Read 
     * @var string
     */
    public $Groups;

    /**
     * API Access: Read 
     * @var int
     */
    public $Id;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $JobTitle;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $LastName;

    /**
     * API Access: Read 
     * @var datetime
     */
    public $LastUpdated;

    /**
     * API Access: Read 
     * @var int
     */
    public $LastUpdatedBy;

    /**
     * API Access: Edit Add Read 
     * @var string
     */
    public $Leadsource;

    /**
     * API Access: Edit Add Read 
     * @var int
     */
    public $LeadSourceId;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $MiddleName;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Nickname;

    /**
     * API Access: Edit Delete Add Read 
     * @var int
     */
    public $OwnerID;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Password;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone1;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone1Ext;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone1Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone2Ext;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone2Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone3;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone3Ext;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone3Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone4;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone4Ext;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone4Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone5;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone5Ext;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Phone5Type;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $PostalCode;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $PostalCode2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $PostalCode3;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $ReferralCode;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $SpouseName;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $State;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $State2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $State3;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $StreetAddress1;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $StreetAddress2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Suffix;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Title;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Username;

    /**
     * API Access: Read 
     * @var string
     */
    public $Validated;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $Website;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $ZipFour1;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $ZipFour2;

    /**
     * API Access: Edit Delete Add Read 
     * @var string
     */
    public $ZipFour3;

}
?>