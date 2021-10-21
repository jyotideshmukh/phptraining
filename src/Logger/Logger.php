<?php


class Logger
{
    private $filename;

    /**
     * Logger constructor.
     * @param $filename
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

}