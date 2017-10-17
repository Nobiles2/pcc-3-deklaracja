<?php

namespace KCH\PCC3;

/**
 * Class representing TAdresZagranicznyType
 *
 * Informacje opisujące adres zagraniczny
 * XSD Type: TAdresZagraniczny
 */
class TAdresZagranicznyType
{

    /**
     * Kod Kraju [Country Code]
     *
     * @property string $kodKraju
     */
    private $kodKraju = null;

    /**
     * Kod pocztowy [Postal code]
     *
     * @property string $kodPocztowy
     */
    private $kodPocztowy = null;

    /**
     * Nazwa miejscowości [City]
     *
     * @property string $miejscowosc
     */
    private $miejscowosc = null;

    /**
     * Nazwa ulicy [Street]
     *
     * @property string $ulica
     */
    private $ulica = null;

    /**
     * Numer budynku [Building number]
     *
     * @property string $nrDomu
     */
    private $nrDomu = null;

    /**
     * Numer lokalu [Flat number]
     *
     * @property string $nrLokalu
     */
    private $nrLokalu = null;

    /**
     * Gets as kodKraju
     *
     * Kod Kraju [Country Code]
     *
     * @return string
     */
    public function getKodKraju()
    {
        return $this->kodKraju;
    }

    /**
     * Sets a new kodKraju
     *
     * Kod Kraju [Country Code]
     *
     * @param string $kodKraju
     * @return self
     */
    public function setKodKraju($kodKraju)
    {
        $this->kodKraju = $kodKraju;
        return $this;
    }

    /**
     * Gets as kodPocztowy
     *
     * Kod pocztowy [Postal code]
     *
     * @return string
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Sets a new kodPocztowy
     *
     * Kod pocztowy [Postal code]
     *
     * @param string $kodPocztowy
     * @return self
     */
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;
        return $this;
    }

    /**
     * Gets as miejscowosc
     *
     * Nazwa miejscowości [City]
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Sets a new miejscowosc
     *
     * Nazwa miejscowości [City]
     *
     * @param string $miejscowosc
     * @return self
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;
        return $this;
    }

    /**
     * Gets as ulica
     *
     * Nazwa ulicy [Street]
     *
     * @return string
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Sets a new ulica
     *
     * Nazwa ulicy [Street]
     *
     * @param string $ulica
     * @return self
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;
        return $this;
    }

    /**
     * Gets as nrDomu
     *
     * Numer budynku [Building number]
     *
     * @return string
     */
    public function getNrDomu()
    {
        return $this->nrDomu;
    }

    /**
     * Sets a new nrDomu
     *
     * Numer budynku [Building number]
     *
     * @param string $nrDomu
     * @return self
     */
    public function setNrDomu($nrDomu)
    {
        $this->nrDomu = $nrDomu;
        return $this;
    }

    /**
     * Gets as nrLokalu
     *
     * Numer lokalu [Flat number]
     *
     * @return string
     */
    public function getNrLokalu()
    {
        return $this->nrLokalu;
    }

    /**
     * Sets a new nrLokalu
     *
     * Numer lokalu [Flat number]
     *
     * @param string $nrLokalu
     * @return self
     */
    public function setNrLokalu($nrLokalu)
    {
        $this->nrLokalu = $nrLokalu;
        return $this;
    }


}

