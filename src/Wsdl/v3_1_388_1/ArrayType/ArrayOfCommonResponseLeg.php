<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCommonResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCommonResponseLeg
 * @subpackage Arrays
 */
class ArrayOfCommonResponseLeg extends AbstractStructArrayBase
{
    /**
     * The CommonResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg[]
     */
    public $CommonResponseLeg;
    /**
     * Constructor method for ArrayOfCommonResponseLeg
     * @uses ArrayOfCommonResponseLeg::setCommonResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg[] $commonResponseLeg
     */
    public function __construct(array $commonResponseLeg = array())
    {
        $this
            ->setCommonResponseLeg($commonResponseLeg);
    }
    /**
     * Get CommonResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg[]|null
     */
    public function getCommonResponseLeg()
    {
        return isset($this->CommonResponseLeg) ? $this->CommonResponseLeg : null;
    }
    /**
     * Set CommonResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg[] $commonResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg
     */
    public function setCommonResponseLeg(array $commonResponseLeg = array())
    {
        foreach ($commonResponseLeg as $arrayOfCommonResponseLegCommonResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfCommonResponseLegCommonResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The CommonResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg, "%s" given', is_object($arrayOfCommonResponseLegCommonResponseLegItem) ? get_class($arrayOfCommonResponseLegCommonResponseLegItem) : gettype($arrayOfCommonResponseLegCommonResponseLegItem)), __LINE__);
            }
        }
        if (is_null($commonResponseLeg) || (is_array($commonResponseLeg) && empty($commonResponseLeg))) {
            unset($this->CommonResponseLeg);
        } else {
            $this->CommonResponseLeg = $commonResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to CommonResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg
     */
    public function addToCommonResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The CommonResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CommonResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CommonResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CommonResponseLeg
     */
    public function getAttributeName()
    {
        return 'CommonResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCommonResponseLeg
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
