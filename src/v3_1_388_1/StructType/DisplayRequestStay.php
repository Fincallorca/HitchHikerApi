<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestStay StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestStay
 * @subpackage Structs
 */
class DisplayRequestStay extends AbstractStructBase
{
    /**
     * The CheckDaysAhead
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CheckDaysAhead;
    /**
     * The CheckDaysBack
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CheckDaysBack;
    /**
     * Constructor method for DisplayRequestStay
     * @uses DisplayRequestStay::setCheckDaysAhead()
     * @uses DisplayRequestStay::setCheckDaysBack()
     * @param int $checkDaysAhead
     * @param int $checkDaysBack
     */
    public function __construct($checkDaysAhead = null, $checkDaysBack = null)
    {
        $this
            ->setCheckDaysAhead($checkDaysAhead)
            ->setCheckDaysBack($checkDaysBack);
    }
    /**
     * Get CheckDaysAhead value
     * @return int|null
     */
    public function getCheckDaysAhead()
    {
        return $this->CheckDaysAhead;
    }
    /**
     * Set CheckDaysAhead value
     * @param int $checkDaysAhead
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay
     */
    public function setCheckDaysAhead($checkDaysAhead = null)
    {
        // validation for constraint: int
        if (!is_null($checkDaysAhead) && !is_numeric($checkDaysAhead)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checkDaysAhead)), __LINE__);
        }
        $this->CheckDaysAhead = $checkDaysAhead;
        return $this;
    }
    /**
     * Get CheckDaysBack value
     * @return int|null
     */
    public function getCheckDaysBack()
    {
        return $this->CheckDaysBack;
    }
    /**
     * Set CheckDaysBack value
     * @param int $checkDaysBack
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay
     */
    public function setCheckDaysBack($checkDaysBack = null)
    {
        // validation for constraint: int
        if (!is_null($checkDaysBack) && !is_numeric($checkDaysBack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($checkDaysBack)), __LINE__);
        }
        $this->CheckDaysBack = $checkDaysBack;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestStay
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
