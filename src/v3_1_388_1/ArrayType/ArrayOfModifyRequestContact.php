<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfModifyRequestContact ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfModifyRequestContact
 * @subpackage Arrays
 */
class ArrayOfModifyRequestContact extends AbstractStructArrayBase
{
    /**
     * The ModifyRequestContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact[]
     */
    public $ModifyRequestContact;
    /**
     * Constructor method for ArrayOfModifyRequestContact
     * @uses ArrayOfModifyRequestContact::setModifyRequestContact()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact[] $modifyRequestContact
     */
    public function __construct(array $modifyRequestContact = array())
    {
        $this
            ->setModifyRequestContact($modifyRequestContact);
    }
    /**
     * Get ModifyRequestContact value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact[]|null
     */
    public function getModifyRequestContact()
    {
        return isset($this->ModifyRequestContact) ? $this->ModifyRequestContact : null;
    }
    /**
     * Set ModifyRequestContact value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact[] $modifyRequestContact
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact
     */
    public function setModifyRequestContact(array $modifyRequestContact = array())
    {
        foreach ($modifyRequestContact as $arrayOfModifyRequestContactModifyRequestContactItem) {
            // validation for constraint: itemType
            if (!$arrayOfModifyRequestContactModifyRequestContactItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact) {
                throw new \InvalidArgumentException(sprintf('The ModifyRequestContact property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact, "%s" given', is_object($arrayOfModifyRequestContactModifyRequestContactItem) ? get_class($arrayOfModifyRequestContactModifyRequestContactItem) : gettype($arrayOfModifyRequestContactModifyRequestContactItem)), __LINE__);
            }
        }
        if (is_null($modifyRequestContact) || (is_array($modifyRequestContact) && empty($modifyRequestContact))) {
            unset($this->ModifyRequestContact);
        } else {
            $this->ModifyRequestContact = $modifyRequestContact;
        }
        return $this;
    }
    /**
     * Add item to ModifyRequestContact value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact
     */
    public function addToModifyRequestContact(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact) {
            throw new \InvalidArgumentException(sprintf('The ModifyRequestContact property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ModifyRequestContact[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestContact|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ModifyRequestContact
     */
    public function getAttributeName()
    {
        return 'ModifyRequestContact';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestContact
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
