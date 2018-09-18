<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestCharter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestCharter
 * @subpackage Structs
 */
class DisplayRequestCharter extends AbstractStructBase
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
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CharterLanguageCode;
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
     * Constructor method for DisplayRequestCharter
     * @uses DisplayRequestCharter::setAccounts()
     * @uses DisplayRequestCharter::setCharterLanguageCode()
     * @uses DisplayRequestCharter::setNumberOfCharterFares()
     * @uses DisplayRequestCharter::setTouroperators()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts
     * @param string $charterLanguageCode
     * @param int $numberOfCharterFares
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts = null, $charterLanguageCode = null, $numberOfCharterFares = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTouroperator $touroperators = null)
    {
        $this
            ->setAccounts($accounts)
            ->setCharterLanguageCode($charterLanguageCode)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter
     */
    public function setAccounts(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCharterAccount $accounts = null)
    {
        $this->Accounts = $accounts;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestCharter
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
