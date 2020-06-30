<?php namespace CI4Xpander\Util\Parameter;

trait ParameterFactoryTrait
{
    public function __construct($value = null)
    {
        parent::__construct($this->name, $value);
    }

    public static function create($value = null)
    {
        return new self($value);
    }
}
