<?php

namespace nhkey\RoundDateInterval\providers;

use nhkey\RoundDateInterval\dictionaries\RoundDateDictionaryInterface;

/**
 * Interface RoundDateProviderInterface
 * @package nhkey\RoundDateInterval\providers
 */
interface RoundDateProviderInterface{

    /**
     * Main method, return rounding value
     * @param \DateInterval $interval
     * @return string
     */
    public function getRound(\DateInterval $interval);

    /**
     * @param RoundDateDictionaryInterface $dictionary
     * @return $this
     */
    public function setDictionary(RoundDateDictionaryInterface $dictionary);

    /**
     * Get dictionary from RoundDateDictionaryInterface
     * @return array
     */
    public function roundDictionary();

}