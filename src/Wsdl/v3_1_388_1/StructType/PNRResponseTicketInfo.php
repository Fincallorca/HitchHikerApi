<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseTicketInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseTicketInfo
 * @subpackage Structs
 */
class PNRResponseTicketInfo extends AbstractStructBase
{
    /**
     * The DateOfIssuse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DateOfIssuse;
    /**
     * The DocumentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo
     */
    public $DocumentInfo;
    /**
     * The FareCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareCalculation;
    /**
     * The FareInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseFareInfo
     */
    public $FareInfo;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The FormOfPaymentAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormOfPaymentAmount;
    /**
     * The FormOfPaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormOfPaymentType;
    /**
     * The IATANumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IATANumber;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The PointOfIssue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PointOfIssue;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
     */
    public $Taxes;
    /**
     * The TicketStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketStatus;
    /**
     * Constructor method for PNRResponseTicketInfo
     * @uses PNRResponseTicketInfo::setDateOfIssuse()
     * @uses PNRResponseTicketInfo::setDocumentInfo()
     * @uses PNRResponseTicketInfo::setFareCalculation()
     * @uses PNRResponseTicketInfo::setFareInfo()
     * @uses PNRResponseTicketInfo::setFirstName()
     * @uses PNRResponseTicketInfo::setFormOfPaymentAmount()
     * @uses PNRResponseTicketInfo::setFormOfPaymentType()
     * @uses PNRResponseTicketInfo::setIATANumber()
     * @uses PNRResponseTicketInfo::setLastName()
     * @uses PNRResponseTicketInfo::setPointOfIssue()
     * @uses PNRResponseTicketInfo::setTaxes()
     * @uses PNRResponseTicketInfo::setTicketStatus()
     * @param string $dateOfIssuse
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo $documentInfo
     * @param string $fareCalculation
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseFareInfo $fareInfo
     * @param string $firstName
     * @param string $formOfPaymentAmount
     * @param string $formOfPaymentType
     * @param string $iATANumber
     * @param string $lastName
     * @param string $pointOfIssue
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxes
     * @param string $ticketStatus
     */
    public function __construct($dateOfIssuse = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo $documentInfo = null, $fareCalculation = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseFareInfo $fareInfo = null, $firstName = null, $formOfPaymentAmount = null, $formOfPaymentType = null, $iATANumber = null, $lastName = null, $pointOfIssue = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxes = null, $ticketStatus = null)
    {
        $this
            ->setDateOfIssuse($dateOfIssuse)
            ->setDocumentInfo($documentInfo)
            ->setFareCalculation($fareCalculation)
            ->setFareInfo($fareInfo)
            ->setFirstName($firstName)
            ->setFormOfPaymentAmount($formOfPaymentAmount)
            ->setFormOfPaymentType($formOfPaymentType)
            ->setIATANumber($iATANumber)
            ->setLastName($lastName)
            ->setPointOfIssue($pointOfIssue)
            ->setTaxes($taxes)
            ->setTicketStatus($ticketStatus);
    }
    /**
     * Get DateOfIssuse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateOfIssuse()
    {
        return isset($this->DateOfIssuse) ? $this->DateOfIssuse : null;
    }
    /**
     * Set DateOfIssuse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateOfIssuse
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setDateOfIssuse($dateOfIssuse = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfIssuse) && !is_string($dateOfIssuse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfIssuse)), __LINE__);
        }
        if (is_null($dateOfIssuse) || (is_array($dateOfIssuse) && empty($dateOfIssuse))) {
            unset($this->DateOfIssuse);
        } else {
            $this->DateOfIssuse = $dateOfIssuse;
        }
        return $this;
    }
    /**
     * Get DocumentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo|null
     */
    public function getDocumentInfo()
    {
        return isset($this->DocumentInfo) ? $this->DocumentInfo : null;
    }
    /**
     * Set DocumentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo $documentInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setDocumentInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo $documentInfo = null)
    {
        if (is_null($documentInfo) || (is_array($documentInfo) && empty($documentInfo))) {
            unset($this->DocumentInfo);
        } else {
            $this->DocumentInfo = $documentInfo;
        }
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
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
     * Get FareInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseFareInfo|null
     */
    public function getFareInfo()
    {
        return isset($this->FareInfo) ? $this->FareInfo : null;
    }
    /**
     * Set FareInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseFareInfo $fareInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setFareInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseFareInfo $fareInfo = null)
    {
        if (is_null($fareInfo) || (is_array($fareInfo) && empty($fareInfo))) {
            unset($this->FareInfo);
        } else {
            $this->FareInfo = $fareInfo;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
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
     * Get FormOfPaymentAmount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormOfPaymentAmount()
    {
        return isset($this->FormOfPaymentAmount) ? $this->FormOfPaymentAmount : null;
    }
    /**
     * Set FormOfPaymentAmount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $formOfPaymentAmount
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setFormOfPaymentAmount($formOfPaymentAmount = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPaymentAmount) && !is_string($formOfPaymentAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPaymentAmount)), __LINE__);
        }
        if (is_null($formOfPaymentAmount) || (is_array($formOfPaymentAmount) && empty($formOfPaymentAmount))) {
            unset($this->FormOfPaymentAmount);
        } else {
            $this->FormOfPaymentAmount = $formOfPaymentAmount;
        }
        return $this;
    }
    /**
     * Get FormOfPaymentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormOfPaymentType()
    {
        return isset($this->FormOfPaymentType) ? $this->FormOfPaymentType : null;
    }
    /**
     * Set FormOfPaymentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $formOfPaymentType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setFormOfPaymentType($formOfPaymentType = null)
    {
        // validation for constraint: string
        if (!is_null($formOfPaymentType) && !is_string($formOfPaymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($formOfPaymentType)), __LINE__);
        }
        if (is_null($formOfPaymentType) || (is_array($formOfPaymentType) && empty($formOfPaymentType))) {
            unset($this->FormOfPaymentType);
        } else {
            $this->FormOfPaymentType = $formOfPaymentType;
        }
        return $this;
    }
    /**
     * Get IATANumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIATANumber()
    {
        return isset($this->IATANumber) ? $this->IATANumber : null;
    }
    /**
     * Set IATANumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iATANumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setIATANumber($iATANumber = null)
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iATANumber)), __LINE__);
        }
        if (is_null($iATANumber) || (is_array($iATANumber) && empty($iATANumber))) {
            unset($this->IATANumber);
        } else {
            $this->IATANumber = $iATANumber;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
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
     * Get PointOfIssue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPointOfIssue()
    {
        return isset($this->PointOfIssue) ? $this->PointOfIssue : null;
    }
    /**
     * Set PointOfIssue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pointOfIssue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setPointOfIssue($pointOfIssue = null)
    {
        // validation for constraint: string
        if (!is_null($pointOfIssue) && !is_string($pointOfIssue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointOfIssue)), __LINE__);
        }
        if (is_null($pointOfIssue) || (is_array($pointOfIssue) && empty($pointOfIssue))) {
            unset($this->PointOfIssue);
        } else {
            $this->PointOfIssue = $pointOfIssue;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
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
     * Get TicketStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketStatus()
    {
        return isset($this->TicketStatus) ? $this->TicketStatus : null;
    }
    /**
     * Set TicketStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
     */
    public function setTicketStatus($ticketStatus = null)
    {
        // validation for constraint: string
        if (!is_null($ticketStatus) && !is_string($ticketStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketStatus)), __LINE__);
        }
        if (is_null($ticketStatus) || (is_array($ticketStatus) && empty($ticketStatus))) {
            unset($this->TicketStatus);
        } else {
            $this->TicketStatus = $ticketStatus;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo
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
