<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfPNRResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The PNRResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger[]
     */
    public $PNRResponsePassenger;
    /**
     * Constructor method for ArrayOfPNRResponsePassenger
     * @uses ArrayOfPNRResponsePassenger::setPNRResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger[] $pNRResponsePassenger
     */
    public function __construct(array $pNRResponsePassenger = array())
    {
        $this
            ->setPNRResponsePassenger($pNRResponsePassenger);
    }
    /**
     * Get PNRResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger[]|null
     */
    public function getPNRResponsePassenger()
    {
        return isset($this->PNRResponsePassenger) ? $this->PNRResponsePassenger : null;
    }
    /**
     * Set PNRResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger[] $pNRResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger
     */
    public function setPNRResponsePassenger(array $pNRResponsePassenger = array())
    {
        foreach ($pNRResponsePassenger as $arrayOfPNRResponsePassengerPNRResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponsePassengerPNRResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The PNRResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger, "%s" given', is_object($arrayOfPNRResponsePassengerPNRResponsePassengerItem) ? get_class($arrayOfPNRResponsePassengerPNRResponsePassengerItem) : gettype($arrayOfPNRResponsePassengerPNRResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($pNRResponsePassenger) || (is_array($pNRResponsePassenger) && empty($pNRResponsePassenger))) {
            unset($this->PNRResponsePassenger);
        } else {
            $this->PNRResponsePassenger = $pNRResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to PNRResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger
     */
    public function addToPNRResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The PNRResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponsePassenger
     */
    public function getAttributeName()
    {
        return 'PNRResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePassenger
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
