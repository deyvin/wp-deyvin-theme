<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="span12">
				<h1>Quebrei meu tema!!!!!!!</h1>
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h2>
					<p><?php the_permalink() ?></p>
					<span class="label label-info"><?php the_time('d/m/Y') ?></span> <span class="label"><?php the_category(', ') ?></span>
					
					<br /><br />
				</div>
			</div>
		</div>
	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	

<?php get_footer(); ?>
