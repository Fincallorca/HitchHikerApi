<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTaxRequestLeg ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTaxRequestLeg
 * @subpackage Arrays
 */
class ArrayOfTaxRequestLeg extends AbstractStructArrayBase
{
    /**
     * The TaxRequestLeg
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg[]
     */
    public $TaxRequestLeg;
    /**
     * Constructor method for ArrayOfTaxRequestLeg
     * @uses ArrayOfTaxRequestLeg::setTaxRequestLeg()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg[] $taxRequestLeg
     */
    public function __construct(array $taxRequestLeg = array())
    {
        $this
            ->setTaxRequestLeg($taxRequestLeg);
    }
    /**
     * Get TaxRequestLeg value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg[]|null
     */
    public function getTaxRequestLeg()
    {
        return isset($this->TaxRequestLeg) ? $this->TaxRequestLeg : null;
    }
    /**
     * Set TaxRequestLeg value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg[] $taxRequestLeg
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg
     */
    public function setTaxRequestLeg(array $taxRequestLeg = array())
    {
        foreach ($taxRequestLeg as $arrayOfTaxRequestLegTaxRequestLegItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaxRequestLegTaxRequestLegItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg) {
                throw new \InvalidArgumentException(sprintf('The TaxRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg, "%s" given', is_object($arrayOfTaxRequestLegTaxRequestLegItem) ? get_class($arrayOfTaxRequestLegTaxRequestLegItem) : gettype($arrayOfTaxRequestLegTaxRequestLegItem)), __LINE__);
            }
        }
        if (is_null($taxRequestLeg) || (is_array($taxRequestLeg) && empty($taxRequestLeg))) {
            unset($this->TaxRequestLeg);
        } else {
            $this->TaxRequestLeg = $taxRequestLeg;
        }
        return $this;
    }
    /**
     * Add item to TaxRequestLeg value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg
     */
    public function addToTaxRequestLeg(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg) {
            throw new \InvalidArgumentException(sprintf('The TaxRequestLeg property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxRequestLeg[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxRequestLeg|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TaxRequestLeg
     */
    public function getAttributeName()
    {
        return 'TaxRequestLeg';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxRequestLeg
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
