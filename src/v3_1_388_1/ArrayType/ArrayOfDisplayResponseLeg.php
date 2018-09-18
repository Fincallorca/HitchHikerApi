<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayResponseLeg
 * @subpackage Arrays
 */
class ArrayOfDisplayResponseLeg extends AbstractStructArrayBase
{
    /**
     * The DisplayResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg[]
     */
    public $DisplayResponseLeg;
    /**
     * Constructor method for ArrayOfDisplayResponseLeg
     * @uses ArrayOfDisplayResponseLeg::setDisplayResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg[] $displayResponseLeg
     */
    public function __construct(array $displayResponseLeg = array())
    {
        $this
            ->setDisplayResponseLeg($displayResponseLeg);
    }
    /**
     * Get DisplayResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg[]|null
     */
    public function getDisplayResponseLeg()
    {
        return isset($this->DisplayResponseLeg) ? $this->DisplayResponseLeg : null;
    }
    /**
     * Set DisplayResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg[] $displayResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg
     */
    public function setDisplayResponseLeg(array $displayResponseLeg = array())
    {
        foreach ($displayResponseLeg as $arrayOfDisplayResponseLegDisplayResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayResponseLegDisplayResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The DisplayResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg, "%s" given', is_object($arrayOfDisplayResponseLegDisplayResponseLegItem) ? get_class($arrayOfDisplayResponseLegDisplayResponseLegItem) : gettype($arrayOfDisplayResponseLegDisplayResponseLegItem)), __LINE__);
            }
        }
        if (is_null($displayResponseLeg) || (is_array($displayResponseLeg) && empty($displayResponseLeg))) {
            unset($this->DisplayResponseLeg);
        } else {
            $this->DisplayResponseLeg = $displayResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to DisplayResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg
     */
    public function addToDisplayResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The DisplayResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayResponseLeg
     */
    public function getAttributeName()
    {
        return 'DisplayResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseLeg
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
