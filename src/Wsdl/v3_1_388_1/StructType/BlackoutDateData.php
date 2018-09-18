<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackoutDateData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackoutDateData
 * @subpackage Structs
 */
class BlackoutDateData extends AbstractStructBase
{
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $From;
    /**
     * The Until
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Until;
    /**
     * Constructor method for BlackoutDateData
     * @uses BlackoutDateData::setFrom()
     * @uses BlackoutDateData::setUntil()
     * @param string $from
     * @param string $until
     */
    public function __construct($from = null, $until = null)
    {
        $this
            ->setFrom($from)
            ->setUntil($until);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BlackoutDateData
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
