<?php

namespace KCH\PCC3;

/**
 * Class representing PozycjeSzczegolowe
 */
class PozycjeSzczegolowe
{

    /**
     * Podmiot składający deklarację
     *
     * @property string $p7
     */
    private $p7 = null;

    /**
     * Przedmiot opodatkowania : 1 - umowa, 2 - zmiana umowy, 3 - orzeczenie sądu lub
     * ugoda, 4 - inne
     *
     * @property string $p21
     */
    private $p21 = null;

    /**
     * Miejsce położenia rzeczy lub miejsce wykonywania prawa majątkowego: 1 -
     * terytorium RP, 2 - poza terytorium RP
     *
     * @property string $p22
     */
    private $p22 = null;

    /**
     * Miejsce dokonania czynności cywilnoprawnej: 1 - terytorium RP, 2 - poza
     * terytorium RP
     *
     * @property string $p23
     */
    private $p23 = null;

    /**
     * Zwięzłe określenie treści i przedmiotu czynności cywilnoprawnej
     *
     * @property string $p24
     */
    private $p24 = null;

    /**
     * Podstawa opodatkowania
     *
     * @property integer $p25
     */
    private $p25 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p26
     */
    private $p26 = null;

    /**
     * Podstawa opodatkowania
     *
     * @property integer $p27
     */
    private $p27 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p28
     */
    private $p28 = null;

    /**
     * Podstawa opodatkowania
     *
     * @property integer $p29
     */
    private $p29 = null;

    /**
     * Stawka podatku
     *
     * @property float $p30
     */
    private $p30 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p31
     */
    private $p31 = null;

    /**
     * Podstawa opodatkowania
     *
     * @property integer $p32
     */
    private $p32 = null;

    /**
     * Stawka podatku
     *
     * @property float $p33
     */
    private $p33 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p34
     */
    private $p34 = null;

    /**
     * Podstawa opodatkowania
     *
     * @property integer $p35
     */
    private $p35 = null;

    /**
     * Stawka podatku
     *
     * @property float $p36
     */
    private $p36 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p37
     */
    private $p37 = null;

    /**
     * Podstawa opodatkowania
     *
     * @property integer $p38
     */
    private $p38 = null;

    /**
     * Stawka podatku
     *
     * @property float $p39
     */
    private $p39 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p40
     */
    private $p40 = null;

    /**
     * Podstawa opodatkowania (opodatkowana wg stawki podatku 0,1 %)
     *
     * @property integer $p41
     */
    private $p41 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p42
     */
    private $p42 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej (dot. ustanowienia
     * hipoteki na zabezpieczenie wierzytelności o wysokości nieustalonej)
     *
     * @property integer $p43
     */
    private $p43 = null;

    /**
     * Rodzaj czynności cywilnoprawnej (w tym zmiana umowy, orzeczenie sądu lub
     * ugoda)
     *
     * @property string $p44A
     */
    private $p44A = null;

    /**
     * Podstawa opodatkowania
     *
     * @property integer $p44
     */
    private $p44 = null;

    /**
     * Stawka podatku
     *
     * @property float $p45
     */
    private $p45 = null;

    /**
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @property integer $p46
     */
    private $p46 = null;

    /**
     * Kwota należnego podatku
     *
     * @property integer $p47
     */
    private $p47 = null;

    /**
     * Typ spółki: 1 - spółka osobowa, 2 - spółka kapitałowa
     *
     * @property string $p48
     */
    private $p48 = null;

    /**
     * Podstawa opodatkowania dotyczy: 1 - zawarcia umowy spółki, 2 - zwiększenia
     * majątku spółki albo podwyższenia kapitału zakładowego, 3 - dopłaty, 4 -
     * pożyczki udzielonej spółce osobowej przez wspólnika, 5 - oddania spółce
     * rzeczy lub praw majątkowych do nieodpłatnego używania, 6 - przekształcenia
     * spółek, 7 - łączenia spółek, 8 - przeniesienia na terytorium
     * Rzeczypospolitej Polskiej rzeczywistego ośrodka zarządzania spółki
     * kapitałowej lub jej siedziby
     *
     * @property string $p49
     */
    private $p49 = null;

