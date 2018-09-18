<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteResponsePassenger StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QuoteResponsePassenger
 * @subpackage Structs
 */
class QuoteResponsePassenger extends AbstractStructBase
{
    /**
     * The EquivalentMinimumSellingFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentMinimumSellingFarePrice;
    /**
     * The EquivalentNetFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentNetFarePrice;
    /**
     * The EquivalentPasFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentPasFarePrice;
    /**
     * The EquivalentPublishedFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentPublishedFarePrice;
    /**
     * The EquivalentQSurchargePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentQSurchargePrice;
    /**
     * The EquivalentStreetFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentStreetFarePrice;
    /**
     * The EquivalentTicketingFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTicketingFarePrice;
    /**
     * The EquivalentTotalTaxPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $EquivalentTotalTaxPrice;
    /**
     * The FareSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FareSubType;
    /**
     * The MinimumSellingFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $MinimumSellingFarePrice;
    /**
     * The NetFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $NetFarePrice;
    /**
     * The PasFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PasFarePrice;
    /**
     * The PassengerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerType;
    /**
     * The PublishedFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $PublishedFarePrice;
    /**
     * The QSurchargePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $QSurchargePrice;
    /**
     * The QuoteLink
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $QuoteLink;
    /**
     * The QuoteRequiresAdditionOfQSurcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $QuoteRequiresAdditionOfQSurcharge;
    /**
     * The QuoteResponseSurcharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge
     */
    public $QuoteResponseSurcharges;
    /**
     * The Segment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment
     */
    public $Segment;
    /**
     * The StreetFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $StreetFarePrice;
    /**
     * The TaxDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTax
     */
    public $TaxDetails;
    /**
     * The TicketData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket
     */
    public $TicketData;
    /**
     * The TicketingFarePrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TicketingFarePrice;
    /**
     * The TotalTaxPrice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $TotalTaxPrice;
    /**
     * Constructor method for QuoteResponsePassenger
     * @uses QuoteResponsePassenger::setEquivalentMinimumSellingFarePrice()
     * @uses QuoteResponsePassenger::setEquivalentNetFarePrice()
     * @uses QuoteResponsePassenger::setEquivalentPasFarePrice()
     * @uses QuoteResponsePassenger::setEquivalentPublishedFarePrice()
     * @uses QuoteResponsePassenger::setEquivalentQSurchargePrice()
     * @uses QuoteResponsePassenger::setEquivalentStreetFarePrice()
     * @uses QuoteResponsePassenger::setEquivalentTicketingFarePrice()
     * @uses QuoteResponsePassenger::setEquivalentTotalTaxPrice()
     * @uses QuoteResponsePassenger::setFareSubType()
     * @uses QuoteResponsePassenger::setMinimumSellingFarePrice()
     * @uses QuoteResponsePassenger::setNetFarePrice()
     * @uses QuoteResponsePassenger::setPasFarePrice()
     * @uses QuoteResponsePassenger::setPassengerType()
     * @uses QuoteResponsePassenger::setPublishedFarePrice()
     * @uses QuoteResponsePassenger::setQSurchargePrice()
     * @uses QuoteResponsePassenger::setQuoteLink()
     * @uses QuoteResponsePassenger::setQuoteRequiresAdditionOfQSurcharge()
     * @uses QuoteResponsePassenger::setQuoteResponseSurcharges()
     * @uses QuoteResponsePassenger::setSegment()
     * @uses QuoteResponsePassenger::setStreetFarePrice()
     * @uses QuoteResponsePassenger::setTaxDetails()
     * @uses QuoteResponsePassenger::setTicketData()
     * @uses QuoteResponsePassenger::setTicketingFarePrice()
     * @uses QuoteResponsePassenger::setTotalTaxPrice()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSellingFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentNetFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPasFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPublishedFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurchargePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentStreetFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTicketingFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTaxPrice
     * @param string $fareSubType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSellingFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pasFarePrice
     * @param string $passengerType
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurchargePrice
     * @param string $quoteLink
     * @param bool $quoteRequiresAdditionOfQSurcharge
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge $quoteResponseSurcharges
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment $segment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $streetFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTax $taxDetails
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket $ticketData
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketingFarePrice
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTaxPrice
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSellingFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentNetFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPasFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPublishedFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurchargePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentStreetFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTicketingFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTaxPrice = null, $fareSubType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSellingFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pasFarePrice = null, $passengerType = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurchargePrice = null, $quoteLink = null, $quoteRequiresAdditionOfQSurcharge = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge $quoteResponseSurcharges = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment $segment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $streetFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTax $taxDetails = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket $ticketData = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketingFarePrice = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTaxPrice = null)
    {
        $this
            ->setEquivalentMinimumSellingFarePrice($equivalentMinimumSellingFarePrice)
            ->setEquivalentNetFarePrice($equivalentNetFarePrice)
            ->setEquivalentPasFarePrice($equivalentPasFarePrice)
            ->setEquivalentPublishedFarePrice($equivalentPublishedFarePrice)
            ->setEquivalentQSurchargePrice($equivalentQSurchargePrice)
            ->setEquivalentStreetFarePrice($equivalentStreetFarePrice)
            ->setEquivalentTicketingFarePrice($equivalentTicketingFarePrice)
            ->setEquivalentTotalTaxPrice($equivalentTotalTaxPrice)
            ->setFareSubType($fareSubType)
            ->setMinimumSellingFarePrice($minimumSellingFarePrice)
            ->setNetFarePrice($netFarePrice)
            ->setPasFarePrice($pasFarePrice)
            ->setPassengerType($passengerType)
            ->setPublishedFarePrice($publishedFarePrice)
            ->setQSurchargePrice($qSurchargePrice)
            ->setQuoteLink($quoteLink)
            ->setQuoteRequiresAdditionOfQSurcharge($quoteRequiresAdditionOfQSurcharge)
            ->setQuoteResponseSurcharges($quoteResponseSurcharges)
            ->setSegment($segment)
            ->setStreetFarePrice($streetFarePrice)
            ->setTaxDetails($taxDetails)
            ->setTicketData($ticketData)
            ->setTicketingFarePrice($ticketingFarePrice)
            ->setTotalTaxPrice($totalTaxPrice);
    }
    /**
     * Get EquivalentMinimumSellingFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentMinimumSellingFarePrice()
    {
        return isset($this->EquivalentMinimumSellingFarePrice) ? $this->EquivalentMinimumSellingFarePrice : null;
    }
    /**
     * Set EquivalentMinimumSellingFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSellingFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentMinimumSellingFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentMinimumSellingFarePrice = null)
    {
        if (is_null($equivalentMinimumSellingFarePrice) || (is_array($equivalentMinimumSellingFarePrice) && empty($equivalentMinimumSellingFarePrice))) {
            unset($this->EquivalentMinimumSellingFarePrice);
        } else {
            $this->EquivalentMinimumSellingFarePrice = $equivalentMinimumSellingFarePrice;
        }
        return $this;
    }
    /**
     * Get EquivalentNetFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentNetFarePrice()
    {
        return isset($this->EquivalentNetFarePrice) ? $this->EquivalentNetFarePrice : null;
    }
    /**
     * Set EquivalentNetFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentNetFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentNetFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentNetFarePrice = null)
    {
        if (is_null($equivalentNetFarePrice) || (is_array($equivalentNetFarePrice) && empty($equivalentNetFarePrice))) {
            unset($this->EquivalentNetFarePrice);
        } else {
            $this->EquivalentNetFarePrice = $equivalentNetFarePrice;
        }
        return $this;
    }
    /**
     * Get EquivalentPasFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentPasFarePrice()
    {
        return isset($this->EquivalentPasFarePrice) ? $this->EquivalentPasFarePrice : null;
    }
    /**
     * Set EquivalentPasFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPasFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentPasFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPasFarePrice = null)
    {
        if (is_null($equivalentPasFarePrice) || (is_array($equivalentPasFarePrice) && empty($equivalentPasFarePrice))) {
            unset($this->EquivalentPasFarePrice);
        } else {
            $this->EquivalentPasFarePrice = $equivalentPasFarePrice;
        }
        return $this;
    }
    /**
     * Get EquivalentPublishedFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentPublishedFarePrice()
    {
        return isset($this->EquivalentPublishedFarePrice) ? $this->EquivalentPublishedFarePrice : null;
    }
    /**
     * Set EquivalentPublishedFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPublishedFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentPublishedFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentPublishedFarePrice = null)
    {
        if (is_null($equivalentPublishedFarePrice) || (is_array($equivalentPublishedFarePrice) && empty($equivalentPublishedFarePrice))) {
            unset($this->EquivalentPublishedFarePrice);
        } else {
            $this->EquivalentPublishedFarePrice = $equivalentPublishedFarePrice;
        }
        return $this;
    }
    /**
     * Get EquivalentQSurchargePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentQSurchargePrice()
    {
        return isset($this->EquivalentQSurchargePrice) ? $this->EquivalentQSurchargePrice : null;
    }
    /**
     * Set EquivalentQSurchargePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurchargePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentQSurchargePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentQSurchargePrice = null)
    {
        if (is_null($equivalentQSurchargePrice) || (is_array($equivalentQSurchargePrice) && empty($equivalentQSurchargePrice))) {
            unset($this->EquivalentQSurchargePrice);
        } else {
            $this->EquivalentQSurchargePrice = $equivalentQSurchargePrice;
        }
        return $this;
    }
    /**
     * Get EquivalentStreetFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentStreetFarePrice()
    {
        return isset($this->EquivalentStreetFarePrice) ? $this->EquivalentStreetFarePrice : null;
    }
    /**
     * Set EquivalentStreetFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentStreetFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentStreetFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentStreetFarePrice = null)
    {
        if (is_null($equivalentStreetFarePrice) || (is_array($equivalentStreetFarePrice) && empty($equivalentStreetFarePrice))) {
            unset($this->EquivalentStreetFarePrice);
        } else {
            $this->EquivalentStreetFarePrice = $equivalentStreetFarePrice;
        }
        return $this;
    }
    /**
     * Get EquivalentTicketingFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTicketingFarePrice()
    {
        return isset($this->EquivalentTicketingFarePrice) ? $this->EquivalentTicketingFarePrice : null;
    }
    /**
     * Set EquivalentTicketingFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTicketingFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentTicketingFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTicketingFarePrice = null)
    {
        if (is_null($equivalentTicketingFarePrice) || (is_array($equivalentTicketingFarePrice) && empty($equivalentTicketingFarePrice))) {
            unset($this->EquivalentTicketingFarePrice);
        } else {
            $this->EquivalentTicketingFarePrice = $equivalentTicketingFarePrice;
        }
        return $this;
    }
    /**
     * Get EquivalentTotalTaxPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getEquivalentTotalTaxPrice()
    {
        return isset($this->EquivalentTotalTaxPrice) ? $this->EquivalentTotalTaxPrice : null;
    }
    /**
     * Set EquivalentTotalTaxPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTaxPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setEquivalentTotalTaxPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $equivalentTotalTaxPrice = null)
    {
        if (is_null($equivalentTotalTaxPrice) || (is_array($equivalentTotalTaxPrice) && empty($equivalentTotalTaxPrice))) {
            unset($this->EquivalentTotalTaxPrice);
        } else {
            $this->EquivalentTotalTaxPrice = $equivalentTotalTaxPrice;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
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
     * Get MinimumSellingFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getMinimumSellingFarePrice()
    {
        return isset($this->MinimumSellingFarePrice) ? $this->MinimumSellingFarePrice : null;
    }
    /**
     * Set MinimumSellingFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSellingFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setMinimumSellingFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $minimumSellingFarePrice = null)
    {
        if (is_null($minimumSellingFarePrice) || (is_array($minimumSellingFarePrice) && empty($minimumSellingFarePrice))) {
            unset($this->MinimumSellingFarePrice);
        } else {
            $this->MinimumSellingFarePrice = $minimumSellingFarePrice;
        }
        return $this;
    }
    /**
     * Get NetFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getNetFarePrice()
    {
        return isset($this->NetFarePrice) ? $this->NetFarePrice : null;
    }
    /**
     * Set NetFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setNetFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $netFarePrice = null)
    {
        if (is_null($netFarePrice) || (is_array($netFarePrice) && empty($netFarePrice))) {
            unset($this->NetFarePrice);
        } else {
            $this->NetFarePrice = $netFarePrice;
        }
        return $this;
    }
    /**
     * Get PasFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPasFarePrice()
    {
        return isset($this->PasFarePrice) ? $this->PasFarePrice : null;
    }
    /**
     * Set PasFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pasFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setPasFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $pasFarePrice = null)
    {
        if (is_null($pasFarePrice) || (is_array($pasFarePrice) && empty($pasFarePrice))) {
            unset($this->PasFarePrice);
        } else {
            $this->PasFarePrice = $pasFarePrice;
        }
        return $this;
    }
    /**
     * Get PassengerType value
     * @return string|null
     */
    public function getPassengerType()
    {
        return $this->PassengerType;
    }
    /**
     * Set PassengerType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $passengerType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setPassengerType($passengerType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::valueIsValid($passengerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $passengerType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\PassengerTypeEnum::getValidValues())), __LINE__);
        }
        $this->PassengerType = $passengerType;
        return $this;
    }
    /**
     * Get PublishedFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPublishedFarePrice()
    {
        return isset($this->PublishedFarePrice) ? $this->PublishedFarePrice : null;
    }
    /**
     * Set PublishedFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setPublishedFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $publishedFarePrice = null)
    {
        if (is_null($publishedFarePrice) || (is_array($publishedFarePrice) && empty($publishedFarePrice))) {
            unset($this->PublishedFarePrice);
        } else {
            $this->PublishedFarePrice = $publishedFarePrice;
        }
        return $this;
    }
    /**
     * Get QSurchargePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getQSurchargePrice()
    {
        return isset($this->QSurchargePrice) ? $this->QSurchargePrice : null;
    }
    /**
     * Set QSurchargePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurchargePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setQSurchargePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $qSurchargePrice = null)
    {
        if (is_null($qSurchargePrice) || (is_array($qSurchargePrice) && empty($qSurchargePrice))) {
            unset($this->QSurchargePrice);
        } else {
            $this->QSurchargePrice = $qSurchargePrice;
        }
        return $this;
    }
    /**
     * Get QuoteLink value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQuoteLink()
    {
        return isset($this->QuoteLink) ? $this->QuoteLink : null;
    }
    /**
     * Set QuoteLink value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $quoteLink
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setQuoteLink($quoteLink = null)
    {
        // validation for constraint: string
        if (!is_null($quoteLink) && !is_string($quoteLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteLink)), __LINE__);
        }
        if (is_null($quoteLink) || (is_array($quoteLink) && empty($quoteLink))) {
            unset($this->QuoteLink);
        } else {
            $this->QuoteLink = $quoteLink;
        }
        return $this;
    }
    /**
     * Get QuoteRequiresAdditionOfQSurcharge value
     * @return bool|null
     */
    public function getQuoteRequiresAdditionOfQSurcharge()
    {
        return $this->QuoteRequiresAdditionOfQSurcharge;
    }
    /**
     * Set QuoteRequiresAdditionOfQSurcharge value
     * @param bool $quoteRequiresAdditionOfQSurcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setQuoteRequiresAdditionOfQSurcharge($quoteRequiresAdditionOfQSurcharge = null)
    {
        // validation for constraint: boolean
        if (!is_null($quoteRequiresAdditionOfQSurcharge) && !is_bool($quoteRequiresAdditionOfQSurcharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($quoteRequiresAdditionOfQSurcharge)), __LINE__);
        }
        $this->QuoteRequiresAdditionOfQSurcharge = $quoteRequiresAdditionOfQSurcharge;
        return $this;
    }
    /**
     * Get QuoteResponseSurcharges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge|null
     */
    public function getQuoteResponseSurcharges()
    {
        return isset($this->QuoteResponseSurcharges) ? $this->QuoteResponseSurcharges : null;
    }
    /**
     * Set QuoteResponseSurcharges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge $quoteResponseSurcharges
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setQuoteResponseSurcharges(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSurcharge $quoteResponseSurcharges = null)
    {
        if (is_null($quoteResponseSurcharges) || (is_array($quoteResponseSurcharges) && empty($quoteResponseSurcharges))) {
            unset($this->QuoteResponseSurcharges);
        } else {
            $this->QuoteResponseSurcharges = $quoteResponseSurcharges;
        }
        return $this;
    }
    /**
     * Get Segment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment|null
     */
    public function getSegment()
    {
        return isset($this->Segment) ? $this->Segment : null;
    }
    /**
     * Set Segment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment $segment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setSegment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteResponseSegment $segment = null)
    {
        if (is_null($segment) || (is_array($segment) && empty($segment))) {
            unset($this->Segment);
        } else {
            $this->Segment = $segment;
        }
        return $this;
    }
    /**
     * Get StreetFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getStreetFarePrice()
    {
        return isset($this->StreetFarePrice) ? $this->StreetFarePrice : null;
    }
    /**
     * Set StreetFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $streetFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setStreetFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $streetFarePrice = null)
    {
        if (is_null($streetFarePrice) || (is_array($streetFarePrice) && empty($streetFarePrice))) {
            unset($this->StreetFarePrice);
        } else {
            $this->StreetFarePrice = $streetFarePrice;
        }
        return $this;
    }
    /**
     * Get TaxDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTax|null
     */
    public function getTaxDetails()
    {
        return isset($this->TaxDetails) ? $this->TaxDetails : null;
    }
    /**
     * Set TaxDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTax $taxDetails
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setTaxDetails(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQuoteTax $taxDetails = null)
    {
        if (is_null($taxDetails) || (is_array($taxDetails) && empty($taxDetails))) {
            unset($this->TaxDetails);
        } else {
            $this->TaxDetails = $taxDetails;
        }
        return $this;
    }
    /**
     * Get TicketData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket|null
     */
    public function getTicketData()
    {
        return isset($this->TicketData) ? $this->TicketData : null;
    }
    /**
     * Set TicketData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket $ticketData
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setTicketData(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponseTicket $ticketData = null)
    {
        if (is_null($ticketData) || (is_array($ticketData) && empty($ticketData))) {
            unset($this->TicketData);
        } else {
            $this->TicketData = $ticketData;
        }
        return $this;
    }
    /**
     * Get TicketingFarePrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTicketingFarePrice()
    {
        return isset($this->TicketingFarePrice) ? $this->TicketingFarePrice : null;
    }
    /**
     * Set TicketingFarePrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketingFarePrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setTicketingFarePrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $ticketingFarePrice = null)
    {
        if (is_null($ticketingFarePrice) || (is_array($ticketingFarePrice) && empty($ticketingFarePrice))) {
            unset($this->TicketingFarePrice);
        } else {
            $this->TicketingFarePrice = $ticketingFarePrice;
        }
        return $this;
    }
    /**
     * Get TotalTaxPrice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getTotalTaxPrice()
    {
        return isset($this->TotalTaxPrice) ? $this->TotalTaxPrice : null;
    }
    /**
     * Set TotalTaxPrice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTaxPrice
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
     */
    public function setTotalTaxPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $totalTaxPrice = null)
    {
        if (is_null($totalTaxPrice) || (is_array($totalTaxPrice) && empty($totalTaxPrice))) {
            unset($this->TotalTaxPrice);
        } else {
            $this->TotalTaxPrice = $totalTaxPrice;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuoteResponsePassenger
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
