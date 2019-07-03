<?php

namespace App\ValueObject\Cms;

use JMS\Serializer\Annotation\Type;

class BillTypes
{
    /**
     * @Type("string")
     */
    private $slug;

    /**
     * @Type("string")
     */
    private $title;

    /**
     * @Type("string")
     */
    private $tooltip;

    /**
     * @Type("string")
     */
    private $type;

    /**
     * @Type("string")
     */
    private $options;

    /**
     * @Type("integer")
     */
    private $position;

    /**
     * @Type("integer")
     */
    protected $minPrice;

    /**
     * @Type("integer")
     */
    protected $avgPrice;

    /**
     * @Type("integer")
     */
    protected $maxPrice;

    public function __construct()
    {
        $this->minPrice = null;
        $this->maxPrice = null;
        $this->avgPrice = null;
    }

    public function setMinPrice($minPrice): void
    {
        $this->minPrice = $minPrice;
    }

    public function setAvgPrice($avgPrice): void
    {
        $this->avgPrice = $avgPrice;
    }

    public function setMaxPrice($maxPrice): void
    {
        $this->maxPrice = $maxPrice;
    }

    public function getAvgPrice()
    {
        return $this->avgPrice;
    }

    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return mixed
     */
    public function getTooltip()
    {
        return $this->tooltip;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }
}