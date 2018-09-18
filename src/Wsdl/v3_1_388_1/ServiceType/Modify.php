<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Modify ServiceType
 * @subpackage Services
 */
class Modify extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ModifyBooking
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyBooking $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyBookingResponse|bool
     */
    public function ModifyBooking(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyBooking $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ModifyBooking($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModifyBookingResponse
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
