<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BillRepository")
 */
class Bill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $value;

    /**
     * @ORM\Column(type="text")
     */
    private $postcode;

    /**
     * @ORM\Column(type="text")
     */
    private $city;

    /**
     * @ORM\Column(type="text")
     */
    private $billType;

    /**
     * @ORM\Column(type="integer")
     */
    private $flatType;

    /**
     * @ORM\Column(type="text")
     */
    private $uuid;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value): void
    {
        $this->value = $value;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function setPostcode($postcode): void
    {
        $this->postcode = $postcode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): void
    {
        $this->city = $city;
    }

    public function getBillType()
    {
        return $this->billType;
    }

    public function setBillType($billType): void
    {
        $this->billType = $billType;
    }

    public function getFlatType()
    {
        return $this->flatType;
    }

    public function setFlatType($flatType): void
    {
        $this->flatType = $flatType;
    }

    public function getUuid()
    {
        return $this->uuid;
    }

    public function setUuid($uuid): void
    {
        $this->uuid = $uuid;
    }

    public function getValueAsFloat(): float
    {
        if (strpos($this->value, ',') !== false) {
            $fl = str_replace(',', '.', $this->value);
            return (float)$fl;
        }
        return (float)$this->value;
    }
}
