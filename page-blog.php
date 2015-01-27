<?php 

/*
Template Name: Blog
*/

get_header(); 

?>

<div class="singlecol posts">

	<h2 id="page-title">Blog</h2>

	<?php
		
	$temp = $wp_query; 
	$wp_query = null; 
	$wp_query = new WP_Query(); 
	$wp_query->query('showposts=10&post_type=post'.'&paged='. $paged);

	while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<div class="post clearfix">
				
			<div class="post-thumb">	
	
				<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'medium'); ?>

				<a href="<?php the_permalink(); ?>">				
					
					<img class="lazy" 
						 data-original="<?php echo $featured_image[0]; ?>" 
						 src="<?php bloginfo("template_url"); ?>/img/lazy.gif">
				
				</a>

			</div>

			<div class="post-content">

				<h2>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>

				<?php the_excerpt(); ?>
				
			</div>

		</div>	

	<?php endwhile; ?>

	<div class="next-posts">	
		<?php next_posts_link('') ?>
	</div>

	<?php 
	  $wp_query = null; 
	  $wp_query = $temp;  // Reset
	?>

</div>

<?php get_footer(); ?>