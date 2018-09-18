<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEntryClient ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEntryClient
 * @subpackage Arrays
 */
class ArrayOfEntryClient extends AbstractStructArrayBase
{
    /**
     * The EntryClient
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient[]
     */
    public $EntryClient;
    /**
     * Constructor method for ArrayOfEntryClient
     * @uses ArrayOfEntryClient::setEntryClient()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient[] $entryClient
     */
    public function __construct(array $entryClient = array())
    {
        $this
            ->setEntryClient($entryClient);
    }
    /**
     * Get EntryClient value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient[]|null
     */
    public function getEntryClient()
    {
        return isset($this->EntryClient) ? $this->EntryClient : null;
    }
    /**
     * Set EntryClient value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient[] $entryClient
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient
     */
    public function setEntryClient(array $entryClient = array())
    {
        foreach ($entryClient as $arrayOfEntryClientEntryClientItem) {
            // validation for constraint: itemType
            if (!$arrayOfEntryClientEntryClientItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient) {
                throw new \InvalidArgumentException(sprintf('The EntryClient property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient, "%s" given', is_object($arrayOfEntryClientEntryClientItem) ? get_class($arrayOfEntryClientEntryClientItem) : gettype($arrayOfEntryClientEntryClientItem)), __LINE__);
            }
        }
        if (is_null($entryClient) || (is_array($entryClient) && empty($entryClient))) {
            unset($this->EntryClient);
        } else {
            $this->EntryClient = $entryClient;
        }
        return $this;
    }
    /**
     * Add item to EntryClient value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient
     */
    public function addToEntryClient(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient) {
            throw new \InvalidArgumentException(sprintf('The EntryClient property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EntryClient[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\EntryClient|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EntryClient
     */
    public function getAttributeName()
    {
        return 'EntryClient';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfEntryClient
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
