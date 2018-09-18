<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllotmentResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllotmentResponse
 * @subpackage Structs
 */
class AllotmentResponse extends AbstractStructBase
{
    /**
     * The Account
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount
     */
    public $Account;
    /**
     * The AffiliateCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AffiliateCode;
    /**
     * The CategoryType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CategoryType;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ID;
    /**
     * The Identifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Identifier;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCode;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Remark;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * Constructor method for AllotmentResponse
     * @uses AllotmentResponse::setAccount()
     * @uses AllotmentResponse::setAffiliateCode()
     * @uses AllotmentResponse::setCategoryType()
     * @uses AllotmentResponse::setID()
     * @uses AllotmentResponse::setIdentifier()
     * @uses AllotmentResponse::setMatchCode()
     * @uses AllotmentResponse::setRemark()
     * @uses AllotmentResponse::setType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $account
     * @param string $affiliateCode
     * @param string $categoryType
     * @param string $iD
     * @param string $identifier
     * @param string $matchCode
     * @param string $remark
     * @param string $type
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $account = null, $affiliateCode = null, $categoryType = null, $iD = null, $identifier = null, $matchCode = null, $remark = null, $type = null)
    {
        $this
            ->setAccount($account)
            ->setAffiliateCode($affiliateCode)
            ->setCategoryType($categoryType)
            ->setID($iD)
            ->setIdentifier($identifier)
            ->setMatchCode($matchCode)
            ->setRemark($remark)
            ->setType($type);
    }
    /**
     * Get Account value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount|null
     */
    public function getAccount()
    {
        return isset($this->Account) ? $this->Account : null;
    }
    /**
     * Set Account value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $account
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public function setAccount(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $account = null)
    {
        if (is_null($account) || (is_array($account) && empty($account))) {
            unset($this->Account);
        } else {
            $this->Account = $account;
        }
        return $this;
    }
    /**
     * Get AffiliateCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAffiliateCode()
    {
        return isset($this->AffiliateCode) ? $this->AffiliateCode : null;
    }
    /**
     * Set AffiliateCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $affiliateCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public function setAffiliateCode($affiliateCode = null)
    {
        // validation for constraint: string
        if (!is_null($affiliateCode) && !is_string($affiliateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($affiliateCode)), __LINE__);
        }
        if (is_null($affiliateCode) || (is_array($affiliateCode) && empty($affiliateCode))) {
            unset($this->AffiliateCode);
        } else {
            $this->AffiliateCode = $affiliateCode;
        }
        return $this;
    }
    /**
     * Get CategoryType value
     * @return string|null
     */
    public function getCategoryType()
    {
        return $this->CategoryType;
    }
    /**
     * Set CategoryType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $categoryType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public function setCategoryType($categoryType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::valueIsValid($categoryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $categoryType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::getValidValues())), __LINE__);
        }
        $this->CategoryType = $categoryType;
        return $this;
    }
    /**
     * Get ID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getID()
    {
        return isset($this->ID) ? $this->ID : null;
    }
    /**
     * Set ID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iD
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        if (is_null($iD) || (is_array($iD) && empty($iD))) {
            unset($this->ID);
        } else {
            $this->ID = $iD;
        }
        return $this;
    }
    /**
     * Get Identifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentifier()
    {
        return isset($this->Identifier) ? $this->Identifier : null;
    }
    /**
     * Set Identifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identifier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public function setIdentifier($identifier = null)
    {
        // validation for constraint: string
        if (!is_null($identifier) && !is_string($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identifier)), __LINE__);
        }
        if (is_null($identifier) || (is_array($identifier) && empty($identifier))) {
            unset($this->Identifier);
        } else {
            $this->Identifier = $identifier;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
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
     * Get Remark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRemark()
    {
        return isset($this->Remark) ? $this->Remark : null;
    }
    /**
     * Set Remark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $remark
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remark)), __LINE__);
        }
        if (is_null($remark) || (is_array($remark) && empty($remark))) {
            unset($this->Remark);
        } else {
            $this->Remark = $remark;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentResponse
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
