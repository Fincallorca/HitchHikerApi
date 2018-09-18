<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestLeg
 * @subpackage Arrays
 */
class ArrayOfModifyRequestLeg extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg[]
     */
    public $ModifyRequestLeg;
    /**
     * Constructor method for ArrayOfModifyRequestLeg
     * @uses ArrayOfModifyRequestLeg::setModifyRequestLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg[] $modifyRequestLeg
     */
    public function __construct(array $modifyRequestLeg = array())
    {
        $this
            ->setModifyRequestLeg($modifyRequestLeg);
    }
    /**
     * Get ModifyRequestLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg[]|null
     */
    public function getModifyRequestLeg()
    {
        return isset($this->ModifyRequestLeg) ? $this->ModifyRequestLeg : null;
    }
    /**
     * Set ModifyRequestLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg[] $modifyRequestLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg
     */
    public function setModifyRequestLeg(array $modifyRequestLeg = array())
    {
        foreach ($modifyRequestLeg as $arrayOfModifyRequestLegModifyRequestLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestLegModifyRequestLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg, "%s" given', is_object($arrayOfModifyRequestLegModifyRequestLegItem) ? get_class($arrayOfModifyRequestLegModifyRequestLegItem) : gettype($arrayOfModifyRequestLegModifyRequestLegItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestLeg) || (is_array($modifyRequestLeg) && empty($modifyRequestLeg))) {
            unset($this->ModifyRequestLeg);
        } else {
            $this->ModifyRequestLeg = $modifyRequestLeg;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg
     */
    public function addToModifyRequestLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestLeg
     */
    public function getAttributeName()
    {
        return 'ModifyRequestLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestLeg
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
