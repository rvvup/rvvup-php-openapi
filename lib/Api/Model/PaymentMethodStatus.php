<?php
/**
 * PaymentMethodStatus
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
 * PaymentMethodStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the payment method.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentMethodStatus
{
    /**
     * Possible values of this enum
     */
    public const ENABLED = 'ENABLED';

    public const DISABLED = 'DISABLED';

    public const UNAVAILABLE = 'UNAVAILABLE';

    public const SUSPENDED = 'SUSPENDED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENABLED,
            self::DISABLED,
            self::UNAVAILABLE,
            self::SUSPENDED
        ];
    }
}


