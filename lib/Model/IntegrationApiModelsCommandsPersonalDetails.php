<?php
/**
 * IntegrationApiModelsCommandsPersonalDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Openpay\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Integration API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Openpay\Client\Model;

use \ArrayAccess;
use \Openpay\Client\ObjectSerializer;

/**
 * IntegrationApiModelsCommandsPersonalDetails Class Doc Comment
 *
 * @category Class
 * @description The customer&#x27;s&#x27; personal and contact details
 * @package  Openpay\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationApiModelsCommandsPersonalDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationApi.Models.Commands.PersonalDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'first_name' => 'string',
'other_names' => 'string',
'family_name' => 'string',
'email' => 'string',
'date_of_birth' => 'string',
'gender' => 'string',
'phone_number' => 'string',
'residential_address' => '\Openpay\Client\Model\IntegrationApiModelsCommandsAddress',
'delivery_address' => '\Openpay\Client\Model\IntegrationApiModelsCommandsAddress'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'first_name' => null,
'other_names' => null,
'family_name' => null,
'email' => null,
'date_of_birth' => null,
'gender' => null,
'phone_number' => null,
'residential_address' => null,
'delivery_address' => null    ];

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
        'first_name' => 'firstName',
'other_names' => 'otherNames',
'family_name' => 'familyName',
'email' => 'email',
'date_of_birth' => 'dateOfBirth',
'gender' => 'gender',
'phone_number' => 'phoneNumber',
'residential_address' => 'residentialAddress',
'delivery_address' => 'deliveryAddress'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
'other_names' => 'setOtherNames',
'family_name' => 'setFamilyName',
'email' => 'setEmail',
'date_of_birth' => 'setDateOfBirth',
'gender' => 'setGender',
'phone_number' => 'setPhoneNumber',
'residential_address' => 'setResidentialAddress',
'delivery_address' => 'setDeliveryAddress'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
'other_names' => 'getOtherNames',
'family_name' => 'getFamilyName',
'email' => 'getEmail',
'date_of_birth' => 'getDateOfBirth',
'gender' => 'getGender',
'phone_number' => 'getPhoneNumber',
'residential_address' => 'getResidentialAddress',
'delivery_address' => 'getDeliveryAddress'    ];

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
        $this->container['other_names'] = isset($data['other_names']) ? $data['other_names'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['residential_address'] = isset($data['residential_address']) ? $data['residential_address'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['family_name'] === null) {
            $invalidProperties[] = "'family_name' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['delivery_address'] === null) {
            $invalidProperties[] = "'delivery_address' can't be null";
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
     * @param string $first_name The customer’s first name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets other_names
     *
     * @return string
     */
    public function getOtherNames()
    {
        return $this->container['other_names'];
    }

    /**
     * Sets other_names
     *
     * @param string $other_names The customer’s other names (middle names)
     *
     * @return $this
     */
    public function setOtherNames($other_names)
    {
        $this->container['other_names'] = $other_names;

        return $this;
    }

    /**
     * Gets family_name
     *
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     *
     * @param string $family_name The customer’s family name
     *
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

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
     * @param string $email The email address in value@yy.yy format.  Specific email addreses can be used to achieve particular effects:  - success@xx.yy    Return to the caller’s website with the status SUCCESS or LODGED (depends on plan creation type)  - cancelled@xx.yy    Return to the caller’s website with the status CANCELLED  - failure@xx.yy    Return to the caller’s website with the status FAILURE  - declinecapture@xx.yy    Decline payment capture when plan created using this email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string $date_of_birth The customer's date of birth
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender The customer's gender  U=Unspecified, M=Male, F=Female, O=Other
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number A valid mobile phone number for the customer
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets residential_address
     *
     * @return \Openpay\Client\Model\IntegrationApiModelsCommandsAddress
     */
    public function getResidentialAddress()
    {
        return $this->container['residential_address'];
    }

    /**
     * Sets residential_address
     *
     * @param \Openpay\Client\Model\IntegrationApiModelsCommandsAddress $residential_address residential_address
     *
     * @return $this
     */
    public function setResidentialAddress($residential_address)
    {
        $this->container['residential_address'] = $residential_address;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \Openpay\Client\Model\IntegrationApiModelsCommandsAddress
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \Openpay\Client\Model\IntegrationApiModelsCommandsAddress $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

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
