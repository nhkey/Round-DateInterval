<?php

class RoundDateIntervalTest extends PHPUnit_Framework_TestCase{

    public function testRound(){
        $datetimes = [
            ['2015-06-10', '2015-06-30', 'три недели', 'three weeks'],
            ['2015-06-15', '2015-06-17', 'два дня', 'two days'],
            ['2015-06-11', '2015-06-17', 'неделя', 'week'],
            ['2015-06-03', '2015-06-30', 'месяц', 'month'],
            ['2015-03-30', '2015-06-17', 'два месяца', 'two months'],
            ['2015-01-30', '2015-07-17', 'полгода', 'half year'],
            ['2015-06-15', '2015-07-27', 'полтора месяца', 'month and a half'],
            ['2005-06-15', '2015-07-27', 'десять лет', 'ten years'],
            ['2000-06-15', '2015-07-27', 'десять лет', 'ten years'],
            ['1960-06-15', '2015-07-27', 'полвека', 'half century'],
            ['1930-06-15', '2015-07-27', 'век', 'century'],
            ['1650-06-15', '2015-07-27', 'век', 'century'],
        ];

        foreach ($datetimes as $datetime) {
            $datetime1 = new DateTime($datetime[0]);
            $datetime2 = new DateTime($datetime[1]);

            $interval = $datetime1->diff($datetime2);
            $provider = new \nhkey\RoundDateInterval\providers\RoundDateProvider();
            $dictionary = new \nhkey\RoundDateInterval\dictionaries\RusRoundDateDictionary();

            $test = new \nhkey\RoundDateInterval\RoundDateInterval($interval, $provider, $dictionary);
            $this->assertEquals($test->get(), $datetime[2]);

            $test->setDictionary(new \nhkey\RoundDateInterval\dictionaries\EngRoundDateDictionary());
            $this->assertEquals($test->get(), $datetime[3]);
        }
    }

    /**
     * @expectedException \nhkey\RoundDateInterval\exceptions\RoundDateException
     */
    public function testExceptions(){
        $test = new \nhkey\RoundDateInterval\RoundDateInterval();
        $test->get();
    }
}

