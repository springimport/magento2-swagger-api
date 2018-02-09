# SpringImport\Swagger\Magento2\Client\CatalogProductLinkRepositoryV1Api

All URIs are relative to *http://b2b222.vg/index.php/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductLinkRepositoryV1DeleteByIdDelete**](CatalogProductLinkRepositoryV1Api.md#catalogProductLinkRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/{sku}/links/{type}/{linkedProductSku} | 
[**catalogProductLinkRepositoryV1SavePut**](CatalogProductLinkRepositoryV1Api.md#catalogProductLinkRepositoryV1SavePut) | **PUT** /V1/products/{sku}/links | 


# **catalogProductLinkRepositoryV1DeleteByIdDelete**
> bool catalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linkedProductSku)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$type = "type_example"; // string | 
$linkedProductSku = "linkedProductSku_example"; // string | 

try {
    $result = $apiInstance->catalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linkedProductSku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkRepositoryV1Api->catalogProductLinkRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **type** | **string**|  |
 **linkedProductSku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductLinkRepositoryV1SavePut**
> bool catalogProductLinkRepositoryV1SavePut($sku, $body)



Save product link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SpringImport\Swagger\Magento2\Client\Api\CatalogProductLinkRepositoryV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sku = "sku_example"; // string | 
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body48(); // \SpringImport\Swagger\Magento2\Client\Model\Body48 | 

try {
    $result = $apiInstance->catalogProductLinkRepositoryV1SavePut($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkRepositoryV1Api->catalogProductLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body48**](../Model/Body48.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

