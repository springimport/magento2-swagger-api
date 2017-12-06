<?php
/**
 * TaxDataTaxRateInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B 2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SpringImport\Swagger\Magento2\Client\Model;

use \ArrayAccess;

/**
 * TaxDataTaxRateInterface Class Doc Comment
 *
 * @category    Class
 * @description Tax rate interface.
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaxDataTaxRateInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tax-data-tax-rate-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'taxCountryId' => 'string',
        'taxRegionId' => 'int',
        'regionName' => 'string',
        'taxPostcode' => 'string',
        'zipIsRange' => 'int',
        'zipFrom' => 'int',
        'zipTo' => 'int',
        'rate' => 'float',
        'code' => 'string',
        'titles' => '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateTitleInterface[]',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateExtensionInterface'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'taxCountryId' => 'tax_country_id',
        'taxRegionId' => 'tax_region_id',
        'regionName' => 'region_name',
        'taxPostcode' => 'tax_postcode',
        'zipIsRange' => 'zip_is_range',
        'zipFrom' => 'zip_from',
        'zipTo' => 'zip_to',
        'rate' => 'rate',
        'code' => 'code',
        'titles' => 'titles',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'taxCountryId' => 'setTaxCountryId',
        'taxRegionId' => 'setTaxRegionId',
        'regionName' => 'setRegionName',
        'taxPostcode' => 'setTaxPostcode',
        'zipIsRange' => 'setZipIsRange',
        'zipFrom' => 'setZipFrom',
        'zipTo' => 'setZipTo',
        'rate' => 'setRate',
        'code' => 'setCode',
        'titles' => 'setTitles',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'taxCountryId' => 'getTaxCountryId',
        'taxRegionId' => 'getTaxRegionId',
        'regionName' => 'getRegionName',
        'taxPostcode' => 'getTaxPostcode',
        'zipIsRange' => 'getZipIsRange',
        'zipFrom' => 'getZipFrom',
        'zipTo' => 'getZipTo',
        'rate' => 'getRate',
        'code' => 'getCode',
        'titles' => 'getTitles',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['taxCountryId'] = isset($data['taxCountryId']) ? $data['taxCountryId'] : null;
        $this->container['taxRegionId'] = isset($data['taxRegionId']) ? $data['taxRegionId'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['taxPostcode'] = isset($data['taxPostcode']) ? $data['taxPostcode'] : null;
        $this->container['zipIsRange'] = isset($data['zipIsRange']) ? $data['zipIsRange'] : null;
        $this->container['zipFrom'] = isset($data['zipFrom']) ? $data['zipFrom'] : null;
        $this->container['zipTo'] = isset($data['zipTo']) ? $data['zipTo'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['titles'] = isset($data['titles']) ? $data['titles'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['taxCountryId'] === null) {
            $invalid_properties[] = "'taxCountryId' can't be null";
        }
        if ($this->container['rate'] === null) {
            $invalid_properties[] = "'rate' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalid_properties[] = "'code' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['taxCountryId'] === null) {
            return false;
        }
        if ($this->container['rate'] === null) {
            return false;
        }
        if ($this->container['code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets taxCountryId
     * @return string
     */
    public function getTaxCountryId()
    {
        return $this->container['taxCountryId'];
    }

    /**
     * Sets taxCountryId
     * @param string $taxCountryId Country id
     * @return $this
     */
    public function setTaxCountryId($taxCountryId)
    {
        $this->container['taxCountryId'] = $taxCountryId;

        return $this;
    }

    /**
     * Gets taxRegionId
     * @return int
     */
    public function getTaxRegionId()
    {
        return $this->container['taxRegionId'];
    }

    /**
     * Sets taxRegionId
     * @param int $taxRegionId Region id
     * @return $this
     */
    public function setTaxRegionId($taxRegionId)
    {
        $this->container['taxRegionId'] = $taxRegionId;

        return $this;
    }

    /**
     * Gets regionName
     * @return string
     */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
     * Sets regionName
     * @param string $regionName Region name
     * @return $this
     */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;

        return $this;
    }

    /**
     * Gets taxPostcode
     * @return string
     */
    public function getTaxPostcode()
    {
        return $this->container['taxPostcode'];
    }

    /**
     * Sets taxPostcode
     * @param string $taxPostcode Postcode
     * @return $this
     */
    public function setTaxPostcode($taxPostcode)
    {
        $this->container['taxPostcode'] = $taxPostcode;

        return $this;
    }

    /**
     * Gets zipIsRange
     * @return int
     */
    public function getZipIsRange()
    {
        return $this->container['zipIsRange'];
    }

    /**
     * Sets zipIsRange
     * @param int $zipIsRange Zip is range
     * @return $this
     */
    public function setZipIsRange($zipIsRange)
    {
        $this->container['zipIsRange'] = $zipIsRange;

        return $this;
    }

    /**
     * Gets zipFrom
     * @return int
     */
    public function getZipFrom()
    {
        return $this->container['zipFrom'];
    }

    /**
     * Sets zipFrom
     * @param int $zipFrom Zip range from
     * @return $this
     */
    public function setZipFrom($zipFrom)
    {
        $this->container['zipFrom'] = $zipFrom;

        return $this;
    }

    /**
     * Gets zipTo
     * @return int
     */
    public function getZipTo()
    {
        return $this->container['zipTo'];
    }

    /**
     * Sets zipTo
     * @param int $zipTo Zip range to
     * @return $this
     */
    public function setZipTo($zipTo)
    {
        $this->container['zipTo'] = $zipTo;

        return $this;
    }

    /**
     * Gets rate
     * @return float
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     * @param float $rate Tax rate in percentage
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Tax rate code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets titles
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateTitleInterface[]
     */
    public function getTitles()
    {
        return $this->container['titles'];
    }

    /**
     * Sets titles
     * @param \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateTitleInterface[] $titles Tax rate titles
     * @return $this
     */
    public function setTitles($titles)
    {
        $this->container['titles'] = $titles;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SpringImport\Swagger\Magento2\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


