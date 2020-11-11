<?php

namespace Krasnopyorovalex\YandexTurboPages\Tests;

use Krasnopyorovalex\YandexTurboPages\Dto\MetaDto;
use Krasnopyorovalex\YandexTurboPages\RssView;
use Krasnopyorovalex\YandexTurboPages\TurboPages\Elements\ContentTurboPage;
use Krasnopyorovalex\YandexTurboPages\TurboPages\YandexTurboPages;
use PHPUnit\Framework\TestCase;

class TurboPagesTest extends TestCase
{
    /** @test */
    public function can_be_create_turbo_page()
    {
        $content = 'I\'m yandex turbo page! ';

        $metaDto = new MetaDto();
        $metaDto->description = 'description for turbo page';
        $metaDto->language = 'ru';

        $yandexTurboPage = new YandexTurboPages(new RssView());
        $yandexTurboPage->setMetaDto($metaDto);
        $yandexTurboPage->addElement(
            new ContentTurboPage($yandexTurboPage->getView(), $content)
        );

        $result = $yandexTurboPage->make();

        $this->assertStringContainsString('yandex', $result);
        $this->assertStringContainsString('description for', $result);
        $this->assertIsString($result);
        $this->assertNotEquals(strlen($content), $content);
    }
}
