<?php

namespace nhkey\RoundDateInterval\providers;

/**
 * Class RoundDateProvider
 * @package nhkey\RoundDateInterval\providers
 */
class RoundDateProvider extends AbstractRoundDateProvider
{
    /**
     * @param \DateInterval $interval
     * @return string
     * @throws \ErrorException
     */
    public function getRound(\DateInterval $interval)
    {
        $properties = ['y', 'm', 'd', 'h', 'i', 's'];

        foreach ($properties as $propertyNum => $property) {
            if (($p = $interval->$property) > 0) {
                $max = 0;
                $dictionary = $this->roundDictionary()[$property];
                foreach ($dictionary as $key => $value) {
                    if (!is_int($key)){
                        $nextProperty = $properties[$propertyNum+1];

                        $p += $interval->{$nextProperty} * self::relationDictionary($nextProperty);
                    }
                    if ($key == $p)
                        return $value;
                    if ($key > $p)
                        $max = $key;
                    if ($key < $p) {
                        if ($max === 0){
                            return array_shift($dictionary);
                        }

                        return (($p - $key) > ($max - $p)) ? $dictionary[$max] : $value;
                    }

                }
            }
        }
    }
}