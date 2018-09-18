<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateFlightDateRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidateFlightDateRequestData
 * @subpackage Structs
 */
class ValidateFlightDateRequestData extends AbstractStructBase
{
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Currency;
    /**
     * The DepartureDateInbound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDateInbound;
    /**
     * The DepartureDateOutbound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DepartureDateOutbound;
    /**
     * The EarliestTicketingDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EarliestTicketingDate;
    /**
     * The RecordSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordSet;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * Constructor method for ValidateFlightDateRequestData
     * @uses ValidateFlightDateRequestData::setCurrency()
     * @uses ValidateFlightDateRequestData::setDepartureDateInbound()
     * @uses ValidateFlightDateRequestData::setDepartureDateOutbound()
     * @uses ValidateFlightDateRequestData::setEarliestTicketingDate()
     * @uses ValidateFlightDateRequestData::setRecordSet()
     * @uses ValidateFlightDateRequestData::setSource()
     * @param string $currency
     * @param string $departureDateInbound
     * @param string $departureDateOutbound
     * @param string $earliestTicketingDate
     * @param string $recordSet
     * @param string $source
     */
    public function __construct($currency = null, $departureDateInbound = null, $departureDateOutbound = null, $earliestTicketingDate = null, $recordSet = null, $source = null)
    {
        $this
            ->setCurrency($currency)
            ->setDepartureDateInbound($departureDateInbound)
            ->setDepartureDateOutbound($departureDateOutbound)
            ->setEarliestTicketingDate($earliestTicketingDate)
            ->setRecordSet($recordSet)
            ->setSource($source);
    }
    /**
     * Get Currency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrency()
    {
        return isset($this->Currency) ? $this->Currency : null;
    }
    /**
     * Set Currency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateRequestData
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->Currency);
        } else {
            $this->Currency = $currency;
        }
        return $this;
    }
    /**
     * Get DepartureDateInbound value
     * @return string|null
     */
    public function getDepartureDateInbound()
    {
        return $this->DepartureDateInbound;
    }
    /**
     * Set DepartureDateInbound value
     * @param string $departureDateInbound
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateRequestData
     */
    public function setDepartureDateInbound($departureDateInbound = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateInbound) && !is_string($departureDateInbound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateInbound)), __LINE__);
        }
        $this->DepartureDateInbound = $departureDateInbound;
        return $this;
    }
    /**
     * Get DepartureDateOutbound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartureDateOutbound()
    {
        return isset($this->DepartureDateOutbound) ? $this->DepartureDateOutbound : null;
    }
    /**
     * Set DepartureDateOutbound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $departureDateOutbound
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateRequestData
     */
    public function setDepartureDateOutbound($departureDateOutbound = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateOutbound) && !is_string($departureDateOutbound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateOutbound)), __LINE__);
        }
        if (is_null($departureDateOutbound) || (is_array($departureDateOutbound) && empty($departureDateOutbound))) {
            unset($this->DepartureDateOutbound);
        } else {
            $this->DepartureDateOutbound = $departureDateOutbound;
        }
        return $this;
    }
    /**
     * Get EarliestTicketingDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEarliestTicketingDate()
    {
        return isset($this->EarliestTicketingDate) ? $this->EarliestTicketingDate : null;
    }
    /**
     * Set EarliestTicketingDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $earliestTicketingDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateRequestData
     */
    public function setEarliestTicketingDate($earliestTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($earliestTicketingDate) && !is_string($earliestTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($earliestTicketingDate)), __LINE__);
        }
        if (is_null($earliestTicketingDate) || (is_array($earliestTicketingDate) && empty($earliestTicketingDate))) {
            unset($this->EarliestTicketingDate);
        } else {
            $this->EarliestTicketingDate = $earliestTicketingDate;
        }
        return $this;
    }
    /**
     * Get RecordSet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordSet()
    {
        return isset($this->RecordSet) ? $this->RecordSet : null;
    }
    /**
     * Set RecordSet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordSet
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateRequestData
     */
    public function setRecordSet($recordSet = null)
    {
        // validation for constraint: string
        if (!is_null($recordSet) && !is_string($recordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordSet)), __LINE__);
        }
        if (is_null($recordSet) || (is_array($recordSet) && empty($recordSet))) {
            unset($this->RecordSet);
        } else {
            $this->RecordSet = $recordSet;
        }
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateRequestData
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ValidateFlightDateRequestData
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
