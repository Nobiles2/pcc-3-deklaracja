<?php

namespace KCH\PCC3;

/**
 * Class representing TOsobaFizycznaPelnaType
 *
 * Pełny zestaw danych o osobie fizycznej
 * XSD Type: TOsobaFizycznaPelna
 */
class TOsobaFizycznaPelnaType
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyFizycznejPelnyType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TOsobaFizycznaPelnaType\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     */
    private $adresZamieszkania = null;

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
     * Gets as adresZamieszkania
     *
     * @return \KCH\PCC3\TOsobaFizycznaPelnaType\AdresZamieszkaniaAnonymousType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \KCH\PCC3\TOsobaFizycznaPelnaType\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\KCH\PCC3\TOsobaFizycznaPelnaType\AdresZamieszkaniaAnonymousType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

