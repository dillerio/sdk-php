# Swagger\Client\TransactionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelTransaction**](TransactionsApi.md#canceltransaction) | **POST** /api/v2.0/stores/{storeId}/transactions/{transactionId}/cancel | Cancel transaction
[**createRefundTransaction**](TransactionsApi.md#createrefundtransaction) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/transactions/{transactionId}/refund | Allows for the partial refund of a previous transaction, without taking into account any coupons or stamp cards applied earlier.
[**createTransaction**](TransactionsApi.md#createtransaction) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/transactions | Creates transaction

# **cancelTransaction**
> \Swagger\Client\Model\ActionResponse cancelTransaction($store_id, $transaction_id, $body)

Cancel transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 
$body = new \Swagger\Client\Model\CancelationReason(); // \Swagger\Client\Model\CancelationReason | 

try {
    $result = $apiInstance->cancelTransaction($store_id, $transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->cancelTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**|  |
 **transaction_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\CancelationReason**](../Model/CancelationReason.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRefundTransaction**
> \Swagger\Client\Model\ActionResponse createRefundTransaction($store_id, $member_id, $transaction_id, $body)

Allows for the partial refund of a previous transaction, without taking into account any coupons or stamp cards applied earlier.

If the entire transaction needs to be refunded, consider using the \"cancel transaction\" endpoint, as it fully reverses the transaction, including coupons and stamp cards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Store Id
$member_id = "member_id_example"; // string | Member Id
$transaction_id = "transaction_id_example"; // string | The original transaction Id that is being refunded
$body = new \Swagger\Client\Model\CreateRefundTransactionRequest(); // \Swagger\Client\Model\CreateRefundTransactionRequest | CreateRefundTransactionRequest object

try {
    $result = $apiInstance->createRefundTransaction($store_id, $member_id, $transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createRefundTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Store Id |
 **member_id** | **string**| Member Id |
 **transaction_id** | **string**| The original transaction Id that is being refunded |
 **body** | [**\Swagger\Client\Model\CreateRefundTransactionRequest**](../Model/CreateRefundTransactionRequest.md)| CreateRefundTransactionRequest object | [optional]

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTransaction**
> \Swagger\Client\Model\ActionResponse createTransaction($store_id, $member_id, $body)

Creates transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | Store Id
$member_id = "member_id_example"; // string | Member Id
$body = new \Swagger\Client\Model\CreateTransactionRequest(); // \Swagger\Client\Model\CreateTransactionRequest | CreateTransactionRequest object

try {
    $result = $apiInstance->createTransaction($store_id, $member_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->createTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| Store Id |
 **member_id** | **string**| Member Id |
 **body** | [**\Swagger\Client\Model\CreateTransactionRequest**](../Model/CreateTransactionRequest.md)| CreateTransactionRequest object | [optional]

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

