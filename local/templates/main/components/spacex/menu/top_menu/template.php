<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
	<div class="navbar-nav">
		<?php foreach ($arResult as $item) : ?>
			<a class="navbar-nav__item" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
		<?php endforeach; ?>
	</div>
</div>