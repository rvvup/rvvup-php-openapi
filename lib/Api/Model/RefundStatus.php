<?php
/**
 * RefundStatus
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
 * RefundStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the refund.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RefundStatus
{
    /**
     * Possible values of this enum
     */
    public const PENDING = 'PENDING';

    public const SUCCEEDED = 'SUCCEEDED';

    public const FAILED = 'FAILED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::SUCCEEDED,
            self::FAILED
        ];
    }
}

