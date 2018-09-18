<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Revalidate ServiceType
 * @subpackage Services
 */
class Revalidate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RevalidateTicket
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateTicket $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateTicketResponse|bool
     */
    public function RevalidateTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateTicket $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->RevalidateTicket($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RevalidateTicketResponse
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
