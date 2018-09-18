<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestCRSConfiguration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestCRSConfiguration
 * @subpackage Structs
 */
class BookRequestCRSConfiguration extends CRS
{
    /**
     * The AllowBranchAccess
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowBranchAccess;
    /**
     * The AllowWaitList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AllowWaitList;
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
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Queue;
    /**
     * The ReturnStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnStatus;
    /**
     * Constructor method for BookRequestCRSConfiguration
     * @uses BookRequestCRSConfiguration::setAllowBranchAccess()
     * @uses BookRequestCRSConfiguration::setAllowWaitList()
     * @uses BookRequestCRSConfiguration::setCategory()
     * @uses BookRequestCRSConfiguration::setDestinationPCC()
     * @uses BookRequestCRSConfiguration::setQueue()
     * @uses BookRequestCRSConfiguration::setReturnStatus()
     * @param bool $allowBranchAccess
     * @param bool $allowWaitList
     * @param string $category
     * @param string $destinationPCC
     * @param string $queue
     * @param int $returnStatus
     */
    public function __construct($allowBranchAccess = null, $allowWaitList = null, $category = null, $destinationPCC = null, $queue = null, $returnStatus = null)
    {
        $this
            ->setAllowBranchAccess($allowBranchAccess)
            ->setAllowWaitList($allowWaitList)
            ->setCategory($category)
            ->setDestinationPCC($destinationPCC)
            ->setQueue($queue)
            ->setReturnStatus($returnStatus);
    }
    /**
     * Get AllowBranchAccess value
     * @return bool|null
     */
    public function getAllowBranchAccess()
    {
        return $this->AllowBranchAccess;
    }
    /**
     * Set AllowBranchAccess value
     * @param bool $allowBranchAccess
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
     */
    public function setAllowBranchAccess($allowBranchAccess = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowBranchAccess) && !is_bool($allowBranchAccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowBranchAccess)), __LINE__);
        }
        $this->AllowBranchAccess = $allowBranchAccess;
        return $this;
    }
    /**
     * Get AllowWaitList value
     * @return bool|null
     */
    public function getAllowWaitList()
    {
        return $this->AllowWaitList;
    }
    /**
     * Set AllowWaitList value
     * @param bool $allowWaitList
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
     */
    public function setAllowWaitList($allowWaitList = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowWaitList) && !is_bool($allowWaitList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowWaitList)), __LINE__);
        }
        $this->AllowWaitList = $allowWaitList;
        return $this;
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
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
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
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
     * Get ReturnStatus value
     * @return int|null
     */
    public function getReturnStatus()
    {
        return $this->ReturnStatus;
    }
    /**
     * Set ReturnStatus value
     * @param int $returnStatus
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
     */
    public function setReturnStatus($returnStatus = null)
    {
        // validation for constraint: int
        if (!is_null($returnStatus) && !is_numeric($returnStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnStatus)), __LINE__);
        }
        $this->ReturnStatus = $returnStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCRSConfiguration
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
