<?php

namespace App\ValueObject\Cms;

use JMS\Serializer\Annotation\Type;

class BillTypes
{
    /**
     * @Type("integer")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $title;
    
    /**
     * @Type("string")
     */
    private $tooltip;

    /**
     * @Type("boolean")
     */
    private $chart;

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
    public function getTitle()
    {
        return $this->title;
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
    public function getChart()
    {
        return $this->chart;
    }
}