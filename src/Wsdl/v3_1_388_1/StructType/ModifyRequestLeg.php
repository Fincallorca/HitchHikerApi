<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRequestLeg StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyRequestLeg
 * @subpackage Structs
 */
class ModifyRequestLeg extends AbstractStructBase
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
     * - nillable: true
     * @var string
     */
    public $LegCarrier;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSegment
     */
    public $Segments;
    /**
     * Constructor method for ModifyRequestLeg
     * @uses ModifyRequestLeg::setAvailString()
     * @uses ModifyRequestLeg::setLegCarrier()
     * @uses ModifyRequestLeg::setSegments()
     * @param string $availString
     * @param string $legCarrier
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSegment $segments
     */
    public function __construct($availString = null, $legCarrier = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSegment $segments = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg
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
     * @return string|null
     */
    public function getLegCarrier()
    {
        return $this->LegCarrier;
    }
    /**
     * Set LegCarrier value
     * @param string $legCarrier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg
     */
    public function setLegCarrier($legCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($legCarrier) && !is_string($legCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legCarrier)), __LINE__);
        }
        $this->LegCarrier = $legCarrier;
        return $this;
    }
    /**
     * Get Segments value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSegment|null
     */
    public function getSegments()
    {
        return $this->Segments;
    }
    /**
     * Set Segments value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSegment $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfModifyRequestSegment $segments = null)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyRequestLeg
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
