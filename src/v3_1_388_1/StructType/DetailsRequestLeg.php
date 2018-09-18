<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailsRequestLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DetailsRequestLeg
 * @subpackage Structs
 */
class DetailsRequestLeg extends AbstractStructBase
{
    /**
     * The AvailString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AvailString;
    /**
     * The LegCarrier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LegCarrier;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsRequestSegment
     */
    public $Segments;
    /**
     * Constructor method for DetailsRequestLeg
     * @uses DetailsRequestLeg::setAvailString()
     * @uses DetailsRequestLeg::setLegCarrier()
     * @uses DetailsRequestLeg::setSegments()
     * @param string $availString
     * @param string $legCarrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsRequestSegment $segments
     */
    public function __construct($availString = null, $legCarrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsRequestSegment $segments = null)
    {
        $this
            ->setAvailString($availString)
            ->setLegCarrier($legCarrier)
            ->setSegments($segments);
    }
    /**
     * Get AvailString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAvailString()
    {
        return isset($this->AvailString) ? $this->AvailString : null;
    }
    /**
     * Set AvailString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $availString
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsRequestLeg
     */
    public function setAvailString($availString = null)
    {
        // validation for constraint: string
        if (!is_null($availString) && !is_string($availString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availString)), __LINE__);
        }
        if (is_null($availString) || (is_array($availString) && empty($availString))) {
            unset($this->AvailString);
        } else {
            $this->AvailString = $availString;
        }
        return $this;
    }
    /**
     * Get LegCarrier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLegCarrier()
    {
        return isset($this->LegCarrier) ? $this->LegCarrier : null;
    }
    /**
     * Set LegCarrier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $legCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsRequestLeg
     */
    public function setLegCarrier($legCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($legCarrier) && !is_string($legCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legCarrier)), __LINE__);
        }
        if (is_null($legCarrier) || (is_array($legCarrier) && empty($legCarrier))) {
            unset($this->LegCarrier);
        } else {
            $this->LegCarrier = $legCarrier;
        }
        return $this;
    }
    /**
     * Get Segments value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsRequestSegment|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsRequestSegment $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsRequestLeg
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfDetailsRequestSegment $segments = null)
    {
        $this->Segments = $segments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\DetailsRequestLeg
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
