<?php
/**
 * ActionTypeInput
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
 * ActionTypeInput Class Doc Comment
 *
 * @category Class
 * @description The action performed
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActionTypeInput
{
    /**
     * Possible values of this enum
     */
    public const MERCHANT_PLUGIN_ACTIVATED = 'MERCHANT_PLUGIN_ACTIVATED';

    public const MERCHANT_PLUGIN_DEACTIVATED = 'MERCHANT_PLUGIN_DEACTIVATED';

    public const ACCOUNT_STATEMENT_PLUGIN_PAGE_VISITED = 'ACCOUNT_STATEMENT_PLUGIN_PAGE_VISITED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MERCHANT_PLUGIN_ACTIVATED,
            self::MERCHANT_PLUGIN_DEACTIVATED,
            self::ACCOUNT_STATEMENT_PLUGIN_PAGE_VISITED
        ];
    }
}


