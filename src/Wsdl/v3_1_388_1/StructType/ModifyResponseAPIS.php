<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyResponseAPIS StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModifyResponseAPIS
 * @subpackage Structs
 */
class ModifyResponseAPIS extends AbstractStructBase
{
    /**
     * The APIS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $APIS;
    /**
     * The ErrorText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorText;
    /**
     * The Segments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint
     */
    public $Segments;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Status;
    /**
     * Constructor method for ModifyResponseAPIS
     * @uses ModifyResponseAPIS::setAPIS()
     * @uses ModifyResponseAPIS::setErrorText()
     * @uses ModifyResponseAPIS::setSegments()
     * @uses ModifyResponseAPIS::setStatus()
     * @param string $aPIS
     * @param string $errorText
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments
     * @param int $status
     */
    public function __construct($aPIS = null, $errorText = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments = null, $status = null)
    {
        $this
            ->setAPIS($aPIS)
            ->setErrorText($errorText)
            ->setSegments($segments)
            ->setStatus($status);
    }
    /**
     * Get APIS value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAPIS()
    {
        return isset($this->APIS) ? $this->APIS : null;
    }
    /**
     * Set APIS value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $aPIS
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS
     */
    public function setAPIS($aPIS = null)
    {
        // validation for constraint: string
        if (!is_null($aPIS) && !is_string($aPIS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aPIS)), __LINE__);
        }
        if (is_null($aPIS) || (is_array($aPIS) && empty($aPIS))) {
            unset($this->APIS);
        } else {
            $this->APIS = $aPIS;
        }
        return $this;
    }
    /**
     * Get ErrorText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorText()
    {
        return isset($this->ErrorText) ? $this->ErrorText : null;
    }
    /**
     * Set ErrorText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS
     */
    public function setErrorText($errorText = null)
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorText)), __LINE__);
        }
        if (is_null($errorText) || (is_array($errorText) && empty($errorText))) {
            unset($this->ErrorText);
        } else {
            $this->ErrorText = $errorText;
        }
        return $this;
    }
    /**
     * Get Segments value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint|null
     */
    public function getSegments()
    {
        return isset($this->Segments) ? $this->Segments : null;
    }
    /**
     * Set Segments value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS
     */
    public function setSegments(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfint $segments = null)
    {
        if (is_null($segments) || (is_array($segments) && empty($segments))) {
            unset($this->Segments);
        } else {
            $this->Segments = $segments;
        }
        return $this;
    }
    /**
     * Get Status value
     * @return int|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param int $status
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !is_numeric($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyResponseAPIS
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
