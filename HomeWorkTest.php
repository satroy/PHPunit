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
        $this->assertEquals(50,$amit->DateDiff("2013-04-01","2013-04-30"));

    }
    
    public function testWeekDays(){
        $amit = new HomeWork();
        $this->assertTrue(True,$amit->WeekDays("11-07-2015","30-08-2015"));
    }

}
