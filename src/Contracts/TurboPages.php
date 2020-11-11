<?php

declare(strict_types=1);

namespace Krasnopyorovalex\YandexTurboPages\Contracts;

use Krasnopyorovalex\YandexTurboPages\Dto\MetaDto;

/**
 * Interface TurboPages
 * @package Krasnopyorovalex\YandexTurboPages\Contracts
 */
abstract class TurboPages
{
    /**
     * @var string
     */
    protected string $template = 'layout.php';
    /**
     * @var View
     */
    protected View $view;
    /**
     * @var string for sprintf(...)
     */
    private string $path = '%s/../TurboPages/Elements/views/%s';
    /**
     * @var MetaDto
     */
    private MetaDto $metaDto;

    /**
     * @return string
     */
    abstract public function make(): string;

    /**
     * YandexTurboPages constructor.
     * @param View $view
     */
    public function __construct(View $view)
    {
        $this->view = $view;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        if (! $this->template) {
            throw new \DomainException('Template has been set.');
        }

        return sprintf($this->path, __DIR__, $this->template);
    }

    /**
     * @param string $template
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }

    /**
     * @return View
     */
    public function getView(): View
    {
        return $this->view;
    }

    /**
     * @return MetaDto
     */
    public function getMetaDto(): MetaDto
    {
        return $this->metaDto;
    }

    /**
     * @param MetaDto $metaDto
     */
    public function setMetaDto(MetaDto $metaDto): void
    {
        $this->metaDto = $metaDto;
    }
}
