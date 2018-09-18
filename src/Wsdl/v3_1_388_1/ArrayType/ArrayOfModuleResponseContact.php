<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModuleResponseContact ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModuleResponseContact
 * @subpackage Arrays
 */
class ArrayOfModuleResponseContact extends AbstractStructArrayBase
{
    /**
     * The ModuleResponseContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact[]
     */
    public $ModuleResponseContact;
    /**
     * Constructor method for ArrayOfModuleResponseContact
     * @uses ArrayOfModuleResponseContact::setModuleResponseContact()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact[] $moduleResponseContact
     */
    public function __construct(array $moduleResponseContact = array())
    {
        $this
            ->setModuleResponseContact($moduleResponseContact);
    }
    /**
     * Get ModuleResponseContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact[]|null
     */
    public function getModuleResponseContact()
    {
        return isset($this->ModuleResponseContact) ? $this->ModuleResponseContact : null;
    }
    /**
     * Set ModuleResponseContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact[] $moduleResponseContact
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModuleResponseContact
     */
    public function setModuleResponseContact(array $moduleResponseContact = array())
    {
        foreach ($moduleResponseContact as $arrayOfModuleResponseContactModuleResponseContactItem) {
            // validation for constraint: itemType
            if (!$arrayOfModuleResponseContactModuleResponseContactItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact) {
                throw new \InvalidArgumentException(sprintf('The ModuleResponseContact property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact, "%s" given', is_object($arrayOfModuleResponseContactModuleResponseContactItem) ? get_class($arrayOfModuleResponseContactModuleResponseContactItem) : gettype($arrayOfModuleResponseContactModuleResponseContactItem)), __LINE__);
            }
        }
        if (is_null($moduleResponseContact) || (is_array($moduleResponseContact) && empty($moduleResponseContact))) {
            unset($this->ModuleResponseContact);
        } else {
            $this->ModuleResponseContact = $moduleResponseContact;
        }
        return $this;
    }
    /**
     * Add item to ModuleResponseContact value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModuleResponseContact
     */
    public function addToModuleResponseContact(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact) {
            throw new \InvalidArgumentException(sprintf('The ModuleResponseContact property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModuleResponseContact[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseContact|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModuleResponseContact
     */
    public function getAttributeName()
    {
        return 'ModuleResponseContact';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModuleResponseContact
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
