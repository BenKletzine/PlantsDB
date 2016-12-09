<?php

/**
 * PlogEntry Class
 * Purpose: Act as a container class for rows of data from the DB
 */

class PlogEntry
{
    public $Id;
    public $UserId;
    public $Title;
    public $Body;
    public $DatePosted;

    public function  __construct(
        $id,
        $userId,
        $title,
        $body,
        $datePosted
    ) {
        $this->Id = $id;
        $this->UserId = $userId;
        $this->Title = $title;
        $this->Body = $body;
        $this->DatePosted = $datePosted;
    }
}