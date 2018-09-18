<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPNRResponseLocation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPNRResponseLocation
 * @subpackage Arrays
 */
class ArrayOfPNRResponseLocation extends AbstractStructArrayBase
{
    /**
     * The PNRResponseLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation[]
     */
    public $PNRResponseLocation;
    /**
     * Constructor method for ArrayOfPNRResponseLocation
     * @uses ArrayOfPNRResponseLocation::setPNRResponseLocation()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation[] $pNRResponseLocation
     */
    public function __construct(array $pNRResponseLocation = array())
    {
        $this
            ->setPNRResponseLocation($pNRResponseLocation);
    }
    /**
     * Get PNRResponseLocation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation[]|null
     */
    public function getPNRResponseLocation()
    {
        return isset($this->PNRResponseLocation) ? $this->PNRResponseLocation : null;
    }
    /**
     * Set PNRResponseLocation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation[] $pNRResponseLocation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation
     */
    public function setPNRResponseLocation(array $pNRResponseLocation = array())
    {
        foreach ($pNRResponseLocation as $arrayOfPNRResponseLocationPNRResponseLocationItem) {
            // validation for constraint: itemType
            if (!$arrayOfPNRResponseLocationPNRResponseLocationItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation) {
                throw new \InvalidArgumentException(sprintf('The PNRResponseLocation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation, "%s" given', is_object($arrayOfPNRResponseLocationPNRResponseLocationItem) ? get_class($arrayOfPNRResponseLocationPNRResponseLocationItem) : gettype($arrayOfPNRResponseLocationPNRResponseLocationItem)), __LINE__);
            }
        }
        if (is_null($pNRResponseLocation) || (is_array($pNRResponseLocation) && empty($pNRResponseLocation))) {
            unset($this->PNRResponseLocation);
        } else {
            $this->PNRResponseLocation = $pNRResponseLocation;
        }
        return $this;
    }
    /**
     * Add item to PNRResponseLocation value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation
     */
    public function addToPNRResponseLocation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation) {
            throw new \InvalidArgumentException(sprintf('The PNRResponseLocation property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PNRResponseLocation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PNRResponseLocation
     */
    public function getAttributeName()
    {
        return 'PNRResponseLocation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPNRResponseLocation
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
