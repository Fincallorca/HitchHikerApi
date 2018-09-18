<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueueData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:QueueData
 * @subpackage Structs
 */
class QueueData extends AbstractStructBase
{
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * The QueueCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $QueueCategory;
    /**
     * The QueueMainType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QueueMainType;
    /**
     * The QueueSubType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $QueueSubType;
    /**
     * Constructor method for QueueData
     * @uses QueueData::setQueue()
     * @uses QueueData::setQueueCategory()
     * @uses QueueData::setQueueMainType()
     * @uses QueueData::setQueueSubType()
     * @param string $queue
     * @param string $queueCategory
     * @param string $queueMainType
     * @param string $queueSubType
     */
    public function __construct($queue = null, $queueCategory = null, $queueMainType = null, $queueSubType = null)
    {
        $this
            ->setQueue($queue)
            ->setQueueCategory($queueCategory)
            ->setQueueMainType($queueMainType)
            ->setQueueSubType($queueSubType);
    }
    /**
     * Get Queue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQueue()
    {
        return isset($this->Queue) ? $this->Queue : null;
    }
    /**
     * Set Queue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $queue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData
     */
    public function setQueue($queue = null)
    {
        // validation for constraint: string
        if (!is_null($queue) && !is_string($queue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queue)), __LINE__);
        }
        if (is_null($queue) || (is_array($queue) && empty($queue))) {
            unset($this->Queue);
        } else {
            $this->Queue = $queue;
        }
        return $this;
    }
    /**
     * Get QueueCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getQueueCategory()
    {
        return isset($this->QueueCategory) ? $this->QueueCategory : null;
    }
    /**
     * Set QueueCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $queueCategory
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData
     */
    public function setQueueCategory($queueCategory = null)
    {
        // validation for constraint: string
        if (!is_null($queueCategory) && !is_string($queueCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queueCategory)), __LINE__);
        }
        if (is_null($queueCategory) || (is_array($queueCategory) && empty($queueCategory))) {
            unset($this->QueueCategory);
        } else {
            $this->QueueCategory = $queueCategory;
        }
        return $this;
    }
    /**
     * Get QueueMainType value
     * @return string|null
     */
    public function getQueueMainType()
    {
        return $this->QueueMainType;
    }
    /**
     * Set QueueMainType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueMainTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueMainTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $queueMainType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData
     */
    public function setQueueMainType($queueMainType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueMainTypeEnum::valueIsValid($queueMainType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $queueMainType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueMainTypeEnum::getValidValues())), __LINE__);
        }
        $this->QueueMainType = $queueMainType;
        return $this;
    }
    /**
     * Get QueueSubType value
     * @return string|null
     */
    public function getQueueSubType()
    {
        return $this->QueueSubType;
    }
    /**
     * Set QueueSubType value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueSubTypeEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueSubTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $queueSubType
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData
     */
    public function setQueueSubType($queueSubType = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueSubTypeEnum::valueIsValid($queueSubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $queueSubType, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\QueueSubTypeEnum::getValidValues())), __LINE__);
        }
        $this->QueueSubType = $queueSubType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\QueueData
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
