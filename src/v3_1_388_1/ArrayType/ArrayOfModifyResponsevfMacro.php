<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyResponsevfMacro ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyResponsevfMacro
 * @subpackage Arrays
 */
class ArrayOfModifyResponsevfMacro extends AbstractStructArrayBase
{
    /**
     * The ModifyResponsevfMacro
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro[]
     */
    public $ModifyResponsevfMacro;
    /**
     * Constructor method for ArrayOfModifyResponsevfMacro
     * @uses ArrayOfModifyResponsevfMacro::setModifyResponsevfMacro()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro[] $modifyResponsevfMacro
     */
    public function __construct(array $modifyResponsevfMacro = array())
    {
        $this
            ->setModifyResponsevfMacro($modifyResponsevfMacro);
    }
    /**
     * Get ModifyResponsevfMacro value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro[]|null
     */
    public function getModifyResponsevfMacro()
    {
        return isset($this->ModifyResponsevfMacro) ? $this->ModifyResponsevfMacro : null;
    }
    /**
     * Set ModifyResponsevfMacro value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro[] $modifyResponsevfMacro
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponsevfMacro
     */
    public function setModifyResponsevfMacro(array $modifyResponsevfMacro = array())
    {
        foreach ($modifyResponsevfMacro as $arrayOfModifyResponsevfMacroModifyResponsevfMacroItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyResponsevfMacroModifyResponsevfMacroItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro) {
                throw new \InvalidArgumentException(sprintf('The ModifyResponsevfMacro property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro, "%s" given', is_object($arrayOfModifyResponsevfMacroModifyResponsevfMacroItem) ? get_class($arrayOfModifyResponsevfMacroModifyResponsevfMacroItem) : gettype($arrayOfModifyResponsevfMacroModifyResponsevfMacroItem)), __LINE__);
            }
        }
        if (is_null($modifyResponsevfMacro) || (is_array($modifyResponsevfMacro) && empty($modifyResponsevfMacro))) {
            unset($this->ModifyResponsevfMacro);
        } else {
            $this->ModifyResponsevfMacro = $modifyResponsevfMacro;
        }
        return $this;
    }
    /**
     * Add item to ModifyResponsevfMacro value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponsevfMacro
     */
    public function addToModifyResponsevfMacro(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro) {
            throw new \InvalidArgumentException(sprintf('The ModifyResponsevfMacro property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyResponsevfMacro[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponsevfMacro|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyResponsevfMacro
     */
    public function getAttributeName()
    {
        return 'ModifyResponsevfMacro';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyResponsevfMacro
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
