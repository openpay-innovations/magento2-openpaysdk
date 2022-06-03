<?php
/**
 * IntegrationApiModelsCommandsOnlineJourneyDetails
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
 * IntegrationApiModelsCommandsOnlineJourneyDetails Class Doc Comment
 *
 * @category Class
 * @description Details of an Online journey. Required if the Origin is set to \&quot;Online\&quot;
 * @package  Openpay\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationApiModelsCommandsOnlineJourneyDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationApi.Models.Commands.OnlineJourneyDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'callback_url' => 'string',
'cancel_url' => 'string',
'fail_url' => 'string',
'plan_creation_type' => 'string',
'charge_back_count' => 'int',
'customer_quality' => 'int',
'customer_details' => '\Openpay\Client\Model\IntegrationApiModelsCommandsPersonalDetails',
'delivery_date' => 'string',
'delivery_method' => 'string'       ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'callback_url' => null,
'cancel_url' => null,
'fail_url' => null,
'plan_creation_type' => null,
'charge_back_count' => 'int32',
'customer_quality' => 'int32',
'customer_details' => null,
'delivery_date' => null,
'delivery_method' => null    ];

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
        'callback_url' => 'callbackUrl',
'cancel_url' => 'cancelUrl',
'fail_url' => 'failUrl',
'plan_creation_type' => 'planCreationType',
'charge_back_count' => 'chargeBackCount',
'customer_quality' => 'customerQuality',
'customer_details' => 'customerDetails',
'delivery_date' => 'deliveryDate',
'delivery_method' => 'deliveryMethod'        ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'callback_url' => 'setCallbackUrl',
'cancel_url' => 'setCancelUrl',
'fail_url' => 'setFailUrl',
'plan_creation_type' => 'setPlanCreationType',
'charge_back_count' => 'setChargeBackCount',
'customer_quality' => 'setCustomerQuality',
'customer_details' => 'setCustomerDetails',
'delivery_date' => 'setDeliveryDate',
'delivery_method' => 'setDeliveryMethod'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'callback_url' => 'getCallbackUrl',
'cancel_url' => 'getCancelUrl',
'fail_url' => 'getFailUrl',
'plan_creation_type' => 'getPlanCreationType',
'charge_back_count' => 'getChargeBackCount',
'customer_quality' => 'getCustomerQuality',
'customer_details' => 'getCustomerDetails',
'delivery_date' => 'getDeliveryDate',
'delivery_method' => 'getDeliveryMethod'        ];

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
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
        $this->container['fail_url'] = isset($data['fail_url']) ? $data['fail_url'] : null;
        $this->container['plan_creation_type'] = isset($data['plan_creation_type']) ? $data['plan_creation_type'] : null;
        $this->container['charge_back_count'] = isset($data['charge_back_count']) ? $data['charge_back_count'] : null;
        $this->container['customer_quality'] = isset($data['customer_quality']) ? $data['customer_quality'] : null;
        $this->container['customer_details'] = isset($data['customer_details']) ? $data['customer_details'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['delivery_method'] = isset($data['delivery_method']) ? $data['delivery_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['callback_url'] === null) {
            $invalidProperties[] = "'callback_url' can't be null";
        }
        if ($this->container['cancel_url'] === null) {
            $invalidProperties[] = "'cancel_url' can't be null";
        }
        if ($this->container['fail_url'] === null) {
            $invalidProperties[] = "'fail_url' can't be null";
        }
        if ($this->container['plan_creation_type'] === null) {
            $invalidProperties[] = "'plan_creation_type' can't be null";
        }
        if ($this->container['customer_details'] === null) {
            $invalidProperties[] = "'customer_details' can't be null";
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
     * Gets callback_url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string $callback_url URL to redirect to upon successful plan creation or lodgement (may also serve as the only one, as it has parameter ‘status’: SUCCESS, LODGED, CANCELLED, FAILED)
     *
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string $cancel_url URL to redirect to when user cancels the plan creation or lodgement
     *
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets fail_url
     *
     * @return string
     */
    public function getFailUrl()
    {
        return $this->container['fail_url'];
    }

    /**
     * Sets fail_url
     *
     * @param string $fail_url URL to redirect to when a system error occurs
     *
     * @return $this
     */
    public function setFailUrl($fail_url)
    {
        $this->container['fail_url'] = $fail_url;

        return $this;
    }

    /**
     * Gets plan_creation_type
     *
     * @return string
     */
    public function getPlanCreationType()
    {
        return $this->container['plan_creation_type'];
    }

    /**
     * Sets plan_creation_type
     *
     * @param string $plan_creation_type Based on this flag, plan will be created as pending capture
     *
     * @return $this
     */
    public function setPlanCreationType($plan_creation_type)
    {
        $this->container['plan_creation_type'] = $plan_creation_type;

        return $this;
    }

    /**
     * Gets charge_back_count
     *
     * @return int
     */
    public function getChargeBackCount()
    {
        return $this->container['charge_back_count'];
    }

    /**
     * Sets charge_back_count
     *
     * @param int $charge_back_count How many chargebacks are known to have been received from this customer?  -1 = Unknown (default)
     *
     * @return $this
     */
    public function setChargeBackCount($charge_back_count)
    {
        $this->container['charge_back_count'] = $charge_back_count;

        return $this;
    }

    /**
     * Gets customer_quality
     *
     * @return int
     */
    public function getCustomerQuality()
    {
        return $this->container['customer_quality'];
    }

    /**
     * Sets customer_quality
     *
     * @param int $customer_quality How is this customer categorised?  -1= Unknown (default)  0 = Brand new with no history  1 = Returning ‘Good’ customer  2 = Returning ‘Average’ customer  3 = Returning ‘Bad’ customer
     *
     * @return $this
     */
    public function setCustomerQuality($customer_quality)
    {
        $this->container['customer_quality'] = $customer_quality;

        return $this;
    }

    /**
     * Gets customer_details
     *
     * @return \Openpay\Client\Model\IntegrationApiModelsCommandsPersonalDetails
     */
    public function getCustomerDetails()
    {
        return $this->container['customer_details'];
    }

    /**
     * Sets customer_details
     *
     * @param \Openpay\Client\Model\IntegrationApiModelsCommandsPersonalDetails $customer_details customer_details
     *
     * @return $this
     */
    public function setCustomerDetails($customer_details)
    {
        $this->container['customer_details'] = $customer_details;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param string $delivery_date The date for which the delivery is scheduled
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets delivery_method
     *
     * @return string
     */
    public function getDeliveryMethod()
    {
        return $this->container['delivery_method'];
    }

    /**
     * Sets delivery_method
     *
     * @param string $delivery_method The method for which the delivery is scheduled
     *
     * @return $this
     */
    public function setDeliveryMethod($delivery_method)
    {
        $this->container['delivery_method'] = $delivery_method;

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
    public function offsetGet($offset): mixed
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
