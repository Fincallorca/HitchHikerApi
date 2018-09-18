<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponseInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponseInfo
 * @subpackage Arrays
 */
class ArrayOfPNRResponseInfo extends AbstractStructArrayBase
{
    /**
     * The PNRResponseInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo[]
     */
    public $PNRResponseInfo;
    /**
     * Constructor method for ArrayOfPNRResponseInfo
     * @uses ArrayOfPNRResponseInfo::setPNRResponseInfo()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo[] $pNRResponseInfo
     */
    public function __construct(array $pNRResponseInfo = array())
    {
        $this
            ->setPNRResponseInfo($pNRResponseInfo);
    }
    /**
     * Get PNRResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo[]|null
     */
    public function getPNRResponseInfo()
    {
        return isset($this->PNRResponseInfo) ? $this->PNRResponseInfo : null;
    }
    /**
     * Set PNRResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo[] $pNRResponseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo
     */
    public function setPNRResponseInfo(array $pNRResponseInfo = array())
    {
        foreach ($pNRResponseInfo as $arrayOfPNRResponseInfoPNRResponseInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponseInfoPNRResponseInfoItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo) {
                throw new \InvalidArgumentException(sprintf('The PNRResponseInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo, "%s" given', is_object($arrayOfPNRResponseInfoPNRResponseInfoItem) ? get_class($arrayOfPNRResponseInfoPNRResponseInfoItem) : gettype($arrayOfPNRResponseInfoPNRResponseInfoItem)), __LINE__);
            }
        }
        if (is_null($pNRResponseInfo) || (is_array($pNRResponseInfo) && empty($pNRResponseInfo))) {
            unset($this->PNRResponseInfo);
        } else {
            $this->PNRResponseInfo = $pNRResponseInfo;
        }
        return $this;
    }
    /**
     * Add item to PNRResponseInfo value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo
     */
    public function addToPNRResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo) {
            throw new \InvalidArgumentException(sprintf('The PNRResponseInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponseInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponseInfo
     */
    public function getAttributeName()
    {
        return 'PNRResponseInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseInfo
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
