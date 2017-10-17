<?php

namespace KCH\PCC3;

/**
 * Class representing TNaglowekType
 *
 * Nagłówek deklaracji
 * XSD Type: TNaglowek
 */
class TNaglowekType
{

    /**
     * @property \KCH\PCC3\TNaglowekType\KodFormularzaAnonymousType $kodFormularza
     */
    private $kodFormularza = null;

    /**
     * @property string $wariantFormularza
     */
    private $wariantFormularza = null;

    /**
     * @property \KCH\PCC3\TNaglowekType\CelZlozeniaAnonymousType $celZlozenia
     */
    private $celZlozenia = null;

    /**
     * Data dokonania czynności
     *
     * @property \KCH\PCC3\TNaglowekType\DataAnonymousType $data
     */
    private $data = null;

    /**
     * @property string $kodUrzedu
     */
    private $kodUrzedu = null;

    /**
     * Gets as kodFormularza
     *
     * @return \KCH\PCC3\TNaglowekType\KodFormularzaAnonymousType
     */
    public function getKodFormularza()
    {
        return $this->kodFormularza;
    }

    /**
     * Sets a new kodFormularza
     *
     * @param \KCH\PCC3\TNaglowekType\KodFormularzaAnonymousType $kodFormularza
     * @return self
     */
    public function setKodFormularza(\KCH\PCC3\TNaglowekType\KodFormularzaAnonymousType $kodFormularza)
    {
        $this->kodFormularza = $kodFormularza;
        return $this;
    }

    /**
     * Gets as wariantFormularza
     *
     * @return string
     */
    public function getWariantFormularza()
    {
        return $this->wariantFormularza;
    }

    /**
     * Sets a new wariantFormularza
     *
     * @param string $wariantFormularza
     * @return self
     */
    public function setWariantFormularza($wariantFormularza)
    {
        $this->wariantFormularza = $wariantFormularza;
        return $this;
    }

    /**
     * Gets as celZlozenia
     *
     * @return \KCH\PCC3\TNaglowekType\CelZlozeniaAnonymousType
     */
    public function getCelZlozenia()
    {
        return $this->celZlozenia;
    }

    /**
     * Sets a new celZlozenia
     *
     * @param \KCH\PCC3\TNaglowekType\CelZlozeniaAnonymousType $celZlozenia
     * @return self
     */
    public function setCelZlozenia(\KCH\PCC3\TNaglowekType\CelZlozeniaAnonymousType $celZlozenia)
    {
        $this->celZlozenia = $celZlozenia;
        return $this;
    }

    /**
     * Gets as data
     *
     * Data dokonania czynności
     *
     * @return \KCH\PCC3\TNaglowekType\DataAnonymousType
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * Data dokonania czynności
     *
     * @param \KCH\PCC3\TNaglowekType\DataAnonymousType $data
     * @return self
     */
    public function setData(\KCH\PCC3\TNaglowekType\DataAnonymousType $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as kodUrzedu
     *
     * @return string
     */
    public function getKodUrzedu()
    {
        return $this->kodUrzedu;
    }

    /**
     * Sets a new kodUrzedu
     *
     * @param string $kodUrzedu
     * @return self
     */
    public function setKodUrzedu($kodUrzedu)
    {
        $this->kodUrzedu = $kodUrzedu;
        return $this;
    }


}

