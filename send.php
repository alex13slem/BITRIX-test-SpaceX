<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "SpaceX");
$APPLICATION->SetTitle("Send");
?><!-- BEGIN MAIN --> <main class="main">
<div class="container">
	<div class="row justify-content-xl-between justify-content-center align-content-start flex-grow-1">
		<div class="proposal col-12 col-md-8 col-xl-7 h-50 main__proposal">
			<p class="proposal__text">
				 Путeшествие<br>
				на красную планету
			</p>
			 <!-- Button trigger modal --> <button type="button" class="proposal__btn firm-btn" data-toggle="modal" data-target="#form-modal">
			Начать путешествие </button>
			<!-- Modal -->
			<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content proposal-modal">
						<div class="modal-header">
							<h5 class="modal-title" id="">Напиши Илону в ЛС</h5>
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
						</div>
						<div class="modal-body">
							<p class="info">
							</p>
							 <?$APPLICATION->IncludeComponent(
	"spacex:main.feedback",
	"contact_form",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"EMAIL_TO" => "coder.ash.sagirov@gmail.com",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "N"
	)
);?>
						</div>
						<div class="modal-footer">
 <button type="button" class="firm-btn" data-dismiss="modal">Закрыть</button> <input type="submit" name="submit" form="form" value="<?= GetMessage(">" data-bx-app-ex-value="<?= GetMessage("MFT_SUBMIT") ?>
							" class="firm-btn firm-btn_red"&gt;
						</div>
					</div>
				</div>
			</div>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"spacex:news.list",
	"advantage_cards",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => $_REQUEST["ID"],
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Преимущества",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"first_string",2=>"second_string",3=>"third_string",4=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
	</div>
</div>
 </main>
<!-- END MAIN --><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>