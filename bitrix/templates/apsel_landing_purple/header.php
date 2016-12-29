<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
	IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<? echo LANGUAGE_ID?>" class="no-js">
	<head>

		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET?>">
		<?$isHoney = CSite::InDir(SITE_DIR.'honey/');?>
		<?
			$APPLICATION->ShowHead();
			$APPLICATION->ShowMeta("robots");
			$APPLICATION->ShowMeta("keywords");
			$APPLICATION->ShowMeta("description");
		?>
		<title>
			<?if($isHoney){?>
				Engineering.PRO — создаём лендинги по продаже мёда
			<?} else {
				$APPLICATION->ShowTitle();
			}?>
		</title>
		<?
			$APPLICATION->ShowCSS();
			$APPLICATION->ShowHeadStrings();
			$APPLICATION->ShowHeadScripts();
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/assets/favicon.ico">
		<link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/assets/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/assets/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/assets/apple-touch-icon-114x114.png">
		
		<!-- ==============================================
		CSS
		=============================================== -->    
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.css">
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/flexslider.css">
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/sequencejs-qubico.css" />

		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/colorbox.css" />

		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/qubico.css">
		<?if($isHoney){?>
			<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/honey/colors.css">
		<?} else {?>
			<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/colors.css">
		<?}?>

		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/fancybox/source/jquery.fancybox.css">
		<link rel="stylesheet" href="/css/developers.css">
		
		<link id="theme" rel="stylesheet">
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style-switcher.css">
		
		<script src="/js/helpers.js"></script>
		
		<!-- ==============================================
		Fonts
		=============================================== -->
		<link href='http://fonts.googleapis.com/css?family=Comfortaa:700,400&subset=cyrillic,latin' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300&subset=cyrillic' rel='stylesheet' type='text/css'>
		
		<!-- ==============================================
		JS
		=============================================== -->
			
		<!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/libs/modernizr.min.js"></script>

        <!-- ==============================================
        Open graph
        =============================================== -->
        <meta property="og:image:width" content="300"/>
        <meta property="og:image:height" content="300"/>
        <meta property="og:url" content="http://soft-engineering.pro"/>
        <meta property="og:image" content="http://soft-engineering.pro//assets/logo_share.jpg"/>
        <meta property="og:title" content="Создание сайтов, web-приложение в Москве, Новосибирске: заказать разработку сайта, программирование на 1С-Битрикс, сложные интернет-магазины"/>
        <meta property="og:description" content="Engineering.PRO предлагает полный комплекс услуг по созданию и продвижению сайтов, веб-приложений"/>
	</head>
  
	<body data-spy="scroll" data-target="#main-nav" data-offset="400">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			"",
			Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => "",
				"PATH" => SITE_DIR."include/yandex_metrika.php"
			)
		);?>
		<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<div id="main-nav" class="navbar navbar-fixed-top">
			<div id="panel">
				<?$APPLICATION->ShowPanel();?>
			</div>
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					<!-- ======= LOGO ========-->
					<a class="navbar-brand scrollto" href="#home">
						<span class="logo-small"><img src="/include/up-logo1.png" alt=""/></span>
						<span class="to-top"><i class="fa fa-arrow-up"></i></span>
						<!-- ==== Image Logo ==== -->
						<span>
						<?
						if($isHoney)
						{
							$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => SITE_DIR."include/honey/company_logo.php"
								)
							);
						}
						else
						{
							$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => SITE_DIR."include/company_logo.php"
								)
							);
						}
						?>
						</span>
					</a>
				</div>
				<?
				if($isHoney)
				{
					$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						Array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => SITE_DIR."include/honey/menu.php"
						)
					);
				}
				else
				{
					$APPLICATION->IncludeComponent(
						"bitrix:catalog.main",
						"menu",
						Array(
							"IBLOCK_TYPE" => "catalog",
							"IBLOCK_URL" => "",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "36000000",
							"CACHE_GROUPS" => "Y",
						),
						false
					);
				}
				?>
				
			</div><!--End container -->
			
		</div><!--End main-nav -->
