# SpringImport\Swagger\Magento2\Client\DirectoryCurrencyInformationAcquirerV1Api

All URIs are relative to *http://hb.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet**](DirectoryCurrencyInformationAcquirerV1Api.md#directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet) | **GET** /V1/directory/currency | 


# **directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet**
> \SpringImport\Swagger\Magento2\Client\Model\DirectoryDataCurrencyInformationInterface directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet()



Get currency information for the store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SpringImport\Swagger\Magento2\Client\Api\DirectoryCurrencyInformationAcquirerV1Api();

try {
    $result = $api_instance->directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryCurrencyInformationAcquirerV1Api->directoryCurrencyInformationAcquirerV1GetCurrencyInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SpringImport\Swagger\Magento2\Client\Model\DirectoryDataCurrencyInformationInterface**](../Model/DirectoryDataCurrencyInformationInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

