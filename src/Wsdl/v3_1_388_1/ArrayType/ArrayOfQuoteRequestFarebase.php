<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteRequestFarebase ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteRequestFarebase
 * @subpackage Arrays
 */
class ArrayOfQuoteRequestFarebase extends AbstractStructArrayBase
{
    /**
     * The QuoteRequestFarebase
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase[]
     */
    public $QuoteRequestFarebase;
    /**
     * Constructor method for ArrayOfQuoteRequestFarebase
     * @uses ArrayOfQuoteRequestFarebase::setQuoteRequestFarebase()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase[] $quoteRequestFarebase
     */
    public function __construct(array $quoteRequestFarebase = array())
    {
        $this
            ->setQuoteRequestFarebase($quoteRequestFarebase);
    }
    /**
     * Get QuoteRequestFarebase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase[]|null
     */
    public function getQuoteRequestFarebase()
    {
        return isset($this->QuoteRequestFarebase) ? $this->QuoteRequestFarebase : null;
    }
    /**
     * Set QuoteRequestFarebase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase[] $quoteRequestFarebase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase
     */
    public function setQuoteRequestFarebase(array $quoteRequestFarebase = array())
    {
        foreach ($quoteRequestFarebase as $arrayOfQuoteRequestFarebaseQuoteRequestFarebaseItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteRequestFarebaseQuoteRequestFarebaseItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase) {
                throw new \InvalidArgumentException(sprintf('The QuoteRequestFarebase property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase, "%s" given', is_object($arrayOfQuoteRequestFarebaseQuoteRequestFarebaseItem) ? get_class($arrayOfQuoteRequestFarebaseQuoteRequestFarebaseItem) : gettype($arrayOfQuoteRequestFarebaseQuoteRequestFarebaseItem)), __LINE__);
            }
        }
        if (is_null($quoteRequestFarebase) || (is_array($quoteRequestFarebase) && empty($quoteRequestFarebase))) {
            unset($this->QuoteRequestFarebase);
        } else {
            $this->QuoteRequestFarebase = $quoteRequestFarebase;
        }
        return $this;
    }
    /**
     * Add item to QuoteRequestFarebase value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase
     */
    public function addToQuoteRequestFarebase(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase) {
            throw new \InvalidArgumentException(sprintf('The QuoteRequestFarebase property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteRequestFarebase[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestFarebase|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteRequestFarebase
     */
    public function getAttributeName()
    {
        return 'QuoteRequestFarebase';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestFarebase
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
