<?php

namespace KCH\PCC3;

/**
 * Class representing TNaglowekORDZUType
 *
 * Nagłówek deklaracji
 * XSD Type: TNaglowek_ORD-ZU
 */
class TNaglowekORDZUType
{

    /**
     * @property \KCH\PCC3\TNaglowekORDZUType\KodFormularzaAnonymousType $kodFormularza
     */
    private $kodFormularza = null;

    /**
     * @property string $wariantFormularza
     */
    private $wariantFormularza = null;

    /**
     * Gets as kodFormularza
     *
     * @return \KCH\PCC3\TNaglowekORDZUType\KodFormularzaAnonymousType
     */
    public function getKodFormularza()
    {
        return $this->kodFormularza;
    }

    /**
     * Sets a new kodFormularza
     *
     * @param \KCH\PCC3\TNaglowekORDZUType\KodFormularzaAnonymousType $kodFormularza
     * @return self
     */
    public function setKodFormularza(\KCH\PCC3\TNaglowekORDZUType\KodFormularzaAnonymousType $kodFormularza)
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


}

