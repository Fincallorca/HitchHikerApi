<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BoardingResponseBaggageDetail StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BoardingResponseBaggageDetail
 * @subpackage Structs
 */
class BoardingResponseBaggageDetail extends AbstractStructBase
{
    /**
     * The AllowPriorityBoarding
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowPriorityBoarding;
    /**
     * The BaggageFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $BaggageFee;
    /**
     * The MaxPieceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxPieceWeight;
    /**
     * The NumberOfPieces
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPieces;
    /**
     * The PaySurchargesAtAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PaySurchargesAtAirport;
    /**
     * The PriorityBoardingFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $PriorityBoardingFee;
    /**
     * The TotalMaxWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalMaxWeight;
    /**
     * Constructor method for BoardingResponseBaggageDetail
     * @uses BoardingResponseBaggageDetail::setAllowPriorityBoarding()
     * @uses BoardingResponseBaggageDetail::setBaggageFee()
     * @uses BoardingResponseBaggageDetail::setMaxPieceWeight()
     * @uses BoardingResponseBaggageDetail::setNumberOfPieces()
     * @uses BoardingResponseBaggageDetail::setPaySurchargesAtAirport()
     * @uses BoardingResponseBaggageDetail::setPriorityBoardingFee()
     * @uses BoardingResponseBaggageDetail::setTotalMaxWeight()
     * @param bool $allowPriorityBoarding
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $baggageFee
     * @param int $maxPieceWeight
     * @param int $numberOfPieces
     * @param bool $paySurchargesAtAirport
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $priorityBoardingFee
     * @param int $totalMaxWeight
     */
    public function __construct($allowPriorityBoarding = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $baggageFee = null, $maxPieceWeight = null, $numberOfPieces = null, $paySurchargesAtAirport = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $priorityBoardingFee = null, $totalMaxWeight = null)
    {
        $this
            ->setAllowPriorityBoarding($allowPriorityBoarding)
            ->setBaggageFee($baggageFee)
            ->setMaxPieceWeight($maxPieceWeight)
            ->setNumberOfPieces($numberOfPieces)
            ->setPaySurchargesAtAirport($paySurchargesAtAirport)
            ->setPriorityBoardingFee($priorityBoardingFee)
            ->setTotalMaxWeight($totalMaxWeight);
    }
    /**
     * Get AllowPriorityBoarding value
     * @return bool|null
     */
    public function getAllowPriorityBoarding()
    {
        return $this->AllowPriorityBoarding;
    }
    /**
     * Set AllowPriorityBoarding value
     * @param bool $allowPriorityBoarding
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
     */
    public function setAllowPriorityBoarding($allowPriorityBoarding = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowPriorityBoarding) && !is_bool($allowPriorityBoarding)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowPriorityBoarding)), __LINE__);
        }
        $this->AllowPriorityBoarding = $allowPriorityBoarding;
        return $this;
    }
    /**
     * Get BaggageFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getBaggageFee()
    {
        return isset($this->BaggageFee) ? $this->BaggageFee : null;
    }
    /**
     * Set BaggageFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $baggageFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
     */
    public function setBaggageFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $baggageFee = null)
    {
        if (is_null($baggageFee) || (is_array($baggageFee) && empty($baggageFee))) {
            unset($this->BaggageFee);
        } else {
            $this->BaggageFee = $baggageFee;
        }
        return $this;
    }
    /**
     * Get MaxPieceWeight value
     * @return int|null
     */
    public function getMaxPieceWeight()
    {
        return $this->MaxPieceWeight;
    }
    /**
     * Set MaxPieceWeight value
     * @param int $maxPieceWeight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
     */
    public function setMaxPieceWeight($maxPieceWeight = null)
    {
        // validation for constraint: int
        if (!is_null($maxPieceWeight) && !is_numeric($maxPieceWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxPieceWeight)), __LINE__);
        }
        $this->MaxPieceWeight = $maxPieceWeight;
        return $this;
    }
    /**
     * Get NumberOfPieces value
     * @return int|null
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }
    /**
     * Set NumberOfPieces value
     * @param int $numberOfPieces
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
     */
    public function setNumberOfPieces($numberOfPieces = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPieces) && !is_numeric($numberOfPieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPieces)), __LINE__);
        }
        $this->NumberOfPieces = $numberOfPieces;
        return $this;
    }
    /**
     * Get PaySurchargesAtAirport value
     * @return bool|null
     */
    public function getPaySurchargesAtAirport()
    {
        return $this->PaySurchargesAtAirport;
    }
    /**
     * Set PaySurchargesAtAirport value
     * @param bool $paySurchargesAtAirport
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
     */
    public function setPaySurchargesAtAirport($paySurchargesAtAirport = null)
    {
        // validation for constraint: boolean
        if (!is_null($paySurchargesAtAirport) && !is_bool($paySurchargesAtAirport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($paySurchargesAtAirport)), __LINE__);
        }
        $this->PaySurchargesAtAirport = $paySurchargesAtAirport;
        return $this;
    }
    /**
     * Get PriorityBoardingFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getPriorityBoardingFee()
    {
        return isset($this->PriorityBoardingFee) ? $this->PriorityBoardingFee : null;
    }
    /**
     * Set PriorityBoardingFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $priorityBoardingFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
     */
    public function setPriorityBoardingFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $priorityBoardingFee = null)
    {
        if (is_null($priorityBoardingFee) || (is_array($priorityBoardingFee) && empty($priorityBoardingFee))) {
            unset($this->PriorityBoardingFee);
        } else {
            $this->PriorityBoardingFee = $priorityBoardingFee;
        }
        return $this;
    }
    /**
     * Get TotalMaxWeight value
     * @return int|null
     */
    public function getTotalMaxWeight()
    {
        return $this->TotalMaxWeight;
    }
    /**
     * Set TotalMaxWeight value
     * @param int $totalMaxWeight
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
     */
    public function setTotalMaxWeight($totalMaxWeight = null)
    {
        // validation for constraint: int
        if (!is_null($totalMaxWeight) && !is_numeric($totalMaxWeight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalMaxWeight)), __LINE__);
        }
        $this->TotalMaxWeight = $totalMaxWeight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BoardingResponseBaggageDetail
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
