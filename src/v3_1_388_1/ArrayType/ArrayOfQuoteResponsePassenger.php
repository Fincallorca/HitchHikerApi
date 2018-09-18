<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteResponsePassenger ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteResponsePassenger
 * @subpackage Arrays
 */
class ArrayOfQuoteResponsePassenger extends AbstractStructArrayBase
{
    /**
     * The QuoteResponsePassenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger[]
     */
    public $QuoteResponsePassenger;
    /**
     * Constructor method for ArrayOfQuoteResponsePassenger
     * @uses ArrayOfQuoteResponsePassenger::setQuoteResponsePassenger()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger[] $quoteResponsePassenger
     */
    public function __construct(array $quoteResponsePassenger = array())
    {
        $this
            ->setQuoteResponsePassenger($quoteResponsePassenger);
    }
    /**
     * Get QuoteResponsePassenger value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger[]|null
     */
    public function getQuoteResponsePassenger()
    {
        return isset($this->QuoteResponsePassenger) ? $this->QuoteResponsePassenger : null;
    }
    /**
     * Set QuoteResponsePassenger value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger[] $quoteResponsePassenger
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger
     */
    public function setQuoteResponsePassenger(array $quoteResponsePassenger = array())
    {
        foreach ($quoteResponsePassenger as $arrayOfQuoteResponsePassengerQuoteResponsePassengerItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteResponsePassengerQuoteResponsePassengerItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger) {
                throw new \InvalidArgumentException(sprintf('The QuoteResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger, "%s" given', is_object($arrayOfQuoteResponsePassengerQuoteResponsePassengerItem) ? get_class($arrayOfQuoteResponsePassengerQuoteResponsePassengerItem) : gettype($arrayOfQuoteResponsePassengerQuoteResponsePassengerItem)), __LINE__);
            }
        }
        if (is_null($quoteResponsePassenger) || (is_array($quoteResponsePassenger) && empty($quoteResponsePassenger))) {
            unset($this->QuoteResponsePassenger);
        } else {
            $this->QuoteResponsePassenger = $quoteResponsePassenger;
        }
        return $this;
    }
    /**
     * Add item to QuoteResponsePassenger value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger
     */
    public function addToQuoteResponsePassenger(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger) {
            throw new \InvalidArgumentException(sprintf('The QuoteResponsePassenger property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteResponsePassenger[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteResponsePassenger
     */
    public function getAttributeName()
    {
        return 'QuoteResponsePassenger';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponsePassenger
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
