<?php
/**
 * MemberMembershipDetail
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \DillerAPI\ObjectSerializer;

/**
 * MemberMembershipDetail Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   DILLER AS
 * @link     https://diller.io
 */
class MemberMembershipDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberMembershipDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'points' => 'double',
'remaining_points' => 'double',
'level_title' => 'string',
'next_level_title' => 'string',
'next_level_points' => 'double',
'level_expire_date' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'points' => 'double',
'remaining_points' => 'double',
'level_title' => null,
'next_level_title' => null,
'next_level_points' => 'double',
'level_expire_date' => 'date-time'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'points' => 'points',
'remaining_points' => 'remaining_points',
'level_title' => 'level_title',
'next_level_title' => 'next_level_title',
'next_level_points' => 'next_level_points',
'level_expire_date' => 'level_expire_date'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'points' => 'setPoints',
'remaining_points' => 'setRemainingPoints',
'level_title' => 'setLevelTitle',
'next_level_title' => 'setNextLevelTitle',
'next_level_points' => 'setNextLevelPoints',
'level_expire_date' => 'setLevelExpireDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'points' => 'getPoints',
'remaining_points' => 'getRemainingPoints',
'level_title' => 'getLevelTitle',
'next_level_title' => 'getNextLevelTitle',
'next_level_points' => 'getNextLevelPoints',
'level_expire_date' => 'getLevelExpireDate'    ];

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
        return self::$swaggerModelName;
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
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['remaining_points'] = isset($data['remaining_points']) ? $data['remaining_points'] : null;
        $this->container['level_title'] = isset($data['level_title']) ? $data['level_title'] : null;
        $this->container['next_level_title'] = isset($data['next_level_title']) ? $data['next_level_title'] : null;
        $this->container['next_level_points'] = isset($data['next_level_points']) ? $data['next_level_points'] : null;
        $this->container['level_expire_date'] = isset($data['level_expire_date']) ? $data['level_expire_date'] : null;
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
     * Gets points
     *
     * @return double
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param double $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets remaining_points
     *
     * @return double
     */
    public function getRemainingPoints()
    {
        return $this->container['remaining_points'];
    }

    /**
     * Sets remaining_points
     *
     * @param double $remaining_points remaining_points
     *
     * @return $this
     */
    public function setRemainingPoints($remaining_points)
    {
        $this->container['remaining_points'] = $remaining_points;

        return $this;
    }

    /**
     * Gets level_title
     *
     * @return string
     */
    public function getLevelTitle()
    {
        return $this->container['level_title'];
    }

    /**
     * Sets level_title
     *
     * @param string $level_title level_title
     *
     * @return $this
     */
    public function setLevelTitle($level_title)
    {
        $this->container['level_title'] = $level_title;

        return $this;
    }

    /**
     * Gets next_level_title
     *
     * @return string
     */
    public function getNextLevelTitle()
    {
        return $this->container['next_level_title'];
    }

    /**
     * Sets next_level_title
     *
     * @param string $next_level_title next_level_title
     *
     * @return $this
     */
    public function setNextLevelTitle($next_level_title)
    {
        $this->container['next_level_title'] = $next_level_title;

        return $this;
    }

    /**
     * Gets next_level_points
     *
     * @return double
     */
    public function getNextLevelPoints()
    {
        return $this->container['next_level_points'];
    }

    /**
     * Sets next_level_points
     *
     * @param double $next_level_points next_level_points
     *
     * @return $this
     */
    public function setNextLevelPoints($next_level_points)
    {
        $this->container['next_level_points'] = $next_level_points;

        return $this;
    }

    /**
     * Gets level_expire_date
     *
     * @return \DateTime
     */
    public function getLevelExpireDate()
    {
        return $this->container['level_expire_date'];
    }

    /**
     * Sets level_expire_date
     *
     * @param \DateTime $level_expire_date level_expire_date
     *
     * @return $this
     */
    public function setLevelExpireDate($level_expire_date)
    {
        $this->container['level_expire_date'] = $level_expire_date;

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
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
