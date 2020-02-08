<?require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");?>
<link rel="stylesheet" type="text/css" href="<?= SITE_TEMPLATE_PATH ?>/template_styles.css">
<? $APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "",
		"REQUIRED_FIELDS" => array(),
		"EVENT_MESSAGE_ID" => array()
	)
);?>