<?php
/**
 * AccountStatementInvoice
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
 * AccountStatementInvoice Class Doc Comment
 *
 * @category Class
 * @description An account statement invoice.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountStatementInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountStatementInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount_paid' => '\Rvvup\Api\Model\Money',
        'amount_pending' => '\Rvvup\Api\Model\Money',
        'amount_remaining' => '\Rvvup\Api\Model\Money',
        'checkout_ids' => 'string[]',
        'due_date' => '\DateTime',
        'id' => 'string',
        'invoice_date' => '\DateTime',
        'merchant_id' => 'string',
        'metadata' => 'array<string,string>',
        'paid_date' => '\DateTime',
        'pending_checkout_ids' => 'string[]',
        'reference' => 'string',
        'status' => '\Rvvup\Api\Model\AccountStatementInvoiceStatus',
        'tax_amount' => '\Rvvup\Api\Model\Money',
        'total' => '\Rvvup\Api\Model\Money'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount_paid' => null,
        'amount_pending' => null,
        'amount_remaining' => null,
        'checkout_ids' => null,
        'due_date' => 'date-time',
        'id' => null,
        'invoice_date' => 'date-time',
        'merchant_id' => null,
        'metadata' => null,
        'paid_date' => 'date-time',
        'pending_checkout_ids' => null,
        'reference' => null,
        'status' => null,
        'tax_amount' => null,
        'total' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'amount_paid' => false,
        'amount_pending' => false,
        'amount_remaining' => false,
        'checkout_ids' => false,
        'due_date' => false,
        'id' => false,
        'invoice_date' => false,
        'merchant_id' => false,
        'metadata' => false,
        'paid_date' => false,
        'pending_checkout_ids' => false,
        'reference' => false,
        'status' => false,
        'tax_amount' => false,
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
        'amount_paid' => 'amountPaid',
        'amount_pending' => 'amountPending',
        'amount_remaining' => 'amountRemaining',
        'checkout_ids' => 'checkoutIds',
        'due_date' => 'dueDate',
        'id' => 'id',
        'invoice_date' => 'invoiceDate',
        'merchant_id' => 'merchantId',
        'metadata' => 'metadata',
        'paid_date' => 'paidDate',
        'pending_checkout_ids' => 'pendingCheckoutIds',
        'reference' => 'reference',
        'status' => 'status',
        'tax_amount' => 'taxAmount',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount_paid' => 'setAmountPaid',
        'amount_pending' => 'setAmountPending',
        'amount_remaining' => 'setAmountRemaining',
        'checkout_ids' => 'setCheckoutIds',
        'due_date' => 'setDueDate',
        'id' => 'setId',
        'invoice_date' => 'setInvoiceDate',
        'merchant_id' => 'setMerchantId',
        'metadata' => 'setMetadata',
        'paid_date' => 'setPaidDate',
        'pending_checkout_ids' => 'setPendingCheckoutIds',
        'reference' => 'setReference',
        'status' => 'setStatus',
        'tax_amount' => 'setTaxAmount',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount_paid' => 'getAmountPaid',
        'amount_pending' => 'getAmountPending',
        'amount_remaining' => 'getAmountRemaining',
        'checkout_ids' => 'getCheckoutIds',
        'due_date' => 'getDueDate',
        'id' => 'getId',
        'invoice_date' => 'getInvoiceDate',
        'merchant_id' => 'getMerchantId',
        'metadata' => 'getMetadata',
        'paid_date' => 'getPaidDate',
        'pending_checkout_ids' => 'getPendingCheckoutIds',
        'reference' => 'getReference',
        'status' => 'getStatus',
        'tax_amount' => 'getTaxAmount',
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
        $this->setIfExists('amount_paid', $data ?? [], null);
        $this->setIfExists('amount_pending', $data ?? [], null);
        $this->setIfExists('amount_remaining', $data ?? [], null);
        $this->setIfExists('checkout_ids', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('invoice_date', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('paid_date', $data ?? [], null);
        $this->setIfExists('pending_checkout_ids', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('tax_amount', $data ?? [], null);
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

        if ($this->container['amount_paid'] === null) {
            $invalidProperties[] = "'amount_paid' can't be null";
        }
        if ($this->container['amount_pending'] === null) {
            $invalidProperties[] = "'amount_pending' can't be null";
        }
        if ($this->container['amount_remaining'] === null) {
            $invalidProperties[] = "'amount_remaining' can't be null";
        }
        if ($this->container['checkout_ids'] === null) {
            $invalidProperties[] = "'checkout_ids' can't be null";
        }
        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['invoice_date'] === null) {
            $invalidProperties[] = "'invoice_date' can't be null";
        }
        if ($this->container['merchant_id'] === null) {
            $invalidProperties[] = "'merchant_id' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['pending_checkout_ids'] === null) {
            $invalidProperties[] = "'pending_checkout_ids' can't be null";
        }
        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tax_amount'] === null) {
            $invalidProperties[] = "'tax_amount' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets amount_paid
     *
     * @return \Rvvup\Api\Model\Money
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param \Rvvup\Api\Model\Money $amount_paid amount_paid
     *
     * @return self
     */
    public function setAmountPaid($amount_paid)
    {
        if (is_null($amount_paid)) {
            throw new \InvalidArgumentException('non-nullable amount_paid cannot be null');
        }
        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }

    /**
     * Gets amount_pending
     *
     * @return \Rvvup\Api\Model\Money
     */
    public function getAmountPending()
    {
        return $this->container['amount_pending'];
    }

    /**
     * Sets amount_pending
     *
     * @param \Rvvup\Api\Model\Money $amount_pending amount_pending
     *
     * @return self
     */
    public function setAmountPending($amount_pending)
    {
        if (is_null($amount_pending)) {
            throw new \InvalidArgumentException('non-nullable amount_pending cannot be null');
        }
        $this->container['amount_pending'] = $amount_pending;

        return $this;
    }

    /**
     * Gets amount_remaining
     *
     * @return \Rvvup\Api\Model\Money
     */
    public function getAmountRemaining()
    {
        return $this->container['amount_remaining'];
    }

    /**
     * Sets amount_remaining
     *
     * @param \Rvvup\Api\Model\Money $amount_remaining amount_remaining
     *
     * @return self
     */
    public function setAmountRemaining($amount_remaining)
    {
        if (is_null($amount_remaining)) {
            throw new \InvalidArgumentException('non-nullable amount_remaining cannot be null');
        }
        $this->container['amount_remaining'] = $amount_remaining;

        return $this;
    }

    /**
     * Gets checkout_ids
     *
     * @return string[]
     */
    public function getCheckoutIds()
    {
        return $this->container['checkout_ids'];
    }

    /**
     * Sets checkout_ids
     *
     * @param string[] $checkout_ids A list of successful checkouts that have been made for the invoice.
     *
     * @return self
     */
    public function setCheckoutIds($checkout_ids)
    {
        if (is_null($checkout_ids)) {
            throw new \InvalidArgumentException('non-nullable checkout_ids cannot be null');
        }


        $this->container['checkout_ids'] = $checkout_ids;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date The due date of the invoice.
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

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
     * @param string $id The unique ID of the invoice.
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
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date The created date of the invoice.
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date)
    {
        if (is_null($invoice_date)) {
            throw new \InvalidArgumentException('non-nullable invoice_date cannot be null');
        }
        $this->container['invoice_date'] = $invoice_date;

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
     * @param string $merchant_id The ID of the merchant that owns the invoice.
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
     * Gets metadata
     *
     * @return array<string,string>
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string> $metadata Key value pairs to store additional information about the invoice.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets paid_date
     *
     * @return \DateTime|null
     */
    public function getPaidDate()
    {
        return $this->container['paid_date'];
    }

    /**
     * Sets paid_date
     *
     * @param \DateTime|null $paid_date The date the invoice was fully paid.
     *
     * @return self
     */
    public function setPaidDate($paid_date)
    {
        if (is_null($paid_date)) {
            throw new \InvalidArgumentException('non-nullable paid_date cannot be null');
        }
        $this->container['paid_date'] = $paid_date;

        return $this;
    }

    /**
     * Gets pending_checkout_ids
     *
     * @return string[]
     */
    public function getPendingCheckoutIds()
    {
        return $this->container['pending_checkout_ids'];
    }

    /**
     * Sets pending_checkout_ids
     *
     * @param string[] $pending_checkout_ids A list of checkouts that have in progress pending payments for the invoice.
     *
     * @return self
     */
    public function setPendingCheckoutIds($pending_checkout_ids)
    {
        if (is_null($pending_checkout_ids)) {
            throw new \InvalidArgumentException('non-nullable pending_checkout_ids cannot be null');
        }


        $this->container['pending_checkout_ids'] = $pending_checkout_ids;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference The reference of the invoice.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Rvvup\Api\Model\AccountStatementInvoiceStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Rvvup\Api\Model\AccountStatementInvoiceStatus|string $status status
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
     * Gets tax_amount
     *
     * @return \Rvvup\Api\Model\Money
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \Rvvup\Api\Model\Money $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        if (is_null($tax_amount)) {
            throw new \InvalidArgumentException('non-nullable tax_amount cannot be null');
        }
        $this->container['tax_amount'] = $tax_amount;

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


