<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxDetail StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TaxDetail
 * @subpackage Structs
 */
class TaxDetail extends AbstractStructBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice
     */
    public $Price;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Type;
    /**
     * Constructor method for TaxDetail
     * @uses TaxDetail::setAction()
     * @uses TaxDetail::setPrice()
     * @uses TaxDetail::setType()
     * @param string $action
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price
     * @param string $type
     */
    public function __construct($action = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price = null, $type = null)
    {
        $this
            ->setAction($action)
            ->setPrice($price)
            ->setType($type);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaxOverrideAction::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaxOverrideAction::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaxOverrideAction::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaxOverrideAction::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Get Price value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice|null
     */
    public function getPrice()
    {
        return isset($this->Price) ? $this->Price : null;
    }
    /**
     * Set Price value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail
     */
    public function setPrice(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SharedPrice $price = null)
    {
        if (is_null($price) || (is_array($price) && empty($price))) {
            unset($this->Price);
        } else {
            $this->Price = $price;
        }
        return $this;
    }
    /**
     * Get Type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->Type) ? $this->Type : null;
    }
    /**
     * Set Type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->Type);
        } else {
            $this->Type = $type;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TaxDetail
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
