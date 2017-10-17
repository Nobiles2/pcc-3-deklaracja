<?php

namespace KCH\PCC3\Deklaracja;

/**
 * Class representing ZalacznikiAnonymousType
 */
class ZalacznikiAnonymousType
{

    /**
     * @property \KCH\PCC3\ZalacznikORDZU $zalacznikORDZU
     */
    private $zalacznikORDZU = null;

    /**
     * Gets as zalacznikORDZU
     *
     * @return \KCH\PCC3\ZalacznikORDZU
     */
    public function getZalacznikORDZU()
    {
        return $this->zalacznikORDZU;
    }

    /**
     * Sets a new zalacznikORDZU
     *
     * @param \KCH\PCC3\ZalacznikORDZU $zalacznikORDZU
     * @return self
     */
    public function setZalacznikORDZU(\KCH\PCC3\ZalacznikORDZU $zalacznikORDZU)
    {
        $this->zalacznikORDZU = $zalacznikORDZU;
        return $this;
    }


}

