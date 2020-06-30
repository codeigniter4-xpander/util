<?php namespace CI4Xpander\Util;

class Parameter
{
    public $name;
    public $value;

    public function __construct($name = null, $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function setName($name = null)
    {
        if (!is_null($name)) {
            $this->name = $name;
        }

        return $this;
    }

    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public static function create($name = null, $value = null)
    {
        return new self($name, $value);
    }
}