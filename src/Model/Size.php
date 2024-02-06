<?php

namespace Salamek\Zasilkovna\Model;

class Size implements IModel
{

    /** @var int */
    private $width;

    /** @var int */
    private $height;

    /** @var int */
    private $length;

    public function __construct(int $width, int $height, int $length)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setLength(int $length): void
    {
        $this->length = $length;
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}