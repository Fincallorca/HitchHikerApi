<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRequestCharter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareRequestCharter
 * @subpackage Structs
 */
class FareRequestCharter extends AbstractStructBase
{
    /**
     * The Accounts
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount
     */
    public $Accounts;
    /**
     * The CharterLanguageCode
     * Meta informations extracted from the WSDL
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
     * The NumberOfCharterFares
     * @var int
     */
    public $NumberOfCharterFares;
    /**
     * The Touroperators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator
     */
    public $Touroperators;
    /**
     * Constructor method for FareRequestCharter
     * @uses FareRequestCharter::setAccounts()
     * @uses FareRequestCharter::setCharterLanguageCode()
     * @uses FareRequestCharter::setConcurrentAvailabilities()
     * @uses FareRequestCharter::setMaximumAvailabilities()
     * @uses FareRequestCharter::setNumberOfAvailableFares()
     * @uses FareRequestCharter::setNumberOfCharterFares()
     * @uses FareRequestCharter::setTouroperators()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts
     * @param string $charterLanguageCode
     * @param int $concurrentAvailabilities
     * @param int $maximumAvailabilities
     * @param int $numberOfAvailableFares
     * @param int $numberOfCharterFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts = null, $charterLanguageCode = null, $concurrentAvailabilities = null, $maximumAvailabilities = null, $numberOfAvailableFares = null, $numberOfCharterFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators = null)
    {
        $this
            ->setAccounts($accounts)
            ->setCharterLanguageCode($charterLanguageCode)
            ->setConcurrentAvailabilities($concurrentAvailabilities)
            ->setMaximumAvailabilities($maximumAvailabilities)
            ->setNumberOfAvailableFares($numberOfAvailableFares)
            ->setNumberOfCharterFares($numberOfCharterFares)
            ->setTouroperators($touroperators);
    }
    /**
     * Get Accounts value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount|null
     */
    public function getAccounts()
    {
        return $this->Accounts;
    }
    /**
     * Set Accounts value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
     */
    public function setAccounts(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts = null)
    {
        $this->Accounts = $accounts;
        return $this;
    }
    /**
     * Get CharterLanguageCode value
     * @return string|null
     */
    public function getCharterLanguageCode()
    {
        return $this->CharterLanguageCode;
    }
    /**
     * Set CharterLanguageCode value
     * @param string $charterLanguageCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
     */
    public function setCharterLanguageCode($charterLanguageCode = null)
    {
        // validation for constraint: string
        if (!is_null($charterLanguageCode) && !is_string($charterLanguageCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($charterLanguageCode)), __LINE__);
        }
        $this->CharterLanguageCode = $charterLanguageCode;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
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
     * Get NumberOfCharterFares value
     * @return int|null
     */
    public function getNumberOfCharterFares()
    {
        return $this->NumberOfCharterFares;
    }
    /**
     * Set NumberOfCharterFares value
     * @param int $numberOfCharterFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
     */
    public function setNumberOfCharterFares($numberOfCharterFares = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfCharterFares) && !is_numeric($numberOfCharterFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfCharterFares)), __LINE__);
        }
        $this->NumberOfCharterFares = $numberOfCharterFares;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareRequestCharter
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
