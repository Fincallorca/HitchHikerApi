<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTaxRequestPassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTaxRequestPassenger
 * @subpackage Arrays
 */
class ArrayOfTaxRequestPassenger extends AbstractStructArrayBase
{
    /**
     * The TaxRequestPassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger[]
     */
    public $TaxRequestPassenger;
    /**
     * Constructor method for ArrayOfTaxRequestPassenger
     * @uses ArrayOfTaxRequestPassenger::setTaxRequestPassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger[] $taxRequestPassenger
     */
    public function __construct(array $taxRequestPassenger = array())
    {
        $this
            ->setTaxRequestPassenger($taxRequestPassenger);
    }
    /**
     * Get TaxRequestPassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger[]|null
     */
    public function getTaxRequestPassenger()
    {
        return isset($this->TaxRequestPassenger) ? $this->TaxRequestPassenger : null;
    }
    /**
     * Set TaxRequestPassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger[] $taxRequestPassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger
     */
    public function setTaxRequestPassenger(array $taxRequestPassenger = array())
    {
        foreach ($taxRequestPassenger as $arrayOfTaxRequestPassengerTaxRequestPassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaxRequestPassengerTaxRequestPassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger) {
                throw new \InvalidArgumentException(sprintf('The TaxRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger, "%s" given', is_object($arrayOfTaxRequestPassengerTaxRequestPassengerItem) ? get_class($arrayOfTaxRequestPassengerTaxRequestPassengerItem) : gettype($arrayOfTaxRequestPassengerTaxRequestPassengerItem)), __LINE__);
            }
        }
        if (is_null($taxRequestPassenger) || (is_array($taxRequestPassenger) && empty($taxRequestPassenger))) {
            unset($this->TaxRequestPassenger);
        } else {
            $this->TaxRequestPassenger = $taxRequestPassenger;
        }
        return $this;
    }
    /**
     * Add item to TaxRequestPassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger
     */
    public function addToTaxRequestPassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger) {
            throw new \InvalidArgumentException(sprintf('The TaxRequestPassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxRequestPassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestPassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TaxRequestPassenger
     */
    public function getAttributeName()
    {
        return 'TaxRequestPassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestPassenger
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
