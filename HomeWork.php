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
    public function WeekDays($startDate, $endDate){
        $begin = strtotime($startDate);
        $end   = strtotime($endDate);
        if ($begin > $end) {
            echo "startdate is in the future! <br />";
            return 0;
        } else {
            $no_days  = 0;
            $weekends = 0;
            while ($begin <= $end) {
                $no_days++; // no of days in the given interval
                $what_day = date("N", $begin);
                if ($what_day > 5) { // 6 and 7 are weekend days
                    $weekends++;
                };
                $begin += 86400; // +1 day
            };
            $working_days = $no_days - $weekends;
            return $working_days;
        }
    }

    public function TotalWeeks($startDate,$endDate){
        return floor(($this->DateDiff($startDate,$endDate))/7);
    }
}

?>