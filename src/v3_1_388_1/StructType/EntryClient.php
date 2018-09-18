<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntryClient StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EntryClient
 * @subpackage Structs
 */
class EntryClient extends AbstractStructBase
{
    /**
     * The CalcGroup
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CalcGroup;
    /**
     * The Link
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Link;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Title;
    /**
     * Constructor method for EntryClient
     * @uses EntryClient::setCalcGroup()
     * @uses EntryClient::setLink()
     * @uses EntryClient::setTitle()
     * @param int $calcGroup
     * @param string $link
     * @param string $title
     */
    public function __construct($calcGroup = null, $link = null, $title = null)
    {
        $this
            ->setCalcGroup($calcGroup)
            ->setLink($link)
            ->setTitle($title);
    }
    /**
     * Get CalcGroup value
     * @return int|null
     */
    public function getCalcGroup()
    {
        return $this->CalcGroup;
    }
    /**
     * Set CalcGroup value
     * @param int $calcGroup
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient
     */
    public function setCalcGroup($calcGroup = null)
    {
        // validation for constraint: int
        if (!is_null($calcGroup) && !is_numeric($calcGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($calcGroup)), __LINE__);
        }
        $this->CalcGroup = $calcGroup;
        return $this;
    }
    /**
     * Get Link value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLink()
    {
        return isset($this->Link) ? $this->Link : null;
    }
    /**
     * Set Link value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $link
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient
     */
    public function setLink($link = null)
    {
        // validation for constraint: string
        if (!is_null($link) && !is_string($link)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($link)), __LINE__);
        }
        if (is_null($link) || (is_array($link) && empty($link))) {
            unset($this->Link);
        } else {
            $this->Link = $link;
        }
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $title
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient
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
