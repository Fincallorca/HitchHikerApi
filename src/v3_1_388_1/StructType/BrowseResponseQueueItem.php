<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrowseResponseQueueItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrowseResponseQueueItem
 * @subpackage Structs
 */
class BrowseResponseQueueItem extends AbstractStructBase
{
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Category;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ErrorCode;
    /**
     * The ErrorText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorText;
    /**
     * The NumberOfPNRs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPNRs;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * The RecordLocators
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem
     */
    public $RecordLocators;
    /**
     * Constructor method for BrowseResponseQueueItem
     * @uses BrowseResponseQueueItem::setCategory()
     * @uses BrowseResponseQueueItem::setErrorCode()
     * @uses BrowseResponseQueueItem::setErrorText()
     * @uses BrowseResponseQueueItem::setNumberOfPNRs()
     * @uses BrowseResponseQueueItem::setQueue()
     * @uses BrowseResponseQueueItem::setRecordLocators()
     * @param string $category
     * @param int $errorCode
     * @param string $errorText
     * @param int $numberOfPNRs
     * @param string $queue
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem $recordLocators
     */
    public function __construct($category = null, $errorCode = null, $errorText = null, $numberOfPNRs = null, $queue = null, \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem $recordLocators = null)
    {
        $this
            ->setCategory($category)
            ->setErrorCode($errorCode)
            ->setErrorText($errorText)
            ->setNumberOfPNRs($numberOfPNRs)
            ->setQueue($queue)
            ->setRecordLocators($recordLocators);
    }
    /**
     * Get Category value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategory()
    {
        return isset($this->Category) ? $this->Category : null;
    }
    /**
     * Set Category value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $category
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        if (is_null($category) || (is_array($category) && empty($category))) {
            unset($this->Category);
        } else {
            $this->Category = $category;
        }
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !is_numeric($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ErrorText value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorText()
    {
        return isset($this->ErrorText) ? $this->ErrorText : null;
    }
    /**
     * Set ErrorText value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorText
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem
     */
    public function setErrorText($errorText = null)
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorText)), __LINE__);
        }
        if (is_null($errorText) || (is_array($errorText) && empty($errorText))) {
            unset($this->ErrorText);
        } else {
            $this->ErrorText = $errorText;
        }
        return $this;
    }
    /**
     * Get NumberOfPNRs value
     * @return int|null
     */
    public function getNumberOfPNRs()
    {
        return $this->NumberOfPNRs;
    }
    /**
     * Set NumberOfPNRs value
     * @param int $numberOfPNRs
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem
     */
    public function setNumberOfPNRs($numberOfPNRs = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPNRs) && !is_numeric($numberOfPNRs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPNRs)), __LINE__);
        }
        $this->NumberOfPNRs = $numberOfPNRs;
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem
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
     * Get RecordLocators value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem|null
     */
    public function getRecordLocators()
    {
        return isset($this->RecordLocators) ? $this->RecordLocators : null;
    }
    /**
     * Set RecordLocators value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem $recordLocators
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem
     */
    public function setRecordLocators(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfBrowseResponseRecordLocatorItem $recordLocators = null)
    {
        if (is_null($recordLocators) || (is_array($recordLocators) && empty($recordLocators))) {
            unset($this->RecordLocators);
        } else {
            $this->RecordLocators = $recordLocators;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseResponseQueueItem
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
