<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages;

use Krasnopyorovalex\YandexTurboPages\Contracts\View;
use Krasnopyorovalex\YandexTurboPages\Dto\RenderDto;

/**
 * Class RssView
 * @package Krasnopyorovalex\YandexTurboPages
 */
class RssView implements View
{
    /**
     * @param RenderDto $renderDto
     * @return false|mixed|string
     */
    public function render(RenderDto $renderDto)
    {
        ob_start();

        if (! file_exists($renderDto->template)) {
            throw new \DomainException('Not correct path for template');
        }

        require $renderDto->template;

        return ob_get_clean();
    }
}
