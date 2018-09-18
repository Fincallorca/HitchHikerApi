<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseLocation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseLocation
 * @subpackage Structs
 */
class PNRResponseLocation extends AbstractStructBase
{
    /**
     * The BranchID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BranchID;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * Constructor method for PNRResponseLocation
     * @uses PNRResponseLocation::setBranchID()
     * @uses PNRResponseLocation::setQueue()
     * @param string $branchID
     * @param string $queue
     */
    public function __construct($branchID = null, $queue = null)
    {
        $this
            ->setBranchID($branchID)
            ->setQueue($queue);
    }
    /**
     * Get BranchID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBranchID()
    {
        return isset($this->BranchID) ? $this->BranchID : null;
    }
    /**
     * Set BranchID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $branchID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation
     */
    public function setBranchID($branchID = null)
    {
        // validation for constraint: string
        if (!is_null($branchID) && !is_string($branchID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($branchID)), __LINE__);
        }
        if (is_null($branchID) || (is_array($branchID) && empty($branchID))) {
            unset($this->BranchID);
        } else {
            $this->BranchID = $branchID;
        }
        return $this;
    }
    /**
     * Get Queue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQueue()
    {
        return isset($this->Queue) ? $this->Queue : null;
    }
    /**
     * Set Queue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $queue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation
     */
    public function setQueue($queue = null)
    {
        // validation for constraint: string
        if (!is_null($queue) && !is_string($queue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queue)), __LINE__);
        }
        if (is_null($queue) || (is_array($queue) && empty($queue))) {
            unset($this->Queue);
        } else {
            $this->Queue = $queue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseLocation
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
