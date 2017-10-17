<?php

namespace KCH\PCC3;

/**
 * Class representing TPodmiotDowolnyBezAdresuType
 *
 * Skrócony zestaw danych o osobie fizycznej lub niefizycznej
 * XSD Type: TPodmiotDowolnyBezAdresu
 */
class TPodmiotDowolnyBezAdresuType
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyFizycznejType $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

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

