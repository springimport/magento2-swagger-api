# SalesDataOrderInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjustmentNegative** | **float** | Negative adjustment value. | [optional] 
**adjustmentPositive** | **float** | Positive adjustment value. | [optional] 
**appliedRuleIds** | **string** | Applied rule IDs. | [optional] 
**baseAdjustmentNegative** | **float** | Base negative adjustment value. | [optional] 
**baseAdjustmentPositive** | **float** | Base positive adjustment value. | [optional] 
**baseCurrencyCode** | **string** | Base currency code. | [optional] 
**baseDiscountAmount** | **float** | Base discount amount. | [optional] 
**baseDiscountCanceled** | **float** | Base discount canceled. | [optional] 
**baseDiscountInvoiced** | **float** | Base discount invoiced. | [optional] 
**baseDiscountRefunded** | **float** | Base discount refunded. | [optional] 
**baseGrandTotal** | **float** | Base grand total. | 
**baseDiscountTaxCompensationAmount** | **float** | Base discount tax compensation amount. | [optional] 
**baseDiscountTaxCompensationInvoiced** | **float** | Base discount tax compensation invoiced. | [optional] 
**baseDiscountTaxCompensationRefunded** | **float** | Base discount tax compensation refunded. | [optional] 
**baseShippingAmount** | **float** | Base shipping amount. | [optional] 
**baseShippingCanceled** | **float** | Base shipping canceled. | [optional] 
**baseShippingDiscountAmount** | **float** | Base shipping discount amount. | [optional] 
**baseShippingDiscountTaxCompensationAmnt** | **float** | Base shipping discount tax compensation amount. | [optional] 
**baseShippingInclTax** | **float** | Base shipping including tax. | [optional] 
**baseShippingInvoiced** | **float** | Base shipping invoiced. | [optional] 
**baseShippingRefunded** | **float** | Base shipping refunded. | [optional] 
**baseShippingTaxAmount** | **float** | Base shipping tax amount. | [optional] 
**baseShippingTaxRefunded** | **float** | Base shipping tax refunded. | [optional] 
**baseSubtotal** | **float** | Base subtotal. | [optional] 
**baseSubtotalCanceled** | **float** | Base subtotal canceled. | [optional] 
**baseSubtotalInclTax** | **float** | Base subtotal including tax. | [optional] 
**baseSubtotalInvoiced** | **float** | Base subtotal invoiced. | [optional] 
**baseSubtotalRefunded** | **float** | Base subtotal refunded. | [optional] 
**baseTaxAmount** | **float** | Base tax amount. | [optional] 
**baseTaxCanceled** | **float** | Base tax canceled. | [optional] 
**baseTaxInvoiced** | **float** | Base tax invoiced. | [optional] 
**baseTaxRefunded** | **float** | Base tax refunded. | [optional] 
**baseTotalCanceled** | **float** | Base total canceled. | [optional] 
**baseTotalDue** | **float** | Base total due. | [optional] 
**baseTotalInvoiced** | **float** | Base total invoiced. | [optional] 
**baseTotalInvoicedCost** | **float** | Base total invoiced cost. | [optional] 
**baseTotalOfflineRefunded** | **float** | Base total offline refunded. | [optional] 
**baseTotalOnlineRefunded** | **float** | Base total online refunded. | [optional] 
**baseTotalPaid** | **float** | Base total paid. | [optional] 
**baseTotalQtyOrdered** | **float** | Base total quantity ordered. | [optional] 
**baseTotalRefunded** | **float** | Base total refunded. | [optional] 
**baseToGlobalRate** | **float** | Base-to-global rate. | [optional] 
**baseToOrderRate** | **float** | Base-to-order rate. | [optional] 
**billingAddressId** | **int** | Billing address ID. | [optional] 
**canShipPartially** | **int** | Can-ship-partially flag value. | [optional] 
**canShipPartiallyItem** | **int** | Can-ship-partially-item flag value. | [optional] 
**couponCode** | **string** | Coupon code. | [optional] 
**createdAt** | **string** | Created-at timestamp. | [optional] 
**customerDob** | **string** | Customer date-of-birth (DOB). | [optional] 
**customerEmail** | **string** | Customer email address. | 
**customerFirstname** | **string** | Customer first name. | [optional] 
**customerGender** | **int** | Customer gender. | [optional] 
**customerGroupId** | **int** | Customer group ID. | [optional] 
**customerId** | **int** | Customer ID. | [optional] 
**customerIsGuest** | **int** | Customer-is-guest flag value. | [optional] 
**customerLastname** | **string** | Customer last name. | [optional] 
**customerMiddlename** | **string** | Customer middle name. | [optional] 
**customerNote** | **string** | Customer note. | [optional] 
**customerNoteNotify** | **int** | Customer-note-notify flag value. | [optional] 
**customerPrefix** | **string** | Customer prefix. | [optional] 
**customerSuffix** | **string** | Customer suffix. | [optional] 
**customerTaxvat** | **string** | Customer value-added tax (VAT). | [optional] 
**discountAmount** | **float** | Discount amount. | [optional] 
**discountCanceled** | **float** | Discount canceled. | [optional] 
**discountDescription** | **string** | Discount description. | [optional] 
**discountInvoiced** | **float** | Discount invoiced. | [optional] 
**discountRefunded** | **float** | Discount refunded amount. | [optional] 
**editIncrement** | **int** | Edit increment value. | [optional] 
**emailSent** | **int** | Email-sent flag value. | [optional] 
**entityId** | **int** | Order ID. | [optional] 
**extCustomerId** | **string** | External customer ID. | [optional] 
**extOrderId** | **string** | External order ID. | [optional] 
**forcedShipmentWithInvoice** | **int** | Forced-shipment-with-invoice flag value. | [optional] 
**globalCurrencyCode** | **string** | Global currency code. | [optional] 
**grandTotal** | **float** | Grand total. | 
**discountTaxCompensationAmount** | **float** | Discount tax compensation amount. | [optional] 
**discountTaxCompensationInvoiced** | **float** | Discount tax compensation invoiced amount. | [optional] 
**discountTaxCompensationRefunded** | **float** | Discount tax compensation refunded amount. | [optional] 
**holdBeforeState** | **string** | Hold before state. | [optional] 
**holdBeforeStatus** | **string** | Hold before status. | [optional] 
**incrementId** | **string** | Increment ID. | [optional] 
**isVirtual** | **int** | Is-virtual flag value. | [optional] 
**orderCurrencyCode** | **string** | Order currency code. | [optional] 
**originalIncrementId** | **string** | Original increment ID. | [optional] 
**paymentAuthorizationAmount** | **float** | Payment authorization amount. | [optional] 
**paymentAuthExpiration** | **int** | Payment authorization expiration date. | [optional] 
**protectCode** | **string** | Protect code. | [optional] 
**quoteAddressId** | **int** | Quote address ID. | [optional] 
**quoteId** | **int** | Quote ID. | [optional] 
**relationChildId** | **string** | Relation child ID. | [optional] 
**relationChildRealId** | **string** | Relation child real ID. | [optional] 
**relationParentId** | **string** | Relation parent ID. | [optional] 
**relationParentRealId** | **string** | Relation parent real ID. | [optional] 
**remoteIp** | **string** | Remote IP address. | [optional] 
**shippingAmount** | **float** | Shipping amount. | [optional] 
**shippingCanceled** | **float** | Shipping canceled amount. | [optional] 
**shippingDescription** | **string** | Shipping description. | [optional] 
**shippingDiscountAmount** | **float** | Shipping discount amount. | [optional] 
**shippingDiscountTaxCompensationAmount** | **float** | Shipping discount tax compensation amount. | [optional] 
**shippingInclTax** | **float** | Shipping including tax amount. | [optional] 
**shippingInvoiced** | **float** | Shipping invoiced amount. | [optional] 
**shippingRefunded** | **float** | Shipping refunded amount. | [optional] 
**shippingTaxAmount** | **float** | Shipping tax amount. | [optional] 
**shippingTaxRefunded** | **float** | Shipping tax refunded amount. | [optional] 
**state** | **string** | State. | [optional] 
**status** | **string** | Status. | [optional] 
**storeCurrencyCode** | **string** | Store currency code. | [optional] 
**storeId** | **int** | Store ID. | [optional] 
**storeName** | **string** | Store name. | [optional] 
**storeToBaseRate** | **float** | Store-to-base rate. | [optional] 
**storeToOrderRate** | **float** | Store-to-order rate. | [optional] 
**subtotal** | **float** | Subtotal. | [optional] 
**subtotalCanceled** | **float** | Subtotal canceled amount. | [optional] 
**subtotalInclTax** | **float** | Subtotal including tax amount. | [optional] 
**subtotalInvoiced** | **float** | Subtotal invoiced amount. | [optional] 
**subtotalRefunded** | **float** | Subtotal refunded amount. | [optional] 
**taxAmount** | **float** | Tax amount. | [optional] 
**taxCanceled** | **float** | Tax canceled amount. | [optional] 
**taxInvoiced** | **float** | Tax invoiced amount. | [optional] 
**taxRefunded** | **float** | Tax refunded amount. | [optional] 
**totalCanceled** | **float** | Total canceled. | [optional] 
**totalDue** | **float** | Total due. | [optional] 
**totalInvoiced** | **float** | Total invoiced amount. | [optional] 
**totalItemCount** | **int** | Total item count. | [optional] 
**totalOfflineRefunded** | **float** | Total offline refunded amount. | [optional] 
**totalOnlineRefunded** | **float** | Total online refunded amount. | [optional] 
**totalPaid** | **float** | Total paid. | [optional] 
**totalQtyOrdered** | **float** | Total quantity ordered. | [optional] 
**totalRefunded** | **float** | Total amount refunded. | [optional] 
**updatedAt** | **string** | Updated-at timestamp. | [optional] 
**weight** | **float** | Weight. | [optional] 
**xForwardedFor** | **string** | X-Forwarded-For field value. | [optional] 
**items** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderItemInterface[]**](SalesDataOrderItemInterface.md) | Array of items. | 
**billingAddress** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderAddressInterface**](SalesDataOrderAddressInterface.md) |  | [optional] 
**payment** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderPaymentInterface**](SalesDataOrderPaymentInterface.md) |  | [optional] 
**statusHistories** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderStatusHistoryInterface[]**](SalesDataOrderStatusHistoryInterface.md) | Array of status histories. | [optional] 
**extensionAttributes** | [**\SpringImport\Swagger\Magento2\Client\Model\SalesDataOrderExtensionInterface**](SalesDataOrderExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


