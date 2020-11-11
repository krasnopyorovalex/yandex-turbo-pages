<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages\TurboPages;

use Krasnopyorovalex\YandexTurboPages\Contracts\TurboPages;
use Krasnopyorovalex\YandexTurboPages\Dto\RenderDto;
use Krasnopyorovalex\YandexTurboPages\TurboPages\ValueObjects\Content;

/**
 * Class YandexTurboPages
 * @package Krasnopyorovalex\YandexTurboPages
 */
class YandexTurboPages extends TurboPages
{
    /**
     * @var array
     */
    private array $turboPages;

    /**
     * @return string
     */
    public function make(): string
    {
        $renderDto = new RenderDto();
        $renderDto->template = $this->getTemplate();
        $renderDto->meta = $this->getMetaDto();
        $renderDto->content = new Content(
            array_reduce($this->turboPages, fn ($str, TurboPages $turboPage) => $str . $turboPage->make(), '')
        );

        return $this->view->render($renderDto);
    }

    /**
     * @param TurboPages $turboPage
     */
    public function addElement(TurboPages $turboPage)
    {
        $this->turboPages[] = $turboPage;
    }
}
