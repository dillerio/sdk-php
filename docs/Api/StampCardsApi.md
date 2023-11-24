# Swagger\Client\StampCardsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelStampReservation**](StampCardsApi.md#cancelstampreservation) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards/{stampId}/cancel-reservation | The endpoint /cancel-reservation should be called when a transaction is completed or cancelled to  release the stamp reservation and avoid making it unavailable for other transactions.
[**getMemberStampCards**](StampCardsApi.md#getmemberstampcards) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards | Get member active stamp cards
[**getStoreStamps**](StampCardsApi.md#getstorestamps) | **GET** /api/v2.0/stores/{storeId}/stamp-cards | Retrieves store stamp cards. By default it only retrieves active stamp cards.
[**reserveStamp**](StampCardsApi.md#reservestamp) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards/{stampId}/reserve | This endpoint enables users to reserve a stamp for their pending orders,  thereby ensuring that the stamp cannot be used for any other transactions.

# **cancelStampReservation**
> \Swagger\Client\Model\ActionResponse cancelStampReservation($store_id, $member_id, $stamp_id, $body)

The endpoint /cancel-reservation should be called when a transaction is completed or cancelled to  release the stamp reservation and avoid making it unavailable for other transactions.

If the transaction has multiple stamps with the same Id, all of them will be released

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store Id
$member_id = "member_id_example"; // string | The member Id
$stamp_id = 56; // int | The stamp Id to cancel the reservation
$body = new \Swagger\Client\Model\CouponCancelReservationRequest(); // \Swagger\Client\Model\CouponCancelReservationRequest | 

try {
    $result = $apiInstance->cancelStampReservation($store_id, $member_id, $stamp_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->cancelStampReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store Id |
 **member_id** | **string**| The member Id |
 **stamp_id** | **int**| The stamp Id to cancel the reservation |
 **body** | [**\Swagger\Client\Model\CouponCancelReservationRequest**](../Model/CouponCancelReservationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberStampCards**
> \Swagger\Client\Model\MemberStampCard[] getMemberStampCards($store_id, $member_id)

Get member active stamp cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$member_id = "member_id_example"; // string | 

try {
    $result = $apiInstance->getMemberStampCards($store_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->getMemberStampCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **member_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MemberStampCard[]**](../Model/MemberStampCard.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreStamps**
> \Swagger\Client\Model\StoreStampCardResponse[] getStoreStamps($store_id, $also_inactive)

Retrieves store stamp cards. By default it only retrieves active stamp cards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$also_inactive = true; // bool | When true, it also return stamp cards that are not currently valid.

try {
    $result = $apiInstance->getStoreStamps($store_id, $also_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->getStoreStamps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **also_inactive** | **bool**| When true, it also return stamp cards that are not currently valid. | [optional]

### Return type

[**\Swagger\Client\Model\StoreStampCardResponse[]**](../Model/StoreStampCardResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reserveStamp**
> \Swagger\Client\Model\ActionResponse reserveStamp($store_id, $member_id, $stamp_id, $body)

This endpoint enables users to reserve a stamp for their pending orders,  thereby ensuring that the stamp cannot be used for any other transactions.

Call the /cancel-reservation endpoint after completing or cancelling a transaction to release the              stamp reservation and make it available for other transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StampCardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The storeId
$member_id = "member_id_example"; // string | The memberId
$stamp_id = 56; // int | The stam id
$body = new \Swagger\Client\Model\StampReservationRequest(); // \Swagger\Client\Model\StampReservationRequest | Details of the coupon reservation request

try {
    $result = $apiInstance->reserveStamp($store_id, $member_id, $stamp_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->reserveStamp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The storeId |
 **member_id** | **string**| The memberId |
 **stamp_id** | **int**| The stam id |
 **body** | [**\Swagger\Client\Model\StampReservationRequest**](../Model/StampReservationRequest.md)| Details of the coupon reservation request | [optional]

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

