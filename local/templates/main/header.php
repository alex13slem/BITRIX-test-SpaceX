<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<!DOCTYPE html>
<html lang="ru">

<head>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link crossorigin="use-credentials" rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/site.webmanifest">
	<link crossorigin="use-credentials" rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/manifest.json">
	<link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/safari-pinned-tab.svg" color="#e80000">
	<link href="image/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-144x144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-60x60-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-120x120-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-76x76-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon-152x152-precomposed.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/favicon-16x16.png" sizes="16x16" />
	<meta name="msapplication-TileImage" content="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/mstile-150x150.png" />
	<meta name="msapplication-square150x150logo" content="<?= SITE_TEMPLATE_PATH ?>/assets/image/favicon/mstile-150x150.png" />
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#e80000">


	<title><? $APPLICATION->ShowTitle(); ?></title>

	<?php

	use Bitrix\Main\Page\Asset;

	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/template.css");
	?>

	<? $APPLICATION->ShowHead(); ?>
</head>

<?
if (CModule::IncludeModule("iblock")) :

	$iblock_id = 8;
	$my_elements = CIBlockElement::GetList(
		array("ID" => "ASC"),
		array("IBLOCK_ID" => $iblock_id),
		false,
		false,
		array('ID', 'NAME', 'DETAIL_PICTURE')
	);

	while ($ar_fields = $my_elements->GetNext()) {
		$img_path = CFile::GetPath($ar_fields["DETAIL_PICTURE"]);
	}

endif;
?>

<body class="body body-bg">
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>
	<!-- BEGIN HEADER -->
	<header class="header">
		<div class="container">
			<nav class="navbar navbar-expand-lg">

				<a class="site-logo" href="javascript:void(0)">
					<picture>
						<source srcset="<?= SITE_TEMPLATE_PATH ?>/assets/image/spacex_logo.webp" type="image/webp"><img class="site-logo__img" src="<?= SITE_TEMPLATE_PATH ?>/assets/image/spacex_logo.png" alt="SpaceX">
					</picture>
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
							<path stroke="rgba(0, 0, 0, 0.5)" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22" />
						</svg>
					</span>
				</button>

				<? $APPLICATION->IncludeComponent(
					"spacex:menu",
					"top_menu",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "N",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N",
						"COMPONENT_TEMPLATE" => "top_menu"
					),
					false
				); ?>

			</nav>
		</div>
	</header>
	<!-- END HEADER -->

	<style>
		.body-bg {
			background: url(<?= $img_path ?>) 50% 0/auto 100% no-repeat;
		}
	</style>