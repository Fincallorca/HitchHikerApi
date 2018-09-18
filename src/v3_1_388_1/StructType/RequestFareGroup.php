<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestFareGroup StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestFareGroup
 * @subpackage Structs
 */
class RequestFareGroup extends AbstractStructBase
{
    /**
     * The BookingClasses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $BookingClasses;
    /**
     * The CabinClasses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CabinClasses;
    /**
     * The Carriers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $Carriers;
    /**
     * The FareRestrictions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareRestrictions;
    /**
     * The GDSFareTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GDSFareTypes;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for RequestFareGroup
     * @uses RequestFareGroup::setBookingClasses()
     * @uses RequestFareGroup::setCabinClasses()
     * @uses RequestFareGroup::setCarriers()
     * @uses RequestFareGroup::setFareRestrictions()
     * @uses RequestFareGroup::setGDSFareTypes()
     * @uses RequestFareGroup::setTitle()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses
     * @param string $cabinClasses
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers
     * @param string $fareRestrictions
     * @param string $gDSFareTypes
     * @param string $title
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses = null, $cabinClasses = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers = null, $fareRestrictions = null, $gDSFareTypes = null, $title = null)
    {
        $this
            ->setBookingClasses($bookingClasses)
            ->setCabinClasses($cabinClasses)
            ->setCarriers($carriers)
            ->setFareRestrictions($fareRestrictions)
            ->setGDSFareTypes($gDSFareTypes)
            ->setTitle($title);
    }
    /**
     * Get BookingClasses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getBookingClasses()
    {
        return isset($this->BookingClasses) ? $this->BookingClasses : null;
    }
    /**
     * Set BookingClasses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup
     */
    public function setBookingClasses(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $bookingClasses = null)
    {
        if (is_null($bookingClasses) || (is_array($bookingClasses) && empty($bookingClasses))) {
            unset($this->BookingClasses);
        } else {
            $this->BookingClasses = $bookingClasses;
        }
        return $this;
    }
    /**
     * Get CabinClasses value
     * @return string|null
     */
    public function getCabinClasses()
    {
        return $this->CabinClasses;
    }
    /**
     * Set CabinClasses value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cabinClasses
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup
     */
    public function setCabinClasses($cabinClasses = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::valueIsValid($cabinClasses)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cabinClasses, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ClassTypeEnum::getValidValues())), __LINE__);
        }
        $this->CabinClasses = $cabinClasses;
        return $this;
    }
    /**
     * Get Carriers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getCarriers()
    {
        return isset($this->Carriers) ? $this->Carriers : null;
    }
    /**
     * Set Carriers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup
     */
    public function setCarriers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $carriers = null)
    {
        if (is_null($carriers) || (is_array($carriers) && empty($carriers))) {
            unset($this->Carriers);
        } else {
            $this->Carriers = $carriers;
        }
        return $this;
    }
    /**
     * Get FareRestrictions value
     * @return string|null
     */
    public function getFareRestrictions()
    {
        return $this->FareRestrictions;
    }
    /**
     * Set FareRestrictions value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareRestrictionEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareRestrictionEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareRestrictions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup
     */
    public function setFareRestrictions($fareRestrictions = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareRestrictionEnum::valueIsValid($fareRestrictions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareRestrictions, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareRestrictionEnum::getValidValues())), __LINE__);
        }
        $this->FareRestrictions = $fareRestrictions;
        return $this;
    }
    /**
     * Get GDSFareTypes value
     * @return string|null
     */
    public function getGDSFareTypes()
    {
        return $this->GDSFareTypes;
    }
    /**
     * Set GDSFareTypes value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSFareTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSFareTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $gDSFareTypes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup
     */
    public function setGDSFareTypes($gDSFareTypes = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSFareTypeEnum::valueIsValid($gDSFareTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $gDSFareTypes, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSFareTypeEnum::getValidValues())), __LINE__);
        }
        $this->GDSFareTypes = $gDSFareTypes;
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestFareGroup
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
