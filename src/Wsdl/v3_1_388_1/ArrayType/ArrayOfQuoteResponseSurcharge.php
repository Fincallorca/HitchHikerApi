<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteResponseSurcharge ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteResponseSurcharge
 * @subpackage Arrays
 */
class ArrayOfQuoteResponseSurcharge extends AbstractStructArrayBase
{
    /**
     * The QuoteResponseSurcharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge[]
     */
    public $QuoteResponseSurcharge;
    /**
     * Constructor method for ArrayOfQuoteResponseSurcharge
     * @uses ArrayOfQuoteResponseSurcharge::setQuoteResponseSurcharge()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge[] $quoteResponseSurcharge
     */
    public function __construct(array $quoteResponseSurcharge = array())
    {
        $this
            ->setQuoteResponseSurcharge($quoteResponseSurcharge);
    }
    /**
     * Get QuoteResponseSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge[]|null
     */
    public function getQuoteResponseSurcharge()
    {
        return isset($this->QuoteResponseSurcharge) ? $this->QuoteResponseSurcharge : null;
    }
    /**
     * Set QuoteResponseSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge[] $quoteResponseSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge
     */
    public function setQuoteResponseSurcharge(array $quoteResponseSurcharge = array())
    {
        foreach ($quoteResponseSurcharge as $arrayOfQuoteResponseSurchargeQuoteResponseSurchargeItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteResponseSurchargeQuoteResponseSurchargeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge) {
                throw new \InvalidArgumentException(sprintf('The QuoteResponseSurcharge property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge, "%s" given', is_object($arrayOfQuoteResponseSurchargeQuoteResponseSurchargeItem) ? get_class($arrayOfQuoteResponseSurchargeQuoteResponseSurchargeItem) : gettype($arrayOfQuoteResponseSurchargeQuoteResponseSurchargeItem)), __LINE__);
            }
        }
        if (is_null($quoteResponseSurcharge) || (is_array($quoteResponseSurcharge) && empty($quoteResponseSurcharge))) {
            unset($this->QuoteResponseSurcharge);
        } else {
            $this->QuoteResponseSurcharge = $quoteResponseSurcharge;
        }
        return $this;
    }
    /**
     * Add item to QuoteResponseSurcharge value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge
     */
    public function addToQuoteResponseSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge) {
            throw new \InvalidArgumentException(sprintf('The QuoteResponseSurcharge property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteResponseSurcharge[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseSurcharge|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteResponseSurcharge
     */
    public function getAttributeName()
    {
        return 'QuoteResponseSurcharge';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge
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
