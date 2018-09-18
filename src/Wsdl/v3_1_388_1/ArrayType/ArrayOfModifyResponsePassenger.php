<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfModifyResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The ModifyResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger[]
     */
    public $ModifyResponsePassenger;
    /**
     * Constructor method for ArrayOfModifyResponsePassenger
     * @uses ArrayOfModifyResponsePassenger::setModifyResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger[] $modifyResponsePassenger
     */
    public function __construct(array $modifyResponsePassenger = array())
    {
        $this
            ->setModifyResponsePassenger($modifyResponsePassenger);
    }
    /**
     * Get ModifyResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger[]|null
     */
    public function getModifyResponsePassenger()
    {
        return isset($this->ModifyResponsePassenger) ? $this->ModifyResponsePassenger : null;
    }
    /**
     * Set ModifyResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger[] $modifyResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponsePassenger
     */
    public function setModifyResponsePassenger(array $modifyResponsePassenger = array())
    {
        foreach ($modifyResponsePassenger as $arrayOfModifyResponsePassengerModifyResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyResponsePassengerModifyResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The ModifyResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger, "%s" given', is_object($arrayOfModifyResponsePassengerModifyResponsePassengerItem) ? get_class($arrayOfModifyResponsePassengerModifyResponsePassengerItem) : gettype($arrayOfModifyResponsePassengerModifyResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($modifyResponsePassenger) || (is_array($modifyResponsePassenger) && empty($modifyResponsePassenger))) {
            unset($this->ModifyResponsePassenger);
        } else {
            $this->ModifyResponsePassenger = $modifyResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to ModifyResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponsePassenger
     */
    public function addToModifyResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The ModifyResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyResponsePassenger
     */
    public function getAttributeName()
    {
        return 'ModifyResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponsePassenger
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
