<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCTData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MCTData
 * @subpackage Structs
 */
class MCTData extends AbstractStructBase
{
    /**
     * The MCTHandling
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MCTHandling;
    /**
     * The MCTSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MCTSource;
    /**
     * The MCTValues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT
     */
    public $MCTValues;
    /**
     * Constructor method for MCTData
     * @uses MCTData::setMCTHandling()
     * @uses MCTData::setMCTSource()
     * @uses MCTData::setMCTValues()
     * @param string $mCTHandling
     * @param string $mCTSource
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mCTValues
     */
    public function __construct($mCTHandling = null, $mCTSource = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mCTValues = null)
    {
        $this
            ->setMCTHandling($mCTHandling)
            ->setMCTSource($mCTSource)
            ->setMCTValues($mCTValues);
    }
    /**
     * Get MCTHandling value
     * @return string|null
     */
    public function getMCTHandling()
    {
        return $this->MCTHandling;
    }
    /**
     * Set MCTHandling value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTHadlingEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTHadlingEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mCTHandling
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData
     */
    public function setMCTHandling($mCTHandling = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTHadlingEnum::valueIsValid($mCTHandling)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mCTHandling, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTHadlingEnum::getValidValues())), __LINE__);
        }
        $this->MCTHandling = $mCTHandling;
        return $this;
    }
    /**
     * Get MCTSource value
     * @return string|null
     */
    public function getMCTSource()
    {
        return $this->MCTSource;
    }
    /**
     * Set MCTSource value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTSourceEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTSourceEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mCTSource
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData
     */
    public function setMCTSource($mCTSource = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTSourceEnum::valueIsValid($mCTSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mCTSource, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\MCTSourceEnum::getValidValues())), __LINE__);
        }
        $this->MCTSource = $mCTSource;
        return $this;
    }
    /**
     * Get MCTValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT|null
     */
    public function getMCTValues()
    {
        return isset($this->MCTValues) ? $this->MCTValues : null;
    }
    /**
     * Set MCTValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mCTValues
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData
     */
    public function setMCTValues(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT $mCTValues = null)
    {
        if (is_null($mCTValues) || (is_array($mCTValues) && empty($mCTValues))) {
            unset($this->MCTValues);
        } else {
            $this->MCTValues = $mCTValues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\MCTData
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
