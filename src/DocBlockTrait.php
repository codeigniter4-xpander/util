<?php namespace CI4Xpander\Util;

trait DocBlockTrait
{
    /**
     * @var \phpDocumentor\Reflection\DocBlockFactory
     */
    protected $_docBlockFactory;

    protected function _initDocBlock()
    {
        $this->_docBlockFactory = \phpDocumentor\Reflection\DocBlockFactory::createInstance();
    }
}
