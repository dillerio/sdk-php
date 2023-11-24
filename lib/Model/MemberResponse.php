<?php
/**
 * MemberResponse
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
 * MemberResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   DILLER AS
 * @link     https://diller.io
 */
class MemberResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'first_name' => 'string',
'last_name' => 'string',
'email' => 'string',
'additional_identifiers' => 'string[]',
'remarks' => 'string',
'phone' => '\Swagger\Client\Model\Phone',
'birth_date' => '\DateTime',
'address' => '\Swagger\Client\Model\Address',
'gender' => '\Swagger\Client\Model\Gender',
'consent' => '\Swagger\Client\Model\MemberConsent',
'membership_detail' => '\Swagger\Client\Model\MemberMembershipDetail',
'department_ids' => 'string[]',
'segments' => '\Swagger\Client\Model\MemberSegmentResponse[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'first_name' => null,
'last_name' => null,
'email' => null,
'additional_identifiers' => null,
'remarks' => null,
'phone' => null,
'birth_date' => 'date-time',
'address' => null,
'gender' => null,
'consent' => null,
'membership_detail' => null,
'department_ids' => null,
'segments' => null    ];

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
        'id' => 'id',
'first_name' => 'first_name',
'last_name' => 'last_name',
'email' => 'email',
'additional_identifiers' => 'additional_identifiers',
'remarks' => 'remarks',
'phone' => 'phone',
'birth_date' => 'birth_date',
'address' => 'address',
'gender' => 'gender',
'consent' => 'consent',
'membership_detail' => 'membership_detail',
'department_ids' => 'department_ids',
'segments' => 'segments'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'email' => 'setEmail',
'additional_identifiers' => 'setAdditionalIdentifiers',
'remarks' => 'setRemarks',
'phone' => 'setPhone',
'birth_date' => 'setBirthDate',
'address' => 'setAddress',
'gender' => 'setGender',
'consent' => 'setConsent',
'membership_detail' => 'setMembershipDetail',
'department_ids' => 'setDepartmentIds',
'segments' => 'setSegments'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'email' => 'getEmail',
'additional_identifiers' => 'getAdditionalIdentifiers',
'remarks' => 'getRemarks',
'phone' => 'getPhone',
'birth_date' => 'getBirthDate',
'address' => 'getAddress',
'gender' => 'getGender',
'consent' => 'getConsent',
'membership_detail' => 'getMembershipDetail',
'department_ids' => 'getDepartmentIds',
'segments' => 'getSegments'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['additional_identifiers'] = isset($data['additional_identifiers']) ? $data['additional_identifiers'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['consent'] = isset($data['consent']) ? $data['consent'] : null;
        $this->container['membership_detail'] = isset($data['membership_detail']) ? $data['membership_detail'] : null;
        $this->container['department_ids'] = isset($data['department_ids']) ? $data['department_ids'] : null;
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

        if ($this->container['gender'] === null) {
            $invalidProperties[] = "'gender' can't be null";
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * Gets remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
     * Sets remarks
     *
     * @param string $remarks remarks
     *
     * @return $this
     */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \Swagger\Client\Model\Phone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \Swagger\Client\Model\Phone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * Gets membership_detail
     *
     * @return \Swagger\Client\Model\MemberMembershipDetail
     */
    public function getMembershipDetail()
    {
        return $this->container['membership_detail'];
    }

    /**
     * Sets membership_detail
     *
     * @param \Swagger\Client\Model\MemberMembershipDetail $membership_detail membership_detail
     *
     * @return $this
     */
    public function setMembershipDetail($membership_detail)
    {
        $this->container['membership_detail'] = $membership_detail;

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
     * Gets segments
     *
     * @return \Swagger\Client\Model\MemberSegmentResponse[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \Swagger\Client\Model\MemberSegmentResponse[] $segments segments
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
