<?php namespace CI4Xpander\Util;

trait ParameterInitializerTrait
{
    protected function _initParameter(...$params)
    {
        if (count($params) == 1) {
            if (is_array($params[0])) {
                foreach ($params[0] as $name => $value) {
                    $this->_setParam($name, $value);
                }
            } elseif (is_object($params[0])) {
                foreach (get_object_vars($params[0]) as $name => $value) {
                    $this->_setParam($name, $value);
                }
            }
        } else {
            foreach ($params as $param) {

            }
        }
    }

    protected function _setParam($name = null, $value = null)
    {
        if (!is_null($name)) {
            if (property_exists($this, $name)) {
                $this->{$name} = $value;
            }
        }
    }
}