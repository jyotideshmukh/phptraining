<?php


namespace Wipro\Employee;


class Address
{
    private $flatNo;
    private $city;
    private $postacode;

    /**
     * Address constructor.
     * @param $flatNo
     * @param $city
     * @param $postacode
     */
    public function __construct($flatNo, $city, $postacode)
    {
        $this->flatNo = $flatNo;
        $this->city = $city;
        $this->postacode = $postacode;
    }


}