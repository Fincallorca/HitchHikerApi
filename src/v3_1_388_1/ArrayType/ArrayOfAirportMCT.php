<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAirportMCT ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAirportMCT
 * @subpackage Arrays
 */
class ArrayOfAirportMCT extends AbstractStructArrayBase
{
    /**
     * The AirportMCT
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT[]
     */
    public $AirportMCT;
    /**
     * Constructor method for ArrayOfAirportMCT
     * @uses ArrayOfAirportMCT::setAirportMCT()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT[] $airportMCT
     */
    public function __construct(array $airportMCT = array())
    {
        $this
            ->setAirportMCT($airportMCT);
    }
    /**
     * Get AirportMCT value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT[]|null
     */
    public function getAirportMCT()
    {
        return isset($this->AirportMCT) ? $this->AirportMCT : null;
    }
    /**
     * Set AirportMCT value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT[] $airportMCT
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT
     */
    public function setAirportMCT(array $airportMCT = array())
    {
        foreach ($airportMCT as $arrayOfAirportMCTAirportMCTItem) {
            // validation for constraint: itemType
            if (!$arrayOfAirportMCTAirportMCTItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT) {
                throw new \InvalidArgumentException(sprintf('The AirportMCT property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT, "%s" given', is_object($arrayOfAirportMCTAirportMCTItem) ? get_class($arrayOfAirportMCTAirportMCTItem) : gettype($arrayOfAirportMCTAirportMCTItem)), __LINE__);
            }
        }
        if (is_null($airportMCT) || (is_array($airportMCT) && empty($airportMCT))) {
            unset($this->AirportMCT);
        } else {
            $this->AirportMCT = $airportMCT;
        }
        return $this;
    }
    /**
     * Add item to AirportMCT value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT
     */
    public function addToAirportMCT(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT) {
            throw new \InvalidArgumentException(sprintf('The AirportMCT property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirportMCT[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AirportMCT|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AirportMCT
     */
    public function getAttributeName()
    {
        return 'AirportMCT';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAirportMCT
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
