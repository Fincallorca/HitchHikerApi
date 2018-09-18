<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyResponseStatus ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyResponseStatus
 * @subpackage Arrays
 */
class ArrayOfModifyResponseStatus extends AbstractStructArrayBase
{
    /**
     * The ModifyResponseStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus[]
     */
    public $ModifyResponseStatus;
    /**
     * Constructor method for ArrayOfModifyResponseStatus
     * @uses ArrayOfModifyResponseStatus::setModifyResponseStatus()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus[] $modifyResponseStatus
     */
    public function __construct(array $modifyResponseStatus = array())
    {
        $this
            ->setModifyResponseStatus($modifyResponseStatus);
    }
    /**
     * Get ModifyResponseStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus[]|null
     */
    public function getModifyResponseStatus()
    {
        return isset($this->ModifyResponseStatus) ? $this->ModifyResponseStatus : null;
    }
    /**
     * Set ModifyResponseStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus[] $modifyResponseStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseStatus
     */
    public function setModifyResponseStatus(array $modifyResponseStatus = array())
    {
        foreach ($modifyResponseStatus as $arrayOfModifyResponseStatusModifyResponseStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyResponseStatusModifyResponseStatusItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus) {
                throw new \InvalidArgumentException(sprintf('The ModifyResponseStatus property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus, "%s" given', is_object($arrayOfModifyResponseStatusModifyResponseStatusItem) ? get_class($arrayOfModifyResponseStatusModifyResponseStatusItem) : gettype($arrayOfModifyResponseStatusModifyResponseStatusItem)), __LINE__);
            }
        }
        if (is_null($modifyResponseStatus) || (is_array($modifyResponseStatus) && empty($modifyResponseStatus))) {
            unset($this->ModifyResponseStatus);
        } else {
            $this->ModifyResponseStatus = $modifyResponseStatus;
        }
        return $this;
    }
    /**
     * Add item to ModifyResponseStatus value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseStatus
     */
    public function addToModifyResponseStatus(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus) {
            throw new \InvalidArgumentException(sprintf('The ModifyResponseStatus property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyResponseStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyResponseStatus
     */
    public function getAttributeName()
    {
        return 'ModifyResponseStatus';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponseStatus
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
