<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCorporateCarrierData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCorporateCarrierData
 * @subpackage Arrays
 */
class ArrayOfCorporateCarrierData extends AbstractStructArrayBase
{
    /**
     * The CorporateCarrierData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData[]
     */
    public $CorporateCarrierData;
    /**
     * Constructor method for ArrayOfCorporateCarrierData
     * @uses ArrayOfCorporateCarrierData::setCorporateCarrierData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData[] $corporateCarrierData
     */
    public function __construct(array $corporateCarrierData = array())
    {
        $this
            ->setCorporateCarrierData($corporateCarrierData);
    }
    /**
     * Get CorporateCarrierData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData[]|null
     */
    public function getCorporateCarrierData()
    {
        return isset($this->CorporateCarrierData) ? $this->CorporateCarrierData : null;
    }
    /**
     * Set CorporateCarrierData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData[] $corporateCarrierData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCorporateCarrierData
     */
    public function setCorporateCarrierData(array $corporateCarrierData = array())
    {
        foreach ($corporateCarrierData as $arrayOfCorporateCarrierDataCorporateCarrierDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfCorporateCarrierDataCorporateCarrierDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData) {
                throw new \InvalidArgumentException(sprintf('The CorporateCarrierData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData, "%s" given', is_object($arrayOfCorporateCarrierDataCorporateCarrierDataItem) ? get_class($arrayOfCorporateCarrierDataCorporateCarrierDataItem) : gettype($arrayOfCorporateCarrierDataCorporateCarrierDataItem)), __LINE__);
            }
        }
        if (is_null($corporateCarrierData) || (is_array($corporateCarrierData) && empty($corporateCarrierData))) {
            unset($this->CorporateCarrierData);
        } else {
            $this->CorporateCarrierData = $corporateCarrierData;
        }
        return $this;
    }
    /**
     * Add item to CorporateCarrierData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCorporateCarrierData
     */
    public function addToCorporateCarrierData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData) {
            throw new \InvalidArgumentException(sprintf('The CorporateCarrierData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CorporateCarrierData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CorporateCarrierData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CorporateCarrierData
     */
    public function getAttributeName()
    {
        return 'CorporateCarrierData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCorporateCarrierData
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
