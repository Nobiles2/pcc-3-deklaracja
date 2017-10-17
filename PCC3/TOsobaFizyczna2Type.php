<?php

namespace KCH\PCC3;

/**
 * Class representing TOsobaFizyczna2Type
 *
 * Podstawowy zestaw danych o osobie fizycznej z identyfikatorem NIP
 * XSD Type: TOsobaFizyczna2
 */
class TOsobaFizyczna2Type
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyFizycznej2Type $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TOsobaFizyczna2Type\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     */
    private $adresZamieszkania = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \KCH\PCC3\TIdentyfikatorOsobyFizycznej2Type
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \KCH\PCC3\TIdentyfikatorOsobyFizycznej2Type $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\KCH\PCC3\TIdentyfikatorOsobyFizycznej2Type $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkania
     *
     * @return \KCH\PCC3\TOsobaFizyczna2Type\AdresZamieszkaniaAnonymousType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \KCH\PCC3\TOsobaFizyczna2Type\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\KCH\PCC3\TOsobaFizyczna2Type\AdresZamieszkaniaAnonymousType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

