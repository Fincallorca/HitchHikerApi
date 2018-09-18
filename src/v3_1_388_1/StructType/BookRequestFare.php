<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookRequestFare StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BookRequestFare
 * @subpackage Structs
 */
class BookRequestFare extends AbstractStructBase
{
    /**
     * The Corporate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate
     */
    public $Corporate;
    /**
     * Constructor method for BookRequestFare
     * @uses BookRequestFare::setCorporate()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate $corporate
     */
    public function __construct(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate $corporate = null)
    {
        $this
            ->setCorporate($corporate);
    }
    /**
     * Get Corporate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate|null
     */
    public function getCorporate()
    {
        return isset($this->Corporate) ? $this->Corporate : null;
    }
    /**
     * Set Corporate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate $corporate
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare
     */
    public function setCorporate(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestCorporate $corporate = null)
    {
        if (is_null($corporate) || (is_array($corporate) && empty($corporate))) {
            unset($this->Corporate);
        } else {
            $this->Corporate = $corporate;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\BookRequestFare
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
