<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketBookingRequestCommission StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketBookingRequestCommission
 * @subpackage Structs
 */
class TicketBookingRequestCommission extends AbstractStructBase
{
    /**
     * The Amount
     * @var float
     */
    public $Amount;
    /**
     * The OverwriteIfElementsExist
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OverwriteIfElementsExist;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for TicketBookingRequestCommission
     * @uses TicketBookingRequestCommission::setAmount()
     * @uses TicketBookingRequestCommission::setOverwriteIfElementsExist()
     * @uses TicketBookingRequestCommission::setType()
     * @param float $amount
     * @param bool $overwriteIfElementsExist
     * @param string $type
     */
    public function __construct($amount = null, $overwriteIfElementsExist = null, $type = null)
    {
        $this
            ->setAmount($amount)
            ->setOverwriteIfElementsExist($overwriteIfElementsExist)
            ->setType($type);
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get OverwriteIfElementsExist value
     * @return bool|null
     */
    public function getOverwriteIfElementsExist()
    {
        return $this->OverwriteIfElementsExist;
    }
    /**
     * Set OverwriteIfElementsExist value
     * @param bool $overwriteIfElementsExist
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission
     */
    public function setOverwriteIfElementsExist($overwriteIfElementsExist = null)
    {
        // validation for constraint: boolean
        if (!is_null($overwriteIfElementsExist) && !is_bool($overwriteIfElementsExist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overwriteIfElementsExist)), __LINE__);
        }
        $this->OverwriteIfElementsExist = $overwriteIfElementsExist;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommissionTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommissionTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommissionTypeEnum::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\CommissionTypeEnum::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketBookingRequestCommission
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
