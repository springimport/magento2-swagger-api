<?php
/**
 * SalesDataCreditmemoExtensionInterface
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
 * SalesDataCreditmemoExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\Sales\\Api\\Data\\CreditmemoInterface
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataCreditmemoExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-creditmemo-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'baseCustomerBalanceAmount' => 'float',
        'customerBalanceAmount' => 'float',
        'baseGiftCardsAmount' => 'float',
        'giftCardsAmount' => 'float',
        'gwBasePrice' => 'string',
        'gwPrice' => 'string',
        'gwItemsBasePrice' => 'string',
        'gwItemsPrice' => 'string',
        'gwCardBasePrice' => 'string',
        'gwCardPrice' => 'string',
        'gwBaseTaxAmount' => 'string',
        'gwTaxAmount' => 'string',
        'gwItemsBaseTaxAmount' => 'string',
        'gwItemsTaxAmount' => 'string',
        'gwCardBaseTaxAmount' => 'string',
        'gwCardTaxAmount' => 'string'
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
        'baseCustomerBalanceAmount' => 'base_customer_balance_amount',
        'customerBalanceAmount' => 'customer_balance_amount',
        'baseGiftCardsAmount' => 'base_gift_cards_amount',
        'giftCardsAmount' => 'gift_cards_amount',
        'gwBasePrice' => 'gw_base_price',
        'gwPrice' => 'gw_price',
        'gwItemsBasePrice' => 'gw_items_base_price',
        'gwItemsPrice' => 'gw_items_price',
        'gwCardBasePrice' => 'gw_card_base_price',
        'gwCardPrice' => 'gw_card_price',
        'gwBaseTaxAmount' => 'gw_base_tax_amount',
        'gwTaxAmount' => 'gw_tax_amount',
        'gwItemsBaseTaxAmount' => 'gw_items_base_tax_amount',
        'gwItemsTaxAmount' => 'gw_items_tax_amount',
        'gwCardBaseTaxAmount' => 'gw_card_base_tax_amount',
        'gwCardTaxAmount' => 'gw_card_tax_amount'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'baseCustomerBalanceAmount' => 'setBaseCustomerBalanceAmount',
        'customerBalanceAmount' => 'setCustomerBalanceAmount',
        'baseGiftCardsAmount' => 'setBaseGiftCardsAmount',
        'giftCardsAmount' => 'setGiftCardsAmount',
        'gwBasePrice' => 'setGwBasePrice',
        'gwPrice' => 'setGwPrice',
        'gwItemsBasePrice' => 'setGwItemsBasePrice',
        'gwItemsPrice' => 'setGwItemsPrice',
        'gwCardBasePrice' => 'setGwCardBasePrice',
        'gwCardPrice' => 'setGwCardPrice',
        'gwBaseTaxAmount' => 'setGwBaseTaxAmount',
        'gwTaxAmount' => 'setGwTaxAmount',
        'gwItemsBaseTaxAmount' => 'setGwItemsBaseTaxAmount',
        'gwItemsTaxAmount' => 'setGwItemsTaxAmount',
        'gwCardBaseTaxAmount' => 'setGwCardBaseTaxAmount',
        'gwCardTaxAmount' => 'setGwCardTaxAmount'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'baseCustomerBalanceAmount' => 'getBaseCustomerBalanceAmount',
        'customerBalanceAmount' => 'getCustomerBalanceAmount',
        'baseGiftCardsAmount' => 'getBaseGiftCardsAmount',
        'giftCardsAmount' => 'getGiftCardsAmount',
        'gwBasePrice' => 'getGwBasePrice',
        'gwPrice' => 'getGwPrice',
        'gwItemsBasePrice' => 'getGwItemsBasePrice',
        'gwItemsPrice' => 'getGwItemsPrice',
        'gwCardBasePrice' => 'getGwCardBasePrice',
        'gwCardPrice' => 'getGwCardPrice',
        'gwBaseTaxAmount' => 'getGwBaseTaxAmount',
        'gwTaxAmount' => 'getGwTaxAmount',
        'gwItemsBaseTaxAmount' => 'getGwItemsBaseTaxAmount',
        'gwItemsTaxAmount' => 'getGwItemsTaxAmount',
        'gwCardBaseTaxAmount' => 'getGwCardBaseTaxAmount',
        'gwCardTaxAmount' => 'getGwCardTaxAmount'
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
        $this->container['baseCustomerBalanceAmount'] = isset($data['baseCustomerBalanceAmount']) ? $data['baseCustomerBalanceAmount'] : null;
        $this->container['customerBalanceAmount'] = isset($data['customerBalanceAmount']) ? $data['customerBalanceAmount'] : null;
        $this->container['baseGiftCardsAmount'] = isset($data['baseGiftCardsAmount']) ? $data['baseGiftCardsAmount'] : null;
        $this->container['giftCardsAmount'] = isset($data['giftCardsAmount']) ? $data['giftCardsAmount'] : null;
        $this->container['gwBasePrice'] = isset($data['gwBasePrice']) ? $data['gwBasePrice'] : null;
        $this->container['gwPrice'] = isset($data['gwPrice']) ? $data['gwPrice'] : null;
        $this->container['gwItemsBasePrice'] = isset($data['gwItemsBasePrice']) ? $data['gwItemsBasePrice'] : null;
        $this->container['gwItemsPrice'] = isset($data['gwItemsPrice']) ? $data['gwItemsPrice'] : null;
        $this->container['gwCardBasePrice'] = isset($data['gwCardBasePrice']) ? $data['gwCardBasePrice'] : null;
        $this->container['gwCardPrice'] = isset($data['gwCardPrice']) ? $data['gwCardPrice'] : null;
        $this->container['gwBaseTaxAmount'] = isset($data['gwBaseTaxAmount']) ? $data['gwBaseTaxAmount'] : null;
        $this->container['gwTaxAmount'] = isset($data['gwTaxAmount']) ? $data['gwTaxAmount'] : null;
        $this->container['gwItemsBaseTaxAmount'] = isset($data['gwItemsBaseTaxAmount']) ? $data['gwItemsBaseTaxAmount'] : null;
        $this->container['gwItemsTaxAmount'] = isset($data['gwItemsTaxAmount']) ? $data['gwItemsTaxAmount'] : null;
        $this->container['gwCardBaseTaxAmount'] = isset($data['gwCardBaseTaxAmount']) ? $data['gwCardBaseTaxAmount'] : null;
        $this->container['gwCardTaxAmount'] = isset($data['gwCardTaxAmount']) ? $data['gwCardTaxAmount'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets baseCustomerBalanceAmount
     * @return float
     */
    public function getBaseCustomerBalanceAmount()
    {
        return $this->container['baseCustomerBalanceAmount'];
    }

    /**
     * Sets baseCustomerBalanceAmount
     * @param float $baseCustomerBalanceAmount
     * @return $this
     */
    public function setBaseCustomerBalanceAmount($baseCustomerBalanceAmount)
    {
        $this->container['baseCustomerBalanceAmount'] = $baseCustomerBalanceAmount;

        return $this;
    }

    /**
     * Gets customerBalanceAmount
     * @return float
     */
    public function getCustomerBalanceAmount()
    {
        return $this->container['customerBalanceAmount'];
    }

    /**
     * Sets customerBalanceAmount
     * @param float $customerBalanceAmount
     * @return $this
     */
    public function setCustomerBalanceAmount($customerBalanceAmount)
    {
        $this->container['customerBalanceAmount'] = $customerBalanceAmount;

        return $this;
    }

    /**
     * Gets baseGiftCardsAmount
     * @return float
     */
    public function getBaseGiftCardsAmount()
    {
        return $this->container['baseGiftCardsAmount'];
    }

    /**
     * Sets baseGiftCardsAmount
     * @param float $baseGiftCardsAmount
     * @return $this
     */
    public function setBaseGiftCardsAmount($baseGiftCardsAmount)
    {
        $this->container['baseGiftCardsAmount'] = $baseGiftCardsAmount;

        return $this;
    }

    /**
     * Gets giftCardsAmount
     * @return float
     */
    public function getGiftCardsAmount()
    {
        return $this->container['giftCardsAmount'];
    }

    /**
     * Sets giftCardsAmount
     * @param float $giftCardsAmount
     * @return $this
     */
    public function setGiftCardsAmount($giftCardsAmount)
    {
        $this->container['giftCardsAmount'] = $giftCardsAmount;

        return $this;
    }

    /**
     * Gets gwBasePrice
     * @return string
     */
    public function getGwBasePrice()
    {
        return $this->container['gwBasePrice'];
    }

    /**
     * Sets gwBasePrice
     * @param string $gwBasePrice
     * @return $this
     */
    public function setGwBasePrice($gwBasePrice)
    {
        $this->container['gwBasePrice'] = $gwBasePrice;

        return $this;
    }

    /**
     * Gets gwPrice
     * @return string
     */
    public function getGwPrice()
    {
        return $this->container['gwPrice'];
    }

    /**
     * Sets gwPrice
     * @param string $gwPrice
     * @return $this
     */
    public function setGwPrice($gwPrice)
    {
        $this->container['gwPrice'] = $gwPrice;

        return $this;
    }

    /**
     * Gets gwItemsBasePrice
     * @return string
     */
    public function getGwItemsBasePrice()
    {
        return $this->container['gwItemsBasePrice'];
    }

    /**
     * Sets gwItemsBasePrice
     * @param string $gwItemsBasePrice
     * @return $this
     */
    public function setGwItemsBasePrice($gwItemsBasePrice)
    {
        $this->container['gwItemsBasePrice'] = $gwItemsBasePrice;

        return $this;
    }

    /**
     * Gets gwItemsPrice
     * @return string
     */
    public function getGwItemsPrice()
    {
        return $this->container['gwItemsPrice'];
    }

    /**
     * Sets gwItemsPrice
     * @param string $gwItemsPrice
     * @return $this
     */
    public function setGwItemsPrice($gwItemsPrice)
    {
        $this->container['gwItemsPrice'] = $gwItemsPrice;

        return $this;
    }

    /**
     * Gets gwCardBasePrice
     * @return string
     */
    public function getGwCardBasePrice()
    {
        return $this->container['gwCardBasePrice'];
    }

    /**
     * Sets gwCardBasePrice
     * @param string $gwCardBasePrice
     * @return $this
     */
    public function setGwCardBasePrice($gwCardBasePrice)
    {
        $this->container['gwCardBasePrice'] = $gwCardBasePrice;

        return $this;
    }

    /**
     * Gets gwCardPrice
     * @return string
     */
    public function getGwCardPrice()
    {
        return $this->container['gwCardPrice'];
    }

    /**
     * Sets gwCardPrice
     * @param string $gwCardPrice
     * @return $this
     */
    public function setGwCardPrice($gwCardPrice)
    {
        $this->container['gwCardPrice'] = $gwCardPrice;

        return $this;
    }

    /**
     * Gets gwBaseTaxAmount
     * @return string
     */
    public function getGwBaseTaxAmount()
    {
        return $this->container['gwBaseTaxAmount'];
    }

    /**
     * Sets gwBaseTaxAmount
     * @param string $gwBaseTaxAmount
     * @return $this
     */
    public function setGwBaseTaxAmount($gwBaseTaxAmount)
    {
        $this->container['gwBaseTaxAmount'] = $gwBaseTaxAmount;

        return $this;
    }

    /**
     * Gets gwTaxAmount
     * @return string
     */
    public function getGwTaxAmount()
    {
        return $this->container['gwTaxAmount'];
    }

    /**
     * Sets gwTaxAmount
     * @param string $gwTaxAmount
     * @return $this
     */
    public function setGwTaxAmount($gwTaxAmount)
    {
        $this->container['gwTaxAmount'] = $gwTaxAmount;

        return $this;
    }

    /**
     * Gets gwItemsBaseTaxAmount
     * @return string
     */
    public function getGwItemsBaseTaxAmount()
    {
        return $this->container['gwItemsBaseTaxAmount'];
    }

    /**
     * Sets gwItemsBaseTaxAmount
     * @param string $gwItemsBaseTaxAmount
     * @return $this
     */
    public function setGwItemsBaseTaxAmount($gwItemsBaseTaxAmount)
    {
        $this->container['gwItemsBaseTaxAmount'] = $gwItemsBaseTaxAmount;

        return $this;
    }

    /**
     * Gets gwItemsTaxAmount
     * @return string
     */
    public function getGwItemsTaxAmount()
    {
        return $this->container['gwItemsTaxAmount'];
    }

    /**
     * Sets gwItemsTaxAmount
     * @param string $gwItemsTaxAmount
     * @return $this
     */
    public function setGwItemsTaxAmount($gwItemsTaxAmount)
    {
        $this->container['gwItemsTaxAmount'] = $gwItemsTaxAmount;

        return $this;
    }

    /**
     * Gets gwCardBaseTaxAmount
     * @return string
     */
    public function getGwCardBaseTaxAmount()
    {
        return $this->container['gwCardBaseTaxAmount'];
    }

    /**
     * Sets gwCardBaseTaxAmount
     * @param string $gwCardBaseTaxAmount
     * @return $this
     */
    public function setGwCardBaseTaxAmount($gwCardBaseTaxAmount)
    {
        $this->container['gwCardBaseTaxAmount'] = $gwCardBaseTaxAmount;

        return $this;
    }

    /**
     * Gets gwCardTaxAmount
     * @return string
     */
    public function getGwCardTaxAmount()
    {
        return $this->container['gwCardTaxAmount'];
    }

    /**
     * Sets gwCardTaxAmount
     * @param string $gwCardTaxAmount
     * @return $this
     */
    public function setGwCardTaxAmount($gwCardTaxAmount)
    {
        $this->container['gwCardTaxAmount'] = $gwCardTaxAmount;

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


