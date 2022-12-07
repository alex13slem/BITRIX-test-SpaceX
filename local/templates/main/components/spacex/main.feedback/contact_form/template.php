<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

use Bitrix\Main\Localization\Loc;
?>


<div class="modal-body">

	<?
	if ($arResult["OK_MESSAGE"] <> '') {
	?><p><?= $arResult["OK_MESSAGE"] ?></p><? } ?>

	<form action="<?= POST_FORM_ACTION_URI ?>" method="POST" id="form" class="needs-validation" novalidate>
		<?= bitrix_sessid_post() ?>

		<input class="form-control name" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>" placeholder="<?= Loc::getMessage('MFT_NAME') ?>" <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("AUTHOR_NAME", $arParams["REQUIRED_FIELDS"])) : ?>required<? endif ?> />
		<input class="form-control surname" type="text" name="user_surname" value="<?= $arResult["AUTHOR_SURNAME"] ?>" placeholder="<?= Loc::getMessage('MFT_SURNAME') ?>" <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("AUTHOR_SURNAME", $arParams["REQUIRED_FIELDS"])) : ?>required<? endif ?> />
		<input class="form-control email" type="text" name="user_email-phone" value="<?= $arResult["AUTHOR_EMAIL-PHONE"] ?>" placeholder="<?= Loc::getMessage('MFT_EMAIL-PHONE') ?>" <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("AUTHOR_EMAIL-PHONE", $arParams["REQUIRED_FIELDS"])) : ?>required<? endif ?> />
		<textarea class="form-control" name="MESSAGE" placeholder="<?= Loc::getMessage('MFT_MESSAGE') ?>" <? if (empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) : ?>required<? endif ?>><?= $arResult["MESSAGE"] ?></textarea>
		<?
		if (!empty($arResult["ERROR_MESSAGE"])) {
			foreach ($arResult["ERROR_MESSAGE"] as $v)
				ShowError($v);
		}
		?>
		<p class="attention">*Нажимая на кнопку "Отправить", Вы соглашаетесь на обработку
			персональных данных.</p>
		<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">

	</form>

</div>