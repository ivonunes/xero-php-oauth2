<?php
/**
 * JournalLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.0.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;

/**
 * JournalLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JournalLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JournalLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'journal_line_id' => 'string',
        'account_id' => 'string',
        'account_code' => 'string',
        'account_type' => '\XeroAPI\XeroPHP\Models\Accounting\AccountType',
        'account_name' => 'string',
        'description' => 'string',
        'net_amount' => 'double',
        'gross_amount' => 'double',
        'tax_amount' => 'double',
        'tax_type' => 'string',
        'tax_name' => 'string',
        'tracking_categories' => '\XeroAPI\XeroPHP\Models\Accounting\TrackingCategory[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'journal_line_id' => 'uuid',
        'account_id' => 'uuid',
        'account_code' => null,
        'account_type' => null,
        'account_name' => null,
        'description' => null,
        'net_amount' => 'double',
        'gross_amount' => 'double',
        'tax_amount' => 'double',
        'tax_type' => null,
        'tax_name' => null,
        'tracking_categories' => null
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
        'journal_line_id' => 'JournalLineID',
        'account_id' => 'AccountID',
        'account_code' => 'AccountCode',
        'account_type' => 'AccountType',
        'account_name' => 'AccountName',
        'description' => 'Description',
        'net_amount' => 'NetAmount',
        'gross_amount' => 'GrossAmount',
        'tax_amount' => 'TaxAmount',
        'tax_type' => 'TaxType',
        'tax_name' => 'TaxName',
        'tracking_categories' => 'TrackingCategories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'journal_line_id' => 'setJournalLineId',
        'account_id' => 'setAccountId',
        'account_code' => 'setAccountCode',
        'account_type' => 'setAccountType',
        'account_name' => 'setAccountName',
        'description' => 'setDescription',
        'net_amount' => 'setNetAmount',
        'gross_amount' => 'setGrossAmount',
        'tax_amount' => 'setTaxAmount',
        'tax_type' => 'setTaxType',
        'tax_name' => 'setTaxName',
        'tracking_categories' => 'setTrackingCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'journal_line_id' => 'getJournalLineId',
        'account_id' => 'getAccountId',
        'account_code' => 'getAccountCode',
        'account_type' => 'getAccountType',
        'account_name' => 'getAccountName',
        'description' => 'getDescription',
        'net_amount' => 'getNetAmount',
        'gross_amount' => 'getGrossAmount',
        'tax_amount' => 'getTaxAmount',
        'tax_type' => 'getTaxType',
        'tax_name' => 'getTaxName',
        'tracking_categories' => 'getTrackingCategories'
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
        $this->container['journal_line_id'] = isset($data['journal_line_id']) ? $data['journal_line_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['gross_amount'] = isset($data['gross_amount']) ? $data['gross_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['tax_name'] = isset($data['tax_name']) ? $data['tax_name'] : null;
        $this->container['tracking_categories'] = isset($data['tracking_categories']) ? $data['tracking_categories'] : null;
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
     * Gets journal_line_id
     *
     * @return string|null
     */
    public function getJournalLineId()
    {
        return $this->container['journal_line_id'];
    }

    /**
     * Sets journal_line_id
     *
     * @param string|null $journal_line_id Xero identifier for Journal
     *
     * @return $this
     */
    public function setJournalLineId($journal_line_id)
    {
        $this->container['journal_line_id'] = $journal_line_id;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id See Accounts
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_code
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string|null $account_code See Accounts
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {
        $this->container['account_code'] = $account_code;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type account_type
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name See AccountCodes
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description from the source transaction line item. Only returned if populated.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return double|null
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param double|null $net_amount Net amount of journal line. This will be a positive value for a debit and negative for a credit
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets gross_amount
     *
     * @return double|null
     */
    public function getGrossAmount()
    {
        return $this->container['gross_amount'];
    }

    /**
     * Sets gross_amount
     *
     * @param double|null $gross_amount Gross amount of journal line (NetAmount + TaxAmount).
     *
     * @return $this
     */
    public function setGrossAmount($gross_amount)
    {
        $this->container['gross_amount'] = $gross_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double|null $tax_amount Total tax on a journal line
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type The tax type from TaxRates
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets tax_name
     *
     * @return string|null
     */
    public function getTaxName()
    {
        return $this->container['tax_name'];
    }

    /**
     * Sets tax_name
     *
     * @param string|null $tax_name see TaxRates
     *
     * @return $this
     */
    public function setTaxName($tax_name)
    {
        $this->container['tax_name'] = $tax_name;

        return $this;
    }

    /**
     * Gets tracking_categories
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\TrackingCategory[]|null
     */
    public function getTrackingCategories()
    {
        return $this->container['tracking_categories'];
    }

    /**
     * Sets tracking_categories
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\TrackingCategory[]|null $tracking_categories Optional Tracking Category – see Tracking. Any JournalLine can have a maximum of 2 <TrackingCategory> elements.
     *
     * @return $this
     */
    public function setTrackingCategories($tracking_categories)
    {
        $this->container['tracking_categories'] = $tracking_categories;

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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


