<?php
/**
 * PaymentCaptureType
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
 * Generator version: 7.10.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Rvvup\Api\Model;
use \Rvvup\ObjectSerializer;

/**
 * PaymentCaptureType Class Doc Comment
 *
 * @category Class
 * @description The capture type for the payment.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentCaptureType
{
    /**
     * Possible values of this enum
     */
    public const AUTOMATIC_CHECKOUT = 'AUTOMATIC_CHECKOUT';

    public const AUTOMATIC_PLUGIN = 'AUTOMATIC_PLUGIN';

    public const MANUAL = 'MANUAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTOMATIC_CHECKOUT,
            self::AUTOMATIC_PLUGIN,
            self::MANUAL
        ];
    }
}


