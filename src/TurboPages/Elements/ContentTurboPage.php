<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages\TurboPages\Elements;

use Krasnopyorovalex\YandexTurboPages\Contracts\TurboPages;
use Krasnopyorovalex\YandexTurboPages\Contracts\View;
use Krasnopyorovalex\YandexTurboPages\Dto\RenderDto;
use Krasnopyorovalex\YandexTurboPages\TurboPages\ValueObjects\Content;

/**
 * Class ContentTurboPage
 * @package Krasnopyorovalex\YandexTurboPages\TurboPages\Elements
 */
class ContentTurboPage extends TurboPages
{
    /**
     * @var string
     */
    protected string $template = 'content.php';

    /**
     * @var string
     */
    private string $content;

    /**
     * ContentTurboPage constructor.
     * @param View $view
     * @param string $content
     */
    public function __construct(View $view, string $content)
    {
        parent::__construct($view);
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function make(): string
    {
        $renderDto = new RenderDto();
        $renderDto->template = $this->getTemplate();
        $renderDto->content = new Content($this->content);

        return $this->view->render($renderDto);
    }
}
