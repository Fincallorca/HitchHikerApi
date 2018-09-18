<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisplayRequestGDSFares StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisplayRequestGDSFares
 * @subpackage Structs
 */
class DisplayRequestGDSFares extends GDSFares
{
    /**
     * The ConcurrentFareDisplays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ConcurrentFareDisplays;
    /**
     * The ExcludeSpecialFares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludeSpecialFares;
    /**
     * Constructor method for DisplayRequestGDSFares
     * @uses DisplayRequestGDSFares::setConcurrentFareDisplays()
     * @uses DisplayRequestGDSFares::setExcludeSpecialFares()
     * @param int $concurrentFareDisplays
     * @param bool $excludeSpecialFares
     */
    public function __construct($concurrentFareDisplays = null, $excludeSpecialFares = null)
    {
        $this
            ->setConcurrentFareDisplays($concurrentFareDisplays)
            ->setExcludeSpecialFares($excludeSpecialFares);
    }
    /**
     * Get ConcurrentFareDisplays value
     * @return int|null
     */
    public function getConcurrentFareDisplays()
    {
        return $this->ConcurrentFareDisplays;
    }
    /**
     * Set ConcurrentFareDisplays value
     * @param int $concurrentFareDisplays
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares
     */
    public function setConcurrentFareDisplays($concurrentFareDisplays = null)
    {
        // validation for constraint: int
        if (!is_null($concurrentFareDisplays) && !is_numeric($concurrentFareDisplays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($concurrentFareDisplays)), __LINE__);
        }
        $this->ConcurrentFareDisplays = $concurrentFareDisplays;
        return $this;
    }
    /**
     * Get ExcludeSpecialFares value
     * @return bool|null
     */
    public function getExcludeSpecialFares()
    {
        return $this->ExcludeSpecialFares;
    }
    /**
     * Set ExcludeSpecialFares value
     * @param bool $excludeSpecialFares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares
     */
    public function setExcludeSpecialFares($excludeSpecialFares = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludeSpecialFares) && !is_bool($excludeSpecialFares)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludeSpecialFares)), __LINE__);
        }
        $this->ExcludeSpecialFares = $excludeSpecialFares;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DisplayRequestGDSFares
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
