<?php

/**
 * Class HomeWork
 */
class HomeWork
{
    //find difference between two dates
    public function DateDiff($d1, $d2)
    {
        $date1 = new DateTime($d1);
        $date2 = new DateTime($d2);
        return $date1->diff($date2)->days;

        //$another=(strtotime($d2)-strtotime($d1))/ 86400 + 1;
        //return $another;
    }

    //find weekdays between two dates
    public function WeekDays($d1,$d2){
        return true;
    }
}
?>