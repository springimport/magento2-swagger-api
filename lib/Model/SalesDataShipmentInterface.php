<?php
/**
 * SalesDataShipmentInterface
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
 * SalesDataShipmentInterface Class Doc Comment
 *
 * @category    Class
 * @description Shipment interface. A shipment is a delivery package that contains products. A shipment document accompanies the shipment. This document lists the products and their quantities in the delivery package.
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesDataShipmentInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-shipment-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billingAddressId' => 'int',
        'createdAt' => 'string',
        'customerId' => 'int',
        'emailSent' => 'int',
        'entityId' => 'int',
        'incrementId' => 'string',
        'orderId' => 'int',
        'packages' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentPackageInterface[]',
        'shipmentStatus' => 'int',
        'shippingAddressId' => 'int',
        'shippingLabel' => 'string',
        'storeId' => 'int',
        'totalQty' => 'float',
        'totalWeight' => 'float',
        'updatedAt' => 'string',
        'items' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentItemInterface[]',
        'tracks' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentTrackInterface[]',
        'comments' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentCommentInterface[]',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentExtensionInterface'
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
        'billingAddressId' => 'billing_address_id',
        'createdAt' => 'created_at',
        'customerId' => 'customer_id',
        'emailSent' => 'email_sent',
        'entityId' => 'entity_id',
        'incrementId' => 'increment_id',
        'orderId' => 'order_id',
        'packages' => 'packages',
        'shipmentStatus' => 'shipment_status',
        'shippingAddressId' => 'shipping_address_id',
        'shippingLabel' => 'shipping_label',
        'storeId' => 'store_id',
        'totalQty' => 'total_qty',
        'totalWeight' => 'total_weight',
        'updatedAt' => 'updated_at',
        'items' => 'items',
        'tracks' => 'tracks',
        'comments' => 'comments',
        'extensionAttributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'billingAddressId' => 'setBillingAddressId',
        'createdAt' => 'setCreatedAt',
        'customerId' => 'setCustomerId',
        'emailSent' => 'setEmailSent',
        'entityId' => 'setEntityId',
        'incrementId' => 'setIncrementId',
        'orderId' => 'setOrderId',
        'packages' => 'setPackages',
        'shipmentStatus' => 'setShipmentStatus',
        'shippingAddressId' => 'setShippingAddressId',
        'shippingLabel' => 'setShippingLabel',
        'storeId' => 'setStoreId',
        'totalQty' => 'setTotalQty',
        'totalWeight' => 'setTotalWeight',
        'updatedAt' => 'setUpdatedAt',
        'items' => 'setItems',
        'tracks' => 'setTracks',
        'comments' => 'setComments',
        'extensionAttributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'billingAddressId' => 'getBillingAddressId',
        'createdAt' => 'getCreatedAt',
        'customerId' => 'getCustomerId',
        'emailSent' => 'getEmailSent',
        'entityId' => 'getEntityId',
        'incrementId' => 'getIncrementId',
        'orderId' => 'getOrderId',
        'packages' => 'getPackages',
        'shipmentStatus' => 'getShipmentStatus',
        'shippingAddressId' => 'getShippingAddressId',
        'shippingLabel' => 'getShippingLabel',
        'storeId' => 'getStoreId',
        'totalQty' => 'getTotalQty',
        'totalWeight' => 'getTotalWeight',
        'updatedAt' => 'getUpdatedAt',
        'items' => 'getItems',
        'tracks' => 'getTracks',
        'comments' => 'getComments',
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
        $this->container['billingAddressId'] = isset($data['billingAddressId']) ? $data['billingAddressId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['emailSent'] = isset($data['emailSent']) ? $data['emailSent'] : null;
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['incrementId'] = isset($data['incrementId']) ? $data['incrementId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['shipmentStatus'] = isset($data['shipmentStatus']) ? $data['shipmentStatus'] : null;
        $this->container['shippingAddressId'] = isset($data['shippingAddressId']) ? $data['shippingAddressId'] : null;
        $this->container['shippingLabel'] = isset($data['shippingLabel']) ? $data['shippingLabel'] : null;
        $this->container['storeId'] = isset($data['storeId']) ? $data['storeId'] : null;
        $this->container['totalQty'] = isset($data['totalQty']) ? $data['totalQty'] : null;
        $this->container['totalWeight'] = isset($data['totalWeight']) ? $data['totalWeight'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['tracks'] = isset($data['tracks']) ? $data['tracks'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
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

        if ($this->container['orderId'] === null) {
            $invalid_properties[] = "'orderId' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
        }
        if ($this->container['tracks'] === null) {
            $invalid_properties[] = "'tracks' can't be null";
        }
        if ($this->container['comments'] === null) {
            $invalid_properties[] = "'comments' can't be null";
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

        if ($this->container['orderId'] === null) {
            return false;
        }
        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['tracks'] === null) {
            return false;
        }
        if ($this->container['comments'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets billingAddressId
     * @return int
     */
    public function getBillingAddressId()
    {
        return $this->container['billingAddressId'];
    }

    /**
     * Sets billingAddressId
     * @param int $billingAddressId Billing address ID.
     * @return $this
     */
    public function setBillingAddressId($billingAddressId)
    {
        $this->container['billingAddressId'] = $billingAddressId;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt Created-at timestamp.
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets customerId
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     * @param int $customerId Customer ID.
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets emailSent
     * @return int
     */
    public function getEmailSent()
    {
        return $this->container['emailSent'];
    }

    /**
     * Sets emailSent
     * @param int $emailSent Email-sent flag value.
     * @return $this
     */
    public function setEmailSent($emailSent)
    {
        $this->container['emailSent'] = $emailSent;

        return $this;
    }

    /**
     * Gets entityId
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     * @param int $entityId Shipment ID.
     * @return $this
     */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets incrementId
     * @return string
     */
    public function getIncrementId()
    {
        return $this->container['incrementId'];
    }

    /**
     * Sets incrementId
     * @param string $incrementId Increment ID.
     * @return $this
     */
    public function setIncrementId($incrementId)
    {
        $this->container['incrementId'] = $incrementId;

        return $this;
    }

    /**
     * Gets orderId
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     * @param int $orderId Order ID.
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets packages
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentPackageInterface[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentPackageInterface[] $packages Array of packages, if any. Otherwise, null.
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets shipmentStatus
     * @return int
     */
    public function getShipmentStatus()
    {
        return $this->container['shipmentStatus'];
    }

    /**
     * Sets shipmentStatus
     * @param int $shipmentStatus Shipment status.
     * @return $this
     */
    public function setShipmentStatus($shipmentStatus)
    {
        $this->container['shipmentStatus'] = $shipmentStatus;

        return $this;
    }

    /**
     * Gets shippingAddressId
     * @return int
     */
    public function getShippingAddressId()
    {
        return $this->container['shippingAddressId'];
    }

    /**
     * Sets shippingAddressId
     * @param int $shippingAddressId Shipping address ID.
     * @return $this
     */
    public function setShippingAddressId($shippingAddressId)
    {
        $this->container['shippingAddressId'] = $shippingAddressId;

        return $this;
    }

    /**
     * Gets shippingLabel
     * @return string
     */
    public function getShippingLabel()
    {
        return $this->container['shippingLabel'];
    }

    /**
     * Sets shippingLabel
     * @param string $shippingLabel Shipping label.
     * @return $this
     */
    public function setShippingLabel($shippingLabel)
    {
        $this->container['shippingLabel'] = $shippingLabel;

        return $this;
    }

    /**
     * Gets storeId
     * @return int
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     * @param int $storeId Store ID.
     * @return $this
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets totalQty
     * @return float
     */
    public function getTotalQty()
    {
        return $this->container['totalQty'];
    }

    /**
     * Sets totalQty
     * @param float $totalQty Total quantity.
     * @return $this
     */
    public function setTotalQty($totalQty)
    {
        $this->container['totalQty'] = $totalQty;

        return $this;
    }

    /**
     * Gets totalWeight
     * @return float
     */
    public function getTotalWeight()
    {
        return $this->container['totalWeight'];
    }

    /**
     * Sets totalWeight
     * @param float $totalWeight Total weight.
     * @return $this
     */
    public function setTotalWeight($totalWeight)
    {
        $this->container['totalWeight'] = $totalWeight;

        return $this;
    }

    /**
     * Gets updatedAt
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     * @param string $updatedAt Updated-at timestamp.
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets items
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentItemInterface[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentItemInterface[] $items Array of items.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets tracks
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentTrackInterface[]
     */
    public function getTracks()
    {
        return $this->container['tracks'];
    }

    /**
     * Sets tracks
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentTrackInterface[] $tracks Array of tracks.
     * @return $this
     */
    public function setTracks($tracks)
    {
        $this->container['tracks'] = $tracks;

        return $this;
    }

    /**
     * Gets comments
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentCommentInterface[]
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentCommentInterface[] $comments Array of comments.
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\SalesDataShipmentExtensionInterface $extensionAttributes
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


