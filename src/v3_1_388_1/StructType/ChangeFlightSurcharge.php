<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeFlightSurcharge StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ChangeFlightSurcharge
 * @subpackage Structs
 */
class ChangeFlightSurcharge extends AbstractStructBase
{
    /**
     * The Currency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Currency;
    /**
     * The Level
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Level;
    /**
     * The Relation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Relation;
    /**
     * Constructor method for ChangeFlightSurcharge
     * @uses ChangeFlightSurcharge::setCurrency()
     * @uses ChangeFlightSurcharge::setLevel()
     * @uses ChangeFlightSurcharge::setRelation()
     * @param string $currency
     * @param float $level
     * @param string $relation
     */
    public function __construct($currency = null, $level = null, $relation = null)
    {
        $this
            ->setCurrency($currency)
            ->setLevel($level)
            ->setRelation($relation);
    }
    /**
     * Get Currency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrency()
    {
        return isset($this->Currency) ? $this->Currency : null;
    }
    /**
     * Set Currency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currency)), __LINE__);
        }
        if (is_null($currency) || (is_array($currency) && empty($currency))) {
            unset($this->Currency);
        } else {
            $this->Currency = $currency;
        }
        return $this;
    }
    /**
     * Get Level value
     * @return float|null
     */
    public function getLevel()
    {
        return $this->Level;
    }
    /**
     * Set Level value
     * @param float $level
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge
     */
    public function setLevel($level = null)
    {
        $this->Level = $level;
        return $this;
    }
    /**
     * Get Relation value
     * @return string|null
     */
    public function getRelation()
    {
        return $this->Relation;
    }
    /**
     * Set Relation value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeRelationEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeRelationEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $relation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge
     */
    public function setRelation($relation = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeRelationEnum::valueIsValid($relation)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $relation, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SurchargeRelationEnum::getValidValues())), __LINE__);
        }
        $this->Relation = $relation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ChangeFlightSurcharge
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
