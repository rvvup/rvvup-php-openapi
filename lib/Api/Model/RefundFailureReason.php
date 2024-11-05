<?php
/**
 * RefundFailureReason
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
 * RefundFailureReason Class Doc Comment
 *
 * @category Class
 * @description The reason for the refund failure.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundFailureReason
{
    /**
     * Possible values of this enum
     */
    public const AMOUNT_LIMITS_EXCEEDED = 'AMOUNT_LIMITS_EXCEEDED';

    public const INSUFFICIENT_FUNDS = 'INSUFFICIENT_FUNDS';

    public const PAYMENT_DISPUTED = 'PAYMENT_DISPUTED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMOUNT_LIMITS_EXCEEDED,
            self::INSUFFICIENT_FUNDS,
            self::PAYMENT_DISPUTED
        ];
    }
}

