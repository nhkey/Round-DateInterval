<?php

namespace nhkey\RoundDateInterval\dictionaries;

/**
 * Interface RoundDateDictionaryInterface
 * @package nhkey\RoundDateInterval\dictionaries
 */
interface RoundDateDictionaryInterface {

    /**
     * Main method, return full dictionary
     * @return array
     */
    function getDictionary();

    /**
     * Return dictionary of years
     * @return array
     */
    function getDictionaryY();

    /**
     * Return dictionary of months
     * @return array
     */
    function getDictionaryM();

    /**
     * Return dictionary of days
     * @return array
     */
    function getDictionaryD();

    /**
     * Return dictionary of hours
     * @return array
     */
    function getDictionaryH();

    /**
     * Return dictionary of minutes
     * @return array
     */
    function getDictionaryI();

    /**
     * Return dictionary of seconds
     * @return array
     */
    function getDictionaryS();

}