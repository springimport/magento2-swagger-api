<?php
/**
 * CatalogDataCategoryAttributeInterface
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
 * CatalogDataCategoryAttributeInterface Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     SpringImport\Swagger\Magento2\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CatalogDataCategoryAttributeInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'catalog-data-category-attribute-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'isWysiwygEnabled' => 'bool',
        'isHtmlAllowedOnFront' => 'bool',
        'usedForSortBy' => 'bool',
        'isFilterable' => 'bool',
        'isFilterableInSearch' => 'bool',
        'isUsedInGrid' => 'bool',
        'isVisibleInGrid' => 'bool',
        'isFilterableInGrid' => 'bool',
        'position' => 'int',
        'applyTo' => 'string[]',
        'isSearchable' => 'string',
        'isVisibleInAdvancedSearch' => 'string',
        'isComparable' => 'string',
        'isUsedForPromoRules' => 'string',
        'isVisibleOnFront' => 'string',
        'usedInProductListing' => 'string',
        'isVisible' => 'bool',
        'scope' => 'string',
        'extensionAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataEavAttributeExtensionInterface',
        'attributeId' => 'int',
        'attributeCode' => 'string',
        'frontendInput' => 'string',
        'entityTypeId' => 'string',
        'isRequired' => 'bool',
        'options' => '\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeOptionInterface[]',
        'isUserDefined' => 'bool',
        'defaultFrontendLabel' => 'string',
        'frontendLabels' => '\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeFrontendLabelInterface[]',
        'note' => 'string',
        'backendType' => 'string',
        'backendModel' => 'string',
        'sourceModel' => 'string',
        'defaultValue' => 'string',
        'isUnique' => 'string',
        'frontendClass' => 'string',
        'validationRules' => '\SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeValidationRuleInterface[]',
        'customAttributes' => '\SpringImport\Swagger\Magento2\Client\Model\FrameworkAttributeInterface[]'
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
        'isWysiwygEnabled' => 'is_wysiwyg_enabled',
        'isHtmlAllowedOnFront' => 'is_html_allowed_on_front',
        'usedForSortBy' => 'used_for_sort_by',
        'isFilterable' => 'is_filterable',
        'isFilterableInSearch' => 'is_filterable_in_search',
        'isUsedInGrid' => 'is_used_in_grid',
        'isVisibleInGrid' => 'is_visible_in_grid',
        'isFilterableInGrid' => 'is_filterable_in_grid',
        'position' => 'position',
        'applyTo' => 'apply_to',
        'isSearchable' => 'is_searchable',
        'isVisibleInAdvancedSearch' => 'is_visible_in_advanced_search',
        'isComparable' => 'is_comparable',
        'isUsedForPromoRules' => 'is_used_for_promo_rules',
        'isVisibleOnFront' => 'is_visible_on_front',
        'usedInProductListing' => 'used_in_product_listing',
        'isVisible' => 'is_visible',
        'scope' => 'scope',
        'extensionAttributes' => 'extension_attributes',
        'attributeId' => 'attribute_id',
        'attributeCode' => 'attribute_code',
        'frontendInput' => 'frontend_input',
        'entityTypeId' => 'entity_type_id',
        'isRequired' => 'is_required',
        'options' => 'options',
        'isUserDefined' => 'is_user_defined',
        'defaultFrontendLabel' => 'default_frontend_label',
        'frontendLabels' => 'frontend_labels',
        'note' => 'note',
        'backendType' => 'backend_type',
        'backendModel' => 'backend_model',
        'sourceModel' => 'source_model',
        'defaultValue' => 'default_value',
        'isUnique' => 'is_unique',
        'frontendClass' => 'frontend_class',
        'validationRules' => 'validation_rules',
        'customAttributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'isWysiwygEnabled' => 'setIsWysiwygEnabled',
        'isHtmlAllowedOnFront' => 'setIsHtmlAllowedOnFront',
        'usedForSortBy' => 'setUsedForSortBy',
        'isFilterable' => 'setIsFilterable',
        'isFilterableInSearch' => 'setIsFilterableInSearch',
        'isUsedInGrid' => 'setIsUsedInGrid',
        'isVisibleInGrid' => 'setIsVisibleInGrid',
        'isFilterableInGrid' => 'setIsFilterableInGrid',
        'position' => 'setPosition',
        'applyTo' => 'setApplyTo',
        'isSearchable' => 'setIsSearchable',
        'isVisibleInAdvancedSearch' => 'setIsVisibleInAdvancedSearch',
        'isComparable' => 'setIsComparable',
        'isUsedForPromoRules' => 'setIsUsedForPromoRules',
        'isVisibleOnFront' => 'setIsVisibleOnFront',
        'usedInProductListing' => 'setUsedInProductListing',
        'isVisible' => 'setIsVisible',
        'scope' => 'setScope',
        'extensionAttributes' => 'setExtensionAttributes',
        'attributeId' => 'setAttributeId',
        'attributeCode' => 'setAttributeCode',
        'frontendInput' => 'setFrontendInput',
        'entityTypeId' => 'setEntityTypeId',
        'isRequired' => 'setIsRequired',
        'options' => 'setOptions',
        'isUserDefined' => 'setIsUserDefined',
        'defaultFrontendLabel' => 'setDefaultFrontendLabel',
        'frontendLabels' => 'setFrontendLabels',
        'note' => 'setNote',
        'backendType' => 'setBackendType',
        'backendModel' => 'setBackendModel',
        'sourceModel' => 'setSourceModel',
        'defaultValue' => 'setDefaultValue',
        'isUnique' => 'setIsUnique',
        'frontendClass' => 'setFrontendClass',
        'validationRules' => 'setValidationRules',
        'customAttributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'isWysiwygEnabled' => 'getIsWysiwygEnabled',
        'isHtmlAllowedOnFront' => 'getIsHtmlAllowedOnFront',
        'usedForSortBy' => 'getUsedForSortBy',
        'isFilterable' => 'getIsFilterable',
        'isFilterableInSearch' => 'getIsFilterableInSearch',
        'isUsedInGrid' => 'getIsUsedInGrid',
        'isVisibleInGrid' => 'getIsVisibleInGrid',
        'isFilterableInGrid' => 'getIsFilterableInGrid',
        'position' => 'getPosition',
        'applyTo' => 'getApplyTo',
        'isSearchable' => 'getIsSearchable',
        'isVisibleInAdvancedSearch' => 'getIsVisibleInAdvancedSearch',
        'isComparable' => 'getIsComparable',
        'isUsedForPromoRules' => 'getIsUsedForPromoRules',
        'isVisibleOnFront' => 'getIsVisibleOnFront',
        'usedInProductListing' => 'getUsedInProductListing',
        'isVisible' => 'getIsVisible',
        'scope' => 'getScope',
        'extensionAttributes' => 'getExtensionAttributes',
        'attributeId' => 'getAttributeId',
        'attributeCode' => 'getAttributeCode',
        'frontendInput' => 'getFrontendInput',
        'entityTypeId' => 'getEntityTypeId',
        'isRequired' => 'getIsRequired',
        'options' => 'getOptions',
        'isUserDefined' => 'getIsUserDefined',
        'defaultFrontendLabel' => 'getDefaultFrontendLabel',
        'frontendLabels' => 'getFrontendLabels',
        'note' => 'getNote',
        'backendType' => 'getBackendType',
        'backendModel' => 'getBackendModel',
        'sourceModel' => 'getSourceModel',
        'defaultValue' => 'getDefaultValue',
        'isUnique' => 'getIsUnique',
        'frontendClass' => 'getFrontendClass',
        'validationRules' => 'getValidationRules',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['isWysiwygEnabled'] = isset($data['isWysiwygEnabled']) ? $data['isWysiwygEnabled'] : null;
        $this->container['isHtmlAllowedOnFront'] = isset($data['isHtmlAllowedOnFront']) ? $data['isHtmlAllowedOnFront'] : null;
        $this->container['usedForSortBy'] = isset($data['usedForSortBy']) ? $data['usedForSortBy'] : null;
        $this->container['isFilterable'] = isset($data['isFilterable']) ? $data['isFilterable'] : null;
        $this->container['isFilterableInSearch'] = isset($data['isFilterableInSearch']) ? $data['isFilterableInSearch'] : null;
        $this->container['isUsedInGrid'] = isset($data['isUsedInGrid']) ? $data['isUsedInGrid'] : null;
        $this->container['isVisibleInGrid'] = isset($data['isVisibleInGrid']) ? $data['isVisibleInGrid'] : null;
        $this->container['isFilterableInGrid'] = isset($data['isFilterableInGrid']) ? $data['isFilterableInGrid'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['applyTo'] = isset($data['applyTo']) ? $data['applyTo'] : null;
        $this->container['isSearchable'] = isset($data['isSearchable']) ? $data['isSearchable'] : null;
        $this->container['isVisibleInAdvancedSearch'] = isset($data['isVisibleInAdvancedSearch']) ? $data['isVisibleInAdvancedSearch'] : null;
        $this->container['isComparable'] = isset($data['isComparable']) ? $data['isComparable'] : null;
        $this->container['isUsedForPromoRules'] = isset($data['isUsedForPromoRules']) ? $data['isUsedForPromoRules'] : null;
        $this->container['isVisibleOnFront'] = isset($data['isVisibleOnFront']) ? $data['isVisibleOnFront'] : null;
        $this->container['usedInProductListing'] = isset($data['usedInProductListing']) ? $data['usedInProductListing'] : null;
        $this->container['isVisible'] = isset($data['isVisible']) ? $data['isVisible'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['attributeId'] = isset($data['attributeId']) ? $data['attributeId'] : null;
        $this->container['attributeCode'] = isset($data['attributeCode']) ? $data['attributeCode'] : null;
        $this->container['frontendInput'] = isset($data['frontendInput']) ? $data['frontendInput'] : null;
        $this->container['entityTypeId'] = isset($data['entityTypeId']) ? $data['entityTypeId'] : null;
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['isUserDefined'] = isset($data['isUserDefined']) ? $data['isUserDefined'] : null;
        $this->container['defaultFrontendLabel'] = isset($data['defaultFrontendLabel']) ? $data['defaultFrontendLabel'] : null;
        $this->container['frontendLabels'] = isset($data['frontendLabels']) ? $data['frontendLabels'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['backendType'] = isset($data['backendType']) ? $data['backendType'] : null;
        $this->container['backendModel'] = isset($data['backendModel']) ? $data['backendModel'] : null;
        $this->container['sourceModel'] = isset($data['sourceModel']) ? $data['sourceModel'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['isUnique'] = isset($data['isUnique']) ? $data['isUnique'] : null;
        $this->container['frontendClass'] = isset($data['frontendClass']) ? $data['frontendClass'] : null;
        $this->container['validationRules'] = isset($data['validationRules']) ? $data['validationRules'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['attributeCode'] === null) {
            $invalid_properties[] = "'attributeCode' can't be null";
        }
        if ($this->container['frontendInput'] === null) {
            $invalid_properties[] = "'frontendInput' can't be null";
        }
        if ($this->container['entityTypeId'] === null) {
            $invalid_properties[] = "'entityTypeId' can't be null";
        }
        if ($this->container['isRequired'] === null) {
            $invalid_properties[] = "'isRequired' can't be null";
        }
        if ($this->container['frontendLabels'] === null) {
            $invalid_properties[] = "'frontendLabels' can't be null";
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

        if ($this->container['attributeCode'] === null) {
            return false;
        }
        if ($this->container['frontendInput'] === null) {
            return false;
        }
        if ($this->container['entityTypeId'] === null) {
            return false;
        }
        if ($this->container['isRequired'] === null) {
            return false;
        }
        if ($this->container['frontendLabels'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets isWysiwygEnabled
     * @return bool
     */
    public function getIsWysiwygEnabled()
    {
        return $this->container['isWysiwygEnabled'];
    }

    /**
     * Sets isWysiwygEnabled
     * @param bool $isWysiwygEnabled WYSIWYG flag
     * @return $this
     */
    public function setIsWysiwygEnabled($isWysiwygEnabled)
    {
        $this->container['isWysiwygEnabled'] = $isWysiwygEnabled;

        return $this;
    }

    /**
     * Gets isHtmlAllowedOnFront
     * @return bool
     */
    public function getIsHtmlAllowedOnFront()
    {
        return $this->container['isHtmlAllowedOnFront'];
    }

    /**
     * Sets isHtmlAllowedOnFront
     * @param bool $isHtmlAllowedOnFront The HTML tags are allowed on the frontend
     * @return $this
     */
    public function setIsHtmlAllowedOnFront($isHtmlAllowedOnFront)
    {
        $this->container['isHtmlAllowedOnFront'] = $isHtmlAllowedOnFront;

        return $this;
    }

    /**
     * Gets usedForSortBy
     * @return bool
     */
    public function getUsedForSortBy()
    {
        return $this->container['usedForSortBy'];
    }

    /**
     * Sets usedForSortBy
     * @param bool $usedForSortBy It is used for sorting in product listing
     * @return $this
     */
    public function setUsedForSortBy($usedForSortBy)
    {
        $this->container['usedForSortBy'] = $usedForSortBy;

        return $this;
    }

    /**
     * Gets isFilterable
     * @return bool
     */
    public function getIsFilterable()
    {
        return $this->container['isFilterable'];
    }

    /**
     * Sets isFilterable
     * @param bool $isFilterable It used in layered navigation
     * @return $this
     */
    public function setIsFilterable($isFilterable)
    {
        $this->container['isFilterable'] = $isFilterable;

        return $this;
    }

    /**
     * Gets isFilterableInSearch
     * @return bool
     */
    public function getIsFilterableInSearch()
    {
        return $this->container['isFilterableInSearch'];
    }

    /**
     * Sets isFilterableInSearch
     * @param bool $isFilterableInSearch It is used in search results layered navigation
     * @return $this
     */
    public function setIsFilterableInSearch($isFilterableInSearch)
    {
        $this->container['isFilterableInSearch'] = $isFilterableInSearch;

        return $this;
    }

    /**
     * Gets isUsedInGrid
     * @return bool
     */
    public function getIsUsedInGrid()
    {
        return $this->container['isUsedInGrid'];
    }

    /**
     * Sets isUsedInGrid
     * @param bool $isUsedInGrid It is used in catalog product grid
     * @return $this
     */
    public function setIsUsedInGrid($isUsedInGrid)
    {
        $this->container['isUsedInGrid'] = $isUsedInGrid;

        return $this;
    }

    /**
     * Gets isVisibleInGrid
     * @return bool
     */
    public function getIsVisibleInGrid()
    {
        return $this->container['isVisibleInGrid'];
    }

    /**
     * Sets isVisibleInGrid
     * @param bool $isVisibleInGrid It is visible in catalog product grid
     * @return $this
     */
    public function setIsVisibleInGrid($isVisibleInGrid)
    {
        $this->container['isVisibleInGrid'] = $isVisibleInGrid;

        return $this;
    }

    /**
     * Gets isFilterableInGrid
     * @return bool
     */
    public function getIsFilterableInGrid()
    {
        return $this->container['isFilterableInGrid'];
    }

    /**
     * Sets isFilterableInGrid
     * @param bool $isFilterableInGrid It is filterable in catalog product grid
     * @return $this
     */
    public function setIsFilterableInGrid($isFilterableInGrid)
    {
        $this->container['isFilterableInGrid'] = $isFilterableInGrid;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position Position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets applyTo
     * @return string[]
     */
    public function getApplyTo()
    {
        return $this->container['applyTo'];
    }

    /**
     * Sets applyTo
     * @param string[] $applyTo Apply to value for the element
     * @return $this
     */
    public function setApplyTo($applyTo)
    {
        $this->container['applyTo'] = $applyTo;

        return $this;
    }

    /**
     * Gets isSearchable
     * @return string
     */
    public function getIsSearchable()
    {
        return $this->container['isSearchable'];
    }

    /**
     * Sets isSearchable
     * @param string $isSearchable The attribute can be used in Quick Search
     * @return $this
     */
    public function setIsSearchable($isSearchable)
    {
        $this->container['isSearchable'] = $isSearchable;

        return $this;
    }

    /**
     * Gets isVisibleInAdvancedSearch
     * @return string
     */
    public function getIsVisibleInAdvancedSearch()
    {
        return $this->container['isVisibleInAdvancedSearch'];
    }

    /**
     * Sets isVisibleInAdvancedSearch
     * @param string $isVisibleInAdvancedSearch The attribute can be used in Advanced Search
     * @return $this
     */
    public function setIsVisibleInAdvancedSearch($isVisibleInAdvancedSearch)
    {
        $this->container['isVisibleInAdvancedSearch'] = $isVisibleInAdvancedSearch;

        return $this;
    }

    /**
     * Gets isComparable
     * @return string
     */
    public function getIsComparable()
    {
        return $this->container['isComparable'];
    }

    /**
     * Sets isComparable
     * @param string $isComparable The attribute can be compared on the frontend
     * @return $this
     */
    public function setIsComparable($isComparable)
    {
        $this->container['isComparable'] = $isComparable;

        return $this;
    }

    /**
     * Gets isUsedForPromoRules
     * @return string
     */
    public function getIsUsedForPromoRules()
    {
        return $this->container['isUsedForPromoRules'];
    }

    /**
     * Sets isUsedForPromoRules
     * @param string $isUsedForPromoRules The attribute can be used for promo rules
     * @return $this
     */
    public function setIsUsedForPromoRules($isUsedForPromoRules)
    {
        $this->container['isUsedForPromoRules'] = $isUsedForPromoRules;

        return $this;
    }

    /**
     * Gets isVisibleOnFront
     * @return string
     */
    public function getIsVisibleOnFront()
    {
        return $this->container['isVisibleOnFront'];
    }

    /**
     * Sets isVisibleOnFront
     * @param string $isVisibleOnFront The attribute is visible on the frontend
     * @return $this
     */
    public function setIsVisibleOnFront($isVisibleOnFront)
    {
        $this->container['isVisibleOnFront'] = $isVisibleOnFront;

        return $this;
    }

    /**
     * Gets usedInProductListing
     * @return string
     */
    public function getUsedInProductListing()
    {
        return $this->container['usedInProductListing'];
    }

    /**
     * Sets usedInProductListing
     * @param string $usedInProductListing The attribute can be used in product listing
     * @return $this
     */
    public function setUsedInProductListing($usedInProductListing)
    {
        $this->container['usedInProductListing'] = $usedInProductListing;

        return $this;
    }

    /**
     * Gets isVisible
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['isVisible'];
    }

    /**
     * Sets isVisible
     * @param bool $isVisible Attribute is visible on frontend.
     * @return $this
     */
    public function setIsVisible($isVisible)
    {
        $this->container['isVisible'] = $isVisible;

        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param string $scope Attribute scope
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets extensionAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\CatalogDataEavAttributeExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\CatalogDataEavAttributeExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets attributeId
     * @return int
     */
    public function getAttributeId()
    {
        return $this->container['attributeId'];
    }

    /**
     * Sets attributeId
     * @param int $attributeId Id of the attribute.
     * @return $this
     */
    public function setAttributeId($attributeId)
    {
        $this->container['attributeId'] = $attributeId;

        return $this;
    }

    /**
     * Gets attributeCode
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->container['attributeCode'];
    }

    /**
     * Sets attributeCode
     * @param string $attributeCode Code of the attribute.
     * @return $this
     */
    public function setAttributeCode($attributeCode)
    {
        $this->container['attributeCode'] = $attributeCode;

        return $this;
    }

    /**
     * Gets frontendInput
     * @return string
     */
    public function getFrontendInput()
    {
        return $this->container['frontendInput'];
    }

    /**
     * Sets frontendInput
     * @param string $frontendInput HTML for input element.
     * @return $this
     */
    public function setFrontendInput($frontendInput)
    {
        $this->container['frontendInput'] = $frontendInput;

        return $this;
    }

    /**
     * Gets entityTypeId
     * @return string
     */
    public function getEntityTypeId()
    {
        return $this->container['entityTypeId'];
    }

    /**
     * Sets entityTypeId
     * @param string $entityTypeId Entity type id
     * @return $this
     */
    public function setEntityTypeId($entityTypeId)
    {
        $this->container['entityTypeId'] = $entityTypeId;

        return $this;
    }

    /**
     * Gets isRequired
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
     * Sets isRequired
     * @param bool $isRequired Attribute is required.
     * @return $this
     */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;

        return $this;
    }

    /**
     * Gets options
     * @return \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeOptionInterface[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeOptionInterface[] $options Options of the attribute (key => value pairs for select)
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets isUserDefined
     * @return bool
     */
    public function getIsUserDefined()
    {
        return $this->container['isUserDefined'];
    }

    /**
     * Sets isUserDefined
     * @param bool $isUserDefined Current attribute has been defined by a user.
     * @return $this
     */
    public function setIsUserDefined($isUserDefined)
    {
        $this->container['isUserDefined'] = $isUserDefined;

        return $this;
    }

    /**
     * Gets defaultFrontendLabel
     * @return string
     */
    public function getDefaultFrontendLabel()
    {
        return $this->container['defaultFrontendLabel'];
    }

    /**
     * Sets defaultFrontendLabel
     * @param string $defaultFrontendLabel Frontend label for default store
     * @return $this
     */
    public function setDefaultFrontendLabel($defaultFrontendLabel)
    {
        $this->container['defaultFrontendLabel'] = $defaultFrontendLabel;

        return $this;
    }

    /**
     * Gets frontendLabels
     * @return \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeFrontendLabelInterface[]
     */
    public function getFrontendLabels()
    {
        return $this->container['frontendLabels'];
    }

    /**
     * Sets frontendLabels
     * @param \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeFrontendLabelInterface[] $frontendLabels Frontend label for each store
     * @return $this
     */
    public function setFrontendLabels($frontendLabels)
    {
        $this->container['frontendLabels'] = $frontendLabels;

        return $this;
    }

    /**
     * Gets note
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     * @param string $note The note attribute for the element.
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets backendType
     * @return string
     */
    public function getBackendType()
    {
        return $this->container['backendType'];
    }

    /**
     * Sets backendType
     * @param string $backendType Backend type.
     * @return $this
     */
    public function setBackendType($backendType)
    {
        $this->container['backendType'] = $backendType;

        return $this;
    }

    /**
     * Gets backendModel
     * @return string
     */
    public function getBackendModel()
    {
        return $this->container['backendModel'];
    }

    /**
     * Sets backendModel
     * @param string $backendModel Backend model
     * @return $this
     */
    public function setBackendModel($backendModel)
    {
        $this->container['backendModel'] = $backendModel;

        return $this;
    }

    /**
     * Gets sourceModel
     * @return string
     */
    public function getSourceModel()
    {
        return $this->container['sourceModel'];
    }

    /**
     * Sets sourceModel
     * @param string $sourceModel Source model
     * @return $this
     */
    public function setSourceModel($sourceModel)
    {
        $this->container['sourceModel'] = $sourceModel;

        return $this;
    }

    /**
     * Gets defaultValue
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
     * Sets defaultValue
     * @param string $defaultValue Default value for the element.
     * @return $this
     */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;

        return $this;
    }

    /**
     * Gets isUnique
     * @return string
     */
    public function getIsUnique()
    {
        return $this->container['isUnique'];
    }

    /**
     * Sets isUnique
     * @param string $isUnique This is a unique attribute
     * @return $this
     */
    public function setIsUnique($isUnique)
    {
        $this->container['isUnique'] = $isUnique;

        return $this;
    }

    /**
     * Gets frontendClass
     * @return string
     */
    public function getFrontendClass()
    {
        return $this->container['frontendClass'];
    }

    /**
     * Sets frontendClass
     * @param string $frontendClass Frontend class of attribute
     * @return $this
     */
    public function setFrontendClass($frontendClass)
    {
        $this->container['frontendClass'] = $frontendClass;

        return $this;
    }

    /**
     * Gets validationRules
     * @return \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeValidationRuleInterface[]
     */
    public function getValidationRules()
    {
        return $this->container['validationRules'];
    }

    /**
     * Sets validationRules
     * @param \SpringImport\Swagger\Magento2\Client\Model\EavDataAttributeValidationRuleInterface[] $validationRules Validation rules.
     * @return $this
     */
    public function setValidationRules($validationRules)
    {
        $this->container['validationRules'] = $validationRules;

        return $this;
    }

    /**
     * Gets customAttributes
     * @return \SpringImport\Swagger\Magento2\Client\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     * @param \SpringImport\Swagger\Magento2\Client\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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


