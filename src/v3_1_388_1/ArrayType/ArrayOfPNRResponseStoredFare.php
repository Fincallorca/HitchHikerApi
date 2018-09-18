<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponseStoredFare ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponseStoredFare
 * @subpackage Arrays
 */
class ArrayOfPNRResponseStoredFare extends AbstractStructArrayBase
{
    /**
     * The PNRResponseStoredFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare[]
     */
    public $PNRResponseStoredFare;
    /**
     * Constructor method for ArrayOfPNRResponseStoredFare
     * @uses ArrayOfPNRResponseStoredFare::setPNRResponseStoredFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare[] $pNRResponseStoredFare
     */
    public function __construct(array $pNRResponseStoredFare = array())
    {
        $this
            ->setPNRResponseStoredFare($pNRResponseStoredFare);
    }
    /**
     * Get PNRResponseStoredFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare[]|null
     */
    public function getPNRResponseStoredFare()
    {
        return isset($this->PNRResponseStoredFare) ? $this->PNRResponseStoredFare : null;
    }
    /**
     * Set PNRResponseStoredFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare[] $pNRResponseStoredFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare
     */
    public function setPNRResponseStoredFare(array $pNRResponseStoredFare = array())
    {
        foreach ($pNRResponseStoredFare as $arrayOfPNRResponseStoredFarePNRResponseStoredFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponseStoredFarePNRResponseStoredFareItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare) {
                throw new \InvalidArgumentException(sprintf('The PNRResponseStoredFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare, "%s" given', is_object($arrayOfPNRResponseStoredFarePNRResponseStoredFareItem) ? get_class($arrayOfPNRResponseStoredFarePNRResponseStoredFareItem) : gettype($arrayOfPNRResponseStoredFarePNRResponseStoredFareItem)), __LINE__);
            }
        }
        if (is_null($pNRResponseStoredFare) || (is_array($pNRResponseStoredFare) && empty($pNRResponseStoredFare))) {
            unset($this->PNRResponseStoredFare);
        } else {
            $this->PNRResponseStoredFare = $pNRResponseStoredFare;
        }
        return $this;
    }
    /**
     * Add item to PNRResponseStoredFare value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare
     */
    public function addToPNRResponseStoredFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare) {
            throw new \InvalidArgumentException(sprintf('The PNRResponseStoredFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponseStoredFare[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseStoredFare|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponseStoredFare
     */
    public function getAttributeName()
    {
        return 'PNRResponseStoredFare';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseStoredFare
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
