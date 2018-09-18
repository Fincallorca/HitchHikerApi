<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareResponsePassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FareResponsePassenger
 * @subpackage Structs
 */
class FareResponsePassenger extends AbstractStructBase
{
    /**
     * The AgencyBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $AgencyBuy;
    /**
     * The AgencySell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $AgencySell;
    /**
     * The AirlineSell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $AirlineSell;
    /**
     * The BrokerBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $BrokerBuy;
    /**
     * The BrokerSell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $BrokerSell;
    /**
     * The CalcType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CalcType;
    /**
     * The CalculationGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CalculationGroup;
    /**
     * The CalculationRule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CalculationRule;
    /**
     * The DetailedTaxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail
     */
    public $DetailedTaxes;
    /**
     * The ElectronicTicket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseETicket
     */
    public $ElectronicTicket;
    /**
     * The EndconsumerBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EndconsumerBuy;
    /**
     * The EquivalentAgencyBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentAgencyBuy;
    /**
     * The EquivalentAgencySell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentAgencySell;
    /**
     * The EquivalentAirlineSell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentAirlineSell;
    /**
     * The EquivalentBrokerBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentBrokerBuy;
    /**
     * The EquivalentBrokerSell
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentBrokerSell;
    /**
     * The EquivalentEndconsumerBuy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentEndconsumerBuy;
    /**
     * The EquivalentQSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentQSurcharge;
    /**
     * The EquivalentServiceFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentServiceFee;
    /**
     * The EquivalentTotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalTax;
    /**
     * The FareSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareSubType;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FareType;
    /**
     * The FareTypeDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData
     */
    public $FareTypeDetails;
    /**
     * The HasServiceFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasServiceFee;
    /**
     * The PaperTicket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePTicket
     */
    public $PaperTicket;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PassengerType;
    /**
     * The PassengerTypeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerTypeName;
    /**
     * The QSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $QSurcharge;
    /**
     * The SegmentReferences
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $SegmentReferences;
    /**
     * The ServiceFee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $ServiceFee;
    /**
     * The TotalTax
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalTax;
    /**
     * Constructor method for FareResponsePassenger
     * @uses FareResponsePassenger::setAgencyBuy()
     * @uses FareResponsePassenger::setAgencySell()
     * @uses FareResponsePassenger::setAirlineSell()
     * @uses FareResponsePassenger::setBrokerBuy()
     * @uses FareResponsePassenger::setBrokerSell()
     * @uses FareResponsePassenger::setCalcType()
     * @uses FareResponsePassenger::setCalculationGroup()
     * @uses FareResponsePassenger::setCalculationRule()
     * @uses FareResponsePassenger::setDetailedTaxes()
     * @uses FareResponsePassenger::setElectronicTicket()
     * @uses FareResponsePassenger::setEndconsumerBuy()
     * @uses FareResponsePassenger::setEquivalentAgencyBuy()
     * @uses FareResponsePassenger::setEquivalentAgencySell()
     * @uses FareResponsePassenger::setEquivalentAirlineSell()
     * @uses FareResponsePassenger::setEquivalentBrokerBuy()
     * @uses FareResponsePassenger::setEquivalentBrokerSell()
     * @uses FareResponsePassenger::setEquivalentEndconsumerBuy()
     * @uses FareResponsePassenger::setEquivalentQSurcharge()
     * @uses FareResponsePassenger::setEquivalentServiceFee()
     * @uses FareResponsePassenger::setEquivalentTotalTax()
     * @uses FareResponsePassenger::setFareSubType()
     * @uses FareResponsePassenger::setFareType()
     * @uses FareResponsePassenger::setFareTypeDetails()
     * @uses FareResponsePassenger::setHasServiceFee()
     * @uses FareResponsePassenger::setPaperTicket()
     * @uses FareResponsePassenger::setPassengerType()
     * @uses FareResponsePassenger::setPassengerTypeName()
     * @uses FareResponsePassenger::setQSurcharge()
     * @uses FareResponsePassenger::setSegmentReferences()
     * @uses FareResponsePassenger::setServiceFee()
     * @uses FareResponsePassenger::setTotalTax()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencyBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencySell
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerSell
     * @param int $calcType
     * @param string $calculationGroup
     * @param string $calculationRule
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseETicket $electronicTicket
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencyBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencySell
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerSell
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax
     * @param string $fareSubType
     * @param string $fareType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails
     * @param bool $hasServiceFee
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePTicket $paperTicket
     * @param string $passengerType
     * @param string $passengerTypeName
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentReferences
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencyBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencySell = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerSell = null, $calcType = null, $calculationGroup = null, $calculationRule = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseETicket $electronicTicket = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencyBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencySell = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerSell = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax = null, $fareSubType = null, $fareType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails = null, $hasServiceFee = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePTicket $paperTicket = null, $passengerType = null, $passengerTypeName = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentReferences = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        $this
            ->setAgencyBuy($agencyBuy)
            ->setAgencySell($agencySell)
            ->setAirlineSell($airlineSell)
            ->setBrokerBuy($brokerBuy)
            ->setBrokerSell($brokerSell)
            ->setCalcType($calcType)
            ->setCalculationGroup($calculationGroup)
            ->setCalculationRule($calculationRule)
            ->setDetailedTaxes($detailedTaxes)
            ->setElectronicTicket($electronicTicket)
            ->setEndconsumerBuy($endconsumerBuy)
            ->setEquivalentAgencyBuy($equivalentAgencyBuy)
            ->setEquivalentAgencySell($equivalentAgencySell)
            ->setEquivalentAirlineSell($equivalentAirlineSell)
            ->setEquivalentBrokerBuy($equivalentBrokerBuy)
            ->setEquivalentBrokerSell($equivalentBrokerSell)
            ->setEquivalentEndconsumerBuy($equivalentEndconsumerBuy)
            ->setEquivalentQSurcharge($equivalentQSurcharge)
            ->setEquivalentServiceFee($equivalentServiceFee)
            ->setEquivalentTotalTax($equivalentTotalTax)
            ->setFareSubType($fareSubType)
            ->setFareType($fareType)
            ->setFareTypeDetails($fareTypeDetails)
            ->setHasServiceFee($hasServiceFee)
            ->setPaperTicket($paperTicket)
            ->setPassengerType($passengerType)
            ->setPassengerTypeName($passengerTypeName)
            ->setQSurcharge($qSurcharge)
            ->setSegmentReferences($segmentReferences)
            ->setServiceFee($serviceFee)
            ->setTotalTax($totalTax);
    }
    /**
     * Get AgencyBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getAgencyBuy()
    {
        return isset($this->AgencyBuy) ? $this->AgencyBuy : null;
    }
    /**
     * Set AgencyBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencyBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setAgencyBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencyBuy = null)
    {
        if (is_null($agencyBuy) || (is_array($agencyBuy) && empty($agencyBuy))) {
            unset($this->AgencyBuy);
        } else {
            $this->AgencyBuy = $agencyBuy;
        }
        return $this;
    }
    /**
     * Get AgencySell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getAgencySell()
    {
        return isset($this->AgencySell) ? $this->AgencySell : null;
    }
    /**
     * Set AgencySell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencySell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setAgencySell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $agencySell = null)
    {
        if (is_null($agencySell) || (is_array($agencySell) && empty($agencySell))) {
            unset($this->AgencySell);
        } else {
            $this->AgencySell = $agencySell;
        }
        return $this;
    }
    /**
     * Get AirlineSell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getAirlineSell()
    {
        return isset($this->AirlineSell) ? $this->AirlineSell : null;
    }
    /**
     * Set AirlineSell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setAirlineSell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $airlineSell = null)
    {
        if (is_null($airlineSell) || (is_array($airlineSell) && empty($airlineSell))) {
            unset($this->AirlineSell);
        } else {
            $this->AirlineSell = $airlineSell;
        }
        return $this;
    }
    /**
     * Get BrokerBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getBrokerBuy()
    {
        return isset($this->BrokerBuy) ? $this->BrokerBuy : null;
    }
    /**
     * Set BrokerBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setBrokerBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerBuy = null)
    {
        if (is_null($brokerBuy) || (is_array($brokerBuy) && empty($brokerBuy))) {
            unset($this->BrokerBuy);
        } else {
            $this->BrokerBuy = $brokerBuy;
        }
        return $this;
    }
    /**
     * Get BrokerSell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getBrokerSell()
    {
        return isset($this->BrokerSell) ? $this->BrokerSell : null;
    }
    /**
     * Set BrokerSell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerSell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setBrokerSell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $brokerSell = null)
    {
        if (is_null($brokerSell) || (is_array($brokerSell) && empty($brokerSell))) {
            unset($this->BrokerSell);
        } else {
            $this->BrokerSell = $brokerSell;
        }
        return $this;
    }
    /**
     * Get CalcType value
     * @return int|null
     */
    public function getCalcType()
    {
        return $this->CalcType;
    }
    /**
     * Set CalcType value
     * @param int $calcType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setCalcType($calcType = null)
    {
        // validation for constraint: int
        if (!is_null($calcType) && !is_numeric($calcType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($calcType)), __LINE__);
        }
        $this->CalcType = $calcType;
        return $this;
    }
    /**
     * Get CalculationGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalculationGroup()
    {
        return isset($this->CalculationGroup) ? $this->CalculationGroup : null;
    }
    /**
     * Set CalculationGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calculationGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setCalculationGroup($calculationGroup = null)
    {
        // validation for constraint: string
        if (!is_null($calculationGroup) && !is_string($calculationGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calculationGroup)), __LINE__);
        }
        if (is_null($calculationGroup) || (is_array($calculationGroup) && empty($calculationGroup))) {
            unset($this->CalculationGroup);
        } else {
            $this->CalculationGroup = $calculationGroup;
        }
        return $this;
    }
    /**
     * Get CalculationRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCalculationRule()
    {
        return isset($this->CalculationRule) ? $this->CalculationRule : null;
    }
    /**
     * Set CalculationRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $calculationRule
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setCalculationRule($calculationRule = null)
    {
        // validation for constraint: string
        if (!is_null($calculationRule) && !is_string($calculationRule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($calculationRule)), __LINE__);
        }
        if (is_null($calculationRule) || (is_array($calculationRule) && empty($calculationRule))) {
            unset($this->CalculationRule);
        } else {
            $this->CalculationRule = $calculationRule;
        }
        return $this;
    }
    /**
     * Get DetailedTaxes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail|null
     */
    public function getDetailedTaxes()
    {
        return isset($this->DetailedTaxes) ? $this->DetailedTaxes : null;
    }
    /**
     * Set DetailedTaxes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setDetailedTaxes(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfTaxDetail $detailedTaxes = null)
    {
        if (is_null($detailedTaxes) || (is_array($detailedTaxes) && empty($detailedTaxes))) {
            unset($this->DetailedTaxes);
        } else {
            $this->DetailedTaxes = $detailedTaxes;
        }
        return $this;
    }
    /**
     * Get ElectronicTicket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseETicket|null
     */
    public function getElectronicTicket()
    {
        return isset($this->ElectronicTicket) ? $this->ElectronicTicket : null;
    }
    /**
     * Set ElectronicTicket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseETicket $electronicTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setElectronicTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponseETicket $electronicTicket = null)
    {
        if (is_null($electronicTicket) || (is_array($electronicTicket) && empty($electronicTicket))) {
            unset($this->ElectronicTicket);
        } else {
            $this->ElectronicTicket = $electronicTicket;
        }
        return $this;
    }
    /**
     * Get EndconsumerBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEndconsumerBuy()
    {
        return isset($this->EndconsumerBuy) ? $this->EndconsumerBuy : null;
    }
    /**
     * Set EndconsumerBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEndconsumerBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $endconsumerBuy = null)
    {
        if (is_null($endconsumerBuy) || (is_array($endconsumerBuy) && empty($endconsumerBuy))) {
            unset($this->EndconsumerBuy);
        } else {
            $this->EndconsumerBuy = $endconsumerBuy;
        }
        return $this;
    }
    /**
     * Get EquivalentAgencyBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentAgencyBuy()
    {
        return isset($this->EquivalentAgencyBuy) ? $this->EquivalentAgencyBuy : null;
    }
    /**
     * Set EquivalentAgencyBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencyBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentAgencyBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencyBuy = null)
    {
        if (is_null($equivalentAgencyBuy) || (is_array($equivalentAgencyBuy) && empty($equivalentAgencyBuy))) {
            unset($this->EquivalentAgencyBuy);
        } else {
            $this->EquivalentAgencyBuy = $equivalentAgencyBuy;
        }
        return $this;
    }
    /**
     * Get EquivalentAgencySell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentAgencySell()
    {
        return isset($this->EquivalentAgencySell) ? $this->EquivalentAgencySell : null;
    }
    /**
     * Set EquivalentAgencySell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencySell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentAgencySell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAgencySell = null)
    {
        if (is_null($equivalentAgencySell) || (is_array($equivalentAgencySell) && empty($equivalentAgencySell))) {
            unset($this->EquivalentAgencySell);
        } else {
            $this->EquivalentAgencySell = $equivalentAgencySell;
        }
        return $this;
    }
    /**
     * Get EquivalentAirlineSell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentAirlineSell()
    {
        return isset($this->EquivalentAirlineSell) ? $this->EquivalentAirlineSell : null;
    }
    /**
     * Set EquivalentAirlineSell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentAirlineSell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentAirlineSell = null)
    {
        if (is_null($equivalentAirlineSell) || (is_array($equivalentAirlineSell) && empty($equivalentAirlineSell))) {
            unset($this->EquivalentAirlineSell);
        } else {
            $this->EquivalentAirlineSell = $equivalentAirlineSell;
        }
        return $this;
    }
    /**
     * Get EquivalentBrokerBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentBrokerBuy()
    {
        return isset($this->EquivalentBrokerBuy) ? $this->EquivalentBrokerBuy : null;
    }
    /**
     * Set EquivalentBrokerBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentBrokerBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerBuy = null)
    {
        if (is_null($equivalentBrokerBuy) || (is_array($equivalentBrokerBuy) && empty($equivalentBrokerBuy))) {
            unset($this->EquivalentBrokerBuy);
        } else {
            $this->EquivalentBrokerBuy = $equivalentBrokerBuy;
        }
        return $this;
    }
    /**
     * Get EquivalentBrokerSell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentBrokerSell()
    {
        return isset($this->EquivalentBrokerSell) ? $this->EquivalentBrokerSell : null;
    }
    /**
     * Set EquivalentBrokerSell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerSell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentBrokerSell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentBrokerSell = null)
    {
        if (is_null($equivalentBrokerSell) || (is_array($equivalentBrokerSell) && empty($equivalentBrokerSell))) {
            unset($this->EquivalentBrokerSell);
        } else {
            $this->EquivalentBrokerSell = $equivalentBrokerSell;
        }
        return $this;
    }
    /**
     * Get EquivalentEndconsumerBuy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentEndconsumerBuy()
    {
        return isset($this->EquivalentEndconsumerBuy) ? $this->EquivalentEndconsumerBuy : null;
    }
    /**
     * Set EquivalentEndconsumerBuy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentEndconsumerBuy(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentEndconsumerBuy = null)
    {
        if (is_null($equivalentEndconsumerBuy) || (is_array($equivalentEndconsumerBuy) && empty($equivalentEndconsumerBuy))) {
            unset($this->EquivalentEndconsumerBuy);
        } else {
            $this->EquivalentEndconsumerBuy = $equivalentEndconsumerBuy;
        }
        return $this;
    }
    /**
     * Get EquivalentQSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentQSurcharge()
    {
        return isset($this->EquivalentQSurcharge) ? $this->EquivalentQSurcharge : null;
    }
    /**
     * Set EquivalentQSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentQSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurcharge = null)
    {
        if (is_null($equivalentQSurcharge) || (is_array($equivalentQSurcharge) && empty($equivalentQSurcharge))) {
            unset($this->EquivalentQSurcharge);
        } else {
            $this->EquivalentQSurcharge = $equivalentQSurcharge;
        }
        return $this;
    }
    /**
     * Get EquivalentServiceFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentServiceFee()
    {
        return isset($this->EquivalentServiceFee) ? $this->EquivalentServiceFee : null;
    }
    /**
     * Set EquivalentServiceFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentServiceFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentServiceFee = null)
    {
        if (is_null($equivalentServiceFee) || (is_array($equivalentServiceFee) && empty($equivalentServiceFee))) {
            unset($this->EquivalentServiceFee);
        } else {
            $this->EquivalentServiceFee = $equivalentServiceFee;
        }
        return $this;
    }
    /**
     * Get EquivalentTotalTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalTax()
    {
        return isset($this->EquivalentTotalTax) ? $this->EquivalentTotalTax : null;
    }
    /**
     * Set EquivalentTotalTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setEquivalentTotalTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTax = null)
    {
        if (is_null($equivalentTotalTax) || (is_array($equivalentTotalTax) && empty($equivalentTotalTax))) {
            unset($this->EquivalentTotalTax);
        } else {
            $this->EquivalentTotalTax = $equivalentTotalTax;
        }
        return $this;
    }
    /**
     * Get FareSubType value
     * @return string|null
     */
    public function getFareSubType()
    {
        return $this->FareSubType;
    }
    /**
     * Set FareSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fareSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setFareSubType($fareSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::valueIsValid($fareSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fareSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\FareSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->FareSubType = $fareSubType;
        return $this;
    }
    /**
     * Get FareType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFareType()
    {
        return isset($this->FareType) ? $this->FareType : null;
    }
    /**
     * Set FareType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fareType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareType)), __LINE__);
        }
        if (is_null($fareType) || (is_array($fareType) && empty($fareType))) {
            unset($this->FareType);
        } else {
            $this->FareType = $fareType;
        }
        return $this;
    }
    /**
     * Get FareTypeDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData|null
     */
    public function getFareTypeDetails()
    {
        return isset($this->FareTypeDetails) ? $this->FareTypeDetails : null;
    }
    /**
     * Set FareTypeDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setFareTypeDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareTypeData $fareTypeDetails = null)
    {
        if (is_null($fareTypeDetails) || (is_array($fareTypeDetails) && empty($fareTypeDetails))) {
            unset($this->FareTypeDetails);
        } else {
            $this->FareTypeDetails = $fareTypeDetails;
        }
        return $this;
    }
    /**
     * Get HasServiceFee value
     * @return bool|null
     */
    public function getHasServiceFee()
    {
        return $this->HasServiceFee;
    }
    /**
     * Set HasServiceFee value
     * @param bool $hasServiceFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setHasServiceFee($hasServiceFee = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasServiceFee) && !is_bool($hasServiceFee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasServiceFee)), __LINE__);
        }
        $this->HasServiceFee = $hasServiceFee;
        return $this;
    }
    /**
     * Get PaperTicket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePTicket|null
     */
    public function getPaperTicket()
    {
        return isset($this->PaperTicket) ? $this->PaperTicket : null;
    }
    /**
     * Set PaperTicket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePTicket $paperTicket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setPaperTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePTicket $paperTicket = null)
    {
        if (is_null($paperTicket) || (is_array($paperTicket) && empty($paperTicket))) {
            unset($this->PaperTicket);
        } else {
            $this->PaperTicket = $paperTicket;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassengerType()
    {
        return isset($this->PassengerType) ? $this->PassengerType : null;
    }
    /**
     * Set PassengerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: string
        if (!is_null($passengerType) && !is_string($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerType)), __LINE__);
        }
        if (is_null($passengerType) || (is_array($passengerType) && empty($passengerType))) {
            unset($this->PassengerType);
        } else {
            $this->PassengerType = $passengerType;
        }
        return $this;
    }
    /**
     * Get PassengerTypeName value
     * @return string|null
     */
    public function getPassengerTypeName()
    {
        return $this->PassengerTypeName;
    }
    /**
     * Set PassengerTypeName value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerTypeName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setPassengerTypeName($passengerTypeName = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerTypeName)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerTypeName, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerTypeName = $passengerTypeName;
        return $this;
    }
    /**
     * Get QSurcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getQSurcharge()
    {
        return isset($this->QSurcharge) ? $this->QSurcharge : null;
    }
    /**
     * Set QSurcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setQSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurcharge = null)
    {
        if (is_null($qSurcharge) || (is_array($qSurcharge) && empty($qSurcharge))) {
            unset($this->QSurcharge);
        } else {
            $this->QSurcharge = $qSurcharge;
        }
        return $this;
    }
    /**
     * Get SegmentReferences value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getSegmentReferences()
    {
        return isset($this->SegmentReferences) ? $this->SegmentReferences : null;
    }
    /**
     * Set SegmentReferences value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentReferences
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setSegmentReferences(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentReferences = null)
    {
        if (is_null($segmentReferences) || (is_array($segmentReferences) && empty($segmentReferences))) {
            unset($this->SegmentReferences);
        } else {
            $this->SegmentReferences = $segmentReferences;
        }
        return $this;
    }
    /**
     * Get ServiceFee value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getServiceFee()
    {
        return isset($this->ServiceFee) ? $this->ServiceFee : null;
    }
    /**
     * Set ServiceFee value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setServiceFee(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $serviceFee = null)
    {
        if (is_null($serviceFee) || (is_array($serviceFee) && empty($serviceFee))) {
            unset($this->ServiceFee);
        } else {
            $this->ServiceFee = $serviceFee;
        }
        return $this;
    }
    /**
     * Get TotalTax value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalTax()
    {
        return isset($this->TotalTax) ? $this->TotalTax : null;
    }
    /**
     * Set TotalTax value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
     */
    public function setTotalTax(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTax = null)
    {
        if (is_null($totalTax) || (is_array($totalTax) && empty($totalTax))) {
            unset($this->TotalTax);
        } else {
            $this->TotalTax = $totalTax;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\FareResponsePassenger
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
