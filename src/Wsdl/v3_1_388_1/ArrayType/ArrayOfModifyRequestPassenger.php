<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestPassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestPassenger
 * @subpackage Arrays
 */
class ArrayOfModifyRequestPassenger extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestPassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger[]
     */
    public $ModifyRequestPassenger;
    /**
     * Constructor method for ArrayOfModifyRequestPassenger
     * @uses ArrayOfModifyRequestPassenger::setModifyRequestPassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger[] $modifyRequestPassenger
     */
    public function __construct(array $modifyRequestPassenger = array())
    {
        $this
            ->setModifyRequestPassenger($modifyRequestPassenger);
    }
    /**
     * Get ModifyRequestPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger[]|null
     */
    public function getModifyRequestPassenger()
    {
        return isset($this->ModifyRequestPassenger) ? $this->ModifyRequestPassenger : null;
    }
    /**
     * Set ModifyRequestPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger[] $modifyRequestPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger
     */
    public function setModifyRequestPassenger(array $modifyRequestPassenger = array())
    {
        foreach ($modifyRequestPassenger as $arrayOfModifyRequestPassengerModifyRequestPassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestPassengerModifyRequestPassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger, "%s" given', is_object($arrayOfModifyRequestPassengerModifyRequestPassengerItem) ? get_class($arrayOfModifyRequestPassengerModifyRequestPassengerItem) : gettype($arrayOfModifyRequestPassengerModifyRequestPassengerItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestPassenger) || (is_array($modifyRequestPassenger) && empty($modifyRequestPassenger))) {
            unset($this->ModifyRequestPassenger);
        } else {
            $this->ModifyRequestPassenger = $modifyRequestPassenger;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestPassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger
     */
    public function addToModifyRequestPassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestPassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestPassenger
     */
    public function getAttributeName()
    {
        return 'ModifyRequestPassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestPassenger
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
