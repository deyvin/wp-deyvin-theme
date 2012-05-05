<?php get_template_part( 'header', 'dependencies' ); ?>

		<div id="header" class="row">
			<div class="span12">
				<div class="page-header">
					<h1><img src="<?php echo get_template_directory_uri(); ?>/images/icons/donbot.png" width="100px"> <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><small><?php bloginfo('description'); ?></small></h1>	
				
						<?php wp_page_menu(); ?> 
						<li class="cls"></li>
				
				</div>
			</div>
		</div>

