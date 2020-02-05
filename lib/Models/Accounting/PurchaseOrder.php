<?php
/**
 * PurchaseOrder
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
 * PurchaseOrder Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchaseOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchaseOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact' => '\XeroAPI\XeroPHP\Models\Accounting\Contact',
        'line_items' => '\XeroAPI\XeroPHP\Models\Accounting\LineItem[]',
        'date' => '\DateTime',
        'delivery_date' => '\DateTime',
        'line_amount_types' => '\XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes',
        'purchase_order_number' => 'string',
        'reference' => 'string',
        'branding_theme_id' => 'string',
        'currency_code' => '\XeroAPI\XeroPHP\Models\Accounting\CurrencyCode',
        'status' => 'string',
        'sent_to_contact' => 'bool',
        'delivery_address' => 'string',
        'attention_to' => 'string',
        'telephone' => 'string',
        'delivery_instructions' => 'string',
        'expected_arrival_date' => '\DateTime',
        'purchase_order_id' => 'string',
        'currency_rate' => 'double',
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'total_discount' => 'double',
        'has_attachments' => 'bool',
        'updated_date_utc' => '\DateTime',
        'status_attribute_string' => 'string',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'warnings' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'attachments' => '\XeroAPI\XeroPHP\Models\Accounting\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contact' => null,
        'line_items' => null,
        'date' => 'date',
        'delivery_date' => 'date',
        'line_amount_types' => null,
        'purchase_order_number' => null,
        'reference' => null,
        'branding_theme_id' => 'uuid',
        'currency_code' => null,
        'status' => null,
        'sent_to_contact' => null,
        'delivery_address' => null,
        'attention_to' => null,
        'telephone' => null,
        'delivery_instructions' => null,
        'expected_arrival_date' => 'date',
        'purchase_order_id' => 'uuid',
        'currency_rate' => 'double',
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'total_discount' => 'double',
        'has_attachments' => null,
        'updated_date_utc' => 'date-time',
        'status_attribute_string' => null,
        'validation_errors' => null,
        'warnings' => null,
        'attachments' => null
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
        'contact' => 'Contact',
        'line_items' => 'LineItems',
        'date' => 'Date',
        'delivery_date' => 'DeliveryDate',
        'line_amount_types' => 'LineAmountTypes',
        'purchase_order_number' => 'PurchaseOrderNumber',
        'reference' => 'Reference',
        'branding_theme_id' => 'BrandingThemeID',
        'currency_code' => 'CurrencyCode',
        'status' => 'Status',
        'sent_to_contact' => 'SentToContact',
        'delivery_address' => 'DeliveryAddress',
        'attention_to' => 'AttentionTo',
        'telephone' => 'Telephone',
        'delivery_instructions' => 'DeliveryInstructions',
        'expected_arrival_date' => 'ExpectedArrivalDate',
        'purchase_order_id' => 'PurchaseOrderID',
        'currency_rate' => 'CurrencyRate',
        'sub_total' => 'SubTotal',
        'total_tax' => 'TotalTax',
        'total' => 'Total',
        'total_discount' => 'TotalDiscount',
        'has_attachments' => 'HasAttachments',
        'updated_date_utc' => 'UpdatedDateUTC',
        'status_attribute_string' => 'StatusAttributeString',
        'validation_errors' => 'ValidationErrors',
        'warnings' => 'Warnings',
        'attachments' => 'Attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
        'line_items' => 'setLineItems',
        'date' => 'setDate',
        'delivery_date' => 'setDeliveryDate',
        'line_amount_types' => 'setLineAmountTypes',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'reference' => 'setReference',
        'branding_theme_id' => 'setBrandingThemeId',
        'currency_code' => 'setCurrencyCode',
        'status' => 'setStatus',
        'sent_to_contact' => 'setSentToContact',
        'delivery_address' => 'setDeliveryAddress',
        'attention_to' => 'setAttentionTo',
        'telephone' => 'setTelephone',
        'delivery_instructions' => 'setDeliveryInstructions',
        'expected_arrival_date' => 'setExpectedArrivalDate',
        'purchase_order_id' => 'setPurchaseOrderId',
        'currency_rate' => 'setCurrencyRate',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'total_discount' => 'setTotalDiscount',
        'has_attachments' => 'setHasAttachments',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'status_attribute_string' => 'setStatusAttributeString',
        'validation_errors' => 'setValidationErrors',
        'warnings' => 'setWarnings',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
        'line_items' => 'getLineItems',
        'date' => 'getDate',
        'delivery_date' => 'getDeliveryDate',
        'line_amount_types' => 'getLineAmountTypes',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'reference' => 'getReference',
        'branding_theme_id' => 'getBrandingThemeId',
        'currency_code' => 'getCurrencyCode',
        'status' => 'getStatus',
        'sent_to_contact' => 'getSentToContact',
        'delivery_address' => 'getDeliveryAddress',
        'attention_to' => 'getAttentionTo',
        'telephone' => 'getTelephone',
        'delivery_instructions' => 'getDeliveryInstructions',
        'expected_arrival_date' => 'getExpectedArrivalDate',
        'purchase_order_id' => 'getPurchaseOrderId',
        'currency_rate' => 'getCurrencyRate',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'total_discount' => 'getTotalDiscount',
        'has_attachments' => 'getHasAttachments',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'status_attribute_string' => 'getStatusAttributeString',
        'validation_errors' => 'getValidationErrors',
        'warnings' => 'getWarnings',
        'attachments' => 'getAttachments'
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

    const STATUS_DRAFT = 'DRAFT';
    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_BILLED = 'BILLED';
    const STATUS_DELETED = 'DELETED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_SUBMITTED,
            self::STATUS_AUTHORISED,
            self::STATUS_BILLED,
            self::STATUS_DELETED,
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['line_amount_types'] = isset($data['line_amount_types']) ? $data['line_amount_types'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['branding_theme_id'] = isset($data['branding_theme_id']) ? $data['branding_theme_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sent_to_contact'] = isset($data['sent_to_contact']) ? $data['sent_to_contact'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['attention_to'] = isset($data['attention_to']) ? $data['attention_to'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['delivery_instructions'] = isset($data['delivery_instructions']) ? $data['delivery_instructions'] : null;
        $this->container['expected_arrival_date'] = isset($data['expected_arrival_date']) ? $data['expected_arrival_date'] : null;
        $this->container['purchase_order_id'] = isset($data['purchase_order_id']) ? $data['purchase_order_id'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_discount'] = isset($data['total_discount']) ? $data['total_discount'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['status_attribute_string'] = isset($data['status_attribute_string']) ? $data['status_attribute_string'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets contact
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Contact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Contact|null $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\LineItem[]|null $line_items See LineItems
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date Date purchase order was issued – YYYY-MM-DD. If the Date element is not specified then it will default to the current date based on the timezone setting of the organisation
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime|null $delivery_date Date the goods are to be delivered – YYYY-MM-DD
     *
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets line_amount_types
     *
     * @return string|null
     */
    public function getLineAmountTypes()
    {
        return $this->container['line_amount_types'];
    }

    /**
     * Sets line_amount_types
     *
     * @param string|null $line_amount_types line_amount_types
     *
     * @return $this
     */
    public function setLineAmountTypes($line_amount_types)
    {
        $this->container['line_amount_types'] = $line_amount_types;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string|null
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string|null $purchase_order_number Unique alpha numeric code identifying purchase order (when missing will auto-generate from your Organisation Invoice Settings)
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Additional reference number
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets branding_theme_id
     *
     * @return string|null
     */
    public function getBrandingThemeId()
    {
        return $this->container['branding_theme_id'];
    }

    /**
     * Sets branding_theme_id
     *
     * @param string|null $branding_theme_id See BrandingThemes
     *
     * @return $this
     */
    public function setBrandingThemeId($branding_theme_id)
    {
        $this->container['branding_theme_id'] = $branding_theme_id;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

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
     * @param string|null $status See Purchase Order Status Codes
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
     * Gets sent_to_contact
     *
     * @return bool|null
     */
    public function getSentToContact()
    {
        return $this->container['sent_to_contact'];
    }

    /**
     * Sets sent_to_contact
     *
     * @param bool|null $sent_to_contact Boolean to set whether the purchase order should be marked as “sent”. This can be set only on purchase orders that have been approved or billed
     *
     * @return $this
     */
    public function setSentToContact($sent_to_contact)
    {
        $this->container['sent_to_contact'] = $sent_to_contact;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return string|null
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param string|null $delivery_address The address the goods are to be delivered to
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets attention_to
     *
     * @return string|null
     */
    public function getAttentionTo()
    {
        return $this->container['attention_to'];
    }

    /**
     * Sets attention_to
     *
     * @param string|null $attention_to The person that the delivery is going to
     *
     * @return $this
     */
    public function setAttentionTo($attention_to)
    {
        $this->container['attention_to'] = $attention_to;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone The phone number for the person accepting the delivery
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets delivery_instructions
     *
     * @return string|null
     */
    public function getDeliveryInstructions()
    {
        return $this->container['delivery_instructions'];
    }

    /**
     * Sets delivery_instructions
     *
     * @param string|null $delivery_instructions A free text feild for instructions (500 characters max)
     *
     * @return $this
     */
    public function setDeliveryInstructions($delivery_instructions)
    {
        $this->container['delivery_instructions'] = $delivery_instructions;

        return $this;
    }

    /**
     * Gets expected_arrival_date
     *
     * @return \DateTime|null
     */
    public function getExpectedArrivalDate()
    {
        return $this->container['expected_arrival_date'];
    }

    /**
     * Sets expected_arrival_date
     *
     * @param \DateTime|null $expected_arrival_date The date the goods are expected to arrive.
     *
     * @return $this
     */
    public function setExpectedArrivalDate($expected_arrival_date)
    {
        $this->container['expected_arrival_date'] = $expected_arrival_date;

        return $this;
    }

    /**
     * Gets purchase_order_id
     *
     * @return string|null
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchase_order_id'];
    }

    /**
     * Sets purchase_order_id
     *
     * @param string|null $purchase_order_id Xero generated unique identifier for purchase order
     *
     * @return $this
     */
    public function setPurchaseOrderId($purchase_order_id)
    {
        $this->container['purchase_order_id'] = $purchase_order_id;

        return $this;
    }

    /**
     * Gets currency_rate
     *
     * @return double|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param double|null $currency_rate The currency rate for a multicurrency purchase order. If no rate is specified, the XE.com day rate is used.
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {
        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return double|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param double|null $sub_total Total of purchase order excluding taxes
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return double|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param double|null $total_tax Total tax on purchase order
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total Total of Purchase Order tax inclusive (i.e. SubTotal + TotalTax)
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return double|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param double|null $total_discount Total of discounts applied on the purchase order line items
     *
     * @return $this
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets has_attachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->container['has_attachments'];
    }

    /**
     * Sets has_attachments
     *
     * @param bool|null $has_attachments boolean to indicate if a purchase order has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {
        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }

    /**
     * Gets updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }

    /**
     * Sets updated_date_utc
     *
     * @param \DateTime|null $updated_date_utc Last modified date UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {
        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }

    /**
     * Gets status_attribute_string
     *
     * @return string|null
     */
    public function getStatusAttributeString()
    {
        return $this->container['status_attribute_string'];
    }

    /**
     * Sets status_attribute_string
     *
     * @param string|null $status_attribute_string A string to indicate if a invoice status
     *
     * @return $this
     */
    public function setStatusAttributeString($status_attribute_string)
    {
        $this->container['status_attribute_string'] = $status_attribute_string;

        return $this;
    }

    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {
        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $warnings Displays array of warning messages from the API
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null $attachments Displays array of attachments from the API
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

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


