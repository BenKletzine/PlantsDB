<?php

/**
 * User Class
 * Purpose: Act as a container class for rows of data from the DB
 */

class User
{
    public $Id;
    public $Password;
    public $Username;
    public $FirstName;
    public $LastName;
    public $Email;
    public $StateId;
    public $DateOfBirth;
    public $AccountCreated;

    public function  __construct(
        $id,
        $password,
        $username,
        $firstname,
        $lastname,
        $email,
        $stateid,
        $dateofbirth,
        $accountcreated
    ) {
        $this->Id = $id;
        $this->Password = $password;
        $this->Username = $username;
        $this->FirstName = $firstname;
        $this->LastName = $lastname;
        $this->Email = $email;
        $this->StateId = $stateid;
        $this->DateOfBirth = $dateofbirth;
        $this->AccountCreated = $accountcreated;
    }
}