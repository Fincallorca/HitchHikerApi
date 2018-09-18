<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrowseResponseRecordLocatorItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrowseResponseRecordLocatorItem
 * @subpackage Structs
 */
class BrowseResponseRecordLocatorItem extends AbstractStructBase
{
    /**
     * The PassengerLastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerLastName;
    /**
     * The RecordLocator
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordLocator;
    /**
     * Constructor method for BrowseResponseRecordLocatorItem
     * @uses BrowseResponseRecordLocatorItem::setPassengerLastName()
     * @uses BrowseResponseRecordLocatorItem::setRecordLocator()
     * @param string $passengerLastName
     * @param string $recordLocator
     */
    public function __construct($passengerLastName = null, $recordLocator = null)
    {
        $this
            ->setPassengerLastName($passengerLastName)
            ->setRecordLocator($recordLocator);
    }
    /**
     * Get PassengerLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerLastName()
    {
        return isset($this->PassengerLastName) ? $this->PassengerLastName : null;
    }
    /**
     * Set PassengerLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerLastName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem
     */
    public function setPassengerLastName($passengerLastName = null)
    {
        // validation for constraint: string
        if (!is_null($passengerLastName) && !is_string($passengerLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerLastName)), __LINE__);
        }
        if (is_null($passengerLastName) || (is_array($passengerLastName) && empty($passengerLastName))) {
            unset($this->PassengerLastName);
        } else {
            $this->PassengerLastName = $passengerLastName;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseRecordLocatorItem
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
