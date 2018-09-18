<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetFares
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFares $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresResponse|bool
     */
    public function GetFares(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFares $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFares($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFlightDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFlightDetails $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFlightDetailsResponse|bool
     */
    public function GetFlightDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFlightDetails $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFlightDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTermsAndConditions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTermsAndConditions $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTermsAndConditionsResponse|bool
     */
    public function GetTermsAndConditions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTermsAndConditions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTermsAndConditions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRuleInformationText
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationText $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationTextResponse|bool
     */
    public function GetRuleInformationText(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationText $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRuleInformationText($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRuleInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformation $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationResponse|bool
     */
    public function GetRuleInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRuleInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFareQuote
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareQuote $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareQuoteResponse|bool
     */
    public function GetFareQuote(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareQuote $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFareQuote($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRoutingInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingInformation $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingInformationResponse|bool
     */
    public function GetRoutingInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingInformation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRoutingInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTicketInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTicketInformation $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTicketInformationResponse|bool
     */
    public function GetTicketInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTicketInformation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTicketInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSupplier
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSupplier $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSupplierResponse|bool
     */
    public function GetSupplier(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSupplier $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSupplier($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailability
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetAvailability $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetAvailabilityResponse|bool
     */
    public function GetAvailability(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetAvailability $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAvailability($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFareDisplay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareDisplay $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareDisplayResponse|bool
     */
    public function GetFareDisplay(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareDisplay $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFareDisplay($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTax
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTax $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxResponse|bool
     */
    public function GetTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTax $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTax($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBoardingDetails
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetBoardingDetails $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetBoardingDetailsResponse|bool
     */
    public function GetBoardingDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetBoardingDetails $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBoardingDetails($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPaymentMethods
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPaymentMethods $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPaymentMethodsResponse|bool
     */
    public function GetPaymentMethods(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPaymentMethods $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPaymentMethods($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetStatus $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetStatusResponse|bool
     */
    public function GetStatus(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVersions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetVersions $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetVersionsResponse|bool
     */
    public function GetVersions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetVersions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetVersions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetRoutings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutings $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingsResponse|bool
     */
    public function GetRoutings(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetRoutings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMultiChannelQueryInformation
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetMultiChannelQueryInformation $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetMultiChannelQueryInformationResponse|bool
     */
    public function GetMultiChannelQueryInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetMultiChannelQueryInformation $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMultiChannelQueryInformation($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCalendarDisplay
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCalendarDisplay $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCalendarDisplayResponse|bool
     */
    public function GetCalendarDisplay(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCalendarDisplay $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCalendarDisplay($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSeatMaps
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSeatMaps $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSeatMapsResponse|bool
     */
    public function GetSeatMaps(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSeatMaps $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSeatMaps($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserConfigurationData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetUserConfigurationData $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetUserConfigurationDataResponse|bool
     */
    public function GetUserConfigurationData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetUserConfigurationData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserConfigurationData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTaxesAndFees
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxesAndFees $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxesAndFeesResponse|bool
     */
    public function GetTaxesAndFees(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxesAndFees $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTaxesAndFees($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPreferenceSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPreferenceSearch $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPreferenceSearchResponse|bool
     */
    public function GetPreferenceSearch(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPreferenceSearch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPreferenceSearch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEntryClients
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClients $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClientsResponse|bool
     */
    public function GetEntryClients(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClients $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetEntryClients($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFaresComplex
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplex $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplexResponse|bool
     */
    public function GetFaresComplex(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplex $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFaresComplex($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCorpCodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCorpCodes $parameters
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCorpCodesResponse|bool
     */
    public function GetCorpCodes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCorpCodes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCorpCodes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetAvailabilityResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetBoardingDetailsResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCalendarDisplayResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetCorpCodesResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetEntryClientsResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareDisplayResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFareQuoteResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresComplexResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFaresResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetFlightDetailsResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetMultiChannelQueryInformationResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPaymentMethodsResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetPreferenceSearchResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingInformationResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRoutingsResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetRuleInformationTextResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSeatMapsResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetStatusResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetSupplierResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxesAndFeesResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTaxResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTermsAndConditionsResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetTicketInformationResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetUserConfigurationDataResponse|\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\GetVersionsResponse
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
