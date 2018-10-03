<!-- Dialog start -->
<div id="dialog_wrapper" class="hide_me clr_b2 full_size">
	<div class="dialog_window dialog_launchpad animate_300 hide_me">
		<div class="container">
			<div class="row">
				<?php
					$icons = array(
						array('javascript:;', 'Title', 'memo-sticky-notes-2018-08-21'),
						array('javascript:;', 'www', 'tweetbot-3-for-twitter-2018-08-24'),
						array('javascript:;', 'www', 'blogtouch-for-blogger-2018-08-24'),
						array('javascript:;', 'www', 'zoho-books-time-tracking-2018-04-10'),
						array('javascript:;', 'www', 'zoho-invoice-time-tracking-2018-04-10'),
						array('javascript:;', 'www', 'istat-view-2018-03-16'),
						array('javascript:;', 'www', 'screen-tint-control-screen-brightness-color-2017-08-09'),
						array('javascript:;', 'www', 'space-drop-drag-drop-file-management-2017-03-20'),
						array('javascript:;', 'www', 'exporter-for-address-book-2016-10-14'),
						array('javascript:;', 'www', 'window-focus-highlight-active-2016-08-19'),
						array('javascript:;', 'www', 'infographics-2016-06-23'),
						array('javascript:;', 'www', 'exhibeo-2-2016-06-23'),
						array('javascript:;', 'www', 'spy-cam-2016-03-18'),
						array('javascript:;', 'www', 'itemplate-keynote-edition-2015-05-21'),
						array('javascript:;', 'www', 'idoc-2-manage-documents-simplicity-2015-05-21'),
						array('javascript:;', 'www', 'receiptbox-2015-05-06'),
						array('javascript:;', 'www', 'xcode-2015-03-13'),
						array('javascript:;', 'www', 'desk-2014-12-04'),
					);
					
					foreach ($icons as $icon) {
				?>
				
					<div class="col_xxs_4 col_xs_4 col_s_3 col_m_2 col_l_2 sort">
						<a href="<?php echo $icon[0]; ?>" class="size_is toggle_dialog" data-dialog="launchpad">
							<img src="http://www.macosicongallery.com/icons/<?php echo $icon[2]; ?>/256.png" class="animate_150 decolorize" />
							<strong><?php echo $icon[1]; ?></strong>
						</a>
					</div>
				
				<?php } ?>
			</div>
		</div>
	</div>
    
	<div class="dialog_window dialog_test_simple animate_300 hide_me">
		<div class="container">
			<div class="row">
				<div class="col_xxs_12 col_xs_12 col_s_8 col_m_6 col_l_6 push_l_3 push_m_3 push_s_2">
					<div class="dialog_simple">
						
						<a href="javascript:;" class="toggle_dialog dialog_close" data-dialog="test_simple">&times;</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="dialog_background full_size thm_grd"></div>
</div>
<!-- Dialog end -->

</body> 
</html>