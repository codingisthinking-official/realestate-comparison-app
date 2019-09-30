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
    private $groupName;

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

    /**
     * @Type("boolean")
     */
    protected $fieldRequired;

    /**
     * @Type("boolean")
     */
    protected $autocomplete;

    /**
     * @Type("boolean")
     */
    protected $displayAverage;

    /**
     * @Type("boolean")
     */
    protected $yearCost;

    /**
     * @Type("boolean")
     */
    protected $monthlyCost;

    /**
     * @Type("array")
     */
    protected $autoCompleteOptions;

    public function __construct()
    {
        $this->minPrice = null;
        $this->maxPrice = null;
        $this->avgPrice = null;
        $this->autoCompleteOptions = [];
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

    public function getYearCost()
    {
        return $this->yearCost;
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

    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function getAutocomplete()
    {
        return $this->autocomplete;
    }

    public function getDisplayAverage()
    {
        return $this->displayAverage;
    }

    public function getFieldRequired()
    {
        return $this->fieldRequired;
    }

    public function setAutoCompleteOptions($autoCompleteOptions): void
    {
        $this->autoCompleteOptions = $autoCompleteOptions;
    }

    public function getAutoCompleteOptions()
    {
        return $this->autoCompleteOptions;
    }

    public function getMonthlyCost()
    {
        return $this->monthlyCost;
    }
}