<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDisplayRequestConnection ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDisplayRequestConnection
 * @subpackage Arrays
 */
class ArrayOfDisplayRequestConnection extends AbstractStructArrayBase
{
    /**
     * The DisplayRequestConnection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection[]
     */
    public $DisplayRequestConnection;
    /**
     * Constructor method for ArrayOfDisplayRequestConnection
     * @uses ArrayOfDisplayRequestConnection::setDisplayRequestConnection()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection[] $displayRequestConnection
     */
    public function __construct(array $displayRequestConnection = array())
    {
        $this
            ->setDisplayRequestConnection($displayRequestConnection);
    }
    /**
     * Get DisplayRequestConnection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection[]|null
     */
    public function getDisplayRequestConnection()
    {
        return isset($this->DisplayRequestConnection) ? $this->DisplayRequestConnection : null;
    }
    /**
     * Set DisplayRequestConnection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection[] $displayRequestConnection
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection
     */
    public function setDisplayRequestConnection(array $displayRequestConnection = array())
    {
        foreach ($displayRequestConnection as $arrayOfDisplayRequestConnectionDisplayRequestConnectionItem) {
            // validation for constraint: itemType
            if (!$arrayOfDisplayRequestConnectionDisplayRequestConnectionItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection) {
                throw new \InvalidArgumentException(sprintf('The DisplayRequestConnection property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection, "%s" given', is_object($arrayOfDisplayRequestConnectionDisplayRequestConnectionItem) ? get_class($arrayOfDisplayRequestConnectionDisplayRequestConnectionItem) : gettype($arrayOfDisplayRequestConnectionDisplayRequestConnectionItem)), __LINE__);
            }
        }
        if (is_null($displayRequestConnection) || (is_array($displayRequestConnection) && empty($displayRequestConnection))) {
            unset($this->DisplayRequestConnection);
        } else {
            $this->DisplayRequestConnection = $displayRequestConnection;
        }
        return $this;
    }
    /**
     * Add item to DisplayRequestConnection value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection
     */
    public function addToDisplayRequestConnection(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection) {
            throw new \InvalidArgumentException(sprintf('The DisplayRequestConnection property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DisplayRequestConnection[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestConnection|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DisplayRequestConnection
     */
    public function getAttributeName()
    {
        return 'DisplayRequestConnection';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayRequestConnection
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
