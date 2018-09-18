<?php

namespace Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateUserAgreementListResponse StructType
 * @subpackage Structs
 */
class UpdateUserAgreementListResponse extends AbstractStructBase
{
    /**
     * The UpdateUserAgreementListResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UpdateUserAgreementListResult;
    /**
     * Constructor method for UpdateUserAgreementListResponse
     * @uses UpdateUserAgreementListResponse::setUpdateUserAgreementListResult()
     * @param string $updateUserAgreementListResult
     */
    public function __construct($updateUserAgreementListResult = null)
    {
        $this
            ->setUpdateUserAgreementListResult($updateUserAgreementListResult);
    }
    /**
     * Get UpdateUserAgreementListResult value
     * @return string|null
     */
    public function getUpdateUserAgreementListResult()
    {
        return $this->UpdateUserAgreementListResult;
    }
    /**
     * Set UpdateUserAgreementListResult value
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::valueIsValid()
     * @uses \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $updateUserAgreementListResult
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UpdateUserAgreementListResponse
     */
    public function setUpdateUserAgreementListResult($updateUserAgreementListResult = null)
    {
        // validation for constraint: enumeration
        if (!\Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::valueIsValid($updateUserAgreementListResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $updateUserAgreementListResult, implode(', ', \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\EnumType\UpdateUserListResultEnum::getValidValues())), __LINE__);
        }
        $this->UpdateUserAgreementListResult = $updateUserAgreementListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Fincallorca\HitchHikerApi\Wsdl\v3_1_388_1\StructType\UpdateUserAgreementListResponse
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
