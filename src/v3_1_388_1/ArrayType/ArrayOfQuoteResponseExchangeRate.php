<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteResponseExchangeRate ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteResponseExchangeRate
 * @subpackage Arrays
 */
class ArrayOfQuoteResponseExchangeRate extends AbstractStructArrayBase
{
    /**
     * The QuoteResponseExchangeRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate[]
     */
    public $QuoteResponseExchangeRate;
    /**
     * Constructor method for ArrayOfQuoteResponseExchangeRate
     * @uses ArrayOfQuoteResponseExchangeRate::setQuoteResponseExchangeRate()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate[] $quoteResponseExchangeRate
     */
    public function __construct(array $quoteResponseExchangeRate = array())
    {
        $this
            ->setQuoteResponseExchangeRate($quoteResponseExchangeRate);
    }
    /**
     * Get QuoteResponseExchangeRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate[]|null
     */
    public function getQuoteResponseExchangeRate()
    {
        return isset($this->QuoteResponseExchangeRate) ? $this->QuoteResponseExchangeRate : null;
    }
    /**
     * Set QuoteResponseExchangeRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate[] $quoteResponseExchangeRate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate
     */
    public function setQuoteResponseExchangeRate(array $quoteResponseExchangeRate = array())
    {
        foreach ($quoteResponseExchangeRate as $arrayOfQuoteResponseExchangeRateQuoteResponseExchangeRateItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteResponseExchangeRateQuoteResponseExchangeRateItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate) {
                throw new \InvalidArgumentException(sprintf('The QuoteResponseExchangeRate property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate, "%s" given', is_object($arrayOfQuoteResponseExchangeRateQuoteResponseExchangeRateItem) ? get_class($arrayOfQuoteResponseExchangeRateQuoteResponseExchangeRateItem) : gettype($arrayOfQuoteResponseExchangeRateQuoteResponseExchangeRateItem)), __LINE__);
            }
        }
        if (is_null($quoteResponseExchangeRate) || (is_array($quoteResponseExchangeRate) && empty($quoteResponseExchangeRate))) {
            unset($this->QuoteResponseExchangeRate);
        } else {
            $this->QuoteResponseExchangeRate = $quoteResponseExchangeRate;
        }
        return $this;
    }
    /**
     * Add item to QuoteResponseExchangeRate value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate
     */
    public function addToQuoteResponseExchangeRate(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate) {
            throw new \InvalidArgumentException(sprintf('The QuoteResponseExchangeRate property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteResponseExchangeRate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseExchangeRate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteResponseExchangeRate
     */
    public function getAttributeName()
    {
        return 'QuoteResponseExchangeRate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseExchangeRate
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
