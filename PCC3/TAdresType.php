<?php

namespace KCH\PCC3;

/**
 * Class representing TAdresType
 *
 * Dane określające adres
 * XSD Type: TAdres
 */
class TAdresType
{

    /**
     * @property \KCH\PCC3\TAdresPolskiType $adresPol
     */
    private $adresPol = null;

    /**
     * @property \KCH\PCC3\TAdresZagranicznyType $adresZagr
     */
    private $adresZagr = null;

    /**
     * Gets as adresPol
     *
     * @return \KCH\PCC3\TAdresPolskiType
     */
    public function getAdresPol()
    {
        return $this->adresPol;
    }

    /**
     * Sets a new adresPol
     *
     * @param \KCH\PCC3\TAdresPolskiType $adresPol
     * @return self
     */
    public function setAdresPol(\KCH\PCC3\TAdresPolskiType $adresPol)
    {
        $this->adresPol = $adresPol;
        return $this;
    }

    /**
     * Gets as adresZagr
     *
     * @return \KCH\PCC3\TAdresZagranicznyType
     */
    public function getAdresZagr()
    {
        return $this->adresZagr;
    }

    /**
     * Sets a new adresZagr
     *
     * @param \KCH\PCC3\TAdresZagranicznyType $adresZagr
     * @return self
     */
    public function setAdresZagr(\KCH\PCC3\TAdresZagranicznyType $adresZagr)
    {
        $this->adresZagr = $adresZagr;
        return $this;
    }


}

