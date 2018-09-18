<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTaxDetail ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTaxDetail
 * @subpackage Arrays
 */
class ArrayOfTaxDetail extends AbstractStructArrayBase
{
    /**
     * The TaxDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail[]
     */
    public $TaxDetail;
    /**
     * Constructor method for ArrayOfTaxDetail
     * @uses ArrayOfTaxDetail::setTaxDetail()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail[] $taxDetail
     */
    public function __construct(array $taxDetail = array())
    {
        $this
            ->setTaxDetail($taxDetail);
    }
    /**
     * Get TaxDetail value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail[]|null
     */
    public function getTaxDetail()
    {
        return isset($this->TaxDetail) ? $this->TaxDetail : null;
    }
    /**
     * Set TaxDetail value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail[] $taxDetail
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
     */
    public function setTaxDetail(array $taxDetail = array())
    {
        foreach ($taxDetail as $arrayOfTaxDetailTaxDetailItem) {
            // validation for constraint: itemType
            if (!$arrayOfTaxDetailTaxDetailItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail) {
                throw new \InvalidArgumentException(sprintf('The TaxDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail, "%s" given', is_object($arrayOfTaxDetailTaxDetailItem) ? get_class($arrayOfTaxDetailTaxDetailItem) : gettype($arrayOfTaxDetailTaxDetailItem)), __LINE__);
            }
        }
        if (is_null($taxDetail) || (is_array($taxDetail) && empty($taxDetail))) {
            unset($this->TaxDetail);
        } else {
            $this->TaxDetail = $taxDetail;
        }
        return $this;
    }
    /**
     * Add item to TaxDetail value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
     */
    public function addToTaxDetail(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail) {
            throw new \InvalidArgumentException(sprintf('The TaxDetail property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxDetail[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TaxDetail
     */
    public function getAttributeName()
    {
        return 'TaxDetail';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
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
