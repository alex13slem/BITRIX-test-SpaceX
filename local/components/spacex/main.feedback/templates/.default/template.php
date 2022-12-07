<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content proposal-modal">
			<div class="modal-header">
				<h5 class="modal-title" id="">Напиши Илону в ЛС</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?
				if (!empty($arResult["ERROR_MESSAGE"])) {
					foreach ($arResult["ERROR_MESSAGE"] as $v)
						ShowError($v);
				}
				if ($arResult["OK_MESSAGE"] <> '') {
				?><div class="mf-ok-text"><?= $arResult["OK_MESSAGE"] ?></div><? } ?>

				<form action="<?= POST_FORM_ACTION_URI ?>" method="POST" id="form" class="needs-validation" novalidate>
					<?= bitrix_sessid_post() ?>

					<input class="form-control name" type="text" name="user_name" value="<?= $arResult["AUTHOR_NAME"] ?>" placeholder="<?= Loc::getMessage('MFT_NAME') ?>" required>
					<input class="form-control surname" type="text" name="user_surname" value="<?= $arResult["AUTHOR_SURNAME"] ?>" placeholder="<?= Loc::getMessage('MFT_SURNAME') ?>" required>
					<input class="form-control email" type="text" name="user_email-phone" value="<?= $arResult["AUTHOR_EMAIL-PHONE"] ?>" placeholder="<?= Loc::getMessage('MFT_EMAIL-PHONE') ?>" required>
					<textarea class="form-control" name="MESSAGE" placeholder="<?= Loc::getMessage('MFT_MESSAGE') ?>" required><?= $arResult["MESSAGE"] ?></textarea>

					<? if ($arParams["USE_CAPTCHA"] == "Y") : ?>
						<div class="mf-captcha">
							<div class="mf-text"><?= GetMessage("MFT_CAPTCHA") ?></div>
							<input type="hidden" name="captcha_sid" value="<?= $arResult["capCode"] ?>">
							<img src="/bitrix/tools/captcha.php?captcha_sid=<?= $arResult["capCode"] ?>" width="180" height="40" alt="CAPTCHA">
							<div class="mf-text"><?= GetMessage("MFT_CAPTCHA_CODE") ?><span class="mf-req">*</span></div>
							<input type="text" name="captcha_word" size="30" maxlength="50" value="">
						</div>
					<? endif; ?>

					<input type="hidden" name="PARAMS_HASH" value="<?= $arResult["PARAMS_HASH"] ?>">
				</form>

				<p class="attention">*Нажимая на кнопку "Отправить", Вы соглашаетесь на обработку
					персональных данных.</p>

			</div>



			<div class="modal-footer">
				<button type="button" class="firm-btn" data-dismiss="modal">Закрыть</button>

				<input type="submit" name="submit" form="form" value="<?= GetMessage("MFT_SUBMIT") ?>" class="firm-btn firm-btn_red">
			</div>
		</div>
	</div>
</div>