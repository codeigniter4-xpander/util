<?php namespace CI4Xpander\Util;

trait ReflectionClassTrait
{
    /**
     * @var \ReflectionClass
     */
    protected $_reflectionClass;

    protected function _initReflectionClass()
    {
        $this->_reflectionClass = new \ReflectionClass($this);
    }
}
