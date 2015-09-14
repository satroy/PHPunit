<?php
/**
 * Created by PhpStorm.
 * User: Amit
 * Date: 8/30/2015
 * Time: 2:21 AM
 */
require("HomeWork.php");
class HomeWorkTest extends PHPUnit_Framework_TestCase {
    public function testDateDiff(){
        $amit = new HomeWork();
        $this->assertEquals(29,$amit->DateDiff("2013-04-01","2013-04-30"));

    }

    public function testWeekDays(){
        $amit = new HomeWork();
        $this->assertEquals(21,$amit->WeekDays("01-08-2015","31-08-2015"));
    }

    public function testTotalWeeks(){
        $amit = new HomeWork();
        $this->assertEquals(4,$amit->TotalWeeks("01-08-2015","31-08-2015"));
    }

}
