<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
// 
?>

<? if ($arResult["isFormNote"] != "Y") {
?>

	<div class="modal-content proposal-modal">
		<div class="modal-header">

			<!-- Title start -->
			<h5 class="modal-title" id="">
				<?
				if ($arResult["isFormTitle"]) {
				?>
					<?= $arResult["FORM_TITLE"] ?>
				<? } //endif ;
				?>
			</h5>
			<!-- Title end -->

			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>

		</div>

		<div class="modal-body">

			<!-- <? if ($arResult["isFormErrors"] == "Y") : ?><p class="info"><?= $arResult["FORM_ERRORS_TEXT"]; ?></p><? endif; ?> -->

			<?= $arResult["FORM_HEADER"] ?>

			<? if ($arResult["isFormErrors"] == "Y") { ?>

				<?= $arResult["FORM_ERRORS_TEXT"] ?>

			<? } ?>

			<?
			foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
				if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden') {
					echo $arQuestion["HTML_CODE"];
				} else {
			?>

					<? if ($arResult["isFormErrors"] === "N") { ?>

						<label class=""><?= $arQuestion["HTML_CODE"] ?></label>

					<? } ?>
					<? if ($arResult["isFormErrors"] === "Y") { ?>

						<label class="invalid"><?= $arQuestion["HTML_CODE"] ?></label>

					<? } ?>

			<? }
			} //endwhile
			?>

			<?= $arResult["FORM_FOOTER"] ?>

			<p class="attention">
				*Нажимая на кнопку "Отправить", Вы соглашаетесь на обработку
				персональных данных.
			</p>

		</div>

		<div class="modal-footer">

			<button type="button" class="firm-btn" data-dismiss="modal">Закрыть</button>
			<input <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> type="submit" form="form" class="firm-btn firm-btn_red" name="web_form_submit" value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>" />

		</div>
	</div>

<? } //endif (isFormNote)

?>




<? if ($arResult["isFormErrors"] != "Y" && !empty($arResult["FORM_NOTE"])) { ?>
	<div class="modal-content proposal-modal">
		<div class="modal-header">
			<h5 class="modal-title" id="">Письмо успешно отправлено.</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<span> Спасибо за обращение!</span>
		</div>
		<div class="modal-footer">
			<button type="button" class="firm-btn" data-dismiss="modal">Закрыть</button>
		</div>
	</div>
<? } elseif (!empty($arResult["FORM_NOTE"])) { ?>
	<div class="modal-content proposal-modal">
		<div class="modal-header">
			<h5 class="modal-title" id="">Отправка не удалась!</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<span> Попробуйте ещё раз.</span>
		</div>
		<div class="modal-footer">
			<button type="button" class="firm-btn" data-dismiss="modal">Закрыть</button>
		</div>
	</div>
<? } ?>