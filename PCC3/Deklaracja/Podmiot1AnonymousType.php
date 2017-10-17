<?php

namespace KCH\PCC3\Deklaracja;

/**
 * Class representing Podmiot1AnonymousType
 */
class Podmiot1AnonymousType
{

    /**
     * @property string $rola
     */
    private $rola = null;

    /**
     * @property \KCH\PCC3\Deklaracja\Podmiot1AnonymousType\OsobaFizycznaAnonymousType
     * $osobaFizyczna
     */
    private $osobaFizyczna = null;

    /**
     * @property \KCH\PCC3\TIdentyfikatorOsobyNiefizycznejType $osobaNiefizyczna
     */
    private $osobaNiefizyczna = null;

    /**
     * Adres siedziby / Aktualny adres zamieszkania
     *
     * @property
     * \KCH\PCC3\Deklaracja\Podmiot1AnonymousType\AdresZamieszkaniaSiedzibyAnonymousType
     * $adresZamieszkaniaSiedziby
     */
    private $adresZamieszkaniaSiedziby = null;

    /**
     * Gets as rola
     *
     * @return string
     */
    public function getRola()
    {
        return $this->rola;
    }

    /**
     * Sets a new rola
     *
     * @param string $rola
     * @return self
     */
    public function setRola($rola)
    {
        $this->rola = $rola;
        return $this;
    }

    /**
     * Gets as osobaFizyczna
     *
     * @return \KCH\PCC3\Deklaracja\Podmiot1AnonymousType\OsobaFizycznaAnonymousType
     */
    public function getOsobaFizyczna()
    {
        return $this->osobaFizyczna;
    }

    /**
     * Sets a new osobaFizyczna
     *
     * @param \KCH\PCC3\Deklaracja\Podmiot1AnonymousType\OsobaFizycznaAnonymousType
     * $osobaFizyczna
     * @return self
     */
    public function setOsobaFizyczna(\KCH\PCC3\Deklaracja\Podmiot1AnonymousType\OsobaFizycznaAnonymousType $osobaFizyczna)
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

    /**
     * Gets as adresZamieszkaniaSiedziby
     *
     * Adres siedziby / Aktualny adres zamieszkania
     *
     * @return
     * \KCH\PCC3\Deklaracja\Podmiot1AnonymousType\AdresZamieszkaniaSiedzibyAnonymousType
     */
    public function getAdresZamieszkaniaSiedziby()
    {
        return $this->adresZamieszkaniaSiedziby;
    }

    /**
     * Sets a new adresZamieszkaniaSiedziby
     *
     * Adres siedziby / Aktualny adres zamieszkania
     *
     * @param
     * \KCH\PCC3\Deklaracja\Podmiot1AnonymousType\AdresZamieszkaniaSiedzibyAnonymousType
     * $adresZamieszkaniaSiedziby
     * @return self
     */
    public function setAdresZamieszkaniaSiedziby(\KCH\PCC3\Deklaracja\Podmiot1AnonymousType\AdresZamieszkaniaSiedzibyAnonymousType $adresZamieszkaniaSiedziby)
    {
        $this->adresZamieszkaniaSiedziby = $adresZamieszkaniaSiedziby;
        return $this;
    }


}

