# DillerAPI
The official Diller Retailer API (beta version) <br/> Last Updated: 12-10-2023 14:38

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v2.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 7.4 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "composer",
      "url": "https://gitlab.com/api/v4/group/56754626/-/packages/composer/"
    }
  ],
  "require": {
    "diller-loyalty/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DillerAPI/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$memberId = "memberId_example"; // string | 
$couponCode = "couponCode_example"; // string | 
$body = new \DillerAPI\Model\CouponCancelReservationRequest(); // \DillerAPI\Model\CouponCancelReservationRequest | 

try {
    $result = $apiInstance->cancelCouponReservation($storeId, $memberId, $couponCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->cancelCouponReservation: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$memberId = "memberId_example"; // string | 

try {
    $result = $apiInstance->getMemberCoupons($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getMemberCoupons: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$alsoInactive = true; // bool | When true, it also return coupons that are not currently valid.

try {
    $result = $apiInstance->getStoreCoupons($storeId, $alsoInactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->getStoreCoupons: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The storeId
$memberId = "memberId_example"; // string | The memberId
$couponCode = "couponCode_example"; // string | The coupon code
$body = new \DillerAPI\Model\CouponReservationRequest(); // \DillerAPI\Model\CouponReservationRequest | Details of the coupon reservation request

try {
    $result = $apiInstance->reserveCoupon($storeId, $memberId, $couponCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->reserveCoupon: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | The member id
$couponCode = "couponCode_example"; // string | The coupon code

try {
    $result = $apiInstance->validateCoupon($storeId, $memberId, $couponCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->validateCoupon: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id

try {
    $result = $apiInstance->getInvitedFriends($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->getInvitedFriends: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$invitationToken = "invitationToken_example"; // string | The invitation token

try {
    $result = $apiInstance->getReferrals($storeId, $memberId, $invitationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationsApi->getReferrals: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | The member id

try {
    $result = $apiInstance->deleteMember($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->deleteMember: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$body = new \DillerAPI\Model\EnrollMemberRequest(); // \DillerAPI\Model\EnrollMemberRequest | 

try {
    $result = $apiInstance->enrollMember($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->enrollMember: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The Store id
$memberId = "memberId_example"; // string | The member id

try {
    $result = $apiInstance->getDependents($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getDependents: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The member's store id
$email = "email_example"; // string | Email Address of the member
$phone = "phone_example"; // string | The phone number can be entered in international format, starting with either \"00\" or \"+\".              If the phone number is entered in national format, it will be assumed that the number belongs               to the same country as the store
$identifierValue = "identifierValue_example"; // string | The extra identifier of a member defined at the store level.
$activationToken = "activationToken_example"; // string | The token value for when a member signed up via POS or any other source, that requires an activation step.

try {
    $result = $apiInstance->getMemberByFilter($storeId, $email, $phone, $identifierValue, $activationToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMemberByFilter: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The id of the store
$memberId = "memberId_example"; // string | The member Id

try {
    $result = $apiInstance->getMemberById($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getMemberById: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | 
$memberId = "memberId_example"; // string | The id of the member

try {
    $result = $apiInstance->getWidgetProfile($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->getWidgetProfile: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id

try {
    $result = $apiInstance->loginOTP($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->loginOTP: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$body = new \DillerAPI\Model\LoginOtpVerificationRequest(); // \DillerAPI\Model\LoginOtpVerificationRequest | Otp code generated previously using the endpoint /login-otp

try {
    $result = $apiInstance->loginOtpVerification($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->loginOtpVerification: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$body = new \DillerAPI\Model\RegisterMemberRequest(); // \DillerAPI\Model\RegisterMemberRequest | 

try {
    $result = $apiInstance->registerMember($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->registerMember: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$body = new \DillerAPI\Model\Phone(); // \DillerAPI\Model\Phone | The new phone number using the international format

try {
    $result = $apiInstance->resetPhone($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->resetPhone: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$body = new \DillerAPI\Model\ResetPhoneVerificationRequest(); // \DillerAPI\Model\ResetPhoneVerificationRequest | The new phone number using the international format

try {
    $result = $apiInstance->resetPhoneVerification($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->resetPhoneVerification: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The Store Id
$memberId = "memberId_example"; // string | The Member Id
$body = array(new \DillerAPI\Model\Dependent()); // \DillerAPI\Model\Dependent[] | A collection of dependents

try {
    $apiInstance->updateDependents($storeId, $memberId, $body);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->updateDependents: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | The member id
$body = new \DillerAPI\Model\UpdateMemberRequest(); // \DillerAPI\Model\UpdateMemberRequest | 

try {
    $result = $apiInstance->updateMember($storeId, $memberId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->updateMember: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id

try {
    $result = $apiInstance->getStoreMembershipLevel($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MembershipLevelApi->getStoreMembershipLevel: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store Id
$memberId = "memberId_example"; // string | The member Id
$stampId = 56; // int | The stamp Id to cancel the reservation
$body = new \DillerAPI\Model\CouponCancelReservationRequest(); // \DillerAPI\Model\CouponCancelReservationRequest | 

try {
    $result = $apiInstance->cancelStampReservation($storeId, $memberId, $stampId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->cancelStampReservation: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$memberId = "memberId_example"; // string | 

try {
    $result = $apiInstance->getMemberStampCards($storeId, $memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->getMemberStampCards: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$alsoInactive = true; // bool | When true, it also return stamp cards that are not currently valid.

try {
    $result = $apiInstance->getStoreStamps($storeId, $alsoInactive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->getStoreStamps: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The storeId
$memberId = "memberId_example"; // string | The memberId
$stampId = 56; // int | The stam id
$body = new \DillerAPI\Model\StampReservationRequest(); // \DillerAPI\Model\StampReservationRequest | Details of the coupon reservation request

try {
    $result = $apiInstance->reserveStamp($storeId, $memberId, $stampId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampCardsApi->reserveStamp: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id
$body = new \DillerAPI\Model\CreateDepartmentRequest(); // \DillerAPI\Model\CreateDepartmentRequest | 

try {
    $result = $apiInstance->createDepartment($storeId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->createDepartment: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The id of the store

try {
    $result = $apiInstance->get($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->get: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getAll: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The store id

try {
    $result = $apiInstance->getDepartments($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getDepartments: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storeId = "storeId_example"; // string | The Id of the store

try {
    $result = $apiInstance->getSegments($storeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoresApi->getSegments: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
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

// Configure OAuth2 access token for authorization: OAuth2
$config = DillerAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new DillerAPI\Api{{classname}}(
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
## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CouponsApi* | [**cancelCouponReservation**](docs/Api/CouponsApi.md#cancelcouponreservation) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/cancel-reservation | This endpoint should be called when a transaction is completed or cancelled to   release the coupon reservation and avoid making it unavailable for other transactions.
*CouponsApi* | [**getMemberCoupons**](docs/Api/CouponsApi.md#getmembercoupons) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/coupons | This endpoint retrieves available coupons for a specific member.
*CouponsApi* | [**getStoreCoupons**](docs/Api/CouponsApi.md#getstorecoupons) | **GET** /api/v2.0/stores/{storeId}/coupons | Retrieves store coupons. By default it only retrieves active coupons.
*CouponsApi* | [**reserveCoupon**](docs/Api/CouponsApi.md#reservecoupon) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/reserve | This endpoint enables users to reserve a coupon for their pending orders,   thereby ensuring that the coupon cannot be used for any other transactions.
*CouponsApi* | [**validateCoupon**](docs/Api/CouponsApi.md#validatecoupon) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/coupons/{couponCode}/validate | This endpoint validates a coupon code for a specific member.
*InvitationsApi* | [**getInvitedFriends**](docs/Api/InvitationsApi.md#getinvitedfriends) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/invited-friends | Returns a list of all invited friends
*InvitationsApi* | [**getReferrals**](docs/Api/InvitationsApi.md#getreferrals) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/invited-friend | Returns an invited friend by invitation token
*MembersApi* | [**deleteMember**](docs/Api/MembersApi.md#deletemember) | **DELETE** /api/v2.0/stores/{storeId}/members/{memberId} | This endpoint deletes a member.   Note that while the member may not be immediately removed from the system,   they will be marked for deletion and permanently removed after a period of 10 days.
*MembersApi* | [**enrollMember**](docs/Api/MembersApi.md#enrollmember) | **POST** /api/v2.0/stores/{storeId}/members/enroll | Enrolls a member into the Loyalty Program.  This will create a new member in the system and send an activation link via SMS to the member.  If the member already exists, and GDPR is not accepted yet then a new activation link will be sent.  If the store does not have SMS enabled, the activation link will be sent by email.
*MembersApi* | [**getDependents**](docs/Api/MembersApi.md#getdependents) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/dependents | Retrieves a member&#x27;s dependents
*MembersApi* | [**getMemberByFilter**](docs/Api/MembersApi.md#getmemberbyfilter) | **GET** /api/v2.0/stores/{storeId}/members/search | Searchs members by email, phone number, activation token or any other identifier (country dependant - eg. SSN, licence plate, National ID)
*MembersApi* | [**getMemberById**](docs/Api/MembersApi.md#getmemberbyid) | **GET** /api/v2.0/stores/{storeId}/members/{memberId} | Get member by id
*MembersApi* | [**getWidgetProfile**](docs/Api/MembersApi.md#getwidgetprofile) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/widgets/profile | Get member widget details
*MembersApi* | [**loginOTP**](docs/Api/MembersApi.md#loginotp) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/login-otp | Sends a login OTP code that allows the member to login without the password.
*MembersApi* | [**loginOtpVerification**](docs/Api/MembersApi.md#loginotpverification) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/login-otp-verification | Handles the verification of a One-Time Password (OTP) code during the login process.
*MembersApi* | [**registerMember**](docs/Api/MembersApi.md#registermember) | **POST** /api/v2.0/stores/{storeId}/members | Adds a new member to the store.  This will create a new member and automatically add him to the Loyalty Program, followed by a welcome SMS.  If the store is not configured to send SMS, a welcome email is sent instead.
*MembersApi* | [**resetPhone**](docs/Api/MembersApi.md#resetphone) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/reset-phone | Initiates the process of resetting or changing the member&#x27;s phone number.
*MembersApi* | [**resetPhoneVerification**](docs/Api/MembersApi.md#resetphoneverification) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/reset-phone-verification | Finishes the process of resetting or changing the member&#x27;s phone number.
*MembersApi* | [**updateDependents**](docs/Api/MembersApi.md#updatedependents) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/dependents | Atomically add, update, or delete dependent objects. The dependent collection should represent all members&#x27; dependents.  To add a new dependent, set the id field to 0.  To update a dependent, send the entire dependent object.  To delete a dependent, remove it from the list.
*MembersApi* | [**updateMember**](docs/Api/MembersApi.md#updatemember) | **PUT** /api/v2.0/stores/{storeId}/members/{memberId} | Updates the member&#x27;s data that is on the payload.
*MembershipLevelApi* | [**getStoreMembershipLevel**](docs/Api/MembershipLevelApi.md#getstoremembershiplevel) | **GET** /api/v2.0/stores/{storeId}/membership-level | Retrieve store membership level information
*StampCardsApi* | [**cancelStampReservation**](docs/Api/StampCardsApi.md#cancelstampreservation) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards/{stampId}/cancel-reservation | The endpoint /cancel-reservation should be called when a transaction is completed or cancelled to  release the stamp reservation and avoid making it unavailable for other transactions.
*StampCardsApi* | [**getMemberStampCards**](docs/Api/StampCardsApi.md#getmemberstampcards) | **GET** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards | Get member active stamp cards
*StampCardsApi* | [**getStoreStamps**](docs/Api/StampCardsApi.md#getstorestamps) | **GET** /api/v2.0/stores/{storeId}/stamp-cards | Retrieves store stamp cards. By default it only retrieves active stamp cards.
*StampCardsApi* | [**reserveStamp**](docs/Api/StampCardsApi.md#reservestamp) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/stamp-cards/{stampId}/reserve | This endpoint enables users to reserve a stamp for their pending orders,  thereby ensuring that the stamp cannot be used for any other transactions.
*StoresApi* | [**createDepartment**](docs/Api/StoresApi.md#createdepartment) | **POST** /api/v2.0/stores/{storeId}/departments | Add store department
*StoresApi* | [**get**](docs/Api/StoresApi.md#get) | **GET** /api/v2.0/stores/{storeId} | Gets store
*StoresApi* | [**getAll**](docs/Api/StoresApi.md#getall) | **GET** /api/v2.0/stores | Get all stores that the client has access to
*StoresApi* | [**getDepartments**](docs/Api/StoresApi.md#getdepartments) | **GET** /api/v2.0/stores/{storeId}/departments | Get store departments
*StoresApi* | [**getSegments**](docs/Api/StoresApi.md#getsegments) | **GET** /api/v2.0/stores/{storeId}/segments | Retrieves all store&#x27;s segments
*TransactionsApi* | [**cancelTransaction**](docs/Api/TransactionsApi.md#canceltransaction) | **POST** /api/v2.0/stores/{storeId}/transactions/{transactionId}/cancel | Cancel transaction
*TransactionsApi* | [**createTransaction**](docs/Api/TransactionsApi.md#createtransaction) | **POST** /api/v2.0/stores/{storeId}/members/{memberId}/transactions | Creates transaction

## Documentation For Models

 - [ActionResponse](docs/Model/ActionResponse.md)
 - [Address](docs/Model/Address.md)
 - [ApiError](docs/Model/ApiError.md)
 - [CancelationReason](docs/Model/CancelationReason.md)
 - [Consent](docs/Model/Consent.md)
 - [CouponCancelReservationRequest](docs/Model/CouponCancelReservationRequest.md)
 - [CouponDiscountType](docs/Model/CouponDiscountType.md)
 - [CouponReservationRequest](docs/Model/CouponReservationRequest.md)
 - [CouponTarget](docs/Model/CouponTarget.md)
 - [CouponType](docs/Model/CouponType.md)
 - [CreateDepartmentRequest](docs/Model/CreateDepartmentRequest.md)
 - [CreateTransactionRequest](docs/Model/CreateTransactionRequest.md)
 - [Dependent](docs/Model/Dependent.md)
 - [EnrollMemberRequest](docs/Model/EnrollMemberRequest.md)
 - [ExternalCouponIdentifier](docs/Model/ExternalCouponIdentifier.md)
 - [Gender](docs/Model/Gender.md)
 - [GlobalProductIdentifier](docs/Model/GlobalProductIdentifier.md)
 - [GtinType](docs/Model/GtinType.md)
 - [InvitedFriendResponse](docs/Model/InvitedFriendResponse.md)
 - [LoginOtpVerificationRequest](docs/Model/LoginOtpVerificationRequest.md)
 - [MemberConsent](docs/Model/MemberConsent.md)
 - [MemberCouponResponse](docs/Model/MemberCouponResponse.md)
 - [MemberIdentifier](docs/Model/MemberIdentifier.md)
 - [MemberMembershipDetail](docs/Model/MemberMembershipDetail.md)
 - [MemberProfileWidgetResponse](docs/Model/MemberProfileWidgetResponse.md)
 - [MemberResponse](docs/Model/MemberResponse.md)
 - [MemberSegmentResponse](docs/Model/MemberSegmentResponse.md)
 - [MemberStampCard](docs/Model/MemberStampCard.md)
 - [Origin](docs/Model/Origin.md)
 - [PaymentDetails](docs/Model/PaymentDetails.md)
 - [Phone](docs/Model/Phone.md)
 - [PlatformType](docs/Model/PlatformType.md)
 - [PointsSystem](docs/Model/PointsSystem.md)
 - [ProductCategory](docs/Model/ProductCategory.md)
 - [ProductDetail](docs/Model/ProductDetail.md)
 - [RegisterMemberRequest](docs/Model/RegisterMemberRequest.md)
 - [ResetPhoneVerificationRequest](docs/Model/ResetPhoneVerificationRequest.md)
 - [SegmentOption](docs/Model/SegmentOption.md)
 - [SegmentType](docs/Model/SegmentType.md)
 - [SegmentValue](docs/Model/SegmentValue.md)
 - [StampReservationRequest](docs/Model/StampReservationRequest.md)
 - [StoreCouponResponse](docs/Model/StoreCouponResponse.md)
 - [StoreDepartmentResponse](docs/Model/StoreDepartmentResponse.md)
 - [StoreMembershipLevelResponse](docs/Model/StoreMembershipLevelResponse.md)
 - [StoreResponse](docs/Model/StoreResponse.md)
 - [StoreSegmentResponse](docs/Model/StoreSegmentResponse.md)
 - [StoreStampCardResponse](docs/Model/StoreStampCardResponse.md)
 - [TransactionDetailRequest](docs/Model/TransactionDetailRequest.md)
 - [UpdateMemberRequest](docs/Model/UpdateMemberRequest.md)

## Documentation For Authorization


## OAuth2

- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: 
 - ****: 


## Author


