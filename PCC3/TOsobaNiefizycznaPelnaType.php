<?php

namespace KCH\PCC3;

/**
 * Class representing TOsobaNiefizycznaPelnaType
 *
 * Pełny zestaw danych o osobie fizycznej lub niefizycznej
 * XSD Type: TOsobaNiefizycznaPelna
 */
class TOsobaNiefizycznaPelnaType
{

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejPelnyType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * @property \KCH\PCC3\TOsobaNiefizycznaPelnaType\AdresSiedzibyAnonymousType
     * $adresSiedziby
     */
    private $adresSiedziby = null;

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
     * Gets as adresSiedziby
     *
     * @return \KCH\PCC3\TOsobaNiefizycznaPelnaType\AdresSiedzibyAnonymousType
     */
    public function getAdresSiedziby()
    {
        return $this->adresSiedziby;
    }

    /**
     * Sets a new adresSiedziby
     *
     * @param \KCH\PCC3\TOsobaNiefizycznaPelnaType\AdresSiedzibyAnonymousType
     * $adresSiedziby
     * @return self
     */
    public function setAdresSiedziby(\KCH\PCC3\TOsobaNiefizycznaPelnaType\AdresSiedzibyAnonymousType $adresSiedziby)
    {
        $this->adresSiedziby = $adresSiedziby;
        return $this;
    }


}

