# CreateTransactionRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | The store&#x27;s transaction unique identifier. Eg. Order-1234 | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date and time the transaction was created in ISO 8601 format. | [optional] 
**payment_details** | [**\Swagger\Client\Model\PaymentDetails[]**](PaymentDetails.md) |  | [optional] 
**eft_pos** | **string** | Electronic funds transfer at point of sale | [optional] 
**send_email_receipt** | **bool** |  | [optional] 
**total** | **double** | Total amount paid by the customer, after discounts and taxes | [optional] 
**total_tax** | **double** | Total amount of taxes paid | [optional] 
**total_discount** | **double** | Discount amount applied to this purchase | [optional] 
**currency** | **string** |  | [optional] 
**round_off_amount** | **double** | Stores the specific value used for rounding calculations | [optional] 
**origin** | [**\Swagger\Client\Model\Origin**](Origin.md) |  | [optional] 
**coupon_codes** | **string[]** |  | [optional] 
**stamp_card_ids** | **int[]** |  | [optional] 
**details** | [**\Swagger\Client\Model\TransactionDetailRequest[]**](TransactionDetailRequest.md) |  | [optional] 
**department_id** | **string** | The Id assigned by the retailer | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

