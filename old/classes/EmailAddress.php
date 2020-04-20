<?php


class EmailAddress implements reachable
{

    private $email;

    /**
     * EmailAddress constructor.
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return EmailAddress
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }




    public function getDetails()
    {

        return "<p>{$this->email}</p>";

    }
}