<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponseLegPassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponseLegPassenger
 * @subpackage Structs
 */
class FareResponseLegPassenger extends AbstractStructBase
{
    /**
     * The LegEquivFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $LegEquivFarePrice;
    /**
     * The LegEquivTaxPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $LegEquivTaxPrice;
    /**
     * The LegFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $LegFarePrice;
    /**
     * The LegPassengerTypeCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LegPassengerTypeCode;
    /**
     * The LegPassengerTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LegPassengerTypeName;
    /**
     * The LegTaxPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $LegTaxPrice;
    /**
     * Constructor method for FareResponseLegPassenger
     * @uses FareResponseLegPassenger::setLegEquivFarePrice()
     * @uses FareResponseLegPassenger::setLegEquivTaxPrice()
     * @uses FareResponseLegPassenger::setLegFarePrice()
     * @uses FareResponseLegPassenger::setLegPassengerTypeCode()
     * @uses FareResponseLegPassenger::setLegPassengerTypeName()
     * @uses FareResponseLegPassenger::setLegTaxPrice()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivTaxPrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legFarePrice
     * @param string $legPassengerTypeCode
     * @param string $legPassengerTypeName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legTaxPrice
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivTaxPrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legFarePrice = null, $legPassengerTypeCode = null, $legPassengerTypeName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legTaxPrice = null)
    {
        $this
            ->setLegEquivFarePrice($legEquivFarePrice)
            ->setLegEquivTaxPrice($legEquivTaxPrice)
            ->setLegFarePrice($legFarePrice)
            ->setLegPassengerTypeCode($legPassengerTypeCode)
            ->setLegPassengerTypeName($legPassengerTypeName)
            ->setLegTaxPrice($legTaxPrice);
    }
    /**
     * Get LegEquivFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getLegEquivFarePrice()
    {
        return isset($this->LegEquivFarePrice) ? $this->LegEquivFarePrice : null;
    }
    /**
     * Set LegEquivFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegPassenger
     */
    public function setLegEquivFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivFarePrice = null)
    {
        if (is_null($legEquivFarePrice) || (is_array($legEquivFarePrice) && empty($legEquivFarePrice))) {
            unset($this->LegEquivFarePrice);
        } else {
            $this->LegEquivFarePrice = $legEquivFarePrice;
        }
        return $this;
    }
    /**
     * Get LegEquivTaxPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getLegEquivTaxPrice()
    {
        return isset($this->LegEquivTaxPrice) ? $this->LegEquivTaxPrice : null;
    }
    /**
     * Set LegEquivTaxPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivTaxPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegPassenger
     */
    public function setLegEquivTaxPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legEquivTaxPrice = null)
    {
        if (is_null($legEquivTaxPrice) || (is_array($legEquivTaxPrice) && empty($legEquivTaxPrice))) {
            unset($this->LegEquivTaxPrice);
        } else {
            $this->LegEquivTaxPrice = $legEquivTaxPrice;
        }
        return $this;
    }
    /**
     * Get LegFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getLegFarePrice()
    {
        return isset($this->LegFarePrice) ? $this->LegFarePrice : null;
    }
    /**
     * Set LegFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegPassenger
     */
    public function setLegFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legFarePrice = null)
    {
        if (is_null($legFarePrice) || (is_array($legFarePrice) && empty($legFarePrice))) {
            unset($this->LegFarePrice);
        } else {
            $this->LegFarePrice = $legFarePrice;
        }
        return $this;
    }
    /**
     * Get LegPassengerTypeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLegPassengerTypeCode()
    {
        return isset($this->LegPassengerTypeCode) ? $this->LegPassengerTypeCode : null;
    }
    /**
     * Set LegPassengerTypeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $legPassengerTypeCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegPassenger
     */
    public function setLegPassengerTypeCode($legPassengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($legPassengerTypeCode) && !is_string($legPassengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legPassengerTypeCode)), __LINE__);
        }
        if (is_null($legPassengerTypeCode) || (is_array($legPassengerTypeCode) && empty($legPassengerTypeCode))) {
            unset($this->LegPassengerTypeCode);
        } else {
            $this->LegPassengerTypeCode = $legPassengerTypeCode;
        }
        return $this;
    }
    /**
     * Get LegPassengerTypeName value
     * @return string|null
     */
    public function getLegPassengerTypeName()
    {
        return $this->LegPassengerTypeName;
    }
    /**
     * Set LegPassengerTypeName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $legPassengerTypeName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegPassenger
     */
    public function setLegPassengerTypeName($legPassengerTypeName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($legPassengerTypeName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $legPassengerTypeName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->LegPassengerTypeName = $legPassengerTypeName;
        return $this;
    }
    /**
     * Get LegTaxPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getLegTaxPrice()
    {
        return isset($this->LegTaxPrice) ? $this->LegTaxPrice : null;
    }
    /**
     * Set LegTaxPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legTaxPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegPassenger
     */
    public function setLegTaxPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $legTaxPrice = null)
    {
        if (is_null($legTaxPrice) || (is_array($legTaxPrice) && empty($legTaxPrice))) {
            unset($this->LegTaxPrice);
        } else {
            $this->LegTaxPrice = $legTaxPrice;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseLegPassenger
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
