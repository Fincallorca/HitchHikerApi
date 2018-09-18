<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveResponsePNRData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RemoveResponsePNRData
 * @subpackage Structs
 */
class RemoveResponsePNRData extends AbstractStructBase
{
    /**
     * The PNR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData
     */
    public $PNR;
    /**
     * The Queues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData
     */
    public $Queues;
    /**
     * Constructor method for RemoveResponsePNRData
     * @uses RemoveResponsePNRData::setPNR()
     * @uses RemoveResponsePNRData::setQueues()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData $pNR
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData $queues
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData $pNR = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData $queues = null)
    {
        $this
            ->setPNR($pNR)
            ->setQueues($queues);
    }
    /**
     * Get PNR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData|null
     */
    public function getPNR()
    {
        return isset($this->PNR) ? $this->PNR : null;
    }
    /**
     * Set PNR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData $pNR
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponsePNRData
     */
    public function setPNR(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemovePNRData $pNR = null)
    {
        if (is_null($pNR) || (is_array($pNR) && empty($pNR))) {
            unset($this->PNR);
        } else {
            $this->PNR = $pNR;
        }
        return $this;
    }
    /**
     * Get Queues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData|null
     */
    public function getQueues()
    {
        return isset($this->Queues) ? $this->Queues : null;
    }
    /**
     * Set Queues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData $queues
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponsePNRData
     */
    public function setQueues(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRemoveResponseQueueData $queues = null)
    {
        if (is_null($queues) || (is_array($queues) && empty($queues))) {
            unset($this->Queues);
        } else {
            $this->Queues = $queues;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveResponsePNRData
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
