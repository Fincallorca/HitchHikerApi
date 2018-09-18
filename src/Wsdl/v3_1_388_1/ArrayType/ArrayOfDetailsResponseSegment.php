<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDetailsResponseSegment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDetailsResponseSegment
 * @subpackage Arrays
 */
class ArrayOfDetailsResponseSegment extends AbstractStructArrayBase
{
    /**
     * The DetailsResponseSegment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment[]
     */
    public $DetailsResponseSegment;
    /**
     * Constructor method for ArrayOfDetailsResponseSegment
     * @uses ArrayOfDetailsResponseSegment::setDetailsResponseSegment()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment[] $detailsResponseSegment
     */
    public function __construct(array $detailsResponseSegment = array())
    {
        $this
            ->setDetailsResponseSegment($detailsResponseSegment);
    }
    /**
     * Get DetailsResponseSegment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment[]|null
     */
    public function getDetailsResponseSegment()
    {
        return isset($this->DetailsResponseSegment) ? $this->DetailsResponseSegment : null;
    }
    /**
     * Set DetailsResponseSegment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment[] $detailsResponseSegment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment
     */
    public function setDetailsResponseSegment(array $detailsResponseSegment = array())
    {
        foreach ($detailsResponseSegment as $arrayOfDetailsResponseSegmentDetailsResponseSegmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfDetailsResponseSegmentDetailsResponseSegmentItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment) {
                throw new \InvalidArgumentException(sprintf('The DetailsResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment, "%s" given', is_object($arrayOfDetailsResponseSegmentDetailsResponseSegmentItem) ? get_class($arrayOfDetailsResponseSegmentDetailsResponseSegmentItem) : gettype($arrayOfDetailsResponseSegmentDetailsResponseSegmentItem)), __LINE__);
            }
        }
        if (is_null($detailsResponseSegment) || (is_array($detailsResponseSegment) && empty($detailsResponseSegment))) {
            unset($this->DetailsResponseSegment);
        } else {
            $this->DetailsResponseSegment = $detailsResponseSegment;
        }
        return $this;
    }
    /**
     * Add item to DetailsResponseSegment value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment
     */
    public function addToDetailsResponseSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment) {
            throw new \InvalidArgumentException(sprintf('The DetailsResponseSegment property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DetailsResponseSegment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseSegment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DetailsResponseSegment
     */
    public function getAttributeName()
    {
        return 'DetailsResponseSegment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseSegment
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
