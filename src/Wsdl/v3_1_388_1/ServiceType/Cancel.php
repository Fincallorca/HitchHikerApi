<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CancelBooking
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelBooking $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelBookingResponse|bool
     */
    public function CancelBooking(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelBooking $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CancelBooking($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelTicket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicket $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponse|bool
     */
    public function CancelTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicket $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CancelTicket($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelBookingResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelTicketResponse
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
