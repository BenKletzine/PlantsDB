<?php

/**
 * UserGarden Class
 * Purpose: Act as a container class for rows of data from the DB
 */
class UserGarden
{
    public $Id;
    public $UserId;
    public $Length;
    public $Width;
    public $SeasonId;
    public $Name;
    public $Description;

    public function __construct($Id, $UserId, $Length, $Width, $SeasonId, $Name, $Description)
    {
        $this->Id = $Id;
        $this->UserId = $UserId;
        $this->Length = $Length;
        $this->Width = $Width;
        $this->SeasonId = $SeasonId;
        $this->Name = $Name;
        $this->Description = $Description;
    }


}