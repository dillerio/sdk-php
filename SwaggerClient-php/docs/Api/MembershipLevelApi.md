# Swagger\Client\MembershipLevelApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStoreMembershipLevel**](MembershipLevelApi.md#getstoremembershiplevel) | **GET** /api/v2.0/stores/{storeId}/membership-level | Retrieve store membership level information

# **getStoreMembershipLevel**
> \Swagger\Client\Model\StoreMembershipLevelResponse[] getStoreMembershipLevel($store_id)

Retrieve store membership level information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MembershipLevelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id

try {
    $result = $apiInstance->getStoreMembershipLevel($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipLevelApi->getStoreMembershipLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |

### Return type

[**\Swagger\Client\Model\StoreMembershipLevelResponse[]**](../Model/StoreMembershipLevelResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

