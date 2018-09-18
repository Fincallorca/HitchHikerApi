<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProcessResponseStatus ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfProcessResponseStatus
 * @subpackage Arrays
 */
class ArrayOfProcessResponseStatus extends AbstractStructArrayBase
{
    /**
     * The ProcessResponseStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus[]
     */
    public $ProcessResponseStatus;
    /**
     * Constructor method for ArrayOfProcessResponseStatus
     * @uses ArrayOfProcessResponseStatus::setProcessResponseStatus()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus[] $processResponseStatus
     */
    public function __construct(array $processResponseStatus = array())
    {
        $this
            ->setProcessResponseStatus($processResponseStatus);
    }
    /**
     * Get ProcessResponseStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus[]|null
     */
    public function getProcessResponseStatus()
    {
        return isset($this->ProcessResponseStatus) ? $this->ProcessResponseStatus : null;
    }
    /**
     * Set ProcessResponseStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus[] $processResponseStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessResponseStatus
     */
    public function setProcessResponseStatus(array $processResponseStatus = array())
    {
        foreach ($processResponseStatus as $arrayOfProcessResponseStatusProcessResponseStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfProcessResponseStatusProcessResponseStatusItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus) {
                throw new \InvalidArgumentException(sprintf('The ProcessResponseStatus property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus, "%s" given', is_object($arrayOfProcessResponseStatusProcessResponseStatusItem) ? get_class($arrayOfProcessResponseStatusProcessResponseStatusItem) : gettype($arrayOfProcessResponseStatusProcessResponseStatusItem)), __LINE__);
            }
        }
        if (is_null($processResponseStatus) || (is_array($processResponseStatus) && empty($processResponseStatus))) {
            unset($this->ProcessResponseStatus);
        } else {
            $this->ProcessResponseStatus = $processResponseStatus;
        }
        return $this;
    }
    /**
     * Add item to ProcessResponseStatus value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessResponseStatus
     */
    public function addToProcessResponseStatus(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus) {
            throw new \InvalidArgumentException(sprintf('The ProcessResponseStatus property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProcessResponseStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ProcessResponseStatus
     */
    public function getAttributeName()
    {
        return 'ProcessResponseStatus';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessResponseStatus
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
