<?php
/**
 * PaymentSessionStatus
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
 * PaymentSessionStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the payment session.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentSessionStatus
{
    /**
     * Possible values of this enum
     */
    public const CANCELLED = 'CANCELLED';

    public const DECLINED = 'DECLINED';

    public const EXPIRED = 'EXPIRED';

    public const PENDING = 'PENDING';

    public const REQUIRES_ACTION = 'REQUIRES_ACTION';

    public const REQUIRES_PAYMENT = 'REQUIRES_PAYMENT';

    public const SUCCEEDED = 'SUCCEEDED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CANCELLED,
            self::DECLINED,
            self::EXPIRED,
            self::PENDING,
            self::REQUIRES_ACTION,
            self::REQUIRES_PAYMENT,
            self::SUCCEEDED
        ];
    }
}

