<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxRequestPassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxRequestPassenger
 * @subpackage Structs
 */
class TaxRequestPassenger extends AbstractStructBase
{
    /**
     * The PassengerFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PassengerFare;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for TaxRequestPassenger
     * @uses TaxRequestPassenger::setPassengerFare()
     * @uses TaxRequestPassenger::setType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare
     * @param string $type
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare = null, $type = null)
    {
        $this
            ->setPassengerFare($passengerFare)
            ->setType($type);
    }
    /**
     * Get PassengerFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPassengerFare()
    {
        return isset($this->PassengerFare) ? $this->PassengerFare : null;
    }
    /**
     * Set PassengerFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger
     */
    public function setPassengerFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare = null)
    {
        if (is_null($passengerFare) || (is_array($passengerFare) && empty($passengerFare))) {
            unset($this->PassengerFare);
        } else {
            $this->PassengerFare = $passengerFare;
        }
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger
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
