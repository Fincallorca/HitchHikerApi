<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommonResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCommonResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfCommonResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The CommonResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger[]
     */
    public $CommonResponsePassenger;
    /**
     * Constructor method for ArrayOfCommonResponsePassenger
     * @uses ArrayOfCommonResponsePassenger::setCommonResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger[] $commonResponsePassenger
     */
    public function __construct(array $commonResponsePassenger = array())
    {
        $this
            ->setCommonResponsePassenger($commonResponsePassenger);
    }
    /**
     * Get CommonResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger[]|null
     */
    public function getCommonResponsePassenger()
    {
        return isset($this->CommonResponsePassenger) ? $this->CommonResponsePassenger : null;
    }
    /**
     * Set CommonResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger[] $commonResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger
     */
    public function setCommonResponsePassenger(array $commonResponsePassenger = array())
    {
        foreach ($commonResponsePassenger as $arrayOfCommonResponsePassengerCommonResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommonResponsePassengerCommonResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The CommonResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger, "%s" given', is_object($arrayOfCommonResponsePassengerCommonResponsePassengerItem) ? get_class($arrayOfCommonResponsePassengerCommonResponsePassengerItem) : gettype($arrayOfCommonResponsePassengerCommonResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($commonResponsePassenger) || (is_array($commonResponsePassenger) && empty($commonResponsePassenger))) {
            unset($this->CommonResponsePassenger);
        } else {
            $this->CommonResponsePassenger = $commonResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to CommonResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger
     */
    public function addToCommonResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The CommonResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommonResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CommonResponsePassenger
     */
    public function getAttributeName()
    {
        return 'CommonResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponsePassenger
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
