<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueryRuleData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QueryRuleData
 * @subpackage Structs
 */
class QueryRuleData extends BaseRuleData
{
    /**
     * The Actions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData
     */
    public $Actions;
    /**
     * The Exclude
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Exclude;
    /**
     * The SearchCriteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData
     */
    public $SearchCriteria;
    /**
     * Constructor method for QueryRuleData
     * @uses QueryRuleData::setActions()
     * @uses QueryRuleData::setExclude()
     * @uses QueryRuleData::setSearchCriteria()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData $actions
     * @param bool $exclude
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData $searchCriteria
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData $actions = null, $exclude = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData $searchCriteria = null)
    {
        $this
            ->setActions($actions)
            ->setExclude($exclude)
            ->setSearchCriteria($searchCriteria);
    }
    /**
     * Get Actions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData|null
     */
    public function getActions()
    {
        return isset($this->Actions) ? $this->Actions : null;
    }
    /**
     * Set Actions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData $actions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData
     */
    public function setActions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfQueryActionData $actions = null)
    {
        if (is_null($actions) || (is_array($actions) && empty($actions))) {
            unset($this->Actions);
        } else {
            $this->Actions = $actions;
        }
        return $this;
    }
    /**
     * Get Exclude value
     * @return bool|null
     */
    public function getExclude()
    {
        return $this->Exclude;
    }
    /**
     * Set Exclude value
     * @param bool $exclude
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData
     */
    public function setExclude($exclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($exclude) && !is_bool($exclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exclude)), __LINE__);
        }
        $this->Exclude = $exclude;
        return $this;
    }
    /**
     * Get SearchCriteria value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData|null
     */
    public function getSearchCriteria()
    {
        return isset($this->SearchCriteria) ? $this->SearchCriteria : null;
    }
    /**
     * Set SearchCriteria value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData $searchCriteria
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData
     */
    public function setSearchCriteria(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QuerySearchCriteriaData $searchCriteria = null)
    {
        if (is_null($searchCriteria) || (is_array($searchCriteria) && empty($searchCriteria))) {
            unset($this->SearchCriteria);
        } else {
            $this->SearchCriteria = $searchCriteria;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueryRuleData
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
