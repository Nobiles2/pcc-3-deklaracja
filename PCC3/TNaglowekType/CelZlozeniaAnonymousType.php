<?php

namespace KCH\PCC3\TNaglowekType;

/**
 * Class representing CelZlozeniaAnonymousType
 */
class CelZlozeniaAnonymousType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $poz
     */
    private $poz = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as poz
     *
     * @return string
     */
    public function getPoz()
    {
        return $this->poz;
    }

    /**
     * Sets a new poz
     *
     * @param string $poz
     * @return self
     */
    public function setPoz($poz)
    {
        $this->poz = $poz;
        return $this;
    }


}

