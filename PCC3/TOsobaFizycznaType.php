<?php

namespace KCH\PCC3;

/**
 * Class representing TOsobaFizycznaType
 *
 * Podstawowy zestaw danych o osobie fizycznej
 * XSD Type: TOsobaFizyczna
 */
class TOsobaFizycznaType
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TOsobaFizycznaType\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     */
    private $adresZamieszkania = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \KCH\PCC3\TIdentyfikatorOsobyFizycznejType
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \KCH\PCC3\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\KCH\PCC3\TIdentyfikatorOsobyFizycznejType $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkania
     *
     * @return \KCH\PCC3\TOsobaFizycznaType\AdresZamieszkaniaAnonymousType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \KCH\PCC3\TOsobaFizycznaType\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\KCH\PCC3\TOsobaFizycznaType\AdresZamieszkaniaAnonymousType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

