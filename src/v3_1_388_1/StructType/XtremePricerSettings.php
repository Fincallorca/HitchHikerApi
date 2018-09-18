<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XtremePricerSettings StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:XtremePricerSettings
 * @subpackage Structs
 */
class XtremePricerSettings extends AbstractStructBase
{
    /**
     * The IsAllowed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAllowed;
    /**
     * The XPConcurrentAvails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $XPConcurrentAvails;
    /**
     * The XPMaxConnections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $XPMaxConnections;
    /**
     * The XPMaxMoveDowns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $XPMaxMoveDowns;
    /**
     * The XPSearchMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $XPSearchMode;
    /**
     * Constructor method for XtremePricerSettings
     * @uses XtremePricerSettings::setIsAllowed()
     * @uses XtremePricerSettings::setXPConcurrentAvails()
     * @uses XtremePricerSettings::setXPMaxConnections()
     * @uses XtremePricerSettings::setXPMaxMoveDowns()
     * @uses XtremePricerSettings::setXPSearchMode()
     * @param bool $isAllowed
     * @param int $xPConcurrentAvails
     * @param int $xPMaxConnections
     * @param int $xPMaxMoveDowns
     * @param string $xPSearchMode
     */
    public function __construct($isAllowed = null, $xPConcurrentAvails = null, $xPMaxConnections = null, $xPMaxMoveDowns = null, $xPSearchMode = null)
    {
        $this
            ->setIsAllowed($isAllowed)
            ->setXPConcurrentAvails($xPConcurrentAvails)
            ->setXPMaxConnections($xPMaxConnections)
            ->setXPMaxMoveDowns($xPMaxMoveDowns)
            ->setXPSearchMode($xPSearchMode);
    }
    /**
     * Get IsAllowed value
     * @return bool|null
     */
    public function getIsAllowed()
    {
        return $this->IsAllowed;
    }
    /**
     * Set IsAllowed value
     * @param bool $isAllowed
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings
     */
    public function setIsAllowed($isAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAllowed) && !is_bool($isAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAllowed)), __LINE__);
        }
        $this->IsAllowed = $isAllowed;
        return $this;
    }
    /**
     * Get XPConcurrentAvails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getXPConcurrentAvails()
    {
        return isset($this->XPConcurrentAvails) ? $this->XPConcurrentAvails : null;
    }
    /**
     * Set XPConcurrentAvails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $xPConcurrentAvails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings
     */
    public function setXPConcurrentAvails($xPConcurrentAvails = null)
    {
        // validation for constraint: int
        if (!is_null($xPConcurrentAvails) && !is_numeric($xPConcurrentAvails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xPConcurrentAvails)), __LINE__);
        }
        if (is_null($xPConcurrentAvails) || (is_array($xPConcurrentAvails) && empty($xPConcurrentAvails))) {
            unset($this->XPConcurrentAvails);
        } else {
            $this->XPConcurrentAvails = $xPConcurrentAvails;
        }
        return $this;
    }
    /**
     * Get XPMaxConnections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getXPMaxConnections()
    {
        return isset($this->XPMaxConnections) ? $this->XPMaxConnections : null;
    }
    /**
     * Set XPMaxConnections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $xPMaxConnections
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings
     */
    public function setXPMaxConnections($xPMaxConnections = null)
    {
        // validation for constraint: int
        if (!is_null($xPMaxConnections) && !is_numeric($xPMaxConnections)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xPMaxConnections)), __LINE__);
        }
        if (is_null($xPMaxConnections) || (is_array($xPMaxConnections) && empty($xPMaxConnections))) {
            unset($this->XPMaxConnections);
        } else {
            $this->XPMaxConnections = $xPMaxConnections;
        }
        return $this;
    }
    /**
     * Get XPMaxMoveDowns value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getXPMaxMoveDowns()
    {
        return isset($this->XPMaxMoveDowns) ? $this->XPMaxMoveDowns : null;
    }
    /**
     * Set XPMaxMoveDowns value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $xPMaxMoveDowns
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings
     */
    public function setXPMaxMoveDowns($xPMaxMoveDowns = null)
    {
        // validation for constraint: int
        if (!is_null($xPMaxMoveDowns) && !is_numeric($xPMaxMoveDowns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($xPMaxMoveDowns)), __LINE__);
        }
        if (is_null($xPMaxMoveDowns) || (is_array($xPMaxMoveDowns) && empty($xPMaxMoveDowns))) {
            unset($this->XPMaxMoveDowns);
        } else {
            $this->XPMaxMoveDowns = $xPMaxMoveDowns;
        }
        return $this;
    }
    /**
     * Get XPSearchMode value
     * @return string|null
     */
    public function getXPSearchMode()
    {
        return $this->XPSearchMode;
    }
    /**
     * Set XPSearchMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TmpXPSearchModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TmpXPSearchModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $xPSearchMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings
     */
    public function setXPSearchMode($xPSearchMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TmpXPSearchModeEnum::valueIsValid($xPSearchMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $xPSearchMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TmpXPSearchModeEnum::getValidValues())), __LINE__);
        }
        $this->XPSearchMode = $xPSearchMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\XtremePricerSettings
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
