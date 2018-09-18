<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareRequestConnection ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareRequestConnection
 * @subpackage Arrays
 */
class ArrayOfFareRequestConnection extends AbstractStructArrayBase
{
    /**
     * The FareRequestConnection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection[]
     */
    public $FareRequestConnection;
    /**
     * Constructor method for ArrayOfFareRequestConnection
     * @uses ArrayOfFareRequestConnection::setFareRequestConnection()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection[] $fareRequestConnection
     */
    public function __construct(array $fareRequestConnection = array())
    {
        $this
            ->setFareRequestConnection($fareRequestConnection);
    }
    /**
     * Get FareRequestConnection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection[]|null
     */
    public function getFareRequestConnection()
    {
        return isset($this->FareRequestConnection) ? $this->FareRequestConnection : null;
    }
    /**
     * Set FareRequestConnection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection[] $fareRequestConnection
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection
     */
    public function setFareRequestConnection(array $fareRequestConnection = array())
    {
        foreach ($fareRequestConnection as $arrayOfFareRequestConnectionFareRequestConnectionItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareRequestConnectionFareRequestConnectionItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection) {
                throw new \InvalidArgumentException(sprintf('The FareRequestConnection property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection, "%s" given', is_object($arrayOfFareRequestConnectionFareRequestConnectionItem) ? get_class($arrayOfFareRequestConnectionFareRequestConnectionItem) : gettype($arrayOfFareRequestConnectionFareRequestConnectionItem)), __LINE__);
            }
        }
        if (is_null($fareRequestConnection) || (is_array($fareRequestConnection) && empty($fareRequestConnection))) {
            unset($this->FareRequestConnection);
        } else {
            $this->FareRequestConnection = $fareRequestConnection;
        }
        return $this;
    }
    /**
     * Add item to FareRequestConnection value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection
     */
    public function addToFareRequestConnection(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection) {
            throw new \InvalidArgumentException(sprintf('The FareRequestConnection property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareRequestConnection[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestConnection|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareRequestConnection
     */
    public function getAttributeName()
    {
        return 'FareRequestConnection';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestConnection
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
