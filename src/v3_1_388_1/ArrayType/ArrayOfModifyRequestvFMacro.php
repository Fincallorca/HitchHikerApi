<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestvFMacro ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestvFMacro
 * @subpackage Arrays
 */
class ArrayOfModifyRequestvFMacro extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestvFMacro
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro[]
     */
    public $ModifyRequestvFMacro;
    /**
     * Constructor method for ArrayOfModifyRequestvFMacro
     * @uses ArrayOfModifyRequestvFMacro::setModifyRequestvFMacro()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro[] $modifyRequestvFMacro
     */
    public function __construct(array $modifyRequestvFMacro = array())
    {
        $this
            ->setModifyRequestvFMacro($modifyRequestvFMacro);
    }
    /**
     * Get ModifyRequestvFMacro value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro[]|null
     */
    public function getModifyRequestvFMacro()
    {
        return isset($this->ModifyRequestvFMacro) ? $this->ModifyRequestvFMacro : null;
    }
    /**
     * Set ModifyRequestvFMacro value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro[] $modifyRequestvFMacro
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro
     */
    public function setModifyRequestvFMacro(array $modifyRequestvFMacro = array())
    {
        foreach ($modifyRequestvFMacro as $arrayOfModifyRequestvFMacroModifyRequestvFMacroItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestvFMacroModifyRequestvFMacroItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestvFMacro property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro, "%s" given', is_object($arrayOfModifyRequestvFMacroModifyRequestvFMacroItem) ? get_class($arrayOfModifyRequestvFMacroModifyRequestvFMacroItem) : gettype($arrayOfModifyRequestvFMacroModifyRequestvFMacroItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestvFMacro) || (is_array($modifyRequestvFMacro) && empty($modifyRequestvFMacro))) {
            unset($this->ModifyRequestvFMacro);
        } else {
            $this->ModifyRequestvFMacro = $modifyRequestvFMacro;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestvFMacro value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro
     */
    public function addToModifyRequestvFMacro(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestvFMacro property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestvFMacro[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestvFMacro|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestvFMacro
     */
    public function getAttributeName()
    {
        return 'ModifyRequestvFMacro';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestvFMacro
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
