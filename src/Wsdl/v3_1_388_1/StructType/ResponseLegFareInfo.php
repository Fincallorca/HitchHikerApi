<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseLegFareInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ResponseLegFareInfo
 * @subpackage Structs
 */
class ResponseLegFareInfo extends AbstractStructBase
{
    /**
     * The Rule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule
     */
    public $Rule;
    /**
     * The Ticket
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseTicket
     */
    public $Ticket;
    /**
     * Constructor method for ResponseLegFareInfo
     * @uses ResponseLegFareInfo::setRule()
     * @uses ResponseLegFareInfo::setTicket()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule $rule
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseTicket $ticket
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule $rule = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseTicket $ticket = null)
    {
        $this
            ->setRule($rule)
            ->setTicket($ticket);
    }
    /**
     * Get Rule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule|null
     */
    public function getRule()
    {
        return isset($this->Rule) ? $this->Rule : null;
    }
    /**
     * Set Rule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule $rule
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo
     */
    public function setRule(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseRule $rule = null)
    {
        if (is_null($rule) || (is_array($rule) && empty($rule))) {
            unset($this->Rule);
        } else {
            $this->Rule = $rule;
        }
        return $this;
    }
    /**
     * Get Ticket value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseTicket|null
     */
    public function getTicket()
    {
        return isset($this->Ticket) ? $this->Ticket : null;
    }
    /**
     * Set Ticket value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseTicket $ticket
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo
     */
    public function setTicket(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseTicket $ticket = null)
    {
        if (is_null($ticket) || (is_array($ticket) && empty($ticket))) {
            unset($this->Ticket);
        } else {
            $this->Ticket = $ticket;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseLegFareInfo
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
