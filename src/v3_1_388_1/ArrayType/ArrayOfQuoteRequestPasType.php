<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQuoteRequestPasType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQuoteRequestPasType
 * @subpackage Arrays
 */
class ArrayOfQuoteRequestPasType extends AbstractStructArrayBase
{
    /**
     * The QuoteRequestPasType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType[]
     */
    public $QuoteRequestPasType;
    /**
     * Constructor method for ArrayOfQuoteRequestPasType
     * @uses ArrayOfQuoteRequestPasType::setQuoteRequestPasType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType[] $quoteRequestPasType
     */
    public function __construct(array $quoteRequestPasType = array())
    {
        $this
            ->setQuoteRequestPasType($quoteRequestPasType);
    }
    /**
     * Get QuoteRequestPasType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType[]|null
     */
    public function getQuoteRequestPasType()
    {
        return isset($this->QuoteRequestPasType) ? $this->QuoteRequestPasType : null;
    }
    /**
     * Set QuoteRequestPasType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType[] $quoteRequestPasType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType
     */
    public function setQuoteRequestPasType(array $quoteRequestPasType = array())
    {
        foreach ($quoteRequestPasType as $arrayOfQuoteRequestPasTypeQuoteRequestPasTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfQuoteRequestPasTypeQuoteRequestPasTypeItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType) {
                throw new \InvalidArgumentException(sprintf('The QuoteRequestPasType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType, "%s" given', is_object($arrayOfQuoteRequestPasTypeQuoteRequestPasTypeItem) ? get_class($arrayOfQuoteRequestPasTypeQuoteRequestPasTypeItem) : gettype($arrayOfQuoteRequestPasTypeQuoteRequestPasTypeItem)), __LINE__);
            }
        }
        if (is_null($quoteRequestPasType) || (is_array($quoteRequestPasType) && empty($quoteRequestPasType))) {
            unset($this->QuoteRequestPasType);
        } else {
            $this->QuoteRequestPasType = $quoteRequestPasType;
        }
        return $this;
    }
    /**
     * Add item to QuoteRequestPasType value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType
     */
    public function addToQuoteRequestPasType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType) {
            throw new \InvalidArgumentException(sprintf('The QuoteRequestPasType property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QuoteRequestPasType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteRequestPasType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QuoteRequestPasType
     */
    public function getAttributeName()
    {
        return 'QuoteRequestPasType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteRequestPasType
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
