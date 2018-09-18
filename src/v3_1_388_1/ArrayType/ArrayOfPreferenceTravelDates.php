<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPreferenceTravelDates ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPreferenceTravelDates
 * @subpackage Arrays
 */
class ArrayOfPreferenceTravelDates extends AbstractStructArrayBase
{
    /**
     * The PreferenceTravelDates
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates[]
     */
    public $PreferenceTravelDates;
    /**
     * Constructor method for ArrayOfPreferenceTravelDates
     * @uses ArrayOfPreferenceTravelDates::setPreferenceTravelDates()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates[] $preferenceTravelDates
     */
    public function __construct(array $preferenceTravelDates = array())
    {
        $this
            ->setPreferenceTravelDates($preferenceTravelDates);
    }
    /**
     * Get PreferenceTravelDates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates[]|null
     */
    public function getPreferenceTravelDates()
    {
        return isset($this->PreferenceTravelDates) ? $this->PreferenceTravelDates : null;
    }
    /**
     * Set PreferenceTravelDates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates[] $preferenceTravelDates
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates
     */
    public function setPreferenceTravelDates(array $preferenceTravelDates = array())
    {
        foreach ($preferenceTravelDates as $arrayOfPreferenceTravelDatesPreferenceTravelDatesItem) {
            // validation for constraint: itemType
            if (!$arrayOfPreferenceTravelDatesPreferenceTravelDatesItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates) {
                throw new \InvalidArgumentException(sprintf('The PreferenceTravelDates property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates, "%s" given', is_object($arrayOfPreferenceTravelDatesPreferenceTravelDatesItem) ? get_class($arrayOfPreferenceTravelDatesPreferenceTravelDatesItem) : gettype($arrayOfPreferenceTravelDatesPreferenceTravelDatesItem)), __LINE__);
            }
        }
        if (is_null($preferenceTravelDates) || (is_array($preferenceTravelDates) && empty($preferenceTravelDates))) {
            unset($this->PreferenceTravelDates);
        } else {
            $this->PreferenceTravelDates = $preferenceTravelDates;
        }
        return $this;
    }
    /**
     * Add item to PreferenceTravelDates value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates
     */
    public function addToPreferenceTravelDates(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates) {
            throw new \InvalidArgumentException(sprintf('The PreferenceTravelDates property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PreferenceTravelDates[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PreferenceTravelDates|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PreferenceTravelDates
     */
    public function getAttributeName()
    {
        return 'PreferenceTravelDates';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPreferenceTravelDates
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
