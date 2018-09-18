<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaxValues StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PaxValues
 * @subpackage Structs
 */
class PaxValues extends AbstractStructBase
{
    /**
     * The Adult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Adult;
    /**
     * The Child
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Child;
    /**
     * The Infant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Infant;
    /**
     * Constructor method for PaxValues
     * @uses PaxValues::setAdult()
     * @uses PaxValues::setChild()
     * @uses PaxValues::setInfant()
     * @param string $adult
     * @param string $child
     * @param string $infant
     */
    public function __construct($adult = null, $child = null, $infant = null)
    {
        $this
            ->setAdult($adult)
            ->setChild($child)
            ->setInfant($infant);
    }
    /**
     * Get Adult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdult()
    {
        return isset($this->Adult) ? $this->Adult : null;
    }
    /**
     * Set Adult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $adult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues
     */
    public function setAdult($adult = null)
    {
        // validation for constraint: string
        if (!is_null($adult) && !is_string($adult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adult)), __LINE__);
        }
        if (is_null($adult) || (is_array($adult) && empty($adult))) {
            unset($this->Adult);
        } else {
            $this->Adult = $adult;
        }
        return $this;
    }
    /**
     * Get Child value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getChild()
    {
        return isset($this->Child) ? $this->Child : null;
    }
    /**
     * Set Child value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $child
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues
     */
    public function setChild($child = null)
    {
        // validation for constraint: string
        if (!is_null($child) && !is_string($child)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($child)), __LINE__);
        }
        if (is_null($child) || (is_array($child) && empty($child))) {
            unset($this->Child);
        } else {
            $this->Child = $child;
        }
        return $this;
    }
    /**
     * Get Infant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInfant()
    {
        return isset($this->Infant) ? $this->Infant : null;
    }
    /**
     * Set Infant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $infant
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues
     */
    public function setInfant($infant = null)
    {
        // validation for constraint: string
        if (!is_null($infant) && !is_string($infant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infant)), __LINE__);
        }
        if (is_null($infant) || (is_array($infant) && empty($infant))) {
            unset($this->Infant);
        } else {
            $this->Infant = $infant;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PaxValues
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
