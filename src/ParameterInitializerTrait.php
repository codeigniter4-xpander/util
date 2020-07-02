<?php namespace CI4Xpander\Util;

trait ParameterInitializerTrait
{
    protected function _initParameter(...$parameters)
    {
        if (count($parameters) == 1) {
            if (is_array($parameters[0])) {
                foreach ($parameters[0] as $name => $value) {
                    $this->_setParameter($name, $value);
                }
            } elseif (is_object($parameters[0])) {
                foreach (get_object_vars($parameters[0]) as $name => $value) {
                    $this->_setParameter($name, $value);
                }
            } elseif (is_a($parameters[0], \CI4Xpander\Util\Parameter::class)) {
                $this->_setParameter($parameters[0]->getName(), $parameters[0]->getValue());
            }
        } else {
            foreach ($parameters as $parameter) {
                if (is_a($parameter, \CI4Xpander\Util\Parameter::class)) {
                    $this->_setParameter($parameter->getName(), $parameter->getValue());
                }
            }
        }
    }

    protected function _setParameter($name = null, $value = null)
    {
        if (!is_null($name)) {
            if (property_exists($this, $name)) {
                $this->{$name} = $value;
            }
        }
    }
}