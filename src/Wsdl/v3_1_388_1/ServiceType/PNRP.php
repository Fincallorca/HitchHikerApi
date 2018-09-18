<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for PNRP ServiceType
 * @subpackage Services
 */
class PNRP extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PNRProcessing
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRProcessing $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRProcessingResponse|bool
     */
    public function PNRProcessing(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRProcessing $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->PNRProcessing($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRProcessingResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