    /**
     * Podstawa opodatkowania - określona zgodnie z art. 6 ust. 1 pkt 8 ustawy
     *
     * @property integer $p50
     */
    private $p50 = null;

    /**
     * Opłaty i koszty związane z zawarciem umowy spółki lub jej zmiany - na
     * podstawie art. 6 ust. 9 ustawy
     *
     * @property float $p51
     */
    private $p51 = null;

    /**
     * Podstawa obliczenia podatku
     *
     * @property float $p52
     */
    private $p52 = null;

    /**
     * Kwota należnego podatku
     *
     * @property integer $p53
     */
    private $p53 = null;

    /**
     * Kwota podatku do zapłaty
     *
     * @property integer $p54
     */
    private $p54 = null;

    /**
     * Województwo
     *
     * @property string $p55
     */
    private $p55 = null;

    /**
     * Powiat
     *
     * @property string $p56
     */
    private $p56 = null;

    /**
     * Gmina
     *
     * @property string $p57
     */
    private $p57 = null;

    /**
     * Ulica
     *
     * @property string $p58
     */
    private $p58 = null;

    /**
     * Numer domu
     *
     * @property string $p59
     */
    private $p59 = null;

    /**
     * Numer lokalu
     *
     * @property string $p60
     */
    private $p60 = null;

    /**
     * Miejscowość
     *
     * @property string $p61
     */
    private $p61 = null;

    /**
     * Kod pocztowy
     *
     * @property string $p62
     */
    private $p62 = null;

    /**
     * Poczta
     *
     * @property string $p63
     */
    private $p63 = null;

    /**
     * Informacja o załącznikach - Liczba dołączonych załączników PCC-3/A
     *
     * @property integer $p64
     */
    private $p64 = null;

    /**
     * Gets as p7
     *
     * Podmiot składający deklarację
     *
     * @return string
     */
    public function getP7()
    {
        return $this->p7;
    }

    /**
     * Sets a new p7
     *
     * Podmiot składający deklarację
     *
     * @param string $p7
     * @return self
     */
    public function setP7($p7)
    {
        $this->p7 = $p7;
        return $this;
    }

    /**
     * Gets as p21
     *
     * Przedmiot opodatkowania : 1 - umowa, 2 - zmiana umowy, 3 - orzeczenie sądu lub
     * ugoda, 4 - inne
     *
     * @return string
     */
    public function getP21()
    {
        return $this->p21;
    }

    /**
     * Sets a new p21
     *
     * Przedmiot opodatkowania : 1 - umowa, 2 - zmiana umowy, 3 - orzeczenie sądu lub
     * ugoda, 4 - inne
     *
     * @param string $p21
     * @return self
     */
    public function setP21($p21)
    {
        $this->p21 = $p21;
        return $this;
    }

    /**
     * Gets as p22
     *
     * Miejsce położenia rzeczy lub miejsce wykonywania prawa majątkowego: 1 -
     * terytorium RP, 2 - poza terytorium RP
     *
     * @return string
     */
    public function getP22()
    {
        return $this->p22;
    }

    /**
     * Sets a new p22
     *
     * Miejsce położenia rzeczy lub miejsce wykonywania prawa majątkowego: 1 -
     * terytorium RP, 2 - poza terytorium RP
     *
     * @param string $p22
     * @return self
     */
    public function setP22($p22)
    {
        $this->p22 = $p22;
        return $this;
    }

    /**
     * Gets as p23
     *
     * Miejsce dokonania czynności cywilnoprawnej: 1 - terytorium RP, 2 - poza
     * terytorium RP
     *
     * @return string
     */
    public function getP23()
    {
        return $this->p23;
    }

    /**
     * Sets a new p23
     *
     * Miejsce dokonania czynności cywilnoprawnej: 1 - terytorium RP, 2 - poza
     * terytorium RP
     *
     * @param string $p23
     * @return self
     */
    public function setP23($p23)
    {
        $this->p23 = $p23;
        return $this;
    }

    /**
     * Gets as p24
     *
     * Zwięzłe określenie treści i przedmiotu czynności cywilnoprawnej
     *
     * @return string
     */
    public function getP24()
    {
        return $this->p24;
    }

    /**
     * Sets a new p24
     *
     * Zwięzłe określenie treści i przedmiotu czynności cywilnoprawnej
     *
     * @param string $p24
     * @return self
     */
    public function setP24($p24)
    {
        $this->p24 = $p24;
        return $this;
    }

