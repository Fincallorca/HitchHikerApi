<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexFare
 * @subpackage Structs
 */
class FareComplexFare extends FareRequestFare
{
    /**
     * The FareID
     * @var int
     */
    public $FareID;
    /**
     * The FareName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareName;
    /**
     * Constructor method for FareComplexFare
     * @uses FareComplexFare::setFareID()
     * @uses FareComplexFare::setFareName()
     * @param int $fareID
     * @param string $fareName
     */
    public function __construct($fareID = null, $fareName = null)
    {
        $this
            ->setFareID($fareID)
            ->setFareName($fareName);
    }
    /**
     * Get FareID value
     * @return int|null
     */
    public function getFareID()
    {
        return $this->FareID;
    }
    /**
     * Set FareID value
     * @param int $fareID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexFare
     */
    public function setFareID($fareID = null)
    {
        // validation for constraint: int
        if (!is_null($fareID) && !is_numeric($fareID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fareID)), __LINE__);
        }
        $this->FareID = $fareID;
        return $this;
    }
    /**
     * Get FareName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareName()
    {
        return isset($this->FareName) ? $this->FareName : null;
    }
    /**
     * Set FareName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexFare
     */
    public function setFareName($fareName = null)
    {
        // validation for constraint: string
        if (!is_null($fareName) && !is_string($fareName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareName)), __LINE__);
        }
        if (is_null($fareName) || (is_array($fareName) && empty($fareName))) {
            unset($this->FareName);
        } else {
            $this->FareName = $fareName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexFare
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
