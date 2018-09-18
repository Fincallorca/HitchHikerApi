<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Version StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Version
 * @subpackage Structs
 */
class Version extends AbstractStructBase
{
    /**
     * The _Build
     * @var int
     */
    public $_Build;
    /**
     * The _Major
     * @var int
     */
    public $_Major;
    /**
     * The _Minor
     * @var int
     */
    public $_Minor;
    /**
     * The _Revision
     * @var int
     */
    public $_Revision;
    /**
     * Constructor method for Version
     * @uses Version::set_Build()
     * @uses Version::set_Major()
     * @uses Version::set_Minor()
     * @uses Version::set_Revision()
     * @param int $_Build
     * @param int $_Major
     * @param int $_Minor
     * @param int $_Revision
     */
    public function __construct($_Build = null, $_Major = null, $_Minor = null, $_Revision = null)
    {
        $this
            ->set_Build($_Build)
            ->set_Major($_Major)
            ->set_Minor($_Minor)
            ->set_Revision($_Revision);
    }
    /**
     * Get _Build value
     * @return int|null
     */
    public function get_Build()
    {
        return $this->_Build;
    }
    /**
     * Set _Build value
     * @param int $_Build
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version
     */
    public function set_Build($_Build = null)
    {
        // validation for constraint: int
        if (!is_null($_Build) && !is_numeric($_Build)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_Build)), __LINE__);
        }
        $this->_Build = $_Build;
        return $this;
    }
    /**
     * Get _Major value
     * @return int|null
     */
    public function get_Major()
    {
        return $this->_Major;
    }
    /**
     * Set _Major value
     * @param int $_Major
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version
     */
    public function set_Major($_Major = null)
    {
        // validation for constraint: int
        if (!is_null($_Major) && !is_numeric($_Major)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_Major)), __LINE__);
        }
        $this->_Major = $_Major;
        return $this;
    }
    /**
     * Get _Minor value
     * @return int|null
     */
    public function get_Minor()
    {
        return $this->_Minor;
    }
    /**
     * Set _Minor value
     * @param int $_Minor
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version
     */
    public function set_Minor($_Minor = null)
    {
        // validation for constraint: int
        if (!is_null($_Minor) && !is_numeric($_Minor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_Minor)), __LINE__);
        }
        $this->_Minor = $_Minor;
        return $this;
    }
    /**
     * Get _Revision value
     * @return int|null
     */
    public function get_Revision()
    {
        return $this->_Revision;
    }
    /**
     * Set _Revision value
     * @param int $_Revision
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version
     */
    public function set_Revision($_Revision = null)
    {
        // validation for constraint: int
        if (!is_null($_Revision) && !is_numeric($_Revision)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($_Revision)), __LINE__);
        }
        $this->_Revision = $_Revision;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Version
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
