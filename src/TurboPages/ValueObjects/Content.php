<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages\TurboPages\ValueObjects;

/**
 * Class Content
 * @package Krasnopyorovalex\YandexTurboPages\TurboPages\ValueObjects
 */
class Content
{
    /**
     * @var string
     */
    private string $content;

    /**
     * Content constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->setContent($content);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    
    /**
     * @param string $content
     */
    private function setContent(string $content)
    {
        $this->content = trim($content);
    }
}
