<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<main class="main">
	<div class="container main-contacts">

		<div class="row">
			<!-- Section Titile -->
			<div class="col-md-12">
				<h1 class="section-title">
					<? if ($arResult["NAME"]) : ?>
						<? echo $arResult["NAME"] ?>
					<? endif; ?>
				</h1>
			</div>
		</div>
		<div class="row">
			<!-- Section Titile -->
			<div class="col-md-6 mt-3 d-flex flex-column justify-content-between">
				<div class="main-contacts__info">
					<? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["PREVIEW_TEXT"]) : ?>
						<? echo $arResult["PREVIEW_TEXT"]; ?>
					<? endif; ?>
				</div>

				<div class="main-contacts__widgets">

					<? if ($arResult["PROPERTIES"]["ADRESS"]["VALUE"]) : ?>
						<div class="find-widget">
							<strong>
								<? echo $arResult["PROPERTIES"]["ADRESS"]["NAME"]; ?>
							</strong>
							<? echo $arResult["PROPERTIES"]["ADRESS"]["VALUE"]; ?>
						</div>
					<? endif; ?>
					<? if ($arResult["PROPERTIES"]["PHONE"]["VALUE"]) : ?>
						<div class="find-widget">
							<strong>
								<? echo $arResult["PROPERTIES"]["PHONE"]["NAME"]; ?>
							</strong>
							<a href="tel:<? echo $arResult["PROPERTIES"]["PHONE"]["VALUE"]; ?>" target="_blank">
								<? echo $arResult["PROPERTIES"]["PHONE"]["VALUE"]; ?>
							</a>
						</div>
					<? endif; ?>
					<? if ($arResult["PROPERTIES"]["EMAIL"]["VALUE"]) : ?>
						<div class="find-widget">
							<strong>
								<? echo $arResult["PROPERTIES"]["EMAIL"]["NAME"]; ?>
							</strong>
							<a href="mailto:<? echo $arResult["PROPERTIES"]["EMAIL"]["VALUE"]; ?>">
								<? echo $arResult["PROPERTIES"]["EMAIL"]["VALUE"]; ?>
							</a>
						</div>
					<? endif; ?>
				</div>
			</div>
			<!-- contact form -->
			<div class="col-md-6">
				<? $APPLICATION->IncludeComponent(
					"spacex:form.result.new",
					"page-contacts-form",
					array(
						"AJAX_MODE" => "Y",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "Y",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "Y",
						"CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"CACHE_TYPE" => "N",	// Тип кеширования
						"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
						"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
						"EDIT_URL" => "",	// Страница редактирования результата
						"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
						"LIST_URL" => "",	// Страница со списком результатов
						"SEF_MODE" => "N",	// Включить поддержку ЧПУ
						"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
						"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
						"VARIABLE_ALIASES" => array(
							"RESULT_ID" => "RESULT_ID",
							"WEB_FORM_ID" => "WEB_FORM_ID",
						),
						"WEB_FORM_ID" => "2",	// ID веб-формы
					),
					false
				); ?>

			</div>
		</div>

		<div class="row main-contacts__map">
			<div class="col">
				<? $APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	"contacts-map", 
	array(
		"API_KEY" => "",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "PUBLIC",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";d:46.91280283501245;s:10:\"yandex_lon\";d:34.05627832728743;s:12:\"yandex_scale\";i:6;}",
		"MAP_HEIGHT" => "400",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => "contacts-map"
	),
	false
); ?>
			</div>
		</div>


	</div>
</main>