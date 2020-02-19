<?php
/**
 * WebPushReport
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
 * # Introduction Just a quick peek!!! This is our new version of API. Remember, it is not stable yet!!! But we invite you play with it and give us your feedback ;) # Getting Started  E-goi can be integrated with many environments and programming languages via our REST API. We've created a developer focused portal to give your organization a clear and quick overview of how to integrate with E-goi. The developer portal focuses on scenarios for integration and flow of events. We recommend familiarizing yourself with all of the content in the developer portal, before start using our rest API.   The E-goi  APIv3 is served over HTTPS. To ensure data privacy, unencrypted HTTP is not supported.  Request data is passed to the API by POSTing JSON objects to the API endpoints with the appropriate parameters.   BaseURL = api.egoiapp.com  # RESTful Services This API supports 5 HTTP methods:  * <b>GET</b>: The HTTP GET method is used to **read** (or retrieve) a representation of a resource. * <b>POST</b>: The POST verb is most-often utilized to **create** new resources. * <b>PATCH</b>: PATCH is used for **modify** capabilities. The PATCH request only needs to contain the changes to the resource, not the complete resource * <b>PUT</b>: PUT is most-often utilized for **update** capabilities, PUT-ing to a known resource URI with the request body containing the newly-updated representation of the original resource. * <b>DELETE</b>: DELETE is pretty easy to understand. It is used to **delete** a resource identified by a URI.  # Authentication   We use a custom authentication method, you will need a apikey that you can find in your account settings. Below you will see a curl example to get your account information:  #!/bin/bash  curl -X GET 'https://api.egoiapp.com/my-account' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>'  Here you can see a curl Post example with authentication:  #!/bin/bash  curl -X POST 'http://api.egoiapp.com/tags' \\  -H 'accept: application/json' \\  -H 'Apikey: <YOUR_APY_KEY>' \\  -H 'Content-Type: application/json' \\  -d '{`name`:`Your custom tag`,`color`:`#FFFFFF`}'  # SDK Get started quickly with E-goi with our integration tools. Our SDK is a modern open source library that makes it easy to integrate your application with E-goi services. * <b><a href='https://github.com/E-goi/sdk-java'>Java</a></b> * <b><a href='https://github.com/E-goi/sdk-php'>PHP</a></b> * <b><a href='https://github.com/E-goi/sdk-python'>Python</a></b>  <security-definitions/>
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
 * WebPushReport Class Doc Comment
 *
 * @category Class
 * @description Webpush report schema
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebPushReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebPushReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaign_hash' => 'string',
        'overall' => '\EgoiClient\EgoiModel\WebPushStats',
        'devices' => 'object[]',
        'operating_systems' => '\EgoiClient\EgoiModel\WebPushReportOperatingSystems[]',
        'browsers' => '\EgoiClient\EgoiModel\WebPushReportBrowsers[]',
        'url' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'campaign_hash' => null,
        'overall' => null,
        'devices' => null,
        'operating_systems' => null,
        'browsers' => null,
        'url' => null
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
        'overall' => 'overall',
        'devices' => 'devices',
        'operating_systems' => 'operating_systems',
        'browsers' => 'browsers',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_hash' => 'setCampaignHash',
        'overall' => 'setOverall',
        'devices' => 'setDevices',
        'operating_systems' => 'setOperatingSystems',
        'browsers' => 'setBrowsers',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_hash' => 'getCampaignHash',
        'overall' => 'getOverall',
        'devices' => 'getDevices',
        'operating_systems' => 'getOperatingSystems',
        'browsers' => 'getBrowsers',
        'url' => 'getUrl'
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
        $this->container['campaign_hash'] = isset($data['campaign_hash']) ? $data['campaign_hash'] : null;
        $this->container['overall'] = isset($data['overall']) ? $data['overall'] : null;
        $this->container['devices'] = isset($data['devices']) ? $data['devices'] : null;
        $this->container['operating_systems'] = isset($data['operating_systems']) ? $data['operating_systems'] : null;
        $this->container['browsers'] = isset($data['browsers']) ? $data['browsers'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
            throw new \InvalidArgumentException("invalid value for $campaign_hash when calling WebPushReport., must conform to the pattern /[a-zA-Z0-9_-]*/.");
        }

        $this->container['campaign_hash'] = $campaign_hash;

        return $this;
    }

    /**
     * Gets overall
     *
     * @return \EgoiClient\EgoiModel\WebPushStats|null
     */
    public function getOverall()
    {
        return $this->container['overall'];
    }

    /**
     * Sets overall
     *
     * @param \EgoiClient\EgoiModel\WebPushStats|null $overall overall
     *
     * @return $this
     */
    public function setOverall($overall)
    {
        $this->container['overall'] = $overall;

        return $this;
    }

    /**
     * Gets devices
     *
     * @return object[]|null
     */
    public function getDevices()
    {
        return $this->container['devices'];
    }

    /**
     * Sets devices
     *
     * @param object[]|null $devices Stats of the campaign for each device
     *
     * @return $this
     */
    public function setDevices($devices)
    {
        $this->container['devices'] = $devices;

        return $this;
    }

    /**
     * Gets operating_systems
     *
     * @return \EgoiClient\EgoiModel\WebPushReportOperatingSystems[]|null
     */
    public function getOperatingSystems()
    {
        return $this->container['operating_systems'];
    }

    /**
     * Sets operating_systems
     *
     * @param \EgoiClient\EgoiModel\WebPushReportOperatingSystems[]|null $operating_systems Stats of the campaign for each operating system
     *
     * @return $this
     */
    public function setOperatingSystems($operating_systems)
    {
        $this->container['operating_systems'] = $operating_systems;

        return $this;
    }

    /**
     * Gets browsers
     *
     * @return \EgoiClient\EgoiModel\WebPushReportBrowsers[]|null
     */
    public function getBrowsers()
    {
        return $this->container['browsers'];
    }

    /**
     * Sets browsers
     *
     * @param \EgoiClient\EgoiModel\WebPushReportBrowsers[]|null $browsers Stats of the campaign for each browser
     *
     * @return $this
     */
    public function setBrowsers($browsers)
    {
        $this->container['browsers'] = $browsers;

        return $this;
    }

    /**
     * Gets url
     *
     * @return object[]|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param object[]|null $url Stats of the campaign for each url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


