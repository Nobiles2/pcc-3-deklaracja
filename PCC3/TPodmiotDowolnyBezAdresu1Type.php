<?php

namespace KCH\PCC3;

/**
 * Class representing TPodmiotDowolnyBezAdresu1Type
 *
 * Skrócony zestaw danych o osobie fizycznej lub niefizycznej z identyfikatorem
 * NIP albo PESEL
 * XSD Type: TPodmiotDowolnyBezAdresu1
 */
class TPodmiotDowolnyBezAdresu1Type
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyFizycznej1Type $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

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
     * Gets as osobaNiefizyczna
     *
     * @return \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejType
     */
    public function getOsobaNiefizyczna()
    {
        return $this->osobaNiefizyczna;
    }

    /**
     * Sets a new osobaNiefizyczna
     *
     * @param \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     * @return self
     */
    public function setOsobaNiefizyczna(\KCH\PCC3\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna)
    {
        $this->osobaNiefizyczna = $osobaNiefizyczna;
        return $this;
    }


}

