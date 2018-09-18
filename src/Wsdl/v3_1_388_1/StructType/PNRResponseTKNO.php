<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PNRResponseTKNO StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PNRResponseTKNO
 * @subpackage Structs
 */
class PNRResponseTKNO extends AbstractStructBase
{
    /**
     * The SegmentNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring
     */
    public $SegmentNumbers;
    /**
     * The Ticketnumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Ticketnumber;
    /**
     * Constructor method for PNRResponseTKNO
     * @uses PNRResponseTKNO::setSegmentNumbers()
     * @uses PNRResponseTKNO::setTicketnumber()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers
     * @param string $ticketnumber
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers = null, $ticketnumber = null)
    {
        $this
            ->setSegmentNumbers($segmentNumbers)
            ->setTicketnumber($ticketnumber);
    }
    /**
     * Get SegmentNumbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring|null
     */
    public function getSegmentNumbers()
    {
        return isset($this->SegmentNumbers) ? $this->SegmentNumbers : null;
    }
    /**
     * Set SegmentNumbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTKNO
     */
    public function setSegmentNumbers(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfstring $segmentNumbers = null)
    {
        if (is_null($segmentNumbers) || (is_array($segmentNumbers) && empty($segmentNumbers))) {
            unset($this->SegmentNumbers);
        } else {
            $this->SegmentNumbers = $segmentNumbers;
        }
        return $this;
    }
    /**
     * Get Ticketnumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTicketnumber()
    {
        return isset($this->Ticketnumber) ? $this->Ticketnumber : null;
    }
    /**
     * Set Ticketnumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ticketnumber
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTKNO
     */
    public function setTicketnumber($ticketnumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketnumber) && !is_string($ticketnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketnumber)), __LINE__);
        }
        if (is_null($ticketnumber) || (is_array($ticketnumber) && empty($ticketnumber))) {
            unset($this->Ticketnumber);
        } else {
            $this->Ticketnumber = $ticketnumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\PNRResponseTKNO
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
