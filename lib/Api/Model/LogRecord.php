<?php
/**
 * LogRecord
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
 * LogRecord Class Doc Comment
 *
 * @category Class
 * @description A log record
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LogRecord implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LogRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action_type' => '\Rvvup\Api\Model\ActionType',
        'actor_type' => '\Rvvup\Api\Model\ActorType',
        'created_at' => '\DateTime',
        'current_value' => 'array<string,object>',
        'id' => 'string',
        'ip_address' => 'string',
        'merchant_id' => 'string',
        'previous_value' => 'array<string,object>',
        'principal_id' => 'string',
        'reason' => 'string',
        'resource' => 'string',
        'resource_id' => 'string',
        'resource_type' => '\Rvvup\Api\Model\ResourceType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action_type' => null,
        'actor_type' => null,
        'created_at' => 'date-time',
        'current_value' => null,
        'id' => null,
        'ip_address' => null,
        'merchant_id' => null,
        'previous_value' => null,
        'principal_id' => null,
        'reason' => null,
        'resource' => null,
        'resource_id' => null,
        'resource_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'action_type' => false,
        'actor_type' => false,
        'created_at' => false,
        'current_value' => false,
        'id' => false,
        'ip_address' => false,
        'merchant_id' => false,
        'previous_value' => false,
        'principal_id' => false,
        'reason' => false,
        'resource' => false,
        'resource_id' => false,
        'resource_type' => false
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
        'action_type' => 'actionType',
        'actor_type' => 'actorType',
        'created_at' => 'createdAt',
        'current_value' => 'currentValue',
        'id' => 'id',
        'ip_address' => 'ipAddress',
        'merchant_id' => 'merchantId',
        'previous_value' => 'previousValue',
        'principal_id' => 'principalId',
        'reason' => 'reason',
        'resource' => 'resource',
        'resource_id' => 'resourceId',
        'resource_type' => 'resourceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action_type' => 'setActionType',
        'actor_type' => 'setActorType',
        'created_at' => 'setCreatedAt',
        'current_value' => 'setCurrentValue',
        'id' => 'setId',
        'ip_address' => 'setIpAddress',
        'merchant_id' => 'setMerchantId',
        'previous_value' => 'setPreviousValue',
        'principal_id' => 'setPrincipalId',
        'reason' => 'setReason',
        'resource' => 'setResource',
        'resource_id' => 'setResourceId',
        'resource_type' => 'setResourceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action_type' => 'getActionType',
        'actor_type' => 'getActorType',
        'created_at' => 'getCreatedAt',
        'current_value' => 'getCurrentValue',
        'id' => 'getId',
        'ip_address' => 'getIpAddress',
        'merchant_id' => 'getMerchantId',
        'previous_value' => 'getPreviousValue',
        'principal_id' => 'getPrincipalId',
        'reason' => 'getReason',
        'resource' => 'getResource',
        'resource_id' => 'getResourceId',
        'resource_type' => 'getResourceType'
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
        $this->setIfExists('action_type', $data ?? [], null);
        $this->setIfExists('actor_type', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('current_value', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ip_address', $data ?? [], null);
        $this->setIfExists('merchant_id', $data ?? [], null);
        $this->setIfExists('previous_value', $data ?? [], null);
        $this->setIfExists('principal_id', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('resource', $data ?? [], null);
        $this->setIfExists('resource_id', $data ?? [], null);
        $this->setIfExists('resource_type', $data ?? [], null);
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

        if ($this->container['action_type'] === null) {
            $invalidProperties[] = "'action_type' can't be null";
        }
        if ($this->container['actor_type'] === null) {
            $invalidProperties[] = "'actor_type' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['current_value'] === null) {
            $invalidProperties[] = "'current_value' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['principal_id'] === null) {
            $invalidProperties[] = "'principal_id' can't be null";
        }
        if ($this->container['resource_id'] === null) {
            $invalidProperties[] = "'resource_id' can't be null";
        }
        if ($this->container['resource_type'] === null) {
            $invalidProperties[] = "'resource_type' can't be null";
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
     * Gets action_type
     *
     * @return \Rvvup\Api\Model\ActionType
     */
    public function getActionType()
    {
        return $this->container['action_type'];
    }

    /**
     * Sets action_type
     *
     * @param \Rvvup\Api\Model\ActionType $action_type action_type
     *
     * @return self
     */
    public function setActionType($action_type)
    {
        if (is_null($action_type)) {
            throw new \InvalidArgumentException('non-nullable action_type cannot be null');
        }
        $this->container['action_type'] = $action_type;

        return $this;
    }

    /**
     * Gets actor_type
     *
     * @return \Rvvup\Api\Model\ActorType
     */
    public function getActorType()
    {
        return $this->container['actor_type'];
    }

    /**
     * Sets actor_type
     *
     * @param \Rvvup\Api\Model\ActorType $actor_type actor_type
     *
     * @return self
     */
    public function setActorType($actor_type)
    {
        if (is_null($actor_type)) {
            throw new \InvalidArgumentException('non-nullable actor_type cannot be null');
        }
        $this->container['actor_type'] = $actor_type;

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
     * @param \DateTime $created_at The creation timestamp
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
     * Gets current_value
     *
     * @return array<string,object>
     */
    public function getCurrentValue()
    {
        return $this->container['current_value'];
    }

    /**
     * Sets current_value
     *
     * @param array<string,object> $current_value The current log record value
     *
     * @return self
     */
    public function setCurrentValue($current_value)
    {
        if (is_null($current_value)) {
            throw new \InvalidArgumentException('non-nullable current_value cannot be null');
        }
        $this->container['current_value'] = $current_value;

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
     * @param string $id The log record ID
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
     * Gets ip_address
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string|null $ip_address The IP address
     *
     * @return self
     */
    public function setIpAddress($ip_address)
    {
        if (is_null($ip_address)) {
            throw new \InvalidArgumentException('non-nullable ip_address cannot be null');
        }
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id The merchant ID
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
     * Gets previous_value
     *
     * @return array<string,object>|null
     */
    public function getPreviousValue()
    {
        return $this->container['previous_value'];
    }

    /**
     * Sets previous_value
     *
     * @param array<string,object>|null $previous_value The previous log record value
     *
     * @return self
     */
    public function setPreviousValue($previous_value)
    {
        if (is_null($previous_value)) {
            throw new \InvalidArgumentException('non-nullable previous_value cannot be null');
        }
        $this->container['previous_value'] = $previous_value;

        return $this;
    }

    /**
     * Gets principal_id
     *
     * @return string
     */
    public function getPrincipalId()
    {
        return $this->container['principal_id'];
    }

    /**
     * Sets principal_id
     *
     * @param string $principal_id The principal ID
     *
     * @return self
     */
    public function setPrincipalId($principal_id)
    {
        if (is_null($principal_id)) {
            throw new \InvalidArgumentException('non-nullable principal_id cannot be null');
        }
        $this->container['principal_id'] = $principal_id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The reason for the log record
     *
     * @return self
     */
    public function setReason($reason)
    {
        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets resource
     *
     * @return string|null
     */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
     * Sets resource
     *
     * @param string|null $resource The resource being accessed
     *
     * @return self
     */
    public function setResource($resource)
    {
        if (is_null($resource)) {
            throw new \InvalidArgumentException('non-nullable resource cannot be null');
        }
        $this->container['resource'] = $resource;

        return $this;
    }

    /**
     * Gets resource_id
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string $resource_id The resource ID
     *
     * @return self
     */
    public function setResourceId($resource_id)
    {
        if (is_null($resource_id)) {
            throw new \InvalidArgumentException('non-nullable resource_id cannot be null');
        }
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets resource_type
     *
     * @return \Rvvup\Api\Model\ResourceType
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     *
     * @param \Rvvup\Api\Model\ResourceType $resource_type resource_type
     *
     * @return self
     */
    public function setResourceType($resource_type)
    {
        if (is_null($resource_type)) {
            throw new \InvalidArgumentException('non-nullable resource_type cannot be null');
        }
        $this->container['resource_type'] = $resource_type;

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

