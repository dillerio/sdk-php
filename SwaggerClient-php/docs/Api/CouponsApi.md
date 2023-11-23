# Swagger\Client\CouponsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelCouponReservation**](CouponsApi.md#cancelcouponreservation) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/cancel-reservation | This endpoint should be called when a transaction is completed or cancelled to   release the coupon reservation and avoid making it unavailable for other transactions.
[**getMemberCoupons**](CouponsApi.md#getmembercoupons) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/coupons | This endpoint retrieves available coupons for a specific member.
[**getStoreCoupons**](CouponsApi.md#getstorecoupons) | **GET** /api/v2.0/stores/{storeId}/coupons | Retrieves store coupons. By default it only retrieves active coupons.
[**reserveCoupon**](CouponsApi.md#reservecoupon) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/reserve | This endpoint enables users to reserve a coupon for their pending orders,   thereby ensuring that the coupon cannot be used for any other transactions.
[**validateCoupon**](CouponsApi.md#validatecoupon) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/validate | This endpoint validates a coupon code for a specific member.

# **cancelCouponReservation**
> \Swagger\Client\Model\ActionResponse cancelCouponReservation($store_id, $member_id, $coupon_code, $body)

This endpoint should be called when a transaction is completed or cancelled to   release the coupon reservation and avoid making it unavailable for other transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | 
$member_id = "member_id_example"; // string | 
$coupon_code = "coupon_code_example"; // string | 
$body = new \Swagger\Client\Model\CouponCancelReservationRequest(); // \Swagger\Client\Model\CouponCancelReservationRequest | 

try {
    $result = $apiInstance->cancelCouponReservation($store_id, $member_id, $coupon_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->cancelCouponReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**|  |
 **member_id** | **string**|  |
 **coupon_code** | **string**|  |
 **body** | [**\Swagger\Client\Model\CouponCancelReservationRequest**](../Model/CouponCancelReservationRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMemberCoupons**
> \Swagger\Client\Model\MemberCouponResponse[] getMemberCoupons($store_id, $member_id)

This endpoint retrieves available coupons for a specific member.

All other coupons that are not applicable to the follower, will not be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | 
$member_id = "member_id_example"; // string | 

try {
    $result = $apiInstance->getMemberCoupons($store_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getMemberCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**|  |
 **member_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MemberCouponResponse[]**](../Model/MemberCouponResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreCoupons**
> \Swagger\Client\Model\StoreCouponResponse[] getStoreCoupons($store_id, $also_inactive)

Retrieves store coupons. By default it only retrieves active coupons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store Id
$also_inactive = true; // bool | When true, it also return coupons that are not currently valid.

try {
    $result = $apiInstance->getStoreCoupons($store_id, $also_inactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getStoreCoupons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store Id |
 **also_inactive** | **bool**| When true, it also return coupons that are not currently valid. | [optional]

### Return type

[**\Swagger\Client\Model\StoreCouponResponse[]**](../Model/StoreCouponResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reserveCoupon**
> \Swagger\Client\Model\ActionResponse reserveCoupon($store_id, $member_id, $coupon_code, $body)

This endpoint enables users to reserve a coupon for their pending orders,   thereby ensuring that the coupon cannot be used for any other transactions.

Call the /cancel-reservation endpoint after completing or cancelling a transaction to release the               coupon reservation and make it available for other transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The storeId
$member_id = "member_id_example"; // string | The memberId
$coupon_code = "coupon_code_example"; // string | The coupon code
$body = new \Swagger\Client\Model\CouponReservationRequest(); // \Swagger\Client\Model\CouponReservationRequest | Details of the coupon reservation request

try {
    $result = $apiInstance->reserveCoupon($store_id, $member_id, $coupon_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->reserveCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The storeId |
 **member_id** | **string**| The memberId |
 **coupon_code** | **string**| The coupon code |
 **body** | [**\Swagger\Client\Model\CouponReservationRequest**](../Model/CouponReservationRequest.md)| Details of the coupon reservation request | [optional]

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateCoupon**
> \Swagger\Client\Model\ActionResponse validateCoupon($store_id, $member_id, $coupon_code)

This endpoint validates a coupon code for a specific member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store id
$member_id = "member_id_example"; // string | The member id
$coupon_code = "coupon_code_example"; // string | The coupon code

try {
    $result = $apiInstance->validateCoupon($store_id, $member_id, $coupon_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->validateCoupon: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store id |
 **member_id** | **string**| The member id |
 **coupon_code** | **string**| The coupon code |

### Return type

[**\Swagger\Client\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

