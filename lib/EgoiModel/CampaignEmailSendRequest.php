<?php
/**
 * CampaignEmailSendRequest
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
 * CampaignEmailSendRequest Class Doc Comment
 *
 * @category Class
 * @description Campaign email send request schema
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignEmailSendRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignEmailSendRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'list_id' => 'int',
        'segments' => '\EgoiClient\EgoiModel\EmailSendSegment',
        'notify' => 'int[]',
        'destination_field' => 'string',
        'unique_contacts_only' => 'bool',
        'schedule_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'list_id' => null,
        'segments' => null,
        'notify' => null,
        'destination_field' => null,
        'unique_contacts_only' => null,
        'schedule_date' => 'date-time'
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
        'list_id' => 'list_id',
        'segments' => 'segments',
        'notify' => 'notify',
        'destination_field' => 'destination_field',
        'unique_contacts_only' => 'unique_contacts_only',
        'schedule_date' => 'schedule_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'list_id' => 'setListId',
        'segments' => 'setSegments',
        'notify' => 'setNotify',
        'destination_field' => 'setDestinationField',
        'unique_contacts_only' => 'setUniqueContactsOnly',
        'schedule_date' => 'setScheduleDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'list_id' => 'getListId',
        'segments' => 'getSegments',
        'notify' => 'getNotify',
        'destination_field' => 'getDestinationField',
        'unique_contacts_only' => 'getUniqueContactsOnly',
        'schedule_date' => 'getScheduleDate'
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
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['notify'] = isset($data['notify']) ? $data['notify'] : null;
        $this->container['destination_field'] = isset($data['destination_field']) ? $data['destination_field'] : null;
        $this->container['unique_contacts_only'] = isset($data['unique_contacts_only']) ? $data['unique_contacts_only'] : false;
        $this->container['schedule_date'] = isset($data['schedule_date']) ? $data['schedule_date'] : null;
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
            throw new \InvalidArgumentException('invalid value for $list_id when calling CampaignEmailSendRequest., must be bigger than or equal to 1.');
        }

        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \EgoiClient\EgoiModel\EmailSendSegment
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \EgoiClient\EgoiModel\EmailSendSegment $segments segments
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
     * @return string|null
     */
    public function getDestinationField()
    {
        return $this->container['destination_field'];
    }

    /**
     * Sets destination_field
     *
     * @param string|null $destination_field Destination field of this campaign, which must be an email field (email or extra field id).                         If not sent, defaults to the general email field
     *
     * @return $this
     */
    public function setDestinationField($destination_field)
    {
        $this->container['destination_field'] = $destination_field;

        return $this;
    }

    /**
     * Gets unique_contacts_only
     *
     * @return bool|null
     */
    public function getUniqueContactsOnly()
    {
        return $this->container['unique_contacts_only'];
    }

    /**
     * Sets unique_contacts_only
     *
     * @param bool|null $unique_contacts_only True to send the campaign only to unique contacts
     *
     * @return $this
     */
    public function setUniqueContactsOnly($unique_contacts_only)
    {
        $this->container['unique_contacts_only'] = $unique_contacts_only;

        return $this;
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