    /**
     * Gets as p25
     *
     * Podstawa opodatkowania
     *
     * @return integer
     */
    public function getP25()
    {
        return $this->p25;
    }

    /**
     * Sets a new p25
     *
     * Podstawa opodatkowania
     *
     * @param integer $p25
     * @return self
     */
    public function setP25($p25)
    {
        $this->p25 = $p25;
        return $this;
    }

    /**
     * Gets as p26
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP26()
    {
        return $this->p26;
    }

    /**
     * Sets a new p26
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p26
     * @return self
     */
    public function setP26($p26)
    {
        $this->p26 = $p26;
        return $this;
    }

    /**
     * Gets as p27
     *
     * Podstawa opodatkowania
     *
     * @return integer
     */
    public function getP27()
    {
        return $this->p27;
    }

    /**
     * Sets a new p27
     *
     * Podstawa opodatkowania
     *
     * @param integer $p27
     * @return self
     */
    public function setP27($p27)
    {
        $this->p27 = $p27;
        return $this;
    }

    /**
     * Gets as p28
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP28()
    {
        return $this->p28;
    }

    /**
     * Sets a new p28
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p28
     * @return self
     */
    public function setP28($p28)
    {
        $this->p28 = $p28;
        return $this;
    }

    /**
     * Gets as p29
     *
     * Podstawa opodatkowania
     *
     * @return integer
     */
    public function getP29()
    {
        return $this->p29;
    }

    /**
     * Sets a new p29
     *
     * Podstawa opodatkowania
     *
     * @param integer $p29
     * @return self
     */
    public function setP29($p29)
    {
        $this->p29 = $p29;
        return $this;
    }

    /**
     * Gets as p30
     *
     * Stawka podatku
     *
     * @return float
     */
    public function getP30()
    {
        return $this->p30;
    }

    /**
     * Sets a new p30
     *
     * Stawka podatku
     *
     * @param float $p30
     * @return self
     */
    public function setP30($p30)
    {
        $this->p30 = $p30;
        return $this;
    }

    /**
     * Gets as p31
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP31()
    {
        return $this->p31;
    }

    /**
     * Sets a new p31
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p31
     * @return self
     */
    public function setP31($p31)
    {
        $this->p31 = $p31;
        return $this;
    }

    /**
     * Gets as p32
     *
     * Podstawa opodatkowania
     *
     * @return integer
     */
    public function getP32()
    {
        return $this->p32;
    }

    /**
     * Sets a new p32
     *
     * Podstawa opodatkowania
     *
     * @param integer $p32
     * @return self
     */
    public function setP32($p32)
    {
        $this->p32 = $p32;
        return $this;
    }

    /**
     * Gets as p33
     *
     * Stawka podatku
     *
     * @return float
     */
    public function getP33()
    {
        return $this->p33;
    }

    /**
     * Sets a new p33
     *
     * Stawka podatku
     *
     * @param float $p33
     * @return self
     */
    public function setP33($p33)
    {
        $this->p33 = $p33;
        return $this;
    }

    /**
     * Gets as p34
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP34()
    {
        return $this->p34;
    }

    /**
     * Sets a new p34
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p34
     * @return self
     */
    public function setP34($p34)
    {
        $this->p34 = $p34;
        return $this;
    }

    /**
     * Gets as p35
     *
     * Podstawa opodatkowania
     *
     * @return integer
     */
    public function getP35()
    {
        return $this->p35;
    }

    /**
     * Sets a new p35
     *
     * Podstawa opodatkowania
     *
     * @param integer $p35
     * @return self
     */
    public function setP35($p35)
    {
        $this->p35 = $p35;
        return $this;
    }

    /**
     * Gets as p36
     *
     * Stawka podatku
     *
     * @return float
     */
    public function getP36()
    {
        return $this->p36;
    }

    /**
     * Sets a new p36
     *
     * Stawka podatku
     *
     * @param float $p36
     * @return self
     */
    public function setP36($p36)
    {
        $this->p36 = $p36;
        return $this;
    }

