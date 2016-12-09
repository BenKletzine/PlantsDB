<?php

/**
 * Season Class
 * Purpose: Act as a container class for rows of data from the DB
 */
class Season
{
    public $Id;
    public $Name;

    public function  __construct($id, $name) {
        $this->Id = $id;
        $this->Name = $name;
    }
}