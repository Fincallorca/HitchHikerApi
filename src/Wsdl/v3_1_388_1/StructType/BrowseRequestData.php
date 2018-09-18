<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrowseRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrowseRequestData
 * @subpackage Structs
 */
class BrowseRequestData extends AbstractStructBase
{
    /**
     * The CRSConfig
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS
     */
    public $CRSConfig;
    /**
     * The Mode
     * @var string
     */
    public $Mode;
    /**
     * The Queues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseRequestQueueStruct
     */
    public $Queues;
    /**
     * The Session
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Session;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * Constructor method for BrowseRequestData
     * @uses BrowseRequestData::setCRSConfig()
     * @uses BrowseRequestData::setMode()
     * @uses BrowseRequestData::setQueues()
     * @uses BrowseRequestData::setSession()
     * @uses BrowseRequestData::setSource()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @param string $mode
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseRequestQueueStruct $queues
     * @param string $session
     * @param string $source
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null, $mode = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseRequestQueueStruct $queues = null, $session = null, $source = null)
    {
        $this
            ->setCRSConfig($cRSConfig)
            ->setMode($mode)
            ->setQueues($queues)
            ->setSession($session)
            ->setSource($source);
    }
    /**
     * Get CRSConfig value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS|null
     */
    public function getCRSConfig()
    {
        return $this->CRSConfig;
    }
    /**
     * Set CRSConfig value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestData
     */
    public function setCRSConfig(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CRS $cRSConfig = null)
    {
        $this->CRSConfig = $cRSConfig;
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
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BrowseModeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BrowseModeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $mode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestData
     */
    public function setMode($mode = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BrowseModeEnum::valueIsValid($mode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $mode, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\BrowseModeEnum::getValidValues())), __LINE__);
        }
        $this->Mode = $mode;
        return $this;
    }
    /**
     * Get Queues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseRequestQueueStruct|null
     */
    public function getQueues()
    {
        return isset($this->Queues) ? $this->Queues : null;
    }
    /**
     * Set Queues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseRequestQueueStruct $queues
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestData
     */
    public function setQueues(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseRequestQueueStruct $queues = null)
    {
        if (is_null($queues) || (is_array($queues) && empty($queues))) {
            unset($this->Queues);
        } else {
            $this->Queues = $queues;
        }
        return $this;
    }
    /**
     * Get Session value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSession()
    {
        return isset($this->Session) ? $this->Session : null;
    }
    /**
     * Set Session value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $session
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestData
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        if (is_null($session) || (is_array($session) && empty($session))) {
            unset($this->Session);
        } else {
            $this->Session = $session;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestData
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