    /**
     * Gets as p37
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP37()
    {
        return $this->p37;
    }

    /**
     * Sets a new p37
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p37
     * @return self
     */
    public function setP37($p37)
    {
        $this->p37 = $p37;
        return $this;
    }

    /**
     * Gets as p38
     *
     * Podstawa opodatkowania
     *
     * @return integer
     */
    public function getP38()
    {
        return $this->p38;
    }

    /**
     * Sets a new p38
     *
     * Podstawa opodatkowania
     *
     * @param integer $p38
     * @return self
     */
    public function setP38($p38)
    {
        $this->p38 = $p38;
        return $this;
    }

    /**
     * Gets as p39
     *
     * Stawka podatku
     *
     * @return float
     */
    public function getP39()
    {
        return $this->p39;
    }

    /**
     * Sets a new p39
     *
     * Stawka podatku
     *
     * @param float $p39
     * @return self
     */
    public function setP39($p39)
    {
        $this->p39 = $p39;
        return $this;
    }

    /**
     * Gets as p40
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP40()
    {
        return $this->p40;
    }

    /**
     * Sets a new p40
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p40
     * @return self
     */
    public function setP40($p40)
    {
        $this->p40 = $p40;
        return $this;
    }

    /**
     * Gets as p41
     *
     * Podstawa opodatkowania (opodatkowana wg stawki podatku 0,1 %)
     *
     * @return integer
     */
    public function getP41()
    {
        return $this->p41;
    }

    /**
     * Sets a new p41
     *
     * Podstawa opodatkowania (opodatkowana wg stawki podatku 0,1 %)
     *
     * @param integer $p41
     * @return self
     */
    public function setP41($p41)
    {
        $this->p41 = $p41;
        return $this;
    }

    /**
     * Gets as p42
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP42()
    {
        return $this->p42;
    }

    /**
     * Sets a new p42
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p42
     * @return self
     */
    public function setP42($p42)
    {
        $this->p42 = $p42;
        return $this;
    }

    /**
     * Gets as p43
     *
     * Obliczony należny podatek od czynności cywilnoprawnej (dot. ustanowienia
     * hipoteki na zabezpieczenie wierzytelności o wysokości nieustalonej)
     *
     * @return integer
     */
    public function getP43()
    {
        return $this->p43;
    }

    /**
     * Sets a new p43
     *
     * Obliczony należny podatek od czynności cywilnoprawnej (dot. ustanowienia
     * hipoteki na zabezpieczenie wierzytelności o wysokości nieustalonej)
     *
     * @param integer $p43
     * @return self
     */
    public function setP43($p43)
    {
        $this->p43 = $p43;
        return $this;
    }

    /**
     * Gets as p44A
     *
     * Rodzaj czynności cywilnoprawnej (w tym zmiana umowy, orzeczenie sądu lub
     * ugoda)
     *
     * @return string
     */
    public function getP44A()
    {
        return $this->p44A;
    }

    /**
     * Sets a new p44A
     *
     * Rodzaj czynności cywilnoprawnej (w tym zmiana umowy, orzeczenie sądu lub
     * ugoda)
     *
     * @param string $p44A
     * @return self
     */
    public function setP44A($p44A)
    {
        $this->p44A = $p44A;
        return $this;
    }

    /**
     * Gets as p44
     *
     * Podstawa opodatkowania
     *
     * @return integer
     */
    public function getP44()
    {
        return $this->p44;
    }

    /**
     * Sets a new p44
     *
     * Podstawa opodatkowania
     *
     * @param integer $p44
     * @return self
     */
    public function setP44($p44)
    {
        $this->p44 = $p44;
        return $this;
    }

    /**
     * Gets as p45
     *
     * Stawka podatku
     *
     * @return float
     */
    public function getP45()
    {
        return $this->p45;
    }

    /**
     * Sets a new p45
     *
     * Stawka podatku
     *
     * @param float $p45
     * @return self
     */
    public function setP45($p45)
    {
        $this->p45 = $p45;
        return $this;
    }

    /**
     * Gets as p46
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @return integer
     */
    public function getP46()
    {
        return $this->p46;
    }

    /**
     * Sets a new p46
     *
     * Obliczony należny podatek od czynności cywilnoprawnej
     *
     * @param integer $p46
     * @return self
     */
    public function setP46($p46)
    {
        $this->p46 = $p46;
        return $this;
    }

