<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CJSCore::Init(['phone_number']);
CJSCore::Init(['masked_input']);
?>


<div class="form-body">

	<!-- Title start -->
	<h5 class="form-body__title" id="">
		<?
		if ($arResult["isFormTitle"]) {
		?>
			<?= $arResult["FORM_TITLE"] ?>
		<? } //endif ;
		?>
	</h5>
	<!-- Title end -->

	<? if ($arResult["isFormErrors"] != "Y" && !empty($arResult["FORM_NOTE"])) { ?>
		<p class="done-message">Ваше сообщение успешно отправлено!</p>
	<? } elseif (!empty($arResult["FORM_NOTE"])) { ?>
		<p class="error-message">Ошибка отправки!</p>
	<? } ?>

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
	<p class="attention">
		*Нажимая на кнопку "Отправить", Вы соглашаетесь на обработку
		персональных данных.
	</p>

	<input <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> data-toggle="modal" data-target="#contact-form-done" type="submit" form="form" class="form-body__btn firm-btn firm-btn_red" name="web_form_submit" value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>" />

	<?= $arResult["FORM_FOOTER"] ?>

</div>

<!-- <script>
	const inputPhone = document.querySelector('#form-phone')
	if (inputPhone) {
		inputPhone.onfocus = () => {
			BX.ready(() => {
				const result = new BX.MaskedInput({
					mask: '+7(999) 999-99-99', // устанавливаем маску
					input: BX('form-phone'),
					placeholder: ' ' // символ замены +7 ___ ___ __ __
				});

				result.setValue(''); // устанавливаем значение
			});
		}
	}
</script> -->
<script>
	BX.ready(function() {
		new BX.PhoneNumber.Input({
			node: BX('form-phone'),
			flagNode: BX(''), //
			flagSize: 16, // Размер флага [16, 24, 32]
			defaultCountry: 'ru', // Страна по-умолчанию
			onChange: function(e) {
				// вызывается при изменении значения
			}
		});
	});
</script>