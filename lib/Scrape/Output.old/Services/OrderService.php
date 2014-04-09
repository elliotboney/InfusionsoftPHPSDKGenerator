<?php
/**
 * THIS CODE WAS GENERATED BY AN AUTOMATED TOOL. Editing it is not recommended.
 * For more information, see http://github.com/elliotboney/
 *
 * Generated on: 04/09/2014 @ 14:49:51
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
 * @package   OrderService
 * @author    Elliot Boney <elliotboney@gmail.com>
 * @copyright 1997-2013 Digital Grove, LLC
 * @license   MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @version   [0.0.1]
 * @link      http://help.infusionsoft.com/developers/services/OrderService
 */

namespace iSDK\Services;

/**
 * OrderService Service Class
 *
 * OrderService [short description]
 *
 * @category Services
 * @package  OrderService
 * @author   Elliot Boney <elliotboney@gmail.com>
 * @license  MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link     http://help.infusionsoft.com//api-docs/orderservice
 */
class OrderService
{
    /**
     * Returns the result of order placement. The ids of the order and invoice that were created are
     * returned along with the status of a credit card charge if one was made.
     *
     * @param int                 $contactId                   The id of the contact to place on the
     *                                                         order
     * @param int                 $creditCardId                The id of the credit card to charge,
     *                                                         leave it at zero to indicate no
     *                                                         credit card.
     * @param int                 $payPlanId                   The id of the payment plan to use in
     *                                                         building the order. If no pay plan is
     *                                                         specified then the default payment
     *                                                         plan is used.
     * @param List&lt;Integer&gt; $productIds                  The list of products to purchase on
     *                                                         the order, this cannot be empty if no
     *                                                         subscription plans are specified.
     * @param List&lt;Integer&gt; $subscriptionPlanIds         The list of subscriptions to purchase
     *                                                         on the order, this cannot be empty if
     *                                                         no products are specified.
     * @param boolean             $processSpecials             Whether or not the order should
     *                                                         consider discounts that would
     *                                                         normally be applied if this order was
     *                                                         being placed through the shopping
     *                                                         cart.
     * @param List&lt;String&gt;  $promoCodes                  Any promo codes to add to the cart,
     *                                                         only used if processing of specials
     *                                                         is turned on.
     * @param Int                 $leadAffiliatedId (optional) The lead Affiliate for the order..
     * @param Int                 $affiliatedId (optional)     The affiliate associated with the
     *                                                         order.
     *
     * @return stuff
     */
    function placeOrder($contactId, $creditCardId, $payPlanId, $productIds, $subscriptionPlanIds, $processSpecials, $promoCodes, $leadAffiliatedId (optional), $affiliatedId (optional))
    {
        $parray = array(
            php_xmlrpc_encode((int)$contactId),
            php_xmlrpc_encode((int)$creditCardId),
            php_xmlrpc_encode((int)$payPlanId),
            php_xmlrpc_encode($productIds),
            php_xmlrpc_encode($subscriptionPlanIds),
            php_xmlrpc_encode($processSpecials),
            php_xmlrpc_encode($promoCodes),
            php_xmlrpc_encode($leadAffiliatedId (optional)),
            php_xmlrpc_encode($affiliatedId (optional)));
    }

}
?>