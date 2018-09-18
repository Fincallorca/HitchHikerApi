<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayResponseUserInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayResponseUserInfo
 * @subpackage Arrays
 */
class ArrayOfDisplayResponseUserInfo extends AbstractStructArrayBase
{
    /**
     * The DisplayResponseUserInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo[]
     */
    public $DisplayResponseUserInfo;
    /**
     * Constructor method for ArrayOfDisplayResponseUserInfo
     * @uses ArrayOfDisplayResponseUserInfo::setDisplayResponseUserInfo()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo[] $displayResponseUserInfo
     */
    public function __construct(array $displayResponseUserInfo = array())
    {
        $this
            ->setDisplayResponseUserInfo($displayResponseUserInfo);
    }
    /**
     * Get DisplayResponseUserInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo[]|null
     */
    public function getDisplayResponseUserInfo()
    {
        return isset($this->DisplayResponseUserInfo) ? $this->DisplayResponseUserInfo : null;
    }
    /**
     * Set DisplayResponseUserInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo[] $displayResponseUserInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo
     */
    public function setDisplayResponseUserInfo(array $displayResponseUserInfo = array())
    {
        foreach ($displayResponseUserInfo as $arrayOfDisplayResponseUserInfoDisplayResponseUserInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayResponseUserInfoDisplayResponseUserInfoItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo) {
                throw new \InvalidArgumentException(sprintf('The DisplayResponseUserInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo, "%s" given', is_object($arrayOfDisplayResponseUserInfoDisplayResponseUserInfoItem) ? get_class($arrayOfDisplayResponseUserInfoDisplayResponseUserInfoItem) : gettype($arrayOfDisplayResponseUserInfoDisplayResponseUserInfoItem)), __LINE__);
            }
        }
        if (is_null($displayResponseUserInfo) || (is_array($displayResponseUserInfo) && empty($displayResponseUserInfo))) {
            unset($this->DisplayResponseUserInfo);
        } else {
            $this->DisplayResponseUserInfo = $displayResponseUserInfo;
        }
        return $this;
    }
    /**
     * Add item to DisplayResponseUserInfo value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo
     */
    public function addToDisplayResponseUserInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo) {
            throw new \InvalidArgumentException(sprintf('The DisplayResponseUserInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayResponseUserInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseUserInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayResponseUserInfo
     */
    public function getAttributeName()
    {
        return 'DisplayResponseUserInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo
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
