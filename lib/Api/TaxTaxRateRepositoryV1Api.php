<?php
/**
 * TaxTaxRateRepositoryV1Api
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
 * TaxTaxRateRepositoryV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxTaxRateRepositoryV1Api
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
     * @return TaxTaxRateRepositoryV1Api
     */
    public function setApiClient(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation taxTaxRateRepositoryV1DeleteByIdDelete
     *
     * 
     *
     * @param int $rateId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return bool
     */
    public function taxTaxRateRepositoryV1DeleteByIdDelete($rateId)
    {
        list($response) = $this->taxTaxRateRepositoryV1DeleteByIdDeleteWithHttpInfo($rateId);
        return $response;
    }

    /**
     * Operation taxTaxRateRepositoryV1DeleteByIdDeleteWithHttpInfo
     *
     * 
     *
     * @param int $rateId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of bool, HTTP status code, HTTP response headers (array of strings)
     */
    public function taxTaxRateRepositoryV1DeleteByIdDeleteWithHttpInfo($rateId)
    {
        // verify the required parameter 'rateId' is set
        if ($rateId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rateId when calling taxTaxRateRepositoryV1DeleteByIdDelete');
        }
        // parse inputs
        $resourcePath = "/V1/taxRates/{rateId}";
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
        if ($rateId !== null) {
            $resourcePath = str_replace(
                "{" . "rateId" . "}",
                $this->apiClient->getSerializer()->toPathValue($rateId),
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
                '/V1/taxRates/{rateId}'
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
                case 500:
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
     * Operation taxTaxRateRepositoryV1GetGet
     *
     * 
     *
     * @param int $rateId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface
     */
    public function taxTaxRateRepositoryV1GetGet($rateId)
    {
        list($response) = $this->taxTaxRateRepositoryV1GetGetWithHttpInfo($rateId);
        return $response;
    }

    /**
     * Operation taxTaxRateRepositoryV1GetGetWithHttpInfo
     *
     * 
     *
     * @param int $rateId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function taxTaxRateRepositoryV1GetGetWithHttpInfo($rateId)
    {
        // verify the required parameter 'rateId' is set
        if ($rateId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rateId when calling taxTaxRateRepositoryV1GetGet');
        }
        // parse inputs
        $resourcePath = "/V1/taxRates/{rateId}";
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
        if ($rateId !== null) {
            $resourcePath = str_replace(
                "{" . "rateId" . "}",
                $this->apiClient->getSerializer()->toPathValue($rateId),
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
                '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface',
                '/V1/taxRates/{rateId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface', $e->getResponseHeaders());
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
     * Operation taxTaxRateRepositoryV1GetListGet
     *
     * 
     *
     * @param string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param int $searchCriteriaPageSize Page size. (optional)
     * @param int $searchCriteriaCurrentPage Current page. (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateSearchResultsInterface
     */
    public function taxTaxRateRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        list($response) = $this->taxTaxRateRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);
        return $response;
    }

    /**
     * Operation taxTaxRateRepositoryV1GetListGetWithHttpInfo
     *
     * 
     *
     * @param string $searchCriteriaFilterGroupsFiltersField Field (optional)
     * @param string $searchCriteriaFilterGroupsFiltersValue Value (optional)
     * @param string $searchCriteriaFilterGroupsFiltersConditionType Condition type (optional)
     * @param string $searchCriteriaSortOrdersField Sorting field. (optional)
     * @param string $searchCriteriaSortOrdersDirection Sorting direction. (optional)
     * @param int $searchCriteriaPageSize Page size. (optional)
     * @param int $searchCriteriaCurrentPage Current page. (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateSearchResultsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function taxTaxRateRepositoryV1GetListGetWithHttpInfo($searchCriteriaFilterGroupsFiltersField = null, $searchCriteriaFilterGroupsFiltersValue = null, $searchCriteriaFilterGroupsFiltersConditionType = null, $searchCriteriaSortOrdersField = null, $searchCriteriaSortOrdersDirection = null, $searchCriteriaPageSize = null, $searchCriteriaCurrentPage = null)
    {
        // parse inputs
        $resourcePath = "/V1/taxRates/search";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($searchCriteriaFilterGroupsFiltersField !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][field]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroupsFiltersField);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersValue !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][value]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroupsFiltersValue);
        }
        // query params
        if ($searchCriteriaFilterGroupsFiltersConditionType !== null) {
            $queryParams['searchCriteria[filterGroups][][filters][][conditionType]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaFilterGroupsFiltersConditionType);
        }
        // query params
        if ($searchCriteriaSortOrdersField !== null) {
            $queryParams['searchCriteria[sortOrders][][field]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaSortOrdersField);
        }
        // query params
        if ($searchCriteriaSortOrdersDirection !== null) {
            $queryParams['searchCriteria[sortOrders][][direction]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaSortOrdersDirection);
        }
        // query params
        if ($searchCriteriaPageSize !== null) {
            $queryParams['searchCriteria[pageSize]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaPageSize);
        }
        // query params
        if ($searchCriteriaCurrentPage !== null) {
            $queryParams['searchCriteria[currentPage]'] = $this->apiClient->getSerializer()->toQueryValue($searchCriteriaCurrentPage);
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
                '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateSearchResultsInterface',
                '/V1/taxRates/search'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateSearchResultsInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateSearchResultsInterface', $e->getResponseHeaders());
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
     * Operation taxTaxRateRepositoryV1SavePost
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body126 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface
     */
    public function taxTaxRateRepositoryV1SavePost($body = null)
    {
        list($response) = $this->taxTaxRateRepositoryV1SavePostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation taxTaxRateRepositoryV1SavePostWithHttpInfo
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body126 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function taxTaxRateRepositoryV1SavePostWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/taxRates";
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
                '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface',
                '/V1/taxRates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface', $e->getResponseHeaders());
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
                case 500:
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
     * Operation taxTaxRateRepositoryV1SavePut
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body125 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface
     */
    public function taxTaxRateRepositoryV1SavePut($body = null)
    {
        list($response) = $this->taxTaxRateRepositoryV1SavePutWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation taxTaxRateRepositoryV1SavePutWithHttpInfo
     *
     * 
     *
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body125 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function taxTaxRateRepositoryV1SavePutWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/V1/taxRates";
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface',
                '/V1/taxRates'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\TaxDataTaxRateInterface', $e->getResponseHeaders());
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
                case 500:
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
