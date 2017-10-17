<?php

namespace KCH\PCC3;

/**
 * Class representing Deklaracja
 */
class Deklaracja
{

    /**
     * Nagłówek deklaracji
     *
     * @property \KCH\PCC3\TNaglowekType $naglowek
     */
    private $naglowek = null;

    /**
     * Dane podatnika dokonującego zapłaty lub zwolnionego z podatku na podstawie
     * art. 9 pkt 10 lit. b ustawy
     *
     * @property \KCH\PCC3\Deklaracja\Podmiot1AnonymousType $podmiot1
     */
    private $podmiot1 = null;

    /**
     * Przedmiot opodatkowania i treść czynności cywilnoprawnej, obliczenie
     * należnego podatku od czynności cywilnoprawnych, z wyjątkiem umowy spółki
     * lub jej zmiany, obliczenie należnego podatku od umowy spółki / zmiany umowy
     * spółki, podatek do zapłaty, informacje dodatkowe
     *
     * @property \KCH\PCC3\PozycjeSzczegolowe $pozycjeSzczegolowe
     */
    private $pozycjeSzczegolowe = null;

    /**
     * @property string $pouczenie1
     */
    private $pouczenie1 = null;

    /**
     * @property string $pouczenie2
     */
    private $pouczenie2 = null;

    /**
     * @property \KCH\PCC3\Deklaracja\ZalacznikiAnonymousType $zalaczniki
     */
    private $zalaczniki = null;

    /**
     * Gets as naglowek
     *
     * Nagłówek deklaracji
     *
     * @return \KCH\PCC3\TNaglowekType
     */
    public function getNaglowek()
    {
        return $this->naglowek;
    }

    /**
     * Sets a new naglowek
     *
     * Nagłówek deklaracji
     *
     * @param \KCH\PCC3\TNaglowekType $naglowek
     * @return self
     */
    public function setNaglowek(\KCH\PCC3\TNaglowekType $naglowek)
    {
        $this->naglowek = $naglowek;
        return $this;
    }

    /**
     * Gets as podmiot1
     *
     * Dane podatnika dokonującego zapłaty lub zwolnionego z podatku na podstawie
     * art. 9 pkt 10 lit. b ustawy
     *
     * @return \KCH\PCC3\Deklaracja\Podmiot1AnonymousType
     */
    public function getPodmiot1()
    {
        return $this->podmiot1;
    }

    /**
     * Sets a new podmiot1
     *
     * Dane podatnika dokonującego zapłaty lub zwolnionego z podatku na podstawie
     * art. 9 pkt 10 lit. b ustawy
     *
     * @param \KCH\PCC3\Deklaracja\Podmiot1AnonymousType $podmiot1
     * @return self
     */
    public function setPodmiot1(\KCH\PCC3\Deklaracja\Podmiot1AnonymousType $podmiot1)
    {
        $this->podmiot1 = $podmiot1;
        return $this;
    }

    /**
     * Gets as pozycjeSzczegolowe
     *
     * Przedmiot opodatkowania i treść czynności cywilnoprawnej, obliczenie
     * należnego podatku od czynności cywilnoprawnych, z wyjątkiem umowy spółki
     * lub jej zmiany, obliczenie należnego podatku od umowy spółki / zmiany umowy
     * spółki, podatek do zapłaty, informacje dodatkowe
     *
     * @return \KCH\PCC3\PozycjeSzczegolowe
     */
    public function getPozycjeSzczegolowe()
    {
        return $this->pozycjeSzczegolowe;
    }

    /**
     * Sets a new pozycjeSzczegolowe
     *
     * Przedmiot opodatkowania i treść czynności cywilnoprawnej, obliczenie
     * należnego podatku od czynności cywilnoprawnych, z wyjątkiem umowy spółki
     * lub jej zmiany, obliczenie należnego podatku od umowy spółki / zmiany umowy
     * spółki, podatek do zapłaty, informacje dodatkowe
     *
     * @param \KCH\PCC3\PozycjeSzczegolowe $pozycjeSzczegolowe
     * @return self
     */
    public function setPozycjeSzczegolowe(\KCH\PCC3\PozycjeSzczegolowe $pozycjeSzczegolowe)
    {
        $this->pozycjeSzczegolowe = $pozycjeSzczegolowe;
        return $this;
    }

    /**
     * Gets as pouczenie1
     *
     * @return string
     */
    public function getPouczenie1()
    {
        return $this->pouczenie1;
    }

    /**
     * Sets a new pouczenie1
     *
     * @param string $pouczenie1
     * @return self
     */
    public function setPouczenie1($pouczenie1)
    {
        $this->pouczenie1 = $pouczenie1;
        return $this;
    }

    /**
     * Gets as pouczenie2
     *
     * @return string
     */
    public function getPouczenie2()
    {
        return $this->pouczenie2;
    }

    /**
     * Sets a new pouczenie2
     *
     * @param string $pouczenie2
     * @return self
     */
    public function setPouczenie2($pouczenie2)
    {
        $this->pouczenie2 = $pouczenie2;
        return $this;
    }

    /**
     * Gets as zalaczniki
     *
     * @return \KCH\PCC3\Deklaracja\ZalacznikiAnonymousType
     */
    public function getZalaczniki()
    {
        return $this->zalaczniki;
    }

    /**
     * Sets a new zalaczniki
     *
     * @param \KCH\PCC3\Deklaracja\ZalacznikiAnonymousType $zalaczniki
     * @return self
     */
    public function setZalaczniki(\KCH\PCC3\Deklaracja\ZalacznikiAnonymousType $zalaczniki)
    {
        $this->zalaczniki = $zalaczniki;
        return $this;
    }


}

