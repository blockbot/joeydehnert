<?php get_header(); ?>

<div class="leftcol">

	<?php while (have_posts()) : the_post(); ?>

		<div class="post clearfix">

			<div class="post-content">

				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>

			</div>

		</div>	

	<?php endwhile; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>