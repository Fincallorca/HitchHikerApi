<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalendarResponseCell ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCalendarResponseCell
 * @subpackage Arrays
 */
class ArrayOfCalendarResponseCell extends AbstractStructArrayBase
{
    /**
     * The CalendarResponseCell
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell[]
     */
    public $CalendarResponseCell;
    /**
     * Constructor method for ArrayOfCalendarResponseCell
     * @uses ArrayOfCalendarResponseCell::setCalendarResponseCell()
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell[] $calendarResponseCell
     */
    public function __construct(array $calendarResponseCell = array())
    {
        $this
            ->setCalendarResponseCell($calendarResponseCell);
    }
    /**
     * Get CalendarResponseCell value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell[]|null
     */
    public function getCalendarResponseCell()
    {
        return isset($this->CalendarResponseCell) ? $this->CalendarResponseCell : null;
    }
    /**
     * Set CalendarResponseCell value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell[] $calendarResponseCell
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCalendarResponseCell
     */
    public function setCalendarResponseCell(array $calendarResponseCell = array())
    {
        foreach ($calendarResponseCell as $arrayOfCalendarResponseCellCalendarResponseCellItem) {
            // validation for constraint: itemType
            if (!$arrayOfCalendarResponseCellCalendarResponseCellItem instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell) {
                throw new \InvalidArgumentException(sprintf('The CalendarResponseCell property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell, "%s" given', is_object($arrayOfCalendarResponseCellCalendarResponseCellItem) ? get_class($arrayOfCalendarResponseCellCalendarResponseCellItem) : gettype($arrayOfCalendarResponseCellCalendarResponseCellItem)), __LINE__);
            }
        }
        if (is_null($calendarResponseCell) || (is_array($calendarResponseCell) && empty($calendarResponseCell))) {
            unset($this->CalendarResponseCell);
        } else {
            $this->CalendarResponseCell = $calendarResponseCell;
        }
        return $this;
    }
    /**
     * Add item to CalendarResponseCell value
     * @throws \InvalidArgumentException
     * @param \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell $item
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCalendarResponseCell
     */
    public function addToCalendarResponseCell(\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell) {
            throw new \InvalidArgumentException(sprintf('The CalendarResponseCell property can only contain items of \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CalendarResponseCell[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\CalendarResponseCell|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarResponseCell
     */
    public function getAttributeName()
    {
        return 'CalendarResponseCell';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\ArrayType\ArrayOfCalendarResponseCell
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
