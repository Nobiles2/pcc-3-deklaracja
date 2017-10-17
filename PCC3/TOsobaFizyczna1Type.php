<?php

namespace KCH\PCC3;

/**
 * Class representing TOsobaFizyczna1Type
 *
 * Podstawowy zestaw danych o osobie fizycznej z identyfikatorem NIP albo PESEL
 * XSD Type: TOsobaFizyczna1
 */
class TOsobaFizyczna1Type
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TOsobaFizyczna1Type\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     */
    private $adresZamieszkania = null;

    /**
     * Gets as osobaFizyczna
     *
     * @return \KCH\PCC3\TIdentyfikatorOsobyFizycznej1Type
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \KCH\PCC3\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\KCH\PCC3\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna)
    {
        $this->osobaFizyczna = $osobaFizyczna;
        return $this;
    }

    /**
     * Gets as adresZamieszkania
     *
     * @return \KCH\PCC3\TOsobaFizyczna1Type\AdresZamieszkaniaAnonymousType
     */
    public function getAdresZamieszkania()
    {
        return $this->adresZamieszkania;
    }

    /**
     * Sets a new adresZamieszkania
     *
     * @param \KCH\PCC3\TOsobaFizyczna1Type\AdresZamieszkaniaAnonymousType
     * $adresZamieszkania
     * @return self
     */
    public function setAdresZamieszkania(\KCH\PCC3\TOsobaFizyczna1Type\AdresZamieszkaniaAnonymousType $adresZamieszkania)
    {
        $this->adresZamieszkania = $adresZamieszkania;
        return $this;
    }


}

