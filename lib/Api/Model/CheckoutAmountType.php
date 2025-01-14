<?php
/**
 * CheckoutAmountType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rvvup API
 *
 * Rvvup Public API
 *
 * The version of the OpenAPI document: 2024-03-01
 * Contact: info@rvvup.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Rvvup\Api\Model;
use \Rvvup\ObjectSerializer;

/**
 * CheckoutAmountType Class Doc Comment
 *
 * @category Class
 * @description The amount type for the checkout. This can be either a fixed amount or an editable amount. If the amount is editable, the user can enter the amount they want to pay inside the hosted checkout. If the amount is fixed, the amount set in the checkout is the amount that will be paid and cannot be changed inside the hosted checkout.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CheckoutAmountType
{
    /**
     * Possible values of this enum
     */
    public const FIXED = 'FIXED';

    public const EDITABLE = 'EDITABLE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIXED,
            self::EDITABLE
        ];
    }
}


