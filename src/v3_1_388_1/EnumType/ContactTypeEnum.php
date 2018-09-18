<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for ContactTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactTypeEnum
 * @subpackage Enumerations
 */
class ContactTypeEnum
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Home'
     * @return string 'Home'
     */
    const VALUE_HOME = 'Home';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Agent'
     * @return string 'Agent'
     */
    const VALUE_AGENT = 'Agent';
    /**
     * Constant for value 'Mobile'
     * @return string 'Mobile'
     */
    const VALUE_MOBILE = 'Mobile';
    /**
     * Constant for value 'Fax'
     * @return string 'Fax'
     */
    const VALUE_FAX = 'Fax';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_HOME
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_AGENT
     * @uses self::VALUE_MOBILE
     * @uses self::VALUE_FAX
     * @uses self::VALUE_EMAIL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_HOME,
            self::VALUE_BUSINESS,
            self::VALUE_AGENT,
            self::VALUE_MOBILE,
            self::VALUE_FAX,
            self::VALUE_EMAIL,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
