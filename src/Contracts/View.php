<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages\Contracts;

use Krasnopyorovalex\YandexTurboPages\Dto\RenderDto;

/**
 * Interface View
 * @package Krasnopyorovalex\YandexTurboPages\Contracts
 */
interface View
{
    /**
     * @param RenderDto $renderDto
     * @return mixed
     */
    public function render(RenderDto $renderDto);
}
