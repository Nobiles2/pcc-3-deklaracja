<?php

namespace KCH\PCC3\TOsobaNiefizycznaType;

use KCH\PCC3\TAdresType;

/**
 * Class representing AdresSiedzibyAnonymousType
 */
class AdresSiedzibyAnonymousType extends TAdresType
{

    /**
     * @property string $rodzajAdresu
     */
    private $rodzajAdresu = null;

    /**
     * Gets as rodzajAdresu
     *
     * @return string
     */
    public function getRodzajAdresu()
    {
        return $this->rodzajAdresu;
    }

    /**
     * Sets a new rodzajAdresu
     *
     * @param string $rodzajAdresu
     * @return self
     */
    public function setRodzajAdresu($rodzajAdresu)
    {
        $this->rodzajAdresu = $rodzajAdresu;
        return $this;
    }


}

