<?php
use PHPUnit\Framework\TestCase;

class LivedTimeCalculatorTest extends TestCase
{
    function testDate(){
        $a = 11;
        $b = 13;
        $c = 2001;

        $expected = 'Bạn đã sống được: 19 năm, 234 tháng, 1006 tuần, 7043 ngày, 169032 giờ';
        $lived_time = new LivedTimeCalculator($a, $b, $c);
        $actual = $lived_time->check();
        $this->assertEquals($expected, $actual);
    }
}