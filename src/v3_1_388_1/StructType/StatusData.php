<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:StatusData
 * @subpackage Structs
 */
class StatusData extends AbstractStructBase
{
    /**
     * The ModuleName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ModuleName;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for StatusData
     * @uses StatusData::setModuleName()
     * @uses StatusData::setStatus()
     * @param string $moduleName
     * @param string $status
     */
    public function __construct($moduleName = null, $status = null)
    {
        $this
            ->setModuleName($moduleName)
            ->setStatus($status);
    }
    /**
     * Get ModuleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModuleName()
    {
        return isset($this->ModuleName) ? $this->ModuleName : null;
    }
    /**
     * Set ModuleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $moduleName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\StatusData
     */
    public function setModuleName($moduleName = null)
    {
        // validation for constraint: string
        if (!is_null($moduleName) && !is_string($moduleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moduleName)), __LINE__);
        }
        if (is_null($moduleName) || (is_array($moduleName) && empty($moduleName))) {
            unset($this->ModuleName);
        } else {
            $this->ModuleName = $moduleName;
        }
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StatusEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StatusEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\StatusData
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StatusEnum::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\StatusEnum::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\StatusData
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
