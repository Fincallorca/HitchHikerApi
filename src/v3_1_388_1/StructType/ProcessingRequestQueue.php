<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessingRequestQueue StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessingRequestQueue
 * @subpackage Structs
 */
class ProcessingRequestQueue extends AbstractStructBase
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
     * The DestinationPCC
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DestinationPCC;
    /**
     * The EnableBranchAccess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $EnableBranchAccess;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * Constructor method for ProcessingRequestQueue
     * @uses ProcessingRequestQueue::setCategory()
     * @uses ProcessingRequestQueue::setDestinationPCC()
     * @uses ProcessingRequestQueue::setEnableBranchAccess()
     * @uses ProcessingRequestQueue::setQueue()
     * @param string $category
     * @param string $destinationPCC
     * @param bool $enableBranchAccess
     * @param string $queue
     */
    public function __construct($category = null, $destinationPCC = null, $enableBranchAccess = null, $queue = null)
    {
        $this
            ->setCategory($category)
            ->setDestinationPCC($destinationPCC)
            ->setEnableBranchAccess($enableBranchAccess)
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestQueue
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
     * Get DestinationPCC value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDestinationPCC()
    {
        return isset($this->DestinationPCC) ? $this->DestinationPCC : null;
    }
    /**
     * Set DestinationPCC value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $destinationPCC
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestQueue
     */
    public function setDestinationPCC($destinationPCC = null)
    {
        // validation for constraint: string
        if (!is_null($destinationPCC) && !is_string($destinationPCC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationPCC)), __LINE__);
        }
        if (is_null($destinationPCC) || (is_array($destinationPCC) && empty($destinationPCC))) {
            unset($this->DestinationPCC);
        } else {
            $this->DestinationPCC = $destinationPCC;
        }
        return $this;
    }
    /**
     * Get EnableBranchAccess value
     * @return bool|null
     */
    public function getEnableBranchAccess()
    {
        return $this->EnableBranchAccess;
    }
    /**
     * Set EnableBranchAccess value
     * @param bool $enableBranchAccess
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestQueue
     */
    public function setEnableBranchAccess($enableBranchAccess = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableBranchAccess) && !is_bool($enableBranchAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($enableBranchAccess)), __LINE__);
        }
        $this->EnableBranchAccess = $enableBranchAccess;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestQueue
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\ProcessingRequestQueue
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
