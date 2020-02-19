<?php
/**
 * HeaderFooterFooterLinks
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
 * HeaderFooterFooterLinks Class Doc Comment
 *
 * @category Class
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HeaderFooterFooterLinks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HeaderFooter_footer_links';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'forward' => 'bool',
        'view_web' => 'bool',
        'unsubscribe' => 'bool',
        'footer_links' => 'bool',
        'social_share' => 'bool',
        'facebook_share' => 'bool',
        'twitter_share' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'forward' => null,
        'view_web' => null,
        'unsubscribe' => null,
        'footer_links' => null,
        'social_share' => null,
        'facebook_share' => null,
        'twitter_share' => null
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
        'forward' => 'forward',
        'view_web' => 'view_web',
        'unsubscribe' => 'unsubscribe',
        'footer_links' => 'footer_links',
        'social_share' => 'social_share',
        'facebook_share' => 'facebook_share',
        'twitter_share' => 'twitter_share'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'forward' => 'setForward',
        'view_web' => 'setViewWeb',
        'unsubscribe' => 'setUnsubscribe',
        'footer_links' => 'setFooterLinks',
        'social_share' => 'setSocialShare',
        'facebook_share' => 'setFacebookShare',
        'twitter_share' => 'setTwitterShare'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'forward' => 'getForward',
        'view_web' => 'getViewWeb',
        'unsubscribe' => 'getUnsubscribe',
        'footer_links' => 'getFooterLinks',
        'social_share' => 'getSocialShare',
        'facebook_share' => 'getFacebookShare',
        'twitter_share' => 'getTwitterShare'
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
        $this->container['forward'] = isset($data['forward']) ? $data['forward'] : false;
        $this->container['view_web'] = isset($data['view_web']) ? $data['view_web'] : false;
        $this->container['unsubscribe'] = isset($data['unsubscribe']) ? $data['unsubscribe'] : false;
        $this->container['footer_links'] = isset($data['footer_links']) ? $data['footer_links'] : false;
        $this->container['social_share'] = isset($data['social_share']) ? $data['social_share'] : false;
        $this->container['facebook_share'] = isset($data['facebook_share']) ? $data['facebook_share'] : false;
        $this->container['twitter_share'] = isset($data['twitter_share']) ? $data['twitter_share'] : false;
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
     * Gets forward
     *
     * @return bool|null
     */
    public function getForward()
    {
        return $this->container['forward'];
    }

    /**
     * Sets forward
     *
     * @param bool|null $forward Use view forward footer link
     *
     * @return $this
     */
    public function setForward($forward)
    {
        $this->container['forward'] = $forward;

        return $this;
    }

    /**
     * Gets view_web
     *
     * @return bool|null
     */
    public function getViewWeb()
    {
        return $this->container['view_web'];
    }

    /**
     * Sets view_web
     *
     * @param bool|null $view_web Use view view in web footer link
     *
     * @return $this
     */
    public function setViewWeb($view_web)
    {
        $this->container['view_web'] = $view_web;

        return $this;
    }

    /**
     * Gets unsubscribe
     *
     * @return bool|null
     */
    public function getUnsubscribe()
    {
        return $this->container['unsubscribe'];
    }

    /**
     * Sets unsubscribe
     *
     * @param bool|null $unsubscribe Use view unsubscribe footer link
     *
     * @return $this
     */
    public function setUnsubscribe($unsubscribe)
    {
        $this->container['unsubscribe'] = $unsubscribe;

        return $this;
    }

    /**
     * Gets footer_links
     *
     * @return bool|null
     */
    public function getFooterLinks()
    {
        return $this->container['footer_links'];
    }

    /**
     * Sets footer_links
     *
     * @param bool|null $footer_links Use view edit footer link
     *
     * @return $this
     */
    public function setFooterLinks($footer_links)
    {
        $this->container['footer_links'] = $footer_links;

        return $this;
    }

    /**
     * Gets social_share
     *
     * @return bool|null
     */
    public function getSocialShare()
    {
        return $this->container['social_share'];
    }

    /**
     * Sets social_share
     *
     * @param bool|null $social_share Use view social share footer link
     *
     * @return $this
     */
    public function setSocialShare($social_share)
    {
        $this->container['social_share'] = $social_share;

        return $this;
    }

    /**
     * Gets facebook_share
     *
     * @return bool|null
     */
    public function getFacebookShare()
    {
        return $this->container['facebook_share'];
    }

    /**
     * Sets facebook_share
     *
     * @param bool|null $facebook_share Use view facebook share footer link
     *
     * @return $this
     */
    public function setFacebookShare($facebook_share)
    {
        $this->container['facebook_share'] = $facebook_share;

        return $this;
    }

    /**
     * Gets twitter_share
     *
     * @return bool|null
     */
    public function getTwitterShare()
    {
        return $this->container['twitter_share'];
    }

    /**
     * Sets twitter_share
     *
     * @param bool|null $twitter_share Use view twitter share footer link
     *
     * @return $this
     */
    public function setTwitterShare($twitter_share)
    {
        $this->container['twitter_share'] = $twitter_share;

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


