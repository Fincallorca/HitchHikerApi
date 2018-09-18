<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrowseRequestQueueStruct StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrowseRequestQueueStruct
 * @subpackage Structs
 */
class BrowseRequestQueueStruct extends AbstractStructBase
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
     * The NumberOfElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfElements;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * The StartWithElement
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartWithElement;
    /**
     * Constructor method for BrowseRequestQueueStruct
     * @uses BrowseRequestQueueStruct::setCategory()
     * @uses BrowseRequestQueueStruct::setNumberOfElements()
     * @uses BrowseRequestQueueStruct::setQueue()
     * @uses BrowseRequestQueueStruct::setStartWithElement()
     * @param string $category
     * @param int $numberOfElements
     * @param string $queue
     * @param int $startWithElement
     */
    public function __construct($category = null, $numberOfElements = null, $queue = null, $startWithElement = null)
    {
        $this
            ->setCategory($category)
            ->setNumberOfElements($numberOfElements)
            ->setQueue($queue)
            ->setStartWithElement($startWithElement);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestQueueStruct
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
     * Get NumberOfElements value
     * @return int|null
     */
    public function getNumberOfElements()
    {
        return $this->NumberOfElements;
    }
    /**
     * Set NumberOfElements value
     * @param int $numberOfElements
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestQueueStruct
     */
    public function setNumberOfElements($numberOfElements = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfElements) && !is_numeric($numberOfElements)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfElements)), __LINE__);
        }
        $this->NumberOfElements = $numberOfElements;
        return $this;
    }
    /**
     * Get Queue value
     * @return string|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @param string $queue
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestQueueStruct
     */
    public function setQueue($queue = null)
    {
        // validation for constraint: string
        if (!is_null($queue) && !is_string($queue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($queue)), __LINE__);
        }
        $this->Queue = $queue;
        return $this;
    }
    /**
     * Get StartWithElement value
     * @return int|null
     */
    public function getStartWithElement()
    {
        return $this->StartWithElement;
    }
    /**
     * Set StartWithElement value
     * @param int $startWithElement
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestQueueStruct
     */
    public function setStartWithElement($startWithElement = null)
    {
        // validation for constraint: int
        if (!is_null($startWithElement) && !is_numeric($startWithElement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startWithElement)), __LINE__);
        }
        $this->StartWithElement = $startWithElement;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BrowseRequestQueueStruct
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
