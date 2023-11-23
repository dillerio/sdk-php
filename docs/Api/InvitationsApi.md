# Swagger\Client\InvitationsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getInvitedFriends**](InvitationsApi.md#getinvitedfriends) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/invited-friends | Returns a list of all invited friends
[**getReferrals**](InvitationsApi.md#getreferrals) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/invited-friend | Returns an invited friend by invitation token

# **getInvitedFriends**
> \Swagger\Client\Model\InvitedFriendResponse[] getInvitedFriends($store_id, $member_id)

Returns a list of all invited friends

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store Id
$member_id = "member_id_example"; // string | The member Id

try {
    $result = $apiInstance->getInvitedFriends($store_id, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->getInvitedFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store Id |
 **member_id** | **string**| The member Id |

### Return type

[**\Swagger\Client\Model\InvitedFriendResponse[]**](../Model/InvitedFriendResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReferrals**
> \Swagger\Client\Model\InvitedFriendResponse[] getReferrals($store_id, $member_id, $invitation_token)

Returns an invited friend by invitation token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InvitationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$store_id = "store_id_example"; // string | The store Id
$member_id = "member_id_example"; // string | The member Id
$invitation_token = "invitation_token_example"; // string | The invitation token

try {
    $result = $apiInstance->getReferrals($store_id, $member_id, $invitation_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->getReferrals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **string**| The store Id |
 **member_id** | **string**| The member Id |
 **invitation_token** | **string**| The invitation token | [optional]

### Return type

[**\Swagger\Client\Model\InvitedFriendResponse[]**](../Model/InvitedFriendResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

