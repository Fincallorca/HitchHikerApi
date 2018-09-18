<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllotmentRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AllotmentRequest
 * @subpackage Structs
 */
class AllotmentRequest extends AbstractStructBase
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
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Category;
    /**
     * The EnhancedSearch
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EnhancedSearch;
    /**
     * The Identifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Identifier;
    /**
     * The IgnoreAllDeadlines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IgnoreAllDeadlines;
    /**
     * The MatchCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MatchCode;
    /**
     * The OnlyAllotments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OnlyAllotments;
    /**
     * The Priority
     * @var string
     */
    public $Priority;
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * Constructor method for AllotmentRequest
     * @uses AllotmentRequest::setAccount()
     * @uses AllotmentRequest::setAffiliateCode()
     * @uses AllotmentRequest::setCategory()
     * @uses AllotmentRequest::setEnhancedSearch()
     * @uses AllotmentRequest::setIdentifier()
     * @uses AllotmentRequest::setIgnoreAllDeadlines()
     * @uses AllotmentRequest::setMatchCode()
     * @uses AllotmentRequest::setOnlyAllotments()
     * @uses AllotmentRequest::setPriority()
     * @uses AllotmentRequest::setType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $account
     * @param string $affiliateCode
     * @param string $category
     * @param string $enhancedSearch
     * @param string $identifier
     * @param bool $ignoreAllDeadlines
     * @param string $matchCode
     * @param bool $onlyAllotments
     * @param string $priority
     * @param string $type
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentAccount $account = null, $affiliateCode = null, $category = null, $enhancedSearch = null, $identifier = null, $ignoreAllDeadlines = null, $matchCode = null, $onlyAllotments = null, $priority = null, $type = null)
    {
        $this
            ->setAccount($account)
            ->setAffiliateCode($affiliateCode)
            ->setCategory($category)
            ->setEnhancedSearch($enhancedSearch)
            ->setIdentifier($identifier)
            ->setIgnoreAllDeadlines($ignoreAllDeadlines)
            ->setMatchCode($matchCode)
            ->setOnlyAllotments($onlyAllotments)
            ->setPriority($priority)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
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
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentCategoryEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentCategoryEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $category
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public function setCategory($category = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentCategoryEnum::valueIsValid($category)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $category, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentCategoryEnum::getValidValues())), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Get EnhancedSearch value
     * @return string|null
     */
    public function getEnhancedSearch()
    {
        return $this->EnhancedSearch;
    }
    /**
     * Set EnhancedSearch value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedAllotmentEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedAllotmentEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $enhancedSearch
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public function setEnhancedSearch($enhancedSearch = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedAllotmentEnum::valueIsValid($enhancedSearch)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $enhancedSearch, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\EnhancedAllotmentEnum::getValidValues())), __LINE__);
        }
        $this->EnhancedSearch = $enhancedSearch;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
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
     * Get IgnoreAllDeadlines value
     * @return bool|null
     */
    public function getIgnoreAllDeadlines()
    {
        return $this->IgnoreAllDeadlines;
    }
    /**
     * Set IgnoreAllDeadlines value
     * @param bool $ignoreAllDeadlines
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public function setIgnoreAllDeadlines($ignoreAllDeadlines = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignoreAllDeadlines) && !is_bool($ignoreAllDeadlines)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ignoreAllDeadlines)), __LINE__);
        }
        $this->IgnoreAllDeadlines = $ignoreAllDeadlines;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
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
     * Get OnlyAllotments value
     * @return bool|null
     */
    public function getOnlyAllotments()
    {
        return $this->OnlyAllotments;
    }
    /**
     * Set OnlyAllotments value
     * @param bool $onlyAllotments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public function setOnlyAllotments($onlyAllotments = null)
    {
        // validation for constraint: boolean
        if (!is_null($onlyAllotments) && !is_bool($onlyAllotments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($onlyAllotments)), __LINE__);
        }
        $this->OnlyAllotments = $onlyAllotments;
        return $this;
    }
    /**
     * Get Priority value
     * @return string|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentPriorityEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentPriorityEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $priority
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentPriorityEnum::valueIsValid($priority)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $priority, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentPriorityEnum::getValidValues())), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\AllotmentTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\AllotmentRequest
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
