<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestCharterData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RequestCharterData
 * @subpackage Structs
 */
class RequestCharterData extends AbstractStructBase
{
    /**
     * The Accounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount
     */
    public $Accounts;
    /**
     * The CharterLanguageCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CharterLanguageCode;
    /**
     * The ConcurrentAvailabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ConcurrentAvailabilities;
    /**
     * The MaximumAvailabilities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumAvailabilities;
    /**
     * The NumberOfAvailableFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfAvailableFares;
    /**
     * The NumberOfFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfFares;
    /**
     * The Touroperators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator
     */
    public $Touroperators;
    /**
     * Constructor method for RequestCharterData
     * @uses RequestCharterData::setAccounts()
     * @uses RequestCharterData::setCharterLanguageCode()
     * @uses RequestCharterData::setConcurrentAvailabilities()
     * @uses RequestCharterData::setMaximumAvailabilities()
     * @uses RequestCharterData::setNumberOfAvailableFares()
     * @uses RequestCharterData::setNumberOfFares()
     * @uses RequestCharterData::setTouroperators()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts
     * @param string $charterLanguageCode
     * @param int $concurrentAvailabilities
     * @param int $maximumAvailabilities
     * @param int $numberOfAvailableFares
     * @param int $numberOfFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts = null, $charterLanguageCode = null, $concurrentAvailabilities = null, $maximumAvailabilities = null, $numberOfAvailableFares = null, $numberOfFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators = null)
    {
        $this
            ->setAccounts($accounts)
            ->setCharterLanguageCode($charterLanguageCode)
            ->setConcurrentAvailabilities($concurrentAvailabilities)
            ->setMaximumAvailabilities($maximumAvailabilities)
            ->setNumberOfAvailableFares($numberOfAvailableFares)
            ->setNumberOfFares($numberOfFares)
            ->setTouroperators($touroperators);
    }
    /**
     * Get Accounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount|null
     */
    public function getAccounts()
    {
        return isset($this->Accounts) ? $this->Accounts : null;
    }
    /**
     * Set Accounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public function setAccounts(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts = null)
    {
        if (is_null($accounts) || (is_array($accounts) && empty($accounts))) {
            unset($this->Accounts);
        } else {
            $this->Accounts = $accounts;
        }
        return $this;
    }
    /**
     * Get CharterLanguageCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCharterLanguageCode()
    {
        return isset($this->CharterLanguageCode) ? $this->CharterLanguageCode : null;
    }
    /**
     * Set CharterLanguageCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $charterLanguageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public function setCharterLanguageCode($charterLanguageCode = null)
    {
        // validation for constraint: string
        if (!is_null($charterLanguageCode) && !is_string($charterLanguageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charterLanguageCode)), __LINE__);
        }
        if (is_null($charterLanguageCode) || (is_array($charterLanguageCode) && empty($charterLanguageCode))) {
            unset($this->CharterLanguageCode);
        } else {
            $this->CharterLanguageCode = $charterLanguageCode;
        }
        return $this;
    }
    /**
     * Get ConcurrentAvailabilities value
     * @return int|null
     */
    public function getConcurrentAvailabilities()
    {
        return $this->ConcurrentAvailabilities;
    }
    /**
     * Set ConcurrentAvailabilities value
     * @param int $concurrentAvailabilities
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public function setConcurrentAvailabilities($concurrentAvailabilities = null)
    {
        // validation for constraint: int
        if (!is_null($concurrentAvailabilities) && !is_numeric($concurrentAvailabilities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($concurrentAvailabilities)), __LINE__);
        }
        $this->ConcurrentAvailabilities = $concurrentAvailabilities;
        return $this;
    }
    /**
     * Get MaximumAvailabilities value
     * @return int|null
     */
    public function getMaximumAvailabilities()
    {
        return $this->MaximumAvailabilities;
    }
    /**
     * Set MaximumAvailabilities value
     * @param int $maximumAvailabilities
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public function setMaximumAvailabilities($maximumAvailabilities = null)
    {
        // validation for constraint: int
        if (!is_null($maximumAvailabilities) && !is_numeric($maximumAvailabilities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumAvailabilities)), __LINE__);
        }
        $this->MaximumAvailabilities = $maximumAvailabilities;
        return $this;
    }
    /**
     * Get NumberOfAvailableFares value
     * @return int|null
     */
    public function getNumberOfAvailableFares()
    {
        return $this->NumberOfAvailableFares;
    }
    /**
     * Set NumberOfAvailableFares value
     * @param int $numberOfAvailableFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public function setNumberOfAvailableFares($numberOfAvailableFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfAvailableFares) && !is_numeric($numberOfAvailableFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfAvailableFares)), __LINE__);
        }
        $this->NumberOfAvailableFares = $numberOfAvailableFares;
        return $this;
    }
    /**
     * Get NumberOfFares value
     * @return int|null
     */
    public function getNumberOfFares()
    {
        return $this->NumberOfFares;
    }
    /**
     * Set NumberOfFares value
     * @param int $numberOfFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public function setNumberOfFares($numberOfFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFares) && !is_numeric($numberOfFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFares)), __LINE__);
        }
        $this->NumberOfFares = $numberOfFares;
        return $this;
    }
    /**
     * Get Touroperators value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator|null
     */
    public function getTouroperators()
    {
        return isset($this->Touroperators) ? $this->Touroperators : null;
    }
    /**
     * Set Touroperators value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
     */
    public function setTouroperators(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators = null)
    {
        if (is_null($touroperators) || (is_array($touroperators) && empty($touroperators))) {
            unset($this->Touroperators);
        } else {
            $this->Touroperators = $touroperators;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RequestCharterData
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
