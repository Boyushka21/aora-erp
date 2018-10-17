<!-- Dialog start -->
<div id="dialog_wrapper" class="hide_me full_size">
	<div class="dialog_window dialog_launchpad animate_300 hide_me">
		<div class="container">
			<div class="row">
				<?php
					$icons = array(
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
						array('javascript:;', 'Title', 'pig.png'),
					);
					
					foreach ($icons as $icon) {
				?>
				
					<div class="col_xxs_4 col_xs_4 col_s_3 col_m_2 col_l_2 sort">
						<a href="<?php echo $icon[0]; ?>" class="size_is toggle_dialog" data-dialog="launchpad">
							<img src="_tmp/<?php echo $icon[2]; ?>" class="animate_150 decolorize" />
							<strong><?php echo $icon[1]; ?></strong>
						</a>
					</div>
				
				<?php } ?>
			</div>
		</div>
	</div>
    
	<div class="dialog_window dialog_logout animate_300 hide_me">
		<div class="container">
			<div class="row">
				<div class="col_xxs_10 col_xs_8 col_s_6 col_m_6 col_l_4 push_l_4 push_m_3 push_s_3 push_xs_2 push_xxs_1">
					<div class="dialog_actions">
					<div class="inner">
						<div class="title">Подтверждение выхода</div>
						
						<div class="text">
							Вы действительно хотите выйти из системы? Все несохраненные изменения будут утеряны.
						</div>
						
						<ul class="actions clear_after">
							<li><a href="javascript:;" class="toggle_dialog dialog_close bttn bttn_50 bttn_simple" data-dialog="logout">Отмена</a></li>
							<li><a href="login.php" class="bttn bttn_50 bttn_simple" data-dialog="logout">Выйти</a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
	<div class="dialog_window dialog_adduser animate_300 hide_me">
		<div class="container">
			<div class="row">
				<div class="col_xxs_10 col_xs_8 col_s_6 col_m_6 col_l_4 push_l_4 push_m_3 push_s_3 push_xs_2 push_xxs_1">
					<div class="dialog_actions">
					<div class="inner">
						<div class="title">Новый пользователь</div>
						
						<div class="text">
							Вы действительно хотите выйти из системы? Все несохраненные изменения будут утеряны.
						</div>
						
						<ul class="actions clear_after">
							<li><a href="javascript:;" class="toggle_dialog dialog_close bttn bttn_50 bttn_simple" data-dialog="adduser">Отмена</a></li>
							<li><a href="javascript:;" class="toggle_dialog dialog_close bttn bttn_50 bttn_simple" data-dialog="adduser">Добавить</a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="dialog_background full_size clr_b2"></div>
</div>
<!-- Dialog end -->

</body> 
</html>