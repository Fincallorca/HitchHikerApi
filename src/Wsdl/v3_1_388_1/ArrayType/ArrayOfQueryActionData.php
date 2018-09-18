<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQueryActionData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQueryActionData
 * @subpackage Arrays
 */
class ArrayOfQueryActionData extends AbstractStructArrayBase
{
    /**
     * The QueryActionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData[]
     */
    public $QueryActionData;
    /**
     * Constructor method for ArrayOfQueryActionData
     * @uses ArrayOfQueryActionData::setQueryActionData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData[] $queryActionData
     */
    public function __construct(array $queryActionData = array())
    {
        $this
            ->setQueryActionData($queryActionData);
    }
    /**
     * Get QueryActionData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData[]|null
     */
    public function getQueryActionData()
    {
        return isset($this->QueryActionData) ? $this->QueryActionData : null;
    }
    /**
     * Set QueryActionData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData[] $queryActionData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData
     */
    public function setQueryActionData(array $queryActionData = array())
    {
        foreach ($queryActionData as $arrayOfQueryActionDataQueryActionDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfQueryActionDataQueryActionDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData) {
                throw new \InvalidArgumentException(sprintf('The QueryActionData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData, "%s" given', is_object($arrayOfQueryActionDataQueryActionDataItem) ? get_class($arrayOfQueryActionDataQueryActionDataItem) : gettype($arrayOfQueryActionDataQueryActionDataItem)), __LINE__);
            }
        }
        if (is_null($queryActionData) || (is_array($queryActionData) && empty($queryActionData))) {
            unset($this->QueryActionData);
        } else {
            $this->QueryActionData = $queryActionData;
        }
        return $this;
    }
    /**
     * Add item to QueryActionData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData
     */
    public function addToQueryActionData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData) {
            throw new \InvalidArgumentException(sprintf('The QueryActionData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QueryActionData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryActionData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QueryActionData
     */
    public function getAttributeName()
    {
        return 'QueryActionData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData
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
