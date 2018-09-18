<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTicketRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelTicketRequestData
 * @subpackage Structs
 */
class CancelTicketRequestData extends AbstractStructBase
{
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * The Session
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Session;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * The Tickets
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket
     */
    public $Tickets;
    /**
     * Constructor method for CancelTicketRequestData
     * @uses CancelTicketRequestData::setCRSConfig()
     * @uses CancelTicketRequestData::setRecordLocator()
     * @uses CancelTicketRequestData::setSession()
     * @uses CancelTicketRequestData::setSource()
     * @uses CancelTicketRequestData::setTickets()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param string $recordLocator
     * @param string $session
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket $tickets
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, $recordLocator = null, $session = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket $tickets = null)
    {
        $this
            ->setCRSConfig($cRSConfig)
            ->setRecordLocator($recordLocator)
            ->setSession($session)
            ->setSource($source)
            ->setTickets($tickets);
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
        return $this;
    }
    /**
     * Get RecordLocator value
     * @return string|null
     */
    public function getRecordLocator()
    {
        return $this->RecordLocator;
    }
    /**
     * Set RecordLocator value
     * @param string $recordLocator
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestData
     */
    public function setRecordLocator($recordLocator = null)
    {
        // validation for constraint: string
        if (!is_null($recordLocator) && !is_string($recordLocator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordLocator)), __LINE__);
        }
        $this->RecordLocator = $recordLocator;
        return $this;
    }
    /**
     * Get Session value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSession()
    {
        return isset($this->Session) ? $this->Session : null;
    }
    /**
     * Set Session value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $session
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestData
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        if (is_null($session) || (is_array($session) && empty($session))) {
            unset($this->Session);
        } else {
            $this->Session = $session;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestData
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
     * Get Tickets value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket|null
     */
    public function getTickets()
    {
        return $this->Tickets;
    }
    /**
     * Set Tickets value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket $tickets
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestData
     */
    public function setTickets(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelTicketRequestTicket $tickets = null)
    {
        $this->Tickets = $tickets;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketRequestData
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
