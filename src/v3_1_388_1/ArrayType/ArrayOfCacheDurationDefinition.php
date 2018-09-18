<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCacheDurationDefinition ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCacheDurationDefinition
 * @subpackage Arrays
 */
class ArrayOfCacheDurationDefinition extends AbstractStructArrayBase
{
    /**
     * The CacheDurationDefinition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition[]
     */
    public $CacheDurationDefinition;
    /**
     * Constructor method for ArrayOfCacheDurationDefinition
     * @uses ArrayOfCacheDurationDefinition::setCacheDurationDefinition()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition[] $cacheDurationDefinition
     */
    public function __construct(array $cacheDurationDefinition = array())
    {
        $this
            ->setCacheDurationDefinition($cacheDurationDefinition);
    }
    /**
     * Get CacheDurationDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition[]|null
     */
    public function getCacheDurationDefinition()
    {
        return isset($this->CacheDurationDefinition) ? $this->CacheDurationDefinition : null;
    }
    /**
     * Set CacheDurationDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition[] $cacheDurationDefinition
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition
     */
    public function setCacheDurationDefinition(array $cacheDurationDefinition = array())
    {
        foreach ($cacheDurationDefinition as $arrayOfCacheDurationDefinitionCacheDurationDefinitionItem) {
            // validation for constraint: itemType
            if (!$arrayOfCacheDurationDefinitionCacheDurationDefinitionItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition) {
                throw new \InvalidArgumentException(sprintf('The CacheDurationDefinition property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition, "%s" given', is_object($arrayOfCacheDurationDefinitionCacheDurationDefinitionItem) ? get_class($arrayOfCacheDurationDefinitionCacheDurationDefinitionItem) : gettype($arrayOfCacheDurationDefinitionCacheDurationDefinitionItem)), __LINE__);
            }
        }
        if (is_null($cacheDurationDefinition) || (is_array($cacheDurationDefinition) && empty($cacheDurationDefinition))) {
            unset($this->CacheDurationDefinition);
        } else {
            $this->CacheDurationDefinition = $cacheDurationDefinition;
        }
        return $this;
    }
    /**
     * Add item to CacheDurationDefinition value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition
     */
    public function addToCacheDurationDefinition(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition) {
            throw new \InvalidArgumentException(sprintf('The CacheDurationDefinition property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CacheDurationDefinition[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CacheDurationDefinition|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CacheDurationDefinition
     */
    public function getAttributeName()
    {
        return 'CacheDurationDefinition';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCacheDurationDefinition
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
