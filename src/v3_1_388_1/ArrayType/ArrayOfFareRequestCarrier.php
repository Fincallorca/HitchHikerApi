<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareRequestCarrier ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareRequestCarrier
 * @subpackage Arrays
 */
class ArrayOfFareRequestCarrier extends AbstractStructArrayBase
{
    /**
     * The FareRequestCarrier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier[]
     */
    public $FareRequestCarrier;
    /**
     * Constructor method for ArrayOfFareRequestCarrier
     * @uses ArrayOfFareRequestCarrier::setFareRequestCarrier()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier[] $fareRequestCarrier
     */
    public function __construct(array $fareRequestCarrier = array())
    {
        $this
            ->setFareRequestCarrier($fareRequestCarrier);
    }
    /**
     * Get FareRequestCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier[]|null
     */
    public function getFareRequestCarrier()
    {
        return isset($this->FareRequestCarrier) ? $this->FareRequestCarrier : null;
    }
    /**
     * Set FareRequestCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier[] $fareRequestCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier
     */
    public function setFareRequestCarrier(array $fareRequestCarrier = array())
    {
        foreach ($fareRequestCarrier as $arrayOfFareRequestCarrierFareRequestCarrierItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareRequestCarrierFareRequestCarrierItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier) {
                throw new \InvalidArgumentException(sprintf('The FareRequestCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier, "%s" given', is_object($arrayOfFareRequestCarrierFareRequestCarrierItem) ? get_class($arrayOfFareRequestCarrierFareRequestCarrierItem) : gettype($arrayOfFareRequestCarrierFareRequestCarrierItem)), __LINE__);
            }
        }
        if (is_null($fareRequestCarrier) || (is_array($fareRequestCarrier) && empty($fareRequestCarrier))) {
            unset($this->FareRequestCarrier);
        } else {
            $this->FareRequestCarrier = $fareRequestCarrier;
        }
        return $this;
    }
    /**
     * Add item to FareRequestCarrier value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier
     */
    public function addToFareRequestCarrier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier) {
            throw new \InvalidArgumentException(sprintf('The FareRequestCarrier property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRequestCarrier[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCarrier|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareRequestCarrier
     */
    public function getAttributeName()
    {
        return 'FareRequestCarrier';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestCarrier
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
