<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteResponseFare ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteResponseFare
 * @subpackage Arrays
 */
class ArrayOfQuoteResponseFare extends AbstractStructArrayBase
{
    /**
     * The QuoteResponseFare
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare[]
     */
    public $QuoteResponseFare;
    /**
     * Constructor method for ArrayOfQuoteResponseFare
     * @uses ArrayOfQuoteResponseFare::setQuoteResponseFare()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare[] $quoteResponseFare
     */
    public function __construct(array $quoteResponseFare = array())
    {
        $this
            ->setQuoteResponseFare($quoteResponseFare);
    }
    /**
     * Get QuoteResponseFare value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare[]|null
     */
    public function getQuoteResponseFare()
    {
        return isset($this->QuoteResponseFare) ? $this->QuoteResponseFare : null;
    }
    /**
     * Set QuoteResponseFare value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare[] $quoteResponseFare
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare
     */
    public function setQuoteResponseFare(array $quoteResponseFare = array())
    {
        foreach ($quoteResponseFare as $arrayOfQuoteResponseFareQuoteResponseFareItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteResponseFareQuoteResponseFareItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare) {
                throw new \InvalidArgumentException(sprintf('The QuoteResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare, "%s" given', is_object($arrayOfQuoteResponseFareQuoteResponseFareItem) ? get_class($arrayOfQuoteResponseFareQuoteResponseFareItem) : gettype($arrayOfQuoteResponseFareQuoteResponseFareItem)), __LINE__);
            }
        }
        if (is_null($quoteResponseFare) || (is_array($quoteResponseFare) && empty($quoteResponseFare))) {
            unset($this->QuoteResponseFare);
        } else {
            $this->QuoteResponseFare = $quoteResponseFare;
        }
        return $this;
    }
    /**
     * Add item to QuoteResponseFare value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare
     */
    public function addToQuoteResponseFare(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare) {
            throw new \InvalidArgumentException(sprintf('The QuoteResponseFare property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteResponseFare[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseFare|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteResponseFare
     */
    public function getAttributeName()
    {
        return 'QuoteResponseFare';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseFare
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
