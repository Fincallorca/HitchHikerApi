<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Response StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Response
 * @subpackage Structs
 */
class Response extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The ResponseDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebResponseDetails
     */
    public $ResponseDetails;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Status;
    /**
     * The WebResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WebResponse;
    /**
     * Constructor method for Response
     * @uses Response::setDescription()
     * @uses Response::setResponseDetails()
     * @uses Response::setStatus()
     * @uses Response::setWebResponse()
     * @param string $description
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebResponseDetails $responseDetails
     * @param string $status
     * @param string $webResponse
     */
    public function __construct($description = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebResponseDetails $responseDetails = null, $status = null, $webResponse = null)
    {
        $this
            ->setDescription($description)
            ->setResponseDetails($responseDetails)
            ->setStatus($status)
            ->setWebResponse($webResponse);
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get ResponseDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebResponseDetails|null
     */
    public function getResponseDetails()
    {
        return isset($this->ResponseDetails) ? $this->ResponseDetails : null;
    }
    /**
     * Set ResponseDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebResponseDetails $responseDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response
     */
    public function setResponseDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\WebResponseDetails $responseDetails = null)
    {
        if (is_null($responseDetails) || (is_array($responseDetails) && empty($responseDetails))) {
            unset($this->ResponseDetails);
        } else {
            $this->ResponseDetails = $responseDetails;
        }
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $status
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
        }
        return $this;
    }
    /**
     * Get WebResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWebResponse()
    {
        return isset($this->WebResponse) ? $this->WebResponse : null;
    }
    /**
     * Set WebResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $webResponse
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response
     */
    public function setWebResponse($webResponse = null)
    {
        // validation for constraint: string
        if (!is_null($webResponse) && !is_string($webResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($webResponse)), __LINE__);
        }
        if (is_null($webResponse) || (is_array($webResponse) && empty($webResponse))) {
            unset($this->WebResponse);
        } else {
            $this->WebResponse = $webResponse;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Response
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
