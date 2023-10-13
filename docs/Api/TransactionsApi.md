# DillerAPI\TransactionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelTransaction**](TransactionsApi.md#canceltransaction) | **POST** /api/v2.0/stores/{storeId}/transactions/{transactionId}/cancel | Cancel transaction
[**createTransaction**](TransactionsApi.md#createtransaction) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/transactions | Creates transaction

# **cancelTransaction**
> \DillerAPI\Model\ActionResponse cancelTransaction($storeId, $transactionId, $body)

Cancel transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$transactionId = "transactionId_example"; // string | 
$body = new \DillerAPI\Model\CancelationReason(); // \DillerAPI\Model\CancelationReason | 

try {
    $result = $apiInstance->cancelTransaction($storeId, $transactionId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**|  |
 **transactionId** | **string**|  |
 **body** | [**\DillerAPI\Model\CancelationReason**](../Model/CancelationReason.md)|  | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransaction**
> \DillerAPI\Model\ActionResponse createTransaction($storeId, $memberId, $body)

Creates transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | Store Id
$memberId = "memberId_example"; // string | Member Id
$body = new \DillerAPI\Model\CreateTransactionRequest(); // \DillerAPI\Model\CreateTransactionRequest | CreateTransaction object

try {
    $result = $apiInstance->createTransaction($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storeId** | **string**| Store Id |
 **memberId** | **string**| Member Id |
 **body** | [**\DillerAPI\Model\CreateTransactionRequest**](../Model/CreateTransactionRequest.md)| CreateTransaction object | [optional]

### Return type

[**\DillerAPI\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

