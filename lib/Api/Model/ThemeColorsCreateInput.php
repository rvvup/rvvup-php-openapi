<?php
/**
 * ThemeColorsCreateInput
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
 * ThemeColorsCreateInput Class Doc Comment
 *
 * @category Class
 * @description Theme colors create input object
 * @package  Rvvup
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ThemeColorsCreateInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ThemeColorsCreateInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'background' => 'string',
        'primary' => 'string',
        'primary_divider' => 'string',
        'primary_hover' => 'string',
        'primary_hover_light' => 'string',
        'primary_light' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'background' => null,
        'primary' => null,
        'primary_divider' => null,
        'primary_hover' => null,
        'primary_hover_light' => null,
        'primary_light' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'background' => false,
        'primary' => false,
        'primary_divider' => false,
        'primary_hover' => false,
        'primary_hover_light' => false,
        'primary_light' => false
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
        'background' => 'background',
        'primary' => 'primary',
        'primary_divider' => 'primaryDivider',
        'primary_hover' => 'primaryHover',
        'primary_hover_light' => 'primaryHoverLight',
        'primary_light' => 'primaryLight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background' => 'setBackground',
        'primary' => 'setPrimary',
        'primary_divider' => 'setPrimaryDivider',
        'primary_hover' => 'setPrimaryHover',
        'primary_hover_light' => 'setPrimaryHoverLight',
        'primary_light' => 'setPrimaryLight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background' => 'getBackground',
        'primary' => 'getPrimary',
        'primary_divider' => 'getPrimaryDivider',
        'primary_hover' => 'getPrimaryHover',
        'primary_hover_light' => 'getPrimaryHoverLight',
        'primary_light' => 'getPrimaryLight'
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
        $this->setIfExists('background', $data ?? [], null);
        $this->setIfExists('primary', $data ?? [], null);
        $this->setIfExists('primary_divider', $data ?? [], null);
        $this->setIfExists('primary_hover', $data ?? [], null);
        $this->setIfExists('primary_hover_light', $data ?? [], null);
        $this->setIfExists('primary_light', $data ?? [], null);
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

        if (!is_null($this->container['background']) && (mb_strlen($this->container['background']) > 128)) {
            $invalidProperties[] = "invalid value for 'background', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['background']) && (mb_strlen($this->container['background']) < 1)) {
            $invalidProperties[] = "invalid value for 'background', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['primary'] === null) {
            $invalidProperties[] = "'primary' can't be null";
        }
        if ((mb_strlen($this->container['primary']) > 128)) {
            $invalidProperties[] = "invalid value for 'primary', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['primary']) < 1)) {
            $invalidProperties[] = "invalid value for 'primary', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['primary_divider'] === null) {
            $invalidProperties[] = "'primary_divider' can't be null";
        }
        if ((mb_strlen($this->container['primary_divider']) > 128)) {
            $invalidProperties[] = "invalid value for 'primary_divider', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['primary_divider']) < 1)) {
            $invalidProperties[] = "invalid value for 'primary_divider', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['primary_hover'] === null) {
            $invalidProperties[] = "'primary_hover' can't be null";
        }
        if ((mb_strlen($this->container['primary_hover']) > 128)) {
            $invalidProperties[] = "invalid value for 'primary_hover', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['primary_hover']) < 1)) {
            $invalidProperties[] = "invalid value for 'primary_hover', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['primary_hover_light'] === null) {
            $invalidProperties[] = "'primary_hover_light' can't be null";
        }
        if ((mb_strlen($this->container['primary_hover_light']) > 128)) {
            $invalidProperties[] = "invalid value for 'primary_hover_light', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['primary_hover_light']) < 1)) {
            $invalidProperties[] = "invalid value for 'primary_hover_light', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['primary_light'] === null) {
            $invalidProperties[] = "'primary_light' can't be null";
        }
        if ((mb_strlen($this->container['primary_light']) > 128)) {
            $invalidProperties[] = "invalid value for 'primary_light', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['primary_light']) < 1)) {
            $invalidProperties[] = "invalid value for 'primary_light', the character length must be bigger than or equal to 1.";
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
     * Gets background
     *
     * @return string|null
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param string|null $background Background color.
     *
     * @return self
     */
    public function setBackground($background)
    {
        if (is_null($background)) {
            throw new \InvalidArgumentException('non-nullable background cannot be null');
        }
        if ((mb_strlen($background) > 128)) {
            throw new \InvalidArgumentException('invalid length for $background when calling ThemeColorsCreateInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($background) < 1)) {
            throw new \InvalidArgumentException('invalid length for $background when calling ThemeColorsCreateInput., must be bigger than or equal to 1.');
        }

        $this->container['background'] = $background;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return string
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param string $primary Primary color.
     *
     * @return self
     */
    public function setPrimary($primary)
    {
        if (is_null($primary)) {
            throw new \InvalidArgumentException('non-nullable primary cannot be null');
        }
        if ((mb_strlen($primary) > 128)) {
            throw new \InvalidArgumentException('invalid length for $primary when calling ThemeColorsCreateInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($primary) < 1)) {
            throw new \InvalidArgumentException('invalid length for $primary when calling ThemeColorsCreateInput., must be bigger than or equal to 1.');
        }

        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets primary_divider
     *
     * @return string
     */
    public function getPrimaryDivider()
    {
        return $this->container['primary_divider'];
    }

    /**
     * Sets primary_divider
     *
     * @param string $primary_divider Primary divider color.
     *
     * @return self
     */
    public function setPrimaryDivider($primary_divider)
    {
        if (is_null($primary_divider)) {
            throw new \InvalidArgumentException('non-nullable primary_divider cannot be null');
        }
        if ((mb_strlen($primary_divider) > 128)) {
            throw new \InvalidArgumentException('invalid length for $primary_divider when calling ThemeColorsCreateInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($primary_divider) < 1)) {
            throw new \InvalidArgumentException('invalid length for $primary_divider when calling ThemeColorsCreateInput., must be bigger than or equal to 1.');
        }

        $this->container['primary_divider'] = $primary_divider;

        return $this;
    }

    /**
     * Gets primary_hover
     *
     * @return string
     */
    public function getPrimaryHover()
    {
        return $this->container['primary_hover'];
    }

    /**
     * Sets primary_hover
     *
     * @param string $primary_hover Primary hover color.
     *
     * @return self
     */
    public function setPrimaryHover($primary_hover)
    {
        if (is_null($primary_hover)) {
            throw new \InvalidArgumentException('non-nullable primary_hover cannot be null');
        }
        if ((mb_strlen($primary_hover) > 128)) {
            throw new \InvalidArgumentException('invalid length for $primary_hover when calling ThemeColorsCreateInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($primary_hover) < 1)) {
            throw new \InvalidArgumentException('invalid length for $primary_hover when calling ThemeColorsCreateInput., must be bigger than or equal to 1.');
        }

        $this->container['primary_hover'] = $primary_hover;

        return $this;
    }

    /**
     * Gets primary_hover_light
     *
     * @return string
     */
    public function getPrimaryHoverLight()
    {
        return $this->container['primary_hover_light'];
    }

    /**
     * Sets primary_hover_light
     *
     * @param string $primary_hover_light Primary hover light color.
     *
     * @return self
     */
    public function setPrimaryHoverLight($primary_hover_light)
    {
        if (is_null($primary_hover_light)) {
            throw new \InvalidArgumentException('non-nullable primary_hover_light cannot be null');
        }
        if ((mb_strlen($primary_hover_light) > 128)) {
            throw new \InvalidArgumentException('invalid length for $primary_hover_light when calling ThemeColorsCreateInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($primary_hover_light) < 1)) {
            throw new \InvalidArgumentException('invalid length for $primary_hover_light when calling ThemeColorsCreateInput., must be bigger than or equal to 1.');
        }

        $this->container['primary_hover_light'] = $primary_hover_light;

        return $this;
    }

    /**
     * Gets primary_light
     *
     * @return string
     */
    public function getPrimaryLight()
    {
        return $this->container['primary_light'];
    }

    /**
     * Sets primary_light
     *
     * @param string $primary_light Primary light color.
     *
     * @return self
     */
    public function setPrimaryLight($primary_light)
    {
        if (is_null($primary_light)) {
            throw new \InvalidArgumentException('non-nullable primary_light cannot be null');
        }
        if ((mb_strlen($primary_light) > 128)) {
            throw new \InvalidArgumentException('invalid length for $primary_light when calling ThemeColorsCreateInput., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($primary_light) < 1)) {
            throw new \InvalidArgumentException('invalid length for $primary_light when calling ThemeColorsCreateInput., must be bigger than or equal to 1.');
        }

        $this->container['primary_light'] = $primary_light;

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


