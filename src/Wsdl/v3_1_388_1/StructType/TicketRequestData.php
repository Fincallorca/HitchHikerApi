<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketRequestData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TicketRequestData
 * @subpackage Structs
 */
class TicketRequestData extends AbstractStructBase
{
    /**
     * The IsRoundTrip
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsRoundTrip;
    /**
     * The RecordSets
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $RecordSets;
    /**
     * The Source
     * @var string
     */
    public $Source;
    /**
     * Constructor method for TicketRequestData
     * @uses TicketRequestData::setIsRoundTrip()
     * @uses TicketRequestData::setRecordSets()
     * @uses TicketRequestData::setSource()
     * @param bool $isRoundTrip
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets
     * @param string $source
     */
    public function __construct($isRoundTrip = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets = null, $source = null)
    {
        $this
            ->setIsRoundTrip($isRoundTrip)
            ->setRecordSets($recordSets)
            ->setSource($source);
    }
    /**
     * Get IsRoundTrip value
     * @return bool|null
     */
    public function getIsRoundTrip()
    {
        return $this->IsRoundTrip;
    }
    /**
     * Set IsRoundTrip value
     * @param bool $isRoundTrip
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketRequestData
     */
    public function setIsRoundTrip($isRoundTrip = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRoundTrip) && !is_bool($isRoundTrip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRoundTrip)), __LINE__);
        }
        $this->IsRoundTrip = $isRoundTrip;
        return $this;
    }
    /**
     * Get RecordSets value
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getRecordSets()
    {
        return $this->RecordSets;
    }
    /**
     * Set RecordSets value
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketRequestData
     */
    public function setRecordSets(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $recordSets = null)
    {
        $this->RecordSets = $recordSets;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketRequestData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\TicketRequestData
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
