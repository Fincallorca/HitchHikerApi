<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeasonDateData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeasonDateData
 * @subpackage Structs
 */
class SeasonDateData extends AbstractStructBase
{
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $From;
    /**
     * The LastReturn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastReturn;
    /**
     * The Style
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Style;
    /**
     * The Until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Until;
    /**
     * The UseAsTravelCompleteDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseAsTravelCompleteDate;
    /**
     * Constructor method for SeasonDateData
     * @uses SeasonDateData::setFrom()
     * @uses SeasonDateData::setLastReturn()
     * @uses SeasonDateData::setStyle()
     * @uses SeasonDateData::setUntil()
     * @uses SeasonDateData::setUseAsTravelCompleteDate()
     * @param string $from
     * @param string $lastReturn
     * @param string $style
     * @param string $until
     * @param bool $useAsTravelCompleteDate
     */
    public function __construct($from = null, $lastReturn = null, $style = null, $until = null, $useAsTravelCompleteDate = null)
    {
        $this
            ->setFrom($from)
            ->setLastReturn($lastReturn)
            ->setStyle($style)
            ->setUntil($until)
            ->setUseAsTravelCompleteDate($useAsTravelCompleteDate);
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from)), __LINE__);
        }
        $this->From = $from;
        return $this;
    }
    /**
     * Get LastReturn value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastReturn()
    {
        return isset($this->LastReturn) ? $this->LastReturn : null;
    }
    /**
     * Set LastReturn value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastReturn
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData
     */
    public function setLastReturn($lastReturn = null)
    {
        // validation for constraint: string
        if (!is_null($lastReturn) && !is_string($lastReturn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastReturn)), __LINE__);
        }
        if (is_null($lastReturn) || (is_array($lastReturn) && empty($lastReturn))) {
            unset($this->LastReturn);
        } else {
            $this->LastReturn = $lastReturn;
        }
        return $this;
    }
    /**
     * Get Style value
     * @return string|null
     */
    public function getStyle()
    {
        return $this->Style;
    }
    /**
     * Set Style value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SeasonStyle::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SeasonStyle::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $style
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData
     */
    public function setStyle($style = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SeasonStyle::valueIsValid($style)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $style, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SeasonStyle::getValidValues())), __LINE__);
        }
        $this->Style = $style;
        return $this;
    }
    /**
     * Get Until value
     * @return string|null
     */
    public function getUntil()
    {
        return $this->Until;
    }
    /**
     * Set Until value
     * @param string $until
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData
     */
    public function setUntil($until = null)
    {
        // validation for constraint: string
        if (!is_null($until) && !is_string($until)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($until)), __LINE__);
        }
        $this->Until = $until;
        return $this;
    }
    /**
     * Get UseAsTravelCompleteDate value
     * @return bool|null
     */
    public function getUseAsTravelCompleteDate()
    {
        return $this->UseAsTravelCompleteDate;
    }
    /**
     * Set UseAsTravelCompleteDate value
     * @param bool $useAsTravelCompleteDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData
     */
    public function setUseAsTravelCompleteDate($useAsTravelCompleteDate = null)
    {
        // validation for constraint: boolean
        if (!is_null($useAsTravelCompleteDate) && !is_bool($useAsTravelCompleteDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($useAsTravelCompleteDate)), __LINE__);
        }
        $this->UseAsTravelCompleteDate = $useAsTravelCompleteDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SeasonDateData
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
