<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFilter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentFilter
 * @subpackage Structs
 */
class PaymentFilter extends AbstractStructBase
{
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareType;
    /**
     * The FilterDetails
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails
     */
    public $FilterDetails;
    /**
     * Constructor method for PaymentFilter
     * @uses PaymentFilter::setFareType()
     * @uses PaymentFilter::setFilterDetails()
     * @param string $fareType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $filterDetails
     */
    public function __construct($fareType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $filterDetails = null)
    {
        $this
            ->setFareType($fareType)
            ->setFilterDetails($filterDetails);
    }
    /**
     * Get FareType value
     * @return string|null
     */
    public function getFareType()
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilter
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::valueIsValid($fareType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareType = $fareType;
        return $this;
    }
    /**
     * Get FilterDetails value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails|null
     */
    public function getFilterDetails()
    {
        return $this->FilterDetails;
    }
    /**
     * Set FilterDetails value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $filterDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilter
     */
    public function setFilterDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPaymentFilterDetails $filterDetails = null)
    {
        $this->FilterDetails = $filterDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaymentFilter
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
