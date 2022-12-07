<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<!-- Modal -->

<footer>
	<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">

			<? $APPLICATION->IncludeComponent(
				"spacex:form.result.new",
				"feedback-form",
				array(
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
					"WEB_FORM_ID" => "1",	// ID веб-формы
					"AJAX_MODE" => "Y", // [Y|N] При установленной опции для компонента будет включен режим AJAX.
					"AJAX_OPTION_SHADOW" => "N", // [Y|N] Затемнять область
					"AJAX_OPTION_JUMP" => "N", // [Y|N] Если пользователь совершит AJAX-переход, то при установленой опции по окончании загрузки произойдет прокрутка к началу компонента.
					"AJAX_OPTION_STYLE" => "Y", // [Y|N] Если параметр принимает значение "Y", то при совершении AJAX-переходов будет происходить подгрузка и обработка списка стилей, вызванных компонентом.
					"AJAX_OPTION_HISTORY" => "N", //[Y|N] Когда пользователь выполняет AJAX-переходы, то при включенной опции можно использовать кнопки браузера Назад и Вперед.
				),
				false
			); ?>

		</div>
	</div>
</footer>

<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/template.min.js"></script>
<script src="<?= SITE_TEMPLATE_PATH ?>/assets/js/template.js"></script>

</body>

</html>