<?php


class PostalAddress implements Reachable
{
    /**
     * @var string
     */
    private string $zipCode;

    /**
     * @var string
     */
    private string $city;

    /**
     * @var string
     */
    private string $street;

    /**
     * PostalAddress constructor.
     * @param string $zipCode
     * @param string $city
     * @param string $street
     */
    public function __construct(string $zipCode, string $city, string $street)
    {
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return Reachable
     */
    public function setZipCode(string $zipCode): PostalAddress
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Reachable
     */
    public function setCity(string $city): PostalAddress
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Reachable
     */
    public function setStreet(string $street): PostalAddress
    {
        $this->street = $street;

        return $this;
    }

    public function getDetails(){
        $details = "<p>". $this->street. "<br>". $this->zipCode . " ". $this->city . "</p>";
        return $details;
    }
}