<?php

namespace KCH\PCC3;

/**
 * Class representing TPodmiotDowolnyPelnyType
 *
 * Pełny zestaw danych o osobie fizycznej lub niefizycznej
 * XSD Type: TPodmiotDowolnyPelny
 */
class TPodmiotDowolnyPelnyType
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @property
     * \KCH\PCC3\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAnonymousType
     * $adresZamieszkaniaSiedziby
     */
    private $adresZamieszkaniaSiedziby = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \KCH\PCC3\TIdentyfikatorOsobyFizycznejPelnyType
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \KCH\PCC3\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\KCH\PCC3\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as osobaNiefizyczna
     *
     * @return \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejPelnyType
     */
    public function getOsobaNiefizyczna()
    {
        return $this->osobaNiefizyczna;
    }

    /**
     * Sets a new osobaNiefizyczna
     *
     * @param \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     * @return self
     */
    public function setOsobaNiefizyczna(\KCH\PCC3\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna)
    {
        $this->osobaNiefizyczna = $osobaNiefizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkaniaSiedziby
     *
     * @return
     * \KCH\PCC3\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAnonymousType
     */
    public function getAdresZamieszkaniaSiedziby()
    {
        return $this->adresZamieszkaniaSiedziby;
    }

    /**
     * Sets a new adresZamieszkaniaSiedziby
     *
     * @param \KCH\PCC3\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAnonymousType
     * $adresZamieszkaniaSiedziby
     * @return self
     */
    public function setAdresZamieszkaniaSiedziby(\KCH\PCC3\TPodmiotDowolnyPelnyType\AdresZamieszkaniaSiedzibyAnonymousType $adresZamieszkaniaSiedziby)
    {
        $this->adresZamieszkaniaSiedziby = $adresZamieszkaniaSiedziby;
        return $this;
    }


}

