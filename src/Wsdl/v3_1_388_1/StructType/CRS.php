<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CRS StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CRS
 * @subpackage Structs
 */
class CRS extends AbstractStructBase
{
    /**
     * The CRSName
     * @var string
     */
    public $CRSName;
    /**
     * The ReceivedFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReceivedFrom;
    /**
     * The SpecialGDSName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecialGDSName;
    /**
     * The TerminalCountry
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TerminalCountry;
    /**
     * The TerminalPCC
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $TerminalPCC;
    /**
     * The User
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $User;
    /**
     * Constructor method for CRS
     * @uses CRS::setCRSName()
     * @uses CRS::setReceivedFrom()
     * @uses CRS::setSpecialGDSName()
     * @uses CRS::setTerminalCountry()
     * @uses CRS::setTerminalPCC()
     * @uses CRS::setUser()
     * @param string $cRSName
     * @param string $receivedFrom
     * @param string $specialGDSName
     * @param string $terminalCountry
     * @param string $terminalPCC
     * @param string $user
     */
    public function __construct($cRSName = null, $receivedFrom = null, $specialGDSName = null, $terminalCountry = null, $terminalPCC = null, $user = null)
    {
        $this
            ->setCRSName($cRSName)
            ->setReceivedFrom($receivedFrom)
            ->setSpecialGDSName($specialGDSName)
            ->setTerminalCountry($terminalCountry)
            ->setTerminalPCC($terminalPCC)
            ->setUser($user);
    }
    /**
     * Get CRSName value
     * @return string|null
     */
    public function getCRSName()
    {
        return $this->CRSName;
    }
    /**
     * Set CRSName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cRSName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public function setCRSName($cRSName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::valueIsValid($cRSName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cRSName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\GDSEnum::getValidValues())), __LINE__);
        }
        $this->CRSName = $cRSName;
        return $this;
    }
    /**
     * Get ReceivedFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReceivedFrom()
    {
        return isset($this->ReceivedFrom) ? $this->ReceivedFrom : null;
    }
    /**
     * Set ReceivedFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $receivedFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public function setReceivedFrom($receivedFrom = null)
    {
        // validation for constraint: string
        if (!is_null($receivedFrom) && !is_string($receivedFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivedFrom)), __LINE__);
        }
        if (is_null($receivedFrom) || (is_array($receivedFrom) && empty($receivedFrom))) {
            unset($this->ReceivedFrom);
        } else {
            $this->ReceivedFrom = $receivedFrom;
        }
        return $this;
    }
    /**
     * Get SpecialGDSName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecialGDSName()
    {
        return isset($this->SpecialGDSName) ? $this->SpecialGDSName : null;
    }
    /**
     * Set SpecialGDSName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specialGDSName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public function setSpecialGDSName($specialGDSName = null)
    {
        // validation for constraint: string
        if (!is_null($specialGDSName) && !is_string($specialGDSName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specialGDSName)), __LINE__);
        }
        if (is_null($specialGDSName) || (is_array($specialGDSName) && empty($specialGDSName))) {
            unset($this->SpecialGDSName);
        } else {
            $this->SpecialGDSName = $specialGDSName;
        }
        return $this;
    }
    /**
     * Get TerminalCountry value
     * @return string|null
     */
    public function getTerminalCountry()
    {
        return $this->TerminalCountry;
    }
    /**
     * Set TerminalCountry value
     * @param string $terminalCountry
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public function setTerminalCountry($terminalCountry = null)
    {
        // validation for constraint: string
        if (!is_null($terminalCountry) && !is_string($terminalCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalCountry)), __LINE__);
        }
        $this->TerminalCountry = $terminalCountry;
        return $this;
    }
    /**
     * Get TerminalPCC value
     * @return string|null
     */
    public function getTerminalPCC()
    {
        return $this->TerminalPCC;
    }
    /**
     * Set TerminalPCC value
     * @param string $terminalPCC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public function setTerminalPCC($terminalPCC = null)
    {
        // validation for constraint: string
        if (!is_null($terminalPCC) && !is_string($terminalPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalPCC)), __LINE__);
        }
        $this->TerminalPCC = $terminalPCC;
        return $this;
    }
    /**
     * Get User value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUser()
    {
        return isset($this->User) ? $this->User : null;
    }
    /**
     * Set User value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $user
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($user)), __LINE__);
        }
        if (is_null($user) || (is_array($user) && empty($user))) {
            unset($this->User);
        } else {
            $this->User = $user;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
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
