<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatMapCharacteristicData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeatMapCharacteristicData
 * @subpackage Structs
 */
class SeatMapCharacteristicData extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * Constructor method for SeatMapCharacteristicData
     * @uses SeatMapCharacteristicData::setCode()
     * @uses SeatMapCharacteristicData::setText()
     * @param string $code
     * @param string $text
     */
    public function __construct($code = null, $text = null)
    {
        $this
            ->setCode($code)
            ->setText($text);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeatMapCharacteristicData
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
