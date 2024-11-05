<?php
/**
 * CheckoutTemplate
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

use \ArrayAccess;
use \Rvvup\ObjectSerializer;

/**
 * CheckoutTemplate Class Doc Comment
 *
 * @category Class
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_type' => '\Rvvup\Api\Model\CheckoutAmountType',
        'created_at' => '\DateTime',
        'customer_fields' => '\Rvvup\Api\Model\CheckoutCustomerFields',
        'enabled_payment_methods' => '\Rvvup\Api\Model\PaymentMethod[]',
        'id' => 'string',
        'merchant_id' => 'string',
        'mode' => '\Rvvup\Api\Model\CheckoutMode',
        'name' => 'string',
        'notify_customer' => 'bool',
        'notify_merchant' => 'bool',
        'payment_method_settings' => '\Rvvup\Api\Model\CheckoutPaymentMethodSettings',
        'reference_type' => '\Rvvup\Api\Model\CheckoutReferenceType',
        'source' => '\Rvvup\Api\Model\ApplicationSource',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount_type' => null,
        'created_at' => 'date-time',
        'customer_fields' => null,
        'enabled_payment_methods' => null,
        'id' => null,
        'merchant_id' => null,
        'mode' => null,
        'name' => null,
        'notify_customer' => null,
        'notify_merchant' => null,
        'payment_method_settings' => null,
        'reference_type' => null,
        'source' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount_type' => false,
        'created_at' => false,
        'customer_fields' => false,
        'enabled_payment_methods' => false,
        'id' => false,
        'merchant_id' => false,
        'mode' => false,
        'name' => false,
        'notify_customer' => false,
        'notify_merchant' => false,
        'payment_method_settings' => false,
        'reference_type' => false,
        'source' => false,
        'updated_at' => false
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
        'amount_type' => 'amountType',
        'created_at' => 'createdAt',
        'customer_fields' => 'customerFields',
        'enabled_payment_methods' => 'enabledPaymentMethods',
        'id' => 'id',
        'merchant_id' => 'merchantId',
        'mode' => 'mode',
        'name' => 'name',
        'notify_customer' => 'notifyCustomer',
        'notify_merchant' => 'notifyMerchant',
        'payment_method_settings' => 'paymentMethodSettings',
        'reference_type' => 'referenceType',
        'source' => 'source',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_type' => 'setAmountType',
        'created_at' => 'setCreatedAt',
        'customer_fields' => 'setCustomerFields',
        'enabled_payment_methods' => 'setEnabledPaymentMethods',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'mode' => 'setMode',
        'name' => 'setName',
        'notify_customer' => 'setNotifyCustomer',
        'notify_merchant' => 'setNotifyMerchant',
        'payment_method_settings' => 'setPaymentMethodSettings',
        'reference_type' => 'setReferenceType',
        'source' => 'setSource',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_type' => 'getAmountType',
        'created_at' => 'getCreatedAt',
        'customer_fields' => 'getCustomerFields',
        'enabled_payment_methods' => 'getEnabledPaymentMethods',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'mode' => 'getMode',
        'name' => 'getName',
        'notify_customer' => 'getNotifyCustomer',
        'notify_merchant' => 'getNotifyMerchant',
        'payment_method_settings' => 'getPaymentMethodSettings',
        'reference_type' => 'getReferenceType',
        'source' => 'getSource',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('amount_type', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('customer_fields', $data ?? [], null);
        $this->setIfExists('enabled_payment_methods', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('notify_customer', $data ?? [], null);
        $this->setIfExists('notify_merchant', $data ?? [], null);
        $this->setIfExists('payment_method_settings', $data ?? [], null);
        $this->setIfExists('reference_type', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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

        if ($this->container['amount_type'] === null) {
            $invalidProperties[] = "'amount_type' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['notify_customer'] === null) {
            $invalidProperties[] = "'notify_customer' can't be null";
        }
        if ($this->container['notify_merchant'] === null) {
            $invalidProperties[] = "'notify_merchant' can't be null";
        }
        if ($this->container['reference_type'] === null) {
            $invalidProperties[] = "'reference_type' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
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
     * Gets amount_type
     *
     * @return \Rvvup\Api\Model\CheckoutAmountType
     */
    public function getAmountType()
    {
        return $this->container['amount_type'];
    }

    /**
     * Sets amount_type
     *
     * @param \Rvvup\Api\Model\CheckoutAmountType $amount_type amount_type
     *
     * @return self
     */
    public function setAmountType($amount_type)
    {
        if (is_null($amount_type)) {
            throw new \InvalidArgumentException('non-nullable amount_type cannot be null');
        }
        $this->container['amount_type'] = $amount_type;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at The datetime when the checkout template was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets customer_fields
     *
     * @return \Rvvup\Api\Model\CheckoutCustomerFields|null
     */
    public function getCustomerFields()
    {
        return $this->container['customer_fields'];
    }

    /**
     * Sets customer_fields
     *
     * @param \Rvvup\Api\Model\CheckoutCustomerFields|null $customer_fields customer_fields
     *
     * @return self
     */
    public function setCustomerFields($customer_fields)
    {
        if (is_null($customer_fields)) {
            throw new \InvalidArgumentException('non-nullable customer_fields cannot be null');
        }
        $this->container['customer_fields'] = $customer_fields;

        return $this;
    }

    /**
     * Gets enabled_payment_methods
     *
     * @return \Rvvup\Api\Model\PaymentMethod[]|null
     */
    public function getEnabledPaymentMethods()
    {
        return $this->container['enabled_payment_methods'];
    }

    /**
     * Sets enabled_payment_methods
     *
     * @param \Rvvup\Api\Model\PaymentMethod[]|null $enabled_payment_methods Ordered list of payment methods that are enabled for the checkout.
     *
     * @return self
     */
    public function setEnabledPaymentMethods($enabled_payment_methods)
    {
        if (is_null($enabled_payment_methods)) {
            throw new \InvalidArgumentException('non-nullable enabled_payment_methods cannot be null');
        }
        $this->container['enabled_payment_methods'] = $enabled_payment_methods;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique ID of the checkout template.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id The ID of the merchant that owns this checkout template.
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        if (is_null($merchant_id)) {
            throw new \InvalidArgumentException('non-nullable merchant_id cannot be null');
        }
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return \Rvvup\Api\Model\CheckoutMode
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param \Rvvup\Api\Model\CheckoutMode $mode mode
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the checkout template.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notify_customer
     *
     * @return bool
     */
    public function getNotifyCustomer()
    {
        return $this->container['notify_customer'];
    }

    /**
     * Sets notify_customer
     *
     * @param bool $notify_customer Whether the customer should be notified on payment completion.
     *
     * @return self
     */
    public function setNotifyCustomer($notify_customer)
    {
        if (is_null($notify_customer)) {
            throw new \InvalidArgumentException('non-nullable notify_customer cannot be null');
        }
        $this->container['notify_customer'] = $notify_customer;

        return $this;
    }

    /**
     * Gets notify_merchant
     *
     * @return bool
     */
    public function getNotifyMerchant()
    {
        return $this->container['notify_merchant'];
    }

    /**
     * Sets notify_merchant
     *
     * @param bool $notify_merchant Whether you should be notified on payment completion.
     *
     * @return self
     */
    public function setNotifyMerchant($notify_merchant)
    {
        if (is_null($notify_merchant)) {
            throw new \InvalidArgumentException('non-nullable notify_merchant cannot be null');
        }
        $this->container['notify_merchant'] = $notify_merchant;

        return $this;
    }

    /**
     * Gets payment_method_settings
     *
     * @return \Rvvup\Api\Model\CheckoutPaymentMethodSettings|null
     */
    public function getPaymentMethodSettings()
    {
        return $this->container['payment_method_settings'];
    }

    /**
     * Sets payment_method_settings
     *
     * @param \Rvvup\Api\Model\CheckoutPaymentMethodSettings|null $payment_method_settings payment_method_settings
     *
     * @return self
     */
    public function setPaymentMethodSettings($payment_method_settings)
    {
        if (is_null($payment_method_settings)) {
            throw new \InvalidArgumentException('non-nullable payment_method_settings cannot be null');
        }
        $this->container['payment_method_settings'] = $payment_method_settings;

        return $this;
    }

    /**
     * Gets reference_type
     *
     * @return \Rvvup\Api\Model\CheckoutReferenceType
     */
    public function getReferenceType()
    {
        return $this->container['reference_type'];
    }

    /**
     * Sets reference_type
     *
     * @param \Rvvup\Api\Model\CheckoutReferenceType $reference_type reference_type
     *
     * @return self
     */
    public function setReferenceType($reference_type)
    {
        if (is_null($reference_type)) {
            throw new \InvalidArgumentException('non-nullable reference_type cannot be null');
        }
        $this->container['reference_type'] = $reference_type;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Rvvup\Api\Model\ApplicationSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Rvvup\Api\Model\ApplicationSource $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at The datetime when the checkout template was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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


