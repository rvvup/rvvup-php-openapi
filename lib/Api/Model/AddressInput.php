<?php
/**
 * AddressInput
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
 * AddressInput Class Doc Comment
 *
 * @category Class
 * @description The address details.
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'city' => 'string',
        'company' => 'string',
        'country_code' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'name' => 'string',
        'phone_number' => 'string',
        'postcode' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'city' => null,
        'company' => null,
        'country_code' => null,
        'line1' => null,
        'line2' => null,
        'name' => null,
        'phone_number' => null,
        'postcode' => null,
        'state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'city' => false,
        'company' => false,
        'country_code' => false,
        'line1' => false,
        'line2' => false,
        'name' => false,
        'phone_number' => false,
        'postcode' => false,
        'state' => false
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
        'city' => 'city',
        'company' => 'company',
        'country_code' => 'countryCode',
        'line1' => 'line1',
        'line2' => 'line2',
        'name' => 'name',
        'phone_number' => 'phoneNumber',
        'postcode' => 'postcode',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'city' => 'setCity',
        'company' => 'setCompany',
        'country_code' => 'setCountryCode',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'name' => 'setName',
        'phone_number' => 'setPhoneNumber',
        'postcode' => 'setPostcode',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'city' => 'getCity',
        'company' => 'getCompany',
        'country_code' => 'getCountryCode',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'name' => 'getName',
        'phone_number' => 'getPhoneNumber',
        'postcode' => 'getPostcode',
        'state' => 'getState'
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
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('line1', $data ?? [], null);
        $this->setIfExists('line2', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
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

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 128)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) > 128)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['company']) && (mb_strlen($this->container['company']) < 1)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['line1'] === null) {
            $invalidProperties[] = "'line1' can't be null";
        }
        if ((mb_strlen($this->container['line1']) > 128)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['line1']) < 1)) {
            $invalidProperties[] = "invalid value for 'line1', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) > 128)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['line2']) && (mb_strlen($this->container['line2']) < 1)) {
            $invalidProperties[] = "invalid value for 'line2', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) > 32)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['phone_number']) && (mb_strlen($this->container['phone_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'phone_number', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        if ((mb_strlen($this->container['postcode']) > 128)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['postcode']) < 1)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 128)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 1.";
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
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City.
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 128)) {
            throw new \InvalidArgumentException('invalid length for $city when calling AddressInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company Company name.
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        if ((mb_strlen($company) > 128)) {
            throw new \InvalidArgumentException('invalid length for $company when calling AddressInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($company) < 1)) {
            throw new \InvalidArgumentException('invalid length for $company when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Two letter ISO 3166-1 alpha-2 country code.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string $line1 Address line 1.
     *
     * @return self
     */
    public function setLine1($line1)
    {
        if (is_null($line1)) {
            throw new \InvalidArgumentException('non-nullable line1 cannot be null');
        }
        if ((mb_strlen($line1) > 128)) {
            throw new \InvalidArgumentException('invalid length for $line1 when calling AddressInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($line1) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line1 when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string|null
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string|null $line2 Address line 2.
     *
     * @return self
     */
    public function setLine2($line2)
    {
        if (is_null($line2)) {
            throw new \InvalidArgumentException('non-nullable line2 cannot be null');
        }
        if ((mb_strlen($line2) > 128)) {
            throw new \InvalidArgumentException('invalid length for $line2 when calling AddressInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($line2) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line2 when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['line2'] = $line2;

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
     * @param string $name Name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AddressInput., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number Phone number.
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        if ((mb_strlen($phone_number) > 32)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling AddressInput., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($phone_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $phone_number when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postcode.
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new \InvalidArgumentException('non-nullable postcode cannot be null');
        }
        if ((mb_strlen($postcode) > 128)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling AddressInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($postcode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        if ((mb_strlen($state) > 128)) {
            throw new \InvalidArgumentException('invalid length for $state when calling AddressInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($state) < 1)) {
            throw new \InvalidArgumentException('invalid length for $state when calling AddressInput., must be bigger than or equal to 1.');
        }

        $this->container['state'] = $state;

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


