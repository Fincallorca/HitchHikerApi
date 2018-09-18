<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for PassengerTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PassengerTypeEnum
 * @subpackage Enumerations
 */
class PassengerTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Adult'
     * @return string 'Adult'
     */
    const VALUE_ADULT = 'Adult';
    /**
     * Constant for value 'Youth'
     * @return string 'Youth'
     */
    const VALUE_YOUTH = 'Youth';
    /**
     * Constant for value 'Senior'
     * @return string 'Senior'
     */
    const VALUE_SENIOR = 'Senior';
    /**
     * Constant for value 'Partner'
     * @return string 'Partner'
     */
    const VALUE_PARTNER = 'Partner';
    /**
     * Constant for value 'Ethnic'
     * @return string 'Ethnic'
     */
    const VALUE_ETHNIC = 'Ethnic';
    /**
     * Constant for value 'Agent'
     * @return string 'Agent'
     */
    const VALUE_AGENT = 'Agent';
    /**
     * Constant for value 'YouthStudent'
     * @return string 'YouthStudent'
     */
    const VALUE_YOUTH_STUDENT = 'YouthStudent';
    /**
     * Constant for value 'Student'
     * @return string 'Student'
     */
    const VALUE_STUDENT = 'Student';
    /**
     * Constant for value 'Military'
     * @return string 'Military'
     */
    const VALUE_MILITARY = 'Military';
    /**
     * Constant for value 'Sailor'
     * @return string 'Sailor'
     */
    const VALUE_SAILOR = 'Sailor';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
    /**
     * Constant for value 'WebFare'
     * @return string 'WebFare'
     */
    const VALUE_WEB_FARE = 'WebFare';
    /**
     * Constant for value 'Infant'
     * @return string 'Infant'
     */
    const VALUE_INFANT = 'Infant';
    /**
     * Constant for value 'Child'
     * @return string 'Child'
     */
    const VALUE_CHILD = 'Child';
    /**
     * Constant for value 'EthnicChild'
     * @return string 'EthnicChild'
     */
    const VALUE_ETHNIC_CHILD = 'EthnicChild';
    /**
     * Constant for value 'EthnicInfant'
     * @return string 'EthnicInfant'
     */
    const VALUE_ETHNIC_INFANT = 'EthnicInfant';
    /**
     * Constant for value 'ITX'
     * @return string 'ITX'
     */
    const VALUE_ITX = 'ITX';
    /**
     * Constant for value 'ITXChild'
     * @return string 'ITXChild'
     */
    const VALUE_ITXCHILD = 'ITXChild';
    /**
     * Constant for value 'ITXInfant'
     * @return string 'ITXInfant'
     */
    const VALUE_ITXINFANT = 'ITXInfant';
    /**
     * Constant for value 'MilitaryChild'
     * @return string 'MilitaryChild'
     */
    const VALUE_MILITARY_CHILD = 'MilitaryChild';
    /**
     * Constant for value 'MilitaryInfant'
     * @return string 'MilitaryInfant'
     */
    const VALUE_MILITARY_INFANT = 'MilitaryInfant';
    /**
     * Constant for value 'GroupChild'
     * @return string 'GroupChild'
     */
    const VALUE_GROUP_CHILD = 'GroupChild';
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
     * @uses self::VALUE_ADULT
     * @uses self::VALUE_YOUTH
     * @uses self::VALUE_SENIOR
     * @uses self::VALUE_PARTNER
     * @uses self::VALUE_ETHNIC
     * @uses self::VALUE_AGENT
     * @uses self::VALUE_YOUTH_STUDENT
     * @uses self::VALUE_STUDENT
     * @uses self::VALUE_MILITARY
     * @uses self::VALUE_SAILOR
     * @uses self::VALUE_GROUP
     * @uses self::VALUE_WEB_FARE
     * @uses self::VALUE_INFANT
     * @uses self::VALUE_CHILD
     * @uses self::VALUE_ETHNIC_CHILD
     * @uses self::VALUE_ETHNIC_INFANT
     * @uses self::VALUE_ITX
     * @uses self::VALUE_ITXCHILD
     * @uses self::VALUE_ITXINFANT
     * @uses self::VALUE_MILITARY_CHILD
     * @uses self::VALUE_MILITARY_INFANT
     * @uses self::VALUE_GROUP_CHILD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ADULT,
            self::VALUE_YOUTH,
            self::VALUE_SENIOR,
            self::VALUE_PARTNER,
            self::VALUE_ETHNIC,
            self::VALUE_AGENT,
            self::VALUE_YOUTH_STUDENT,
            self::VALUE_STUDENT,
            self::VALUE_MILITARY,
            self::VALUE_SAILOR,
            self::VALUE_GROUP,
            self::VALUE_WEB_FARE,
            self::VALUE_INFANT,
            self::VALUE_CHILD,
            self::VALUE_ETHNIC_CHILD,
            self::VALUE_ETHNIC_INFANT,
            self::VALUE_ITX,
            self::VALUE_ITXCHILD,
            self::VALUE_ITXINFANT,
            self::VALUE_MILITARY_CHILD,
            self::VALUE_MILITARY_INFANT,
            self::VALUE_GROUP_CHILD,
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
