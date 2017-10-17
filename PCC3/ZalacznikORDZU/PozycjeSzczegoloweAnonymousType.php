<?php

namespace KCH\PCC3\ZalacznikORDZU;

/**
 * Class representing PozycjeSzczegoloweAnonymousType
 */
class PozycjeSzczegoloweAnonymousType
{

    /**
     * Treść uzasadnienia
     *
     * @property string $p13
     */
    private $p13 = null;

    /**
     * Gets as p13
     *
     * Treść uzasadnienia
     *
     * @return string
     */
    public function getP13()
    {
        return $this->p13;
    }

    /**
     * Sets a new p13
     *
     * Treść uzasadnienia
     *
     * @param string $p13
     * @return self
     */
    public function setP13($p13)
    {
        $this->p13 = $p13;
        return $this;
    }


}

