<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSSRRequestData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSSRRequestData
 * @subpackage Arrays
 */
class ArrayOfSSRRequestData extends AbstractStructArrayBase
{
    /**
     * The SSRRequestData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData[]
     */
    public $SSRRequestData;
    /**
     * Constructor method for ArrayOfSSRRequestData
     * @uses ArrayOfSSRRequestData::setSSRRequestData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData[] $sSRRequestData
     */
    public function __construct(array $sSRRequestData = array())
    {
        $this
            ->setSSRRequestData($sSRRequestData);
    }
    /**
     * Get SSRRequestData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData[]|null
     */
    public function getSSRRequestData()
    {
        return isset($this->SSRRequestData) ? $this->SSRRequestData : null;
    }
    /**
     * Set SSRRequestData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData[] $sSRRequestData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData
     */
    public function setSSRRequestData(array $sSRRequestData = array())
    {
        foreach ($sSRRequestData as $arrayOfSSRRequestDataSSRRequestDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfSSRRequestDataSSRRequestDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData) {
                throw new \InvalidArgumentException(sprintf('The SSRRequestData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData, "%s" given', is_object($arrayOfSSRRequestDataSSRRequestDataItem) ? get_class($arrayOfSSRRequestDataSSRRequestDataItem) : gettype($arrayOfSSRRequestDataSSRRequestDataItem)), __LINE__);
            }
        }
        if (is_null($sSRRequestData) || (is_array($sSRRequestData) && empty($sSRRequestData))) {
            unset($this->SSRRequestData);
        } else {
            $this->SSRRequestData = $sSRRequestData;
        }
        return $this;
    }
    /**
     * Add item to SSRRequestData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData
     */
    public function addToSSRRequestData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData) {
            throw new \InvalidArgumentException(sprintf('The SSRRequestData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SSRRequestData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SSRRequestData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SSRRequestData
     */
    public function getAttributeName()
    {
        return 'SSRRequestData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfSSRRequestData
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
