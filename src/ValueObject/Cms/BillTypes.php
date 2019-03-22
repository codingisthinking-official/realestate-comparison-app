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
     * @Type("string")
     */
    private $type;

    /**
     * @Type("integer")
     */
    private $position;

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