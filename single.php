<?php get_header(); ?>

<div class="singlecol">

	<?php while (have_posts()) : the_post(); ?>

		<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'full-size'); ?>
							
		<img class="single-featured lazy" 
			 data-original="<?php echo $featured_image[0]; ?>" 
			 src="<?php bloginfo("template_url"); ?>/img/lazy.gif">

		<div class="post clearfix">

			<div class="single-header-contain">

				<h2 class="single-header"><?php the_title(); ?></h2>

			</div>

			<div class="post-content-contain">

				<div class="post-content">

					<?php the_content(); ?>

					<div id="disqus_thread"></div>

					<script type="text/javascript">
					    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
					    var disqus_shortname = 'joeydehnertdesignandcodeblog'; // required: replace example with your forum shortname

					    // The following are highly recommended additional parameters. Remove the slashes in front to use.
					    // var disqus_identifier = '<?php echo $post->ID ?>';
					    // var disqus_url = '<?php the_permalink(); ?>';

					    /* * * DON'T EDIT BELOW THIS LINE * * */
					    (function() {
					        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
					        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					    })();
					</script>
					<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					<a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>

						
				</div>

			</div>

		</div>	

	<?php endwhile; ?>

</div>

<?php get_footer(); ?>