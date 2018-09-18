<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarResponseCell StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalendarResponseCell
 * @subpackage Structs
 */
class CalendarResponseCell extends AbstractStructBase
{
    /**
     * The CellIDIn
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CellIDIn;
    /**
     * The CellIDOut
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CellIDOut;
    /**
     * The Fares
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseFareData
     */
    public $Fares;
    /**
     * Constructor method for CalendarResponseCell
     * @uses CalendarResponseCell::setCellIDIn()
     * @uses CalendarResponseCell::setCellIDOut()
     * @uses CalendarResponseCell::setFares()
     * @param int $cellIDIn
     * @param int $cellIDOut
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseFareData $fares
     */
    public function __construct($cellIDIn = null, $cellIDOut = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseFareData $fares = null)
    {
        $this
            ->setCellIDIn($cellIDIn)
            ->setCellIDOut($cellIDOut)
            ->setFares($fares);
    }
    /**
     * Get CellIDIn value
     * @return int|null
     */
    public function getCellIDIn()
    {
        return $this->CellIDIn;
    }
    /**
     * Set CellIDIn value
     * @param int $cellIDIn
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell
     */
    public function setCellIDIn($cellIDIn = null)
    {
        // validation for constraint: int
        if (!is_null($cellIDIn) && !is_numeric($cellIDIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cellIDIn)), __LINE__);
        }
        $this->CellIDIn = $cellIDIn;
        return $this;
    }
    /**
     * Get CellIDOut value
     * @return int|null
     */
    public function getCellIDOut()
    {
        return $this->CellIDOut;
    }
    /**
     * Set CellIDOut value
     * @param int $cellIDOut
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell
     */
    public function setCellIDOut($cellIDOut = null)
    {
        // validation for constraint: int
        if (!is_null($cellIDOut) && !is_numeric($cellIDOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($cellIDOut)), __LINE__);
        }
        $this->CellIDOut = $cellIDOut;
        return $this;
    }
    /**
     * Get Fares value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseFareData|null
     */
    public function getFares()
    {
        return isset($this->Fares) ? $this->Fares : null;
    }
    /**
     * Set Fares value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseFareData $fares
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell
     */
    public function setFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfResponseFareData $fares = null)
    {
        if (is_null($fares) || (is_array($fares) && empty($fares))) {
            unset($this->Fares);
        } else {
            $this->Fares = $fares;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell
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
