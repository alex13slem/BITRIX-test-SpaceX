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

<?php if (!empty($arResult['ITEMS'])) : ?>
	<div class="cards-block col-12 col-xl-5 h-50 main__cards">

		<?php foreach ($arResult['ITEMS'] as $arItem) : ?>


			<div class="cards-block__card card">
				<?php if (!empty($arItem['PROPERTIES']['first_string']['VALUE'])) : ?>
					<p class="card__first-line"><?= $arItem['PROPERTIES']['first_string']['VALUE']; ?></p>
				<?php endif; ?>
				<?php if (!empty($arItem['PROPERTIES']['first_string']['VALUE'])) : ?>
					<p class="card__second-line"><?= $arItem['PROPERTIES']['second_string']['~VALUE']; ?></p>
				<?php endif; ?>
				<?php if (!empty($arItem['PROPERTIES']['first_string']['VALUE'])) : ?>
					<p class="card__third-line"><?= $arItem['PROPERTIES']['third_string']['VALUE']; ?></p>
				<?php endif; ?>
			</div>

		<?php endforeach; ?>


	</div>
<?php endif; ?>