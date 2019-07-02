<?php

namespace App\ValueObject\Cms;

use JMS\Serializer\Annotation\Type;

class Postcode
{
    /**
     * @Type("string")
     */
    private $postcode;

    /**
     * @Type("string")
     */
    private $address;

    /**
     * @Type("string")
     */
    private $city;

    /**
     * @Type("string")
     */
    private $voivodeship;

    /**
     * @Type("string")
     */
    private $county;

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getVoivodeship()
    {
        return $this->voivodeship;
    }

    /**
     * @param mixed $voivodeship
     */
    public function setVoivodeship($voivodeship): void
    {
        $this->voivodeship = $voivodeship;
    }

    /**
     * @return mixed
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * @param mixed $county
     */
    public function setCounty($county): void
    {
        $this->county = $county;
    }

}