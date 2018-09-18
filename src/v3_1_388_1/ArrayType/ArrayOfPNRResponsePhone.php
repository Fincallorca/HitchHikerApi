<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponsePhone ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponsePhone
 * @subpackage Arrays
 */
class ArrayOfPNRResponsePhone extends AbstractStructArrayBase
{
    /**
     * The PNRResponsePhone
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone[]
     */
    public $PNRResponsePhone;
    /**
     * Constructor method for ArrayOfPNRResponsePhone
     * @uses ArrayOfPNRResponsePhone::setPNRResponsePhone()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone[] $pNRResponsePhone
     */
    public function __construct(array $pNRResponsePhone = array())
    {
        $this
            ->setPNRResponsePhone($pNRResponsePhone);
    }
    /**
     * Get PNRResponsePhone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone[]|null
     */
    public function getPNRResponsePhone()
    {
        return isset($this->PNRResponsePhone) ? $this->PNRResponsePhone : null;
    }
    /**
     * Set PNRResponsePhone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone[] $pNRResponsePhone
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone
     */
    public function setPNRResponsePhone(array $pNRResponsePhone = array())
    {
        foreach ($pNRResponsePhone as $arrayOfPNRResponsePhonePNRResponsePhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponsePhonePNRResponsePhoneItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone) {
                throw new \InvalidArgumentException(sprintf('The PNRResponsePhone property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone, "%s" given', is_object($arrayOfPNRResponsePhonePNRResponsePhoneItem) ? get_class($arrayOfPNRResponsePhonePNRResponsePhoneItem) : gettype($arrayOfPNRResponsePhonePNRResponsePhoneItem)), __LINE__);
            }
        }
        if (is_null($pNRResponsePhone) || (is_array($pNRResponsePhone) && empty($pNRResponsePhone))) {
            unset($this->PNRResponsePhone);
        } else {
            $this->PNRResponsePhone = $pNRResponsePhone;
        }
        return $this;
    }
    /**
     * Add item to PNRResponsePhone value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone
     */
    public function addToPNRResponsePhone(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone) {
            throw new \InvalidArgumentException(sprintf('The PNRResponsePhone property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponsePhone[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponsePhone|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponsePhone
     */
    public function getAttributeName()
    {
        return 'PNRResponsePhone';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponsePhone
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
