<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPassengerBoarding ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPassengerBoarding
 * @subpackage Arrays
 */
class ArrayOfPassengerBoarding extends AbstractStructArrayBase
{
    /**
     * The PassengerBoarding
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding[]
     */
    public $PassengerBoarding;
    /**
     * Constructor method for ArrayOfPassengerBoarding
     * @uses ArrayOfPassengerBoarding::setPassengerBoarding()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding[] $passengerBoarding
     */
    public function __construct(array $passengerBoarding = array())
    {
        $this
            ->setPassengerBoarding($passengerBoarding);
    }
    /**
     * Get PassengerBoarding value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding[]|null
     */
    public function getPassengerBoarding()
    {
        return isset($this->PassengerBoarding) ? $this->PassengerBoarding : null;
    }
    /**
     * Set PassengerBoarding value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding[] $passengerBoarding
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding
     */
    public function setPassengerBoarding(array $passengerBoarding = array())
    {
        foreach ($passengerBoarding as $arrayOfPassengerBoardingPassengerBoardingItem) {
            // validation for constraint: itemType
            if (!$arrayOfPassengerBoardingPassengerBoardingItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding) {
                throw new \InvalidArgumentException(sprintf('The PassengerBoarding property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding, "%s" given', is_object($arrayOfPassengerBoardingPassengerBoardingItem) ? get_class($arrayOfPassengerBoardingPassengerBoardingItem) : gettype($arrayOfPassengerBoardingPassengerBoardingItem)), __LINE__);
            }
        }
        if (is_null($passengerBoarding) || (is_array($passengerBoarding) && empty($passengerBoarding))) {
            unset($this->PassengerBoarding);
        } else {
            $this->PassengerBoarding = $passengerBoarding;
        }
        return $this;
    }
    /**
     * Add item to PassengerBoarding value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding
     */
    public function addToPassengerBoarding(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding) {
            throw new \InvalidArgumentException(sprintf('The PassengerBoarding property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassengerBoarding[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PassengerBoarding
     */
    public function getAttributeName()
    {
        return 'PassengerBoarding';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfPassengerBoarding
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
