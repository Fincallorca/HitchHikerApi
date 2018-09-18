<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleResponseUserDefinedField StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RuleResponseUserDefinedField
 * @subpackage Structs
 */
class RuleResponseUserDefinedField extends AbstractStructBase
{
    /**
     * The UserDefinedField1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField1;
    /**
     * The UserDefinedField10
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField10;
    /**
     * The UserDefinedField2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField2;
    /**
     * The UserDefinedField3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField3;
    /**
     * The UserDefinedField4
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField4;
    /**
     * The UserDefinedField5
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField5;
    /**
     * The UserDefinedField6
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField6;
    /**
     * The UserDefinedField7
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField7;
    /**
     * The UserDefinedField8
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField8;
    /**
     * The UserDefinedField9
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserDefinedField9;
    /**
     * Constructor method for RuleResponseUserDefinedField
     * @uses RuleResponseUserDefinedField::setUserDefinedField1()
     * @uses RuleResponseUserDefinedField::setUserDefinedField10()
     * @uses RuleResponseUserDefinedField::setUserDefinedField2()
     * @uses RuleResponseUserDefinedField::setUserDefinedField3()
     * @uses RuleResponseUserDefinedField::setUserDefinedField4()
     * @uses RuleResponseUserDefinedField::setUserDefinedField5()
     * @uses RuleResponseUserDefinedField::setUserDefinedField6()
     * @uses RuleResponseUserDefinedField::setUserDefinedField7()
     * @uses RuleResponseUserDefinedField::setUserDefinedField8()
     * @uses RuleResponseUserDefinedField::setUserDefinedField9()
     * @param string $userDefinedField1
     * @param string $userDefinedField10
     * @param string $userDefinedField2
     * @param string $userDefinedField3
     * @param string $userDefinedField4
     * @param string $userDefinedField5
     * @param string $userDefinedField6
     * @param string $userDefinedField7
     * @param string $userDefinedField8
     * @param string $userDefinedField9
     */
    public function __construct($userDefinedField1 = null, $userDefinedField10 = null, $userDefinedField2 = null, $userDefinedField3 = null, $userDefinedField4 = null, $userDefinedField5 = null, $userDefinedField6 = null, $userDefinedField7 = null, $userDefinedField8 = null, $userDefinedField9 = null)
    {
        $this
            ->setUserDefinedField1($userDefinedField1)
            ->setUserDefinedField10($userDefinedField10)
            ->setUserDefinedField2($userDefinedField2)
            ->setUserDefinedField3($userDefinedField3)
            ->setUserDefinedField4($userDefinedField4)
            ->setUserDefinedField5($userDefinedField5)
            ->setUserDefinedField6($userDefinedField6)
            ->setUserDefinedField7($userDefinedField7)
            ->setUserDefinedField8($userDefinedField8)
            ->setUserDefinedField9($userDefinedField9);
    }
    /**
     * Get UserDefinedField1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField1()
    {
        return isset($this->UserDefinedField1) ? $this->UserDefinedField1 : null;
    }
    /**
     * Set UserDefinedField1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField1
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField1($userDefinedField1 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField1) && !is_string($userDefinedField1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField1)), __LINE__);
        }
        if (is_null($userDefinedField1) || (is_array($userDefinedField1) && empty($userDefinedField1))) {
            unset($this->UserDefinedField1);
        } else {
            $this->UserDefinedField1 = $userDefinedField1;
        }
        return $this;
    }
    /**
     * Get UserDefinedField10 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField10()
    {
        return isset($this->UserDefinedField10) ? $this->UserDefinedField10 : null;
    }
    /**
     * Set UserDefinedField10 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField10
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField10($userDefinedField10 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField10) && !is_string($userDefinedField10)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField10)), __LINE__);
        }
        if (is_null($userDefinedField10) || (is_array($userDefinedField10) && empty($userDefinedField10))) {
            unset($this->UserDefinedField10);
        } else {
            $this->UserDefinedField10 = $userDefinedField10;
        }
        return $this;
    }
    /**
     * Get UserDefinedField2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField2()
    {
        return isset($this->UserDefinedField2) ? $this->UserDefinedField2 : null;
    }
    /**
     * Set UserDefinedField2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField2
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField2($userDefinedField2 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField2) && !is_string($userDefinedField2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField2)), __LINE__);
        }
        if (is_null($userDefinedField2) || (is_array($userDefinedField2) && empty($userDefinedField2))) {
            unset($this->UserDefinedField2);
        } else {
            $this->UserDefinedField2 = $userDefinedField2;
        }
        return $this;
    }
    /**
     * Get UserDefinedField3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField3()
    {
        return isset($this->UserDefinedField3) ? $this->UserDefinedField3 : null;
    }
    /**
     * Set UserDefinedField3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField3
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField3($userDefinedField3 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField3) && !is_string($userDefinedField3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField3)), __LINE__);
        }
        if (is_null($userDefinedField3) || (is_array($userDefinedField3) && empty($userDefinedField3))) {
            unset($this->UserDefinedField3);
        } else {
            $this->UserDefinedField3 = $userDefinedField3;
        }
        return $this;
    }
    /**
     * Get UserDefinedField4 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField4()
    {
        return isset($this->UserDefinedField4) ? $this->UserDefinedField4 : null;
    }
    /**
     * Set UserDefinedField4 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField4
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField4($userDefinedField4 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField4) && !is_string($userDefinedField4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField4)), __LINE__);
        }
        if (is_null($userDefinedField4) || (is_array($userDefinedField4) && empty($userDefinedField4))) {
            unset($this->UserDefinedField4);
        } else {
            $this->UserDefinedField4 = $userDefinedField4;
        }
        return $this;
    }
    /**
     * Get UserDefinedField5 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField5()
    {
        return isset($this->UserDefinedField5) ? $this->UserDefinedField5 : null;
    }
    /**
     * Set UserDefinedField5 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField5
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField5($userDefinedField5 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField5) && !is_string($userDefinedField5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField5)), __LINE__);
        }
        if (is_null($userDefinedField5) || (is_array($userDefinedField5) && empty($userDefinedField5))) {
            unset($this->UserDefinedField5);
        } else {
            $this->UserDefinedField5 = $userDefinedField5;
        }
        return $this;
    }
    /**
     * Get UserDefinedField6 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField6()
    {
        return isset($this->UserDefinedField6) ? $this->UserDefinedField6 : null;
    }
    /**
     * Set UserDefinedField6 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField6
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField6($userDefinedField6 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField6) && !is_string($userDefinedField6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField6)), __LINE__);
        }
        if (is_null($userDefinedField6) || (is_array($userDefinedField6) && empty($userDefinedField6))) {
            unset($this->UserDefinedField6);
        } else {
            $this->UserDefinedField6 = $userDefinedField6;
        }
        return $this;
    }
    /**
     * Get UserDefinedField7 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField7()
    {
        return isset($this->UserDefinedField7) ? $this->UserDefinedField7 : null;
    }
    /**
     * Set UserDefinedField7 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField7
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField7($userDefinedField7 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField7) && !is_string($userDefinedField7)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField7)), __LINE__);
        }
        if (is_null($userDefinedField7) || (is_array($userDefinedField7) && empty($userDefinedField7))) {
            unset($this->UserDefinedField7);
        } else {
            $this->UserDefinedField7 = $userDefinedField7;
        }
        return $this;
    }
    /**
     * Get UserDefinedField8 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField8()
    {
        return isset($this->UserDefinedField8) ? $this->UserDefinedField8 : null;
    }
    /**
     * Set UserDefinedField8 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField8
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField8($userDefinedField8 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField8) && !is_string($userDefinedField8)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField8)), __LINE__);
        }
        if (is_null($userDefinedField8) || (is_array($userDefinedField8) && empty($userDefinedField8))) {
            unset($this->UserDefinedField8);
        } else {
            $this->UserDefinedField8 = $userDefinedField8;
        }
        return $this;
    }
    /**
     * Get UserDefinedField9 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserDefinedField9()
    {
        return isset($this->UserDefinedField9) ? $this->UserDefinedField9 : null;
    }
    /**
     * Set UserDefinedField9 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userDefinedField9
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
     */
    public function setUserDefinedField9($userDefinedField9 = null)
    {
        // validation for constraint: string
        if (!is_null($userDefinedField9) && !is_string($userDefinedField9)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userDefinedField9)), __LINE__);
        }
        if (is_null($userDefinedField9) || (is_array($userDefinedField9) && empty($userDefinedField9))) {
            unset($this->UserDefinedField9);
        } else {
            $this->UserDefinedField9 = $userDefinedField9;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RuleResponseUserDefinedField
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
