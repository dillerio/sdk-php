<?php
/**
 * UpdateMemberRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Diller Retailer API
 *
 * The official Diller Retailer API (beta version) <br/> Last Updated: 07-11-2023 14:08
 *
 * OpenAPI spec version: v2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UpdateMemberRequest Class Doc Comment
 *
 * @category Class
 * @description Payload to update a member
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateMemberRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateMemberRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'birth_date' => '\DateTime',
        'additional_identifiers' => 'string[]',
        'gender' => '\Swagger\Client\Model\Gender',
        'address' => '\Swagger\Client\Model\Address',
        'consent' => '\Swagger\Client\Model\MemberConsent',
        'department_ids' => 'string[]',
        'origin' => '\Swagger\Client\Model\Origin',
        'segments' => '\Swagger\Client\Model\SegmentValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
        'last_name' => null,
        'email' => null,
        'birth_date' => 'date-time',
        'additional_identifiers' => null,
        'gender' => null,
        'address' => null,
        'consent' => null,
        'department_ids' => null,
        'origin' => null,
        'segments' => null
    ];

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
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'email' => 'email',
        'birth_date' => 'birth_date',
        'additional_identifiers' => 'additional_identifiers',
        'gender' => 'gender',
        'address' => 'address',
        'consent' => 'consent',
        'department_ids' => 'department_ids',
        'origin' => 'origin',
        'segments' => 'segments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'birth_date' => 'setBirthDate',
        'additional_identifiers' => 'setAdditionalIdentifiers',
        'gender' => 'setGender',
        'address' => 'setAddress',
        'consent' => 'setConsent',
        'department_ids' => 'setDepartmentIds',
        'origin' => 'setOrigin',
        'segments' => 'setSegments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'birth_date' => 'getBirthDate',
        'additional_identifiers' => 'getAdditionalIdentifiers',
        'gender' => 'getGender',
        'address' => 'getAddress',
        'consent' => 'getConsent',
        'department_ids' => 'getDepartmentIds',
        'origin' => 'getOrigin',
        'segments' => 'getSegments'
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
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['additional_identifiers'] = isset($data['additional_identifiers']) ? $data['additional_identifiers'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['consent'] = isset($data['consent']) ? $data['consent'] : null;
        $this->container['department_ids'] = isset($data['department_ids']) ? $data['department_ids'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime $birth_date birth_date
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets additional_identifiers
     *
     * @return string[]
     */
    public function getAdditionalIdentifiers()
    {
        return $this->container['additional_identifiers'];
    }

    /**
     * Sets additional_identifiers
     *
     * @param string[] $additional_identifiers Specifies an additional identifier value for the member identifier type that is defined at the store level.
     *
     * @return $this
     */
    public function setAdditionalIdentifiers($additional_identifiers)
    {
        $this->container['additional_identifiers'] = $additional_identifiers;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Swagger\Client\Model\Gender
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Swagger\Client\Model\Gender $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets consent
     *
     * @return \Swagger\Client\Model\MemberConsent
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param \Swagger\Client\Model\MemberConsent $consent consent
     *
     * @return $this
     */
    public function setConsent($consent)
    {
        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets department_ids
     *
     * @return string[]
     */
    public function getDepartmentIds()
    {
        return $this->container['department_ids'];
    }

    /**
     * Sets department_ids
     *
     * @param string[] $department_ids department_ids
     *
     * @return $this
     */
    public function setDepartmentIds($department_ids)
    {
        $this->container['department_ids'] = $department_ids;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return \Swagger\Client\Model\Origin
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param \Swagger\Client\Model\Origin $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \Swagger\Client\Model\SegmentValue[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \Swagger\Client\Model\SegmentValue[] $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
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
