<?php
/**
 * ExpressCheckoutDisplayIntent
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
 * ExpressCheckoutDisplayIntent Class Doc Comment
 *
 * @category Class
 * @description Indicates whether payment settings query is for express checkout product or cart.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExpressCheckoutDisplayIntent
{
    /**
     * Possible values of this enum
     */
    public const CART = 'CART';

    public const PRODUCT = 'PRODUCT';

    public const GENERIC = 'GENERIC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CART,
            self::PRODUCT,
            self::GENERIC
        ];
    }
}


