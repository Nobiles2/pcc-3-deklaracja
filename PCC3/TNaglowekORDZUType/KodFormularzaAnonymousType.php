<?php

namespace KCH\PCC3\TNaglowekORDZUType;

/**
 * Class representing KodFormularzaAnonymousType
 */
class KodFormularzaAnonymousType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $kodSystemowy
     */
    private $kodSystemowy = null;

    /**
     * @property string $wersjaSchemy
     */
    private $wersjaSchemy = null;

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
     * Gets as kodSystemowy
     *
     * @return string
     */
    public function getKodSystemowy()
    {
        return $this->kodSystemowy;
    }

    /**
     * Sets a new kodSystemowy
     *
     * @param string $kodSystemowy
     * @return self
     */
    public function setKodSystemowy($kodSystemowy)
    {
        $this->kodSystemowy = $kodSystemowy;
        return $this;
    }

    /**
     * Gets as wersjaSchemy
     *
     * @return string
     */
    public function getWersjaSchemy()
    {
        return $this->wersjaSchemy;
    }

    /**
     * Sets a new wersjaSchemy
     *
     * @param string $wersjaSchemy
     * @return self
     */
    public function setWersjaSchemy($wersjaSchemy)
    {
        $this->wersjaSchemy = $wersjaSchemy;
        return $this;
    }


}

