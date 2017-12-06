# SpringImport\Swagger\Magento2\Client\ConfigurableProductConfigurableProductManagementV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductConfigurableProductManagementV1GenerateVariationPut**](ConfigurableProductConfigurableProductManagementV1Api.md#configurableProductConfigurableProductManagementV1GenerateVariationPut) | **PUT** /V1/configurable-products/variation | 


# **configurableProductConfigurableProductManagementV1GenerateVariationPut**
> \SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface[] configurableProductConfigurableProductManagementV1GenerateVariationPut($body)



Generate variation based on same product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\ConfigurableProductConfigurableProductManagementV1Api();
$body = new \SpringImport\Swagger\Magento2\Client\Model\Body118(); // \SpringImport\Swagger\Magento2\Client\Model\Body118 | 

try {
    $result = $api_instance->configurableProductConfigurableProductManagementV1GenerateVariationPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductConfigurableProductManagementV1Api->configurableProductConfigurableProductManagementV1GenerateVariationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SpringImport\Swagger\Magento2\Client\Model\Body118**](../Model/\SpringImport\Swagger\Magento2\Client\Model\Body118.md)|  | [optional]

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\CatalogDataProductInterface[]**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

