<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFareResponseConnection ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFareResponseConnection
 * @subpackage Arrays
 */
class ArrayOfFareResponseConnection extends AbstractStructArrayBase
{
    /**
     * The FareResponseConnection
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection[]
     */
    public $FareResponseConnection;
    /**
     * Constructor method for ArrayOfFareResponseConnection
     * @uses ArrayOfFareResponseConnection::setFareResponseConnection()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection[] $fareResponseConnection
     */
    public function __construct(array $fareResponseConnection = array())
    {
        $this
            ->setFareResponseConnection($fareResponseConnection);
    }
    /**
     * Get FareResponseConnection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection[]|null
     */
    public function getFareResponseConnection()
    {
        return isset($this->FareResponseConnection) ? $this->FareResponseConnection : null;
    }
    /**
     * Set FareResponseConnection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection[] $fareResponseConnection
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection
     */
    public function setFareResponseConnection(array $fareResponseConnection = array())
    {
        foreach ($fareResponseConnection as $arrayOfFareResponseConnectionFareResponseConnectionItem) {
            // validation for constraint: itemType
            if (!$arrayOfFareResponseConnectionFareResponseConnectionItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection) {
                throw new \InvalidArgumentException(sprintf('The FareResponseConnection property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection, "%s" given', is_object($arrayOfFareResponseConnectionFareResponseConnectionItem) ? get_class($arrayOfFareResponseConnectionFareResponseConnectionItem) : gettype($arrayOfFareResponseConnectionFareResponseConnectionItem)), __LINE__);
            }
        }
        if (is_null($fareResponseConnection) || (is_array($fareResponseConnection) && empty($fareResponseConnection))) {
            unset($this->FareResponseConnection);
        } else {
            $this->FareResponseConnection = $fareResponseConnection;
        }
        return $this;
    }
    /**
     * Add item to FareResponseConnection value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection
     */
    public function addToFareResponseConnection(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection) {
            throw new \InvalidArgumentException(sprintf('The FareResponseConnection property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareResponseConnection[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseConnection|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FareResponseConnection
     */
    public function getAttributeName()
    {
        return 'FareResponseConnection';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareResponseConnection
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
