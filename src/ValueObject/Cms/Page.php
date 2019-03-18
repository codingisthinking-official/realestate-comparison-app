<?php

namespace App\ValueObject\Cms;

use JMS\Serializer\Annotation\Type;

class Page
{
    /**
     * @Type("string")
     */
    private $title;

    /**
     * @Type("string")
     */
    private $photo;

    /**
     * @Type("integer")
     */
    private $position;

    /**
     * @Type("string")
     */
    private $slug;

    /**
     * @Type("string")
     */
    private $titleHeader;

    /**
     * @Type("string")
     */
    private $subtitleHeader;

    /**
     * @Type("string")
     */
    private $description;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function getTitleHeader()
    {
        return $this->titleHeader;
    }

    public function getSubtitleHeader()
    {
        return $this->subtitleHeader;
    }

    public function getDescription()
    {
        return $this->description;
    }
}