<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponseDocumentInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponseDocumentInfo
 * @subpackage Arrays
 */
class ArrayOfPNRResponseDocumentInfo extends AbstractStructArrayBase
{
    /**
     * The PNRResponseDocumentInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo[]
     */
    public $PNRResponseDocumentInfo;
    /**
     * Constructor method for ArrayOfPNRResponseDocumentInfo
     * @uses ArrayOfPNRResponseDocumentInfo::setPNRResponseDocumentInfo()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo[] $pNRResponseDocumentInfo
     */
    public function __construct(array $pNRResponseDocumentInfo = array())
    {
        $this
            ->setPNRResponseDocumentInfo($pNRResponseDocumentInfo);
    }
    /**
     * Get PNRResponseDocumentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo[]|null
     */
    public function getPNRResponseDocumentInfo()
    {
        return isset($this->PNRResponseDocumentInfo) ? $this->PNRResponseDocumentInfo : null;
    }
    /**
     * Set PNRResponseDocumentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo[] $pNRResponseDocumentInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo
     */
    public function setPNRResponseDocumentInfo(array $pNRResponseDocumentInfo = array())
    {
        foreach ($pNRResponseDocumentInfo as $arrayOfPNRResponseDocumentInfoPNRResponseDocumentInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponseDocumentInfoPNRResponseDocumentInfoItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo) {
                throw new \InvalidArgumentException(sprintf('The PNRResponseDocumentInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo, "%s" given', is_object($arrayOfPNRResponseDocumentInfoPNRResponseDocumentInfoItem) ? get_class($arrayOfPNRResponseDocumentInfoPNRResponseDocumentInfoItem) : gettype($arrayOfPNRResponseDocumentInfoPNRResponseDocumentInfoItem)), __LINE__);
            }
        }
        if (is_null($pNRResponseDocumentInfo) || (is_array($pNRResponseDocumentInfo) && empty($pNRResponseDocumentInfo))) {
            unset($this->PNRResponseDocumentInfo);
        } else {
            $this->PNRResponseDocumentInfo = $pNRResponseDocumentInfo;
        }
        return $this;
    }
    /**
     * Add item to PNRResponseDocumentInfo value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo
     */
    public function addToPNRResponseDocumentInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo) {
            throw new \InvalidArgumentException(sprintf('The PNRResponseDocumentInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponseDocumentInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseDocumentInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponseDocumentInfo
     */
    public function getAttributeName()
    {
        return 'PNRResponseDocumentInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseDocumentInfo
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
