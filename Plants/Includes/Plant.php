<?php

/**
 * Plant Class
 * Purpose: Act as a container class for rows of data from the DB
 */

class Plant
{
    public $PlantId;
    public $Symbol;
    public $Synonym;
    public $ScientificName;
    public $CommonName;
    public $Family;

    public function  __construct($id, $symbol, $synonym, $sciName, $commName, $family) {
        $this->PlantId = $id;
        $this->Symbol = $symbol;
        $this->Synonym = $synonym;
        $this->ScientificName = $sciName;
        $this->CommonName = $commName;
        $this->Family = $family;
    }
}

/**
 * GardenPlant Class
 * Purpose: Act as a container class for rows of data from the DB
 */
class GardenPlant extends Plant
{
    public $Id;
    public $GardenId;
    //public $PlantId; // So, naming is a thing. This happened to be handled poorly.
    public $PlantedDate;
    public $NumberPlanted;
    public $NumberSurvived;
    public $Tallest;
    public $Shortest;

    public function __construct(
        $Id, $GardenId, $PlantId, $PlantedDate, $NumberPlanted, $NumberSurvived, $Tallest, $Shortest,
        $symbol, $synonym, $sciName, $commName, $family)
    {
        // Super constructor
        parent::__construct($PlantId, $symbol, $synonym, $sciName, $commName, $family);

        $this->Id = $Id; // The ID of the junction
        $this->GardenId = $GardenId; // The ID of the garden it belongs to
        //$this->PlantId = $PlantId; // Handled in super constructor
        $this->PlantedDate = $PlantedDate; // The date the plant was planted
        $this->NumberPlanted = $NumberPlanted; // The number of this plant that was planted
        $this->NumberSurvived = $NumberSurvived; // The number that survived the season
        $this->Tallest = $Tallest; // The tallest height of the plants
        $this->Shortest = $Shortest; // The shortest height of the plants
    }
}

/**
 * UserSeenPlant Class
 * Purpose: Act as a container class for rows of data from the DB
 */
class UserSeenPlant extends Plant
{
    public $Id;
    public $UserId;
    //public $PlantId;
    public $StateId;

    public function __construct(
        $Id, $UserId, $PlantId, $StateId,
        $symbol, $synonym, $sciName, $commName, $family)
    {
        parent::__construct($PlantId, $symbol, $synonym, $sciName, $commName, $family);

        $this->Id = $Id; // The ID of the Junction
        $this->UserId = $UserId; // The ID of the user
        //$this->PlantId = $PlantId; // The ID of the plant
        $this->StateId = $StateId; // The ID of the State
    }

}