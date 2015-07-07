<?php

namespace nhkey\RoundDateInterval\dictionaries;

/**
 * Class RusRoundDateDictionary
 * Russian dictionary
 *
 * @package nhkey\RoundDateInterval\dictionaries
 */
class RusRoundDateDictionary implements RoundDateDictionaryInterface{
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
            '100' => 'век',
            '50' => 'полвека',
            '30' => 'тридцать лет',
            '20' => 'двадцать лет',
            '10' => 'десять лет',
            '5' => 'пять лет',
            '3' => 'три года',
            '2' => 'два года',
            '1.5' => 'полтора года',
            '1' => 'год',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryM()
    {
        return [
            '12' => 'год',
            '6' => 'полгода',
            '3' => 'три месяца',
            '2' => 'два месяца',
            '1.5' => 'полтора месяца',
            '1' => 'месяц',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryD()
    {
        return [
            '30' => 'месяц',
            '21' => 'три недели',
            '14' => 'две недели',
            '7' => 'неделя',
            '3' => 'три дня',
            '2' => 'два дня',
            '1' => 'день',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryH()
    {
        return [
            '24' => 'день',
            '12' => 'полдня',
            '6' => 'шесть часов',
            '3' => 'три часа',
            '2' => 'два часа',
            '1.5' => 'полтора часа',
            '1' => 'час',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryI()
    {
        return [
            '60' => 'час',
            '45' => 'сорок пять минут',
            '30' => 'полчаса',
            '15' => 'пятнадцать минут',
            '10' => 'десять минут',
            '5' => 'пять минут',
            '3' => 'три минуты',
            '2' => 'две минуты',
            '1' => 'минута',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryS()
    {
        return [
            '60' => 'минута',
            '45' => 'сорок пять секунд',
            '30' => 'полминуты',
            '15' => 'пятнадцать секунд',
            '10' => 'десять секунд',
            '5' => 'пять секунд',
            '3' => 'три секунды',
            '2' => 'две секунды',
            '1' => 'секунда',
        ];
    }
}