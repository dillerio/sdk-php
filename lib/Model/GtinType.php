<?php
/**
 * GtinType
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
 * GtinType Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class GtinType
{
    /**
     * Possible values of this enum
     */
    const ISBN = 'Isbn';
    const UPC_GTIN12 = 'UpcGtin12';
    const EAN_GTIN13 = 'EanGtin13';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
                self::ISBN,
                self::UPC_GTIN12,
                self::EAN_GTIN13
        ];
    }
}
