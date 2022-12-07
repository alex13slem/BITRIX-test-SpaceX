<?php

namespace spacex;

use \Bitrix\Main\EventManager;

class FormValidatorEmailPhone
{
	function getDescription()
	{
		return [
			'NAME' => 'sx_emailPhone', // идентификатор
			'DESCRIPTION' => 'EmailPhone', // наименование
			'TYPES' => [
				'text'
			], // типы полей
			'SETTINGS' => [__CLASS__, 'getSettings'], // метод, возвращающий массив настроек
			'CONVERT_TO_DB' => [__CLASS__, 'toDB'], // метод, конвертирующий массив настроек в строку
			'CONVERT_FROM_DB' => [__CLASS__, 'fromDB'], // метод, конвертирующий строку настроек в массив
			'HANDLER' => [__CLASS__, 'doValidate'], // валидатор
		];
	}

	function getSettings()
	{
		return [];
	}

	function toDB($arParams)
	{
		// возвращаем сериализованную строку
		return serialize($arParams);
	}

	function fromDB($strParams)
	{
		// никаких преобразований не требуется, просто вернем десериализованный массив
		return unserialize($strParams);
	}

	function doValidate($arParams, $arQuestion, $arAnswers, $arValues)
	{
		global $APPLICATION;

		foreach ($arValues as $value) {
			// проверяем на пустоту
			if (
				!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $value)
				&&
				!preg_match("/^(\+)?((\d{2,3}) ?\d|\d)(([ -]?\d)|( ?(\d{2,3}) ?)){5,12}\d$/", $value)
			) {
				// вернем ошибку
				$APPLICATION->ThrowException('Введены некорректные данные.');

				return false;
			}
		}

		// все значения прошли валидацию, вернем true
		return true;
	}
}
