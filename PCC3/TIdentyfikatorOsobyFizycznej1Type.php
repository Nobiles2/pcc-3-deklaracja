<?php

namespace KCH\PCC3;

/**
 * Class representing TIdentyfikatorOsobyFizycznej1Type
 *
 * Podstawowy zestaw danych identyfikacyjnych o osobie fizycznej z identyfikatorem
 * NIP albo PESEL
 * XSD Type: TIdentyfikatorOsobyFizycznej1
 */
class TIdentyfikatorOsobyFizycznej1Type
{

    /**
     * Numer Identyfikacji Podatkowej (NIP)
     *
     * @property string $nIP
     */
    private $nIP = null;

    /**
     * Numer PESEL
     *
     * @property string $pESEL
     */
    private $pESEL = null;

    /**
     * Pierwsze imię
     *
     * @property string $imiePierwsze
     */
    private $imiePierwsze = null;

    /**
     * Nazwisko
     *
     * @property string $nazwisko
     */
    private $nazwisko = null;

    /**
     * Data urodzenia
     *
     * @property \DateTime $dataUrodzenia
     */
    private $dataUrodzenia = null;

    /**
     * Gets as nIP
     *
     * Numer Identyfikacji Podatkowej (NIP)
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
     * Numer Identyfikacji Podatkowej (NIP)
     *
     * @param string $nIP
     * @return self
     */
    public function setNIP($nIP)
    {
        $this->nIP = $nIP;
        return $this;
    }

    /**
     * Gets as pESEL
     *
     * Numer PESEL
     *
     * @return string
     */
    public function getPESEL()
    {
        return $this->pESEL;
    }

    /**
     * Sets a new pESEL
     *
     * Numer PESEL
     *
     * @param string $pESEL
     * @return self
     */
    public function setPESEL($pESEL)
    {
        $this->pESEL = $pESEL;
        return $this;
    }

    /**
     * Gets as imiePierwsze
     *
     * Pierwsze imię
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
     * Pierwsze imię
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
     * Nazwisko
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
     * Nazwisko
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
     * Data urodzenia
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
     * Data urodzenia
     *
     * @param \DateTime $dataUrodzenia
     * @return self
     */
    public function setDataUrodzenia(\DateTime $dataUrodzenia)
    {
        $this->dataUrodzenia = $dataUrodzenia;
        return $this;
    }


}