    /**
     * Gets as p47
     *
     * Kwota należnego podatku
     *
     * @return integer
     */
    public function getP47()
    {
        return $this->p47;
    }

    /**
     * Sets a new p47
     *
     * Kwota należnego podatku
     *
     * @param integer $p47
     * @return self
     */
    public function setP47($p47)
    {
        $this->p47 = $p47;
        return $this;
    }

    /**
     * Gets as p48
     *
     * Typ spółki: 1 - spółka osobowa, 2 - spółka kapitałowa
     *
     * @return string
     */
    public function getP48()
    {
        return $this->p48;
    }

    /**
     * Sets a new p48
     *
     * Typ spółki: 1 - spółka osobowa, 2 - spółka kapitałowa
     *
     * @param string $p48
     * @return self
     */
    public function setP48($p48)
    {
        $this->p48 = $p48;
        return $this;
    }

    /**
     * Gets as p49
     *
     * Podstawa opodatkowania dotyczy: 1 - zawarcia umowy spółki, 2 - zwiększenia
     * majątku spółki albo podwyższenia kapitału zakładowego, 3 - dopłaty, 4 -
     * pożyczki udzielonej spółce osobowej przez wspólnika, 5 - oddania spółce
     * rzeczy lub praw majątkowych do nieodpłatnego używania, 6 - przekształcenia
     * spółek, 7 - łączenia spółek, 8 - przeniesienia na terytorium
     * Rzeczypospolitej Polskiej rzeczywistego ośrodka zarządzania spółki
     * kapitałowej lub jej siedziby
     *
     * @return string
     */
    public function getP49()
    {
        return $this->p49;
    }

    /**
     * Sets a new p49
     *
     * Podstawa opodatkowania dotyczy: 1 - zawarcia umowy spółki, 2 - zwiększenia
     * majątku spółki albo podwyższenia kapitału zakładowego, 3 - dopłaty, 4 -
     * pożyczki udzielonej spółce osobowej przez wspólnika, 5 - oddania spółce
     * rzeczy lub praw majątkowych do nieodpłatnego używania, 6 - przekształcenia
     * spółek, 7 - łączenia spółek, 8 - przeniesienia na terytorium
     * Rzeczypospolitej Polskiej rzeczywistego ośrodka zarządzania spółki
     * kapitałowej lub jej siedziby
     *
     * @param string $p49
     * @return self
     */
    public function setP49($p49)
    {
        $this->p49 = $p49;
        return $this;
    }

    /**
     * Gets as p50
     *
     * Podstawa opodatkowania - określona zgodnie z art. 6 ust. 1 pkt 8 ustawy
     *
     * @return integer
     */
    public function getP50()
    {
        return $this->p50;
    }

    /**
     * Sets a new p50
     *
     * Podstawa opodatkowania - określona zgodnie z art. 6 ust. 1 pkt 8 ustawy
     *
     * @param integer $p50
     * @return self
     */
    public function setP50($p50)
    {
        $this->p50 = $p50;
        return $this;
    }

    /**
     * Gets as p51
     *
     * Opłaty i koszty związane z zawarciem umowy spółki lub jej zmiany - na
     * podstawie art. 6 ust. 9 ustawy
     *
     * @return float
     */
    public function getP51()
    {
        return $this->p51;
    }

    /**
     * Sets a new p51
     *
     * Opłaty i koszty związane z zawarciem umowy spółki lub jej zmiany - na
     * podstawie art. 6 ust. 9 ustawy
     *
     * @param float $p51
     * @return self
     */
    public function setP51($p51)
    {
        $this->p51 = $p51;
        return $this;
    }

    /**
     * Gets as p52
     *
     * Podstawa obliczenia podatku
     *
     * @return float
     */
    public function getP52()
    {
        return $this->p52;
    }

    /**
     * Sets a new p52
     *
     * Podstawa obliczenia podatku
     *
     * @param float $p52
     * @return self
     */
    public function setP52($p52)
    {
        $this->p52 = $p52;
        return $this;
    }

    /**
     * Gets as p53
     *
     * Kwota należnego podatku
     *
     * @return integer
     */
    public function getP53()
    {
        return $this->p53;
    }

