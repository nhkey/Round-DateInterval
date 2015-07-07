# Описание

RoundDateInterval - это PHP-библиотека для округления DateInterval. Например:

<table>
    <tr>
        <td>Datetime1</td>
        <td>Datetime2</td>
        <td>DateInterval(y-m-d)</td>
        <td>RoundDateInterval</td>
    </tr>
    <tr>
        <td>2015-06-10</td>
        <td>2015-06-30</td>
        <td>0 0 20</td>
        <td>три недели</td>
    </tr>
    <tr>
        <td>2015-06-15</td>
        <td>2015-06-17</td>
        <td>0 0 2</td>
        <td>два дня</td>
    </tr>
    <tr>
        <td>2015-06-11</td>
        <td>2015-06-17</td>
        <td>0 0 6</td>
        <td>неделя</td>
    </tr>
    <tr>
        <td>2015-06-03</td>
        <td>2015-06-30</td>
        <td>0 0 27</td>
        <td>месяц</td>
    </tr>
    <tr>
        <td>2015-03-30</td>
        <td>2015-06-17</td>
        <td>0 2 18</td>
        <td>два месяца</td>
    </tr>
    <tr>
        <td>2015-01-30</td>
        <td>2015-07-17</td>
        <td>0 5 17</td>
        <td>полгода</td>
    </tr>
    <tr>
        <td>2015-06-15</td>
        <td>2015-07-27</td>
        <td>0 1 12</td>
        <td>полтора месяца</td>
    </tr>
    <tr>
        <td>2013-06-15</td>
        <td>2015-07-27</td>
        <td>2 1 12</td>
        <td>два года</td>
    </tr>
</table>


# Установка

Через composer:

    php composer.phar require nhkey/round-dateinterval "*"
    
или добавить

    "nhkey/round-dateinterval": "*"
    
в секцию require в файле composer.json.


# Использование

Библиотека состоит из трех компонентов: словарь для округления, правила округления и менеджер. 

## Пример 1:

    <?php
        $datetime1 = new DateTime('2013-06-15');
        $datetime2 = new DateTime('2015-07-27');
        $interval = $datetime1->diff($datetime2);
        
        $provider = new RoundDateProvider; // встроенный провайдер
        $dictionary = new RusRoundDateDictionary(); // встроенный словарь
        $test = new RoundDateInterval($interval, $provider, $dictionary);
        echo $test->get(); // 'два года'
        


# Создание своего словаря

Реализуем интерфейс RoundDateDictionaryInterface по аналогии с RusRoundDateDictionary.

# Создание своих правил округления

Наследуемся от AbstractRoundDateProvider по аналогии с RoundDateProvider. 

# Контакты

Михалев Михаил

Email: mail(at)mikhailmikhalev.ru

Git: http://github.com/nhkey/