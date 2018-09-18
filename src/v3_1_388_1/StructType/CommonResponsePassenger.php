<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonResponsePassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CommonResponsePassenger
 * @subpackage Structs
 */
class CommonResponsePassenger extends AbstractStructBase
{
    /**
     * The EquivalentPassengerPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentPassengerPrice;
    /**
     * The EquivalentTotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalTax;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The PassengerFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PassengerFare;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerType;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalTax;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * Constructor method for CommonResponsePassenger
     * @uses CommonResponsePassenger::setEquivalentPassengerPrice()
     * @uses CommonResponsePassenger::setEquivalentTotalTax()
     * @uses CommonResponsePassenger::setFirstName()
     * @uses CommonResponsePassenger::setLastName()
     * @uses CommonResponsePassenger::setPassengerFare()
     * @uses CommonResponsePassenger::setPassengerType()
     * @uses CommonResponsePassenger::setTotalTax()
     * @uses CommonResponsePassenger::setType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPassengerPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax
     * @param string $firstName
     * @param string $lastName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare
     * @param string $passengerType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     * @param string $type
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPassengerPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax = null, $firstName = null, $lastName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $passengerFare = null, $passengerType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null, $type = null)
    {
        $this
            ->setEquivalentPassengerPrice($equivalentPassengerPrice)
            ->setEquivalentTotalTax($equivalentTotalTax)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPassengerFare($passengerFare)
            ->setPassengerType($passengerType)
            ->setTotalTax($totalTax)
            ->setType($type);
    }
    /**
     * Get EquivalentPassengerPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentPassengerPrice()
    {
        return isset($this->EquivalentPassengerPrice) ? $this->EquivalentPassengerPrice : null;
    }
    /**
     * Set EquivalentPassengerPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPassengerPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
     */
    public function setEquivalentPassengerPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPassengerPrice = null)
    {
        if (is_null($equivalentPassengerPrice) || (is_array($equivalentPassengerPrice) && empty($equivalentPassengerPrice))) {
            unset($this->EquivalentPassengerPrice);
        } else {
            $this->EquivalentPassengerPrice = $equivalentPassengerPrice;
        }
        return $this;
    }
    /**
     * Get EquivalentTotalTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalTax()
    {
        return isset($this->EquivalentTotalTax) ? $this->EquivalentTotalTax : null;
    }
    /**
     * Set EquivalentTotalTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
     */
    public function setEquivalentTotalTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax = null)
    {
        if (is_null($equivalentTotalTax) || (is_array($equivalentTotalTax) && empty($equivalentTotalTax))) {
            unset($this->EquivalentTotalTax);
        } else {
            $this->EquivalentTotalTax = $equivalentTotalTax;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName()
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
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
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get TotalTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalTax()
    {
        return isset($this->TotalTax) ? $this->TotalTax : null;
    }
    /**
     * Set TotalTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
     */
    public function setTotalTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        if (is_null($totalTax) || (is_array($totalTax) && empty($totalTax))) {
            unset($this->TotalTax);
        } else {
            $this->TotalTax = $totalTax;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger
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
