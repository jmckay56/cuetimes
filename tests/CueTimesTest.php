<?php

use \PHPUnit\Framework\TestCase;
use \CueTimes\CueTimes;

class CueTimesTest extends TestCase
{
    public function testCueTimes()
    {
        $cueTimes = new CueTimes();
        $customerTimes = [5, 3, 4];
        $cashier = 1;
        $expected = 12;
        $results = $cueTimes->lineTimes($customerTimes, $cashier);
        self::assertEquals($expected, $results);

        $customerTimes = [5, 3, 4];
        $cashier = 2;
        $expected = 7;
        $results = $cueTimes->lineTimes($customerTimes, $cashier);
        self::assertEquals($expected, $results);

        $customerTimes = [10, 2, 3, 3];
        $cashier = 3;
        $expected = 10;
        $results = $cueTimes->lineTimes($customerTimes, $cashier);
        self::assertEquals($expected, $results);

        $customerTimes = [10, 2, 3, 3];
        $cashier = 2;
        $expected = 10;
        $results = $cueTimes->lineTimes($customerTimes, $cashier);
        self::assertEquals($expected, $results);

        $customerTimes = [10, 2, 3, 3, 12];
        $cashier = 5;
        $expected = 12;
        $results = $cueTimes->lineTimes($customerTimes, $cashier);
        self::assertEquals($expected, $results);

        $customerTimes = [10, 2, 3, 3, 12, 11];
        $cashier = 5;
        $expected = 13;
        $results = $cueTimes->lineTimes($customerTimes, $cashier);
        self::assertEquals($expected, $results);

        $customerTimes = [10, 2, 3, 3, 12, 11];
        $cashier = 4;
        $expected = 14;
        $results = $cueTimes->lineTimes($customerTimes, $cashier);
        self::assertEquals($expected, $results);
    }

}