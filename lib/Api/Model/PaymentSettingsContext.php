<?php
/**
 * PaymentSettingsContext
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

use \ArrayAccess;
use \Rvvup\ObjectSerializer;

/**
 * PaymentSettingsContext Class Doc Comment
 *
 * @category Class
 * @description Input for payment settings.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentSettingsContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSettingsContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billing_address' => '\Rvvup\Api\Model\Address',
        'checkout_id' => 'string',
        'express_checkout_display_intent' => '\Rvvup\Api\Model\ExpressCheckoutDisplayIntent',
        'is_for_digital_downloads' => 'bool',
        'shipping_address' => '\Rvvup\Api\Model\Address',
        'total' => '\Rvvup\Api\Model\MoneyInput'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billing_address' => null,
        'checkout_id' => null,
        'express_checkout_display_intent' => null,
        'is_for_digital_downloads' => null,
        'shipping_address' => null,
        'total' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'billing_address' => false,
        'checkout_id' => false,
        'express_checkout_display_intent' => false,
        'is_for_digital_downloads' => false,
        'shipping_address' => false,
        'total' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_address' => 'billingAddress',
        'checkout_id' => 'checkoutId',
        'express_checkout_display_intent' => 'expressCheckoutDisplayIntent',
        'is_for_digital_downloads' => 'isForDigitalDownloads',
        'shipping_address' => 'shippingAddress',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'checkout_id' => 'setCheckoutId',
        'express_checkout_display_intent' => 'setExpressCheckoutDisplayIntent',
        'is_for_digital_downloads' => 'setIsForDigitalDownloads',
        'shipping_address' => 'setShippingAddress',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'checkout_id' => 'getCheckoutId',
        'express_checkout_display_intent' => 'getExpressCheckoutDisplayIntent',
        'is_for_digital_downloads' => 'getIsForDigitalDownloads',
        'shipping_address' => 'getShippingAddress',
        'total' => 'getTotal'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('checkout_id', $data ?? [], null);
        $this->setIfExists('express_checkout_display_intent', $data ?? [], null);
        $this->setIfExists('is_for_digital_downloads', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets billing_address
     *
     * @return \Rvvup\Api\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Rvvup\Api\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets checkout_id
     *
     * @return string|null
     */
    public function getCheckoutId()
    {
        return $this->container['checkout_id'];
    }

    /**
     * Sets checkout_id
     *
     * @param string|null $checkout_id checkout_id
     *
     * @return self
     */
    public function setCheckoutId($checkout_id)
    {
        if (is_null($checkout_id)) {
            throw new \InvalidArgumentException('non-nullable checkout_id cannot be null');
        }
        $this->container['checkout_id'] = $checkout_id;

        return $this;
    }

    /**
     * Gets express_checkout_display_intent
     *
     * @return \Rvvup\Api\Model\ExpressCheckoutDisplayIntent|null
     */
    public function getExpressCheckoutDisplayIntent()
    {
        return $this->container['express_checkout_display_intent'];
    }

    /**
     * Sets express_checkout_display_intent
     *
     * @param \Rvvup\Api\Model\ExpressCheckoutDisplayIntent|string|null $express_checkout_display_intent express_checkout_display_intent
     *
     * @return self
     */
    public function setExpressCheckoutDisplayIntent($express_checkout_display_intent)
    {
        if (is_null($express_checkout_display_intent)) {
            throw new \InvalidArgumentException('non-nullable express_checkout_display_intent cannot be null');
        }
        $this->container['express_checkout_display_intent'] = $express_checkout_display_intent;

        return $this;
    }

    /**
     * Gets is_for_digital_downloads
     *
     * @return bool|null
     */
    public function getIsForDigitalDownloads()
    {
        return $this->container['is_for_digital_downloads'];
    }

    /**
     * Sets is_for_digital_downloads
     *
     * @param bool|null $is_for_digital_downloads is_for_digital_downloads
     *
     * @return self
     */
    public function setIsForDigitalDownloads($is_for_digital_downloads)
    {
        if (is_null($is_for_digital_downloads)) {
            throw new \InvalidArgumentException('non-nullable is_for_digital_downloads cannot be null');
        }
        $this->container['is_for_digital_downloads'] = $is_for_digital_downloads;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \Rvvup\Api\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Rvvup\Api\Model\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        if (is_null($shipping_address)) {
            throw new \InvalidArgumentException('non-nullable shipping_address cannot be null');
        }
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Rvvup\Api\Model\MoneyInput|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Rvvup\Api\Model\MoneyInput|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


