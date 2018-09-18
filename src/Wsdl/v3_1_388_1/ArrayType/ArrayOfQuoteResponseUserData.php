<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteResponseUserData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteResponseUserData
 * @subpackage Arrays
 */
class ArrayOfQuoteResponseUserData extends AbstractStructArrayBase
{
    /**
     * The QuoteResponseUserData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData[]
     */
    public $QuoteResponseUserData;
    /**
     * Constructor method for ArrayOfQuoteResponseUserData
     * @uses ArrayOfQuoteResponseUserData::setQuoteResponseUserData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData[] $quoteResponseUserData
     */
    public function __construct(array $quoteResponseUserData = array())
    {
        $this
            ->setQuoteResponseUserData($quoteResponseUserData);
    }
    /**
     * Get QuoteResponseUserData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData[]|null
     */
    public function getQuoteResponseUserData()
    {
        return isset($this->QuoteResponseUserData) ? $this->QuoteResponseUserData : null;
    }
    /**
     * Set QuoteResponseUserData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData[] $quoteResponseUserData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData
     */
    public function setQuoteResponseUserData(array $quoteResponseUserData = array())
    {
        foreach ($quoteResponseUserData as $arrayOfQuoteResponseUserDataQuoteResponseUserDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteResponseUserDataQuoteResponseUserDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData) {
                throw new \InvalidArgumentException(sprintf('The QuoteResponseUserData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData, "%s" given', is_object($arrayOfQuoteResponseUserDataQuoteResponseUserDataItem) ? get_class($arrayOfQuoteResponseUserDataQuoteResponseUserDataItem) : gettype($arrayOfQuoteResponseUserDataQuoteResponseUserDataItem)), __LINE__);
            }
        }
        if (is_null($quoteResponseUserData) || (is_array($quoteResponseUserData) && empty($quoteResponseUserData))) {
            unset($this->QuoteResponseUserData);
        } else {
            $this->QuoteResponseUserData = $quoteResponseUserData;
        }
        return $this;
    }
    /**
     * Add item to QuoteResponseUserData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData
     */
    public function addToQuoteResponseUserData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData) {
            throw new \InvalidArgumentException(sprintf('The QuoteResponseUserData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteResponseUserData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseUserData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteResponseUserData
     */
    public function getAttributeName()
    {
        return 'QuoteResponseUserData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseUserData
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
