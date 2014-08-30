<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
$mod_strings = array (
	'LBL_TITLE' => 'Форма обратной связи',
    'LBL_SUBJECT' => 'Тема обращения: <span class="required">*</span>',
	'LBL_TEXT' => 'Текст обращения: <span class="required">*</span>',
	'LBL_CONTACT' => 'Контактные<br>данные<br>для ответа: <span class="required">*</span>',
	'LBL_FILE' => 'Файл:',
	'LBL_SUBMIT' => 'Отправить',
	'LBL_RESET' => 'Очистить',
	'ERR_MISSING_REQUIRED_FIELDS' => 'Не заполнены обязательные поля',
	'ERR_MISSING_FIELDS' => 'Заполните хотя бы одно поле',
	'ERR_SERVER' => 'Сервер не отвечает',
	'LBL_SENDING' => 'Отправка...',

	'ERR_MISSING_TO_ADDR' => "Не указан адрес kub3 в config.php (параметр k3_feedback_address)",
	'ERR_FILE_UPLOAD' => "Не удалось сохранить загруженный файл",
	'LBL_SEND_FAIL' => 'Ошибка отправки',
	'LBL_SEND_OK' => 'Сообщение отправлено',
);
?>
