<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCardData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CreditCardData
 * @subpackage Structs
 */
class CreditCardData extends AbstractStructBase
{
    /**
     * The Brand
     * @var string
     */
    public $Brand;
    /**
     * The CVC
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $CVC;
    /**
     * The CardHolderDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CardHolderDescription;
    /**
     * The ExpiryMonth
     * @var int
     */
    public $ExpiryMonth;
    /**
     * The ExpiryYear
     * @var int
     */
    public $ExpiryYear;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Number;
    /**
     * The VirtualCCReference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VirtualCCReference;
    /**
     * Constructor method for CreditCardData
     * @uses CreditCardData::setBrand()
     * @uses CreditCardData::setCVC()
     * @uses CreditCardData::setCardHolderDescription()
     * @uses CreditCardData::setExpiryMonth()
     * @uses CreditCardData::setExpiryYear()
     * @uses CreditCardData::setNumber()
     * @uses CreditCardData::setVirtualCCReference()
     * @param string $brand
     * @param string $cVC
     * @param string $cardHolderDescription
     * @param int $expiryMonth
     * @param int $expiryYear
     * @param string $number
     * @param string $virtualCCReference
     */
    public function __construct($brand = null, $cVC = null, $cardHolderDescription = null, $expiryMonth = null, $expiryYear = null, $number = null, $virtualCCReference = null)
    {
        $this
            ->setBrand($brand)
            ->setCVC($cVC)
            ->setCardHolderDescription($cardHolderDescription)
            ->setExpiryMonth($expiryMonth)
            ->setExpiryYear($expiryYear)
            ->setNumber($number)
            ->setVirtualCCReference($virtualCCReference);
    }
    /**
     * Get Brand value
     * @return string|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }
    /**
     * Set Brand value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CreditCard::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CreditCard::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $brand
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CreditCard::valueIsValid($brand)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $brand, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CreditCard::getValidValues())), __LINE__);
        }
        $this->Brand = $brand;
        return $this;
    }
    /**
     * Get CVC value
     * @return string|null
     */
    public function getCVC()
    {
        return $this->CVC;
    }
    /**
     * Set CVC value
     * @param string $cVC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public function setCVC($cVC = null)
    {
        // validation for constraint: string
        if (!is_null($cVC) && !is_string($cVC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cVC)), __LINE__);
        }
        $this->CVC = $cVC;
        return $this;
    }
    /**
     * Get CardHolderDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCardHolderDescription()
    {
        return isset($this->CardHolderDescription) ? $this->CardHolderDescription : null;
    }
    /**
     * Set CardHolderDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cardHolderDescription
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public function setCardHolderDescription($cardHolderDescription = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderDescription) && !is_string($cardHolderDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderDescription)), __LINE__);
        }
        if (is_null($cardHolderDescription) || (is_array($cardHolderDescription) && empty($cardHolderDescription))) {
            unset($this->CardHolderDescription);
        } else {
            $this->CardHolderDescription = $cardHolderDescription;
        }
        return $this;
    }
    /**
     * Get ExpiryMonth value
     * @return int|null
     */
    public function getExpiryMonth()
    {
        return $this->ExpiryMonth;
    }
    /**
     * Set ExpiryMonth value
     * @param int $expiryMonth
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public function setExpiryMonth($expiryMonth = null)
    {
        // validation for constraint: int
        if (!is_null($expiryMonth) && !is_numeric($expiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expiryMonth)), __LINE__);
        }
        $this->ExpiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * Get ExpiryYear value
     * @return int|null
     */
    public function getExpiryYear()
    {
        return $this->ExpiryYear;
    }
    /**
     * Set ExpiryYear value
     * @param int $expiryYear
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public function setExpiryYear($expiryYear = null)
    {
        // validation for constraint: int
        if (!is_null($expiryYear) && !is_numeric($expiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($expiryYear)), __LINE__);
        }
        $this->ExpiryYear = $expiryYear;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get VirtualCCReference value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVirtualCCReference()
    {
        return isset($this->VirtualCCReference) ? $this->VirtualCCReference : null;
    }
    /**
     * Set VirtualCCReference value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $virtualCCReference
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
     */
    public function setVirtualCCReference($virtualCCReference = null)
    {
        // validation for constraint: string
        if (!is_null($virtualCCReference) && !is_string($virtualCCReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($virtualCCReference)), __LINE__);
        }
        if (is_null($virtualCCReference) || (is_array($virtualCCReference) && empty($virtualCCReference))) {
            unset($this->VirtualCCReference);
        } else {
            $this->VirtualCCReference = $virtualCCReference;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CreditCardData
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
