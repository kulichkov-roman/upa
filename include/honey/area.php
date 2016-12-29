<section class="gray-bg cta">
	<div class="container">
		<div class="row">
			<div class="col-md-12 cta-message">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => SITE_DIR."include/honey/cta-text.php"
					)
				);?>
			</div>
		</div><!--End row-->
	</div><!--End container -->
</section><!--End Call to Action -->
