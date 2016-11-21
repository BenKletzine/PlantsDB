<?php

/**
 * State Class
 * Purpose: Act as a container class for rows of data from the DB
 */

class State
{
    public $Id;
    public $Name;
    public $Abbreviation;

    public function  __construct($id, $name, $abbr) {
        $this->Id = $id;
        $this->Name = $name;
        $this->Abbreviation = $abbr;
    }

}