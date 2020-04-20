<?php


class Person
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $firstName;

    /**
     * @var int
     */
    private int $age;

    /**
     * @var string
     */
    private string $sex;

    /**
     * @var Address
     */
    private Address $address;

    /**
     * Person constructor.
     * @param string $name
     * @param string $firstName
     * @param int $age
     * @param Address|null $address
     * @param string $sex
     */
    public function __construct(string $name, string $firstName,
                                int $age ,Address $address = null, string $sex = "F")
    {
        $this->name = $name;
        $this->firstName = $firstName;
        $this->age = $age;
        $this->sex = $sex;
        $this->address = $address;
    }


    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     * @return Person
     */
    public function setSex(string $sex): Person
    {
        $this->sex = $sex;

        return $this;
    }



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Person
     */
    public function setName(string $name): Person
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Person
     */
    public function setFirstName(string $firstName): Person
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @return Person
     */
    public function setAge(int $age): Person
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName(): string {
        $fullname = $this->sex == "M"? "Monsieur ": "Madame ";
        if(! empty($this->firstName)){
            $fullname .= $this->firstName. " ";
        }

        return $fullname. $this->name;
    }

    public function getAddressDetails(){
        if(empty($this->address)){
            $addressdetails = "Sans adresse";
        } else {
            $addressdetails = $this->address->getDetails();
        }

        return $addressdetails;
    }


}