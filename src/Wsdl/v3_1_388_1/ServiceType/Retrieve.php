<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Retrieve ServiceType
 * @subpackage Services
 */
class Retrieve extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RetrievePassengerNameRecord
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RetrievePassengerNameRecord $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RetrievePassengerNameRecordResponse|bool
     */
    public function RetrievePassengerNameRecord(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RetrievePassengerNameRecord $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->RetrievePassengerNameRecord($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RetrievePassengerNameRecordResponse
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
