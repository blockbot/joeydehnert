<?php 

	get_header(); 
	
	$past_cat_id = get_category_by_slug('past');

?>

<div class="singlecol">

	<div id="front-about">

		<?php 
            $front_id = get_ID_by_slug("front");
            $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($front_id), 'full'); 
            $front_content = get_post_field('post_content', $front_id);
        ?>
        
        <div id="about-header-image-content">

            <img class="lazy" 
                data-original="<?php echo $featured_image[0]; ?>" 
                src="<?php echo bloginfo("template_url") ?>/img/lazy.gif">

        	<div id="about-header-content">

                <?php echo $front_content; ?>

        	</div>	

        </div>

	</div>

	<div id="front-projects" class="clearfix">

		<h2>Work</h2>

		<?php

		$temp = $projects_query; 
		$projects_query = null; 
		$projects_query = new WP_Query(); 
  		$args = array( 
			'post_type' => 'projects',
			'posts_per_page' => 10,
			'order' => 'DESC',
			'paged' => $paged,
			'category__not_in' => array($past_cat_id->cat_ID)
		);
		// the query
		$projects_query -> query($args);

		?>

		<?php if ( $projects_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>

				<div class="project">

					<div class="project-title">

						<h3><?php the_title();?></h3>
						<a href="javascript:void(0);">MORE</a>

					</div>

					<div class="project-content">

						<a href="javascript:void(0);" class="btn-close">X</a>
						<?php the_content(); ?>

					</div>

					<a href="javascript:void(0);" class="project-thumb">
						
						<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large'); ?>
						<img class="lazy" 
							 data-original="<?php echo $featured_image[0]; ?>" 
							 src="<?php bloginfo("template_url"); ?>/img/lazy.gif">

					</a>

				</div>	

			<?php endwhile; ?>
			<!-- end of the loop -->

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>	

	<div id="front-notable-past" class="clearfix">

		<h2>Notable Past</h2>

		<?php

		$temp = $projects_query; 
		$projects_query = null; 
		$projects_query = new WP_Query(); 
  		$args = array( 
			'post_type' => 'projects',
			'posts_per_page' => 10,
			'order' => 'DESC',
			'paged' => $paged,
			'category__in' => array($past_cat_id->cat_ID)
		);
		// the query
		$projects_query -> query($args);

		?>

		<?php if ( $projects_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); ?>

				<div class="project">

					<div class="project-content">

						<a href="javascript:void(0);" class="btn-close">X</a>
						<?php the_content(); ?>

					</div>

					<a href="javascript:void(0);" class="project-thumb">
						
						<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large'); ?>
						<img class="lazy" 
							 data-original="<?php echo $featured_image[0]; ?>" 
							 src="<?php bloginfo("template_url"); ?>/img/lazy.gif">

					</a>

				</div>	

			<?php endwhile; ?>
			<!-- end of the loop -->

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>

	<div id="front-posts" class="clearfix">

		<h2>Blog</h2>

		<?php

		$temp = $posts_query; 
		$posts_query = null; 
		$posts_query = new WP_Query(); 
  		$args = array( 
			'post_type' => 'post',
			'posts_per_page' => 3,
			'order' => 'DESC',
			'paged' => $paged
		);
		// the query
		$posts_query -> query($args);

		?>

		<?php if ( $posts_query->have_posts() ) : ?>

			<!-- the loop -->
			<?php while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>

				<div class="post clearfix">

					<div class="post-content">

						<div class="post-thumb">

							<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'large'); ?>
							
							<a href="<?php the_permalink(); ?>">

								<img class="lazy" 
									 data-original="<?php echo $featured_image[0]; ?>" 
									 src="<?php bloginfo("template_url"); ?>/img/lazy.gif">

							</a>

						</div>

						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>

					</div>

				</div>	

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>

	<div id="front-contact">

		<h2>Contact</h2>

		<?php 
            $contact_id = get_ID_by_slug("contact");
            $contact_content = get_post_field('post_content', $contact_id);
        ?>

        <div class="front-contact-content">
        	<p><?php echo $contact_content; ?></p>
        </div>	

	</div>

</div>

<?php get_footer(); ?>