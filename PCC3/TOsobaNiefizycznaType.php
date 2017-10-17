<?php

namespace KCH\PCC3;

/**
 * Class representing TOsobaNiefizycznaType
 *
 * Podstawowy zestaw danych o osobie niefizycznej
 * XSD Type: TOsobaNiefizyczna
 */
class TOsobaNiefizycznaType
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @property \KCH\PCC3\TOsobaNiefizycznaType\AdresSiedzibyAnonymousType
     * $adresSiedziby
     */
    private $adresSiedziby = null;

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

    /**
     * Gets as adresSiedziby
     *
     * @return \KCH\PCC3\TOsobaNiefizycznaType\AdresSiedzibyAnonymousType
     */
    public function getAdresSiedziby()
    {
        return $this->adresSiedziby;
    }

    /**
     * Sets a new adresSiedziby
     *
     * @param \KCH\PCC3\TOsobaNiefizycznaType\AdresSiedzibyAnonymousType $adresSiedziby
     * @return self
     */
    public function setAdresSiedziby(\KCH\PCC3\TOsobaNiefizycznaType\AdresSiedzibyAnonymousType $adresSiedziby)
    {
        $this->adresSiedziby = $adresSiedziby;
        return $this;
    }


}

