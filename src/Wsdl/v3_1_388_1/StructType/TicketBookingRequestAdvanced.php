<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingRequestAdvanced StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingRequestAdvanced
 * @subpackage Structs
 */
class TicketBookingRequestAdvanced extends TicketBookingRequestIssue
{
    /**
     * The FareCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareCalculation;
    /**
     * The FareText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareText;
    /**
     * The NetFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $NetFare;
    /**
     * The NetRemitPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $NetRemitPrice;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
     */
    public $Taxes;
    /**
     * The TicketFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TicketFare;
    /**
     * The TicketType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketType;
    /**
     * Constructor method for TicketBookingRequestAdvanced
     * @uses TicketBookingRequestAdvanced::setFareCalculation()
     * @uses TicketBookingRequestAdvanced::setFareText()
     * @uses TicketBookingRequestAdvanced::setNetFare()
     * @uses TicketBookingRequestAdvanced::setNetRemitPrice()
     * @uses TicketBookingRequestAdvanced::setTaxes()
     * @uses TicketBookingRequestAdvanced::setTicketFare()
     * @uses TicketBookingRequestAdvanced::setTicketType()
     * @param string $fareCalculation
     * @param string $fareText
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFare
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netRemitPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare
     * @param string $ticketType
     */
    public function __construct($fareCalculation = null, $fareText = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFare = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netRemitPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare = null, $ticketType = null)
    {
        $this
            ->setFareCalculation($fareCalculation)
            ->setFareText($fareText)
            ->setNetFare($netFare)
            ->setNetRemitPrice($netRemitPrice)
            ->setTaxes($taxes)
            ->setTicketFare($ticketFare)
            ->setTicketType($ticketType);
    }
    /**
     * Get FareCalculation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareCalculation()
    {
        return isset($this->FareCalculation) ? $this->FareCalculation : null;
    }
    /**
     * Set FareCalculation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareCalculation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
     */
    public function setFareCalculation($fareCalculation = null)
    {
        // validation for constraint: string
        if (!is_null($fareCalculation) && !is_string($fareCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareCalculation)), __LINE__);
        }
        if (is_null($fareCalculation) || (is_array($fareCalculation) && empty($fareCalculation))) {
            unset($this->FareCalculation);
        } else {
            $this->FareCalculation = $fareCalculation;
        }
        return $this;
    }
    /**
     * Get FareText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareText()
    {
        return isset($this->FareText) ? $this->FareText : null;
    }
    /**
     * Set FareText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
     */
    public function setFareText($fareText = null)
    {
        // validation for constraint: string
        if (!is_null($fareText) && !is_string($fareText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareText)), __LINE__);
        }
        if (is_null($fareText) || (is_array($fareText) && empty($fareText))) {
            unset($this->FareText);
        } else {
            $this->FareText = $fareText;
        }
        return $this;
    }
    /**
     * Get NetFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getNetFare()
    {
        return isset($this->NetFare) ? $this->NetFare : null;
    }
    /**
     * Set NetFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
     */
    public function setNetFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFare = null)
    {
        if (is_null($netFare) || (is_array($netFare) && empty($netFare))) {
            unset($this->NetFare);
        } else {
            $this->NetFare = $netFare;
        }
        return $this;
    }
    /**
     * Get NetRemitPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getNetRemitPrice()
    {
        return isset($this->NetRemitPrice) ? $this->NetRemitPrice : null;
    }
    /**
     * Set NetRemitPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netRemitPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
     */
    public function setNetRemitPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netRemitPrice = null)
    {
        if (is_null($netRemitPrice) || (is_array($netRemitPrice) && empty($netRemitPrice))) {
            unset($this->NetRemitPrice);
        } else {
            $this->NetRemitPrice = $netRemitPrice;
        }
        return $this;
    }
    /**
     * Get Taxes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail|null
     */
    public function getTaxes()
    {
        return isset($this->Taxes) ? $this->Taxes : null;
    }
    /**
     * Set Taxes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
     */
    public function setTaxes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxes = null)
    {
        if (is_null($taxes) || (is_array($taxes) && empty($taxes))) {
            unset($this->Taxes);
        } else {
            $this->Taxes = $taxes;
        }
        return $this;
    }
    /**
     * Get TicketFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTicketFare()
    {
        return isset($this->TicketFare) ? $this->TicketFare : null;
    }
    /**
     * Set TicketFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
     */
    public function setTicketFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketFare = null)
    {
        if (is_null($ticketFare) || (is_array($ticketFare) && empty($ticketFare))) {
            unset($this->TicketFare);
        } else {
            $this->TicketFare = $ticketFare;
        }
        return $this;
    }
    /**
     * Get TicketType value
     * @return string|null
     */
    public function getTicketType()
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketBookingTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketBookingTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ticketType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
     */
    public function setTicketType($ticketType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketBookingTypeEnum::valueIsValid($ticketType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ticketType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TicketBookingTypeEnum::getValidValues())), __LINE__);
        }
        $this->TicketType = $ticketType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestAdvanced
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
