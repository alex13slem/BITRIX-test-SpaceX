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

<? if ($arResult["FIELDS"]["PREVIEW_TEXT"]) : ?>
	<h1 class="main-news__title">
		<?= $arResult["FIELDS"]["PREVIEW_TEXT"];
		unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?>
	</h1>
<? endif; ?>

<button type="button" class="main-news__proposal-btn firm-btn" data-toggle="modal" data-target="#form-modal">
	<? foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>
		<?php if (!empty($arProperty["DISPLAY_VALUE"])) : ?>
			<?= $arProperty["DISPLAY_VALUE"]; ?>
		<?php endif; ?>
	<? endforeach; ?>
</button>