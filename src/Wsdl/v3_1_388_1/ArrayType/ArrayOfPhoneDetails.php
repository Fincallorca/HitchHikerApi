<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneDetails ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPhoneDetails
 * @subpackage Arrays
 */
class ArrayOfPhoneDetails extends AbstractStructArrayBase
{
    /**
     * The PhoneDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails[]
     */
    public $PhoneDetails;
    /**
     * Constructor method for ArrayOfPhoneDetails
     * @uses ArrayOfPhoneDetails::setPhoneDetails()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails[] $phoneDetails
     */
    public function __construct(array $phoneDetails = array())
    {
        $this
            ->setPhoneDetails($phoneDetails);
    }
    /**
     * Get PhoneDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails[]|null
     */
    public function getPhoneDetails()
    {
        return isset($this->PhoneDetails) ? $this->PhoneDetails : null;
    }
    /**
     * Set PhoneDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails[] $phoneDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails
     */
    public function setPhoneDetails(array $phoneDetails = array())
    {
        foreach ($phoneDetails as $arrayOfPhoneDetailsPhoneDetailsItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneDetailsPhoneDetailsItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails) {
                throw new \InvalidArgumentException(sprintf('The PhoneDetails property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails, "%s" given', is_object($arrayOfPhoneDetailsPhoneDetailsItem) ? get_class($arrayOfPhoneDetailsPhoneDetailsItem) : gettype($arrayOfPhoneDetailsPhoneDetailsItem)), __LINE__);
            }
        }
        if (is_null($phoneDetails) || (is_array($phoneDetails) && empty($phoneDetails))) {
            unset($this->PhoneDetails);
        } else {
            $this->PhoneDetails = $phoneDetails;
        }
        return $this;
    }
    /**
     * Add item to PhoneDetails value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails
     */
    public function addToPhoneDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails) {
            throw new \InvalidArgumentException(sprintf('The PhoneDetails property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhoneDetails[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PhoneDetails|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneDetails
     */
    public function getAttributeName()
    {
        return 'PhoneDetails';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPhoneDetails
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
