<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfChangeFlightSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfChangeFlightSegment
 * @subpackage Arrays
 */
class ArrayOfChangeFlightSegment extends AbstractStructArrayBase
{
    /**
     * The ChangeFlightSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment[]
     */
    public $ChangeFlightSegment;
    /**
     * Constructor method for ArrayOfChangeFlightSegment
     * @uses ArrayOfChangeFlightSegment::setChangeFlightSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment[] $changeFlightSegment
     */
    public function __construct(array $changeFlightSegment = array())
    {
        $this
            ->setChangeFlightSegment($changeFlightSegment);
    }
    /**
     * Get ChangeFlightSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment[]|null
     */
    public function getChangeFlightSegment()
    {
        return isset($this->ChangeFlightSegment) ? $this->ChangeFlightSegment : null;
    }
    /**
     * Set ChangeFlightSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment[] $changeFlightSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment
     */
    public function setChangeFlightSegment(array $changeFlightSegment = array())
    {
        foreach ($changeFlightSegment as $arrayOfChangeFlightSegmentChangeFlightSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfChangeFlightSegmentChangeFlightSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment) {
                throw new \InvalidArgumentException(sprintf('The ChangeFlightSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment, "%s" given', is_object($arrayOfChangeFlightSegmentChangeFlightSegmentItem) ? get_class($arrayOfChangeFlightSegmentChangeFlightSegmentItem) : gettype($arrayOfChangeFlightSegmentChangeFlightSegmentItem)), __LINE__);
            }
        }
        if (is_null($changeFlightSegment) || (is_array($changeFlightSegment) && empty($changeFlightSegment))) {
            unset($this->ChangeFlightSegment);
        } else {
            $this->ChangeFlightSegment = $changeFlightSegment;
        }
        return $this;
    }
    /**
     * Add item to ChangeFlightSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment
     */
    public function addToChangeFlightSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment) {
            throw new \InvalidArgumentException(sprintf('The ChangeFlightSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ChangeFlightSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ChangeFlightSegment
     */
    public function getAttributeName()
    {
        return 'ChangeFlightSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfChangeFlightSegment
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
