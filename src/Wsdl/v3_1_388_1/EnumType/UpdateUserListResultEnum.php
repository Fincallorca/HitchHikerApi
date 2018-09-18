<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for UpdateUserListResultEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UpdateUserListResultEnum
 * @subpackage Enumerations
 */
class UpdateUserListResultEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Updated'
     * @return string 'Updated'
     */
    const VALUE_UPDATED = 'Updated';
    /**
     * Constant for value 'UpdateError'
     * @return string 'UpdateError'
     */
    const VALUE_UPDATE_ERROR = 'UpdateError';
    /**
     * Constant for value 'UserListInUse'
     * @return string 'UserListInUse'
     */
    const VALUE_USER_LIST_IN_USE = 'UserListInUse';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_UPDATED
     * @uses self::VALUE_UPDATE_ERROR
     * @uses self::VALUE_USER_LIST_IN_USE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_UPDATED,
            self::VALUE_UPDATE_ERROR,
            self::VALUE_USER_LIST_IN_USE,
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
