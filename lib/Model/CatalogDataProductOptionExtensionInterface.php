<?php
/**
 * CatalogDataProductOptionExtensionInterface
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
 * CatalogDataProductOptionExtensionInterface Class Doc Comment
 *
 * @category    Class
 * @description ExtensionInterface class for @see \\Magento\\Catalog\\Api\\Data\\ProductOptionInterface
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataProductOptionExtensionInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-product-option-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customOptions' => '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataCustomOptionInterface[]',
        'bundleOptions' => '\SpringImport\Swagger\Magento2\Client\Model\BundleDataBundleOptionInterface[]',
        'configurableItemOptions' => '\SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataConfigurableItemOptionValueInterface[]',
        'downloadableOption' => '\SpringImport\Swagger\Magento2\Client\Model\DownloadableDataDownloadableOptionInterface',
        'giftcardItemOption' => '\SpringImport\Swagger\Magento2\Client\Model\GiftCardDataGiftCardOptionInterface'
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
        'customOptions' => 'custom_options',
        'bundleOptions' => 'bundle_options',
        'configurableItemOptions' => 'configurable_item_options',
        'downloadableOption' => 'downloadable_option',
        'giftcardItemOption' => 'giftcard_item_option'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'customOptions' => 'setCustomOptions',
        'bundleOptions' => 'setBundleOptions',
        'configurableItemOptions' => 'setConfigurableItemOptions',
        'downloadableOption' => 'setDownloadableOption',
        'giftcardItemOption' => 'setGiftcardItemOption'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'customOptions' => 'getCustomOptions',
        'bundleOptions' => 'getBundleOptions',
        'configurableItemOptions' => 'getConfigurableItemOptions',
        'downloadableOption' => 'getDownloadableOption',
        'giftcardItemOption' => 'getGiftcardItemOption'
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
        $this->container['customOptions'] = isset($data['customOptions']) ? $data['customOptions'] : null;
        $this->container['bundleOptions'] = isset($data['bundleOptions']) ? $data['bundleOptions'] : null;
        $this->container['configurableItemOptions'] = isset($data['configurableItemOptions']) ? $data['configurableItemOptions'] : null;
        $this->container['downloadableOption'] = isset($data['downloadableOption']) ? $data['downloadableOption'] : null;
        $this->container['giftcardItemOption'] = isset($data['giftcardItemOption']) ? $data['giftcardItemOption'] : null;
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
     * Gets customOptions
     * @return \SpringImport\Swagger\Magento2\Client\Model\CatalogDataCustomOptionInterface[]
     */
    public function getCustomOptions()
    {
        return $this->container['customOptions'];
    }

    /**
     * Sets customOptions
     * @param \SpringImport\Swagger\Magento2\Client\Model\CatalogDataCustomOptionInterface[] $customOptions
     * @return $this
     */
    public function setCustomOptions($customOptions)
    {
        $this->container['customOptions'] = $customOptions;

        return $this;
    }

    /**
     * Gets bundleOptions
     * @return \SpringImport\Swagger\Magento2\Client\Model\BundleDataBundleOptionInterface[]
     */
    public function getBundleOptions()
    {
        return $this->container['bundleOptions'];
    }

    /**
     * Sets bundleOptions
     * @param \SpringImport\Swagger\Magento2\Client\Model\BundleDataBundleOptionInterface[] $bundleOptions
     * @return $this
     */
    public function setBundleOptions($bundleOptions)
    {
        $this->container['bundleOptions'] = $bundleOptions;

        return $this;
    }

    /**
     * Gets configurableItemOptions
     * @return \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataConfigurableItemOptionValueInterface[]
     */
    public function getConfigurableItemOptions()
    {
        return $this->container['configurableItemOptions'];
    }

    /**
     * Sets configurableItemOptions
     * @param \SpringImport\Swagger\Magento2\Client\Model\ConfigurableProductDataConfigurableItemOptionValueInterface[] $configurableItemOptions
     * @return $this
     */
    public function setConfigurableItemOptions($configurableItemOptions)
    {
        $this->container['configurableItemOptions'] = $configurableItemOptions;

        return $this;
    }

    /**
     * Gets downloadableOption
     * @return \SpringImport\Swagger\Magento2\Client\Model\DownloadableDataDownloadableOptionInterface
     */
    public function getDownloadableOption()
    {
        return $this->container['downloadableOption'];
    }

    /**
     * Sets downloadableOption
     * @param \SpringImport\Swagger\Magento2\Client\Model\DownloadableDataDownloadableOptionInterface $downloadableOption
     * @return $this
     */
    public function setDownloadableOption($downloadableOption)
    {
        $this->container['downloadableOption'] = $downloadableOption;

        return $this;
    }

    /**
     * Gets giftcardItemOption
     * @return \SpringImport\Swagger\Magento2\Client\Model\GiftCardDataGiftCardOptionInterface
     */
    public function getGiftcardItemOption()
    {
        return $this->container['giftcardItemOption'];
    }

    /**
     * Sets giftcardItemOption
     * @param \SpringImport\Swagger\Magento2\Client\Model\GiftCardDataGiftCardOptionInterface $giftcardItemOption
     * @return $this
     */
    public function setGiftcardItemOption($giftcardItemOption)
    {
        $this->container['giftcardItemOption'] = $giftcardItemOption;

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


