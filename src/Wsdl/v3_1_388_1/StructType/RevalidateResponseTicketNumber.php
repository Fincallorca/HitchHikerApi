<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevalidateResponseTicketNumber StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RevalidateResponseTicketNumber
 * @subpackage Structs
 */
class RevalidateResponseTicketNumber extends AbstractStructBase
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
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StatusCode;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketNumber;
    /**
     * Constructor method for RevalidateResponseTicketNumber
     * @uses RevalidateResponseTicketNumber::setErrorText()
     * @uses RevalidateResponseTicketNumber::setStatusCode()
     * @uses RevalidateResponseTicketNumber::setTicketNumber()
     * @param string $errorText
     * @param int $statusCode
     * @param string $ticketNumber
     */
    public function __construct($errorText = null, $statusCode = null, $ticketNumber = null)
    {
        $this
            ->setErrorText($errorText)
            ->setStatusCode($statusCode)
            ->setTicketNumber($ticketNumber);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber
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
     * Get TicketNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketNumber()
    {
        return isset($this->TicketNumber) ? $this->TicketNumber : null;
    }
    /**
     * Set TicketNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        if (is_null($ticketNumber) || (is_array($ticketNumber) && empty($ticketNumber))) {
            unset($this->TicketNumber);
        } else {
            $this->TicketNumber = $ticketNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber
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
