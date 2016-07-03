<?php

namespace nhkey\RoundDateInterval\dictionaries;

/**
 * Class FreRoundDateDictionary
 * French dictionary
 *
 * @package nhkey\RoundDateInterval\dictionaries
 *
 * @author Belkacem Alidra <dev@b-alidra.com>
 */
class FreRoundDateDictionary implements RoundDateDictionaryInterface{
    /**
     * @return array
     */
    public function getDictionary(){
        return [
            'y' => $this->getDictionaryY(),
            'm' => $this->getDictionaryM(),
            'd' => $this->getDictionaryD(),
            'h' => $this->getDictionaryH(),
            'i' => $this->getDictionaryI(),
            's' => $this->getDictionaryS(),
            ];
    }

    /**
     * @return array
     */
    function getDictionaryY()
    {
        return [
            '100' => 'siècle',
            '50'  => 'demi siècle',
            '30'  => 'trente ans',
            '20'  => 'vignt ans',
            '10'  => 'dix ans',
            '5'   => 'cinq ans',
            '3'   => 'trois ans',
            '2'   => 'deux ans',
            '1.5' => 'un an et demi',
            '1'   => 'an',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryM()
    {
        return [
            '12'  => 'an',
            '6'   => 'six mois',
            '3'   => 'trois mois',
            '2'   => 'deux mois',
            '1.5' => 'un mois et demi',
            '1'   => 'mois',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryD()
    {
        return [
            '30' => 'mois',
            '21' => 'trois semaines',
            '14' => 'deux semaines',
            '7'  => 'semaine',
            '3'  => 'trois jours',
            '2'  => 'deux jours',
            '1'  => 'jour',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryH()
    {
        return [
            '24'  => 'jour',
            '12'  => 'douze heures',
            '6'   => 'six heures',
            '3'   => 'trois heures',
            '2'   => 'deux heures',
            '1.5' => 'une heure et demie',
            '1'   => 'heure',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryI()
    {
        return [
            '60' => 'heure',
            '45' => 'quarante-cinq minutes',
            '30' => 'trente minutes',
            '15' => 'quinze minutes',
            '10' => 'dix minutes',
            '5'  => 'cinq minutes',
            '3'  => 'trois minutes',
            '2'  => 'deux minutes',
            '1'  => 'minute',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryS()
    {
        return [
            '60' => 'minute',
            '45' => 'quarante-cinq secondes',
            '30' => 'trente secondes',
            '15' => 'quinze secondes',
            '10' => 'dix secondes',
            '5' =>  'cinq secondes',
            '3' =>  'trois secondes',
            '2' =>  'deux secondes',
            '1' =>  'seconde',
        ];
    }
}
