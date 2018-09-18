<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxResponsePassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxResponsePassenger
 * @subpackage Structs
 */
class TaxResponsePassenger extends AbstractStructBase
{
    /**
     * The DetailedTaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
     */
    public $DetailedTaxes;
    /**
     * The PublishedFareBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PublishedFareBase;
    /**
     * The PublishedFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PublishedFarePrice;
    /**
     * The QSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $QSurcharge;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalTax;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for TaxResponsePassenger
     * @uses TaxResponsePassenger::setDetailedTaxes()
     * @uses TaxResponsePassenger::setPublishedFareBase()
     * @uses TaxResponsePassenger::setPublishedFarePrice()
     * @uses TaxResponsePassenger::setQSurcharge()
     * @uses TaxResponsePassenger::setTotalTax()
     * @uses TaxResponsePassenger::setType()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes
     * @param string $publishedFareBase
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     * @param string $type
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes = null, $publishedFareBase = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null, $type = null)
    {
        $this
            ->setDetailedTaxes($detailedTaxes)
            ->setPublishedFareBase($publishedFareBase)
            ->setPublishedFarePrice($publishedFarePrice)
            ->setQSurcharge($qSurcharge)
            ->setTotalTax($totalTax)
            ->setType($type);
    }
    /**
     * Get DetailedTaxes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail|null
     */
    public function getDetailedTaxes()
    {
        return isset($this->DetailedTaxes) ? $this->DetailedTaxes : null;
    }
    /**
     * Set DetailedTaxes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger
     */
    public function setDetailedTaxes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes = null)
    {
        if (is_null($detailedTaxes) || (is_array($detailedTaxes) && empty($detailedTaxes))) {
            unset($this->DetailedTaxes);
        } else {
            $this->DetailedTaxes = $detailedTaxes;
        }
        return $this;
    }
    /**
     * Get PublishedFareBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPublishedFareBase()
    {
        return isset($this->PublishedFareBase) ? $this->PublishedFareBase : null;
    }
    /**
     * Set PublishedFareBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $publishedFareBase
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger
     */
    public function setPublishedFareBase($publishedFareBase = null)
    {
        // validation for constraint: string
        if (!is_null($publishedFareBase) && !is_string($publishedFareBase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($publishedFareBase)), __LINE__);
        }
        if (is_null($publishedFareBase) || (is_array($publishedFareBase) && empty($publishedFareBase))) {
            unset($this->PublishedFareBase);
        } else {
            $this->PublishedFareBase = $publishedFareBase;
        }
        return $this;
    }
    /**
     * Get PublishedFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPublishedFarePrice()
    {
        return isset($this->PublishedFarePrice) ? $this->PublishedFarePrice : null;
    }
    /**
     * Set PublishedFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger
     */
    public function setPublishedFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice = null)
    {
        if (is_null($publishedFarePrice) || (is_array($publishedFarePrice) && empty($publishedFarePrice))) {
            unset($this->PublishedFarePrice);
        } else {
            $this->PublishedFarePrice = $publishedFarePrice;
        }
        return $this;
    }
    /**
     * Get QSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getQSurcharge()
    {
        return isset($this->QSurcharge) ? $this->QSurcharge : null;
    }
    /**
     * Set QSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger
     */
    public function setQSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge = null)
    {
        if (is_null($qSurcharge) || (is_array($qSurcharge) && empty($qSurcharge))) {
            unset($this->QSurcharge);
        } else {
            $this->QSurcharge = $qSurcharge;
        }
        return $this;
    }
    /**
     * Get TotalTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalTax()
    {
        return isset($this->TotalTax) ? $this->TotalTax : null;
    }
    /**
     * Set TotalTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger
     */
    public function setTotalTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        if (is_null($totalTax) || (is_array($totalTax) && empty($totalTax))) {
            unset($this->TotalTax);
        } else {
            $this->TotalTax = $totalTax;
        }
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
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxResponsePassenger
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
