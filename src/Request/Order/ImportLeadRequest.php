<?php

namespace Konnektive\Request\Order;


use Konnektive\Request\Request;

/**
 * Class ImportLeadRequest
 * @link https://api2.konnektive.com/docs/leads_import/
 * @package Konnektive\Request\Order
 *
 * @property string $loginId Api Login Id provided by Konnektive
 * @property string $password Api password provided by Konnektive
 * @property string $orderId The orderId returned by a previous import lead call. Setting this will update the existing lead instead of creating a new record.
 * @property string $firstName customer's first name
 * @property string $lastName customer's last name
 * @property string $emailAddress must be a valid email address format
 * @property string $phoneNumber may contain numeric digits and hyphens
 * @property string $shipAddress1 line 1 of customer shipping address, should include street address and number
 * @property string $shipCity customer's shipping city
 * @property string $shipPostalCode customer's shipping postal code
 * @property string $shipState customer's shipping state, abbreviated state code (varies from country to country) A list of valid values can be found here: https://api2.konnektive.com/docs/states_list/
 * @property string $shipCountry customer's shipping country
 * @property int $campaignId Konnektive hexidecimal campaignId for which the order is being placed.
 * @property string $redirectTo customer's next station url
 * @property string $errorRedirectTo customer's redirect with error
 * @property string $sessionId customer's session id
 */
class ImportLeadRequest extends Request
{
    protected $endpointUri = "/leads/import/";
    protected $rules = [
        'address1'             => 'max:50',
        'address2'             => 'max:50',
        'affId'                => 'max:10',
        'billShipSame'         => 'boolean',
        'campaignId'           => 'required|int',
        'city'                 => 'required|max:30',
        'companyName'          => 'max:30',
        'country'              => 'required|max:2',
        'couponCode'           => 'string|max:30',
        'custom1'              => 'max:30',
        'custom2'              => 'max:30',
        'custom3'              => 'max:30',
        'custom4'              => 'max:30',
        'custom5'              => 'max:30',
        'disableCustomerDedup' => 'boolean',
        'emailAddress'         => 'max:255',
        'firstName'            => 'required|max:30',
        'ipAddress'            => 'ip',
        'lastName'             => 'required|max:30',
        'loginId'              => 'required|max:32',
        'orderId'              => 'max:30',
        'password'             => 'required|max:32',
        'phoneNumber'          => 'regex:/^[0-9\-]*$/',
        'postalCode'           => 'max:20',
        'sessionId'            => 'max:40',
        'shipAddress1'         => 'required_without:billShipSame|required_unless:billShipSame,true|max:30',
        'shipAddress2'         => 'max:30',
        'shipCity'             => 'required_without:billShipSame|required_unless:billShipSame,true|max:30',
        'shipCompanyName'      => 'max:30',
        'shipCountry'          => 'required_without:billShipSame|required_unless:billShipSame,true|max:2',
        'shipFirstName'        => 'required_without:billShipSame|required_unless:billShipSame,true|max:30',
        'shipLastName'         => 'required_without:billShipSame|required_unless:billShipSame,true|max:30',
        'shipPostalCode'       => 'required_without:billShipSame|required_unless:billShipSame,true|max:20',
        'shipState'            => 'required_without:billShipSame|required_unless:billShipSame,true|max:6',
        'sourceValue1'         => 'max:30',
        'sourceValue2'         => 'max:30',
        'sourceValue3'         => 'max:30',
        'state'                => 'max:6',
    ];
}
