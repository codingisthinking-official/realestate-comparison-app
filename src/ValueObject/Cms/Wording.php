<?php

namespace App\ValueObject\Cms;

use JMS\Serializer\Annotation\Type;

class Wording
{
    /**
     * @Type("string")
     */
    private $title;

    /**
     * @Type("string")
     */
    private $wording;

    public function getTitle()
    {
        return $this->title;
    }

    public function getWording()
    {
        return $this->wording;
    }
}