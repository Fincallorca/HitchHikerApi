<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareComplexPassengeGroup StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareComplexPassengeGroup
 * @subpackage Structs
 */
class FareComplexPassengeGroup extends AbstractStructBase
{
    /**
     * The GroupID
     * @var int
     */
    public $GroupID;
    /**
     * The GroupName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger
     */
    public $Passengers;
    /**
     * Constructor method for FareComplexPassengeGroup
     * @uses FareComplexPassengeGroup::setGroupID()
     * @uses FareComplexPassengeGroup::setGroupName()
     * @uses FareComplexPassengeGroup::setPassengers()
     * @param int $groupID
     * @param string $groupName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger $passengers
     */
    public function __construct($groupID = null, $groupName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger $passengers = null)
    {
        $this
            ->setGroupID($groupID)
            ->setGroupName($groupName)
            ->setPassengers($passengers);
    }
    /**
     * Get GroupID value
     * @return int|null
     */
    public function getGroupID()
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param int $groupID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup
     */
    public function setGroupID($groupID = null)
    {
        // validation for constraint: int
        if (!is_null($groupID) && !is_numeric($groupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($groupID)), __LINE__);
        }
        $this->GroupID = $groupID;
        return $this;
    }
    /**
     * Get GroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupName()
    {
        return isset($this->GroupName) ? $this->GroupName : null;
    }
    /**
     * Set GroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupName)), __LINE__);
        }
        if (is_null($groupName) || (is_array($groupName) && empty($groupName))) {
            unset($this->GroupName);
        } else {
            $this->GroupName = $groupName;
        }
        return $this;
    }
    /**
     * Get Passengers value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger $passengers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup
     */
    public function setPassengers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfFareRequestPassenger $passengers = null)
    {
        $this->Passengers = $passengers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareComplexPassengeGroup
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
