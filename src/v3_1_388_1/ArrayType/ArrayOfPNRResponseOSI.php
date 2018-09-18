<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponseOSI ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponseOSI
 * @subpackage Arrays
 */
class ArrayOfPNRResponseOSI extends AbstractStructArrayBase
{
    /**
     * The PNRResponseOSI
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI[]
     */
    public $PNRResponseOSI;
    /**
     * Constructor method for ArrayOfPNRResponseOSI
     * @uses ArrayOfPNRResponseOSI::setPNRResponseOSI()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI[] $pNRResponseOSI
     */
    public function __construct(array $pNRResponseOSI = array())
    {
        $this
            ->setPNRResponseOSI($pNRResponseOSI);
    }
    /**
     * Get PNRResponseOSI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI[]|null
     */
    public function getPNRResponseOSI()
    {
        return isset($this->PNRResponseOSI) ? $this->PNRResponseOSI : null;
    }
    /**
     * Set PNRResponseOSI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI[] $pNRResponseOSI
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI
     */
    public function setPNRResponseOSI(array $pNRResponseOSI = array())
    {
        foreach ($pNRResponseOSI as $arrayOfPNRResponseOSIPNRResponseOSIItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponseOSIPNRResponseOSIItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI) {
                throw new \InvalidArgumentException(sprintf('The PNRResponseOSI property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI, "%s" given', is_object($arrayOfPNRResponseOSIPNRResponseOSIItem) ? get_class($arrayOfPNRResponseOSIPNRResponseOSIItem) : gettype($arrayOfPNRResponseOSIPNRResponseOSIItem)), __LINE__);
            }
        }
        if (is_null($pNRResponseOSI) || (is_array($pNRResponseOSI) && empty($pNRResponseOSI))) {
            unset($this->PNRResponseOSI);
        } else {
            $this->PNRResponseOSI = $pNRResponseOSI;
        }
        return $this;
    }
    /**
     * Add item to PNRResponseOSI value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI
     */
    public function addToPNRResponseOSI(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI) {
            throw new \InvalidArgumentException(sprintf('The PNRResponseOSI property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponseOSI[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseOSI|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponseOSI
     */
    public function getAttributeName()
    {
        return 'PNRResponseOSI';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseOSI
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
