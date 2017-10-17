<?php

namespace KCH\PCC3;

/**
 * Class representing TIdentyfikatorOsobyFizycznejZagranicznejType
 *
 * Zestaw danych identyfikacyjnych dla osoby fizycznej zagranicznej
 * XSD Type: TIdentyfikatorOsobyFizycznejZagranicznej
 */
class TIdentyfikatorOsobyFizycznejZagranicznejType
{

    /**
     * Imię pierwsze [First name]
     *
     * @property string $imiePierwsze
     */
    private $imiePierwsze = null;

    /**
     * Nazwisko [Family name]
     *
     * @property string $nazwisko
     */
    private $nazwisko = null;

    /**
     * Data urodzenia [Date of Birth]
     *
     * @property \DateTime $dataUrodzenia
     */
    private $dataUrodzenia = null;

    /**
     * Miejsce urodzenia [Place of Birth]
     *
     * @property string $miejsceUrodzenia
     */
    private $miejsceUrodzenia = null;

    /**
     * Imię ojca [Father’s name]
     *
     * @property string $imieOjca
     */
    private $imieOjca = null;

    /**
     * Imię matki [Mother’s name]
     *
     * @property string $imieMatki
     */
    private $imieMatki = null;

    /**
     * Numer Identyfikacji Podatkowej (NIP) [Tax Identification Number (NIP)]
     *
     * @property string $nIP
     */
    private $nIP = null;

    /**
     * Gets as imiePierwsze
     *
     * Imię pierwsze [First name]
     *
     * @return string
     */
    public function getImiePierwsze()
    {
        return $this->imiePierwsze;
    }

    /**
     * Sets a new imiePierwsze
     *
     * Imię pierwsze [First name]
     *
     * @param string $imiePierwsze
     * @return self
     */
    public function setImiePierwsze($imiePierwsze)
    {
        $this->imiePierwsze = $imiePierwsze;
        return $this;
    }

    /**
     * Gets as nazwisko
     *
     * Nazwisko [Family name]
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Sets a new nazwisko
     *
     * Nazwisko [Family name]
     *
     * @param string $nazwisko
     * @return self
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;
        return $this;
    }

    /**
     * Gets as dataUrodzenia
     *
     * Data urodzenia [Date of Birth]
     *
     * @return \DateTime
     */
    public function getDataUrodzenia()
    {
        return $this->dataUrodzenia;
    }

    /**
     * Sets a new dataUrodzenia
     *
     * Data urodzenia [Date of Birth]
     *
     * @param \DateTime $dataUrodzenia
     * @return self
     */
    public function setDataUrodzenia(\DateTime $dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;
        return $this;
    }

    /**
     * Gets as miejsceUrodzenia
     *
     * Miejsce urodzenia [Place of Birth]
     *
     * @return string
     */
    public function getMiejsceUrodzenia()
    {
        return $this->miejsceUrodzenia;
    }

    /**
     * Sets a new miejsceUrodzenia
     *
     * Miejsce urodzenia [Place of Birth]
     *
     * @param string $miejsceUrodzenia
     * @return self
     */
    public function setMiejsceUrodzenia($miejsceUrodzenia)
    {
        $this->miejsceUrodzenia = $miejsceUrodzenia;
        return $this;
    }

    /**
     * Gets as imieOjca
     *
     * Imię ojca [Father’s name]
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
     * Imię ojca [Father’s name]
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
     * Imię matki [Mother’s name]
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
     * Imię matki [Mother’s name]
     *
     * @param string $imieMatki
     * @return self
     */
    public function setImieMatki($imieMatki)
    {
        $this->imieMatki = $imieMatki;
        return $this;
    }

    /**
     * Gets as nIP
     *
     * Numer Identyfikacji Podatkowej (NIP) [Tax Identification Number (NIP)]
     *
     * @return string
     */
    public function getNIP()
    {
        return $this->nIP;
    }

    /**
     * Sets a new nIP
     *
     * Numer Identyfikacji Podatkowej (NIP) [Tax Identification Number (NIP)]
     *
     * @param string $nIP
     * @return self
     */
    public function setNIP($nIP)
    {
        $this->nIP = $nIP;
        return $this;
    }


}

