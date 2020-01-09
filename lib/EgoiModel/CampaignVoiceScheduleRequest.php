<?php
/**
 * CampaignVoiceScheduleRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * APIv3 (Beta)
 *
 * # Introduction Just a quick pick!!! This is our new version of API. Remember, it is not stable yet!!! But we invite you play with it and give us your feedback ;) # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.   The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.   BaseURL = api.egoiapp.com  # HTTP Methods for RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication   We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:  #!/bin/bash  curl -X GET 'https://api.egoiapp.com/my-account' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:  #!/bin/bash  curl -X POST 'http://api.egoiapp.com/tags' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>' \\  -H 'Content-Type: application/json' \\  -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  <security-definitions/>
 *
 * The version of the OpenAPI document: 3.0.0-beta
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EgoiClient\EgoiModel;

use \ArrayAccess;
use \EgoiClient\ObjectSerializer;

/**
 * CampaignVoiceScheduleRequest Class Doc Comment
 *
 * @category Class
 * @description Campaign voice schedule request schema
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignVoiceScheduleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignVoiceScheduleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'schedule_date' => '\DateTime',
        'list_id' => 'int',
        'segments' => '\EgoiClient\EgoiModel\OSegmentsActionSend',
        'notify' => 'int[]',
        'destination_field' => 'string',
        'limit_contacts' => '\EgoiClient\EgoiModel\OLimitContactsActionSend',
        'limit_hour' => '\EgoiClient\EgoiModel\LimitHourActionSendLimitHour',
        'limit_speed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'schedule_date' => 'date-time',
        'list_id' => null,
        'segments' => null,
        'notify' => null,
        'destination_field' => null,
        'limit_contacts' => null,
        'limit_hour' => null,
        'limit_speed' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'schedule_date' => 'schedule_date',
        'list_id' => 'list_id',
        'segments' => 'segments',
        'notify' => 'notify',
        'destination_field' => 'destination_field',
        'limit_contacts' => 'limit_contacts',
        'limit_hour' => 'limit_hour',
        'limit_speed' => 'limit_speed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'schedule_date' => 'setScheduleDate',
        'list_id' => 'setListId',
        'segments' => 'setSegments',
        'notify' => 'setNotify',
        'destination_field' => 'setDestinationField',
        'limit_contacts' => 'setLimitContacts',
        'limit_hour' => 'setLimitHour',
        'limit_speed' => 'setLimitSpeed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'schedule_date' => 'getScheduleDate',
        'list_id' => 'getListId',
        'segments' => 'getSegments',
        'notify' => 'getNotify',
        'destination_field' => 'getDestinationField',
        'limit_contacts' => 'getLimitContacts',
        'limit_hour' => 'getLimitHour',
        'limit_speed' => 'getLimitSpeed'
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

    const DESTINATION_FIELD_PHONE = 'phone';
    const DESTINATION_FIELD_CELLPHONE = 'cellphone';
    const DESTINATION_FIELD_PHONE_FAILSAFE_CELLPHONE = 'phone_failsafe_cellphone';
    const DESTINATION_FIELD_CELLPHONE_FAILSAFE_PHONE = 'cellphone_failsafe_phone';
    const DESTINATION_FIELD_CELLPHONE_PHONE = 'cellphone_phone';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationFieldAllowableValues()
    {
        return [
            self::DESTINATION_FIELD_PHONE,
            self::DESTINATION_FIELD_CELLPHONE,
            self::DESTINATION_FIELD_PHONE_FAILSAFE_CELLPHONE,
            self::DESTINATION_FIELD_CELLPHONE_FAILSAFE_PHONE,
            self::DESTINATION_FIELD_CELLPHONE_PHONE,
        ];
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
        $this->container['schedule_date'] = isset($data['schedule_date']) ? $data['schedule_date'] : null;
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['notify'] = isset($data['notify']) ? $data['notify'] : null;
        $this->container['destination_field'] = isset($data['destination_field']) ? $data['destination_field'] : null;
        $this->container['limit_contacts'] = isset($data['limit_contacts']) ? $data['limit_contacts'] : null;
        $this->container['limit_hour'] = isset($data['limit_hour']) ? $data['limit_hour'] : null;
        $this->container['limit_speed'] = isset($data['limit_speed']) ? $data['limit_speed'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['list_id'] === null) {
            $invalidProperties[] = "'list_id' can't be null";
        }
        if (($this->container['list_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'list_id', must be bigger than or equal to 1.";
        }

        if ($this->container['segments'] === null) {
            $invalidProperties[] = "'segments' can't be null";
        }
        if ($this->container['destination_field'] === null) {
            $invalidProperties[] = "'destination_field' can't be null";
        }
        $allowedValues = $this->getDestinationFieldAllowableValues();
        if (!is_null($this->container['destination_field']) && !in_array($this->container['destination_field'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination_field', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['limit_speed']) && ($this->container['limit_speed'] > 10)) {
            $invalidProperties[] = "invalid value for 'limit_speed', must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['limit_speed']) && ($this->container['limit_speed'] < 1)) {
            $invalidProperties[] = "invalid value for 'limit_speed', must be bigger than or equal to 1.";
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
     * Gets schedule_date
     *
     * @return \DateTime|null
     */
    public function getScheduleDate()
    {
        return $this->container['schedule_date'];
    }

    /**
     * Sets schedule_date
     *
     * @param \DateTime|null $schedule_date The date and time
     *
     * @return $this
     */
    public function setScheduleDate($schedule_date)
    {
        $this->container['schedule_date'] = $schedule_date;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return int
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param int $list_id list_id
     *
     * @return $this
     */
    public function setListId($list_id)
    {

        if (($list_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $list_id when calling CampaignVoiceScheduleRequest., must be bigger than or equal to 1.');
        }

        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \EgoiClient\EgoiModel\OSegmentsActionSend
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \EgoiClient\EgoiModel\OSegmentsActionSend $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets notify
     *
     * @return int[]|null
     */
    public function getNotify()
    {
        return $this->container['notify'];
    }

    /**
     * Sets notify
     *
     * @param int[]|null $notify Array of IDs of the users to notify
     *
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->container['notify'] = $notify;

        return $this;
    }

    /**
     * Gets destination_field
     *
     * @return string
     */
    public function getDestinationField()
    {
        return $this->container['destination_field'];
    }

    /**
     * Sets destination_field
     *
     * @param string $destination_field Destination field of this campaign
     *
     * @return $this
     */
    public function setDestinationField($destination_field)
    {
        $allowedValues = $this->getDestinationFieldAllowableValues();
        if (!in_array($destination_field, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination_field', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_field'] = $destination_field;

        return $this;
    }

    /**
     * Gets limit_contacts
     *
     * @return \EgoiClient\EgoiModel\OLimitContactsActionSend|null
     */
    public function getLimitContacts()
    {
        return $this->container['limit_contacts'];
    }

    /**
     * Sets limit_contacts
     *
     * @param \EgoiClient\EgoiModel\OLimitContactsActionSend|null $limit_contacts limit_contacts
     *
     * @return $this
     */
    public function setLimitContacts($limit_contacts)
    {
        $this->container['limit_contacts'] = $limit_contacts;

        return $this;
    }

    /**
     * Gets limit_hour
     *
     * @return \EgoiClient\EgoiModel\LimitHourActionSendLimitHour|null
     */
    public function getLimitHour()
    {
        return $this->container['limit_hour'];
    }

    /**
     * Sets limit_hour
     *
     * @param \EgoiClient\EgoiModel\LimitHourActionSendLimitHour|null $limit_hour limit_hour
     *
     * @return $this
     */
    public function setLimitHour($limit_hour)
    {
        $this->container['limit_hour'] = $limit_hour;

        return $this;
    }

    /**
     * Gets limit_speed
     *
     * @return int|null
     */
    public function getLimitSpeed()
    {
        return $this->container['limit_speed'];
    }

    /**
     * Sets limit_speed
     *
     * @param int|null $limit_speed Speed limit to send the campaign
     *
     * @return $this
     */
    public function setLimitSpeed($limit_speed)
    {

        if (!is_null($limit_speed) && ($limit_speed > 10)) {
            throw new \InvalidArgumentException('invalid value for $limit_speed when calling CampaignVoiceScheduleRequest., must be smaller than or equal to 10.');
        }
        if (!is_null($limit_speed) && ($limit_speed < 1)) {
            throw new \InvalidArgumentException('invalid value for $limit_speed when calling CampaignVoiceScheduleRequest., must be bigger than or equal to 1.');
        }

        $this->container['limit_speed'] = $limit_speed;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


