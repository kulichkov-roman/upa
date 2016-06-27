<section class="color-bg light-typo padding-top-bottom cta-iphones">
		
	<div class="container">
		
		<div class="row">
		
			<div class="col-sm-6">
			
				<div class="iphones-wrapper">

					<img class="img-responsive" src="<?=SITE_TEMPLATE_PATH?>/assets/seo_sale.png" alt=""/>

				</div>
						
			</div>
					
			<div class="col-sm-5 col-sm-offset-1">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_DIR."include/cta-servises-text.php"
					)
				);?>
						
				<a class="btn btn-qubico white scrollto" href="#contact"><i class="fa fa-arrow-down"></i>Оставить заявку</a>
						
			</div>
				
		</div>
			
	</div>
			
</section>
