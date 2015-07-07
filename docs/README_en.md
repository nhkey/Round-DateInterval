# Description

RoundDateInterval is PHP-library for rounding of results work DateInterval.

<table>
    <tr>
        <td>Datetime1</td>
        <td>Datetime2</td>
        <td>Interval</td>
        <td>RoundInterval</td>
    </tr>
    <tr>
        <td>2015-06-10</td>
        <td>2015-06-30</td>
        <td>0 0 20</td>
        <td>three weeks</td>
    </tr>
    <tr>
        <td>2015-06-15</td>
        <td>2015-06-17</td>
        <td>0 0 2</td>
        <td>two days</td>
    </tr>
    <tr>
        <td>2015-06-11</td>
        <td>2015-06-17</td>
        <td>0 0 6</td>
        <td>week</td>
    </tr>
    <tr>
        <td>2015-06-03</td>
        <td>2015-06-30</td>
        <td>0 0 27</td>
        <td>month</td>
    </tr>
    <tr>
        <td>2015-03-30</td>
        <td>2015-06-17</td>
        <td>0 2 18</td>
        <td>two months</td>
    </tr>
    <tr>
        <td>2015-01-30</td>
        <td>2015-07-17</td>
        <td>0 5 17</td>
        <td>half year</td>
    </tr>
    <tr>
        <td>2015-06-15</td>
        <td>2015-07-27</td>
        <td>0 1 12</td>
        <td>month and a half</td>
    </tr>
    <tr>
        <td>2005-06-15</td>
        <td>2015-07-27</td>
        <td>10 1 12</td>
        <td>ten years</td>
    </tr>
    <tr>
        <td>2000-06-15</td>
        <td>2015-07-27</td>
        <td>15 1 12</td>
        <td>ten years</td>
    </tr>
    <tr>
        <td>1960-06-15</td>
        <td>2015-07-27</td>
        <td>55 1 12</td>
        <td>half century</td>
    </tr>
    <tr>
        <td>1930-06-15</td>
        <td>2015-07-27</td>
        <td>85 1 11</td>
        <td>century</td>
    </tr>
    <tr>
        <td>1650-06-15</td>
        <td>2015-07-27</td>
        <td>365 1 11</td>
        <td>century</td>
    </tr>
</table>


# Install

Use composer:

    php composer.phar require nhkey/round-dateinterval "*"
    
or add

    "nhkey/round-dateinterval": "*"
    
in section "require" in your composer.json.


# Usage

Library consists of three components: dictionary(where, provider(where stored rules of rounding) and manager 

## Example 1:

    <?php
        $datetime1 = new DateTime('2013-06-15');
        $datetime2 = new DateTime('2015-07-27');
        $interval = $datetime1->diff($datetime2);
        
        $provider = new RoundDateProvider; // default provider
        $dictionary = new EngRoundDateDictionary(); // default dictionary
        $test = new RoundDateInterval($interval, $provider, $dictionary);
        echo $test->get(); // 'two years'
        


# Create new dictionary

Realize the interface RoundDateDictionaryInterface i.q. RusRoundDateDictionary.

# Create new provider

Extend the class AbstractRoundDateProvider i.q. RoundDateProvider. 

# Contacts

Mikhail Mikhalev

Email: mail(at)mikhailmikhalev.ru

Git: http://github.com/nhkey/