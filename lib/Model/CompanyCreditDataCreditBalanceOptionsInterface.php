<?php
/**
 * CompanyCreditDataCreditBalanceOptionsInterface
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
 * CompanyCreditDataCreditBalanceOptionsInterface Class Doc Comment
 *
 * @category    Class
 * @description Credit balance data transfer object interface.
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CompanyCreditDataCreditBalanceOptionsInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'company-credit-data-credit-balance-options-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'purchaseOrder' => 'string',
        'orderIncrement' => 'string',
        'currencyDisplay' => 'string',
        'currencyBase' => 'string'
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
        'purchaseOrder' => 'purchase_order',
        'orderIncrement' => 'order_increment',
        'currencyDisplay' => 'currency_display',
        'currencyBase' => 'currency_base'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'purchaseOrder' => 'setPurchaseOrder',
        'orderIncrement' => 'setOrderIncrement',
        'currencyDisplay' => 'setCurrencyDisplay',
        'currencyBase' => 'setCurrencyBase'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'purchaseOrder' => 'getPurchaseOrder',
        'orderIncrement' => 'getOrderIncrement',
        'currencyDisplay' => 'getCurrencyDisplay',
        'currencyBase' => 'getCurrencyBase'
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
        $this->container['purchaseOrder'] = isset($data['purchaseOrder']) ? $data['purchaseOrder'] : null;
        $this->container['orderIncrement'] = isset($data['orderIncrement']) ? $data['orderIncrement'] : null;
        $this->container['currencyDisplay'] = isset($data['currencyDisplay']) ? $data['currencyDisplay'] : null;
        $this->container['currencyBase'] = isset($data['currencyBase']) ? $data['currencyBase'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['purchaseOrder'] === null) {
            $invalid_properties[] = "'purchaseOrder' can't be null";
        }
        if ($this->container['orderIncrement'] === null) {
            $invalid_properties[] = "'orderIncrement' can't be null";
        }
        if ($this->container['currencyDisplay'] === null) {
            $invalid_properties[] = "'currencyDisplay' can't be null";
        }
        if ($this->container['currencyBase'] === null) {
            $invalid_properties[] = "'currencyBase' can't be null";
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

        if ($this->container['purchaseOrder'] === null) {
            return false;
        }
        if ($this->container['orderIncrement'] === null) {
            return false;
        }
        if ($this->container['currencyDisplay'] === null) {
            return false;
        }
        if ($this->container['currencyBase'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets purchaseOrder
     * @return string
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchaseOrder'];
    }

    /**
     * Sets purchaseOrder
     * @param string $purchaseOrder Purchase order number.
     * @return $this
     */
    public function setPurchaseOrder($purchaseOrder)
    {
        $this->container['purchaseOrder'] = $purchaseOrder;

        return $this;
    }

    /**
     * Gets orderIncrement
     * @return string
     */
    public function getOrderIncrement()
    {
        return $this->container['orderIncrement'];
    }

    /**
     * Sets orderIncrement
     * @param string $orderIncrement Order increment.
     * @return $this
     */
    public function setOrderIncrement($orderIncrement)
    {
        $this->container['orderIncrement'] = $orderIncrement;

        return $this;
    }

    /**
     * Gets currencyDisplay
     * @return string
     */
    public function getCurrencyDisplay()
    {
        return $this->container['currencyDisplay'];
    }

    /**
     * Sets currencyDisplay
     * @param string $currencyDisplay Currency display.
     * @return $this
     */
    public function setCurrencyDisplay($currencyDisplay)
    {
        $this->container['currencyDisplay'] = $currencyDisplay;

        return $this;
    }

    /**
     * Gets currencyBase
     * @return string
     */
    public function getCurrencyBase()
    {
        return $this->container['currencyBase'];
    }

    /**
     * Sets currencyBase
     * @param string $currencyBase Currency base.
     * @return $this
     */
    public function setCurrencyBase($currencyBase)
    {
        $this->container['currencyBase'] = $currencyBase;

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


