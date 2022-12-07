<?php

use \Bitrix\Main\EventManager;
use \Bitrix\Main\Loader;

Loader::registerAutoLoadClasses(null, [
	'spacex\FormValidatorEmailPhone' => '/local/php_interface/form_validator_emailPhone.php',
]);

EventManager::getInstance()->addEventHandlerCompatible('form', 'onFormValidatorBuildList', [
	'spacex\FormValidatorEmailPhone',
	'getDescription',
]);
