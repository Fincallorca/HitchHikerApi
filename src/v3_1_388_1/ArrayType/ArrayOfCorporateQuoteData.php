<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCorporateQuoteData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCorporateQuoteData
 * @subpackage Arrays
 */
class ArrayOfCorporateQuoteData extends AbstractStructArrayBase
{
    /**
     * The CorporateQuoteData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData[]
     */
    public $CorporateQuoteData;
    /**
     * Constructor method for ArrayOfCorporateQuoteData
     * @uses ArrayOfCorporateQuoteData::setCorporateQuoteData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData[] $corporateQuoteData
     */
    public function __construct(array $corporateQuoteData = array())
    {
        $this
            ->setCorporateQuoteData($corporateQuoteData);
    }
    /**
     * Get CorporateQuoteData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData[]|null
     */
    public function getCorporateQuoteData()
    {
        return isset($this->CorporateQuoteData) ? $this->CorporateQuoteData : null;
    }
    /**
     * Set CorporateQuoteData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData[] $corporateQuoteData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCorporateQuoteData
     */
    public function setCorporateQuoteData(array $corporateQuoteData = array())
    {
        foreach ($corporateQuoteData as $arrayOfCorporateQuoteDataCorporateQuoteDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfCorporateQuoteDataCorporateQuoteDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData) {
                throw new \InvalidArgumentException(sprintf('The CorporateQuoteData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData, "%s" given', is_object($arrayOfCorporateQuoteDataCorporateQuoteDataItem) ? get_class($arrayOfCorporateQuoteDataCorporateQuoteDataItem) : gettype($arrayOfCorporateQuoteDataCorporateQuoteDataItem)), __LINE__);
            }
        }
        if (is_null($corporateQuoteData) || (is_array($corporateQuoteData) && empty($corporateQuoteData))) {
            unset($this->CorporateQuoteData);
        } else {
            $this->CorporateQuoteData = $corporateQuoteData;
        }
        return $this;
    }
    /**
     * Add item to CorporateQuoteData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCorporateQuoteData
     */
    public function addToCorporateQuoteData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData) {
            throw new \InvalidArgumentException(sprintf('The CorporateQuoteData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CorporateQuoteData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateQuoteData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CorporateQuoteData
     */
    public function getAttributeName()
    {
        return 'CorporateQuoteData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCorporateQuoteData
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
