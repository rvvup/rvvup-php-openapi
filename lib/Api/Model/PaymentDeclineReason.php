<?php
/**
 * PaymentDeclineReason
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
 * PaymentDeclineReason Class Doc Comment
 *
 * @category Class
 * @description The reason the payment was declined.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentDeclineReason
{
    /**
     * Possible values of this enum
     */
    public const INSUFFICIENT_FUNDS = 'INSUFFICIENT_FUNDS';

    public const FUNDING_INSTRUMENT_DECLINED = 'FUNDING_INSTRUMENT_DECLINED';

    public const CONSENT_MISSING = 'CONSENT_MISSING';

    public const SUSPECTED_FRAUD = 'SUSPECTED_FRAUD';

    public const AMOUNT_LIMITS_EXCEEDED = 'AMOUNT_LIMITS_EXCEEDED';

    public const ACCOUNT_CLOSED = 'ACCOUNT_CLOSED';

    public const CVV2_FAILURE = 'CVV2_FAILURE';

    public const FUNDING_INSTRUMENT_EXPIRED = 'FUNDING_INSTRUMENT_EXPIRED';

    public const FUNDING_INSTRUMENT_INVALID = 'FUNDING_INSTRUMENT_INVALID';

    public const INVALID_AUTHORIZATION = 'INVALID_AUTHORIZATION';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INSUFFICIENT_FUNDS,
            self::FUNDING_INSTRUMENT_DECLINED,
            self::CONSENT_MISSING,
            self::SUSPECTED_FRAUD,
            self::AMOUNT_LIMITS_EXCEEDED,
            self::ACCOUNT_CLOSED,
            self::CVV2_FAILURE,
            self::FUNDING_INSTRUMENT_EXPIRED,
            self::FUNDING_INSTRUMENT_INVALID,
            self::INVALID_AUTHORIZATION
        ];
    }
}


