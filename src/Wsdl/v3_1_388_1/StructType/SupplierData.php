<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SupplierData
 * @subpackage Structs
 */
class SupplierData extends AbstractStructBase
{
    /**
     * The FileDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileDate;
    /**
     * The FileSize
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileSize;
    /**
     * The SupplierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SupplierCode;
    /**
     * The SupplierName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SupplierName;
    /**
     * Constructor method for SupplierData
     * @uses SupplierData::setFileDate()
     * @uses SupplierData::setFileSize()
     * @uses SupplierData::setSupplierCode()
     * @uses SupplierData::setSupplierName()
     * @param string $fileDate
     * @param string $fileSize
     * @param string $supplierCode
     * @param string $supplierName
     */
    public function __construct($fileDate = null, $fileSize = null, $supplierCode = null, $supplierName = null)
    {
        $this
            ->setFileDate($fileDate)
            ->setFileSize($fileSize)
            ->setSupplierCode($supplierCode)
            ->setSupplierName($supplierName);
    }
    /**
     * Get FileDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileDate()
    {
        return isset($this->FileDate) ? $this->FileDate : null;
    }
    /**
     * Set FileDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileDate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierData
     */
    public function setFileDate($fileDate = null)
    {
        // validation for constraint: string
        if (!is_null($fileDate) && !is_string($fileDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileDate)), __LINE__);
        }
        if (is_null($fileDate) || (is_array($fileDate) && empty($fileDate))) {
            unset($this->FileDate);
        } else {
            $this->FileDate = $fileDate;
        }
        return $this;
    }
    /**
     * Get FileSize value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileSize()
    {
        return isset($this->FileSize) ? $this->FileSize : null;
    }
    /**
     * Set FileSize value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileSize
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierData
     */
    public function setFileSize($fileSize = null)
    {
        // validation for constraint: string
        if (!is_null($fileSize) && !is_string($fileSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileSize)), __LINE__);
        }
        if (is_null($fileSize) || (is_array($fileSize) && empty($fileSize))) {
            unset($this->FileSize);
        } else {
            $this->FileSize = $fileSize;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierData
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
     * Get SupplierName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSupplierName()
    {
        return isset($this->SupplierName) ? $this->SupplierName : null;
    }
    /**
     * Set SupplierName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $supplierName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierData
     */
    public function setSupplierName($supplierName = null)
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierName)), __LINE__);
        }
        if (is_null($supplierName) || (is_array($supplierName) && empty($supplierName))) {
            unset($this->SupplierName);
        } else {
            $this->SupplierName = $supplierName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SupplierData
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
