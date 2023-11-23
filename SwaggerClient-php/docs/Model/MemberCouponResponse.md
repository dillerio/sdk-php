# MemberCouponResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**external_ids** | [**\Swagger\Client\Model\ExternalCouponIdentifier[]**](ExternalCouponIdentifier.md) |  | [optional] 
**code** | **string** |  | 
**title** | **string** |  | 
**description** | **string** |  | [optional] 
**article_number** | **string** |  | [optional] 
**valid_from** | [**\DateTime**](\DateTime.md) | The startDate of the coupon | 
**valid_to** | [**\DateTime**](\DateTime.md) |  | 
**type** | [**\Swagger\Client\Model\CouponType**](CouponType.md) |  | 
**discount_type** | [**\Swagger\Client\Model\CouponDiscountType**](CouponDiscountType.md) |  | [optional] 
**discount_value** | **double** |  | [optional] 
**max_redemptions** | **int** |  | [optional] 
**image_url** | **string** |  | [optional] 
**product_ids** | **string[]** |  | [optional] 
**times_redeemed** | **int** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

