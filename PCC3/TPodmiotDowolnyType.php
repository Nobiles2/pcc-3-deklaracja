<?php

namespace KCH\PCC3;

/**
 * Class representing TPodmiotDowolnyType
 *
 * Podstawowy zestaw danych o osobie fizycznej lub niefizycznej
 * XSD Type: TPodmiotDowolny
 */
class TPodmiotDowolnyType extends TPodmiotDowolnyBezAdresuType
{

    /**
     * @property \KCH\PCC3\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAnonymousType
     * $adresZamieszkaniaSiedziby
     */
    private $adresZamieszkaniaSiedziby = null;

    /**
     * Gets as adresZamieszkaniaSiedziby
     *
     * @return \KCH\PCC3\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAnonymousType
     */
    public function getAdresZamieszkaniaSiedziby()
    {
        return $this->adresZamieszkaniaSiedziby;
    }

    /**
     * Sets a new adresZamieszkaniaSiedziby
     *
     * @param \KCH\PCC3\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAnonymousType
     * $adresZamieszkaniaSiedziby
     * @return self
     */
    public function setAdresZamieszkaniaSiedziby(\KCH\PCC3\TPodmiotDowolnyType\AdresZamieszkaniaSiedzibyAnonymousType $adresZamieszkaniaSiedziby)
    {
        $this->adresZamieszkaniaSiedziby = $adresZamieszkaniaSiedziby;
        return $this;
    }


}

