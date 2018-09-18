<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplierRequestData
 * @subpackage Structs
 */
class SupplierRequestData extends AbstractStructBase
{
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Filter;
    /**
     * The ReturnAll
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnAll;
    /**
     * The ReturnCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnCode;
    /**
     * The ReturnFileDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnFileDate;
    /**
     * The ReturnFileSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnFileSize;
    /**
     * The ReturnName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnName;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * Constructor method for SupplierRequestData
     * @uses SupplierRequestData::setFilter()
     * @uses SupplierRequestData::setReturnAll()
     * @uses SupplierRequestData::setReturnCode()
     * @uses SupplierRequestData::setReturnFileDate()
     * @uses SupplierRequestData::setReturnFileSize()
     * @uses SupplierRequestData::setReturnName()
     * @uses SupplierRequestData::setSource()
     * @param string $filter
     * @param bool $returnAll
     * @param bool $returnCode
     * @param bool $returnFileDate
     * @param bool $returnFileSize
     * @param bool $returnName
     * @param string $source
     */
    public function __construct($filter = null, $returnAll = null, $returnCode = null, $returnFileDate = null, $returnFileSize = null, $returnName = null, $source = null)
    {
        $this
            ->setFilter($filter)
            ->setReturnAll($returnAll)
            ->setReturnCode($returnCode)
            ->setReturnFileDate($returnFileDate)
            ->setReturnFileSize($returnFileSize)
            ->setReturnName($returnName)
            ->setSource($source);
    }
    /**
     * Get Filter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFilter()
    {
        return isset($this->Filter) ? $this->Filter : null;
    }
    /**
     * Set Filter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $filter
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
     */
    public function setFilter($filter = null)
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filter)), __LINE__);
        }
        if (is_null($filter) || (is_array($filter) && empty($filter))) {
            unset($this->Filter);
        } else {
            $this->Filter = $filter;
        }
        return $this;
    }
    /**
     * Get ReturnAll value
     * @return bool|null
     */
    public function getReturnAll()
    {
        return $this->ReturnAll;
    }
    /**
     * Set ReturnAll value
     * @param bool $returnAll
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
     */
    public function setReturnAll($returnAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnAll) && !is_bool($returnAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnAll)), __LINE__);
        }
        $this->ReturnAll = $returnAll;
        return $this;
    }
    /**
     * Get ReturnCode value
     * @return bool|null
     */
    public function getReturnCode()
    {
        return $this->ReturnCode;
    }
    /**
     * Set ReturnCode value
     * @param bool $returnCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
     */
    public function setReturnCode($returnCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnCode) && !is_bool($returnCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnCode)), __LINE__);
        }
        $this->ReturnCode = $returnCode;
        return $this;
    }
    /**
     * Get ReturnFileDate value
     * @return bool|null
     */
    public function getReturnFileDate()
    {
        return $this->ReturnFileDate;
    }
    /**
     * Set ReturnFileDate value
     * @param bool $returnFileDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
     */
    public function setReturnFileDate($returnFileDate = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnFileDate) && !is_bool($returnFileDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnFileDate)), __LINE__);
        }
        $this->ReturnFileDate = $returnFileDate;
        return $this;
    }
    /**
     * Get ReturnFileSize value
     * @return bool|null
     */
    public function getReturnFileSize()
    {
        return $this->ReturnFileSize;
    }
    /**
     * Set ReturnFileSize value
     * @param bool $returnFileSize
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
     */
    public function setReturnFileSize($returnFileSize = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnFileSize) && !is_bool($returnFileSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnFileSize)), __LINE__);
        }
        $this->ReturnFileSize = $returnFileSize;
        return $this;
    }
    /**
     * Get ReturnName value
     * @return bool|null
     */
    public function getReturnName()
    {
        return $this->ReturnName;
    }
    /**
     * Set ReturnName value
     * @param bool $returnName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
     */
    public function setReturnName($returnName = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnName) && !is_bool($returnName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnName)), __LINE__);
        }
        $this->ReturnName = $returnName;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $source
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
     */
    public function setSource($source = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::valueIsValid($source)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $source, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\SourceModuleEnum::getValidValues())), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierRequestData
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
