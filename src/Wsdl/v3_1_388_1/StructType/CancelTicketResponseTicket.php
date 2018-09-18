<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTicketResponseTicket StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelTicketResponseTicket
 * @subpackage Structs
 */
class CancelTicketResponseTicket extends AbstractStructBase
{
    /**
     * The ErrorText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorText;
    /**
     * The FirstTicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
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
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StatusCode;
    /**
     * Constructor method for CancelTicketResponseTicket
     * @uses CancelTicketResponseTicket::setErrorText()
     * @uses CancelTicketResponseTicket::setFirstTicketNumber()
     * @uses CancelTicketResponseTicket::setLastTicketNumber()
     * @uses CancelTicketResponseTicket::setRecordLocator()
     * @uses CancelTicketResponseTicket::setStatusCode()
     * @param string $errorText
     * @param string $firstTicketNumber
     * @param string $lastTicketNumber
     * @param string $recordLocator
     * @param int $statusCode
     */
    public function __construct($errorText = null, $firstTicketNumber = null, $lastTicketNumber = null, $recordLocator = null, $statusCode = null)
    {
        $this
            ->setErrorText($errorText)
            ->setFirstTicketNumber($firstTicketNumber)
            ->setLastTicketNumber($lastTicketNumber)
            ->setRecordLocator($recordLocator)
            ->setStatusCode($statusCode);
    }
    /**
     * Get ErrorText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorText()
    {
        return isset($this->ErrorText) ? $this->ErrorText : null;
    }
    /**
     * Set ErrorText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket
     */
    public function setErrorText($errorText = null)
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorText)), __LINE__);
        }
        if (is_null($errorText) || (is_array($errorText) && empty($errorText))) {
            unset($this->ErrorText);
        } else {
            $this->ErrorText = $errorText;
        }
        return $this;
    }
    /**
     * Get FirstTicketNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstTicketNumber()
    {
        return isset($this->FirstTicketNumber) ? $this->FirstTicketNumber : null;
    }
    /**
     * Set FirstTicketNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstTicketNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket
     */
    public function setFirstTicketNumber($firstTicketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($firstTicketNumber) && !is_string($firstTicketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstTicketNumber)), __LINE__);
        }
        if (is_null($firstTicketNumber) || (is_array($firstTicketNumber) && empty($firstTicketNumber))) {
            unset($this->FirstTicketNumber);
        } else {
            $this->FirstTicketNumber = $firstTicketNumber;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket
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
     * Get RecordLocator value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordLocator()
    {
        return isset($this->RecordLocator) ? $this->RecordLocator : null;
    }
    /**
     * Set RecordLocator value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        if (is_null($recordLocator) || (is_array($recordLocator) && empty($recordLocator))) {
            unset($this->RecordLocator);
        } else {
            $this->RecordLocator = $recordLocator;
        }
        return $this;
    }
    /**
     * Get StatusCode value
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param int $statusCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !is_numeric($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponseTicket
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
