<?php
/**
 * THIS CODE WAS GENERATED BY AN AUTOMATED TOOL. Editing it is not recommended.
 * For more information, see http://github.com/elliotboney/
 *
 * Generated on: 04/09/2014 @ 17:54:57
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
 * @category  Services
 * @package   DataService
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/services/DataService
 */

namespace iSDK\Services;

/**
 * DataService Service Class
 *
 * DataService [short description]
 *
 * @category Services
 * @package  DataService
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://help.infusionsoft.com//api-docs/dataservice
 */
class DataService
{
    /**
     * Adds a record to the specified table in Infusionsoft.
     *
     * @param string $table  The Infusionsoft database table name
     * @param struct $values An associative array of data you would like stored into this new row in
     *                       the table
     *
     * @return stuff
     */
    function add($table, $values)
    {
        $parray = array(
            php_xmlrpc_encode($table),
            php_xmlrpc_encode($values));
    }

    /**
     * Loads a struct with data from the given database record
     *
     * @param string $table        Infusionsoft database table name from which you want to load a
     *                             record
     * @param int    $recordId     The unique Id number for the record you would like to load
     * @param array  $wantedFields The fields you would like returned from this row in the database
     *
     * @return stuff
     */
    function load($table, $recordId, $wantedFields)
    {
        $parray = array(
            php_xmlrpc_encode($table),
            php_xmlrpc_encode((int)$recordId),
            php_xmlrpc_encode($wantedFields, array('auto_dates')));
    }

    /**
     * Updates the specified record (indicated by ID) with the data provided
     *
     * @param string $table  The Infusionsoft database table name
     * @param int    $Id     The Id number of the record you would like updated on the given table
     * @param struct $values An associative array of data you would like updated
     *
     * @return stuff
     */
    function update($table, $Id, $values)
    {
        $parray = array(
            php_xmlrpc_encode($table),
            php_xmlrpc_encode((int)$Id),
            php_xmlrpc_encode($values));
    }

    /**
     * Deletes the specified record in the given table from the database
     *
     * @param string $table The table you would like to delete the record from
     * @param int    $Id    The id number of the record you want to delete
     *
     * @return stuff
     */
    function delete($table, $Id)
    {
        $parray = array(
            php_xmlrpc_encode($table),
            php_xmlrpc_encode((int)$Id));
    }

    /**
     * This will locate all records in a given table that match the criteria for a given field
     *
     * @param string $table        The Infusionsoft database table name
     * @param int    $limit        How many records you would like returned. The maximum possible is
     *                             1000
     * @param int    $page         The page of results you would like returned. The first page is
     *                             page 0 (loop through pages to get more than 1000 records)
     * @param string $fieldName    The name of the field you would like to run the search on
     * @param string $fieldValue   The value stored in the field you would like to search by
     * @param array  $returnFields The fields you would like returned from the table you are
     *                             searching on
     *
     * @return stuff
     */
    function findByField($table, $limit, $page, $fieldName, $fieldValue, $returnFields)
    {
        $parray = array(
            php_xmlrpc_encode($table),
            php_xmlrpc_encode((int)$limit),
            php_xmlrpc_encode((int)$page),
            php_xmlrpc_encode($fieldName),
            php_xmlrpc_encode($fieldValue),
            php_xmlrpc_encode($returnFields, array('auto_dates')));
    }

    /**
     * Performs a query across the given table based on the query data
     *
     * @param string $table          The table to look in
     * @param int    $limit          The number of records to pull (max 1000)
     * @param int    $page           What page of data to pull (in case there are more than 1000
     *                               records). The paging starts with 0
     * @param struct $queryData      A struct containing query data. The key is the field to search
     *                               on, and the value is the data to look for. % is the wild card
     *                               operator and all searches are case insensitive. If you would
     *                               like to query for an empty(null) field, use ~null~ in your
     *                               query parameter, such as &acirc;&euro;&tilde;FirstName&#39;
     *                               =&gt; &acirc;&euro;&tilde;~null~&#39;
     * @param array  $selectedFields What fields to return from the query
     *
     * @return stuff
     */
    function query($table, $limit, $page, $queryData, $selectedFields)
    {
        $parray = array(
            php_xmlrpc_encode($table),
            php_xmlrpc_encode((int)$limit),
            php_xmlrpc_encode((int)$page),
            php_xmlrpc_encode($queryData),
            php_xmlrpc_encode($selectedFields, array('auto_dates')));
    }

