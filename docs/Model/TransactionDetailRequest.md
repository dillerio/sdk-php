# TransactionDetailRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | [**\Swagger\Client\Model\ProductDetail**](ProductDetail.md) |  | [optional] 
**quantity** | **double** |  | [optional] 
**unit_price** | **double** | Unit price including taxes | [optional] 
**unit_measure** | **string** |  | [optional] 
**tax_percentage** | **double** | Value stored from 0.00 to 100.00 | [optional] 
**discount** | **double** | Discount amount applied to this product | [optional] 
**total_price** | **double** | Total price after dicount and taxes  Qty x unit price - discount | [optional] 
**stamp_card_ids** | **int[]** |  | [optional] 
**coupon_codes** | **string[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

