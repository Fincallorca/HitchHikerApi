<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyResponseAPIS ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyResponseAPIS
 * @subpackage Arrays
 */
class ArrayOfModifyResponseAPIS extends AbstractStructArrayBase
{
    /**
     * The ModifyResponseAPIS
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS[]
     */
    public $ModifyResponseAPIS;
    /**
     * Constructor method for ArrayOfModifyResponseAPIS
     * @uses ArrayOfModifyResponseAPIS::setModifyResponseAPIS()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS[] $modifyResponseAPIS
     */
    public function __construct(array $modifyResponseAPIS = array())
    {
        $this
            ->setModifyResponseAPIS($modifyResponseAPIS);
    }
    /**
     * Get ModifyResponseAPIS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS[]|null
     */
    public function getModifyResponseAPIS()
    {
        return isset($this->ModifyResponseAPIS) ? $this->ModifyResponseAPIS : null;
    }
    /**
     * Set ModifyResponseAPIS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS[] $modifyResponseAPIS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseAPIS
     */
    public function setModifyResponseAPIS(array $modifyResponseAPIS = array())
    {
        foreach ($modifyResponseAPIS as $arrayOfModifyResponseAPISModifyResponseAPISItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyResponseAPISModifyResponseAPISItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS) {
                throw new \InvalidArgumentException(sprintf('The ModifyResponseAPIS property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS, "%s" given', is_object($arrayOfModifyResponseAPISModifyResponseAPISItem) ? get_class($arrayOfModifyResponseAPISModifyResponseAPISItem) : gettype($arrayOfModifyResponseAPISModifyResponseAPISItem)), __LINE__);
            }
        }
        if (is_null($modifyResponseAPIS) || (is_array($modifyResponseAPIS) && empty($modifyResponseAPIS))) {
            unset($this->ModifyResponseAPIS);
        } else {
            $this->ModifyResponseAPIS = $modifyResponseAPIS;
        }
        return $this;
    }
    /**
     * Add item to ModifyResponseAPIS value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseAPIS
     */
    public function addToModifyResponseAPIS(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS) {
            throw new \InvalidArgumentException(sprintf('The ModifyResponseAPIS property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyResponseAPIS[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyResponseAPIS
     */
    public function getAttributeName()
    {
        return 'ModifyResponseAPIS';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseAPIS
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
