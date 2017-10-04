<?php

namespace Calendar\Model;

class LeapYear
{
    public function isLeapYear($year = null)
    {
        if (null === $year) {
            $year = date('Y');
        }
//        var_dump($year);die;
        
        return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
    }
}