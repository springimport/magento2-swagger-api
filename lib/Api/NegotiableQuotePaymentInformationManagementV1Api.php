<?php
/**
 * NegotiableQuotePaymentInformationManagementV1Api
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
 * NegotiableQuotePaymentInformationManagementV1Api Class Doc Comment
 *
 * @category Class
 * @package  SpringImport\Swagger\Magento2\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NegotiableQuotePaymentInformationManagementV1Api
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
     * @return NegotiableQuotePaymentInformationManagementV1Api
     */
    public function setApiClient(\SpringImport\Swagger\Magento2\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet
     *
     * 
     *
     * @param int $cartId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return \SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface
     */
    public function negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet($cartId)
    {
        list($response) = $this->negotiableQuotePaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo($cartId);
        return $response;
    }

    /**
     * Operation negotiableQuotePaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo
     *
     * 
     *
     * @param int $cartId  (required)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of \SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface, HTTP status code, HTTP response headers (array of strings)
     */
    public function negotiableQuotePaymentInformationManagementV1GetPaymentInformationGetWithHttpInfo($cartId)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling negotiableQuotePaymentInformationManagementV1GetPaymentInformationGet');
        }
        // parse inputs
        $resourcePath = "/V1/negotiable-carts/{cartId}/payment-information";
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
        if ($cartId !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cartId),
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
                '\SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface',
                '/V1/negotiable-carts/{cartId}/payment-information'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SpringImport\Swagger\Magento2\Client\Model\CheckoutDataPaymentDetailsInterface', $e->getResponseHeaders());
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
     * Operation negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost
     *
     * 
     *
     * @param int $cartId  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body157 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return int
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $body = null)
    {
        list($response) = $this->negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo($cartId, $body);
        return $response;
    }

    /**
     * Operation negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo
     *
     * 
     *
     * @param int $cartId  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body157 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostWithHttpInfo($cartId, $body = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling negotiableQuotePaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost');
        }
        // parse inputs
        $resourcePath = "/V1/negotiable-carts/{cartId}/payment-information";
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
        if ($cartId !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cartId),
                $resourcePath
            );
        }
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
                '/V1/negotiable-carts/{cartId}/payment-information'
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
     * Operation negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost
     *
     * 
     *
     * @param int $cartId  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body158 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return int
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost($cartId, $body = null)
    {
        list($response) = $this->negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo($cartId, $body);
        return $response;
    }

    /**
     * Operation negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo
     *
     * 
     *
     * @param int $cartId  (required)
     * @param \SpringImport\Swagger\Magento2\Client\Model\Body158 $body  (optional)
     * @throws \SpringImport\Swagger\Magento2\Client\ApiException on non-2xx response
     * @return array of int, HTTP status code, HTTP response headers (array of strings)
     */
    public function negotiableQuotePaymentInformationManagementV1SavePaymentInformationPostWithHttpInfo($cartId, $body = null)
    {
        // verify the required parameter 'cartId' is set
        if ($cartId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $cartId when calling negotiableQuotePaymentInformationManagementV1SavePaymentInformationPost');
        }
        // parse inputs
        $resourcePath = "/V1/negotiable-carts/{cartId}/set-payment-information";
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
        if ($cartId !== null) {
            $resourcePath = str_replace(
                "{" . "cartId" . "}",
                $this->apiClient->getSerializer()->toPathValue($cartId),
                $resourcePath
            );
        }
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
                '/V1/negotiable-carts/{cartId}/set-payment-information'
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
}
