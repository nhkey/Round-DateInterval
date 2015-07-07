<?php

namespace nhkey\RoundDateInterval\dictionaries;

/**
 * Class EngRoundDateDictionary
 * English dictionary
 *
 * @package nhkey\RoundDateInterval\dictionaries
 */
class EngRoundDateDictionary implements RoundDateDictionaryInterface{
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
            '100' => 'century',
            '50' => 'half century',
            '30' => 'thirty years',
            '20' => 'twenty years',
            '10' => 'ten years',
            '5' => 'five years',
            '3' => 'three years',
            '2' => 'two years',
            '1.5' => 'year and a half',
            '1' => 'year',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryM()
    {
        return [
            '12' => 'year',
            '6' => 'half year',
            '3' => 'three months',
            '2' => 'two months',
            '1.5' => 'month and a half',
            '1' => 'month',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryD()
    {
        return [
            '30' => 'month',
            '21' => 'three weeks',
            '14' => 'two weeks',
            '7' => 'week',
            '3' => 'three days',
            '2' => 'two days',
            '1' => 'day',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryH()
    {
        return [
            '24' => 'day',
            '12' => 'half a day',
            '6' => 'six hours',
            '3' => 'three hours',
            '2' => 'two hours',
            '1.5' => 'hour and a half',
            '1' => 'hour',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryI()
    {
        return [
            '60' => 'hour',
            '45' => 'forty five minutes',
            '30' => 'half an hour',
            '15' => 'fifteen minutes',
            '10' => 'ten minutes',
            '5' => 'five minutes',
            '3' => 'three minutes',
            '2' => 'two minutes',
            '1' => 'minute',
        ];
    }

    /**
     * @return array
     */
    function getDictionaryS()
    {
        return [
            '60' => 'minute',
            '45' => 'forty five seconds',
            '30' => 'half a minute',
            '15' => 'fifteen seconds',
            '10' => 'ten seconds',
            '5' =>  'five seconds',
            '3' =>  'three seconds',
            '2' =>  'two seconds',
            '1' =>  'second',
        ];
    }
}