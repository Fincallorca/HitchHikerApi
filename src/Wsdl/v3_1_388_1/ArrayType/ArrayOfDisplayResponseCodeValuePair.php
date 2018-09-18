<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayResponseCodeValuePair ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayResponseCodeValuePair
 * @subpackage Arrays
 */
class ArrayOfDisplayResponseCodeValuePair extends AbstractStructArrayBase
{
    /**
     * The DisplayResponseCodeValuePair
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair[]
     */
    public $DisplayResponseCodeValuePair;
    /**
     * Constructor method for ArrayOfDisplayResponseCodeValuePair
     * @uses ArrayOfDisplayResponseCodeValuePair::setDisplayResponseCodeValuePair()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair[] $displayResponseCodeValuePair
     */
    public function __construct(array $displayResponseCodeValuePair = array())
    {
        $this
            ->setDisplayResponseCodeValuePair($displayResponseCodeValuePair);
    }
    /**
     * Get DisplayResponseCodeValuePair value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair[]|null
     */
    public function getDisplayResponseCodeValuePair()
    {
        return isset($this->DisplayResponseCodeValuePair) ? $this->DisplayResponseCodeValuePair : null;
    }
    /**
     * Set DisplayResponseCodeValuePair value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair[] $displayResponseCodeValuePair
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair
     */
    public function setDisplayResponseCodeValuePair(array $displayResponseCodeValuePair = array())
    {
        foreach ($displayResponseCodeValuePair as $arrayOfDisplayResponseCodeValuePairDisplayResponseCodeValuePairItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayResponseCodeValuePairDisplayResponseCodeValuePairItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair) {
                throw new \InvalidArgumentException(sprintf('The DisplayResponseCodeValuePair property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair, "%s" given', is_object($arrayOfDisplayResponseCodeValuePairDisplayResponseCodeValuePairItem) ? get_class($arrayOfDisplayResponseCodeValuePairDisplayResponseCodeValuePairItem) : gettype($arrayOfDisplayResponseCodeValuePairDisplayResponseCodeValuePairItem)), __LINE__);
            }
        }
        if (is_null($displayResponseCodeValuePair) || (is_array($displayResponseCodeValuePair) && empty($displayResponseCodeValuePair))) {
            unset($this->DisplayResponseCodeValuePair);
        } else {
            $this->DisplayResponseCodeValuePair = $displayResponseCodeValuePair;
        }
        return $this;
    }
    /**
     * Add item to DisplayResponseCodeValuePair value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair
     */
    public function addToDisplayResponseCodeValuePair(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair) {
            throw new \InvalidArgumentException(sprintf('The DisplayResponseCodeValuePair property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayResponseCodeValuePair[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayResponseCodeValuePair
     */
    public function getAttributeName()
    {
        return 'DisplayResponseCodeValuePair';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseCodeValuePair
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
