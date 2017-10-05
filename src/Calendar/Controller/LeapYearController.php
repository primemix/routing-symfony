<?php

namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Calendar\Model\LeapYear;

/**
 * Class LeapYearController
 * @package Calendar\Controller
 */
class LeapYearController
{
    /**
     * @param Request $request
     * @param $year
     * @return Response
     */
    public function indexAction(Request $request, $year) : Response
    {
        $leapyear = new LeapYear();
        if ($leapyear->isLeapYear($year)) {
            return new Response('Yep, this is a leap year!');
        }

        return new Response('Nope, this is not a leap year');
    }
}