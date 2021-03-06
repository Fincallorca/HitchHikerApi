<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRaisedException ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRaisedException
 * @subpackage Arrays
 */
class ArrayOfRaisedException extends AbstractStructArrayBase
{
    /**
     * The RaisedException
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException[]
     */
    public $RaisedException;
    /**
     * Constructor method for ArrayOfRaisedException
     * @uses ArrayOfRaisedException::setRaisedException()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException[] $raisedException
     */
    public function __construct(array $raisedException = array())
    {
        $this
            ->setRaisedException($raisedException);
    }
    /**
     * Get RaisedException value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException[]|null
     */
    public function getRaisedException()
    {
        return isset($this->RaisedException) ? $this->RaisedException : null;
    }
    /**
     * Set RaisedException value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException[] $raisedException
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException
     */
    public function setRaisedException(array $raisedException = array())
    {
        foreach ($raisedException as $arrayOfRaisedExceptionRaisedExceptionItem) {
            // validation for constraint: itemType
            if (!$arrayOfRaisedExceptionRaisedExceptionItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException) {
                throw new \InvalidArgumentException(sprintf('The RaisedException property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException, "%s" given', is_object($arrayOfRaisedExceptionRaisedExceptionItem) ? get_class($arrayOfRaisedExceptionRaisedExceptionItem) : gettype($arrayOfRaisedExceptionRaisedExceptionItem)), __LINE__);
            }
        }
        if (is_null($raisedException) || (is_array($raisedException) && empty($raisedException))) {
            unset($this->RaisedException);
        } else {
            $this->RaisedException = $raisedException;
        }
        return $this;
    }
    /**
     * Add item to RaisedException value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException
     */
    public function addToRaisedException(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException) {
            throw new \InvalidArgumentException(sprintf('The RaisedException property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RaisedException[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RaisedException|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RaisedException
     */
    public function getAttributeName()
    {
        return 'RaisedException';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRaisedException
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
