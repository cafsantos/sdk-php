<?php
/**
 * Campaign
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
 * Campaign Class Doc Comment
 *
 * @category Class
 * @description Campaign schema
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Campaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaign_hash' => 'string',
        'status' => 'string',
        'thumbnail' => 'string',
        'channel' => 'string',
        'internal_name' => 'string',
        'list_id' => 'int',
        'title' => 'string',
        'created_by' => 'int',
        'group_id' => 'int',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'schedule_date' => '\EgoiClient\EgoiModel\CampaignScheduleDate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'campaign_hash' => null,
        'status' => null,
        'thumbnail' => null,
        'channel' => null,
        'internal_name' => null,
        'list_id' => null,
        'title' => null,
        'created_by' => null,
        'group_id' => null,
        'created' => null,
        'updated' => null,
        'start_date' => null,
        'end_date' => null,
        'schedule_date' => null
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
        'campaign_hash' => 'campaign_hash',
        'status' => 'status',
        'thumbnail' => 'thumbnail',
        'channel' => 'channel',
        'internal_name' => 'internal_name',
        'list_id' => 'list_id',
        'title' => 'title',
        'created_by' => 'created_by',
        'group_id' => 'group_id',
        'created' => 'created',
        'updated' => 'updated',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'schedule_date' => 'schedule_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_hash' => 'setCampaignHash',
        'status' => 'setStatus',
        'thumbnail' => 'setThumbnail',
        'channel' => 'setChannel',
        'internal_name' => 'setInternalName',
        'list_id' => 'setListId',
        'title' => 'setTitle',
        'created_by' => 'setCreatedBy',
        'group_id' => 'setGroupId',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'schedule_date' => 'setScheduleDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_hash' => 'getCampaignHash',
        'status' => 'getStatus',
        'thumbnail' => 'getThumbnail',
        'channel' => 'getChannel',
        'internal_name' => 'getInternalName',
        'list_id' => 'getListId',
        'title' => 'getTitle',
        'created_by' => 'getCreatedBy',
        'group_id' => 'getGroupId',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
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

    const STATUS_DRAFT = 'draft';
    const STATUS_CANCELED = 'canceled';
    const STATUS_QUEUED = 'queued';
    const STATUS_PAUSED = 'paused';
    const STATUS_SENDING = 'sending';
    const STATUS_SENT = 'sent';
    const CHANNEL_EMAIL = 'email';
    const CHANNEL_PUSH = 'push';
    const CHANNEL_SMS = 'sms';
    const CHANNEL_SMART_SMS = 'smart_sms';
    const CHANNEL_VOICE = 'voice';
    const CHANNEL_WEB_PUSH = 'web_push';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_CANCELED,
            self::STATUS_QUEUED,
            self::STATUS_PAUSED,
            self::STATUS_SENDING,
            self::STATUS_SENT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChannelAllowableValues()
    {
        return [
            self::CHANNEL_EMAIL,
            self::CHANNEL_PUSH,
            self::CHANNEL_SMS,
            self::CHANNEL_SMART_SMS,
            self::CHANNEL_VOICE,
            self::CHANNEL_WEB_PUSH,
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
        $this->container['campaign_hash'] = isset($data['campaign_hash']) ? $data['campaign_hash'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['internal_name'] = isset($data['internal_name']) ? $data['internal_name'] : null;
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
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

        if (!is_null($this->container['campaign_hash']) && !preg_match("/[a-zA-Z0-9_-]*/", $this->container['campaign_hash'])) {
            $invalidProperties[] = "invalid value for 'campaign_hash', must be conform to the pattern /[a-zA-Z0-9_-]*/.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($this->container['channel']) && !in_array($this->container['channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'channel', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['list_id']) && ($this->container['list_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'list_id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['created_by']) && ($this->container['created_by'] < 1)) {
            $invalidProperties[] = "invalid value for 'created_by', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['group_id']) && ($this->container['group_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'group_id', must be bigger than or equal to 1.";
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
     * Gets campaign_hash
     *
     * @return string|null
     */
    public function getCampaignHash()
    {
        return $this->container['campaign_hash'];
    }

    /**
     * Sets campaign_hash
     *
     * @param string|null $campaign_hash campaign_hash
     *
     * @return $this
     */
    public function setCampaignHash($campaign_hash)
    {

        if (!is_null($campaign_hash) && (!preg_match("/[a-zA-Z0-9_-]*/", $campaign_hash))) {
            throw new \InvalidArgumentException("invalid value for $campaign_hash when calling Campaign., must conform to the pattern /[a-zA-Z0-9_-]*/.");
        }

        $this->container['campaign_hash'] = $campaign_hash;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the campaign
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return string|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param string|null $thumbnail Thumbnail of the campaign
     *
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel Channel of the campaign
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $allowedValues = $this->getChannelAllowableValues();
        if (!is_null($channel) && !in_array($channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'channel', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets internal_name
     *
     * @return string|null
     */
    public function getInternalName()
    {
        return $this->container['internal_name'];
    }

    /**
     * Sets internal_name
     *
     * @param string|null $internal_name Internal name of the campaign
     *
     * @return $this
     */
    public function setInternalName($internal_name)
    {
        $this->container['internal_name'] = $internal_name;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return int|null
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param int|null $list_id list_id
     *
     * @return $this
     */
    public function setListId($list_id)
    {

        if (!is_null($list_id) && ($list_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $list_id when calling Campaign., must be bigger than or equal to 1.');
        }

        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Subject of the campaign
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return int|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param int|null $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {

        if (!is_null($created_by) && ($created_by < 1)) {
            throw new \InvalidArgumentException('invalid value for $created_by when calling Campaign., must be bigger than or equal to 1.');
        }

        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int|null
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int|null $group_id group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {

        if (!is_null($group_id) && ($group_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $group_id when calling Campaign., must be bigger than or equal to 1.');
        }

        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets schedule_date
     *
     * @return \EgoiClient\EgoiModel\CampaignScheduleDate|null
     */
    public function getScheduleDate()
    {
        return $this->container['schedule_date'];
    }

    /**
     * Sets schedule_date
     *
     * @param \EgoiClient\EgoiModel\CampaignScheduleDate|null $schedule_date schedule_date
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


