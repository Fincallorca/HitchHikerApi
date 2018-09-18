<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveQueueData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RemoveQueueData
 * @subpackage Structs
 */
class RemoveQueueData extends AbstractStructBase
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
     * The Queue
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * Constructor method for RemoveQueueData
     * @uses RemoveQueueData::setCategory()
     * @uses RemoveQueueData::setQueue()
     * @param string $category
     * @param string $queue
     */
    public function __construct($category = null, $queue = null)
    {
        $this
            ->setCategory($category)
            ->setQueue($queue);
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveQueueData
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveQueueData
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\RemoveQueueData
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
