<?php

use nhkey\RoundDateInterval\RoundDateInterval;
use nhkey\RoundDateInterval\providers\RoundDateProvider;
use nhkey\RoundDateInterval\dictionaries\EngRoundDateDictionary;
use nhkey\RoundDateInterval\dictionaries\RusRoundDateDictionary;

include '../vendor/autoload.php';

$datetimes = [
    ['2015-06-10', '2015-06-30'],
    ['2015-06-15', '2015-06-17'],
    ['2015-06-11', '2015-06-17'],
    ['2015-06-03', '2015-06-30'],
    ['2015-03-30', '2015-06-17'],
    ['2015-01-30', '2015-07-17'],
    ['2015-06-15', '2015-07-27'],
    ['2005-06-15', '2015-07-27'],
    ['2000-06-15', '2015-07-27'],
    ['1960-06-15', '2015-07-27'],
    ['1930-06-15', '2015-07-27'],
    ['1650-06-15', '2015-07-27'],

];
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<table border="1">
    <tr>
        <td>Datetime1</td>
        <td>Datetime2</td>
        <td>Interval</td>
        <td>RoundInterval (Rus)</td>
        <td>RoundInterval (Eng)</td>
    </tr>
    <?php
    foreach ($datetimes as $datetime):
        $datetime1 = new DateTime($datetime[0]);
        $datetime2 = new DateTime($datetime[1]);

        $interval = $datetime1->diff($datetime2);
        $provider = new RoundDateProvider;
        $dictionary_rus = new RusRoundDateDictionary();
        $dictionary_eng = new EngRoundDateDictionary();

        $test = new RoundDateInterval($interval, $provider);
        ?>
        <tr>
            <td><?=$datetime[0]?></td>
            <td><?=$datetime[1]?></td>
            <td><?=$interval->format('%y %m %d');?></td>
            <td><?=$test->setDictionary($dictionary_rus)->get()?></td>
            <td><?=$test->setDictionary($dictionary_eng)->get()?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>