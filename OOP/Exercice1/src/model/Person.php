<?php

namespace Model;

class Person {

    private $id;
    protected $firstname;
    protected $lastname;
    protected $emails = [];

    /**
     * @param mixed $firstname
     * @return Person
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @param mixed $lastname
     * @return Person
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @param array $emails
     * @return Person
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * @param mixed $firstname
     */


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return array
     */
    public function getEmails()
    {
        return $this->emails;
    }

}