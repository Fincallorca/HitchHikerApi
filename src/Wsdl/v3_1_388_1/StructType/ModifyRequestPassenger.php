<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRequestPassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyRequestPassenger
 * @subpackage Structs
 */
class ModifyRequestPassenger extends AbstractStructBase
{
    /**
     * The APISInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAPISDetails
     */
    public $APISInformation;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DateOfBirth;
    /**
     * The FOID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification
     */
    public $FOID;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The FrequentFlyer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF
     */
    public $FrequentFlyer;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The OSI
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI
     */
    public $OSI;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerType;
    /**
     * The SSR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR
     */
    public $SSR;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for ModifyRequestPassenger
     * @uses ModifyRequestPassenger::setAPISInformation()
     * @uses ModifyRequestPassenger::setDateOfBirth()
     * @uses ModifyRequestPassenger::setFOID()
     * @uses ModifyRequestPassenger::setFirstName()
     * @uses ModifyRequestPassenger::setFrequentFlyer()
     * @uses ModifyRequestPassenger::setName()
     * @uses ModifyRequestPassenger::setOSI()
     * @uses ModifyRequestPassenger::setPassengerType()
     * @uses ModifyRequestPassenger::setSSR()
     * @uses ModifyRequestPassenger::setTitle()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAPISDetails $aPISInformation
     * @param string $dateOfBirth
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID
     * @param string $firstName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF $frequentFlyer
     * @param string $name
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI $oSI
     * @param string $passengerType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR $sSR
     * @param string $title
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAPISDetails $aPISInformation = null, $dateOfBirth = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID = null, $firstName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF $frequentFlyer = null, $name = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI $oSI = null, $passengerType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR $sSR = null, $title = null)
    {
        $this
            ->setAPISInformation($aPISInformation)
            ->setDateOfBirth($dateOfBirth)
            ->setFOID($fOID)
            ->setFirstName($firstName)
            ->setFrequentFlyer($frequentFlyer)
            ->setName($name)
            ->setOSI($oSI)
            ->setPassengerType($passengerType)
            ->setSSR($sSR)
            ->setTitle($title);
    }
    /**
     * Get APISInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAPISDetails|null
     */
    public function getAPISInformation()
    {
        return isset($this->APISInformation) ? $this->APISInformation : null;
    }
    /**
     * Set APISInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAPISDetails $aPISInformation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setAPISInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfAPISDetails $aPISInformation = null)
    {
        if (is_null($aPISInformation) || (is_array($aPISInformation) && empty($aPISInformation))) {
            unset($this->APISInformation);
        } else {
            $this->APISInformation = $aPISInformation;
        }
        return $this;
    }
    /**
     * Get DateOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return isset($this->DateOfBirth) ? $this->DateOfBirth : null;
    }
    /**
     * Set DateOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateOfBirth
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        if (is_null($dateOfBirth) || (is_array($dateOfBirth) && empty($dateOfBirth))) {
            unset($this->DateOfBirth);
        } else {
            $this->DateOfBirth = $dateOfBirth;
        }
        return $this;
    }
    /**
     * Get FOID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification|null
     */
    public function getFOID()
    {
        return isset($this->FOID) ? $this->FOID : null;
    }
    /**
     * Set FOID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setFOID(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FormOfIdentification $fOID = null)
    {
        if (is_null($fOID) || (is_array($fOID) && empty($fOID))) {
            unset($this->FOID);
        } else {
            $this->FOID = $fOID;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
        return $this;
    }
    /**
     * Get FrequentFlyer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF|null
     */
    public function getFrequentFlyer()
    {
        return isset($this->FrequentFlyer) ? $this->FrequentFlyer : null;
    }
    /**
     * Set FrequentFlyer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF $frequentFlyer
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setFrequentFlyer(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestFF $frequentFlyer = null)
    {
        if (is_null($frequentFlyer) || (is_array($frequentFlyer) && empty($frequentFlyer))) {
            unset($this->FrequentFlyer);
        } else {
            $this->FrequentFlyer = $frequentFlyer;
        }
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get OSI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI|null
     */
    public function getOSI()
    {
        return isset($this->OSI) ? $this->OSI : null;
    }
    /**
     * Set OSI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI $oSI
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setOSI(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestOSI $oSI = null)
    {
        if (is_null($oSI) || (is_array($oSI) && empty($oSI))) {
            unset($this->OSI);
        } else {
            $this->OSI = $oSI;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get SSR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR|null
     */
    public function getSSR()
    {
        return isset($this->SSR) ? $this->SSR : null;
    }
    /**
     * Set SSR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR $sSR
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setSSR(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSSR $sSR = null)
    {
        if (is_null($sSR) || (is_array($sSR) && empty($sSR))) {
            unset($this->SSR);
        } else {
            $this->SSR = $sSR;
        }
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestPassenger
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