    /**
     * Creates a new custom fields within Infusionsoft
     *
     * @param string $customFieldType Where the custom field will be used inside Infusionsoft.
     *                                Options include Contact, Company, Affiliate, Task/Appt/Note,
     *                                Job (Order), Subscription, or Opportunity
     * @param string $displayName     The label/name of this new custom field
     * @param string $dataType        What type of data this field will support. Text, Dropdown,
     *                                TextArea, etc.
     * @param int    $headerId        Which custom field header you want this field to appear under.
     *                                Customer headers are located on custom tabs
     *
     * @return stuff
     */
    function addCustomField($customFieldType, $displayName, $dataType, $headerId)
    {
        $parray = array(
            php_xmlrpc_encode($customFieldType),
            php_xmlrpc_encode($displayName),
            php_xmlrpc_encode($dataType),
            php_xmlrpc_encode((int)$headerId));
    }

    /**
     * This method is used to authenticate an Infusionsoft username and password(md5 hash). If the
     * credentials match it will return back a User ID, if the credentials do not match it will send
     * back an error message
     *
     * @param string $username     The Infusionsoft username
     * @param string $passwordHash An MD5 hash of the Infusionsoft users&#39; password (convert
     *                             password to lowercase first)
     *
     * @return stuff
     */
    function authenticateUser($username, $passwordHash)
    {
        $parray = array(
            php_xmlrpc_encode($username),
            php_xmlrpc_encode($passwordHash));
    }

    /**
     * This method will return back the data currently configured in a user configured application
     * setting
     *
     * @param string $module  The application module this setting is a part of
     * @param string $setting The database name of the setting you would like the values returned
     *                        for
     *
     * @return stuff
     */
    function getAppSetting($module, $setting)
    {
        $parray = array(
            php_xmlrpc_encode($module),
            php_xmlrpc_encode($setting));
    }

    /**
     * Returns an iCalendar entry for the given appointment
     *
     * @param int $appointmentId The id of the appointment you want the calendar for
     *
     * @return stuff
     */
    function getAppointmentCal($appointmentId)
    {
        $parray = array(
            php_xmlrpc_encode((int)$appointmentId));
    }

    /**
     * Returns a temporary API key which is valid for one hour if given a valid Vendor key and user
     * credentials. For security, never store a users password in plaintext. You only need to pass
     * the MD5 hash with this method, so only the MD5 hash needs to be stored.
     *
     * @param string $vendorKey    Your Infusionsoft Vendor key
     * @param string $username     An Infusionsoft username
     * @param string $passwordHash An MD5 hash of the users&#39; password. This is the password used
     *                             to login to the Infusionsoft UI. The password needs to be
     *                             converted to lowercase before md5.
     *
     * @return stuff
     */
    function getTemporaryKey($vendorKey, $username, $passwordHash)
    {
        $parray = array(
            php_xmlrpc_encode($vendorKey),
            php_xmlrpc_encode($username),
            php_xmlrpc_encode($passwordHash));
    }

    /**
     * Updates a custom field. Every field can have it&#39;s display name and group id changed, but
     * only certain data types will allow you to change values(dropdown, listbox, radio, etc)
     *
     * @param int    $customFieldId The Id number of the custom field you would like to update
     * @param struct $values        The preset values for the given custom field
     *
     * @return stuff
     */
    function updateCustomField($customFieldId, $values)
    {
        $parray = array(
            php_xmlrpc_encode((int)$customFieldId),
            php_xmlrpc_encode($values));
    }

}
?>
