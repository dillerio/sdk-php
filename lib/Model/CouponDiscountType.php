<?php
/**
 * CouponDiscountType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DillerAPI\Model;
use \DillerAPI\ObjectSerializer;

/**
 * CouponDiscountType Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class CouponDiscountType
{
    /**
     * Possible values of this enum
     */
    const NOT_DEFINED = 'NotDefined';
    const PERCENTAGE = 'Percentage';
    const FIXED = 'Fixed';
    const FREE_SHIPPING = 'FreeShipping';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
                self::NOT_DEFINED,
                self::PERCENTAGE,
                self::FIXED,
                self::FREE_SHIPPING
        ];
    }
}
