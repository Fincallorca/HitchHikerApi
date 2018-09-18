<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDetailsResponseLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDetailsResponseLeg
 * @subpackage Arrays
 */
class ArrayOfDetailsResponseLeg extends AbstractStructArrayBase
{
    /**
     * The DetailsResponseLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg[]
     */
    public $DetailsResponseLeg;
    /**
     * Constructor method for ArrayOfDetailsResponseLeg
     * @uses ArrayOfDetailsResponseLeg::setDetailsResponseLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg[] $detailsResponseLeg
     */
    public function __construct(array $detailsResponseLeg = array())
    {
        $this
            ->setDetailsResponseLeg($detailsResponseLeg);
    }
    /**
     * Get DetailsResponseLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg[]|null
     */
    public function getDetailsResponseLeg()
    {
        return isset($this->DetailsResponseLeg) ? $this->DetailsResponseLeg : null;
    }
    /**
     * Set DetailsResponseLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg[] $detailsResponseLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg
     */
    public function setDetailsResponseLeg(array $detailsResponseLeg = array())
    {
        foreach ($detailsResponseLeg as $arrayOfDetailsResponseLegDetailsResponseLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfDetailsResponseLegDetailsResponseLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg) {
                throw new \InvalidArgumentException(sprintf('The DetailsResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg, "%s" given', is_object($arrayOfDetailsResponseLegDetailsResponseLegItem) ? get_class($arrayOfDetailsResponseLegDetailsResponseLegItem) : gettype($arrayOfDetailsResponseLegDetailsResponseLegItem)), __LINE__);
            }
        }
        if (is_null($detailsResponseLeg) || (is_array($detailsResponseLeg) && empty($detailsResponseLeg))) {
            unset($this->DetailsResponseLeg);
        } else {
            $this->DetailsResponseLeg = $detailsResponseLeg;
        }
        return $this;
    }
    /**
     * Add item to DetailsResponseLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg
     */
    public function addToDetailsResponseLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg) {
            throw new \InvalidArgumentException(sprintf('The DetailsResponseLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DetailsResponseLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsResponseLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DetailsResponseLeg
     */
    public function getAttributeName()
    {
        return 'DetailsResponseLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsResponseLeg
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
