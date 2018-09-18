<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTaxResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTaxResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfTaxResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The TaxResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger[]
     */
    public $TaxResponsePassenger;
    /**
     * Constructor method for ArrayOfTaxResponsePassenger
     * @uses ArrayOfTaxResponsePassenger::setTaxResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger[] $taxResponsePassenger
     */
    public function __construct(array $taxResponsePassenger = array())
    {
        $this
            ->setTaxResponsePassenger($taxResponsePassenger);
    }
    /**
     * Get TaxResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger[]|null
     */
    public function getTaxResponsePassenger()
    {
        return isset($this->TaxResponsePassenger) ? $this->TaxResponsePassenger : null;
    }
    /**
     * Set TaxResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger[] $taxResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger
     */
    public function setTaxResponsePassenger(array $taxResponsePassenger = array())
    {
        foreach ($taxResponsePassenger as $arrayOfTaxResponsePassengerTaxResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaxResponsePassengerTaxResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The TaxResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger, "%s" given', is_object($arrayOfTaxResponsePassengerTaxResponsePassengerItem) ? get_class($arrayOfTaxResponsePassengerTaxResponsePassengerItem) : gettype($arrayOfTaxResponsePassengerTaxResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($taxResponsePassenger) || (is_array($taxResponsePassenger) && empty($taxResponsePassenger))) {
            unset($this->TaxResponsePassenger);
        } else {
            $this->TaxResponsePassenger = $taxResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to TaxResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger
     */
    public function addToTaxResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The TaxResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TaxResponsePassenger
     */
    public function getAttributeName()
    {
        return 'TaxResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxResponsePassenger
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
