<?php

namespace KCH\PCC3;

/**
 * Class representing ZalacznikORDZU
 */
class ZalacznikORDZU
{

    /**
     * @property \KCH\PCC3\TNaglowekORDZUType $naglowek
     */
    private $naglowek = null;

    /**
     * @property \KCH\PCC3\ZalacznikORDZU\PozycjeSzczegoloweAnonymousType
     * $pozycjeSzczegolowe
     */
    private $pozycjeSzczegolowe = null;

    /**
     * Gets as naglowek
     *
     * @return \KCH\PCC3\TNaglowekORDZUType
     */
    public function getNaglowek()
    {
        return $this->naglowek;
    }

    /**
     * Sets a new naglowek
     *
     * @param \KCH\PCC3\TNaglowekORDZUType $naglowek
     * @return self
     */
    public function setNaglowek(\KCH\PCC3\TNaglowekORDZUType $naglowek)
    {
        $this->naglowek = $naglowek;
        return $this;
    }

    /**
     * Gets as pozycjeSzczegolowe
     *
     * @return \KCH\PCC3\ZalacznikORDZU\PozycjeSzczegoloweAnonymousType
     */
    public function getPozycjeSzczegolowe()
    {
        return $this->pozycjeSzczegolowe;
    }

    /**
     * Sets a new pozycjeSzczegolowe
     *
     * @param \KCH\PCC3\ZalacznikORDZU\PozycjeSzczegoloweAnonymousType
     * $pozycjeSzczegolowe
     * @return self
     */
    public function setPozycjeSzczegolowe(\KCH\PCC3\ZalacznikORDZU\PozycjeSzczegoloweAnonymousType $pozycjeSzczegolowe)
    {
        $this->pozycjeSzczegolowe = $pozycjeSzczegolowe;
        return $this;
    }


}

