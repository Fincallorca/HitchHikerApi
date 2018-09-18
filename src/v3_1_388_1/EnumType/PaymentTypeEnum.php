<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType;

/**
 * This class stands for PaymentTypeEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PaymentTypeEnum
 * @subpackage Enumerations
 */
class PaymentTypeEnum
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CreditCard'
     * @return string 'CreditCard'
     */
    const VALUE_CREDIT_CARD = 'CreditCard';
    /**
     * Constant for value 'ElectronicBanking'
     * @return string 'ElectronicBanking'
     */
    const VALUE_ELECTRONIC_BANKING = 'ElectronicBanking';
    /**
     * Constant for value 'AgencyInkasso'
     * @return string 'AgencyInkasso'
     */
    const VALUE_AGENCY_INKASSO = 'AgencyInkasso';
    /**
     * Constant for value 'AgencyDebit'
     * @return string 'AgencyDebit'
     */
    const VALUE_AGENCY_DEBIT = 'AgencyDebit';
    /**
     * Constant for value 'Cash'
     * @return string 'Cash'
     */
    const VALUE_CASH = 'Cash';
    /**
     * Constant for value 'Check'
     * @return string 'Check'
     */
    const VALUE_CHECK = 'Check';
    /**
     * Constant for value 'Invoice'
     * @return string 'Invoice'
     */
    const VALUE_INVOICE = 'Invoice';
    /**
     * Constant for value 'eNett'
     * @return string 'eNett'
     */
    const VALUE_E_NETT = 'eNett';
    /**
     * Constant for value 'Refundable'
     * @return string 'Refundable'
     */
    const VALUE_REFUNDABLE = 'Refundable';
    /**
     * Constant for value 'NonRefundable'
     * @return string 'NonRefundable'
     */
    const VALUE_NON_REFUNDABLE = 'NonRefundable';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CREDIT_CARD
     * @uses self::VALUE_ELECTRONIC_BANKING
     * @uses self::VALUE_AGENCY_INKASSO
     * @uses self::VALUE_AGENCY_DEBIT
     * @uses self::VALUE_CASH
     * @uses self::VALUE_CHECK
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_E_NETT
     * @uses self::VALUE_REFUNDABLE
     * @uses self::VALUE_NON_REFUNDABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_CREDIT_CARD,
            self::VALUE_ELECTRONIC_BANKING,
            self::VALUE_AGENCY_INKASSO,
            self::VALUE_AGENCY_DEBIT,
            self::VALUE_CASH,
            self::VALUE_CHECK,
            self::VALUE_INVOICE,
            self::VALUE_E_NETT,
            self::VALUE_REFUNDABLE,
            self::VALUE_NON_REFUNDABLE,
        );
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
