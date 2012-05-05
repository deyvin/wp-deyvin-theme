<?php get_template_part( 'header', 'small' ); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="row">
			<div class="span12">
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

					<h1><?php the_title(); ?></h1>

					
					<div class="entry">

						<?php the_content(); ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

						<?php the_tags( 'Tags: ', ', ', ''); ?>

					</div>

					<?php edit_post_link('Edit this entry','','.'); ?>

				</div>
			</div>
		</div>
	
	<?php endwhile; endif; ?>
	

<?php get_footer(); ?>