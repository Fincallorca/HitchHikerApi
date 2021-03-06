<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessingRequestProcess StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessingRequestProcess
 * @subpackage Structs
 */
class ProcessingRequestProcess extends AbstractStructBase
{
    /**
     * The AdditionalActions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestAction
     */
    public $AdditionalActions;
    /**
     * The ID
     * @var int
     */
    public $ID;
    /**
     * The Mode
     * @var string
     */
    public $Mode;
    /**
     * The Rules
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestRule
     */
    public $Rules;
    /**
     * Constructor method for ProcessingRequestProcess
     * @uses ProcessingRequestProcess::setAdditionalActions()
     * @uses ProcessingRequestProcess::setID()
     * @uses ProcessingRequestProcess::setMode()
     * @uses ProcessingRequestProcess::setRules()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestAction $additionalActions
     * @param int $iD
     * @param string $mode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestRule $rules
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestAction $additionalActions = null, $iD = null, $mode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestRule $rules = null)
    {
        $this
            ->setAdditionalActions($additionalActions)
            ->setID($iD)
            ->setMode($mode)
            ->setRules($rules);
    }
    /**
     * Get AdditionalActions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestAction|null
     */
    public function getAdditionalActions()
    {
        return isset($this->AdditionalActions) ? $this->AdditionalActions : null;
    }
    /**
     * Set AdditionalActions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestAction $additionalActions
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestProcess
     */
    public function setAdditionalActions(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestAction $additionalActions = null)
    {
        if (is_null($additionalActions) || (is_array($additionalActions) && empty($additionalActions))) {
            unset($this->AdditionalActions);
        } else {
            $this->AdditionalActions = $additionalActions;
        }
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestProcess
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !is_numeric($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Mode value
     * @return string|null
     */
    public function getMode()
    {
        return $this->Mode;
    }
    /**
     * Set Mode value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ProcessModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ProcessModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestProcess
     */
    public function setMode($mode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ProcessModeEnum::valueIsValid($mode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\ProcessModeEnum::getValidValues())), __LINE__);
        }
        $this->Mode = $mode;
        return $this;
    }
    /**
     * Get Rules value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestRule|null
     */
    public function getRules()
    {
        return $this->Rules;
    }
    /**
     * Set Rules value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestRule $rules
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestProcess
     */
    public function setRules(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfProcessingRequestRule $rules = null)
    {
        $this->Rules = $rules;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestProcess
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
