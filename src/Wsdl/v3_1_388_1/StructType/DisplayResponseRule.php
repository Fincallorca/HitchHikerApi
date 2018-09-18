<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayResponseRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayResponseRule
 * @subpackage Structs
 */
class DisplayResponseRule extends AbstractStructBase
{
    /**
     * The CancellationAfterTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CancellationAfterTicketing;
    /**
     * The CancellationBeforeTicketing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CancellationBeforeTicketing;
    /**
     * The ChildReductionInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ChildReductionInfo;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair
     */
    public $FareType;
    /**
     * The InfantReductionInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InfantReductionInfo;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCode;
    /**
     * The MaximumAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaximumAge;
    /**
     * The MaximumStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MaximumStay;
    /**
     * The MinimumAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimumAge;
    /**
     * The MinimumStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MinimumStay;
    /**
     * The NoShowFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NoShowFee;
    /**
     * The OpenJaw
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OpenJaw;
    /**
     * The RebookingFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RebookingFee;
    /**
     * The SeasonCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SeasonCode;
    /**
     * The UserInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo
     */
    public $UserInfos;
    /**
     * The ValidFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidFrom;
    /**
     * The ValidUntil
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ValidUntil;
    /**
     * Constructor method for DisplayResponseRule
     * @uses DisplayResponseRule::setCancellationAfterTicketing()
     * @uses DisplayResponseRule::setCancellationBeforeTicketing()
     * @uses DisplayResponseRule::setChildReductionInfo()
     * @uses DisplayResponseRule::setFareType()
     * @uses DisplayResponseRule::setInfantReductionInfo()
     * @uses DisplayResponseRule::setMatchCode()
     * @uses DisplayResponseRule::setMaximumAge()
     * @uses DisplayResponseRule::setMaximumStay()
     * @uses DisplayResponseRule::setMinimumAge()
     * @uses DisplayResponseRule::setMinimumStay()
     * @uses DisplayResponseRule::setNoShowFee()
     * @uses DisplayResponseRule::setOpenJaw()
     * @uses DisplayResponseRule::setRebookingFee()
     * @uses DisplayResponseRule::setSeasonCode()
     * @uses DisplayResponseRule::setUserInfos()
     * @uses DisplayResponseRule::setValidFrom()
     * @uses DisplayResponseRule::setValidUntil()
     * @param string $cancellationAfterTicketing
     * @param string $cancellationBeforeTicketing
     * @param string $childReductionInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $fareType
     * @param string $infantReductionInfo
     * @param string $matchCode
     * @param int $maximumAge
     * @param string $maximumStay
     * @param int $minimumAge
     * @param string $minimumStay
     * @param string $noShowFee
     * @param string $openJaw
     * @param string $rebookingFee
     * @param string $seasonCode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo $userInfos
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct($cancellationAfterTicketing = null, $cancellationBeforeTicketing = null, $childReductionInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $fareType = null, $infantReductionInfo = null, $matchCode = null, $maximumAge = null, $maximumStay = null, $minimumAge = null, $minimumStay = null, $noShowFee = null, $openJaw = null, $rebookingFee = null, $seasonCode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo $userInfos = null, $validFrom = null, $validUntil = null)
    {
        $this
            ->setCancellationAfterTicketing($cancellationAfterTicketing)
            ->setCancellationBeforeTicketing($cancellationBeforeTicketing)
            ->setChildReductionInfo($childReductionInfo)
            ->setFareType($fareType)
            ->setInfantReductionInfo($infantReductionInfo)
            ->setMatchCode($matchCode)
            ->setMaximumAge($maximumAge)
            ->setMaximumStay($maximumStay)
            ->setMinimumAge($minimumAge)
            ->setMinimumStay($minimumStay)
            ->setNoShowFee($noShowFee)
            ->setOpenJaw($openJaw)
            ->setRebookingFee($rebookingFee)
            ->setSeasonCode($seasonCode)
            ->setUserInfos($userInfos)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get CancellationAfterTicketing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCancellationAfterTicketing()
    {
        return isset($this->CancellationAfterTicketing) ? $this->CancellationAfterTicketing : null;
    }
    /**
     * Set CancellationAfterTicketing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cancellationAfterTicketing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setCancellationAfterTicketing($cancellationAfterTicketing = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationAfterTicketing) && !is_string($cancellationAfterTicketing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationAfterTicketing)), __LINE__);
        }
        if (is_null($cancellationAfterTicketing) || (is_array($cancellationAfterTicketing) && empty($cancellationAfterTicketing))) {
            unset($this->CancellationAfterTicketing);
        } else {
            $this->CancellationAfterTicketing = $cancellationAfterTicketing;
        }
        return $this;
    }
    /**
     * Get CancellationBeforeTicketing value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCancellationBeforeTicketing()
    {
        return isset($this->CancellationBeforeTicketing) ? $this->CancellationBeforeTicketing : null;
    }
    /**
     * Set CancellationBeforeTicketing value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cancellationBeforeTicketing
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setCancellationBeforeTicketing($cancellationBeforeTicketing = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationBeforeTicketing) && !is_string($cancellationBeforeTicketing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationBeforeTicketing)), __LINE__);
        }
        if (is_null($cancellationBeforeTicketing) || (is_array($cancellationBeforeTicketing) && empty($cancellationBeforeTicketing))) {
            unset($this->CancellationBeforeTicketing);
        } else {
            $this->CancellationBeforeTicketing = $cancellationBeforeTicketing;
        }
        return $this;
    }
    /**
     * Get ChildReductionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getChildReductionInfo()
    {
        return isset($this->ChildReductionInfo) ? $this->ChildReductionInfo : null;
    }
    /**
     * Set ChildReductionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $childReductionInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setChildReductionInfo($childReductionInfo = null)
    {
        // validation for constraint: string
        if (!is_null($childReductionInfo) && !is_string($childReductionInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($childReductionInfo)), __LINE__);
        }
        if (is_null($childReductionInfo) || (is_array($childReductionInfo) && empty($childReductionInfo))) {
            unset($this->ChildReductionInfo);
        } else {
            $this->ChildReductionInfo = $childReductionInfo;
        }
        return $this;
    }
    /**
     * Get FareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair|null
     */
    public function getFareType()
    {
        return isset($this->FareType) ? $this->FareType : null;
    }
    /**
     * Set FareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setFareType(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseCodeValuePair $fareType = null)
    {
        if (is_null($fareType) || (is_array($fareType) && empty($fareType))) {
            unset($this->FareType);
        } else {
            $this->FareType = $fareType;
        }
        return $this;
    }
    /**
     * Get InfantReductionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInfantReductionInfo()
    {
        return isset($this->InfantReductionInfo) ? $this->InfantReductionInfo : null;
    }
    /**
     * Set InfantReductionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $infantReductionInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setInfantReductionInfo($infantReductionInfo = null)
    {
        // validation for constraint: string
        if (!is_null($infantReductionInfo) && !is_string($infantReductionInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infantReductionInfo)), __LINE__);
        }
        if (is_null($infantReductionInfo) || (is_array($infantReductionInfo) && empty($infantReductionInfo))) {
            unset($this->InfantReductionInfo);
        } else {
            $this->InfantReductionInfo = $infantReductionInfo;
        }
        return $this;
    }
    /**
     * Get MatchCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMatchCode()
    {
        return isset($this->MatchCode) ? $this->MatchCode : null;
    }
    /**
     * Set MatchCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $matchCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setMatchCode($matchCode = null)
    {
        // validation for constraint: string
        if (!is_null($matchCode) && !is_string($matchCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($matchCode)), __LINE__);
        }
        if (is_null($matchCode) || (is_array($matchCode) && empty($matchCode))) {
            unset($this->MatchCode);
        } else {
            $this->MatchCode = $matchCode;
        }
        return $this;
    }
    /**
     * Get MaximumAge value
     * @return int|null
     */
    public function getMaximumAge()
    {
        return $this->MaximumAge;
    }
    /**
     * Set MaximumAge value
     * @param int $maximumAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setMaximumAge($maximumAge = null)
    {
        // validation for constraint: int
        if (!is_null($maximumAge) && !is_numeric($maximumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumAge)), __LINE__);
        }
        $this->MaximumAge = $maximumAge;
        return $this;
    }
    /**
     * Get MaximumStay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMaximumStay()
    {
        return isset($this->MaximumStay) ? $this->MaximumStay : null;
    }
    /**
     * Set MaximumStay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $maximumStay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setMaximumStay($maximumStay = null)
    {
        // validation for constraint: string
        if (!is_null($maximumStay) && !is_string($maximumStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximumStay)), __LINE__);
        }
        if (is_null($maximumStay) || (is_array($maximumStay) && empty($maximumStay))) {
            unset($this->MaximumStay);
        } else {
            $this->MaximumStay = $maximumStay;
        }
        return $this;
    }
    /**
     * Get MinimumAge value
     * @return int|null
     */
    public function getMinimumAge()
    {
        return $this->MinimumAge;
    }
    /**
     * Set MinimumAge value
     * @param int $minimumAge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setMinimumAge($minimumAge = null)
    {
        // validation for constraint: int
        if (!is_null($minimumAge) && !is_numeric($minimumAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimumAge)), __LINE__);
        }
        $this->MinimumAge = $minimumAge;
        return $this;
    }
    /**
     * Get MinimumStay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMinimumStay()
    {
        return isset($this->MinimumStay) ? $this->MinimumStay : null;
    }
    /**
     * Set MinimumStay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $minimumStay
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setMinimumStay($minimumStay = null)
    {
        // validation for constraint: string
        if (!is_null($minimumStay) && !is_string($minimumStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimumStay)), __LINE__);
        }
        if (is_null($minimumStay) || (is_array($minimumStay) && empty($minimumStay))) {
            unset($this->MinimumStay);
        } else {
            $this->MinimumStay = $minimumStay;
        }
        return $this;
    }
    /**
     * Get NoShowFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNoShowFee()
    {
        return isset($this->NoShowFee) ? $this->NoShowFee : null;
    }
    /**
     * Set NoShowFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $noShowFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setNoShowFee($noShowFee = null)
    {
        // validation for constraint: string
        if (!is_null($noShowFee) && !is_string($noShowFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($noShowFee)), __LINE__);
        }
        if (is_null($noShowFee) || (is_array($noShowFee) && empty($noShowFee))) {
            unset($this->NoShowFee);
        } else {
            $this->NoShowFee = $noShowFee;
        }
        return $this;
    }
    /**
     * Get OpenJaw value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOpenJaw()
    {
        return isset($this->OpenJaw) ? $this->OpenJaw : null;
    }
    /**
     * Set OpenJaw value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $openJaw
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setOpenJaw($openJaw = null)
    {
        // validation for constraint: string
        if (!is_null($openJaw) && !is_string($openJaw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openJaw)), __LINE__);
        }
        if (is_null($openJaw) || (is_array($openJaw) && empty($openJaw))) {
            unset($this->OpenJaw);
        } else {
            $this->OpenJaw = $openJaw;
        }
        return $this;
    }
    /**
     * Get RebookingFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRebookingFee()
    {
        return isset($this->RebookingFee) ? $this->RebookingFee : null;
    }
    /**
     * Set RebookingFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $rebookingFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setRebookingFee($rebookingFee = null)
    {
        // validation for constraint: string
        if (!is_null($rebookingFee) && !is_string($rebookingFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rebookingFee)), __LINE__);
        }
        if (is_null($rebookingFee) || (is_array($rebookingFee) && empty($rebookingFee))) {
            unset($this->RebookingFee);
        } else {
            $this->RebookingFee = $rebookingFee;
        }
        return $this;
    }
    /**
     * Get SeasonCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeasonCode()
    {
        return isset($this->SeasonCode) ? $this->SeasonCode : null;
    }
    /**
     * Set SeasonCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $seasonCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setSeasonCode($seasonCode = null)
    {
        // validation for constraint: string
        if (!is_null($seasonCode) && !is_string($seasonCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seasonCode)), __LINE__);
        }
        if (is_null($seasonCode) || (is_array($seasonCode) && empty($seasonCode))) {
            unset($this->SeasonCode);
        } else {
            $this->SeasonCode = $seasonCode;
        }
        return $this;
    }
    /**
     * Get UserInfos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo|null
     */
    public function getUserInfos()
    {
        return isset($this->UserInfos) ? $this->UserInfos : null;
    }
    /**
     * Set UserInfos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo $userInfos
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setUserInfos(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDisplayResponseUserInfo $userInfos = null)
    {
        if (is_null($userInfos) || (is_array($userInfos) && empty($userInfos))) {
            unset($this->UserInfos);
        } else {
            $this->UserInfos = $userInfos;
        }
        return $this;
    }
    /**
     * Get ValidFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidFrom()
    {
        return isset($this->ValidFrom) ? $this->ValidFrom : null;
    }
    /**
     * Set ValidFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validFrom
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setValidFrom($validFrom = null)
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validFrom)), __LINE__);
        }
        if (is_null($validFrom) || (is_array($validFrom) && empty($validFrom))) {
            unset($this->ValidFrom);
        } else {
            $this->ValidFrom = $validFrom;
        }
        return $this;
    }
    /**
     * Get ValidUntil value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValidUntil()
    {
        return isset($this->ValidUntil) ? $this->ValidUntil : null;
    }
    /**
     * Set ValidUntil value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $validUntil
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validUntil)), __LINE__);
        }
        if (is_null($validUntil) || (is_array($validUntil) && empty($validUntil))) {
            unset($this->ValidUntil);
        } else {
            $this->ValidUntil = $validUntil;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayResponseRule
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
