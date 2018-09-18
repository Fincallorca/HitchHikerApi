<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRebookRequestSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRebookRequestSegment
 * @subpackage Arrays
 */
class ArrayOfRebookRequestSegment extends AbstractStructArrayBase
{
    /**
     * The RebookRequestSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment[]
     */
    public $RebookRequestSegment;
    /**
     * Constructor method for ArrayOfRebookRequestSegment
     * @uses ArrayOfRebookRequestSegment::setRebookRequestSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment[] $rebookRequestSegment
     */
    public function __construct(array $rebookRequestSegment = array())
    {
        $this
            ->setRebookRequestSegment($rebookRequestSegment);
    }
    /**
     * Get RebookRequestSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment[]|null
     */
    public function getRebookRequestSegment()
    {
        return isset($this->RebookRequestSegment) ? $this->RebookRequestSegment : null;
    }
    /**
     * Set RebookRequestSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment[] $rebookRequestSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRebookRequestSegment
     */
    public function setRebookRequestSegment(array $rebookRequestSegment = array())
    {
        foreach ($rebookRequestSegment as $arrayOfRebookRequestSegmentRebookRequestSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfRebookRequestSegmentRebookRequestSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment) {
                throw new \InvalidArgumentException(sprintf('The RebookRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment, "%s" given', is_object($arrayOfRebookRequestSegmentRebookRequestSegmentItem) ? get_class($arrayOfRebookRequestSegmentRebookRequestSegmentItem) : gettype($arrayOfRebookRequestSegmentRebookRequestSegmentItem)), __LINE__);
            }
        }
        if (is_null($rebookRequestSegment) || (is_array($rebookRequestSegment) && empty($rebookRequestSegment))) {
            unset($this->RebookRequestSegment);
        } else {
            $this->RebookRequestSegment = $rebookRequestSegment;
        }
        return $this;
    }
    /**
     * Add item to RebookRequestSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRebookRequestSegment
     */
    public function addToRebookRequestSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment) {
            throw new \InvalidArgumentException(sprintf('The RebookRequestSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RebookRequestSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RebookRequestSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RebookRequestSegment
     */
    public function getAttributeName()
    {
        return 'RebookRequestSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRebookRequestSegment
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
