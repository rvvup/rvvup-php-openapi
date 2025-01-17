<?php
/**
 * PaymentSession
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
 * PaymentSession Class Doc Comment
 *
 * @category Class
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentSession implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSession';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billing_address' => '\Rvvup\Api\Model\Address',
        'checkout_id' => 'string',
        'checkout_mode' => '\Rvvup\Api\Model\CheckoutMode',
        'checkout_mode_id' => 'string',
        'created_at' => '\DateTime',
        'customer' => '\Rvvup\Api\Model\Customer',
        'dashboard_url' => 'string',
        'discount_total' => '\Rvvup\Api\Model\Money',
        'external_reference' => 'string',
        'id' => 'string',
        'items' => '\Rvvup\Api\Model\Item[]',
        'merchant_id' => 'string',
        'payment_link_id' => 'string',
        'payments' => '\Rvvup\Api\Model\Payment[]',
        'requires_shipping' => 'bool',
        'shipping_address' => '\Rvvup\Api\Model\Address',
        'shipping_total' => '\Rvvup\Api\Model\Money',
        'status' => '\Rvvup\Api\Model\PaymentSessionStatus',
        'tax_total' => '\Rvvup\Api\Model\Money',
        'total' => '\Rvvup\Api\Model\Money',
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
        'billing_address' => null,
        'checkout_id' => null,
        'checkout_mode' => null,
        'checkout_mode_id' => null,
        'created_at' => 'date-time',
        'customer' => null,
        'dashboard_url' => null,
        'discount_total' => null,
        'external_reference' => null,
        'id' => null,
        'items' => null,
        'merchant_id' => null,
        'payment_link_id' => null,
        'payments' => null,
        'requires_shipping' => null,
        'shipping_address' => null,
        'shipping_total' => null,
        'status' => null,
        'tax_total' => null,
        'total' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'billing_address' => false,
        'checkout_id' => false,
        'checkout_mode' => false,
        'checkout_mode_id' => false,
        'created_at' => false,
        'customer' => false,
        'dashboard_url' => false,
        'discount_total' => false,
        'external_reference' => false,
        'id' => false,
        'items' => false,
        'merchant_id' => false,
        'payment_link_id' => false,
        'payments' => false,
        'requires_shipping' => false,
        'shipping_address' => false,
        'shipping_total' => false,
        'status' => false,
        'tax_total' => false,
        'total' => false,
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
        'billing_address' => 'billingAddress',
        'checkout_id' => 'checkoutId',
        'checkout_mode' => 'checkoutMode',
        'checkout_mode_id' => 'checkoutModeId',
        'created_at' => 'createdAt',
        'customer' => 'customer',
        'dashboard_url' => 'dashboardUrl',
        'discount_total' => 'discountTotal',
        'external_reference' => 'externalReference',
        'id' => 'id',
        'items' => 'items',
        'merchant_id' => 'merchantId',
        'payment_link_id' => 'paymentLinkId',
        'payments' => 'payments',
        'requires_shipping' => 'requiresShipping',
        'shipping_address' => 'shippingAddress',
        'shipping_total' => 'shippingTotal',
        'status' => 'status',
        'tax_total' => 'taxTotal',
        'total' => 'total',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'checkout_id' => 'setCheckoutId',
        'checkout_mode' => 'setCheckoutMode',
        'checkout_mode_id' => 'setCheckoutModeId',
        'created_at' => 'setCreatedAt',
        'customer' => 'setCustomer',
        'dashboard_url' => 'setDashboardUrl',
        'discount_total' => 'setDiscountTotal',
        'external_reference' => 'setExternalReference',
        'id' => 'setId',
        'items' => 'setItems',
        'merchant_id' => 'setMerchantId',
        'payment_link_id' => 'setPaymentLinkId',
        'payments' => 'setPayments',
        'requires_shipping' => 'setRequiresShipping',
        'shipping_address' => 'setShippingAddress',
        'shipping_total' => 'setShippingTotal',
        'status' => 'setStatus',
        'tax_total' => 'setTaxTotal',
        'total' => 'setTotal',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'checkout_id' => 'getCheckoutId',
        'checkout_mode' => 'getCheckoutMode',
        'checkout_mode_id' => 'getCheckoutModeId',
        'created_at' => 'getCreatedAt',
        'customer' => 'getCustomer',
        'dashboard_url' => 'getDashboardUrl',
        'discount_total' => 'getDiscountTotal',
        'external_reference' => 'getExternalReference',
        'id' => 'getId',
        'items' => 'getItems',
        'merchant_id' => 'getMerchantId',
        'payment_link_id' => 'getPaymentLinkId',
        'payments' => 'getPayments',
        'requires_shipping' => 'getRequiresShipping',
        'shipping_address' => 'getShippingAddress',
        'shipping_total' => 'getShippingTotal',
        'status' => 'getStatus',
        'tax_total' => 'getTaxTotal',
        'total' => 'getTotal',
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
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('checkout_id', $data ?? [], null);
        $this->setIfExists('checkout_mode', $data ?? [], null);
        $this->setIfExists('checkout_mode_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('dashboard_url', $data ?? [], null);
        $this->setIfExists('discount_total', $data ?? [], null);
        $this->setIfExists('external_reference', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('payment_link_id', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('requires_shipping', $data ?? [], null);
        $this->setIfExists('shipping_address', $data ?? [], null);
        $this->setIfExists('shipping_total', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('tax_total', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
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

        if ($this->container['checkout_mode'] === null) {
            $invalidProperties[] = "'checkout_mode' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['dashboard_url'] === null) {
            $invalidProperties[] = "'dashboard_url' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['payments'] === null) {
            $invalidProperties[] = "'payments' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * @param string|null $checkout_id The ID of the checkout that the payment session was created from.
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
     * Gets checkout_mode
     *
     * @return \Rvvup\Api\Model\CheckoutMode
     */
    public function getCheckoutMode()
    {
        return $this->container['checkout_mode'];
    }

    /**
     * Sets checkout_mode
     *
     * @param \Rvvup\Api\Model\CheckoutMode|string $checkout_mode checkout_mode
     *
     * @return self
     */
    public function setCheckoutMode($checkout_mode)
    {
        if (is_null($checkout_mode)) {
            throw new \InvalidArgumentException('non-nullable checkout_mode cannot be null');
        }
        $this->container['checkout_mode'] = $checkout_mode;

        return $this;
    }

    /**
     * Gets checkout_mode_id
     *
     * @return string|null
     */
    public function getCheckoutModeId()
    {
        return $this->container['checkout_mode_id'];
    }

    /**
     * Sets checkout_mode_id
     *
     * @param string|null $checkout_mode_id checkout_mode_id
     *
     * @return self
     */
    public function setCheckoutModeId($checkout_mode_id)
    {
        if (is_null($checkout_mode_id)) {
            throw new \InvalidArgumentException('non-nullable checkout_mode_id cannot be null');
        }
        $this->container['checkout_mode_id'] = $checkout_mode_id;

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
     * @param \DateTime $created_at The datetime when the payment session was created.
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
     * Gets customer
     *
     * @return \Rvvup\Api\Model\Customer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Rvvup\Api\Model\Customer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets dashboard_url
     *
     * @return string
     */
    public function getDashboardUrl()
    {
        return $this->container['dashboard_url'];
    }

    /**
     * Sets dashboard_url
     *
     * @param string $dashboard_url The URL to the merchant dashboard for the payment session.
     *
     * @return self
     */
    public function setDashboardUrl($dashboard_url)
    {
        if (is_null($dashboard_url)) {
            throw new \InvalidArgumentException('non-nullable dashboard_url cannot be null');
        }
        $this->container['dashboard_url'] = $dashboard_url;

        return $this;
    }

    /**
     * Gets discount_total
     *
     * @return \Rvvup\Api\Model\Money|null
     */
    public function getDiscountTotal()
    {
        return $this->container['discount_total'];
    }

    /**
     * Sets discount_total
     *
     * @param \Rvvup\Api\Model\Money|null $discount_total discount_total
     *
     * @return self
     */
    public function setDiscountTotal($discount_total)
    {
        if (is_null($discount_total)) {
            throw new \InvalidArgumentException('non-nullable discount_total cannot be null');
        }
        $this->container['discount_total'] = $discount_total;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return string|null
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param string|null $external_reference Your reference to identify the payment session.
     *
     * @return self
     */
    public function setExternalReference($external_reference)
    {
        if (is_null($external_reference)) {
            throw new \InvalidArgumentException('non-nullable external_reference cannot be null');
        }
        $this->container['external_reference'] = $external_reference;

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
     * @param string $id The unique ID for the payment session.
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
     * Gets items
     *
     * @return \Rvvup\Api\Model\Item[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Rvvup\Api\Model\Item[] $items List of items that the customer is purchasing.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

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
     * @param string $merchant_id The ID of the merchant that the payment session was created for.
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
     * Gets payment_link_id
     *
     * @return string|null
     */
    public function getPaymentLinkId()
    {
        return $this->container['payment_link_id'];
    }

    /**
     * Sets payment_link_id
     *
     * @param string|null $payment_link_id The ID of the payment link that the payment session was created from.
     *
     * @return self
     */
    public function setPaymentLinkId($payment_link_id)
    {
        if (is_null($payment_link_id)) {
            throw new \InvalidArgumentException('non-nullable payment_link_id cannot be null');
        }
        $this->container['payment_link_id'] = $payment_link_id;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \Rvvup\Api\Model\Payment[]
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Rvvup\Api\Model\Payment[] $payments List of payments that have been made for the payment session.
     *
     * @return self
     */
    public function setPayments($payments)
    {
        if (is_null($payments)) {
            throw new \InvalidArgumentException('non-nullable payments cannot be null');
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets requires_shipping
     *
     * @return bool|null
     */
    public function getRequiresShipping()
    {
        return $this->container['requires_shipping'];
    }

    /**
     * Sets requires_shipping
     *
     * @param bool|null $requires_shipping Whether the customer is required to provide a shipping address.
     *
     * @return self
     */
    public function setRequiresShipping($requires_shipping)
    {
        if (is_null($requires_shipping)) {
            throw new \InvalidArgumentException('non-nullable requires_shipping cannot be null');
        }
        $this->container['requires_shipping'] = $requires_shipping;

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
     * Gets shipping_total
     *
     * @return \Rvvup\Api\Model\Money|null
     */
    public function getShippingTotal()
    {
        return $this->container['shipping_total'];
    }

    /**
     * Sets shipping_total
     *
     * @param \Rvvup\Api\Model\Money|null $shipping_total shipping_total
     *
     * @return self
     */
    public function setShippingTotal($shipping_total)
    {
        if (is_null($shipping_total)) {
            throw new \InvalidArgumentException('non-nullable shipping_total cannot be null');
        }
        $this->container['shipping_total'] = $shipping_total;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Rvvup\Api\Model\PaymentSessionStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Rvvup\Api\Model\PaymentSessionStatus|string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tax_total
     *
     * @return \Rvvup\Api\Model\Money|null
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     *
     * @param \Rvvup\Api\Model\Money|null $tax_total tax_total
     *
     * @return self
     */
    public function setTaxTotal($tax_total)
    {
        if (is_null($tax_total)) {
            throw new \InvalidArgumentException('non-nullable tax_total cannot be null');
        }
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Rvvup\Api\Model\Money
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Rvvup\Api\Model\Money $total total
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
     * @param \DateTime $updated_at The datetime when the payment session was last updated.
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


