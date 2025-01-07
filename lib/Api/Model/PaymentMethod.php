<?php
/**
 * PaymentMethod
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
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @description The payment method.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentMethod
{
    /**
     * Possible values of this enum
     */
    public const FAKE_PAYMENT_METHOD = 'FAKE_PAYMENT_METHOD';

    public const CLEARPAY = 'CLEARPAY';

    public const CRYPTO = 'CRYPTO';

    public const PAYPAL = 'PAYPAL';

    public const PAYPAL_CUSTOM_CARD = 'PAYPAL_CUSTOM_CARD';

    public const CARD = 'CARD';

    public const APPLE_PAY = 'APPLE_PAY';

    public const GOOGLE_PAY = 'GOOGLE_PAY';

    public const PAY_BY_BANK = 'PAY_BY_BANK';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FAKE_PAYMENT_METHOD,
            self::CLEARPAY,
            self::CRYPTO,
            self::PAYPAL,
            self::PAYPAL_CUSTOM_CARD,
            self::CARD,
            self::APPLE_PAY,
            self::GOOGLE_PAY,
            self::PAY_BY_BANK
        ];
    }
}


