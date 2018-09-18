<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTicketRequestTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelTicketRequestTicket
 * @subpackage Structs
 */
class CancelTicketRequestTicket extends AbstractStructBase
{
    /**
     * The Fare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Fare;
    /**
     * The FirstTicketNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FirstTicketNumber;
    /**
     * The LastTicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastTicketNumber;
    /**
     * The Penalities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage
     */
    public $Penalities;
    /**
     * The PenalityCommission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage
     */
    public $PenalityCommission;
    /**
     * The RefundMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RefundMode;
    /**
     * The RefundRemark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RefundRemark;
    /**
     * The TaxRefundDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
     */
    public $TaxRefundDetails;
    /**
     * Constructor method for CancelTicketRequestTicket
     * @uses CancelTicketRequestTicket::setFare()
     * @uses CancelTicketRequestTicket::setFirstTicketNumber()
     * @uses CancelTicketRequestTicket::setLastTicketNumber()
     * @uses CancelTicketRequestTicket::setPenalities()
     * @uses CancelTicketRequestTicket::setPenalityCommission()
     * @uses CancelTicketRequestTicket::setRefundMode()
     * @uses CancelTicketRequestTicket::setRefundRemark()
     * @uses CancelTicketRequestTicket::setTaxRefundDetails()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $fare
     * @param string $firstTicketNumber
     * @param string $lastTicketNumber
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalities
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalityCommission
     * @param string $refundMode
     * @param string $refundRemark
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxRefundDetails
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $fare = null, $firstTicketNumber = null, $lastTicketNumber = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalities = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalityCommission = null, $refundMode = null, $refundRemark = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxRefundDetails = null)
    {
        $this
            ->setFare($fare)
            ->setFirstTicketNumber($firstTicketNumber)
            ->setLastTicketNumber($lastTicketNumber)
            ->setPenalities($penalities)
            ->setPenalityCommission($penalityCommission)
            ->setRefundMode($refundMode)
            ->setRefundRemark($refundRemark)
            ->setTaxRefundDetails($taxRefundDetails);
    }
    /**
     * Get Fare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getFare()
    {
        return isset($this->Fare) ? $this->Fare : null;
    }
    /**
     * Set Fare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $fare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $fare = null)
    {
        if (is_null($fare) || (is_array($fare) && empty($fare))) {
            unset($this->Fare);
        } else {
            $this->Fare = $fare;
        }
        return $this;
    }
    /**
     * Get FirstTicketNumber value
     * @return string|null
     */
    public function getFirstTicketNumber()
    {
        return $this->FirstTicketNumber;
    }
    /**
     * Set FirstTicketNumber value
     * @param string $firstTicketNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setFirstTicketNumber($firstTicketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($firstTicketNumber) && !is_string($firstTicketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstTicketNumber)), __LINE__);
        }
        $this->FirstTicketNumber = $firstTicketNumber;
        return $this;
    }
    /**
     * Get LastTicketNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastTicketNumber()
    {
        return isset($this->LastTicketNumber) ? $this->LastTicketNumber : null;
    }
    /**
     * Set LastTicketNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastTicketNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setLastTicketNumber($lastTicketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($lastTicketNumber) && !is_string($lastTicketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastTicketNumber)), __LINE__);
        }
        if (is_null($lastTicketNumber) || (is_array($lastTicketNumber) && empty($lastTicketNumber))) {
            unset($this->LastTicketNumber);
        } else {
            $this->LastTicketNumber = $lastTicketNumber;
        }
        return $this;
    }
    /**
     * Get Penalities value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage|null
     */
    public function getPenalities()
    {
        return isset($this->Penalities) ? $this->Penalities : null;
    }
    /**
     * Set Penalities value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalities
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setPenalities(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalities = null)
    {
        if (is_null($penalities) || (is_array($penalities) && empty($penalities))) {
            unset($this->Penalities);
        } else {
            $this->Penalities = $penalities;
        }
        return $this;
    }
    /**
     * Get PenalityCommission value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage|null
     */
    public function getPenalityCommission()
    {
        return isset($this->PenalityCommission) ? $this->PenalityCommission : null;
    }
    /**
     * Set PenalityCommission value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalityCommission
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setPenalityCommission(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketPricePercentage $penalityCommission = null)
    {
        if (is_null($penalityCommission) || (is_array($penalityCommission) && empty($penalityCommission))) {
            unset($this->PenalityCommission);
        } else {
            $this->PenalityCommission = $penalityCommission;
        }
        return $this;
    }
    /**
     * Get RefundMode value
     * @return string|null
     */
    public function getRefundMode()
    {
        return $this->RefundMode;
    }
    /**
     * Set RefundMode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RefundModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RefundModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $refundMode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setRefundMode($refundMode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RefundModeEnum::valueIsValid($refundMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $refundMode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\RefundModeEnum::getValidValues())), __LINE__);
        }
        $this->RefundMode = $refundMode;
        return $this;
    }
    /**
     * Get RefundRemark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRefundRemark()
    {
        return isset($this->RefundRemark) ? $this->RefundRemark : null;
    }
    /**
     * Set RefundRemark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $refundRemark
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setRefundRemark($refundRemark = null)
    {
        // validation for constraint: string
        if (!is_null($refundRemark) && !is_string($refundRemark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refundRemark)), __LINE__);
        }
        if (is_null($refundRemark) || (is_array($refundRemark) && empty($refundRemark))) {
            unset($this->RefundRemark);
        } else {
            $this->RefundRemark = $refundRemark;
        }
        return $this;
    }
    /**
     * Get TaxRefundDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail|null
     */
    public function getTaxRefundDetails()
    {
        return isset($this->TaxRefundDetails) ? $this->TaxRefundDetails : null;
    }
    /**
     * Set TaxRefundDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxRefundDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
     */
    public function setTaxRefundDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $taxRefundDetails = null)
    {
        if (is_null($taxRefundDetails) || (is_array($taxRefundDetails) && empty($taxRefundDetails))) {
            unset($this->TaxRefundDetails);
        } else {
            $this->TaxRefundDetails = $taxRefundDetails;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestTicket
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
