<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyResponseRemark ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyResponseRemark
 * @subpackage Arrays
 */
class ArrayOfModifyResponseRemark extends AbstractStructArrayBase
{
    /**
     * The ModifyResponseRemark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark[]
     */
    public $ModifyResponseRemark;
    /**
     * Constructor method for ArrayOfModifyResponseRemark
     * @uses ArrayOfModifyResponseRemark::setModifyResponseRemark()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark[] $modifyResponseRemark
     */
    public function __construct(array $modifyResponseRemark = array())
    {
        $this
            ->setModifyResponseRemark($modifyResponseRemark);
    }
    /**
     * Get ModifyResponseRemark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark[]|null
     */
    public function getModifyResponseRemark()
    {
        return isset($this->ModifyResponseRemark) ? $this->ModifyResponseRemark : null;
    }
    /**
     * Set ModifyResponseRemark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark[] $modifyResponseRemark
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseRemark
     */
    public function setModifyResponseRemark(array $modifyResponseRemark = array())
    {
        foreach ($modifyResponseRemark as $arrayOfModifyResponseRemarkModifyResponseRemarkItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyResponseRemarkModifyResponseRemarkItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark) {
                throw new \InvalidArgumentException(sprintf('The ModifyResponseRemark property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark, "%s" given', is_object($arrayOfModifyResponseRemarkModifyResponseRemarkItem) ? get_class($arrayOfModifyResponseRemarkModifyResponseRemarkItem) : gettype($arrayOfModifyResponseRemarkModifyResponseRemarkItem)), __LINE__);
            }
        }
        if (is_null($modifyResponseRemark) || (is_array($modifyResponseRemark) && empty($modifyResponseRemark))) {
            unset($this->ModifyResponseRemark);
        } else {
            $this->ModifyResponseRemark = $modifyResponseRemark;
        }
        return $this;
    }
    /**
     * Add item to ModifyResponseRemark value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseRemark
     */
    public function addToModifyResponseRemark(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark) {
            throw new \InvalidArgumentException(sprintf('The ModifyResponseRemark property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyResponseRemark[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseRemark|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyResponseRemark
     */
    public function getAttributeName()
    {
        return 'ModifyResponseRemark';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseRemark
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
