<?php

namespace KCH\PCC3\Deklaracja\Podmiot1AnonymousType;

use KCH\PCC3\TIdentyfikatorOsobyFizycznejType;

/**
 * Class representing OsobaFizycznaAnonymousType
 */
class OsobaFizycznaAnonymousType extends TIdentyfikatorOsobyFizycznejType
{

    /**
     * Imię ojca
     *
     * @property string $imieOjca
     */
    private $imieOjca = null;

    /**
     * Imię matki
     *
     * @property string $imieMatki
     */
    private $imieMatki = null;

    /**
     * Gets as imieOjca
     *
     * Imię ojca
     *
     * @return string
     */
    public function getImieOjca()
    {
        return $this->imieOjca;
    }

    /**
     * Sets a new imieOjca
     *
     * Imię ojca
     *
     * @param string $imieOjca
     * @return self
     */
    public function setImieOjca($imieOjca)
    {
        $this->imieOjca = $imieOjca;
        return $this;
    }

    /**
     * Gets as imieMatki
     *
     * Imię matki
     *
     * @return string
     */
    public function getImieMatki()
    {
        return $this->imieMatki;
    }

    /**
     * Sets a new imieMatki
     *
     * Imię matki
     *
     * @param string $imieMatki
     * @return self
     */
    public function setImieMatki($imieMatki)
    {
        $this->imieMatki = $imieMatki;
        return $this;
    }


}

