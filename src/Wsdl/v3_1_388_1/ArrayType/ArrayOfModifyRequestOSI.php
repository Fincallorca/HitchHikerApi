<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestOSI ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestOSI
 * @subpackage Arrays
 */
class ArrayOfModifyRequestOSI extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestOSI
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI[]
     */
    public $ModifyRequestOSI;
    /**
     * Constructor method for ArrayOfModifyRequestOSI
     * @uses ArrayOfModifyRequestOSI::setModifyRequestOSI()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI[] $modifyRequestOSI
     */
    public function __construct(array $modifyRequestOSI = array())
    {
        $this
            ->setModifyRequestOSI($modifyRequestOSI);
    }
    /**
     * Get ModifyRequestOSI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI[]|null
     */
    public function getModifyRequestOSI()
    {
        return isset($this->ModifyRequestOSI) ? $this->ModifyRequestOSI : null;
    }
    /**
     * Set ModifyRequestOSI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI[] $modifyRequestOSI
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI
     */
    public function setModifyRequestOSI(array $modifyRequestOSI = array())
    {
        foreach ($modifyRequestOSI as $arrayOfModifyRequestOSIModifyRequestOSIItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestOSIModifyRequestOSIItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestOSI property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI, "%s" given', is_object($arrayOfModifyRequestOSIModifyRequestOSIItem) ? get_class($arrayOfModifyRequestOSIModifyRequestOSIItem) : gettype($arrayOfModifyRequestOSIModifyRequestOSIItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestOSI) || (is_array($modifyRequestOSI) && empty($modifyRequestOSI))) {
            unset($this->ModifyRequestOSI);
        } else {
            $this->ModifyRequestOSI = $modifyRequestOSI;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestOSI value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI
     */
    public function addToModifyRequestOSI(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestOSI property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestOSI[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestOSI|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestOSI
     */
    public function getAttributeName()
    {
        return 'ModifyRequestOSI';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI
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
