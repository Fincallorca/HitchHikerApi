<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerBoarding StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PassengerBoarding
 * @subpackage Structs
 */
class PassengerBoarding extends AbstractStructBase
{
    /**
     * The BaggagePieces
     * @var int
     */
    public $BaggagePieces;
    /**
     * The BaggageWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BaggageWeight;
    /**
     * The CheckInType
     * @var string
     */
    public $CheckInType;
    /**
     * The FullSizeHandBaggage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FullSizeHandBaggage;
    /**
     * The IsPriorityBoarding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPriorityBoarding;
    /**
     * The LegIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LegIndex;
    /**
     * Constructor method for PassengerBoarding
     * @uses PassengerBoarding::setBaggagePieces()
     * @uses PassengerBoarding::setBaggageWeight()
     * @uses PassengerBoarding::setCheckInType()
     * @uses PassengerBoarding::setFullSizeHandBaggage()
     * @uses PassengerBoarding::setIsPriorityBoarding()
     * @uses PassengerBoarding::setLegIndex()
     * @param int $baggagePieces
     * @param int $baggageWeight
     * @param string $checkInType
     * @param int $fullSizeHandBaggage
     * @param bool $isPriorityBoarding
     * @param string $legIndex
     */
    public function __construct($baggagePieces = null, $baggageWeight = null, $checkInType = null, $fullSizeHandBaggage = null, $isPriorityBoarding = null, $legIndex = null)
    {
        $this
            ->setBaggagePieces($baggagePieces)
            ->setBaggageWeight($baggageWeight)
            ->setCheckInType($checkInType)
            ->setFullSizeHandBaggage($fullSizeHandBaggage)
            ->setIsPriorityBoarding($isPriorityBoarding)
            ->setLegIndex($legIndex);
    }
    /**
     * Get BaggagePieces value
     * @return int|null
     */
    public function getBaggagePieces()
    {
        return $this->BaggagePieces;
    }
    /**
     * Set BaggagePieces value
     * @param int $baggagePieces
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding
     */
    public function setBaggagePieces($baggagePieces = null)
    {
        // validation for constraint: int
        if (!is_null($baggagePieces) && !is_numeric($baggagePieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($baggagePieces)), __LINE__);
        }
        $this->BaggagePieces = $baggagePieces;
        return $this;
    }
    /**
     * Get BaggageWeight value
     * @return int|null
     */
    public function getBaggageWeight()
    {
        return $this->BaggageWeight;
    }
    /**
     * Set BaggageWeight value
     * @param int $baggageWeight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding
     */
    public function setBaggageWeight($baggageWeight = null)
    {
        // validation for constraint: int
        if (!is_null($baggageWeight) && !is_numeric($baggageWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($baggageWeight)), __LINE__);
        }
        $this->BaggageWeight = $baggageWeight;
        return $this;
    }
    /**
     * Get CheckInType value
     * @return string|null
     */
    public function getCheckInType()
    {
        return $this->CheckInType;
    }
    /**
     * Set CheckInType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkInType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding
     */
    public function setCheckInType($checkInType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::valueIsValid($checkInType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkInType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CheckInEnum::getValidValues())), __LINE__);
        }
        $this->CheckInType = $checkInType;
        return $this;
    }
    /**
     * Get FullSizeHandBaggage value
     * @return int|null
     */
    public function getFullSizeHandBaggage()
    {
        return $this->FullSizeHandBaggage;
    }
    /**
     * Set FullSizeHandBaggage value
     * @param int $fullSizeHandBaggage
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding
     */
    public function setFullSizeHandBaggage($fullSizeHandBaggage = null)
    {
        // validation for constraint: int
        if (!is_null($fullSizeHandBaggage) && !is_numeric($fullSizeHandBaggage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fullSizeHandBaggage)), __LINE__);
        }
        $this->FullSizeHandBaggage = $fullSizeHandBaggage;
        return $this;
    }
    /**
     * Get IsPriorityBoarding value
     * @return bool|null
     */
    public function getIsPriorityBoarding()
    {
        return $this->IsPriorityBoarding;
    }
    /**
     * Set IsPriorityBoarding value
     * @param bool $isPriorityBoarding
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding
     */
    public function setIsPriorityBoarding($isPriorityBoarding = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPriorityBoarding) && !is_bool($isPriorityBoarding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPriorityBoarding)), __LINE__);
        }
        $this->IsPriorityBoarding = $isPriorityBoarding;
        return $this;
    }
    /**
     * Get LegIndex value
     * @return string|null
     */
    public function getLegIndex()
    {
        return $this->LegIndex;
    }
    /**
     * Set LegIndex value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $legIndex
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding
     */
    public function setLegIndex($legIndex = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::valueIsValid($legIndex)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $legIndex, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\LegIndexEnum::getValidValues())), __LINE__);
        }
        $this->LegIndex = $legIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PassengerBoarding
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
