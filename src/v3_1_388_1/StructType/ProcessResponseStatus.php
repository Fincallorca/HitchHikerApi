<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessResponseStatus StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessResponseStatus
 * @subpackage Structs
 */
class ProcessResponseStatus extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The Task
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Task;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Text;
    /**
     * The UsedActionID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UsedActionID;
    /**
     * Constructor method for ProcessResponseStatus
     * @uses ProcessResponseStatus::setCode()
     * @uses ProcessResponseStatus::setTask()
     * @uses ProcessResponseStatus::setText()
     * @uses ProcessResponseStatus::setUsedActionID()
     * @param string $code
     * @param string $task
     * @param string $text
     * @param string $usedActionID
     */
    public function __construct($code = null, $task = null, $text = null, $usedActionID = null)
    {
        $this
            ->setCode($code)
            ->setTask($task)
            ->setText($text)
            ->setUsedActionID($usedActionID);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get Task value
     * @return string|null
     */
    public function getTask()
    {
        return $this->Task;
    }
    /**
     * Set Task value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaskTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaskTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $task
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus
     */
    public function setTask($task = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaskTypeEnum::valueIsValid($task)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $task, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\TaskTypeEnum::getValidValues())), __LINE__);
        }
        $this->Task = $task;
        return $this;
    }
    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }
    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $text
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        if (is_null($text) || (is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }
        return $this;
    }
    /**
     * Get UsedActionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsedActionID()
    {
        return isset($this->UsedActionID) ? $this->UsedActionID : null;
    }
    /**
     * Set UsedActionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $usedActionID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus
     */
    public function setUsedActionID($usedActionID = null)
    {
        // validation for constraint: string
        if (!is_null($usedActionID) && !is_string($usedActionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usedActionID)), __LINE__);
        }
        if (is_null($usedActionID) || (is_array($usedActionID) && empty($usedActionID))) {
            unset($this->UsedActionID);
        } else {
            $this->UsedActionID = $usedActionID;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessResponseStatus
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
