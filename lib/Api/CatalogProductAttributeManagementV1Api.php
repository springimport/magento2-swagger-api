<?php
/**
 * CatalogProductAttributeManagementV1Api
 * PHP version 5
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
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

namespace SpringImport\Swagger\Magento2\Client\Api;

use \SpringImport\Swagger\Magento2\Client\ApiClient;
use \SpringImport\Swagger\Magento2\Client\ApiException;
use \SpringImport\Swagger\Magento2\Client\Configuration;
use \SpringImport\Swagger\Magento2\Client\ObjectSerializer;

/**
 * CatalogProductAttributeManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogProductAttributeManagementV1Api
{
    /**
     * API Client
     *
     * @var \SpringImport\Swagger\Magento2\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \SpringImport\Swagger\Magento2\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \SpringImport\Swagger\Magento2\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \SpringImport\Swagger\Magento2\Client\ApiClient $apiClient set the API client
     *
     * @return CatalogProductAttributeManagementV1Api
     */
    public function setApiClient(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation catalogProductAttributeManagementV1AssignPost
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body24 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return int
     */
    public function catalogProductAttributeManagementV1AssignPost($body = null)
    {
        list($response) = $this->catalogProductAttributeManagementV1AssignPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation catalogProductAttributeManagementV1AssignPostWithHttpInfo
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body24 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductAttributeManagementV1AssignPostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/products/attribute-sets/attributes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'int',
                '/V1/products/attribute-sets/attributes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'int', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation catalogProductAttributeManagementV1GetAttributesGet
     *
     * 
     *
     * @param string $attributeSetId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeInterface[]
     */
    public function catalogProductAttributeManagementV1GetAttributesGet($attributeSetId)
    {
        list($response) = $this->catalogProductAttributeManagementV1GetAttributesGetWithHttpInfo($attributeSetId);
        return $response;
    }

    /**
     * Operation catalogProductAttributeManagementV1GetAttributesGetWithHttpInfo
     *
     * 
     *
     * @param string $attributeSetId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeInterface[], HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductAttributeManagementV1GetAttributesGetWithHttpInfo($attributeSetId)
    {
        // verify the required parameter 'attributeSetId' is set
        if ($attributeSetId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attributeSetId when calling catalogProductAttributeManagementV1GetAttributesGet');
        }
        // parse inputs
        $resourcePath = "/V1/products/attribute-sets/{attributeSetId}/attributes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($attributeSetId !== null) {
            $resourcePath = str_replace(
                "{" . "attributeSetId" . "}",
                $this->apiClient->getSerializer()->toPathValue($attributeSetId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeInterface[]',
                '/V1/products/attribute-sets/{attributeSetId}/attributes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeInterface[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductAttributeInterface[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation catalogProductAttributeManagementV1UnassignDelete
     *
     * 
     *
     * @param string $attributeSetId  (required)
     * @param string $attributeCode  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return bool
     */
    public function catalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode)
    {
        list($response) = $this->catalogProductAttributeManagementV1UnassignDeleteWithHttpInfo($attributeSetId, $attributeCode);
        return $response;
    }

    /**
     * Operation catalogProductAttributeManagementV1UnassignDeleteWithHttpInfo
     *
     * 
     *
     * @param string $attributeSetId  (required)
     * @param string $attributeCode  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function catalogProductAttributeManagementV1UnassignDeleteWithHttpInfo($attributeSetId, $attributeCode)
    {
        // verify the required parameter 'attributeSetId' is set
        if ($attributeSetId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attributeSetId when calling catalogProductAttributeManagementV1UnassignDelete');
        }
        // verify the required parameter 'attributeCode' is set
        if ($attributeCode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $attributeCode when calling catalogProductAttributeManagementV1UnassignDelete');
        }
        // parse inputs
        $resourcePath = "/V1/products/attribute-sets/{attributeSetId}/attributes/{attributeCode}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($attributeSetId !== null) {
            $resourcePath = str_replace(
                "{" . "attributeSetId" . "}",
                $this->apiClient->getSerializer()->toPathValue($attributeSetId),
                $resourcePath
            );
        }
        // path params
        if ($attributeCode !== null) {
            $resourcePath = str_replace(
                "{" . "attributeCode" . "}",
                $this->apiClient->getSerializer()->toPathValue($attributeCode),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                'bool',
                '/V1/products/attribute-sets/{attributeSetId}/attributes/{attributeCode}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'bool', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'bool', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 0:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
