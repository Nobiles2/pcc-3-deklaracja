<?php

namespace KCH\PCC3;

/**
 * Class representing TIdentyfikatorOsobyNiefizycznejZagranicznejType
 *
 * Zestaw danych identyfikacyjnych dla osoby niefizycznej zagranicznej
 * XSD Type: TIdentyfikatorOsobyNiefizycznejZagranicznej
 */
class TIdentyfikatorOsobyNiefizycznejZagranicznejType
{

    /**
     * Pełna nazwa [Name]
     *
     * @property string $pelnaNazwa
     */
    private $pelnaNazwa = null;

    /**
     * Nazwa skrócona [Short Name]
     *
     * @property string $skroconaNazwa
     */
    private $skroconaNazwa = null;

    /**
     * Numer Identyfikacji Podatkowej (NIP) [Tax Identification Number (NIP)]
     *
     * @property string $nIP
     */
    private $nIP = null;

    /**
     * Gets as pelnaNazwa
     *
     * Pełna nazwa [Name]
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
     * Pełna nazwa [Name]
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
     * Gets as skroconaNazwa
     *
     * Nazwa skrócona [Short Name]
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
     * Nazwa skrócona [Short Name]
     *
     * @param string $skroconaNazwa
     * @return self
     */
    public function setSkroconaNazwa($skroconaNazwa)
    {
        $this->skroconaNazwa = $skroconaNazwa;
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