    /**
     * Sets a new p53
     *
     * Kwota należnego podatku
     *
     * @param integer $p53
     * @return self
     */
    public function setP53($p53)
    {
        $this->p53 = $p53;
        return $this;
    }

    /**
     * Gets as p54
     *
     * Kwota podatku do zapłaty
     *
     * @return integer
     */
    public function getP54()
    {
        return $this->p54;
    }

    /**
     * Sets a new p54
     *
     * Kwota podatku do zapłaty
     *
     * @param integer $p54
     * @return self
     */
    public function setP54($p54)
    {
        $this->p54 = $p54;
        return $this;
    }

    /**
     * Gets as p55
     *
     * Województwo
     *
     * @return string
     */
    public function getP55()
    {
        return $this->p55;
    }

    /**
     * Sets a new p55
     *
     * Województwo
     *
     * @param string $p55
     * @return self
     */
    public function setP55($p55)
    {
        $this->p55 = $p55;
        return $this;
    }

    /**
     * Gets as p56
     *
     * Powiat
     *
     * @return string
     */
    public function getP56()
    {
        return $this->p56;
    }

    /**
     * Sets a new p56
     *
     * Powiat
     *
     * @param string $p56
     * @return self
     */
    public function setP56($p56)
    {
        $this->p56 = $p56;
        return $this;
    }

    /**
     * Gets as p57
     *
     * Gmina
     *
     * @return string
     */
    public function getP57()
    {
        return $this->p57;
    }

    /**
     * Sets a new p57
     *
     * Gmina
     *
     * @param string $p57
     * @return self
     */
    public function setP57($p57)
    {
        $this->p57 = $p57;
        return $this;
    }

    /**
     * Gets as p58
     *
     * Ulica
     *
     * @return string
     */
    public function getP58()
    {
        return $this->p58;
    }

    /**
     * Sets a new p58
     *
     * Ulica
     *
     * @param string $p58
     * @return self
     */
    public function setP58($p58)
    {
        $this->p58 = $p58;
        return $this;
    }

    /**
     * Gets as p59
     *
     * Numer domu
     *
     * @return string
     */
    public function getP59()
    {
        return $this->p59;
    }

    /**
     * Sets a new p59
     *
     * Numer domu
     *
     * @param string $p59
     * @return self
     */
    public function setP59($p59)
    {
        $this->p59 = $p59;
        return $this;
    }

    /**
     * Gets as p60
     *
     * Numer lokalu
     *
     * @return string
     */
    public function getP60()
    {
        return $this->p60;
    }

    /**
     * Sets a new p60
     *
     * Numer lokalu
     *
     * @param string $p60
     * @return self
     */
    public function setP60($p60)
    {
        $this->p60 = $p60;
        return $this;
    }

    /**
     * Gets as p61
     *
     * Miejscowość
     *
     * @return string
     */
    public function getP61()
    {
        return $this->p61;
    }

    /**
     * Sets a new p61
     *
     * Miejscowość
     *
     * @param string $p61
     * @return self
     */
    public function setP61($p61)
    {
        $this->p61 = $p61;
        return $this;
    }

    /**
     * Gets as p62
     *
     * Kod pocztowy
     *
     * @return string
     */
    public function getP62()
    {
        return $this->p62;
    }

    /**
     * Sets a new p62
     *
     * Kod pocztowy
     *
     * @param string $p62
     * @return self
     */
    public function setP62($p62)
    {
        $this->p62 = $p62;
        return $this;
    }

    /**
     * Gets as p63
     *
     * Poczta
     *
     * @return string
     */
    public function getP63()
    {
        return $this->p63;
    }

    /**
     * Sets a new p63
     *
     * Poczta
     *
     * @param string $p63
     * @return self
     */
    public function setP63($p63)
    {
        $this->p63 = $p63;
        return $this;
    }

    /**
     * Gets as p64
     *
     * Informacja o załącznikach - Liczba dołączonych załączników PCC-3/A
     *
     * @return integer
     */
    public function getP64()
    {
        return $this->p64;
    }

    /**
     * Sets a new p64
     *
     * Informacja o załącznikach - Liczba dołączonych załączników PCC-3/A
     *
     * @param integer $p64
     * @return self
     */
    public function setP64($p64)
    {
        $this->p64 = $p64;
        return $this;
    }


}

