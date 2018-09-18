<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponseTicketInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponseTicketInfo
 * @subpackage Arrays
 */
class ArrayOfPNRResponseTicketInfo extends AbstractStructArrayBase
{
    /**
     * The PNRResponseTicketInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo[]
     */
    public $PNRResponseTicketInfo;
    /**
     * Constructor method for ArrayOfPNRResponseTicketInfo
     * @uses ArrayOfPNRResponseTicketInfo::setPNRResponseTicketInfo()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo[] $pNRResponseTicketInfo
     */
    public function __construct(array $pNRResponseTicketInfo = array())
    {
        $this
            ->setPNRResponseTicketInfo($pNRResponseTicketInfo);
    }
    /**
     * Get PNRResponseTicketInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo[]|null
     */
    public function getPNRResponseTicketInfo()
    {
        return isset($this->PNRResponseTicketInfo) ? $this->PNRResponseTicketInfo : null;
    }
    /**
     * Set PNRResponseTicketInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo[] $pNRResponseTicketInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo
     */
    public function setPNRResponseTicketInfo(array $pNRResponseTicketInfo = array())
    {
        foreach ($pNRResponseTicketInfo as $arrayOfPNRResponseTicketInfoPNRResponseTicketInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponseTicketInfoPNRResponseTicketInfoItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo) {
                throw new \InvalidArgumentException(sprintf('The PNRResponseTicketInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo, "%s" given', is_object($arrayOfPNRResponseTicketInfoPNRResponseTicketInfoItem) ? get_class($arrayOfPNRResponseTicketInfoPNRResponseTicketInfoItem) : gettype($arrayOfPNRResponseTicketInfoPNRResponseTicketInfoItem)), __LINE__);
            }
        }
        if (is_null($pNRResponseTicketInfo) || (is_array($pNRResponseTicketInfo) && empty($pNRResponseTicketInfo))) {
            unset($this->PNRResponseTicketInfo);
        } else {
            $this->PNRResponseTicketInfo = $pNRResponseTicketInfo;
        }
        return $this;
    }
    /**
     * Add item to PNRResponseTicketInfo value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo
     */
    public function addToPNRResponseTicketInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo) {
            throw new \InvalidArgumentException(sprintf('The PNRResponseTicketInfo property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponseTicketInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTicketInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponseTicketInfo
     */
    public function getAttributeName()
    {
        return 'PNRResponseTicketInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseTicketInfo
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
