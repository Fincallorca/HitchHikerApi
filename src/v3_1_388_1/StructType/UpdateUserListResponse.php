<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUserListResponse StructType
 * @subpackage Structs
 */
class UpdateUserListResponse extends AbstractStructBase
{
    /**
     * The UpdateUserListResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpdateUserListResult;
    /**
     * Constructor method for UpdateUserListResponse
     * @uses UpdateUserListResponse::setUpdateUserListResult()
     * @param string $updateUserListResult
     */
    public function __construct($updateUserListResult = null)
    {
        $this
            ->setUpdateUserListResult($updateUserListResult);
    }
    /**
     * Get UpdateUserListResult value
     * @return string|null
     */
    public function getUpdateUserListResult()
    {
        return $this->UpdateUserListResult;
    }
    /**
     * Set UpdateUserListResult value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $updateUserListResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UpdateUserListResponse
     */
    public function setUpdateUserListResult($updateUserListResult = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::valueIsValid($updateUserListResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $updateUserListResult, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::getValidValues())), __LINE__);
        }
        $this->UpdateUserListResult = $updateUserListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UpdateUserListResponse
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
