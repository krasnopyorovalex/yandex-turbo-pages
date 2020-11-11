<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages\Dto;

use Krasnopyorovalex\YandexTurboPages\TurboPages\ValueObjects\Content;

/**
 * Class RenderDto
 * @package Krasnopyorovalex\YandexTurboPages\Dto
 */
class RenderDto
{
    /** @var string path to template file */
    public string $template;

    /** @var Content value object */
    public Content $content;

    /** @var MetaDto */
    public MetaDto $meta;
}
