<?php
/**
 * ContactBaseWithStatusFieldsSchemaBase
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
 * ContactBaseWithStatusFieldsSchemaBase Class Doc Comment
 *
 * @category Class
 * @description Contact base fields
 * @package  EgoiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactBaseWithStatusFieldsSchemaBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactBaseWithStatusFieldsSchema_base';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_id' => 'string',
        'status' => 'string',
        'consent' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'birth_date' => '\DateTime',
        'language' => '\EgoiClient\EgoiModel\Language',
        'email' => 'string',
        'email_status' => 'string',
        'cellphone' => 'string',
        'cellphone_status' => 'string',
        'phone' => 'string',
        'phone_status' => 'string',
        'push_token_android' => '\EgoiClient\EgoiModel\ContactBaseWithStatusFieldsSchemaBasePushTokenAndroid[]',
        'push_token_ios' => '\EgoiClient\EgoiModel\ContactBaseWithStatusFieldsSchemaBasePushTokenIos[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contact_id' => null,
        'status' => null,
        'consent' => null,
        'first_name' => null,
        'last_name' => null,
        'birth_date' => 'date',
        'language' => null,
        'email' => null,
        'email_status' => null,
        'cellphone' => null,
        'cellphone_status' => null,
        'phone' => null,
        'phone_status' => null,
        'push_token_android' => null,
        'push_token_ios' => null
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
        'contact_id' => 'contact_id',
        'status' => 'status',
        'consent' => 'consent',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'birth_date' => 'birth_date',
        'language' => 'language',
        'email' => 'email',
        'email_status' => 'email_status',
        'cellphone' => 'cellphone',
        'cellphone_status' => 'cellphone_status',
        'phone' => 'phone',
        'phone_status' => 'phone_status',
        'push_token_android' => 'push_token_android',
        'push_token_ios' => 'push_token_ios'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'status' => 'setStatus',
        'consent' => 'setConsent',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'birth_date' => 'setBirthDate',
        'language' => 'setLanguage',
        'email' => 'setEmail',
        'email_status' => 'setEmailStatus',
        'cellphone' => 'setCellphone',
        'cellphone_status' => 'setCellphoneStatus',
        'phone' => 'setPhone',
        'phone_status' => 'setPhoneStatus',
        'push_token_android' => 'setPushTokenAndroid',
        'push_token_ios' => 'setPushTokenIos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'status' => 'getStatus',
        'consent' => 'getConsent',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'birth_date' => 'getBirthDate',
        'language' => 'getLanguage',
        'email' => 'getEmail',
        'email_status' => 'getEmailStatus',
        'cellphone' => 'getCellphone',
        'cellphone_status' => 'getCellphoneStatus',
        'phone' => 'getPhone',
        'phone_status' => 'getPhoneStatus',
        'push_token_android' => 'getPushTokenAndroid',
        'push_token_ios' => 'getPushTokenIos'
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

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_REMOVED = 'removed';
    const STATUS_UNCONFIRMED = 'unconfirmed';
    const CONSENT_ANY = 'any';
    const CONSENT_CONSENT = 'consent';
    const CONSENT_CONTRACT = 'contract';
    const CONSENT_LEGITIMATE_INTEREST = 'legitimate_interest';
    const CONSENT_NONE = 'none';
    const CONSENT_PROTECT_VITAL_INTERESTS = 'protect_vital_interests';
    const CONSENT_PUBLIC_INTERESTS = 'public_interests';
    const CONSENT_REQUIRED_BY_LAW = 'required_by_law';
    const CONSENT_WITHDRAWN = 'withdrawn';
    const EMAIL_STATUS_ACTIVE = 'active';
    const EMAIL_STATUS_INACTIVE = 'inactive';
    const CELLPHONE_STATUS_ACTIVE = 'active';
    const CELLPHONE_STATUS_INACTIVE = 'inactive';
    const PHONE_STATUS_ACTIVE = 'active';
    const PHONE_STATUS_INACTIVE = 'inactive';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_REMOVED,
            self::STATUS_UNCONFIRMED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConsentAllowableValues()
    {
        return [
            self::CONSENT_ANY,
            self::CONSENT_CONSENT,
            self::CONSENT_CONTRACT,
            self::CONSENT_LEGITIMATE_INTEREST,
            self::CONSENT_NONE,
            self::CONSENT_PROTECT_VITAL_INTERESTS,
            self::CONSENT_PUBLIC_INTERESTS,
            self::CONSENT_REQUIRED_BY_LAW,
            self::CONSENT_WITHDRAWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmailStatusAllowableValues()
    {
        return [
            self::EMAIL_STATUS_ACTIVE,
            self::EMAIL_STATUS_INACTIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCellphoneStatusAllowableValues()
    {
        return [
            self::CELLPHONE_STATUS_ACTIVE,
            self::CELLPHONE_STATUS_INACTIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPhoneStatusAllowableValues()
    {
        return [
            self::PHONE_STATUS_ACTIVE,
            self::PHONE_STATUS_INACTIVE,
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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'active';
        $this->container['consent'] = isset($data['consent']) ? $data['consent'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['birth_date'] = isset($data['birth_date']) ? $data['birth_date'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_status'] = isset($data['email_status']) ? $data['email_status'] : null;
        $this->container['cellphone'] = isset($data['cellphone']) ? $data['cellphone'] : null;
        $this->container['cellphone_status'] = isset($data['cellphone_status']) ? $data['cellphone_status'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['phone_status'] = isset($data['phone_status']) ? $data['phone_status'] : null;
        $this->container['push_token_android'] = isset($data['push_token_android']) ? $data['push_token_android'] : null;
        $this->container['push_token_ios'] = isset($data['push_token_ios']) ? $data['push_token_ios'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['contact_id']) && !preg_match("/[a-fA-F\\d]{10}/", $this->container['contact_id'])) {
            $invalidProperties[] = "invalid value for 'contact_id', must be conform to the pattern /[a-fA-F\\d]{10}/.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConsentAllowableValues();
        if (!is_null($this->container['consent']) && !in_array($this->container['consent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'consent', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEmailStatusAllowableValues();
        if (!is_null($this->container['email_status']) && !in_array($this->container['email_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'email_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCellphoneStatusAllowableValues();
        if (!is_null($this->container['cellphone_status']) && !in_array($this->container['cellphone_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'cellphone_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPhoneStatusAllowableValues();
        if (!is_null($this->container['phone_status']) && !in_array($this->container['phone_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'phone_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id contact_id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {

        if (!is_null($contact_id) && (!preg_match("/[a-fA-F\\d]{10}/", $contact_id))) {
            throw new \InvalidArgumentException("invalid value for $contact_id when calling ContactBaseWithStatusFieldsSchemaBase., must conform to the pattern /[a-fA-F\\d]{10}/.");
        }

        $this->container['contact_id'] = $contact_id;

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
     * @param string|null $status Status of the contact
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
     * Gets consent
     *
     * @return string|null
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param string|null $consent Contact consent
     *
     * @return $this
     */
    public function setConsent($consent)
    {
        $allowedValues = $this->getConsentAllowableValues();
        if (!is_null($consent) && !in_array($consent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'consent', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name of the contact
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
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name of the contact
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return \DateTime|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param \DateTime|null $birth_date Birth date of the contact
     *
     * @return $this
     */
    public function setBirthDate($birth_date)
    {
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \EgoiClient\EgoiModel\Language|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \EgoiClient\EgoiModel\Language|null $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email of the contact
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_status
     *
     * @return string|null
     */
    public function getEmailStatus()
    {
        return $this->container['email_status'];
    }

    /**
     * Sets email_status
     *
     * @param string|null $email_status Email channel status
     *
     * @return $this
     */
    public function setEmailStatus($email_status)
    {
        $allowedValues = $this->getEmailStatusAllowableValues();
        if (!is_null($email_status) && !in_array($email_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'email_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['email_status'] = $email_status;

        return $this;
    }

    /**
     * Gets cellphone
     *
     * @return string|null
     */
    public function getCellphone()
    {
        return $this->container['cellphone'];
    }

    /**
     * Sets cellphone
     *
     * @param string|null $cellphone Cellphone of the contact
     *
     * @return $this
     */
    public function setCellphone($cellphone)
    {
        $this->container['cellphone'] = $cellphone;

        return $this;
    }

    /**
     * Gets cellphone_status
     *
     * @return string|null
     */
    public function getCellphoneStatus()
    {
        return $this->container['cellphone_status'];
    }

    /**
     * Sets cellphone_status
     *
     * @param string|null $cellphone_status Cellphone channel status
     *
     * @return $this
     */
    public function setCellphoneStatus($cellphone_status)
    {
        $allowedValues = $this->getCellphoneStatusAllowableValues();
        if (!is_null($cellphone_status) && !in_array($cellphone_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'cellphone_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cellphone_status'] = $cellphone_status;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Phone of the contact
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets phone_status
     *
     * @return string|null
     */
    public function getPhoneStatus()
    {
        return $this->container['phone_status'];
    }

    /**
     * Sets phone_status
     *
     * @param string|null $phone_status Phone channel status
     *
     * @return $this
     */
    public function setPhoneStatus($phone_status)
    {
        $allowedValues = $this->getPhoneStatusAllowableValues();
        if (!is_null($phone_status) && !in_array($phone_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'phone_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['phone_status'] = $phone_status;

        return $this;
    }

    /**
     * Gets push_token_android
     *
     * @return \EgoiClient\EgoiModel\ContactBaseWithStatusFieldsSchemaBasePushTokenAndroid[]|null
     */
    public function getPushTokenAndroid()
    {
        return $this->container['push_token_android'];
    }

    /**
     * Sets push_token_android
     *
     * @param \EgoiClient\EgoiModel\ContactBaseWithStatusFieldsSchemaBasePushTokenAndroid[]|null $push_token_android Android push token of the contact
     *
     * @return $this
     */
    public function setPushTokenAndroid($push_token_android)
    {
        $this->container['push_token_android'] = $push_token_android;

        return $this;
    }

    /**
     * Gets push_token_ios
     *
     * @return \EgoiClient\EgoiModel\ContactBaseWithStatusFieldsSchemaBasePushTokenIos[]|null
     */
    public function getPushTokenIos()
    {
        return $this->container['push_token_ios'];
    }

    /**
     * Sets push_token_ios
     *
     * @param \EgoiClient\EgoiModel\ContactBaseWithStatusFieldsSchemaBasePushTokenIos[]|null $push_token_ios IOS push token of the contact
     *
     * @return $this
     */
    public function setPushTokenIos($push_token_ios)
    {
        $this->container['push_token_ios'] = $push_token_ios;

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


