<?php namespace Quince\Pelastic\Contracts\Queries;

interface AccessorMutatorInterface {

    /**
     * Gets the attribute from options array
     *
     * @param string $attributeName
     * @param bool   $hardCheck
     * @param null   $defaultValue
     * @return mixed
     * @throws PelasticLogicException
     */
    public function getAttribute($attributeName, $hardCheck = false, $defaultValue = null);

    /**
     * Set attribute on options array
     *
     * @param string $attributeName
     * @param mixed $value
     * @return $this
     */
    public function setAttribute($attributeName, $value);

}
