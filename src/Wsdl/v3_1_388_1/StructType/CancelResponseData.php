<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelResponseData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelResponseData
 * @subpackage Structs
 */
class CancelResponseData extends AbstractStructBase
{
    /**
     * The Allotment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment
     */
    public $Allotment;
    /**
     * The ModuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData
     */
    public $ModuleInfo;
    /**
     * The NotesAndInformation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $NotesAndInformation;
    /**
     * The PNRs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR
     */
    public $PNRs;
    /**
     * The ResponseInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails
     */
    public $ResponseInfo;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The Surcharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData
     */
    public $Surcharge;
    /**
     * Constructor method for CancelResponseData
     * @uses CancelResponseData::setAllotment()
     * @uses CancelResponseData::setModuleInfo()
     * @uses CancelResponseData::setNotesAndInformation()
     * @uses CancelResponseData::setPNRs()
     * @uses CancelResponseData::setResponseInfo()
     * @uses CancelResponseData::setSource()
     * @uses CancelResponseData::setSurcharge()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment $allotment
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR $pNRs
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @param string $source
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $surcharge
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment $allotment = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR $pNRs = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null, $source = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $surcharge = null)
    {
        $this
            ->setAllotment($allotment)
            ->setModuleInfo($moduleInfo)
            ->setNotesAndInformation($notesAndInformation)
            ->setPNRs($pNRs)
            ->setResponseInfo($responseInfo)
            ->setSource($source)
            ->setSurcharge($surcharge);
    }
    /**
     * Get Allotment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment|null
     */
    public function getAllotment()
    {
        return isset($this->Allotment) ? $this->Allotment : null;
    }
    /**
     * Set Allotment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment $allotment
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
     */
    public function setAllotment(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCancelResponseAllotment $allotment = null)
    {
        if (is_null($allotment) || (is_array($allotment) && empty($allotment))) {
            unset($this->Allotment);
        } else {
            $this->Allotment = $allotment;
        }
        return $this;
    }
    /**
     * Get ModuleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData|null
     */
    public function getModuleInfo()
    {
        return isset($this->ModuleInfo) ? $this->ModuleInfo : null;
    }
    /**
     * Set ModuleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
     */
    public function setModuleInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ModuleResponseData $moduleInfo = null)
    {
        if (is_null($moduleInfo) || (is_array($moduleInfo) && empty($moduleInfo))) {
            unset($this->ModuleInfo);
        } else {
            $this->ModuleInfo = $moduleInfo;
        }
        return $this;
    }
    /**
     * Get NotesAndInformation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getNotesAndInformation()
    {
        return isset($this->NotesAndInformation) ? $this->NotesAndInformation : null;
    }
    /**
     * Set NotesAndInformation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
     */
    public function setNotesAndInformation(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $notesAndInformation = null)
    {
        if (is_null($notesAndInformation) || (is_array($notesAndInformation) && empty($notesAndInformation))) {
            unset($this->NotesAndInformation);
        } else {
            $this->NotesAndInformation = $notesAndInformation;
        }
        return $this;
    }
    /**
     * Get PNRs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR|null
     */
    public function getPNRs()
    {
        return isset($this->PNRs) ? $this->PNRs : null;
    }
    /**
     * Set PNRs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR $pNRs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
     */
    public function setPNRs(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponsePNR $pNRs = null)
    {
        if (is_null($pNRs) || (is_array($pNRs) && empty($pNRs))) {
            unset($this->PNRs);
        } else {
            $this->PNRs = $pNRs;
        }
        return $this;
    }
    /**
     * Get ResponseInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails|null
     */
    public function getResponseInfo()
    {
        return isset($this->ResponseInfo) ? $this->ResponseInfo : null;
    }
    /**
     * Set ResponseInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
     */
    public function setResponseInfo(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ResponseInfoDetails $responseInfo = null)
    {
        if (is_null($responseInfo) || (is_array($responseInfo) && empty($responseInfo))) {
            unset($this->ResponseInfo);
        } else {
            $this->ResponseInfo = $responseInfo;
        }
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
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
     * Get Surcharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData|null
     */
    public function getSurcharge()
    {
        return isset($this->Surcharge) ? $this->Surcharge : null;
    }
    /**
     * Set Surcharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $surcharge
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
     */
    public function setSurcharge(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\SurchargeData $surcharge = null)
    {
        if (is_null($surcharge) || (is_array($surcharge) && empty($surcharge))) {
            unset($this->Surcharge);
        } else {
            $this->Surcharge = $surcharge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CancelResponseData
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
