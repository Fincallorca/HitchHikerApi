<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayRequestLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayRequestLeg
 * @subpackage Arrays
 */
class ArrayOfDisplayRequestLeg extends AbstractStructArrayBase
{
    /**
     * The DisplayRequestLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg[]
     */
    public $DisplayRequestLeg;
    /**
     * Constructor method for ArrayOfDisplayRequestLeg
     * @uses ArrayOfDisplayRequestLeg::setDisplayRequestLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg[] $displayRequestLeg
     */
    public function __construct(array $displayRequestLeg = array())
    {
        $this
            ->setDisplayRequestLeg($displayRequestLeg);
    }
    /**
     * Get DisplayRequestLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg[]|null
     */
    public function getDisplayRequestLeg()
    {
        return isset($this->DisplayRequestLeg) ? $this->DisplayRequestLeg : null;
    }
    /**
     * Set DisplayRequestLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg[] $displayRequestLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg
     */
    public function setDisplayRequestLeg(array $displayRequestLeg = array())
    {
        foreach ($displayRequestLeg as $arrayOfDisplayRequestLegDisplayRequestLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayRequestLegDisplayRequestLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg) {
                throw new \InvalidArgumentException(sprintf('The DisplayRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg, "%s" given', is_object($arrayOfDisplayRequestLegDisplayRequestLegItem) ? get_class($arrayOfDisplayRequestLegDisplayRequestLegItem) : gettype($arrayOfDisplayRequestLegDisplayRequestLegItem)), __LINE__);
            }
        }
        if (is_null($displayRequestLeg) || (is_array($displayRequestLeg) && empty($displayRequestLeg))) {
            unset($this->DisplayRequestLeg);
        } else {
            $this->DisplayRequestLeg = $displayRequestLeg;
        }
        return $this;
    }
    /**
     * Add item to DisplayRequestLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg
     */
    public function addToDisplayRequestLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg) {
            throw new \InvalidArgumentException(sprintf('The DisplayRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayRequestLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayRequestLeg
     */
    public function getAttributeName()
    {
        return 'DisplayRequestLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestLeg
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
