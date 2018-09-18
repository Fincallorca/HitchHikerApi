<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vayant StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Vayant
 * @subpackage Structs
 */
class Vayant extends AbstractStructBase
{
    /**
     * The AgencyID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgencyID;
    /**
     * The IATANumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $IATANumber;
    /**
     * The PointOfSale
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PointOfSale;
    /**
     * The SupplierName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $SupplierName;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for Vayant
     * @uses Vayant::setAgencyID()
     * @uses Vayant::setIATANumber()
     * @uses Vayant::setPointOfSale()
     * @uses Vayant::setSupplierName()
     * @uses Vayant::setUserName()
     * @param string $agencyID
     * @param string $iATANumber
     * @param string $pointOfSale
     * @param string $supplierName
     * @param string $userName
     */
    public function __construct($agencyID = null, $iATANumber = null, $pointOfSale = null, $supplierName = null, $userName = null)
    {
        $this
            ->setAgencyID($agencyID)
            ->setIATANumber($iATANumber)
            ->setPointOfSale($pointOfSale)
            ->setSupplierName($supplierName)
            ->setUserName($userName);
    }
    /**
     * Get AgencyID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgencyID()
    {
        return isset($this->AgencyID) ? $this->AgencyID : null;
    }
    /**
     * Set AgencyID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agencyID
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public function setAgencyID($agencyID = null)
    {
        // validation for constraint: string
        if (!is_null($agencyID) && !is_string($agencyID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyID)), __LINE__);
        }
        if (is_null($agencyID) || (is_array($agencyID) && empty($agencyID))) {
            unset($this->AgencyID);
        } else {
            $this->AgencyID = $agencyID;
        }
        return $this;
    }
    /**
     * Get IATANumber value
     * @return string|null
     */
    public function getIATANumber()
    {
        return $this->IATANumber;
    }
    /**
     * Set IATANumber value
     * @param string $iATANumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public function setIATANumber($iATANumber = null)
    {
        // validation for constraint: string
        if (!is_null($iATANumber) && !is_string($iATANumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iATANumber)), __LINE__);
        }
        $this->IATANumber = $iATANumber;
        return $this;
    }
    /**
     * Get PointOfSale value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPointOfSale()
    {
        return isset($this->PointOfSale) ? $this->PointOfSale : null;
    }
    /**
     * Set PointOfSale value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pointOfSale
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public function setPointOfSale($pointOfSale = null)
    {
        // validation for constraint: string
        if (!is_null($pointOfSale) && !is_string($pointOfSale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pointOfSale)), __LINE__);
        }
        if (is_null($pointOfSale) || (is_array($pointOfSale) && empty($pointOfSale))) {
            unset($this->PointOfSale);
        } else {
            $this->PointOfSale = $pointOfSale;
        }
        return $this;
    }
    /**
     * Get SupplierName value
     * @return string|null
     */
    public function getSupplierName()
    {
        return $this->SupplierName;
    }
    /**
     * Set SupplierName value
     * @param string $supplierName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public function setSupplierName($supplierName = null)
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($supplierName)), __LINE__);
        }
        $this->SupplierName = $supplierName;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\Vayant
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
