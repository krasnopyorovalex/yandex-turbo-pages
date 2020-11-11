<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages\Dto;

/**
 * Class MetaDto
 * @package Krasnopyorovalex\YandexTurboPages\Dto
 */
class MetaDto
{
    /** @var string */
    public string $title = 'My awesome website';

    /** @var string */
    public string $link = 'https://example.com';

    /** @var string */
    public string $description = 'Description for turbo page';

    /** @var string */
    public string $language = 'en';
}
