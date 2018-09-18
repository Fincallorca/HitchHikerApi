<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestSSR ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestSSR
 * @subpackage Arrays
 */
class ArrayOfModifyRequestSSR extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestSSR
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR[]
     */
    public $ModifyRequestSSR;
    /**
     * Constructor method for ArrayOfModifyRequestSSR
     * @uses ArrayOfModifyRequestSSR::setModifyRequestSSR()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR[] $modifyRequestSSR
     */
    public function __construct(array $modifyRequestSSR = array())
    {
        $this
            ->setModifyRequestSSR($modifyRequestSSR);
    }
    /**
     * Get ModifyRequestSSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR[]|null
     */
    public function getModifyRequestSSR()
    {
        return isset($this->ModifyRequestSSR) ? $this->ModifyRequestSSR : null;
    }
    /**
     * Set ModifyRequestSSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR[] $modifyRequestSSR
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR
     */
    public function setModifyRequestSSR(array $modifyRequestSSR = array())
    {
        foreach ($modifyRequestSSR as $arrayOfModifyRequestSSRModifyRequestSSRItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestSSRModifyRequestSSRItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestSSR property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR, "%s" given', is_object($arrayOfModifyRequestSSRModifyRequestSSRItem) ? get_class($arrayOfModifyRequestSSRModifyRequestSSRItem) : gettype($arrayOfModifyRequestSSRModifyRequestSSRItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestSSR) || (is_array($modifyRequestSSR) && empty($modifyRequestSSR))) {
            unset($this->ModifyRequestSSR);
        } else {
            $this->ModifyRequestSSR = $modifyRequestSSR;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestSSR value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR
     */
    public function addToModifyRequestSSR(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestSSR property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestSSR[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestSSR|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestSSR
     */
    public function getAttributeName()
    {
        return 'ModifyRequestSSR';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR
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
