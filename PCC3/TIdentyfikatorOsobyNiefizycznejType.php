<?php

namespace KCH\PCC3;

/**
 * Class representing TIdentyfikatorOsobyNiefizycznejType
 *
 * Podstawowy zestaw danych identyfikacyjnych o osobie niefizycznej
 * XSD Type: TIdentyfikatorOsobyNiefizycznej
 */
class TIdentyfikatorOsobyNiefizycznejType
{

    /**
     * Numer Identyfikacji Podatkowej (NIP)
     *
     * @property string $nIP
     */
    private $nIP = null;

    /**
     * Pełna nazwa
     *
     * @property string $pelnaNazwa
     */
    private $pelnaNazwa = null;

    /**
     * Skrócona nazwa
     *
     * @property string $skroconaNazwa
     */
    private $skroconaNazwa = null;

    /**
     * Numer REGON
     *
     * @property string $rEGON
     */
    private $rEGON = null;

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
     * Gets as pelnaNazwa
     *
     * Pełna nazwa
     *
     * @return string
     */
    public function getPelnaNazwa()
    {
        return $this->pelnaNazwa;
    }

    /**
     * Sets a new pelnaNazwa
     *
     * Pełna nazwa
     *
     * @param string $pelnaNazwa
     * @return self
     */
    public function setPelnaNazwa($pelnaNazwa)
    {
        $this->pelnaNazwa = $pelnaNazwa;
        return $this;
    }

    /**
     * Gets as rEGON
     *
     * Numer REGON
     *
     * @return string
     */
    public function getREGON()
    {
        return $this->rEGON;
    }

    /**
     * Sets a new rEGON
     *
     * Numer REGON
     *
     * @param string $rEGON
     * @return self
     */
    public function setREGON($rEGON)
    {
        $this->rEGON = $rEGON;
        return $this;
    }

    /**
     * Gets as skroconaNazwa
     *
     * Skrócona nazwa
     *
     * @return string
     */
    public function getSkroconaNazwa()
    {
        return $this->skroconaNazwa;
    }

    /**
     * Sets a new skroconaNazwa
     *
     * Skrócona nazwa
     *
     * @param string $skroconaNazwa
     * @return self
     */
    public function setSkroconaNazwa($skroconaNazwa)
    {
        $this->skroconaNazwa = $skroconaNazwa;
        return $this;
    }
}

