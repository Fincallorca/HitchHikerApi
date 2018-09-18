<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestFF ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestFF
 * @subpackage Arrays
 */
class ArrayOfModifyRequestFF extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestFF
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF[]
     */
    public $ModifyRequestFF;
    /**
     * Constructor method for ArrayOfModifyRequestFF
     * @uses ArrayOfModifyRequestFF::setModifyRequestFF()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF[] $modifyRequestFF
     */
    public function __construct(array $modifyRequestFF = array())
    {
        $this
            ->setModifyRequestFF($modifyRequestFF);
    }
    /**
     * Get ModifyRequestFF value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF[]|null
     */
    public function getModifyRequestFF()
    {
        return isset($this->ModifyRequestFF) ? $this->ModifyRequestFF : null;
    }
    /**
     * Set ModifyRequestFF value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF[] $modifyRequestFF
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF
     */
    public function setModifyRequestFF(array $modifyRequestFF = array())
    {
        foreach ($modifyRequestFF as $arrayOfModifyRequestFFModifyRequestFFItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestFFModifyRequestFFItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestFF property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF, "%s" given', is_object($arrayOfModifyRequestFFModifyRequestFFItem) ? get_class($arrayOfModifyRequestFFModifyRequestFFItem) : gettype($arrayOfModifyRequestFFModifyRequestFFItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestFF) || (is_array($modifyRequestFF) && empty($modifyRequestFF))) {
            unset($this->ModifyRequestFF);
        } else {
            $this->ModifyRequestFF = $modifyRequestFF;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestFF value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF
     */
    public function addToModifyRequestFF(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestFF property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestFF[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestFF|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestFF
     */
    public function getAttributeName()
    {
        return 'ModifyRequestFF';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF
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
