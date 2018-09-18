<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CRSProfileData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CRSProfileData
 * @subpackage Structs
 */
class CRSProfileData extends AbstractStructBase
{
    /**
     * The CRSName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CRSName;
    /**
     * The EnableBranchAccess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $EnableBranchAccess;
    /**
     * The Macroheader
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Macroheader;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Phone;
    /**
     * The ProfileGuid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProfileGuid;
    /**
     * The ProfileName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProfileName;
    /**
     * The QSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QSurcharge;
    /**
     * The Queues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData
     */
    public $Queues;
    /**
     * The ReceivedFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ReceivedFrom;
    /**
     * The TerminalCountry
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TerminalCountry;
    /**
     * The TerminalPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TerminalPCC;
    /**
     * The TicketPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TicketPCC;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for CRSProfileData
     * @uses CRSProfileData::setCRSName()
     * @uses CRSProfileData::setEnableBranchAccess()
     * @uses CRSProfileData::setMacroheader()
     * @uses CRSProfileData::setPhone()
     * @uses CRSProfileData::setProfileGuid()
     * @uses CRSProfileData::setProfileName()
     * @uses CRSProfileData::setQSurcharge()
     * @uses CRSProfileData::setQueues()
     * @uses CRSProfileData::setReceivedFrom()
     * @uses CRSProfileData::setTerminalCountry()
     * @uses CRSProfileData::setTerminalPCC()
     * @uses CRSProfileData::setTicketPCC()
     * @uses CRSProfileData::setUserName()
     * @param string $cRSName
     * @param bool $enableBranchAccess
     * @param string $macroheader
     * @param string $phone
     * @param string $profileGuid
     * @param string $profileName
     * @param string $qSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData $queues
     * @param string $receivedFrom
     * @param string $terminalCountry
     * @param string $terminalPCC
     * @param string $ticketPCC
     * @param string $userName
     */
    public function __construct($cRSName = null, $enableBranchAccess = null, $macroheader = null, $phone = null, $profileGuid = null, $profileName = null, $qSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData $queues = null, $receivedFrom = null, $terminalCountry = null, $terminalPCC = null, $ticketPCC = null, $userName = null)
    {
        $this
            ->setCRSName($cRSName)
            ->setEnableBranchAccess($enableBranchAccess)
            ->setMacroheader($macroheader)
            ->setPhone($phone)
            ->setProfileGuid($profileGuid)
            ->setProfileName($profileName)
            ->setQSurcharge($qSurcharge)
            ->setQueues($queues)
            ->setReceivedFrom($receivedFrom)
            ->setTerminalCountry($terminalCountry)
            ->setTerminalPCC($terminalPCC)
            ->setTicketPCC($ticketPCC)
            ->setUserName($userName);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
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
     * Get EnableBranchAccess value
     * @return bool|null
     */
    public function getEnableBranchAccess()
    {
        return $this->EnableBranchAccess;
    }
    /**
     * Set EnableBranchAccess value
     * @param bool $enableBranchAccess
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setEnableBranchAccess($enableBranchAccess = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableBranchAccess) && !is_bool($enableBranchAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableBranchAccess)), __LINE__);
        }
        $this->EnableBranchAccess = $enableBranchAccess;
        return $this;
    }
    /**
     * Get Macroheader value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMacroheader()
    {
        return isset($this->Macroheader) ? $this->Macroheader : null;
    }
    /**
     * Set Macroheader value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $macroheader
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setMacroheader($macroheader = null)
    {
        // validation for constraint: string
        if (!is_null($macroheader) && !is_string($macroheader)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($macroheader)), __LINE__);
        }
        if (is_null($macroheader) || (is_array($macroheader) && empty($macroheader))) {
            unset($this->Macroheader);
        } else {
            $this->Macroheader = $macroheader;
        }
        return $this;
    }
    /**
     * Get Phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone()
    {
        return isset($this->Phone) ? $this->Phone : null;
    }
    /**
     * Set Phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->Phone);
        } else {
            $this->Phone = $phone;
        }
        return $this;
    }
    /**
     * Get ProfileGuid value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProfileGuid()
    {
        return isset($this->ProfileGuid) ? $this->ProfileGuid : null;
    }
    /**
     * Set ProfileGuid value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $profileGuid
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setProfileGuid($profileGuid = null)
    {
        // validation for constraint: string
        if (!is_null($profileGuid) && !is_string($profileGuid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileGuid)), __LINE__);
        }
        if (is_null($profileGuid) || (is_array($profileGuid) && empty($profileGuid))) {
            unset($this->ProfileGuid);
        } else {
            $this->ProfileGuid = $profileGuid;
        }
        return $this;
    }
    /**
     * Get ProfileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProfileName()
    {
        return isset($this->ProfileName) ? $this->ProfileName : null;
    }
    /**
     * Set ProfileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $profileName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setProfileName($profileName = null)
    {
        // validation for constraint: string
        if (!is_null($profileName) && !is_string($profileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileName)), __LINE__);
        }
        if (is_null($profileName) || (is_array($profileName) && empty($profileName))) {
            unset($this->ProfileName);
        } else {
            $this->ProfileName = $profileName;
        }
        return $this;
    }
    /**
     * Get QSurcharge value
     * @return string|null
     */
    public function getQSurcharge()
    {
        return $this->QSurcharge;
    }
    /**
     * Set QSurcharge value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QSurchargeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QSurchargeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $qSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setQSurcharge($qSurcharge = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QSurchargeEnum::valueIsValid($qSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $qSurcharge, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QSurchargeEnum::getValidValues())), __LINE__);
        }
        $this->QSurcharge = $qSurcharge;
        return $this;
    }
    /**
     * Get Queues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData|null
     */
    public function getQueues()
    {
        return isset($this->Queues) ? $this->Queues : null;
    }
    /**
     * Set Queues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData $queues
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setQueues(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueueData $queues = null)
    {
        if (is_null($queues) || (is_array($queues) && empty($queues))) {
            unset($this->Queues);
        } else {
            $this->Queues = $queues;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
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
     * Get TerminalCountry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTerminalCountry()
    {
        return isset($this->TerminalCountry) ? $this->TerminalCountry : null;
    }
    /**
     * Set TerminalCountry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $terminalCountry
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setTerminalCountry($terminalCountry = null)
    {
        // validation for constraint: string
        if (!is_null($terminalCountry) && !is_string($terminalCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalCountry)), __LINE__);
        }
        if (is_null($terminalCountry) || (is_array($terminalCountry) && empty($terminalCountry))) {
            unset($this->TerminalCountry);
        } else {
            $this->TerminalCountry = $terminalCountry;
        }
        return $this;
    }
    /**
     * Get TerminalPCC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTerminalPCC()
    {
        return isset($this->TerminalPCC) ? $this->TerminalPCC : null;
    }
    /**
     * Set TerminalPCC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $terminalPCC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setTerminalPCC($terminalPCC = null)
    {
        // validation for constraint: string
        if (!is_null($terminalPCC) && !is_string($terminalPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($terminalPCC)), __LINE__);
        }
        if (is_null($terminalPCC) || (is_array($terminalPCC) && empty($terminalPCC))) {
            unset($this->TerminalPCC);
        } else {
            $this->TerminalPCC = $terminalPCC;
        }
        return $this;
    }
    /**
     * Get TicketPCC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketPCC()
    {
        return isset($this->TicketPCC) ? $this->TicketPCC : null;
    }
    /**
     * Set TicketPCC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketPCC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setTicketPCC($ticketPCC = null)
    {
        // validation for constraint: string
        if (!is_null($ticketPCC) && !is_string($ticketPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketPCC)), __LINE__);
        }
        if (is_null($ticketPCC) || (is_array($ticketPCC) && empty($ticketPCC))) {
            unset($this->TicketPCC);
        } else {
            $this->TicketPCC = $ticketPCC;
        }
        return $this;
    }
    /**
     * Get UserName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName()
    {
        return isset($this->UserName) ? $this->UserName : null;
    }
    /**
     * Set UserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->UserName);
        } else {
            $this->UserName = $userName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRSProfileData
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
