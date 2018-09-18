<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseInformation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseInformation
 * @subpackage Structs
 */
class RuleResponseInformation extends AbstractStructBase
{
    /**
     * The EquivCurrency
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EquivCurrency;
    /**
     * The RecordSet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RecordSet;
    /**
     * The Rule
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule
     */
    public $Rule;
    /**
     * The Supplier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Supplier;
    /**
     * The SupplierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SupplierCode;
    /**
     * Constructor method for RuleResponseInformation
     * @uses RuleResponseInformation::setEquivCurrency()
     * @uses RuleResponseInformation::setRecordSet()
     * @uses RuleResponseInformation::setRule()
     * @uses RuleResponseInformation::setSupplier()
     * @uses RuleResponseInformation::setSupplierCode()
     * @param string $equivCurrency
     * @param string $recordSet
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule $rule
     * @param string $supplier
     * @param string $supplierCode
     */
    public function __construct($equivCurrency = null, $recordSet = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule $rule = null, $supplier = null, $supplierCode = null)
    {
        $this
            ->setEquivCurrency($equivCurrency)
            ->setRecordSet($recordSet)
            ->setRule($rule)
            ->setSupplier($supplier)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get EquivCurrency value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEquivCurrency()
    {
        return isset($this->EquivCurrency) ? $this->EquivCurrency : null;
    }
    /**
     * Set EquivCurrency value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $equivCurrency
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseInformation
     */
    public function setEquivCurrency($equivCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($equivCurrency) && !is_string($equivCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equivCurrency)), __LINE__);
        }
        if (is_null($equivCurrency) || (is_array($equivCurrency) && empty($equivCurrency))) {
            unset($this->EquivCurrency);
        } else {
            $this->EquivCurrency = $equivCurrency;
        }
        return $this;
    }
    /**
     * Get RecordSet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRecordSet()
    {
        return isset($this->RecordSet) ? $this->RecordSet : null;
    }
    /**
     * Set RecordSet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $recordSet
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseInformation
     */
    public function setRecordSet($recordSet = null)
    {
        // validation for constraint: string
        if (!is_null($recordSet) && !is_string($recordSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordSet)), __LINE__);
        }
        if (is_null($recordSet) || (is_array($recordSet) && empty($recordSet))) {
            unset($this->RecordSet);
        } else {
            $this->RecordSet = $recordSet;
        }
        return $this;
    }
    /**
     * Get Rule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule|null
     */
    public function getRule()
    {
        return isset($this->Rule) ? $this->Rule : null;
    }
    /**
     * Set Rule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule $rule
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseInformation
     */
    public function setRule(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfRuleResponseRule $rule = null)
    {
        if (is_null($rule) || (is_array($rule) && empty($rule))) {
            unset($this->Rule);
        } else {
            $this->Rule = $rule;
        }
        return $this;
    }
    /**
     * Get Supplier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSupplier()
    {
        return isset($this->Supplier) ? $this->Supplier : null;
    }
    /**
     * Set Supplier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $supplier
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseInformation
     */
    public function setSupplier($supplier = null)
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplier)), __LINE__);
        }
        if (is_null($supplier) || (is_array($supplier) && empty($supplier))) {
            unset($this->Supplier);
        } else {
            $this->Supplier = $supplier;
        }
        return $this;
    }
    /**
     * Get SupplierCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSupplierCode()
    {
        return isset($this->SupplierCode) ? $this->SupplierCode : null;
    }
    /**
     * Set SupplierCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $supplierCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseInformation
     */
    public function setSupplierCode($supplierCode = null)
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierCode)), __LINE__);
        }
        if (is_null($supplierCode) || (is_array($supplierCode) && empty($supplierCode))) {
            unset($this->SupplierCode);
        } else {
            $this->SupplierCode = $supplierCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseInformation
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
