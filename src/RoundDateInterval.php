<?php

namespace nhkey\RoundDateInterval;
use nhkey\RoundDateInterval\dictionaries\RoundDateDictionaryInterface;
use nhkey\RoundDateInterval\exceptions\RoundDateException;
use nhkey\RoundDateInterval\providers\RoundDateProviderInterface;

/**
 * Class RoundDateInterval
 * @property RoundDateProviderInterface $_provider
 */
class RoundDateInterval{

    /**
     * @var \DateInterval
     */
    protected $_dateInterval;
    /**
     * @var RoundDateProviderInterface
     */
    protected $_provider;
    /**
     * @var RoundDateDictionaryInterface
     */
    protected $_dictionary;

    /**
     * @param \DateInterval $dateInterval
     * @param RoundDateProviderInterface $dateProvider
     * @param RoundDateDictionaryInterface $dictionary
     */
    public function __construct(\DateInterval $dateInterval = null,
                                RoundDateProviderInterface $dateProvider = null,
                                RoundDateDictionaryInterface $dictionary = null){
        $this->_dateInterval = $dateInterval;
        $this->_provider = $dateProvider;
        $this->_dictionary = $dictionary;
    }

    /**
     * @param \DateInterval $dateInterval
     * @return $this
     */
    public function setInterval(\DateInterval $dateInterval){
        $this->_dateInterval = $dateInterval;
        return $this;
    }

    /**
     * @param RoundDateProviderInterface $dateProvider
     * @return $this
     */
    public function setProvider(RoundDateProviderInterface $dateProvider){
        $this->_provider = $dateProvider;
        return $this;
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
     * @return \DateInterval
     */
    public function getInterval(){
        return $this->_dateInterval;
    }

    /**
     * @return RoundDateProviderInterface
     */
    public function getProvider(){
        return $this->_provider;
    }

    /**
     * @return RoundDateDictionaryInterface
     */
    public function getDictionary(){
        return $this->_dictionary;
    }

    /**
     * @return string
     * @throws RoundDateException
     */
    public function get(){
        if ($this->_dictionary === null)
            throw new RoundDateException('Not found dictionary');
        if ($this->_provider === null)
            throw new RoundDateException('Not found provider');
        if ($this->_dateInterval === null)
            throw new RoundDateException('Not found DateInterval');

        $this->_provider->setDictionary($this->_dictionary);
        return $this->_provider->getRound($this->_dateInterval);

    }
}