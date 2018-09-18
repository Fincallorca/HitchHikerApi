<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfDisplayResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The DisplayResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger[]
     */
    public $DisplayResponsePassenger;
    /**
     * Constructor method for ArrayOfDisplayResponsePassenger
     * @uses ArrayOfDisplayResponsePassenger::setDisplayResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger[] $displayResponsePassenger
     */
    public function __construct(array $displayResponsePassenger = array())
    {
        $this
            ->setDisplayResponsePassenger($displayResponsePassenger);
    }
    /**
     * Get DisplayResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger[]|null
     */
    public function getDisplayResponsePassenger()
    {
        return isset($this->DisplayResponsePassenger) ? $this->DisplayResponsePassenger : null;
    }
    /**
     * Set DisplayResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger[] $displayResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger
     */
    public function setDisplayResponsePassenger(array $displayResponsePassenger = array())
    {
        foreach ($displayResponsePassenger as $arrayOfDisplayResponsePassengerDisplayResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayResponsePassengerDisplayResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The DisplayResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger, "%s" given', is_object($arrayOfDisplayResponsePassengerDisplayResponsePassengerItem) ? get_class($arrayOfDisplayResponsePassengerDisplayResponsePassengerItem) : gettype($arrayOfDisplayResponsePassengerDisplayResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($displayResponsePassenger) || (is_array($displayResponsePassenger) && empty($displayResponsePassenger))) {
            unset($this->DisplayResponsePassenger);
        } else {
            $this->DisplayResponsePassenger = $displayResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to DisplayResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger
     */
    public function addToDisplayResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The DisplayResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayResponsePassenger
     */
    public function getAttributeName()
    {
        return 'DisplayResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponsePassenger
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
