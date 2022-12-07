<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
<!-- MAIN START -->
<main class="main">
	<div class="main-news container">

		<? $APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"news-page",
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"DISPLAY_DATE" => "N",	// Выводить дату элемента
				"DISPLAY_NAME" => "N",	// Выводить название элемента
				"DISPLAY_PICTURE" => "N",	// Выводить детальное изображение
				"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"ELEMENT_CODE" => "",	// Код новости
				"ELEMENT_ID" => "22",	// ID новости
				"FIELD_CODE" => array(	// Поля
					0 => "PREVIEW_TEXT",
					1 => "",
				),
				"IBLOCK_ID" => "9",	// Код информационного блока
				"IBLOCK_TYPE" => "pages",	// Тип информационного блока (используется только для проверки)
				"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
				"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
				"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
				"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
				"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
				"PAGER_TITLE" => "Страница",	// Название категорий
				"PROPERTY_CODE" => array(	// Свойства
					0 => "news_form_btn",
					1 => "",
				),
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
				"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_STATUS_404" => "N",	// Устанавливать статус 404
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SHOW_404" => "N",	// Показ специальной страницы
				"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа элемента
				"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
				"USE_SHARE" => "N",	// Отображать панель соц. закладок
			),
			false
		); ?>

		<? $APPLICATION->IncludeComponent(
			"bitrix:news",
			"news-page",
			array(
				"ADD_ELEMENT_CHAIN" => "Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "Y",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "Y",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COLOR_NEW" => "3E74E6",
				"COLOR_OLD" => "C0C0C0",
				"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
				"DETAIL_DISPLAY_TOP_PAGER" => "N",
				"DETAIL_FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"DETAIL_PAGER_SHOW_ALL" => "Y",
				"DETAIL_PAGER_TEMPLATE" => "",
				"DETAIL_PAGER_TITLE" => "Страница",
				"DETAIL_PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"DETAIL_SET_CANONICAL_URL" => "N",
				"DISPLAY_AS_RATING" => "rating",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FILE_404" => "",
				"FONT_MAX" => "50",
				"FONT_MIN" => "10",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "2",
				"IBLOCK_TYPE" => "news",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"LIST_FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"LIST_PROPERTY_CODE" => array(
					0 => "",
					1 => "",
				),
				"MEDIA_PROPERTY" => "",
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"NEWS_COUNT" => "3",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "bootstrap_v4",
				"PAGER_TITLE" => "Новости",
				"PERIOD_NEW_TAGS" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"SEF_FOLDER" => "/news/",
				"SEF_MODE" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"SET_STATUS_404" => "Y",
				"SET_TITLE" => "Y",
				"SHOW_404" => "Y",
				"SLIDER_PROPERTY" => "",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"TAGS_CLOUD_ELEMENTS" => "150",
				"TAGS_CLOUD_WIDTH" => "100%",
				"TEMPLATE_THEME" => "red",
				"USE_CATEGORIES" => "N",
				"USE_FILTER" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_RATING" => "N",
				"USE_REVIEW" => "N",
				"USE_RSS" => "N",
				"USE_SEARCH" => "N",
				"USE_SHARE" => "N",
				"COMPONENT_TEMPLATE" => "news-page",
				"SEF_URL_TEMPLATES" => array(
					"news" => "",
					"section" => "#SECTION_CODE#/",
					"detail" => "detail/#ELEMENT_CODE#/",
				)
			),
			false
		); ?>
	</div>
</main>
<!-- MAIN END -->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>