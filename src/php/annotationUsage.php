<?php

class NumberValidator
{
    /** @var int */
    private $number;

    /** @var string */
    private $message;

    /** @return int */
    public function getNumber() { return $this->number; }

    /** @return string */
    public function getMessage() { return $this->message; }
}


