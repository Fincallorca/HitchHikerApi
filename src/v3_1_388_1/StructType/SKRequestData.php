<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SKRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SKRequestData
 * @subpackage Structs
 */
class SKRequestData extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CarrierCode;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $FreeText;
    /**
     * The KeyWord
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $KeyWord;
    /**
     * The NoPassengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NoPassengers;
    /**
     * Constructor method for SKRequestData
     * @uses SKRequestData::setCarrierCode()
     * @uses SKRequestData::setFreeText()
     * @uses SKRequestData::setKeyWord()
     * @uses SKRequestData::setNoPassengers()
     * @param string $carrierCode
     * @param string $freeText
     * @param string $keyWord
     * @param bool $noPassengers
     */
    public function __construct($carrierCode = null, $freeText = null, $keyWord = null, $noPassengers = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setFreeText($freeText)
            ->setKeyWord($keyWord)
            ->setNoPassengers($noPassengers);
    }
    /**
     * Get CarrierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCarrierCode()
    {
        return isset($this->CarrierCode) ? $this->CarrierCode : null;
    }
    /**
     * Set CarrierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $carrierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SKRequestData
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        if (is_null($carrierCode) || (is_array($carrierCode) && empty($carrierCode))) {
            unset($this->CarrierCode);
        } else {
            $this->CarrierCode = $carrierCode;
        }
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SKRequestData
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get KeyWord value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKeyWord()
    {
        return isset($this->KeyWord) ? $this->KeyWord : null;
    }
    /**
     * Set KeyWord value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $keyWord
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SKRequestData
     */
    public function setKeyWord($keyWord = null)
    {
        // validation for constraint: string
        if (!is_null($keyWord) && !is_string($keyWord)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyWord)), __LINE__);
        }
        if (is_null($keyWord) || (is_array($keyWord) && empty($keyWord))) {
            unset($this->KeyWord);
        } else {
            $this->KeyWord = $keyWord;
        }
        return $this;
    }
    /**
     * Get NoPassengers value
     * @return bool|null
     */
    public function getNoPassengers()
    {
        return $this->NoPassengers;
    }
    /**
     * Set NoPassengers value
     * @param bool $noPassengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SKRequestData
     */
    public function setNoPassengers($noPassengers = null)
    {
        // validation for constraint: boolean
        if (!is_null($noPassengers) && !is_bool($noPassengers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($noPassengers)), __LINE__);
        }
        $this->NoPassengers = $noPassengers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SKRequestData
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
