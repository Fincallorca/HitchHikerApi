<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVersionData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVersionData
 * @subpackage Arrays
 */
class ArrayOfVersionData extends AbstractStructArrayBase
{
    /**
     * The VersionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData[]
     */
    public $VersionData;
    /**
     * Constructor method for ArrayOfVersionData
     * @uses ArrayOfVersionData::setVersionData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData[] $versionData
     */
    public function __construct(array $versionData = array())
    {
        $this
            ->setVersionData($versionData);
    }
    /**
     * Get VersionData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData[]|null
     */
    public function getVersionData()
    {
        return isset($this->VersionData) ? $this->VersionData : null;
    }
    /**
     * Set VersionData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData[] $versionData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData
     */
    public function setVersionData(array $versionData = array())
    {
        foreach ($versionData as $arrayOfVersionDataVersionDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfVersionDataVersionDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData) {
                throw new \InvalidArgumentException(sprintf('The VersionData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData, "%s" given', is_object($arrayOfVersionDataVersionDataItem) ? get_class($arrayOfVersionDataVersionDataItem) : gettype($arrayOfVersionDataVersionDataItem)), __LINE__);
            }
        }
        if (is_null($versionData) || (is_array($versionData) && empty($versionData))) {
            unset($this->VersionData);
        } else {
            $this->VersionData = $versionData;
        }
        return $this;
    }
    /**
     * Add item to VersionData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData
     */
    public function addToVersionData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData) {
            throw new \InvalidArgumentException(sprintf('The VersionData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VersionData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\VersionData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VersionData
     */
    public function getAttributeName()
    {
        return 'VersionData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfVersionData
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
