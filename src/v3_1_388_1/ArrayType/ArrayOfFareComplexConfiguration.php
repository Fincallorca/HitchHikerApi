<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareComplexConfiguration ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareComplexConfiguration
 * @subpackage Arrays
 */
class ArrayOfFareComplexConfiguration extends AbstractStructArrayBase
{
    /**
     * The FareComplexConfiguration
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration[]
     */
    public $FareComplexConfiguration;
    /**
     * Constructor method for ArrayOfFareComplexConfiguration
     * @uses ArrayOfFareComplexConfiguration::setFareComplexConfiguration()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration[] $fareComplexConfiguration
     */
    public function __construct(array $fareComplexConfiguration = array())
    {
        $this
            ->setFareComplexConfiguration($fareComplexConfiguration);
    }
    /**
     * Get FareComplexConfiguration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration[]|null
     */
    public function getFareComplexConfiguration()
    {
        return isset($this->FareComplexConfiguration) ? $this->FareComplexConfiguration : null;
    }
    /**
     * Set FareComplexConfiguration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration[] $fareComplexConfiguration
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration
     */
    public function setFareComplexConfiguration(array $fareComplexConfiguration = array())
    {
        foreach ($fareComplexConfiguration as $arrayOfFareComplexConfigurationFareComplexConfigurationItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareComplexConfigurationFareComplexConfigurationItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration) {
                throw new \InvalidArgumentException(sprintf('The FareComplexConfiguration property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration, "%s" given', is_object($arrayOfFareComplexConfigurationFareComplexConfigurationItem) ? get_class($arrayOfFareComplexConfigurationFareComplexConfigurationItem) : gettype($arrayOfFareComplexConfigurationFareComplexConfigurationItem)), __LINE__);
            }
        }
        if (is_null($fareComplexConfiguration) || (is_array($fareComplexConfiguration) && empty($fareComplexConfiguration))) {
            unset($this->FareComplexConfiguration);
        } else {
            $this->FareComplexConfiguration = $fareComplexConfiguration;
        }
        return $this;
    }
    /**
     * Add item to FareComplexConfiguration value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration
     */
    public function addToFareComplexConfiguration(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration) {
            throw new \InvalidArgumentException(sprintf('The FareComplexConfiguration property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComplexConfiguration[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexConfiguration|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareComplexConfiguration
     */
    public function getAttributeName()
    {
        return 'FareComplexConfiguration';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareComplexConfiguration
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
