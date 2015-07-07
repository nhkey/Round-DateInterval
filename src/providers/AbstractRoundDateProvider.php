<?php

namespace nhkey\RoundDateInterval\providers;

use nhkey\RoundDateInterval\dictionaries\RoundDateDictionaryInterface;

/**
 * Class AbstractRoundDateProvider
 * @package nhkey\RoundDateInterval\providers
 */
abstract class AbstractRoundDateProvider implements RoundDateProviderInterface{

    /**
     * @var RoundDateDictionaryInterface
     */
    protected $_dictionary;

    /**
     * @param RoundDateDictionaryInterface $dictionary
     */
    public function __construct(RoundDateDictionaryInterface $dictionary = null){
        $this->_dictionary = $dictionary;
    }

    /**
     * @param RoundDateDictionaryInterface $dictionary
     * @return $this
     */
    public function setDictionary(RoundDateDictionaryInterface $dictionary){
        $this->_dictionary = $dictionary;
        return $this;
    }

    /**
     * @return array
     * @throws \ErrorException
     */
    public function roundDictionary()
    {
        if ($this->_dictionary === null)
            throw new \ErrorException('Not found dictionary');
        return $this->_dictionary->getDictionary();
    }

    /**
     * @param $property
     * @return double|array
     */
    public static function relationDictionary($property){
        $array = [
            'm' => 1/12,
            'd' => 1/30,
            'h' => 1/24,
            'i' => 1/60,
            's' => 1/60,
        ];
        return isset($array[$property]) ? $array[$property] : $array;
    }
}