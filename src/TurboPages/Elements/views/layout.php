<?php
/**
 * @var $renderDto Krasnopyorovalex\YandexTurboPages\Dto\RenderDto
 */
?>
<rss
    xmlns:yandex="http://news.yandex.ru"
    xmlns:media="http://search.yahoo.com/mrss/"
    xmlns:turbo="http://turbo.yandex.ru"
    version="2.0">
    <link>
        <title><?= $renderDto->meta->title?></title>
        <link><?= $renderDto->meta->link?></link>>
        <description><?= $renderDto->meta->description?></description>
        <language><?= $renderDto->meta->language?></language>
        <?= $renderDto->content->getContent()?>
    </channel>
</rss>
