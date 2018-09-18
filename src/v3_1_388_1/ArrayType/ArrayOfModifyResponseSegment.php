<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyResponseSegment
 * @subpackage Arrays
 */
class ArrayOfModifyResponseSegment extends AbstractStructArrayBase
{
    /**
     * The ModifyResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment[]
     */
    public $ModifyResponseSegment;
    /**
     * Constructor method for ArrayOfModifyResponseSegment
     * @uses ArrayOfModifyResponseSegment::setModifyResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment[] $modifyResponseSegment
     */
    public function __construct(array $modifyResponseSegment = array())
    {
        $this
            ->setModifyResponseSegment($modifyResponseSegment);
    }
    /**
     * Get ModifyResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment[]|null
     */
    public function getModifyResponseSegment()
    {
        return isset($this->ModifyResponseSegment) ? $this->ModifyResponseSegment : null;
    }
    /**
     * Set ModifyResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment[] $modifyResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseSegment
     */
    public function setModifyResponseSegment(array $modifyResponseSegment = array())
    {
        foreach ($modifyResponseSegment as $arrayOfModifyResponseSegmentModifyResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyResponseSegmentModifyResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The ModifyResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment, "%s" given', is_object($arrayOfModifyResponseSegmentModifyResponseSegmentItem) ? get_class($arrayOfModifyResponseSegmentModifyResponseSegmentItem) : gettype($arrayOfModifyResponseSegmentModifyResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($modifyResponseSegment) || (is_array($modifyResponseSegment) && empty($modifyResponseSegment))) {
            unset($this->ModifyResponseSegment);
        } else {
            $this->ModifyResponseSegment = $modifyResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to ModifyResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseSegment
     */
    public function addToModifyResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The ModifyResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyResponseSegment
     */
    public function getAttributeName()
    {
        return 'ModifyResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseSegment
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
