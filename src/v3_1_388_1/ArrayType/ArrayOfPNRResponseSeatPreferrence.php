<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponseSeatPreferrence ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponseSeatPreferrence
 * @subpackage Arrays
 */
class ArrayOfPNRResponseSeatPreferrence extends AbstractStructArrayBase
{
    /**
     * The PNRResponseSeatPreferrence
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence[]
     */
    public $PNRResponseSeatPreferrence;
    /**
     * Constructor method for ArrayOfPNRResponseSeatPreferrence
     * @uses ArrayOfPNRResponseSeatPreferrence::setPNRResponseSeatPreferrence()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence[] $pNRResponseSeatPreferrence
     */
    public function __construct(array $pNRResponseSeatPreferrence = array())
    {
        $this
            ->setPNRResponseSeatPreferrence($pNRResponseSeatPreferrence);
    }
    /**
     * Get PNRResponseSeatPreferrence value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence[]|null
     */
    public function getPNRResponseSeatPreferrence()
    {
        return isset($this->PNRResponseSeatPreferrence) ? $this->PNRResponseSeatPreferrence : null;
    }
    /**
     * Set PNRResponseSeatPreferrence value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence[] $pNRResponseSeatPreferrence
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence
     */
    public function setPNRResponseSeatPreferrence(array $pNRResponseSeatPreferrence = array())
    {
        foreach ($pNRResponseSeatPreferrence as $arrayOfPNRResponseSeatPreferrencePNRResponseSeatPreferrenceItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponseSeatPreferrencePNRResponseSeatPreferrenceItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence) {
                throw new \InvalidArgumentException(sprintf('The PNRResponseSeatPreferrence property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence, "%s" given', is_object($arrayOfPNRResponseSeatPreferrencePNRResponseSeatPreferrenceItem) ? get_class($arrayOfPNRResponseSeatPreferrencePNRResponseSeatPreferrenceItem) : gettype($arrayOfPNRResponseSeatPreferrencePNRResponseSeatPreferrenceItem)), __LINE__);
            }
        }
        if (is_null($pNRResponseSeatPreferrence) || (is_array($pNRResponseSeatPreferrence) && empty($pNRResponseSeatPreferrence))) {
            unset($this->PNRResponseSeatPreferrence);
        } else {
            $this->PNRResponseSeatPreferrence = $pNRResponseSeatPreferrence;
        }
        return $this;
    }
    /**
     * Add item to PNRResponseSeatPreferrence value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence
     */
    public function addToPNRResponseSeatPreferrence(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence) {
            throw new \InvalidArgumentException(sprintf('The PNRResponseSeatPreferrence property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponseSeatPreferrence[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseSeatPreferrence|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponseSeatPreferrence
     */
    public function getAttributeName()
    {
        return 'PNRResponseSeatPreferrence';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseSeatPreferrence
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
