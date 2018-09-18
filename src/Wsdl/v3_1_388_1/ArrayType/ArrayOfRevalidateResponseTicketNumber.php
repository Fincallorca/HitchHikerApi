<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRevalidateResponseTicketNumber ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRevalidateResponseTicketNumber
 * @subpackage Arrays
 */
class ArrayOfRevalidateResponseTicketNumber extends AbstractStructArrayBase
{
    /**
     * The RevalidateResponseTicketNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber[]
     */
    public $RevalidateResponseTicketNumber;
    /**
     * Constructor method for ArrayOfRevalidateResponseTicketNumber
     * @uses ArrayOfRevalidateResponseTicketNumber::setRevalidateResponseTicketNumber()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber[] $revalidateResponseTicketNumber
     */
    public function __construct(array $revalidateResponseTicketNumber = array())
    {
        $this
            ->setRevalidateResponseTicketNumber($revalidateResponseTicketNumber);
    }
    /**
     * Get RevalidateResponseTicketNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber[]|null
     */
    public function getRevalidateResponseTicketNumber()
    {
        return isset($this->RevalidateResponseTicketNumber) ? $this->RevalidateResponseTicketNumber : null;
    }
    /**
     * Set RevalidateResponseTicketNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber[] $revalidateResponseTicketNumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRevalidateResponseTicketNumber
     */
    public function setRevalidateResponseTicketNumber(array $revalidateResponseTicketNumber = array())
    {
        foreach ($revalidateResponseTicketNumber as $arrayOfRevalidateResponseTicketNumberRevalidateResponseTicketNumberItem) {
            // validation for constraint: itemType
            if (!$arrayOfRevalidateResponseTicketNumberRevalidateResponseTicketNumberItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber) {
                throw new \InvalidArgumentException(sprintf('The RevalidateResponseTicketNumber property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber, "%s" given', is_object($arrayOfRevalidateResponseTicketNumberRevalidateResponseTicketNumberItem) ? get_class($arrayOfRevalidateResponseTicketNumberRevalidateResponseTicketNumberItem) : gettype($arrayOfRevalidateResponseTicketNumberRevalidateResponseTicketNumberItem)), __LINE__);
            }
        }
        if (is_null($revalidateResponseTicketNumber) || (is_array($revalidateResponseTicketNumber) && empty($revalidateResponseTicketNumber))) {
            unset($this->RevalidateResponseTicketNumber);
        } else {
            $this->RevalidateResponseTicketNumber = $revalidateResponseTicketNumber;
        }
        return $this;
    }
    /**
     * Add item to RevalidateResponseTicketNumber value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRevalidateResponseTicketNumber
     */
    public function addToRevalidateResponseTicketNumber(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber) {
            throw new \InvalidArgumentException(sprintf('The RevalidateResponseTicketNumber property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RevalidateResponseTicketNumber[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateResponseTicketNumber|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RevalidateResponseTicketNumber
     */
    public function getAttributeName()
    {
        return 'RevalidateResponseTicketNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRevalidateResponseTicketNumber
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
