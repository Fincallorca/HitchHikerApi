<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserPccData ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUserPccData
 * @subpackage Arrays
 */
class ArrayOfUserPccData extends AbstractStructArrayBase
{
    /**
     * The UserPccData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData[]
     */
    public $UserPccData;
    /**
     * Constructor method for ArrayOfUserPccData
     * @uses ArrayOfUserPccData::setUserPccData()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData[] $userPccData
     */
    public function __construct(array $userPccData = array())
    {
        $this
            ->setUserPccData($userPccData);
    }
    /**
     * Get UserPccData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData[]|null
     */
    public function getUserPccData()
    {
        return isset($this->UserPccData) ? $this->UserPccData : null;
    }
    /**
     * Set UserPccData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData[] $userPccData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData
     */
    public function setUserPccData(array $userPccData = array())
    {
        foreach ($userPccData as $arrayOfUserPccDataUserPccDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserPccDataUserPccDataItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData) {
                throw new \InvalidArgumentException(sprintf('The UserPccData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData, "%s" given', is_object($arrayOfUserPccDataUserPccDataItem) ? get_class($arrayOfUserPccDataUserPccDataItem) : gettype($arrayOfUserPccDataUserPccDataItem)), __LINE__);
            }
        }
        if (is_null($userPccData) || (is_array($userPccData) && empty($userPccData))) {
            unset($this->UserPccData);
        } else {
            $this->UserPccData = $userPccData;
        }
        return $this;
    }
    /**
     * Add item to UserPccData value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData
     */
    public function addToUserPccData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData) {
            throw new \InvalidArgumentException(sprintf('The UserPccData property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UserPccData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UserPccData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserPccData
     */
    public function getAttributeName()
    {
        return 'UserPccData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfUserPccData
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
